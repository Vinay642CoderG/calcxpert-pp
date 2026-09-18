<?= $this->extend('layouts/main') ?>

<?php $this->section('title') ?>BMI Calculator - CalcXpert
<?php $this->endSection() ?>

<?php $this->section('meta_description') ?>Calculate your Body Mass Index (BMI) using US, metric, or other units, and
view your BMI category and healthy weight range.
<?php $this->endSection() ?>

<?php $this->section('canonical_url') ?>
<?= base_url('calculators/health/bmi') ?>
<?php $this->endSection() ?>

<?php $this->section('breadcrumb') ?>
<?= view('partials/breadcrumb', [
    'breadcrumbs' => [
        'Calculators' => base_url('calculators'),
        'Health' => base_url('calculators/health'),
        'BMI Calculator' => false,
    ],
]) ?>
<?php $this->endSection() ?>

<?php $this->section('styles') ?>
<style id="bmi-calculator-styles">
    #bmi-calculator .calculator-container {
        max-width: 960px;
        margin: 30px auto;
        padding: 0 12px
    }

    #bmi-calculator .calculator-card {
        background: #fff;
        border: 1px solid #d5d9df;
        border-radius: 12px;
        padding: 22px
    }

    #bmi-calculator .calculator-title {
        margin: 0 0 18px;
        color: #111827;
        font-size: 1.55rem;
        font-weight: 700
    }

    #bmi-calculator .nav-tabs {
        margin-bottom: 18px !important;
        border-bottom: 1px solid #94969a
    }

    #bmi-calculator .nav-tabs .nav-link {
        padding: 8px 12px;
        border: 0;
        border-bottom: 3px solid transparent;
        border-radius: 0;
        color: #4b5563;
        font-size: .9rem;
        font-weight: 600
    }

    #bmi-calculator .nav-tabs .nav-link:hover {
        color: #111827
    }

    #bmi-calculator .nav-tabs .nav-link.active {
        color: #0d6efd;
        background: transparent;
        border-bottom-color: #0d6efd
    }

    #bmi-calculator .form-label {
        margin-bottom: 5px;
        color: #374151;
        font-size: .88rem;
        font-weight: 600
    }

    #bmi-calculator .form-control,
    #bmi-calculator .form-select,
    #bmi-calculator .input-group-text {
        min-height: 32px;
        border-color: #aeb6c1
    }

    #bmi-calculator .form-control,
    #bmi-calculator .form-select {
        color: #111827
    }

    #bmi-calculator .form-control::placeholder {
        color: #8b929c
    }

    #bmi-calculator .form-control:focus,
    #bmi-calculator .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 .15rem rgba(13, 110, 253, .12)
    }

    #bmi-calculator .input-group-text {
        background: #f4f5f7;
        color: #4b5563
    }

    #bmi-calculator .action-row {
        display: flex;
        gap: 8px;
        margin-top: 18px
    }

    #bmi-calculator .action-row .btn {
        min-height: 32px;
        font-weight: 600
    }

    #bmi-calculator .error-message {
        display: none;
        margin: 12px 0 0;
        padding: 9px 12px;
        font-size: .88rem
    }

    #bmi-calculator .result-panel {
        height: 100%;
        min-height: 355px;
        padding: 20px;
        background: #f8f9fa;
        border: 1px solid #d5d9df;
        border-radius: 10px
    }

    #bmi-calculator .result-label {
        margin-bottom: 5px;
        color: #6b7280;
        font-size: .8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .03em
    }

    #bmi-calculator .bmi-main-result {
        margin: 0;
        color: #111827;
        font-size: 1.75rem;
        font-weight: 750;
        line-height: 1.2
    }

    #bmi-calculator .bmi-status {
        margin-top: 5px;
        color: #374151;
        font-size: .95rem;
        font-weight: 600
    }

    #bmi-calculator .bmi-scale-wrapper {
        position: relative;
        margin: 50px 0 24px
    }

    #bmi-calculator .bmi-scale {
        display: flex;
        width: 100%;
        height: 15px;
        overflow: hidden;
        border-radius: 20px
    }

    #bmi-calculator .zone-under {
        width: 14%;
        background: #4f91d1
    }

    #bmi-calculator .zone-normal {
        width: 26%;
        background: #43a047
    }

    #bmi-calculator .zone-over {
        width: 20%;
        background: #e9a82e
    }

    #bmi-calculator .zone-obese {
        width: 40%;
        background: #d94a4a
    }

    #bmi-calculator .bmi-pointer {
        position: absolute;
        top: -39px;
        left: 0;
        transform: translateX(-50%);
        transition: left .3s ease
    }

    #bmi-calculator .pointer-value {
        min-width: 38px;
        padding: 3px 6px;
        background: #20252b;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        font-size: .75rem;
        font-weight: 700
    }

    #bmi-calculator .pointer-arrow {
        width: 0;
        height: 0;
        margin: auto;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 6px solid #20252b
    }

    #bmi-calculator .bmi-scale-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        color: #626973;
        font-size: .7rem
    }

    #bmi-calculator .bmi-zone-names {
        display: grid;
        grid-template-columns: 14fr 26fr 20fr 40fr;
        margin-top: 5px;
        color: #555d66;
        font-size: .80rem;
        text-align: center
    }

    #bmi-calculator .result-details {
        margin-top: 18px;
        border-top: 1px solid #dce0e4
    }

    #bmi-calculator .result-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        padding: 9px 0;
        border-bottom: 1px solid #e0e3e7;
        color: #4b5563;
        font-size: .87rem
    }

    #bmi-calculator .result-row strong {
        color: #111827;
        text-align: right;
        font-weight: 650
    }

    @media(max-width:991px) {
        #bmi-calculator .result-panel {
            min-height: auto;
            margin-top: 2px
        }
    }

    @media(max-width:575px) {
        #bmi-calculator .calculator-container {
            margin: 15px auto;
            padding: 0 8px
        }

        #bmi-calculator .calculator-card {
            padding: 15px
        }

        #bmi-calculator .calculator-title {
            margin-bottom: 14px;
            font-size: 1.35rem
        }

        #bmi-calculator .nav-tabs .nav-link {
            padding: 7px 8px;
            font-size: .8rem
        }

        #bmi-calculator .result-panel {
            padding: 16px
        }

        #bmi-calculator .bmi-main-result {
            font-size: 1.45rem
        }

        #bmi-calculator .bmi-zone-names {
            font-size: ..80rem
        }
    }
