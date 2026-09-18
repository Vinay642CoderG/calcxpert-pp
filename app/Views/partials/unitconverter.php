<?php
// Each render is independent, including when several converters share one page.
$unitConverterId = 'uc-' . bin2hex(random_bytes(6));
?>
<div class="unit-converter-widget border rounded" data-unit-converter
     data-length-to="<?= esc($lengthTo ?? 'foot', 'attr') ?>"
     data-weight-to="<?= esc($weightTo ?? 'pound', 'attr') ?>">
    <div class="nav nav-pills flex-wrap gap-1 p-2 pb-0" aria-label="Conversion category">
        <?php foreach (['length' => 'Length', 'temperature' => 'Temperature', 'area' => 'Area', 'volume' => 'Volume', 'weight' => 'Weight'] as $type => $label): ?>
            <button class="nav-link uc-tab px-2 py-1 small<?= $type === 'length' ? ' active' : '' ?>"
                    type="button" data-type="<?= esc($type) ?>"
                    aria-pressed="<?= $type === 'length' ? 'true' : 'false' ?>"><?= esc($label) ?></button>
        <?php endforeach; ?>
    </div>
<div class="uc-body">
    <div class="uc-convert-row">
        <div class="uc-field">
            <label for="<?= esc($unitConverterId) ?>-ucFromValue">From</label>
            <div class="uc-input-group">
                <input
                    class="form-control form-control-sm"
                    type="number"
                    id="<?= esc($unitConverterId) ?>-ucFromValue" data-uc="ucFromValue"
                    value="1"
                    step="any"
                    placeholder="Enter value"
                >
                <select class="form-select form-select-sm" id="<?= esc($unitConverterId) ?>-ucFromUnit" data-uc="ucFromUnit" aria-label="From unit"></select>
            </div>
        </div>

        <button
            type="button"
            class="uc-swap"
            id="<?= esc($unitConverterId) ?>-ucSwap" data-uc="ucSwap"
            aria-label="Swap units"
            title="Swap units"
        >
            ⇄
        </button>

        <div class="uc-field">
            <label for="<?= esc($unitConverterId) ?>-ucToValue">To</label>
            <div class="uc-input-group">
                <input
                    class="form-control form-control-sm"
                    type="text"
                    id="<?= esc($unitConverterId) ?>-ucToValue" data-uc="ucToValue"
                    readonly
                >
                <select class="form-select form-select-sm" id="<?= esc($unitConverterId) ?>-ucToUnit" data-uc="ucToUnit" aria-label="To unit"></select>
            </div>
        </div>
    </div>

    <div class="uc-result" aria-live="polite" id="<?= esc($unitConverterId) ?>-ucResult" data-uc="ucResult"></div>
</div>

