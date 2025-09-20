<?php 
require_once 'item.php';
session_start();
$totalPrice = 0;

for ($i = 0; $i < count($_SESSION['itemList']); $i++){
    $totalPrice += $_SESSION['itemList'][$i]->getQty() * $_SESSION['itemList'][$i]->getPrice();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <h1>Provide Billing Information</h1>
    <link href="assets/css/checkoutStyle.css" rel="stylesheet">

</head>
<body>
    <!-- Billing info -->
    <div id = 'billing'>
        <h4 id = 'billingTitle'>Billing address</h4>
        <div id = 'fName'>
            <label><b>First Name</b><br><input></label>
        </div>

        
        <div id = 'lName'>
            <label><b>Last Name</b><br><input></label>
        </div>

        <br>

        <div id = 'uName'>
            <label><b>Username</b><br><input placeholder = 'Username'></label>
        </div>

        <br>

        <div id = 'email'>
            <label><b>Email</b> (Optional)<br><input placeholder = 'you@example.com'></label>
        </div>

        <br>

        <div id = 'address'>
            <label><b>Address</b><br><input placeholder = '1234 Main St'></label>
        </div>

        <br>

        <div id = 'address2'>
            <label><b>Address</b> 2 (Optional)<br><input placeholder = 'Apartment or suite'></label>
        </div>

        <br>

        <div>
            <div id = 'country'>
                <label><b>Country</b><br><input list = 'Country' placeholder = 'Choose...'></label>
                <datalist id = 'Country'> <!--This was painful to do-->
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angolia</option>
                    <option>Anguilla</option>
                    <option>Antigua and Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>The Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia and Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Islands</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cabo Verde</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Central Aftrican Republic</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Cocos Islands</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Democratic Republic of Congo</option>
                    <option>Republic of Congo</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Côte d’Ivoire</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Curaçao</option>
                    <option>Curacao</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Bjibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Savador</option>
                    <option>Equatorial Guinear</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Eswatini</option>
                    <option>Ethiopia</option>
                    <option>Falkland Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>The Gambia</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Gungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>North Korea</option>
                    <option>South Korea</option>
                    <option>Kosovo</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montenegro</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Myanmar</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>Niue</option>
                    <option>North Macedonia</option>
                    <option>Northern Marina Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Palestine</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Pitcairn Islands</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Réunion</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts and Nevis</option>
                    <option>Saint Lucia</option>
                    <option>Saint-Pierre and Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome and Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Sint Maarten</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Aftrica</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>South Sudan</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tokelau</option>
                    <option>Tonga</option>
                    <option>Trinidad and Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Tuvalu</option>
                    <option>Turks and Caicos Islands</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United states</option>
                    <option>United States Virgin Islands</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Vatican City</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Wallis and Futuna</option>
                    <option>Est Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </datalist>
            </div>

            <div id = 'state'>
                <label><b>State</b><br><input list = 'State' placeholder = 'Choose...'></label>
                <datalist id = 'State'> 
                    <option>New South Wales</option>
                    <option>Queensland</option>
                    <option>South Australia</option>
                    <option>Tasmania</option>
                    <option>Victoria</option>
                    <option>Western Australia</option>
                    <!-- Ones below technically are not states -->
                    <option>Australian Capitol Territory</option>
                    <option>Northern Territory</option>
                    <!--I am not adding more states, ones not from Australia can be manully typed-->
                </datalist>
            </div>

            <div id = 'zip'>
                <label><b>Zip</b><br><input></label>
            </div>

        </div>

        <br>
        <div id = 'cBoxes'>
            <br>
            <div>
                <label><input type = 'checkbox'>Shipping address is the same as my billing address</label>
            </div>

            <div>
                <label><input type = 'checkbox'>Save this information for next time</label>
            </div>
        </div>
    </div>


    <!-- Payment info -->
     <div id = 'pay'>
        <h4 id = 'payTitle'>Select A Payment Option</h4>
            <input type = 'radio' onclick = 'selectPaypal()' id = 'paypal'><img src = 'assets/img/paypalLogo.png' alt = '' onclick = 'selectPaypal()'><br> <!-- Paypal -->
            <br>
            <input type = 'radio' onclick = 'selectGPay()' id = 'gPay'><img src = 'assets/img/gPayLogo.png' alt = '' onclick = 'selectGPay()''><br> <!-- GPay -->
            <br>
            <input type = 'radio' onclick = 'selectVisa()' id = 'visa'><img src = 'assets/img/visaLogo.png' onclick = 'selectVisa()''><br> <!-- Visa -->
            <br>
            <input type = 'radio' onclick = 'selectMastercard()' id = 'mastercard'><img src = 'assets/img/mastercardLogo.png' onclick = 'selectMastercard()''> <!-- Mastercard -->
            <br>
            <button id = 'checkout'>Continue to checkout</button>
     </div>
</body>
</html>
<!-- WILL DO APPLE PAY TOO. POSSIBLY INSTEAD OF VISA OR MASTERCARD -->
<script>
    function selectPaypal(){
        document.getElementById('paypal').checked = true;
        document.getElementById('gPay').checked = false;
        document.getElementById('visa').checked = false;
        document.getElementById('mastercard').checked = false;
    }
    function selectGPay(){
        document.getElementById('gPay').checked = true;
        document.getElementById('paypal').checked = false;
        document.getElementById('visa').checked = false;
        document.getElementById('mastercard').checked = false;
    }
    function selectVisa(){
        document.getElementById('visa').checked = true;
        document.getElementById('gPay').checked = false;
        document.getElementById('paypal').checked = false;
        document.getElementById('mastercard').checked = false;
    }
    function selectMastercard(){
        document.getElementById('mastercard').checked = true;
        document.getElementById('gPay').checked = false;
        document.getElementById('paypal').checked = false;
        document.getElementById('visa').checked = false;
    }

</script>