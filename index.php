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
        <?php
            
            if (isset($_POST['submit'])) {
                $amount = $_POST['originalInput'];
                $cur1 = $_POST['country01'];
                $cur2 = $_POST['country02'];
                $newCur = $_POST['newValue'];

                if($cur1=="€" AND $cur2=="€"){
                    $newCur = $amount;
                }

                if($cur1=="$" AND $cur2=="$"){
                    $newCur = $amount;
                }

                if($cur1=="£" AND $cur2=="£"){
                    $newCur = $amount;
                }

                if($cur1=="RUB" AND $cur2=="RUB"){
                    $newCur = $amount;
                }
                
                if($cur1=="€" AND $cur2=="$"){
                    $newCur = $amount*1.23;
                }

                if($cur1=="€" AND $cur2=="£"){
                    $newCur = $amount*0.90;
                }

                if($cur1=="€" AND $cur2=="RUB"){
                    $newCur = $amount*90.76;
                }

                if($cur1=="$" AND $cur2=="€"){
                    $newCur = $amount*0.81;
                }

                if($cur1=="$" AND $cur2=="£"){
                    $newCur = $amount*0.74;
                }

                if($cur1=="$" AND $cur2=="RUB"){
                    $newCur = $amount*73.89;
                }

                if($cur1=="£" AND $cur2=="€"){
                    $newCur = $amount*1.11;
                }

                if($cur1=="£" AND $cur2=="$"){
                    $newCur = $amount*1.36;
                }

                if($cur1=="£" AND $cur2=="RUB"){
                    $newCur = $amount*100.41;
                }

                if($cur1=="RUB" AND $cur2=="€"){
                    $newCur = $amount*0.011;
                }

                if($cur1=="RUB" AND $cur2=="$"){
                    $newCur = $amount*0.014;
                }

                if($cur1=="RUB" AND $cur2=="£"){
                    $newCur = $amount*0.0100;
                }

            }
        ?>

        <form action="" method="POST">
            <div class="countries">
                <div class="country-origin country-select">
                    <label for="countryOrigin">Select a country:</label>
                    <select id="countryOrigin" name="country01">
                        <option value="€">Belgium</option>
                        <option value="$">United States</option>
                        <option value="£">United Kingdom</option>
                        <option value="RUB">Russia</option>
                    </select>
                </div>

                <div class="switch-countries">
                    <button id="switchCountries" disabled>switch!</button>
                </div>

                <div class="country-new country-select">
                    <label for="countryNew">Select another country:</label>
                    <select id="countryNew" name="country02">
                        <option value="€">Belgium</option>
                        <option value="$">United States</option>
                        <option value="£">United Kingdom</option>
                        <option value="RUB">Russia</option>
                    </select>
                </div>
            </div>

            <div class="values">
                <input type="text" placeholder="Your amount" autocomplete="on" id="inputValue" name="originalInput" value="<?php echo $amount?>">
                <input type="text" readonly id="currency01" class="currency-types" name="currency01" value="<?php echo $cur1?>">

                <p><span>=</span></p>

                <input type="text" readonly placeholder="Result" id="newValue" name="newValue" value="<?php echo $newCur?>">
                <input type="text" readonly id="currency02" class="currency-types" name="currency02" value="<?php echo $cur2?>">
            </div>

            <div class="calculate">
                <input id="submit" type="submit" name="submit" value="Go!">
            </div>
        </form>
    </div>
    
</body>
</html>

<?php

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>