<style>
.unit-converter-widget .uc-body{
    padding:12px
}
.unit-converter-widget .uc-convert-row{
    display:grid;
    grid-template-columns:minmax(0,1fr) 32px minmax(0,1fr);
    gap:10px;
    align-items:end
}
.unit-converter-widget .uc-field{
    min-width:0
}
.unit-converter-widget .uc-field label{
    display:block;
    margin-bottom:6px;
    color:#374151;
    font-size:14px;
    font-weight:600
}
.unit-converter-widget .uc-input-group{
    display:grid;
    grid-template-columns:minmax(0,1fr) 145px
}
.unit-converter-widget .uc-input-group input, .unit-converter-widget .uc-input-group select{
    width:100%;
    min-width:0;
    height:32px;
    border:1px solid #aeb6c1;
    background:#fff;
    color:#111827;
    font-size:14px;
    outline:revert
}
.unit-converter-widget .uc-input-group input{
    padding:4px 8px;
    border-radius:6px 0 0 6px
}
.unit-converter-widget .uc-input-group select{
    padding:4px 28px 4px 8px;
    border-left:0;
    border-radius:0 6px 6px 0;
    cursor:pointer
}
.unit-converter-widget .uc-swap{
    width:32px;
    height:32px;
    margin:0;
    padding:0;
    border:1px solid #c7cdd4;
    border-radius:6px;
    background:#fff;
    color:#374151;
    font-size:20px;
    cursor:pointer
}
.unit-converter-widget .uc-swap:hover{
    background:#f3f4f6
}
.unit-converter-widget .uc-result{
    margin-top:14px;
    padding:8px 10px;
    border-radius:6px;
    background:#f3f6fa;
    color:#111827;
    font-size:16px;
    font-weight:600
}
@media(max-width:700px){
.unit-converter-widget .uc-convert-row{
        grid-template-columns:minmax(0,1fr);
        gap:7px
    }
.unit-converter-widget .uc-input-group{
        grid-template-columns:minmax(0,1fr) 105px
    }
.unit-converter-widget .uc-input-group input, .unit-converter-widget .uc-input-group select{
        font-size:13px
    }
.unit-converter-widget .uc-swap{
        width:32px
    }
}
</style>
<script>
(function(){
    const converter=document.currentScript.closest("[data-unit-converter]");
    if(!converter)return;

    const units={
        length:{
            meter:{name:"Meter",symbol:"m",factor:1},
            kilometer:{name:"Kilometer",symbol:"km",factor:1000},
            centimeter:{name:"Centimeter",symbol:"cm",factor:0.01},
            millimeter:{name:"Millimeter",symbol:"mm",factor:0.001},
            mile:{name:"Mile",symbol:"mi",factor:1609.344},
            yard:{name:"Yard",symbol:"yd",factor:0.9144},
            foot:{name:"Foot",symbol:"ft",factor:0.3048},
            inch:{name:"Inch",symbol:"in",factor:0.0254},
            nauticalMile:{name:"Nautical Mile",symbol:"nmi",factor:1852}
        },
        temperature:{
            celsius:{name:"Celsius",symbol:"°C"},
            fahrenheit:{name:"Fahrenheit",symbol:"°F"},
            kelvin:{name:"Kelvin",symbol:"K"}
        },
        area:{
            squareMeter:{name:"Square Meter",symbol:"m²",factor:1},
            squareKilometer:{name:"Square Kilometer",symbol:"km²",factor:1000000},
            squareCentimeter:{name:"Square Centimeter",symbol:"cm²",factor:0.0001},
            squareMillimeter:{name:"Square Millimeter",symbol:"mm²",factor:0.000001},
            hectare:{name:"Hectare",symbol:"ha",factor:10000},
            acre:{name:"Acre",symbol:"ac",factor:4046.8564224},
            squareMile:{name:"Square Mile",symbol:"mi²",factor:2589988.110336},
            squareYard:{name:"Square Yard",symbol:"yd²",factor:0.83612736},
            squareFoot:{name:"Square Foot",symbol:"ft²",factor:0.09290304},
            squareInch:{name:"Square Inch",symbol:"in²",factor:0.00064516}
        },
        volume:{
            cubicMeter:{name:"Cubic Meter",symbol:"m³",factor:1},
            liter:{name:"Liter",symbol:"L",factor:0.001},
            milliliter:{name:"Milliliter",symbol:"mL",factor:0.000001},
            cubicCentimeter:{name:"Cubic Centimeter",symbol:"cm³",factor:0.000001},
            cubicFoot:{name:"Cubic Foot",symbol:"ft³",factor:0.028316846592},
            cubicInch:{name:"Cubic Inch",symbol:"in³",factor:0.000016387064},
            usGallon:{name:"US Gallon",symbol:"gal",factor:0.003785411784},
            usQuart:{name:"US Quart",symbol:"qt",factor:0.000946352946},
            usPint:{name:"US Pint",symbol:"pt",factor:0.000473176473},
            usCup:{name:"US Cup",symbol:"cup",factor:0.0002365882365},
            fluidOunce:{name:"US Fluid Ounce",symbol:"fl oz",factor:0.0000295735295625},
            tablespoon:{name:"Tablespoon",symbol:"tbsp",factor:0.00001478676478125},
            teaspoon:{name:"Teaspoon",symbol:"tsp",factor:0.00000492892159375}
        },
        weight:{
            kilogram:{name:"Kilogram",symbol:"kg",factor:1},
            gram:{name:"Gram",symbol:"g",factor:0.001},
            milligram:{name:"Milligram",symbol:"mg",factor:0.000001},
            metricTon:{name:"Metric Ton",symbol:"t",factor:1000},
            pound:{name:"Pound",symbol:"lb",factor:0.45359237},
            ounce:{name:"Ounce",symbol:"oz",factor:0.028349523125},
            stone:{name:"Stone",symbol:"st",factor:6.35029318}
        }
    };

    const defaults={
        length:["meter",converter.dataset.lengthTo || "foot"],
        temperature:["celsius","fahrenheit"],
        area:["squareMeter","squareFoot"],
        volume:["liter","usGallon"],
        weight:["kilogram",converter.dataset.weightTo || "pound"]
    };

    let activeType="length";

    const tabs=converter.querySelectorAll(".uc-tab");
    const fromValue=converter.querySelector('[data-uc="ucFromValue"]');
    const fromUnit=converter.querySelector('[data-uc="ucFromUnit"]');
    const toValue=converter.querySelector('[data-uc="ucToValue"]');
    const toUnit=converter.querySelector('[data-uc="ucToUnit"]');
    const result=converter.querySelector('[data-uc="ucResult"]');
    const swap=converter.querySelector('[data-uc="ucSwap"]');


    function populateUnits(type){
        fromUnit.innerHTML="";
        toUnit.innerHTML="";

        Object.entries(units[type]).forEach(([key,unit])=>{
            const option1=document.createElement("option");
            option1.value=key;
            option1.textContent=`${unit.name} (${unit.symbol})`;

            const option2=option1.cloneNode(true);

            fromUnit.appendChild(option1);
            toUnit.appendChild(option2);
        });

        fromUnit.value=defaults[type][0];
        toUnit.value=defaults[type][1];

        convert();
    }

    function convertTemperature(value,from,to){
        let celsius;

        if(from==="celsius")celsius=value;
        else if(from==="fahrenheit")celsius=(value-32)*5/9;
        else celsius=value-273.15;

        if(to==="celsius")return celsius;
        if(to==="fahrenheit")return(celsius*9/5)+32;
        return celsius+273.15;
    }

    function formatNumber(value){
        if(!Number.isFinite(value))return "";

        const absolute=Math.abs(value);

        if(
            (absolute!==0&&absolute<0.000001)||
            absolute>=1000000000
        ){
            return value.toExponential(6);
        }

        return Number(
            value.toFixed(10)
        ).toLocaleString("en-US",{
            maximumFractionDigits:10
        });
    }

    function convert(){
        const value=parseFloat(fromValue.value);

        if(!Number.isFinite(value)){
            toValue.value="";
            result.textContent="Enter a value to convert.";
            return;
        }

        const fromKey=fromUnit.value;
        const toKey=toUnit.value;
        const fromData=units[activeType][fromKey];
        const toData=units[activeType][toKey];

        let converted;

        if(activeType==="temperature"){
            converted=convertTemperature(value,fromKey,toKey);
        }else{
            const baseValue=value*fromData.factor;
            converted=baseValue/toData.factor;
        }

        if(!Number.isFinite(converted)){
            toValue.value="";
            result.textContent="The conversion is outside the supported numeric range.";
            return;
        }
        const formatted=formatNumber(converted);

        toValue.value=formatted;

        result.textContent=
            `${formatNumber(value)} ${fromData.symbol} = ${formatted} ${toData.symbol}`;
    }

    tabs.forEach(tab=>{
        tab.addEventListener("click",function(){
            tabs.forEach(item=>{
                item.classList.remove("active");
                item.setAttribute("aria-pressed","false");
            });
            this.classList.add("active");
            this.setAttribute("aria-pressed","true");

            activeType=this.dataset.type;
            fromValue.value="1";

            populateUnits(activeType);
        });
    });

    fromValue.addEventListener("input",convert);
    fromUnit.addEventListener("change",convert);
    toUnit.addEventListener("change",convert);

    swap.addEventListener("click",function(){
        const previousFrom=fromUnit.value;

        fromUnit.value=toUnit.value;
        toUnit.value=previousFrom;

        if(toValue.value!==""){
            const cleanValue=toValue.value.replace(/,/g,"");
            const numericValue=parseFloat(cleanValue);

            if(Number.isFinite(numericValue)){
                fromValue.value=numericValue;
            }
        }

        convert();
    });

    populateUnits(activeType);
})();
</script>
</div>
