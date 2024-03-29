<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="mask-icon" type="image/x-icon" href="" color="#111" />

    <title>Sip calculator</title>

    <style>
        .header {
            text-align: center;
            font-size: 30px;
            font-family: monospace;
        }
        
        .page-container {
            margin: 1% 20%;
            font-size: 16px;
        }
        
        .switch-container {
            display: flex;
            padding-left: 50px;
            font-family: monospace;
            justify-content: center;
        }
        
        .switch-container>div {
            margin: 1% 10% 3% 0;
        }
        
        .input-container {
            display: flex;
            font-family: monospace;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: center;
        }
        
        .input-container>div {
            margin: 1% 5% 0 0;
        }
        
        .result {
            padding: 10% 0 0 0;
            font-size: 24px;
            font-family: monospace;
        }
        
        .result-container {
            /* display: flex; */
            padding-left: 60px;
            font-family: monospace;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: center;
        }
        
        .btn-calculate {
            font-family: monospace;
            text-align: center;
        }
        
        .btn-calculate>button {
            height: 35px;
            margin-right: 12%;
            border-radius: 10px;
            border: 2px solid #000000;
            background-color: #000000;
            border-color: #000000;
            color: white;
            font-size: 15px;
            width: 125px;
            cursor: pointer;
        }
        
        .body-background {
            background-color: white;
        }
        
        .currency {
            background: rgb(0, 0, 0);
            color: white;
            border-radius: 10px;
        }
        
        #total {
            border: 1px solid;
        }
        
        #wealth-gained {
            border: 1px solid;
        }
        
        #maturity-value {
            border: 1px solid;
        }
        
        #investment {
            height: 30px;
            border-radius: 9px;
            border-color: #333;
        }
        
        #years {
            height: 30px;
            border-radius: 9px;
            border-color: #333;
        }
        
        #return-rate {
            height: 30px;
            border-radius: 9px;
            border-color: #333;
        }
    </style>

</head>

