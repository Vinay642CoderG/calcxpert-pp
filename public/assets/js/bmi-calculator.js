/**
 * BMI Calculator
 *
 * Uses Convert.js (https://convert.js.org/) for all unit conversions.
 * Supports three tabs: US Units, Metric Units, and Other Units.
 *
 * The "Other Units" tab embeds the reusable UnitConverter component
 * (window.UnitConverter) so that height/weight can be converted from
 * any supported unit and then used in the BMI calculation.
 */

import convert from '../../convertjs/convert.js';

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | Element references
    |--------------------------------------------------------------------------
    */

    // Shared result elements
    const bmiValue = document.getElementById('bmi-value');
    const bmiCategory = document.getElementById('bmi-category');
    const marker = document.getElementById('bmi-marker');

    // Tab navigation
    const tabItems = document.querySelectorAll('#bmi-tabs [data-tab]');
    const tabPanels = document.querySelectorAll('.bmi-tab-panel');

    // Metric form elements
    const metricForm = document.getElementById('bmi-form');
    const ageInput = document.getElementById('age');
    const genderInput = document.getElementById('gender');
    const weightInput = document.getElementById('weight');
    const heightInput = document.getElementById('height');
    const heightUnitInput = document.getElementById('height-unit');
    const weightUnitInput = document.getElementById('weight-unit');

    // US form elements
    const usForm = document.getElementById('bmi-form-us');
    const usAgeInput = document.getElementById('us-age');
    const usGenderInput = document.getElementById('us-gender');
    const usHeightFtInput = document.getElementById('us-height-ft');
    const usHeightInInput = document.getElementById('us-height-in');
    const usWeightInput = document.getElementById('us-weight');

    // Other Units elements
    const heightConverterEl = document.getElementById('height-converter');
    const weightConverterEl = document.getElementById('weight-converter');
    const useConvertedBtn = document.getElementById('use-converted-btn');

    /*
    |--------------------------------------------------------------------------
    | Tab switching
    |--------------------------------------------------------------------------
    */

    function switchTab(tabName) {
        tabItems.forEach(function (item) {
            item.classList.toggle('active', item.getAttribute('data-tab') === tabName);
        });

        tabPanels.forEach(function (panel) {
            panel.classList.toggle('active', panel.getAttribute('id') === tabName + '-panel');
        });
    }

    tabItems.forEach(function (item) {
        item.addEventListener('click', function () {
            const tabName = this.getAttribute('data-tab');
            switchTab(tabName);
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Unit conversion helpers (using Convert.js)
    |
    | All internal calculations use metric units:
    |   height - meters (m)
    |   weight - kilograms (kg)
    |
    | Convert.js is imported as an ES module at the top of this file.
    |--------------------------------------------------------------------------
    */

    function convertValue(value, fromUnit, toUnit) {
        return convert(value, fromUnit).to(toUnit);
    }

    function heightToMeters(value, unit) {
        return convertValue(value, unit, 'm');
    }

    function weightToKg(value, unit) {
        return convertValue(value, unit, 'kg');
    }

    /*
    |--------------------------------------------------------------------------
    | Calculate BMI
    |--------------------------------------------------------------------------
    */

    function calculateBMI(weightKg, heightMeters) {
        return weightKg / (heightMeters * heightMeters);
    }

    /*
    |--------------------------------------------------------------------------
    | BMI Category
    |--------------------------------------------------------------------------
    */

    function getBMICategory(bmi) {
        if (bmi < 18.5) {
            return {
                name: 'Underweight',
                color: '#3b82f6',
                bg: 'rgba(59, 130, 246, 0.12)'
            };
        }

        if (bmi < 25) {
            return {
                name: 'Normal',
                color: '#22c55e',
                bg: 'rgba(34, 197, 94, 0.12)'
            };
        }

        if (bmi < 30) {
            return {
                name: 'Overweight',
                color: '#f59e0b',
                bg: 'rgba(245, 158, 11, 0.12)'
            };
        }

        return {
            name: 'Obese',
            color: '#ef4444',
            bg: 'rgba(239, 68, 68, 0.12)'
        };
    }

    /*
    |--------------------------------------------------------------------------
    | Convert BMI to horizontal position percentage
    |
    | Scale represents BMI from 15 to 40.
    |
    | 15   = 0%
    | 18.5 = 14%
    | 25   = 40%
    | 30   = 60%
    | 40   = 100%
    |
    |--------------------------------------------------------------------------
    */

    function getMarkerPosition(bmi) {
        const minBMI = 15;
        const maxBMI = 40;

        const safeBMI = Math.min(Math.max(bmi, minBMI), maxBMI);

        return ((safeBMI - minBMI) / (maxBMI - minBMI)) * 100;
    }

    /*
    |--------------------------------------------------------------------------
    | Update result
    |--------------------------------------------------------------------------
    */

    function updateResult(bmi) {
        const category = getBMICategory(bmi);
        const position = getMarkerPosition(bmi);

        bmiValue.textContent = 'BMI = ' + bmi.toFixed(1) + ' kg/m\u00B2';
        bmiCategory.textContent = '(' + category.name + ')';
        bmiCategory.style.color = category.color;
        bmiCategory.style.backgroundColor = category.bg;
        marker.style.left = position + '%';
    }

    function showError(message) {
        bmiValue.textContent = '--';
        bmiCategory.textContent = '(' + message + ')';
        bmiCategory.style.color = '#ef4444';
        bmiCategory.style.backgroundColor = 'rgba(239, 68, 68, 0.12)';
        marker.style.left = '0%';
    }

    function resetResult() {
        bmiValue.textContent = '--';
        bmiCategory.textContent = '(Enter details)';
        bmiCategory.style.color = '#6b7280';
        bmiCategory.style.backgroundColor = '#f3f4f6';
        marker.style.left = '0%';
    }

    /*
    |--------------------------------------------------------------------------
    | Validation helpers
    |--------------------------------------------------------------------------
    */

    function validateAge(age) {
        return age && age > 0 && age <= 150;
    }

    function validateGender(gender) {
        return gender && gender !== '';
    }

    function validateHeight(heightMeters) {
        return heightMeters >= 0.3 && heightMeters <= 3;
    }

    function validateWeight(weightKg) {
        return weightKg >= 1 && weightKg <= 500;
    }

    /*
    |--------------------------------------------------------------------------
    | Metric form submission
    |--------------------------------------------------------------------------
    */

    metricForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const age = Number(ageInput.value);
        const gender = genderInput.value;
        const weight = Number(weightInput.value);
        const height = Number(heightInput.value);
        const heightUnit = heightUnitInput.value;
        const weightUnit = weightUnitInput.value;

        if (!validateAge(age) || !validateGender(gender)) {
            showError('Enter valid values');
            return;
        }

        if (!weight || weight <= 0) {
            showError('Enter valid values');
            return;
        }

        if (!height || height <= 0) {
            showError('Enter valid values');
            return;
        }

        const heightMeters = heightToMeters(height, heightUnit);
        const weightKg = weightToKg(weight, weightUnit);

        if (!validateHeight(heightMeters) || !validateWeight(weightKg)) {
            showError('Enter valid values');
            return;
        }

        const bmi = calculateBMI(weightKg, heightMeters);
        updateResult(bmi);
    });

    metricForm.addEventListener('reset', function () {
        setTimeout(function () {
            resetResult();
            heightUnitInput.value = 'cm';
            weightUnitInput.value = 'kg';
        }, 0);
    });

    /*
    |--------------------------------------------------------------------------
    | US Units form submission
    |
    | Height is entered as feet + inches. We convert the total inches to
    | meters using Convert.js.
    |--------------------------------------------------------------------------
    */

    usForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const age = Number(usAgeInput.value);
        const gender = usGenderInput.value;
        const ft = Number(usHeightFtInput.value);
        const inches = Number(usHeightInInput.value);
        const weightLbs = Number(usWeightInput.value);

        if (!validateAge(age) || !validateGender(gender)) {
            showError('Enter valid values');
            return;
        }

        if (!weightLbs || weightLbs <= 0) {
            showError('Enter valid values');
            return;
        }

        if (!ft || ft <= 0) {
            showError('Enter valid values');
            return;
        }

        // Convert total height to inches, then to meters
        const totalInches = ft * 12 + (inches || 0);
        const heightMeters = heightToMeters(totalInches, 'in');
        const weightKg = weightToKg(weightLbs, 'lb');

        if (!validateHeight(heightMeters) || !validateWeight(weightKg)) {
            showError('Enter valid values');
            return;
        }

        const bmi = calculateBMI(weightKg, heightMeters);
        updateResult(bmi);
    });

    usForm.addEventListener('reset', function () {
        setTimeout(function () {
            resetResult();
        }, 0);
    });

    /*
    |--------------------------------------------------------------------------
    | Other Units tab — embed reusable UnitConverter components
    |
    | The height converter is pre-set to convert to cm (metric height unit).
    | The weight converter is pre-set to convert to kg (metric weight unit).
    |
    | When the user clicks "Use Converted Values in BMI", the converted
    | values are placed into the Metric Units form and the tab switches
    | to Metric Units so the user can review and calculate.
    |--------------------------------------------------------------------------
    */

    let heightConverter = null;
    let weightConverter = null;

    function initConverters() {
        if (!heightConverterEl || !weightConverterEl) {
            return;
        }

        // Height converter — default to length, convert to cm
        heightConverter = new window.UnitConverter(heightConverterEl, {
            defaultCategory: 'length',
            useButton: false,
            onConvert: function (result) {
                // Store the latest converted height in cm
                heightConverter._lastResult = result;
            }
        });

        // Set the "to" unit to cm for height
        heightConverter.setCategory('length');
        const heightToSelect = heightConverter.el.toUnit;
        for (let i = 0; i < heightToSelect.options.length; i++) {
            if (heightToSelect.options[i].value === 'cm') {
                heightToSelect.selectedIndex = i;
                heightConverter.state.toUnit = 'cm';
                break;
            }
        }

        // Weight converter — default to weight, convert to kg
        weightConverter = new window.UnitConverter(weightConverterEl, {
            defaultCategory: 'weight',
            useButton: false,
            onConvert: function (result) {
                weightConverter._lastResult = result;
            }
        });

        weightConverter.setCategory('weight');
        const weightToSelect = weightConverter.el.toUnit;
        for (let i = 0; i < weightToSelect.options.length; i++) {
            if (weightToSelect.options[i].value === 'kg') {
                weightToSelect.selectedIndex = i;
                weightConverter.state.toUnit = 'kg';
                break;
            }
        }
    }

    function useConvertedValues() {
        if (!heightConverter || !weightConverter) {
            return;
        }

        const heightResult = heightConverter._lastResult;
        const weightResult = weightConverter._lastResult;

        if (!heightResult || !weightResult) {
            showError('Convert values first');
            return;
        }

        if (heightResult.result === null || weightResult.result === null) {
            showError('Enter valid values');
            return;
        }

        // Populate the Metric Units form with converted values
        heightInput.value = heightResult.result;
        heightUnitInput.value = 'cm';

        weightInput.value = weightResult.result;
        weightUnitInput.value = 'kg';

        // Switch to Metric Units tab
        switchTab('metric-units');

        // Trigger a conversion so the result updates
        const heightMeters = heightToMeters(heightResult.result, 'cm');
        const weightKg = weightToKg(weightResult.result, 'kg');

        if (!validateHeight(heightMeters) || !validateWeight(weightKg)) {
            showError('Enter valid values');
            return;
        }

        const bmi = calculateBMI(weightKg, heightMeters);
        updateResult(bmi);
    }

    if (useConvertedBtn) {
        useConvertedBtn.addEventListener('click', useConvertedValues);
    }

    /*
    |--------------------------------------------------------------------------
    | Initialize converters when the Other Units tab is shown
    |--------------------------------------------------------------------------
    */

    // Initialize converters lazily when the Other Units tab is first activated
    let convertersInitialized = false;

    tabItems.forEach(function (item) {
        item.addEventListener('click', function () {
            const tabName = this.getAttribute('data-tab');

            if (tabName === 'other-units' && !convertersInitialized) {
                initConverters();
                convertersInitialized = true;
            }
        });
    });

    // Also initialize if the page loads directly on the other-units tab
    if (document.querySelector('#other-units-panel.active')) {
        initConverters();
        convertersInitialized = true;
    }

});