</style>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<section id="bmi-calculator">
    <div class="calculator-container">
        <div id="otherFields" class="d-none mb-4 p-3 bg-white border rounded border-secondary">
            <h2 class="h5">Unit converter</h2>
            <p class="small text-secondary">Convert your height to centimeters and weight to kilograms, then enter the
                results in the fields below.</p>
            <?= view('partials/unitconverter', ['lengthTo' => 'centimeter', 'weightTo' => 'kilogram']) ?>
        </div>

        <div class="calculator-card border-secondary">
            <h1 class="calculator-title">BMI Calculator</h1>

            <div class="row g-3">
                <div class="col-lg-6">

                    <ul class="nav nav-tabs" id="unitTabs">
                        <li class="nav-item">
                            <button class="nav-link active" type="button" data-unit="us">US Units</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-unit="metric">Metric Units</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-unit="other">Other Units</button>
                        </li>
                    </ul>

                    <form id="bmiForm">
                        <div class="row g-2 mb-3">
                            <div class="col-sm-5">
                                <label class="form-label" for="age">Age <span class="text-secondary fw-normal ms-2">2 -
                                        120</span></label>
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" id="age" value="25"
                                        name="age" min="2" max="120" step="1" required>
                                    <span class="input-group-text">years</span>
                                </div>
                            </div>
                            <fieldset class="col-sm-7">
                                <legend class="form-label float-none w-auto">Gender</legend>
                                <div class="d-flex align-items-center gap-3 py-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="genderMale"
                                            value="male" checked required>
                                        <label class="form-check-label" for="genderMale">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="genderFemale"
                                            value="female" required>
                                        <label class="form-check-label" for="genderFemale">Female</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div id="usFields">
                            <div class="row g-2">
                                <div class="col-6">
                                    <label class="form-label" for="heightFeet">Height</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm" id="heightFeet"
                                            value="5" placeholder="Feet" min="0" step="1">
                                        <span class="input-group-text">ft</span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label" for="heightInches">Inches</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm" id="heightInches"
                                            value="9" placeholder="Inches" min="0" step="0.1">
                                        <span class="input-group-text">in</span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="weightPounds">Weight</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm" id="weightPounds"
                                            value="154.3" placeholder="Enter weight" min="0" step="0.1">
                                        <span class="input-group-text">lb</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="metricFields" class="d-none">
                            <div class="row g-2">
                                <div class="col-6">
                                    <label class="form-label" for="heightCm">Height</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm" id="heightCm"
                                            value="175.3" placeholder="Height" min="0" step="0.1">
                                        <span class="input-group-text">cm</span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label" for="weightKg">Weight</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm" id="weightKg"
                                            value="70" placeholder="Weight" min="0" step="0.1">
                                        <span class="input-group-text">kg</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="errorMessage" class="alert alert-danger error-message"></div>

                        <div class="action-row">
                            <button type="submit" class="btn btn-primary btn-sm flex-grow-1">Calculate</button>
                            <button type="button" id="clearBtn" class="btn btn-outline-secondary btn-sm">Clear</button>
                        </div>

                    </form>

                </div>

                <div class="col-lg-6">
                    <div class="result-panel">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="result-label mb-0">Result</div>
                            <button type="button" id="printBmiBtn" class="btn btn-outline-secondary btn-sm"
                                disabled>Print</button>
                        </div>

                        <div class="bmi-main-result" id="bmiResult">
                            BMI = —
                        </div>

                        <div class="bmi-status" id="bmiStatus">
                            Enter your height and weight
                        </div>

                        <div class="bmi-scale-wrapper">

                            <div class="bmi-pointer" id="bmiPointer" style="display:none">
                                <div class="pointer-value" id="pointerValue">0</div>
                                <div class="pointer-arrow"></div>
                            </div>

                            <div class="bmi-scale">
                                <div class="zone-under"></div>
                                <div class="zone-normal"></div>
                                <div class="zone-over"></div>
                                <div class="zone-obese"></div>
                            </div>

                            <div class="bmi-scale-labels">
                                <span>15</span>
                                <span>18.5</span>
                                <span>25</span>
                                <span>30</span>
                                <span>40+</span>
                            </div>

                            <div class="bmi-zone-names">
                                <span>Underweight</span>
                                <span>Normal</span>
                                <span>Overweight</span>
                                <span>Obese</span>
                            </div>

                        </div>

                        <div class="result-details">

                            <div class="result-row">
                                <span>Healthy BMI</span>
                                <strong>18.5 – 24.9</strong>
                            </div>

                            <div class="result-row">
                                <span>Healthy weight</span>
                                <strong id="healthyWeight">—</strong>
                            </div>

                            <div class="result-row">
                                <span>BMI Prime</span>
                                <strong id="bmiPrime">—</strong>
                            </div>

                            <div class="result-row">
                                <span>Ponderal Index</span>
                                <strong id="ponderalIndex">—</strong>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="content">
    <h2>BMI Calculator</h2>
    <p>Use our free <strong>BMI calculator</strong> to estimate your Body Mass Index from your height and weight. Your
        result can help you understand which general weight range your BMI falls into.</p>
    <p>The calculator supports metric and imperial measurements, including kilograms, centimetres, feet, inches, stones
        and pounds. It can also be used as a simple <strong>BMI calculator UK</strong> for users who prefer UK
        measurement units.</p>

    <h2>What Is BMI?</h2>
    <p>BMI stands for Body Mass Index. It is a calculation based on your height and weight that is commonly used as a
        simple screening measure for adult weight categories.</p>

    <h3>How Is BMI Calculated?</h3>
    <p>The standard BMI formula is:</p>
    <p><strong>BMI = weight (kg) ÷ height² (m)</strong></p>
    <p>For example, if a person weighs 70 kg and is 1.75 metres tall, their BMI is approximately 22.9.</p>

    <h2>BMI Chart for Adults</h2>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>BMI</th>
                    <th>Weight Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Below 18.5</td>
                    <td>Underweight</td>
                </tr>
                <tr>
                    <td>18.5–24.9</td>
                    <td>Healthy weight</td>
                </tr>
                <tr>
                    <td>25–29.9</td>
                    <td>Overweight</td>
                </tr>
                <tr>
                    <td>30 or above</td>
                    <td>Obesity</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>BMI Calculator UK</h2>
    <p>Our <strong>BMI calculator UK</strong> allows you to calculate BMI using measurements commonly used in the UK.
        Enter your height and weight and the calculator will provide your BMI automatically.</p>
    <p>You can use kilograms and centimetres with the <strong>BMI calculator kg and cm</strong> option or calculate BMI
        using feet, inches, stones and pounds.</p>

    <h2>BMI Calculator NHS Information</h2>
    <p>If you are searching for a <strong>BMI calculator NHS</strong>, please note that this calculator is an
        independent tool and is not operated, affiliated with or endorsed by the NHS.</p>
    <p>BMI can provide a useful general indication of weight relative to height, but it does not directly measure body
        fat. People with a high amount of muscle may have a higher BMI even when their body fat level is relatively low.
    </p>

    <h2>Healthy BMI Range UK</h2>
    <p>For many adults, a BMI between <strong>18.5 and 24.9</strong> is commonly described as being within the healthy
        weight range. BMI is only one measurement and should not be treated as a complete assessment of your health.</p>

    <h2>How to Use the BMI Calculator</h2>
    <ol>
        <li>Select your preferred measurement system.</li>
        <li>Enter your height.</li>
        <li>Enter your weight.</li>
        <li>Click <strong>Calculate BMI</strong>.</li>
        <li>Check your BMI result and weight category.</li>
    </ol>

    <h2>Frequently Asked Questions</h2>

    <h3>What is my BMI for my height and weight?</h3>
    <p>Enter your height and weight into the calculator above. Your BMI will be calculated automatically and displayed
        with the relevant weight category.</p>

    <h3>Can I calculate BMI using kg and cm?</h3>
    <p>Yes. The <strong>BMI calculator kg and cm</strong> option allows you to enter your weight in kilograms and your
        height in centimetres.</p>

    <h3>Can I calculate BMI using feet and inches?</h3>
    <p>Yes. You can calculate BMI using feet and inches for height and pounds or stones for weight when using imperial
        units.</p>

    <h3>What is a healthy BMI for adults?</h3>
    <p>A BMI between 18.5 and 24.9 is commonly considered to be within the healthy range for many adults. Individual
        health circumstances can differ.</p>

    <h3>Is this the official NHS BMI calculator?</h3>
    <p>No. This is an independent BMI calculator and is not part of the NHS. Users looking specifically for the official
        NHS BMI calculator should visit the NHS website.</p>

    <h3>Is BMI accurate?</h3>
    <p>BMI is useful as a general screening measurement, but it has limitations. It does not distinguish between muscle,
        fat and other components of body weight.</p>

    <h3>Is BMI calculated differently for men and women?</h3>
    <p>The standard adult BMI formula is calculated in the same way for men and women using height and weight.</p>

    <h2>About Our Online BMI Calculator</h2>
    <p>This free <strong>online BMI calculator</strong> provides a quick way to calculate BMI using metric or imperial
        measurements. Simply enter your height and weight to get your BMI result.</p>

    <p><small><strong>Health notice:</strong> This calculator is provided for general informational purposes only and
            should not be used as a medical diagnosis. Speak with a qualified healthcare professional if you have
            concerns about your weight or health.</small></p>
