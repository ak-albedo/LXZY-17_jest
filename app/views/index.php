<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.7615498731234!2d-118.34587228544304!3d34.10124852259468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2zNzA2MCBIb2xseXdvb2QgQmx2ZCwgTG9zIEFuZ2VsZXMsIENBIDkwMDI4LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1655853601475!5m2!1sru!2sua" height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="row py-4">
	<div class="col">
		<div class="text-center">
			<p class="lead">To participate in the conference, please fill out the form</p>
		</div>
	</div>
</div>

<div class="container" id="form-block">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		  </symbol>
		</svg>
		<div class="alert alert-danger d-flex align-items-center d-none" role="alert" id="validate-block">
		  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		  <div>
			<ol id="validate-errors"></ol>
		  </div>
		</div>
	  
        <form action="/store" method="post" enctype="multipart/form-data" id="registration">
		<nav>
			<div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
				<div class="nav-link active" id="step1-tab" href="#step1">Step 1</div>
				<div class="nav-link" id="step2-tab" href="#step2">Step 2</div>
			</div>
		</nav>

          <div class="tab-content py-4">
            <div class="tab-pane fade show active" id="step1">
              <div class="mb-3">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" required>
				<div class="validation-error" id="first_name-error"></div>
              </div>
              <div class="mb-3">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" required>
				<div class="validation-error" id="last_name-error"></div>
              </div>
			  <div class="mb-3">
                <label for="birthday">Birthday</label>
                <input type="datetime-local" name="birthday" class="form-control" id="birthday" required>
				<div class="validation-error" id="birthday-error"></div>
              </div>
			  <div class="mb-3">
                <label for="report_subject">Report subject</label>
                <input type="text" name="report_subject" class="form-control" id="report_subject" required>
				<div class="validation-error" id="report_subject-error"></div>
              </div>
			  <div class="mb-3">
                <label for="country">Country</label>
				<select name="country" class="form-control" id="country" autofocus="autofocus" autocorrect="off" autocomplete="off" required>
				  <option value="" selected="selected">Select Country</option>
				  <option value="Afghanistan" data-alternative-spellings="AF ??????????????????">Afghanistan</option>
				  <option value="??land Islands" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">??land Islands</option>
				  <option value="Albania" data-alternative-spellings="AL">Albania</option>
				  <option value="Algeria" data-alternative-spellings="DZ ??????????????">Algeria</option>
				  <option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
				  <option value="Andorra" data-alternative-spellings="AD" data-relevancy-booster="0.5">Andorra</option>
				  <option value="Angola" data-alternative-spellings="AO">Angola</option>
				  <option value="Anguilla" data-alternative-spellings="AI" data-relevancy-booster="0.5">Anguilla</option>
				  <option value="Antarctica" data-alternative-spellings="AQ" data-relevancy-booster="0.5">Antarctica</option>
				  <option value="Antigua And Barbuda" data-alternative-spellings="AG" data-relevancy-booster="0.5">Antigua And Barbuda</option>
				  <option value="Argentina" data-alternative-spellings="AR">Argentina</option>
				  <option value="Armenia" data-alternative-spellings="AM ????????????????">Armenia</option>
				  <option value="Aruba" data-alternative-spellings="AW" data-relevancy-booster="0.5">Aruba</option>
				  <option value="Australia" data-alternative-spellings="AU" data-relevancy-booster="1.5">Australia</option>
				  <option value="Austria" data-alternative-spellings="AT ??sterreich Osterreich Oesterreich ">Austria</option>
				  <option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
				  <option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
				  <option value="Bahrain" data-alternative-spellings="BH ??????????????">Bahrain</option>
				  <option value="Bangladesh" data-alternative-spellings="BD ????????????????????????" data-relevancy-booster="2">Bangladesh</option>
				  <option value="Barbados" data-alternative-spellings="BB">Barbados</option>
				  <option value="Belarus" data-alternative-spellings="BY ????????????????">Belarus</option>
				  <option value="Belgium" data-alternative-spellings="BE Belgi?? Belgie Belgien Belgique" data-relevancy-booster="1.5">Belgium</option>
				  <option value="Belize" data-alternative-spellings="BZ">Belize</option>
				  <option value="Benin" data-alternative-spellings="BJ">Benin</option>
				  <option value="Bermuda" data-alternative-spellings="BM" data-relevancy-booster="0.5">Bermuda</option>
				  <option value="Bhutan" data-alternative-spellings="BT ???????????????">Bhutan</option>
				  <option value="Bolivia" data-alternative-spellings="BO">Bolivia</option>
				  <option value="Bonaire, Sint Eustatius and Saba" data-alternative-spellings="BQ">Bonaire, Sint Eustatius and Saba</option>
				  <option value="Bosnia and Herzegovina" data-alternative-spellings="BA BiH Bosna i Hercegovina ?????????? ?? ??????????????????????">Bosnia and Herzegovina</option>
				  <option value="Botswana" data-alternative-spellings="BW">Botswana</option>
				  <option value="Bouvet Island" data-alternative-spellings="BV">Bouvet Island</option>
				  <option value="Brazil" data-alternative-spellings="BR Brasil" data-relevancy-booster="2">Brazil</option>
				  <option value="British Indian Ocean Territory" data-alternative-spellings="IO">British Indian Ocean Territory</option>
				  <option value="Brunei Darussalam" data-alternative-spellings="BN">Brunei Darussalam</option>
				  <option value="Bulgaria" data-alternative-spellings="BG ????????????????">Bulgaria</option>
				  <option value="Burkina Faso" data-alternative-spellings="BF">Burkina Faso</option>
				  <option value="Burundi" data-alternative-spellings="BI">Burundi</option>
				  <option value="Cambodia" data-alternative-spellings="KH ?????????????????????">Cambodia</option>
				  <option value="Cameroon" data-alternative-spellings="CM">Cameroon</option>
				  <option value="Canada" data-alternative-spellings="CA" data-relevancy-booster="2">Canada</option>
				  <option value="Cape Verde" data-alternative-spellings="CV Cabo">Cape Verde</option>
				  <option value="Cayman Islands" data-alternative-spellings="KY" data-relevancy-booster="0.5">Cayman Islands</option>
				  <option value="Central African Republic" data-alternative-spellings="CF">Central African Republic</option>
				  <option value="Chad" data-alternative-spellings="TD ??????????? Tchad">Chad</option>
				  <option value="Chile" data-alternative-spellings="CL">Chile</option>
				  <option value="China" data-relevancy-booster="3.5" data-alternative-spellings="CN Zhongguo Zhonghua Peoples Republic ??????/??????">China</option>
				  <option value="Christmas Island" data-alternative-spellings="CX" data-relevancy-booster="0.5">Christmas Island</option>
				  <option value="Cocos (Keeling) Islands" data-alternative-spellings="CC" data-relevancy-booster="0.5">Cocos (Keeling) Islands</option>
				  <option value="Colombia" data-alternative-spellings="CO">Colombia</option>
				  <option value="Comoros" data-alternative-spellings="KM ?????? ??????????">Comoros</option>
				  <option value="Congo" data-alternative-spellings="CG">Congo</option>
				  <option value="Congo, the Democratic Republic of the" data-alternative-spellings="CD Congo-Brazzaville Repubilika ya Kongo">Congo, the Democratic Republic of the</option>
				  <option value="Cook Islands" data-alternative-spellings="CK" data-relevancy-booster="0.5">Cook Islands</option>
				  <option value="Costa Rica" data-alternative-spellings="CR">Costa Rica</option>
				  <option value="C??te d'Ivoire" data-alternative-spellings="CI Cote dIvoire">C??te d'Ivoire</option>
				  <option value="Croatia" data-alternative-spellings="HR Hrvatska">Croatia</option>
				  <option value="Cuba" data-alternative-spellings="CU">Cuba</option>
				  <option value="Cura??ao" data-alternative-spellings="CW Curacao">Cura??ao</option>
				  <option value="Cyprus" data-alternative-spellings="CY ???????????? K??pros K??br??s">Cyprus</option>
				  <option value="Czech Republic" data-alternative-spellings="CZ ??esk?? Ceska">Czech Republic</option>
				  <option value="Denmark" data-alternative-spellings="DK Danmark" data-relevancy-booster="1.5">Denmark</option>
				  <option value="Djibouti" data-alternative-spellings="DJ ??????????????? Jabuuti Gabuuti">Djibouti</option>
				  <option value="Dominica" data-alternative-spellings="DM Dominique" data-relevancy-booster="0.5">Dominica</option>
				  <option value="Dominican Republic" data-alternative-spellings="DO">Dominican Republic</option>
				  <option value="Ecuador" data-alternative-spellings="EC">Ecuador</option>
				  <option value="Egypt" data-alternative-spellings="EG" data-relevancy-booster="1.5">Egypt</option>
				  <option value="El Salvador" data-alternative-spellings="SV">El Salvador</option>
				  <option value="Equatorial Guinea" data-alternative-spellings="GQ">Equatorial Guinea</option>
				  <option value="Eritrea" data-alternative-spellings="ER ???????????? ????????????">Eritrea</option>
				  <option value="Estonia" data-alternative-spellings="EE Eesti">Estonia</option>
				  <option value="Ethiopia" data-alternative-spellings="ET ???????????????">Ethiopia</option>
				  <option value="Falkland Islands (Malvinas)" data-alternative-spellings="FK" data-relevancy-booster="0.5">Falkland Islands (Malvinas)</option>
				  <option value="Faroe Islands" data-alternative-spellings="FO F??royar F??r??erne" data-relevancy-booster="0.5">Faroe Islands</option>
				  <option value="Fiji" data-alternative-spellings="FJ Viti ???????????????">Fiji</option>
				  <option value="Finland" data-alternative-spellings="FI Suomi">Finland</option>
				  <option value="France" data-alternative-spellings="FR R??publique fran??aise" data-relevancy-booster="2.5">France</option>
				  <option value="French Guiana" data-alternative-spellings="GF">French Guiana</option>
				  <option value="French Polynesia" data-alternative-spellings="PF Polyn??sie fran??aise">French Polynesia</option>
				  <option value="French Southern Territories" data-alternative-spellings="TF">French Southern Territories</option>
				  <option value="Gabon" data-alternative-spellings="GA R??publique Gabonaise">Gabon</option>
				  <option value="Gambia" data-alternative-spellings="GM">Gambia</option>
				  <option value="Georgia" data-alternative-spellings="GE ??????????????????????????????">Georgia</option>
				  <option value="Germany" data-alternative-spellings="DE Bundesrepublik Deutschland" data-relevancy-booster="3">Germany</option>
				  <option value="Ghana" data-alternative-spellings="GH">Ghana</option>
				  <option value="Gibraltar" data-alternative-spellings="GI" data-relevancy-booster="0.5">Gibraltar</option>
				  <option value="Greece" data-alternative-spellings="GR ????????????" data-relevancy-booster="1.5">Greece</option>
				  <option value="Greenland" data-alternative-spellings="GL gr??nland" data-relevancy-booster="0.5">Greenland</option>
				  <option value="Grenada" data-alternative-spellings="GD">Grenada</option>
				  <option value="Guadeloupe" data-alternative-spellings="GP">Guadeloupe</option>
				  <option value="Guam" data-alternative-spellings="GU">Guam</option>
				  <option value="Guatemala" data-alternative-spellings="GT">Guatemala</option>
				  <option value="Guernsey" data-alternative-spellings="GG" data-relevancy-booster="0.5">Guernsey</option>
				  <option value="Guinea" data-alternative-spellings="GN">Guinea</option>
				  <option value="Guinea-Bissau" data-alternative-spellings="GW">Guinea-Bissau</option>
				  <option value="Guyana" data-alternative-spellings="GY">Guyana</option>
				  <option value="Haiti" data-alternative-spellings="HT">Haiti</option>
				  <option value="Heard Island and McDonald Islands" data-alternative-spellings="HM">Heard Island and McDonald Islands</option>
				  <option value="Holy See (Vatican City State)" data-alternative-spellings="VA" data-relevancy-booster="0.5">Holy See (Vatican City State)</option>
				  <option value="Honduras" data-alternative-spellings="HN">Honduras</option>
				  <option value="Hong Kong" data-alternative-spellings="HK ??????">Hong Kong</option>
				  <option value="Hungary" data-alternative-spellings="HU Magyarorsz??g">Hungary</option>
				  <option value="Iceland" data-alternative-spellings="IS Island">Iceland</option>
				  <option value="India" data-alternative-spellings="IN ???????????? ????????????????????? Hindustan" data-relevancy-booster="3">India</option>
				  <option value="Indonesia" data-alternative-spellings="ID" data-relevancy-booster="2">Indonesia</option>
				  <option value="Iran, Islamic Republic of" data-alternative-spellings="IR ??????????">Iran, Islamic Republic of</option>
				  <option value="Iraq" data-alternative-spellings="IQ ???????????????">Iraq</option>
				  <option value="Ireland" data-alternative-spellings="IE ??ire" data-relevancy-booster="1.2">Ireland</option>
				  <option value="Isle of Man" data-alternative-spellings="IM" data-relevancy-booster="0.5">Isle of Man</option>
				  <option value="Israel" data-alternative-spellings="IL ?????????????? ??????????">Israel</option>
				  <option value="Italy" data-alternative-spellings="IT Italia" data-relevancy-booster="2">Italy</option>
				  <option value="Jamaica" data-alternative-spellings="JM">Jamaica</option>
				  <option value="Japan" data-alternative-spellings="JP Nippon Nihon ??????" data-relevancy-booster="2.5">Japan</option>
				  <option value="Jersey" data-alternative-spellings="JE" data-relevancy-booster="0.5">Jersey</option>
				  <option value="Jordan" data-alternative-spellings="JO ????????????">Jordan</option>
				  <option value="Kazakhstan" data-alternative-spellings="KZ ?????????????????? ??????????????????">Kazakhstan</option>
				  <option value="Kenya" data-alternative-spellings="KE">Kenya</option>
				  <option value="Kiribati" data-alternative-spellings="KI">Kiribati</option>
				  <option value="Korea, Democratic People's Republic of" data-alternative-spellings="KP North Korea">Korea, Democratic People's Republic of</option>
				  <option value="Korea, Republic of" data-alternative-spellings="KR South Korea" data-relevancy-booster="1.5">Korea, Republic of</option>
				  <option value="Kuwait" data-alternative-spellings="KW ????????????">Kuwait</option>
				  <option value="Kyrgyzstan" data-alternative-spellings="KG ????????????????????">Kyrgyzstan</option>
				  <option value="Lao People's Democratic Republic" data-alternative-spellings="LA">Lao People's Democratic Republic</option>
				  <option value="Latvia" data-alternative-spellings="LV Latvija">Latvia</option>
				  <option value="Lebanon" data-alternative-spellings="LB ??????????">Lebanon</option>
				  <option value="Lesotho" data-alternative-spellings="LS">Lesotho</option>
				  <option value="Liberia" data-alternative-spellings="LR">Liberia</option>
				  <option value="Libyan Arab Jamahiriya" data-alternative-spellings="LY ??????????">Libyan Arab Jamahiriya</option>
				  <option value="Liechtenstein" data-alternative-spellings="LI">Liechtenstein</option>
				  <option value="Lithuania" data-alternative-spellings="LT Lietuva">Lithuania</option>
				  <option value="Luxembourg" data-alternative-spellings="LU">Luxembourg</option>
				  <option value="Macao" data-alternative-spellings="MO">Macao</option>
				  <option value="Macedonia, The Former Yugoslav Republic Of" data-alternative-spellings="MK ????????????????????">Macedonia, The Former Yugoslav Republic Of</option>
				  <option value="Madagascar" data-alternative-spellings="MG Madagasikara">Madagascar</option>
				  <option value="Malawi" data-alternative-spellings="MW">Malawi</option>
				  <option value="Malaysia" data-alternative-spellings="MY">Malaysia</option>
				  <option value="Maldives" data-alternative-spellings="MV">Maldives</option>
				  <option value="Mali" data-alternative-spellings="ML">Mali</option>
				  <option value="Malta" data-alternative-spellings="MT">Malta</option>
				  <option value="Marshall Islands" data-alternative-spellings="MH" data-relevancy-booster="0.5">Marshall Islands</option>
				  <option value="Martinique" data-alternative-spellings="MQ">Martinique</option>
				  <option value="Mauritania" data-alternative-spellings="MR ??????????????????????">Mauritania</option>
				  <option value="Mauritius" data-alternative-spellings="MU">Mauritius</option>
				  <option value="Mayotte" data-alternative-spellings="YT">Mayotte</option>
				  <option value="Mexico" data-alternative-spellings="MX Mexicanos" data-relevancy-booster="1.5">Mexico</option>
				  <option value="Micronesia, Federated States of" data-alternative-spellings="FM">Micronesia, Federated States of</option>
				  <option value="Moldova, Republic of" data-alternative-spellings="MD">Moldova, Republic of</option>
				  <option value="Monaco" data-alternative-spellings="MC">Monaco</option>
				  <option value="Mongolia" data-alternative-spellings="MN Mong??ol ulus ???????????? ??????">Mongolia</option>
				  <option value="Montenegro" data-alternative-spellings="ME">Montenegro</option>
				  <option value="Montserrat" data-alternative-spellings="MS" data-relevancy-booster="0.5">Montserrat</option>
				  <option value="Morocco" data-alternative-spellings="MA ????????????">Morocco</option>
				  <option value="Mozambique" data-alternative-spellings="MZ Mo??ambique">Mozambique</option>
				  <option value="Myanmar" data-alternative-spellings="MM">Myanmar</option>
				  <option value="Namibia" data-alternative-spellings="NA Namibi??">Namibia</option>
				  <option value="Nauru" data-alternative-spellings="NR Naoero" data-relevancy-booster="0.5">Nauru</option>
				  <option value="Nepal" data-alternative-spellings="NP ???????????????">Nepal</option>
				  <option value="Netherlands" data-alternative-spellings="NL Holland Nederland" data-relevancy-booster="1.5">Netherlands</option>
				  <option value="New Caledonia" data-alternative-spellings="NC" data-relevancy-booster="0.5">New Caledonia</option>
				  <option value="New Zealand" data-alternative-spellings="NZ Aotearoa">New Zealand</option>
				  <option value="Nicaragua" data-alternative-spellings="NI">Nicaragua</option>
				  <option value="Niger" data-alternative-spellings="NE Nijar">Niger</option>
				  <option value="Nigeria" data-alternative-spellings="NG Nijeriya Na??j??r????" data-relevancy-booster="1.5">Nigeria</option>
				  <option value="Niue" data-alternative-spellings="NU" data-relevancy-booster="0.5">Niue</option>
				  <option value="Norfolk Island" data-alternative-spellings="NF" data-relevancy-booster="0.5">Norfolk Island</option>
				  <option value="Northern Mariana Islands" data-alternative-spellings="MP" data-relevancy-booster="0.5">Northern Mariana Islands</option>
				  <option value="Norway" data-alternative-spellings="NO Norge Noreg" data-relevancy-booster="1.5">Norway</option>
				  <option value="Oman" data-alternative-spellings="OM ????????">Oman</option>
				  <option value="Pakistan" data-alternative-spellings="PK ??????????????" data-relevancy-booster="2">Pakistan</option>
				  <option value="Palau" data-alternative-spellings="PW" data-relevancy-booster="0.5">Palau</option>
				  <option value="Palestinian Territory, Occupied" data-alternative-spellings="PS ????????????">Palestinian Territory, Occupied</option>
				  <option value="Panama" data-alternative-spellings="PA">Panama</option>
				  <option value="Papua New Guinea" data-alternative-spellings="PG">Papua New Guinea</option>
				  <option value="Paraguay" data-alternative-spellings="PY">Paraguay</option>
				  <option value="Peru" data-alternative-spellings="PE">Peru</option>
				  <option value="Philippines" data-alternative-spellings="PH Pilipinas" data-relevancy-booster="1.5">Philippines</option>
				  <option value="Pitcairn" data-alternative-spellings="PN" data-relevancy-booster="0.5">Pitcairn</option>
				  <option value="Poland" data-alternative-spellings="PL Polska" data-relevancy-booster="1.25">Poland</option>
				  <option value="Portugal" data-alternative-spellings="PT Portuguesa" data-relevancy-booster="1.5">Portugal</option>
				  <option value="Puerto Rico" data-alternative-spellings="PR">Puerto Rico</option>
				  <option value="Qatar" data-alternative-spellings="QA ??????">Qatar</option>
				  <option value="R??union" data-alternative-spellings="RE Reunion">R??union</option>
				  <option value="Romania" data-alternative-spellings="RO Rumania Roumania Rom??nia">Romania</option>
				  <option value="Russian Federation" data-alternative-spellings="RU Rossiya ???????????????????? ????????????" data-relevancy-booster="2.5">Russian Federation</option>
				  <option value="Rwanda" data-alternative-spellings="RW">Rwanda</option>
				  <option value="Saint Barth??lemy" data-alternative-spellings="BL St. Barthelemy">Saint Barth??lemy</option>
				  <option value="Saint Helena" data-alternative-spellings="SH St.">Saint Helena</option>
				  <option value="Saint Kitts and Nevis" data-alternative-spellings="KN St.">Saint Kitts and Nevis</option>
				  <option value="Saint Lucia" data-alternative-spellings="LC St.">Saint Lucia</option>
				  <option value="Saint Martin (French Part)" data-alternative-spellings="MF St.">Saint Martin (French Part)</option>
				  <option value="Saint Pierre and Miquelon" data-alternative-spellings="PM St.">Saint Pierre and Miquelon</option>
				  <option value="Saint Vincent and the Grenadines" data-alternative-spellings="VC St.">Saint Vincent and the Grenadines</option>
				  <option value="Samoa" data-alternative-spellings="WS">Samoa</option>
				  <option value="San Marino" data-alternative-spellings="SM RSM Repubblica">San Marino</option>
				  <option value="Sao Tome and Principe" data-alternative-spellings="ST">Sao Tome and Principe</option>
				  <option value="Saudi Arabia" data-alternative-spellings="SA ????????????????">Saudi Arabia</option>
				  <option value="Senegal" data-alternative-spellings="SN S??n??gal">Senegal</option>
				  <option value="Serbia" data-alternative-spellings="RS ???????????? Srbija">Serbia</option>
				  <option value="Seychelles" data-alternative-spellings="SC" data-relevancy-booster="0.5">Seychelles</option>
				  <option value="Sierra Leone" data-alternative-spellings="SL">Sierra Leone</option>
				  <option value="Singapore" data-alternative-spellings="SG Singapura  ????????????????????????????????? ???????????????????????? ??????????????????">Singapore</option>
				  <option value="Sint Maarten (Dutch Part)" data-alternative-spellings="SX">Sint Maarten (Dutch Part)</option>
				  <option value="Slovakia" data-alternative-spellings="SK Slovensk?? Slovensko">Slovakia</option>
				  <option value="Slovenia" data-alternative-spellings="SI Slovenija">Slovenia</option>
				  <option value="Solomon Islands" data-alternative-spellings="SB">Solomon Islands</option>
				  <option value="Somalia" data-alternative-spellings="SO ??????????????">Somalia</option>
				  <option value="South Africa" data-alternative-spellings="ZA RSA Suid-Afrika">South Africa</option>
				  <option value="South Georgia and the South Sandwich Islands" data-alternative-spellings="GS">South Georgia and the South Sandwich Islands</option>
				  <option value="South Sudan" data-alternative-spellings="SS">South Sudan</option>
				  <option value="Spain" data-alternative-spellings="ES Espa??a" data-relevancy-booster="2">Spain</option>
				  <option value="Sri Lanka" data-alternative-spellings="LK ??????????????? ???????????? ?????????????????? Ceylon">Sri Lanka</option>
				  <option value="Sudan" data-alternative-spellings="SD ??????????????">Sudan</option>
				  <option value="Suriname" data-alternative-spellings="SR ?????????????????? Sarnam Sranangron">Suriname</option>
				  <option value="Svalbard and Jan Mayen" data-alternative-spellings="SJ" data-relevancy-booster="0.5">Svalbard and Jan Mayen</option>
				  <option value="Swaziland" data-alternative-spellings="SZ weSwatini Swatini Ngwane">Swaziland</option>
				  <option value="Sweden" data-alternative-spellings="SE Sverige" data-relevancy-booster="1.5">Sweden</option>
				  <option value="Switzerland" data-alternative-spellings="CH Swiss Confederation Schweiz Suisse Svizzera Svizra" data-relevancy-booster="1.5">Switzerland</option>
				  <option value="Syrian Arab Republic" data-alternative-spellings="SY Syria ??????????">Syrian Arab Republic</option>
				  <option value="Taiwan, Province of China" data-alternative-spellings="TW ?????? ??????">Taiwan, Province of China</option>
				  <option value="Tajikistan" data-alternative-spellings="TJ ???????????????????? To??ikiston">Tajikistan</option>
				  <option value="Tanzania, United Republic of" data-alternative-spellings="TZ">Tanzania, United Republic of</option>
				  <option value="Thailand" data-alternative-spellings="TH ??????????????????????????? Prathet Thai">Thailand</option>
				  <option value="Timor-Leste" data-alternative-spellings="TL">Timor-Leste</option>
				  <option value="Togo" data-alternative-spellings="TG Togolese">Togo</option>
				  <option value="Tokelau" data-alternative-spellings="TK" data-relevancy-booster="0.5">Tokelau</option>
				  <option value="Tonga" data-alternative-spellings="TO">Tonga</option>
				  <option value="Trinidad and Tobago" data-alternative-spellings="TT">Trinidad and Tobago</option>
				  <option value="Tunisia" data-alternative-spellings="TN ????????">Tunisia</option>
				  <option value="Turkey" data-alternative-spellings="TR T??rkiye Turkiye">Turkey</option>
				  <option value="Turkmenistan" data-alternative-spellings="TM T??rkmenistan">Turkmenistan</option>
				  <option value="Turks and Caicos Islands" data-alternative-spellings="TC" data-relevancy-booster="0.5">Turks and Caicos Islands</option>
				  <option value="Tuvalu" data-alternative-spellings="TV" data-relevancy-booster="0.5">Tuvalu</option>
				  <option value="Uganda" data-alternative-spellings="UG">Uganda</option>
				  <option value="Ukraine" data-alternative-spellings="UA Ukrayina ??????????????">Ukraine</option>
				  <option value="United Arab Emirates" data-alternative-spellings="AE UAE ????????????????">United Arab Emirates</option>
				  <option value="United Kingdom" data-alternative-spellings="GB Great Britain England UK Wales Scotland Northern Ireland" data-relevancy-booster="2.5">United Kingdom</option>
				  <option value="United States" data-relevancy-booster="3.5" data-alternative-spellings="US USA United States of America">United States</option>
				  <option value="United States Minor Outlying Islands" data-alternative-spellings="UM">United States Minor Outlying Islands</option>
				  <option value="Uruguay" data-alternative-spellings="UY">Uruguay</option>
				  <option value="Uzbekistan" data-alternative-spellings="UZ ???????????????????? O'zbekstan O???zbekiston">Uzbekistan</option>
				  <option value="Vanuatu" data-alternative-spellings="VU">Vanuatu</option>
				  <option value="Venezuela" data-alternative-spellings="VE">Venezuela</option>
				  <option value="Vietnam" data-alternative-spellings="VN Vi???t Nam" data-relevancy-booster="1.5">Vietnam</option>
				  <option value="Virgin Islands, British" data-alternative-spellings="VG" data-relevancy-booster="0.5">Virgin Islands, British</option>
				  <option value="Virgin Islands, U.S." data-alternative-spellings="VI" data-relevancy-booster="0.5">Virgin Islands, U.S.</option>
				  <option value="Wallis and Futuna" data-alternative-spellings="WF" data-relevancy-booster="0.5">Wallis and Futuna</option>
				  <option value="Western Sahara" data-alternative-spellings="EH ???????????? ??????????????">Western Sahara</option>
				  <option value="Yemen" data-alternative-spellings="YE ??????????">Yemen</option>
				  <option value="Zambia" data-alternative-spellings="ZM">Zambia</option>
				  <option value="Zimbabwe" data-alternative-spellings="ZW">Zimbabwe</option>
				</select>
				<div class="validation-error" id="country-error"></div>
              </div>
			  <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" id="phone" required>
				<div class="validation-error" id="phone-error"></div>
              </div>
			  <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" required>
				<div class="validation-error" id="email-error"></div>
              </div>
            </div>
            <div class="tab-pane fade" id="step2">
              <div class="mb-3">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control" id="company">
				<div class="validation-error" id="company-error"></div>
              </div>
              <div class="mb-3">
                <label for="position">Position</label>
                <input type="text" name="position" class="form-control" id="position">
				<div class="validation-error" id="position-error"></div>
              </div>
			  <div class="mb-3">
                <label for="about_me">About me</label>
				<textarea name="about_me" rows="5" class="form-control" id="about_me"></textarea>
              </div>
			  <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control" id="photo" accept=".jpg, .jpeg, .png">
				<div class="validation-error" id="photo-error"></div>
              </div>
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-auto"><button type="button" class="btn btn-secondary disabled" id="previous" data-enchanter="previous">Previous</button></div>
            <div class="col-auto">
              <button type="button" class="btn btn-primary" data-enchanter="next" id="next">Next</button>
              <button type="submit" class="btn btn-primary d-none" data-enchanter="finish" id="finish">Finish</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
	<div class="row py-4 d-none"  id="after-form-block">
		<div class="col">
			<div class="text-center">
				<ul class="social-icons">
					<li><a class="social-icon-twitter" href="https://twitter.com/test_tw" title="Check out this Meetup with SoCal AngularJS!" target="_blank" rel="noopener"></a></li>
					<li><a class="social-icon-fb" href="https://www.facebook.com/test_fb" title="Check out this Meetup with SoCal AngularJS!" target="_blank" rel="noopener"></a></li>
				</ul>
		
				<h3 style="text-align: center; margin-bottom:50px;"><a class="nav-link" href="/members">View the list of participants</a></h3>
			</div>
		</div>
	</div>
