<?php include("../../conf.php");?>
<?php if(isset($_GET['getSipiihig']) && $_GET['getSipiihig']=="4cxsa"){?>
<style type="text/css">
    .checkout_g4356{width: 100%;padding: 16px;display: flex;}
    .checkout_g4356 h2{margin:3lkin4px 0 19px}
    .checkout_g4356 input,.checkout_g4356 select{width: 100%;margin-bottom:12px;padding:16px 12px;border-radius: 6px;border: 1px solid var(--grey)}
    .checkout_createaccount{display: flex;font-size:12px;padding:5px 0;margin-bottom:17px;align-items: center;}
    .checkout_createaccount>label>input{display:none;}
    .checkout_createaccount>label>.checkout_checkker{width:20px;border:1px solid #ccc;height: 20px;margin-right:9px;cursor: pointer;transition:0.21s all linear;border-radius:5px}
    .checkout_createaccount>label>input:checked + .checkout_checkker{box-shadow: 0 0 0 0.7142857142857143em rgb(230,172,185) inset;} 
    .savenow_m47864now{cursor: pointer;background:var(--bg-color);color:#fff}
</style>

 
    <?php $quantityTpriceArr=tools::countQualCart("quantityprice");
        $addresss=session::user()->address;
    ?>
<div class="checkout_g4356">
    <div class="checkout_g4356_inner">
        <div>
            <input type="text" autocomplete="on" name="email" placeholder="Email *" value="<?php echo $addresss->shippingEmail;?>" />
            <div class="checkout_createaccount"><label><input type="checkbox" name="createaccount"/><div class="checkout_checkker"></div></label> <span>Create an account to earn points.</span></div>
        </div>

        <h2>Delivery Address</h2>
        <select name="countryCode" autocomplete="shipping country">
            <option value="US">United States</option><option value="GB">United Kingdom</option><option value="AU">Australia</option><option value="FR">France</option><option value="CA">Canada</option><option disabled="" value="">---</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AG">Antigua &amp; Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AC">Ascension Island</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia &amp; Herzegovina</option><option value="BW">Botswana</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czechia</option><option value="CI">Côte d’Ivoire</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="XK">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao SAR</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MK">North Macedonia</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé &amp; Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia &amp; South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="BL">St. Barthélemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts &amp; Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre &amp; Miquelon</option><option value="VC">St. Vincent &amp; Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard &amp; Jan Mayen</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad &amp; Tobago</option><option value="TA">Tristan da Cunha</option><option value="TN">Tunisia</option><option value="TR">Türkiye</option><option value="TM">Turkmenistan</option><option value="TC">Turks &amp; Caicos Islands</option><option value="TV">Tuvalu</option><option value="UM">U.S. Outlying Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis &amp; Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>

        <div style="display: flex;justify-content: space-between;">
            <input type="text" name="fname" placeholder="First name *" value="<?php echo $addresss->shippingFname;?>" />

            <input type="text" name="lname" placeholder="Last Name *" value="<?php echo $addresss->shippingLname;?>" />
        </div>

        <div style="display: flex;justify-content: space-between;">
            <input type="text" name="streetaddress" placeholder="Street Address *" value="<?php echo $addresss->shippingStreet;?>" style="width:70%;" />
            <input type="text" name="streetapt" placeholder="Apt" value="<?php echo $addresss->shippingApt;?>" style="width:30%;" />
        </div>

        <div style="display: flex;justify-content: space-between;">
            <input type="text" name="city" placeholder="City *"  value="<?php echo $addresss->shippingCity;?>"/>

            <input type="text" name="state" placeholder="State *"  value="<?php echo $addresss->shippingState;?>"/>

            <input type="text" name="zippostal" placeholder="zipcode/postal *" value="<?php echo $addresss->shippingZipPostal;?>" />
        </div>
        
        <input type="number" name="phone" placeholder="Phone Number" autocomplete="phone" value="<?php echo $addresss->shippingPhonel;?>" />

        <input class="savenow_m47864now" type="button" name="asanull" value="Save Address"/>
    </div>
</div> 

<script type="text/javascript">
     $('.checkout_g4356_inner input').on('input', function() {
        // Your code to handle value change goes here
        $(this).css("border","1px solid var(--grey)");
    });

    $(".savenow_m47864now").click(function(){
        var ee=$('[name="email"]'),
        fn=$('[name="fname"]'),
        ln=$('[name="lname"]'),
        sa=$('[name="streetaddress"]'),
        ap=$('[name="streetapt"]'),
        ct=$('[name="city"]'),
        st=$('[name="state"]'),
        zp=$('[name="zippostal"]'),err=false,emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
        ph=$('[name="phone"]');
  


        if(ee.val().trim().length < 5 || !ee.val().match(emailRegex)){
            ee.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(fn.val().trim().length < 2){
            fn.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(ln.val().trim().length < 2){
            ln.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(sa.val().trim().length < 6){
            sa.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(ct.val().trim().length < 4){
            ct.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(st.val().trim().length < 4){
            st.css("border","1.8px solid var(--err-red)");err=true;
        }
        if(zp.val().trim().length < 5){
            zp.css("border","1.8px solid var(--err-red)");err=true;
        }

        if(err){
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return;
        }else{
            var tt = {
                 "shippingEmail":ee.val().trim(),
                 "shippingFname":fn.val().trim(),
                 "shippingLname":ln.val().trim(),
                 "shippingStreet":sa.val().trim(),
                 "shippingApt":ap.val().trim(),
                 "shippingCity":ct.val().trim(),
                 "shippingState":st.val().trim(),
                 "shippingZipPostal":zp.val().trim(),
                 "shippingPhonel":ph.val().trim(),
            }

             $.post("a/ig/apy.php", {
                    o:"saveshippingaddress", 
                    avi: JSON.stringify(tt),
                    wemail:ee.val().trim(),

                }).done(function(data) {
                    if(data.code == 301){
                        window.location.href = data.message;
                    }else{
                        alert(data.message);
                    }
                  })
                  .fail(function(jqXHR, textStatus, errorThrown) {
                    console.error("addcart-failed:", textStatus, errorThrown);
                  }); 
        }

    });
</script>
<?php }else if(isset($_GET['lke86j']) && $_GET['lke86j']=="e0gay3"){?>

    <style type="text/css">
        .logina1{position: fixed;top: 0;left: 0; background:rgb(0 0 0 / 66%);height: 100%;width: 100%;
                display:flex;justify-content: center;align-items: center;}
        .ban98acv{max-width:400px;border: 1px solid var(--grey);;background:#fff;width: 100%;padding:12px;border-radius:15px}
        .ban98acv h1{text-align: center;}
        .ban98acv input{width:100%;padding:16px;margin-bottom:15px;border:1px solid var(--grey);}
        .ban98acv input[name="submit"]{cursor:pointer;font-weight:600;background:var(--bg-color);color:#fff}
        #signup{display: none;}
        .ban98acv::after {content: ""; display: table; clear: both; }
        .xacn{float: right; background: red; padding: 6px 7px 3px; border-radius: 15px; color: #fff;cursor: pointer;}
        #clksiup,#clklodg{cursor: pointer;}
    </style>

    <section class="logina1">


        <div class="ban98acv" id="login">
            <b class="xacn">X</b>
            <h1>LOGIN</h1>
            <br/><br/><br/>
            <div>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pwsd" placeholder="Password">
                <input type="button" name="submit" value="LOGIN">
                <p id="clksiup">Signup</p>
                <p>Forgot Password</p>
            </div>

            <br/><br/>
        </div>

        <div class="ban98acv" id="signup">
            <b class="xacn">X</b>
            <h1>SIGNUP</h1>
            <br/><br/><br/>
            <div>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pwsd" placeholder="Password">
                <input type="password" name="vpwsd" placeholder="Verify Password">
                <input type="button" name="submit" value="SIGNUP">
                <p id="clklodg">Login</p>
            </div>
            <br/>
        </div>
        <script type="text/javascript">
            $("#clksiup").click(function(){
                $("#login").css("display","none");
                $("#signup").css("display","block");
            });
            $("#clklodg").click(function(){
                $("#signup").css("display","none");
                $("#login").css("display","block");
            });

            $(".xacn").click(function(){
                $(".logina1").css("display","none");
            });
        </script>
    </section>


<?php }?>