</section>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<script type="module">
    import convert from "https://cdn.jsdelivr.net/npm/convert@5/+esm";

    let activeUnit = "us";

    const usFields = document.getElementById("usFields");
    const metricFields = document.getElementById("metricFields");
    const otherFields = document.getElementById("otherFields");
    const errorMessage = document.getElementById("errorMessage");
    const bmiPointer = document.getElementById("bmiPointer");
    const printBmiButton = document.getElementById("printBmiBtn");
    let bmiReport = "";

    function invalidatePrint() {
        bmiReport = "";
        printBmiButton.disabled = true;
    }

    document.getElementById("bmiForm").addEventListener("input", invalidatePrint);
    document.getElementById("bmiForm").addEventListener("change", invalidatePrint);


    document.querySelectorAll("#unitTabs .nav-link").forEach(button => {
        button.addEventListener("click", () => {
            document.querySelectorAll("#unitTabs .nav-link").forEach(tab => tab.classList.remove("active"));
            button.classList.add("active");

            activeUnit = button.dataset.unit;
            invalidatePrint();

            usFields.classList.toggle("d-none", activeUnit !== "us");
            metricFields.classList.toggle("d-none", activeUnit === "us");
            otherFields.classList.toggle("d-none", activeUnit !== "other");

            hideError();
        });
    });

    function getMetricValues() {
        let heightMeters;
        let weightKg;

        if (activeUnit === "us") {
            const feet = parseFloat(document.getElementById("heightFeet").value) || 0;
            const inches = parseFloat(document.getElementById("heightInches").value) || 0;
            const pounds = parseFloat(document.getElementById("weightPounds").value);

            const totalInches = (feet * 12) + inches;

            if (totalInches <= 0 || !pounds || pounds <= 0) {
                throw new Error("Please enter a valid height and weight.");
            }

            heightMeters = convert(totalInches, "inches").to("meters");
            weightKg = convert(pounds, "pounds").to("kilograms");
        }

        if (activeUnit === "metric" || activeUnit === "other") {
            const heightCm = parseFloat(document.getElementById("heightCm").value);
            weightKg = parseFloat(document.getElementById("weightKg").value);

            if (!heightCm || heightCm <= 0 || !weightKg || weightKg <= 0) {
                throw new Error("Please enter a valid height and weight.");
            }

            heightMeters = convert(heightCm, "centimeters").to("meters");
        }

        if (!Number.isFinite(heightMeters) || !Number.isFinite(weightKg) || heightMeters <= 0 || weightKg <= 0) {
            throw new Error("Please enter valid values.");
        }

        return { heightMeters, weightKg };
    }

    function getClassification(bmi) {
        if (bmi < 16) return "Severe Thinness";
        if (bmi < 17) return "Moderate Thinness";
        if (bmi < 18.5) return "Underweight";
        if (bmi < 25) return "Normal";
        if (bmi < 30) return "Overweight";
        if (bmi < 35) return "Obese Class I";
        if (bmi < 40) return "Obese Class II";
        return "Obese Class III";
    }

    function updateBmiPointer(bmi) {
        const min = 15;
        const max = 40;
        const value = Math.min(Math.max(bmi, min), max);
        const percentage = ((value - min) / (max - min)) * 100;

        bmiPointer.style.display = "block";
        bmiPointer.style.left = `${percentage}%`;
        document.getElementById("pointerValue").textContent = bmi.toFixed(1);
    }

    function displayHealthyWeight(minKg, maxKg) {
        const output = document.getElementById("healthyWeight");

        if (activeUnit === "us") {
            const minLb = convert(minKg, "kilograms").to("pounds");
            const maxLb = convert(maxKg, "kilograms").to("pounds");
            output.textContent = `${minLb.toFixed(1)} – ${maxLb.toFixed(1)} lb`;
            return;
        }

        output.textContent = `${minKg.toFixed(1)} – ${maxKg.toFixed(1)} kg`;
    }

    document.getElementById("bmiForm").addEventListener("submit", event => {
        event.preventDefault();
        hideError();

        try {
            const { heightMeters, weightKg } = getMetricValues();

            const bmi = weightKg / (heightMeters * heightMeters);
            const minimumWeight = 18.5 * heightMeters * heightMeters;
            const maximumWeight = 24.9 * heightMeters * heightMeters;
            const bmiPrime = bmi / 25;
            const ponderalIndex = weightKg / Math.pow(heightMeters, 3);

            document.getElementById("bmiResult").innerHTML =
                `BMI = ${bmi.toFixed(1)} kg/m<sup>2</sup>`;

            document.getElementById("bmiStatus").textContent =
                getClassification(bmi);

            document.getElementById("bmiPrime").textContent =
                bmiPrime.toFixed(2);

            document.getElementById("ponderalIndex").innerHTML =
                `${ponderalIndex.toFixed(1)} kg/m<sup>3</sup>`;

            displayHealthyWeight(minimumWeight, maximumWeight);
            updateBmiPointer(bmi);
            const gender = document.querySelector('#bmiForm input[name="gender"]:checked');
            bmiReport = [
                "CalcXpert - BMI Calculator",
                "Age: " + document.getElementById("age").value + " years",
                "Gender: " + (gender ? gender.value : "Not specified"),
                "Height: " + (heightMeters * 100).toFixed(1) + " cm",
                "Weight: " + weightKg.toFixed(1) + " kg",
                "BMI: " + bmi.toFixed(1) + " kg/m\u00b2",
                "Category: " + getClassification(bmi),
                "Healthy BMI: 18.5 - 24.9",
                "Healthy weight: " + document.getElementById("healthyWeight").textContent,
                "BMI Prime: " + bmiPrime.toFixed(2),
                "Ponderal Index: " + ponderalIndex.toFixed(1) + " kg/m\u00b3"
            ].join("\n");
            printBmiButton.disabled = false;
        } catch (error) {
            showError(error.message);
        }
    });

    document.getElementById("clearBtn").addEventListener("click", () => {
        invalidatePrint();
        document.querySelectorAll("#bmiForm input").forEach(input => {
            if (input.type === "radio") {
                input.checked = false;
            } else {
                input.value = "";
            }
        });

        document.getElementById("bmiResult").textContent = "BMI = —";
        document.getElementById("bmiStatus").textContent = "Enter your height and weight";
        document.getElementById("healthyWeight").textContent = "—";
        document.getElementById("bmiPrime").textContent = "—";
        document.getElementById("ponderalIndex").textContent = "—";

        bmiPointer.style.display = "none";

        hideError();
    });

    printBmiButton.addEventListener("click", () => {
        if (!bmiReport || printBmiButton.disabled) return;
        const report = bmiReport;
        const resultCard = document.querySelector("#bmi-calculator .result-panel").cloneNode(true);
        resultCard.querySelector("#printBmiBtn").remove();
        const calculatorStyles = document.getElementById("bmi-calculator-styles").textContent;
        const frame = document.createElement("iframe");
        frame.title = "Print BMI result";
        frame.setAttribute("aria-hidden", "true");
        frame.style.cssText = "position:fixed;left:-10000px;top:0;width:800px;height:1000px;border:0;";
        frame.onload = function () {
            const printDocument = frame.contentDocument;
            const style = printDocument.createElement("style");
            style.textContent = calculatorStyles + `
                @page { size: auto; margin: 15mm; }
                * { box-sizing: border-box; print-color-adjust: exact; -webkit-print-color-adjust: exact; }
                body { margin: 0; color: #1f2937; font-family: Arial, sans-serif; line-height: 1.5; }
                h1 { margin: 0 0 4px; font-size: 24px; }
                .print-brand { margin: 0 0 20px; color: #626973; }
                .print-measurements { display: grid; grid-template-columns: 1fr 1fr; gap: 8px 24px; margin-bottom: 20px; }
                .print-measurements p { margin: 0; }
                #bmi-calculator .result-panel { height: auto; min-height: 0; padding: 24px; break-inside: avoid; }
                #bmi-calculator .bmi-pointer { transition: none; }
                #bmi-calculator .bmi-main-result { font-size: 28px; }
                #bmi-calculator .bmi-zone-names { font-size: 12px; }
            `;
            printDocument.head.appendChild(style);
            const content = printDocument.createElement("main");
            content.id = "bmi-calculator";
            const title = printDocument.createElement("h1");
            title.textContent = "BMI Calculator Result";
            const brand = printDocument.createElement("p");
            brand.className = "print-brand";
            brand.textContent = "CalcXpert";
            const measurements = printDocument.createElement("div");
            measurements.className = "print-measurements";
            report.split("\n").slice(1, 5).forEach(line => {
                const item = printDocument.createElement("p");
                item.textContent = line;
                measurements.appendChild(item);
            });
            content.append(title, brand, measurements, printDocument.importNode(resultCard, true));
            printDocument.body.appendChild(content);
            frame.contentWindow.addEventListener("afterprint", () => frame.remove(), { once: true });
            // Allow the cloned card and its scale to finish layout before printing.
            frame.contentWindow.requestAnimationFrame(() => {
                frame.contentWindow.requestAnimationFrame(() => {
                    frame.contentWindow.focus();
                    frame.contentWindow.print();
                });
            });
        };
        frame.srcdoc = "<!doctype html><html lang='en'><head><meta charset='utf-8'><title>CalcXpert - BMI Calculator</title></head><body></body></html>";
        document.body.appendChild(frame);
    });

    function showError(message) {
        invalidatePrint();
        errorMessage.textContent = message;
        errorMessage.style.display = "block";
    }

    function hideError() {
        errorMessage.textContent = "";
        errorMessage.style.display = "none";
    }
</script>
<?php $this->endSection() ?>