<body translate="no">
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="sipcalculatorCss.css">
        <script type="text/javascript" src="sipcalculatorJs.js"></script>
    </head>

    <body class="body-background">
        <div class="header">Mutual Fund Investment Calculator</div>
        <div class="page-container">
            <div class="switch-container">
                <div class="radio-button">
                    <label for="sip">SIP</label>
                    <input type="radio" checked name="checked" value="SIP">
                    <label for="lumpsum">LumpSum</label>
                    <input type="radio" name="checked" value="LumpSum">
                </div>
                <div class="dropdown">
                    Currency
                    <select onchange="currencyChange(this)" id="currency" class="currency">
                        <!-- &#8377; -->
                        <option value="Rs">&#8377; &nbsp;INR</option>
                        <option value="$">&#128176;USD</option>
                        <!-- &#x24; -->
                    </select>
                </div>
            </div>
            <div class="input-container">
                <div>
                    <div>Monthly Investment &#10067 </div>
                    <br/>
                    <div><input id="investment" type="text" onchange="commas(this)" /></div>
                    <br/>
                    <div>Number of Years &#10067</div>
                    <br/>
                    <div><input id="years" type="number"></div>
                    <br/>
                    <div>Expected Rate of Return &#10067</div>
                    <br/>
                    <div><input id="return-rate" type="text" onchange="percentage(this)" )/></div>
                </div>
            </div>
            </br/>
            <div class="btn-calculate">
                <button type="button" onclick="calculateResult()">
                    Calculate
                </button>
            </div>
            </br/>
            <div style="display: flex;">
                <div class="result">Result :</div>
                <div class="result-container">
                    <div>Monthly Investment for <span id="mode-1">SIP</span></div>
                    <br/>
                    <div><span>Rs.</span>&nbsp;<span id="input-1"></span></div>
                    <br/>
                    <div>Number of Years <span id="mode-2">SIP</span></div>
                    <br/>
                    <div><span>Years:</span>&nbsp;<span id="input-2"></span></div>
                    <br/>
                    <div>Expected Rate of Return <span id="mode-3">SIP</span></div>
                    <br/>
                    <div><span>%:</span>&nbsp;<span id="input-3"></span></div>
                </div>
                <div class="result-container">
                    <div>Total Investment 💸</div>
                    <br/>
                    <div><span id="currency-change-1">Rs.</span>&nbsp;<span id="total"></span></div>
                    <br/>
                    <div>Wealth Gained 💸</div>
                    <br/>
                    <div><span id="currency-change-2">Rs.</span>&nbsp;<span id="wealth-gained"></span></div>
                    <br/>
                    <div>Maturity Value 💸</div>
                    <br/>
                    <div><span id="currency-change-3">Rs.</span>&nbsp;<span id="maturity-value"></span></div>
                </div>
            </div>
            <br/>

        </div>
        </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-1187734967642566"
     data-ad-slot="6170161910"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>

    </html>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>


    <script id="rendered-js">
        calculateResult = () => {
            let amountValue = document.getElementById("investment").value;
            let amountWithComma = amountValue.split(" ")[0];
            let amount = parseInt(amountWithComma.split(',').join(''));
            document.getElementById("input-1").innerHTML = isNaN(amount) ? 0 : amount;

            let years = document.getElementById("years").value;

            document.getElementById("input-2").innerHTML = years.length === 0 ? "0" : years;


            let returnRateValue = document.getElementById("return-rate").value;
            let returnRateWithComma = returnRateValue.split(" ")[0];
            let returnRate = parseInt(returnRateWithComma.split(',').join(''));
            document.getElementById("input-3").innerHTML = isNaN(returnRate) ? 0 : returnRate;

            let checkedValue = document.getElementsByName('checked')[0].checked;
            let wealthGained = 0;
            total = 0;
            maturityValue = 0;

            if (document.getElementsByName('checked')[0].checked) {
                document.getElementById("mode-1").innerHTML = document.getElementsByName('checked')[0].value;
                document.getElementById("mode-2").innerHTML = document.getElementsByName('checked')[0].value;
                document.getElementById("mode-3").innerHTML = document.getElementsByName('checked')[0].value;

            }
            if (document.getElementsByName('checked')[1].checked) {
                document.getElementById("mode-1").innerHTML = document.getElementsByName('checked')[1].value;
                document.getElementById("mode-2").innerHTML = document.getElementsByName('checked')[1].value;
                document.getElementById("mode-3").innerHTML = document.getElementsByName('checked')[1].value;
            }
            if (checkedValue) {
                wealthGained = Math.round((Math.pow(1 + (Math.pow(1 + returnRate / 100, 1 / 12) - 1), years * 12) - 1) / (Math.pow(1 + returnRate / 100, 1 / 12) - 1) * amount);
                total = amount * 12 * years;
            } else {
                total = amount;
                wealthGained = Math.round(Math.pow(1 + returnRate / 100, years) * amount);
            }

            maturityValue = wealthGained - total;
            total = total.toString();
            total = total.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            wealthGained = wealthGained.toString();
            wealthGained = wealthGained.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            maturityValue = maturityValue.toString();
            maturityValue = maturityValue.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("investment").value = '';
            document.getElementById("years").value = '';
            document.getElementById("return-rate").value = '';
            console.log(total, typeof total);
            document.getElementById("total").innerHTML = total === "NaN" ? "0" : total;
            document.getElementById("wealth-gained").innerHTML = wealthGained === "NaN" ? "0" : wealthGained;
            document.getElementById("maturity-value").innerHTML = maturityValue === "NaN" ? "0" : maturityValue;
        };

        currencyChange = () => {
            let selectedValue = currency.value;
            document.getElementById("currency-change-1").innerHTML = selectedValue;
            document.getElementById("currency-change-2").innerHTML = selectedValue;
            document.getElementById("currency-change-3").innerHTML = selectedValue;

        };

        commas = x => {
            let amount = document.getElementById("investment").value;
            let temp = amount.split(" ");
            if (temp.includes("Rs")) {
                amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            } else {
                amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                document.getElementById("investment").value = amount.concat(' ').concat('Rs');
            }
        };
        percentage = x => {
            let value = document.getElementById("return-rate").value;
            let temp = value.split(" ");
            if (temp.length < 2)
                document.getElementById("return-rate").value = value.concat(' ').concat('%');
        };
    </script>



<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-1187734967642566"
     data-ad-slot="6170161910"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>

</html>