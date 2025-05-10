<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php the_title() ?></title>
</head>
<body>
  <script src="<?php echo get_stylesheet_directory_uri(  )?>/preload.js" type="text/javascript"></script>
  <header class="cg-header">
    <div class="cg-header-search">
      <div class="container">
        <form class="cg-header-search-form form-flex" action="s">
          <fieldset class="input-group">
            <input type="text" name="" id="">
          </fieldset>
          <fieldset class="input-group">
            <select name="" id="">
              <option value=""></option>
            </select>
          </fieldset>
          <fieldset class="input-group">
            <select name="" id="">
              <option value=""></option>
            </select>
          </fieldset>
          <button class="btn-submit" type="submit">Search</button>
          <button class="btn-close" type="button" title="Close search bar"><i class="ph ph-x"></i></button>
        </form>
      </div>
    </div>
    <div class="cg-header-main">
      <div class="container cg-header-container">
        <div class="cg-header-logo">
          <?php $logo = get_field('site_logo', 'option')?>
          <?php $logoW = get_field('site_logo_white', 'option')?>
          <a href="<?php echo home_url() ?>"><img src="<?php echo $logoW['url'] ?>" alt="<?php echo bloginfo()?>"></a>
        </div>
        <div class="cg-header-menu">
          <div id="toggle-header-menu" class="cg-header-menu-toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <nav class="cg-header-menu-inner">
            <div class="cg-header-menu-items">
              <?php wp_nav_menu([
                'theme_location' => 'Main Menu',
                'container' => false
              ]); ?>
            </div>
            <div class="cg-header-menu-tools">
              <button id="toggle-search"><i class="ph ph-magnifying-glass"></i></button>
              <button id="toggle-region"><i class="ph ph-globe-hemisphere-west"></i></button>
              <button id="toggle-darkmode">
                <i class="ph ph-moon current-light"></i>
                <i class="ph ph-sun current-dark"></i>
              </button>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="cg-header-subnav">
      <div class="cg-header-lvl2">
        <div class="container">
          <nav class="swiper cg-header-lvl2-swiper">
            <?php wp_nav_menu([
              'theme_location' => 'Subnav Lvl 2',
              'menu_class' => 'swiper-wrapper',
              'container' => false
            ]); ?>
          </nav>
        </div>
      </div>
      <div class="cg-header-lvl3">
        <div class="container">
          <nav class="swiper cg-header-lvl3-swiper">
            <?php wp_nav_menu([
                'theme_location' => 'Subnav Lvl 3',
                'menu_class' => 'swiper-wrapper',
                'container' => false
              ]); ?>
          </nav>
        </div>
      </div>
    </div>
    <div class="cg-header-region">
      <div class="container">
        <div class="cg-header-region-inner">
          <button class="btn-close" type="button" title="Close search bar"><i class="ph ph-x"></i></button>
          <div class="cg-header-region-title">Choose your region</div>
          <div class="cg-header-region-desc">Get content curated by what's trending</div>
          <ul class="cg-header-region-list">
            <li><a href="#">Afghanistan</a></li>
            <li><a href="#">Åland Islands</a></li>
            <li><a href="#">Albania</a></li>
            <li><a href="#">Algeria</a></li>
            <li><a href="#">American Samoa</a></li>
            <li><a href="#">Andorra</a></li>
            <li><a href="#">Angola</a></li>
            <li><a href="#">Anguilla</a></li>
            <li><a href="#">Antarctica</a></li>
            <li><a href="#">Antigua and Barbuda</a></li>
            <li><a href="#">Argentina</a></li>
            <li><a href="#">Armenia</a></li>
            <li><a href="#">Aruba</a></li>
            <li><a href="#">Australia</a></li>
            <li><a href="#">Austria</a></li>
            <li><a href="#">Azerbaijan</a></li>
            <li><a href="#">Bahamas</a></li>
            <li><a href="#">Bahrain</a></li>
            <li><a href="#">Bangladesh</a></li>
            <li><a href="#">Barbados</a></li>
            <li><a href="#">Belarus</a></li>
            <li><a href="#">Belgium</a></li>
            <li><a href="#">Belize</a></li>
            <li><a href="#">Benin</a></li>
            <li><a href="#">Bermuda</a></li>
            <li><a href="#">Bhutan</a></li>
            <li><a href="#">Bolivia</a></li>
            <li><a href="#">Bosnia and Herzegovina</a></li>
            <li><a href="#">Botswana</a></li>
            <li><a href="#">Bouvet Island</a></li>
            <li><a href="#">Brazil</a></li>
            <li><a href="#">British Indian Ocean Territory</a></li>
            <li><a href="#">Brunei Darussalam</a></li>
            <li><a href="#">Bulgaria</a></li>
            <li><a href="#">Burkina Faso</a></li>
            <li><a href="#">Burundi</a></li>
            <li><a href="#">Cambodia</a></li>
            <li><a href="#">Cameroon</a></li>
            <li><a href="#">Canada</a></li>
            <li><a href="#">Cape Verde</a></li>
            <li><a href="#">Cayman Islands</a></li>
            <li><a href="#">Central African Republic</a></li>
            <li><a href="#">Chad</a></li>
            <li><a href="#">Chile</a></li>
            <li><a href="#">China</a></li>
            <li><a href="#">Christmas Island</a></li>
            <li><a href="#">Cocos (Keeling) Islands</a></li>
            <li><a href="#">Colombia</a></li>
            <li><a href="#">Comoros</a></li>
            <li><a href="#">Congo</a></li>
            <li><a href="#">Congo, The Democratic Republic of The</a></li>
            <li><a href="#">Cook Islands</a></li>
            <li><a href="#">Costa Rica</a></li>
            <li><a href="#">Cote D'ivoire</a></li>
            <li><a href="#">Croatia</a></li>
            <li><a href="#">Cuba</a></li>
            <li><a href="#">Cyprus</a></li>
            <li><a href="#">Czech Republic</a></li>
            <li><a href="#">Denmark</a></li>
            <li><a href="#">Djibouti</a></li>
            <li><a href="#">Dominica</a></li>
            <li><a href="#">Dominican Republic</a></li>
            <li><a href="#">Ecuador</a></li>
            <li><a href="#">Egypt</a></li>
            <li><a href="#">El Salvador</a></li>
            <li><a href="#">Equatorial Guinea</a></li>
            <li><a href="#">Eritrea</a></li>
            <li><a href="#">Estonia</a></li>
            <li><a href="#">Ethiopia</a></li>
            <li><a href="#">Falkland Islands (Malvinas)</a></li>
            <li><a href="#">Faroe Islands</a></li>
            <li><a href="#">Fiji</a></li>
            <li><a href="#">Finland</a></li>
            <li><a href="#">France</a></li>
            <li><a href="#">French Guiana</a></li>
            <li><a href="#">French Polynesia</a></li>
            <li><a href="#">French Southern Territories</a></li>
            <li><a href="#">Gabon</a></li>
            <li><a href="#">Gambia</a></li>
            <li><a href="#">Georgia</a></li>
            <li><a href="#">Germany</a></li>
            <li><a href="#">Ghana</a></li>
            <li><a href="#">Gibraltar</a></li>
            <li><a href="#">Greece</a></li>
            <li><a href="#">Greenland</a></li>
            <li><a href="#">Grenada</a></li>
            <li><a href="#">Guadeloupe</a></li>
            <li><a href="#">Guam</a></li>
            <li><a href="#">Guatemala</a></li>
            <li><a href="#">Guernsey</a></li>
            <li><a href="#">Guinea</a></li>
            <li><a href="#">Guinea-bissau</a></li>
            <li><a href="#">Guyana</a></li>
            <li><a href="#">Haiti</a></li>
            <li><a href="#">Heard Island and Mcdonald Islands</a></li>
            <li><a href="#">Holy See (Vatican City State)</a></li>
            <li><a href="#">Honduras</a></li>
            <li><a href="#">Hong Kong</a></li>
            <li><a href="#">Hungary</a></li>
            <li><a href="#">Iceland</a></li>
            <li><a href="#">India</a></li>
            <li><a href="#">Indonesia</a></li>
            <li><a href="#">Iran, Islamic Republic of</a></li>
            <li><a href="#">Iraq</a></li>
            <li><a href="#">Ireland</a></li>
            <li><a href="#">Isle of Man</a></li>
            <li><a href="#">Israel</a></li>
            <li><a href="#">Italy</a></li>
            <li><a href="#">Jamaica</a></li>
            <li><a href="#">Japan</a></li>
            <li><a href="#">Jersey</a></li>
            <li><a href="#">Jordan</a></li>
            <li><a href="#">Kazakhstan</a></li>
            <li><a href="#">Kenya</a></li>
            <li><a href="#">Kiribati</a></li>
            <li><a href="#">Korea, Democratic People's Republic of</a></li>
            <li><a href="#">Korea, Republic of</a></li>
            <li><a href="#">Kuwait</a></li>
            <li><a href="#">Kyrgyzstan</a></li>
            <li><a href="#">Lao People's Democratic Republic</a></li>
            <li><a href="#">Latvia</a></li>
            <li><a href="#">Lebanon</a></li>
            <li><a href="#">Lesotho</a></li>
            <li><a href="#">Liberia</a></li>
            <li><a href="#">Libyan Arab Jamahiriya</a></li>
            <li><a href="#">Liechtenstein</a></li>
            <li><a href="#">Lithuania</a></li>
            <li><a href="#">Luxembourg</a></li>
            <li><a href="#">Macao</a></li>
            <li><a href="#">Macedonia, The Former Yugoslav Republic of</a></li>
            <li><a href="#">Madagascar</a></li>
            <li><a href="#">Malawi</a></li>
            <li><a href="#">Malaysia</a></li>
            <li><a href="#">Maldives</a></li>
            <li><a href="#">Mali</a></li>
            <li><a href="#">Malta</a></li>
            <li><a href="#">Marshall Islands</a></li>
            <li><a href="#">Martinique</a></li>
            <li><a href="#">Mauritania</a></li>
            <li><a href="#">Mauritius</a></li>
            <li><a href="#">Mayotte</a></li>
            <li><a href="#">Mexico</a></li>
            <li><a href="#">Micronesia, Federated States of</a></li>
            <li><a href="#">Moldova, Republic of</a></li>
            <li><a href="#">Monaco</a></li>
            <li><a href="#">Mongolia</a></li>
            <li><a href="#">Montenegro</a></li>
            <li><a href="#">Montserrat</a></li>
            <li><a href="#">Morocco</a></li>
            <li><a href="#">Mozambique</a></li>
            <li><a href="#">Myanmar</a></li>
            <li><a href="#">Namibia</a></li>
            <li><a href="#">Nauru</a></li>
            <li><a href="#">Nepal</a></li>
            <li><a href="#">Netherlands</a></li>
            <li><a href="#">Netherlands Antilles</a></li>
            <li><a href="#">New Caledonia</a></li>
            <li><a href="#">New Zealand</a></li>
            <li><a href="#">Nicaragua</a></li>
            <li><a href="#">Niger</a></li>
            <li><a href="#">Nigeria</a></li>
            <li><a href="#">Niue</a></li>
            <li><a href="#">Norfolk Island</a></li>
            <li><a href="#">Northern Mariana Islands</a></li>
            <li><a href="#">Norway</a></li>
            <li><a href="#">Oman</a></li>
            <li><a href="#">Pakistan</a></li>
            <li><a href="#">Palau</a></li>
            <li><a href="#">Palestinian Territory, Occupied</a></li>
            <li><a href="#">Panama</a></li>
            <li><a href="#">Papua New Guinea</a></li>
            <li><a href="#">Paraguay</a></li>
            <li><a href="#">Peru</a></li>
            <li><a href="#">Philippines</a></li>
            <li><a href="#">Pitcairn</a></li>
            <li><a href="#">Poland</a></li>
            <li><a href="#">Portugal</a></li>
            <li><a href="#">Puerto Rico</a></li>
            <li><a href="#">Qatar</a></li>
            <li><a href="#">Reunion</a></li>
            <li><a href="#">Romania</a></li>
            <li><a href="#">Russian Federation</a></li>
            <li><a href="#">Rwanda</a></li>
            <li><a href="#">Saint Helena</a></li>
            <li><a href="#">Saint Kitts and Nevis</a></li>
            <li><a href="#">Saint Lucia</a></li>
            <li><a href="#">Saint Pierre and Miquelon</a></li>
            <li><a href="#">Saint Vincent and The Grenadines</a></li>
            <li><a href="#">Samoa</a></li>
            <li><a href="#">San Marino</a></li>
            <li><a href="#">Sao Tome and Principe</a></li>
            <li><a href="#">Saudi Arabia</a></li>
            <li><a href="#">Senegal</a></li>
            <li><a href="#">Serbia</a></li>
            <li><a href="#">Seychelles</a></li>
            <li><a href="#">Sierra Leone</a></li>
            <li><a href="#">Singapore</a></li>
            <li><a href="#">Slovakia</a></li>
            <li><a href="#">Slovenia</a></li>
            <li><a href="#">Solomon Islands</a></li>
            <li><a href="#">Somalia</a></li>
            <li><a href="#">South Africa</a></li>
            <li><a href="#">South Georgia and The South Sandwich Islands</a></li>
            <li><a href="#">Spain</a></li>
            <li><a href="#">Sri Lanka</a></li>
            <li><a href="#">Sudan</a></li>
            <li><a href="#">Suriname</a></li>
            <li><a href="#">Svalbard and Jan Mayen</a></li>
            <li><a href="#">Swaziland</a></li>
            <li><a href="#">Sweden</a></li>
            <li><a href="#">Switzerland</a></li>
            <li><a href="#">Syrian Arab Republic</a></li>
            <li><a href="#">Taiwan</a></li>
            <li><a href="#">Tajikistan</a></li>
            <li><a href="#">Tanzania, United Republic of</a></li>
            <li><a href="#">Thailand</a></li>
            <li><a href="#">Timor-leste</a></li>
            <li><a href="#">Togo</a></li>
            <li><a href="#">Tokelau</a></li>
            <li><a href="#">Tonga</a></li>
            <li><a href="#">Trinidad and Tobago</a></li>
            <li><a href="#">Tunisia</a></li>
            <li><a href="#">Turkey</a></li>
            <li><a href="#">Turkmenistan</a></li>
            <li><a href="#">Turks and Caicos Islands</a></li>
            <li><a href="#">Tuvalu</a></li>
            <li><a href="#">Uganda</a></li>
            <li><a href="#">Ukraine</a></li>
            <li><a href="#">United Arab Emirates</a></li>
            <li><a href="#">United Kingdom</a></li>
            <li><a href="#">United States</a></li>
            <li><a href="#">United States Minor Outlying Islands</a></li>
            <li><a href="#">Uruguay</a></li>
            <li><a href="#">Uzbekistan</a></li>
            <li><a href="#">Vanuatu</a></li>
            <li><a href="#">Venezuela</a></li>
            <li><a href="#">Viet Nam</a></li>
            <li><a href="#">Virgin Islands, British</a></li>
            <li><a href="#">Virgin Islands, U.S.</a></li>
            <li><a href="#">Wallis and Futuna</a></li>
            <li><a href="#">Western Sahara</a></li>
            <li><a href="#">Yemen</a></li>
            <li><a href="#">Zambia</a></li>
            <li><a href="#">Zimbabwe</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main>