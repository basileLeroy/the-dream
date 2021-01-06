<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Valuta Calc</title>
</head>
<body>

    <header>
        <div class="page-title">
            <h1>Valuta Calculator</h1>
        </div>
    </header>

    <div class="box-container">
        <form action="">
            <div class="countries">
                <div class="country-origin country-select">
                    <label for="countryOrigin">Select a country:</label>
                    <select id="countryOrigin" name="country01">
                        <option value="BE">Belgium</option>
                        <option value="US">United States</option>
                        <option value="UK">United Kingdom</option>
                        <option value="RU">Russia</option>
                    </select>
                </div>

                <div class="switch-countries">
                    <button id="switchCountries">switch!</button>
                </div>

                <div class="country-new country-select">
                    <label for="countryNew">Select another country:</label>
                    <select id="countryNew" name="country02">
                        <option value="BE">Belgium</option>
                        <option value="US">United States</option>
                        <option value="UK">United Kingdom</option>
                        <option value="RU">Russia</option>
                    </select>
                </div>
            </div>

            <div class="values">
                <input type="text" placeholder="Your amount" id="inputValue" name="originalInput">
                <input type="text" readonly id="currency01" class="currency-types" name="currency01">

                <p><span>=</span></p>

                <input type="text" placeholder="Result" id="newValue" name="newValue">
                <input type="text" readonly id="currency02" class="currency-types" name="currency02">
            </div>

            <div class="calculate">
                <button id="calculate">Go!</button>
            </div>
        </form>
    </div>
    
</body>
</html>