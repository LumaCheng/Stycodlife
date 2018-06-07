<?php
  session_set_cookie_params(0, '/', '.lumacheng.com');
  session_start();
  extract( $_POST );
  if($username != null){
      $_SESSION['user'] = $username;
  }
?>
<html>
<title>Be a stylish Coder!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<style>
body, html {
    height: 100%;
    font-family: "Roboto Slab", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("image/index.jpeg");
    min-height: 75%;
}
.image:hover > .overlay {
    opacity: .9;
    background-color: black;
    position: absolute;
    left: 0; top: 0; height: 256px; width: 256px;
}
.menu {
    display: none;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div style="float:left;width:16%">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div style="float:left;width:16%">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div style="float:left;width:16%">
      <a href="#news" class="w3-button w3-block w3-black">NEWS</a>
    </div>
    <div style="float:left;width:16%">
      <a href="#product" class="w3-button w3-block w3-black">WHAT WE GET</a>
    </div>
    <div style="float:left;width:16%">
      <a href="#contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
    <div style="float:left;width:16%">
      <a href="#secure" class="w3-button w3-block w3-white">LOGIN/SIGN UP</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center">
    <span class="w3-teal" style="font-size:50px">StyCodlife</span>
    <span class="w3-tag">Stylish Coding life - Begin a new life with higher quality</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

  <!-- About Container -->
  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <?php
        // foreach($_COOKIE as $key => $value){
        //   echo "$key + $value";
        //   if(preg_match('/^user/', $key, $matches, PREG_OFFSET_CAPTURE)){
        //       $user_name = $value;
        //    }
        // }
      //echo "$_SESSION[user]";
      if(isset($_SESSION['user'])){
        echo "<h2 class=\"w3-center w3-padding-64\"> Hi! Welcome, "  . $_SESSION['user'] . "!</h2>";
      }
      else{
          echo "<h2 class=\"w3-center w3-padding-64\"> Hi! Welcome, Guest! </h2";
      }
      ?>
    </div>
  </div>

  <!-- About Container -->
  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THIS SITE</span></h5>
      <p>We provide lots of stylish working-tool options, ex: fashion laptop stand, mac water-proof hardshell, etc. This tools and products can make your coding environment become more convenient.<br/> <div style="color:#f44336"> *Choose your favorites and add them into carts!</p></div>
      <p>In addition to the products, we also list some fancy and stylish coffee shops, which can offer a suitable working environment. We believe that in such a good condition, your efficiency and creation might increase and you will do better in your work. <br/><div style="color:#f44336">*Use our coupon and you will get some discount! </div></p>
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p><i>” Life is not an exact science, it is an art”</i></p>
        <p>Engliand writer, Samuel Butler (1835-1902）</p>
      </div>
      <img src="image/tool.jpeg" style="width:100%;max-width:1000px" class="w3-margin-top">
    </div>
  </div>

<!-- About Container -->
<div class="w3-container" id="news">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">NEWS</span></h5>
    <p>We are open on May, 2018. </p>
    <p>Hope see you soon!</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="product">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHAT WE GET</span></h5>

    <a href="recentview.php"><span style = "color:red" ><strong>LAST 5 visited products</br></span>
    <a href="mostview.php"><span style = "color:red"> MOST 5 visited products</strong></span>
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Products');" id="myLink">
        <div class="w3-col s6 tablink">Laptops Products</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Other');">
        <div class="w3-col s6 tablink">Other products</div>
      </a>
    </div>

    <div id="Products" class="w3-container menu w3-padding-48 w3-card">

      <a href="products/LaptopStands.php"><h5>Laptop Stand</h5>
      <img src="image/products/LaptopStands.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Good stand transform your notebook into a stylish and stable workstation so you can work comfortably all day</p><br>


      <a href="products/LaptopCover.php"><h5>Coated Plastic Cover</h5>
      <img src="image/products/LaptopCover.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey"> protect your Macbook from bumps and scratches and you’ll feel your Macbook more natural in hand</p><br>

      <a href="products/LaptopBag.php"><h5>Laptop Shoulder Bag </h5>
      <img src="image/products/LaptopBag.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">The exclusive trendy design also gives your device the most functional yet fashionable look.</p><br>

      <a href="products/LaptopCharging.php"><h5>Wireless Charging</h5>
      <img src="image/products/Charging.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Quickly charger, Over Heat protection, well packaged.</p><br>

      <a href="products/Backpack.php"><h5>Backpack</h5>
      <img src="image/products/Backpack.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Organizational compartments for pens, keys, and cell phone</p><br>


    </div>

    <div id="Other" class="w3-container menu w3-padding-48 w3-card">
      <a href="products/OfficeChair.php"><h5>Office chair</h5>
      <img src="image/products/OfficeChair.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Height-adjustable setting great for a variety of applications</p><br>

      <a href="products/OfficeDesk.php"><h5>Office Desk</h5>
      <img src="image/products/OfficeDesk.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Lower drawer holds letter or European size hanging files</p><br>

      <a href="products/Water.php"><h5>Countertop Water Cooler</h5>
      <img src="image/products/Water.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">This water cooler dispenser loads from the top</p><br>

      <a href="products/Headphone.php"><h5>Wireless Headphones</h5>
      <img src="image/products/Headphone.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Enjoy broad frequency response</p><br>

      <a href="products/WhiteBoard.php"><h5>White Board</h5>
      <img src="image/products/WhiteBoard.jpg" style="width:20%;max-width:200px" class="w3-margin-top"></a>
      <p class="w3-text-grey">Double Sided Magnetic White Board</p><br>

    </div>
    <img src="image/style.jpeg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="contact" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT</span></h5>

    <?php
      $file = fopen("contact_info.txt", "rt");
      while( $lineData=fgets($file) )
          echo $lineData;
      fclose($file);
    ?>

  </div>
  <!-- Contact/Area Container -->
  <div class="w3-container" id="secure" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">SECURE SECTION</span></h5>
      <head>
         <style type = "text/css">
          td { text-align: center; }
          form {
            margin: 0 auto;
            width:250px;
          }

          button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
          }
          .signupbtn {
            padding: 8px 20px;
            background-color: #f44336;
          }


         </style>
      </head>
      <body style = "fron-family: arial" class="w3-center">
      <?php
      if(isset($_SESSION['user'])){
        echo "<h2 class=\"w3-center w3-padding-64\">"  . $_SESSION[user] . " is already login!</h2>";
      }
      else{
      ?>
         <form action = "password.php" method = "post">
           <table border = "0" cellspacing = "0"
                 style = "height: 90 px; width:123px;
                 font-size: 12pt;" cellpadding = "0">
            <div class="w3-container">
               <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="USERNAME" required>
               <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="PASSWORD" required>
            </div>
              <div class="w3-container">
                  <button type="submit" class="button">Login</button>
              </div>
            </table>
          </form>
        <?php
         }
        ?>
          <div class="w3-container" id="usersinfo" style="padding-bottom:32px;">
            <div class="w3-content" style="max-width:700px">
              <p style = "fron-size: 13pt">
                current list of username and password :
              </p>
              <?php
                $file = fopen("login.txt", "rt");
                while( $lineData=fgets($file) )
                    echo $lineData;
                fclose($file);
              ?>

            </div>
        </div>


          <!-- <div class="w3-row w3-padding w3-card"> -->
            <!-- <div class="float:left; w3-col s6"> -->
              <form action = "signup.php" method = "post">
                <button type="submit" class="signupbtn">Sign Up</button>
              </form>
            <!-- </div> -->
            <!-- <div class="float:left; w3-col s6"> -->
              <form action = "search.php" method = "post">
                <button type="submit" class="signupbtn">Search</button>
              </form>
            <!-- </div> -->
          <!-- </div> -->

            <form action = "listalluser.php" method = "post">
              <button type="submit" class="signupbtn">User lists</button>
            </form>

      </body>
  </div>
</div>


<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
