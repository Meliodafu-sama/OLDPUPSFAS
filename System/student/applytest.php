<?php
session_start();
header('Content-Type: text/html; charset = ISO-8859-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.ico" />
  <title>Step 1</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/half-slider.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/4-col-portfolio.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="vendor/morrisjs/morris.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/business-frontpage.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <style>
  body {
    padding-top: 54px;
  }
  @media (min-width: 992px) {
    body {
      padding-top: 56px;
    }
  }
</style>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <a class="navbar-brand" href="homepage.php">Scholarship and Financial Assistance Services</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
     aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about2.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="announcements.php">Announcements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applyscholarship.php">Apply Scholarship</a>
      </li>
      <li  class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle"  href="#">
          Student
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">FAQ`s</a>
          <a class="dropdown-item" href="#">Citizen Charter</a>
          <a class="dropdown-item" href="#">How to Apply</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle"  href="#">
          Sponsor
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">FAQ`s</a>
          <a class="dropdown-item" href="#">Citizen Charter</a>
          <a class="dropdown-item" href="#">How to Apply</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sponsor.login.php">Login</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>


<!-- Page Content -->

<?php 
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sfasdb";
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>

<div class="container">
  <div class="py-5 text-center">
    <h1>Step 1</h1>
    <h2>Submit Personal Information and Letter of Intent</h2>
    <!-- <p class="lead">Please provide your personal information in order to apply as a sponsor.</p> -->
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Steps throughout the application</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed active">
          <div>
            <h6 class="my-0">Step 1</h6>
            <small class="mb-1">Submit Personal Information and Letter of Intent.</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 2.1</h6>
            <small class="text-muted">Prepare and submit the draft Memorandum of Agreement (MOA) to Scholarship and Financial Assistance Services (SFAS).</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 2.2</h6>
            <small class="text-muted">Meeting with the Scholarship and Financial Assistance Services (SFAS) staffs.</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 3</h6>
            <small class="text-muted">Evaluation from the Polytechnic University of the Philippines legal office</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 4</h6>
            <small class="text-muted">The SFAS will return the approved or disapproved Memorandum of Agreement (MOA) to donor/ benefactor.</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 5</h6>
            <small class="text-muted">Final evaluation of Memorandum of Agreement (MOA), notarization of signed MOA</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Step 6</h6>
            <small class="text-muted">Creation of Scholarship</small>
          </div>
        </li>
      </ul>

      <script language="Javascript">
        function hideA()
        {
          document.getElementById("company").style.visibility="hidden";
          document.getElementById("individual").style.visibility="visible";    
        }
        function hideB()
        {
          document.getElementById("individual").style.visibility="hidden";
          document.getElementById("company").style.visibility="visible";
        }
      </script>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Personal Information  <span style="font-size: 15px;" class="badge badge-primary badge-pill" ><input type="radio"  name="aorb" onClick="hideB()" checked>Company  
        <input type="radio"  name="aorb" onClick="hideA()">Individual</span></h4>

        <!-- Company -->
        <form  id="company"  action="apply.sponsor.step1.php?submitted" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="company">Company/Institution Name  <span class="badge badge-danger badge-pill">* Required fields</span></label>
              <input type="text" class="form-control" id="company" name="company" placeholder="" value="" autocomplete="off" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="address">Address  <span class="badge badge-danger badge-pill">*</span></label>
            <input type="text" class="form-control" id="address" name="address" placeholder="House number ,Lot ,Blk ,Street etc." autocomplete="off" required>
            <div class="invalid-feedback">
              Please enter home address.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="city">City/Municipality <span class="badge badge-danger badge-pill">*</span></label>
              <input type="text" class="form-control" id="city" name="city" autocomplete="off" >
              <div class="invalid-feedback">
                Please select a valid City/Municipality.
              </div>
            </div>
            

            <div class="col-md-3 mb-3">
              <label for="province">Province   <span class="badge badge-danger badge-pill">*</span></label>
              <input type="text" class="form-control" id="province" name="province" autocomplete="off" >
              <div class="invalid-feedback">
                Please select a valid Province.
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="zip">Zip <span class="badge badge-danger badge-pill">*</span></label>
              <input type="number" class="form-control" name="zip" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="state">Country <span class="badge badge-danger badge-pill">*</span></label>
              <select class="custom-select d-block w-100" id="country" name="country" required>
                <option value="" selected="true" >Choose...</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curaçao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="North Korea">North Korea</option>
                <option value="South Korea">South Korea</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morroco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Islands">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian">Palestinian</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Réunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lank">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Tawian">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid country.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="address">Email Address  <span class="badge badge-danger badge-pill">*</span></label>
              <input type="text" class="form-control" id="email" name="email" placeholder="" required autocomplete="off">
              <small class="text-muted">Please use your active email address</small>
              <div class="invalid-feedback">
                Please enter valid email
              </div>

            </div>
            <div class="col-md-4 mb-3">
              <label for="cc-number">Phone Number  <span class="badge badge-danger badge-pill">*</span></label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="09*********" required>
              <div class="invalid-feedback">
                Enter your phone number
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="cc-number">Telephone Number  <span class="badge badge-danger badge-pill">*</span></label>
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="" required>
              <div class="invalid-feedback">
                Enter your telephone number
              </div>
            </div>
          </div>
           <hr class="mb-4">
  <div class="row">
   <div class="col-md-6 mb-3">
    <label for="cc-number">Reference Person  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="referenceperson" name="referenceperson" placeholder="" required>
    <small class="text-muted">Contact person that we can verify your eligibility</small>
    <div class="invalid-feedback">
      Enter your reference person
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-number">Relationship  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="" required>
    <small class="text-muted">Your relationship with your reference person.</small>
    <div class="invalid-feedback">
      Enter your Relationship
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-number">Contact Number  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="refcontact" name="refcontact" placeholder="" required>
    <div class="invalid-feedback">
      Enter the phone number
    </div>
  </div>

 </div>
          <div class="row">
            <div class="col-md-12 mb-3">
             <label for="cc-number">Letter of Intent  <span class="badge badge-danger badge-pill">*</span></label>
             <div class="custom-file">
              <input type="file" class="form-control" id="letter" name="letter">
            </div>
          </div>
        </div>
        <div class="d-block my-3">
          <div class
          <hr class="mb-4">
          <input type="submit" name="submitcom" value="Submit Application" class="btn btn-primary btn-lg btn-block"  >
        </div>
        <!-- onclick="return confirm('Application Submitted, wait for 1-3 working days to process your request. We`ll be connecting to you using your Email address you provide');" -->

      </div>
    </form>

    <?php

    if (isset($_POST ['submitcom']))
    {
      $sponsortype = "C";
      $status = "1";
      $company = $_POST['company'];
      $address = $_POST['address'];
      $province = $_POST['province'];
      $city = $_POST['city'];
      $zip = $_POST['zip'];
      $country = $_POST['country'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $telephone = $_POST['telephone'];
      $letter = $_FILES['letter'];
      $date = date('Y-m-d');



      $sql = "INSERT INTO sponsor_t (sponsortype,status,company,address,province,city,zip,country,email,phone,telephone,letter,date) 
      VALUES ('C','1','$company','$address','$province','$city','$zip','$country','$email','$phone','$telephone','$letter','$date');";
      mysqli_query ($conn,$sql);
    }

    ?>

























    <!-- Individual -->
    <form  id="individual" style="visibility: hidden;position: absolute;top: 50px;" action="apply.sponsor.step1.php?submmitted" method="POST" enctype="multipart/form-data">
     <div class="row">
      <div class="col-md-4 mb-3">
        <label for="country">Title</label>
        <select class="custom-select d-block w-100" id="title" >
          <option value="" selected="true" disabled="disabled">Choose...</option>
          <option>Mr.</option>
          <option>Ms.</option>
          <option>Mrs.</option>
          <option>Dr.</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="firstName">First name  <span class="badge badge-danger badge-pill">*</span></label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="" required autocomplete="off">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="firstName">Middle name </label>
        <input type="text" class="form-control" id="mname" name="mname" placeholder="" value=""autocomplete="off">
      </div>
      <div class="col-md-4 mb-3">
        <label for="firstName">Last name  <span class="badge badge-danger badge-pill">*</span></label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="" required autocomplete="off">
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="address">Address  <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="address" name="address" placeholder="" required autocomplete="off">
      <div class="invalid-feedback">
        Please enter Address.
      </div>
    </div>

    <div class="row">

     <div class="col-md-3 mb-3">
      <label for="province">City/Municipality   <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="city" name="city" autocomplete="off" >
      <div class="invalid-feedback">
        Please provide valid City/Municipality.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="province">Province   <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="province" name="province" autocomplete="off">
      <div class="invalid-feedback">
        Please select a valid Province.
      </div>
    </div>


    <div class="col-md-3 mb-3">
      <label for="zip">Zip <span class="badge badge-danger badge-pill">*</span></label>
      <input type="number" class="form-control" id="zip" name="zip" placeholder="" required>
      <div class="invalid-feedback">
        Zip code required.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="state">Country  <span class="badge badge-danger badge-pill">*</span></label>
      <select class="custom-select d-block w-100" id="country" name="country" required>
        <option value="" selected="true" disabled="disabled">Choose...</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curaçao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="North Korea">North Korea</option>
                <option value="South Korea">South Korea</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morroco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Islands">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian">Palestinian</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Réunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lank">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Tawian">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <div class="invalid-feedback">
        Please provide a valid country.
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 mb-3">
      <label for="address">Email Address  <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="email" name="email" placeholder="" required autocomplete="off">
      <small class="text-muted">Please use your active email address</small>
      <div class="invalid-feedback">
        Please enter valid email
      </div>

    </div>
    <div class="col-md-4 mb-3">
      <label for="cc-number">Phone Number  <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
      <div class="invalid-feedback">
        Enter your phone number
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="cc-number">Telephone Number  <span class="badge badge-danger badge-pill">*</span></label>
      <input type="text" class="form-control" id="telephone" name="telephone" placeholder="" required>
      <div class="invalid-feedback">
        Enter your telephone number
      </div>
    </div>
  </div>
  <div class="row">
   <div class="col-md-8 mb-3">
    <label for="cc-number">Company Name  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="companyname" name="companyname" placeholder="" required>
    <div class="invalid-feedback">
      Enter your reference person
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="cc-number">Occupation  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="" required>
    <div class="invalid-feedback">
      Enter your Relationship
    </div>
  </div>
</div>
  <hr class="mb-4">
  <div class="row">
   <div class="col-md-6 mb-3">
    <label for="cc-number">Reference Person  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="referenceperson" name="referenceperson" placeholder="" required>
    <small class="text-muted">Contact person that we can verify your eligibility</small>
    <div class="invalid-feedback">
      Enter your reference person
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-number">Relationship  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="" required>
    <small class="text-muted">Your relationship with your reference person.</small>
    <div class="invalid-feedback">
      Enter your Relationship
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-number">Contact Number  <span class="badge badge-danger badge-pill">*</span></label>
    <input type="text" class="form-control" id="refcontact" name="refcontact" placeholder="" required>
    <div class="invalid-feedback">
      Enter the phone number
    </div>
  </div>

 </div>



 <div class="row">
  <div class="col-md-12 mb-3">
   <label for="cc-number">Letter of Intent  <span class="badge badge-danger badge-pill">*</span></label>
   <div class="custom-file">
    <input type="file" class="form-control" id="letter" name="letter">
  </div>
 </div>
 </div>
 <hr class="mb-4">

 <input type="submit" name="submitind" value="Submit Application" class="btn btn-primary btn-lg btn-block"  >

 </form>

<?php

if (isset($_POST ['submitind']))
{
  $sponsortype = "I";
  $status = "1";
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $province = $_POST['province'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $telephone = $_POST['telephone'];
  $companyname = $_POST['companyname'];
  $occupation = $_POST['occupation'];
  $referenceperson = $_POST['referenceperson'];
  $refcontact = $_POST['refcontact'];
  $relationship = $_POST['relationship'];
  $letter = $_FILES['letter'];
  $date = date('Y-m-d');
  
  $sql = "INSERT INTO sponsor_t (sponsortype,status,fname,mname,lname,address,city,province,zip,country,email,phone,telephone,companyname,occupation,referenceperson,refcontact,relationship,letter,date) 
  VALUES ('I','1','$fname','$mname','$lname','$address','$city','$province','$zip','$country','$email','$phone','$telephone','$companyname','$occupation','$referenceperson','$refcontact','$relationship','$letter','$date');";
  mysqli_query ($conn,$sql);
}
?>




</div>
</div>
<br>
<br>
<br>
<br>
<br>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2018-2019 Scholarship and Financial Assistance Services</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer>
</div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="../../assets/js/vendor/holder.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>



  </html>
