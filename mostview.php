<html>
<title>Be a stylish Coder!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<style>
<body>
body, html {
    height: 100%;
    font-family: "Roboto Slab", sans-serif;
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
.banner{
  display: block;
  width: 100%;
  border: none;
  background-color: black;
  padding: 14px 28px;
  height: 50px;

}
</style>
<header class="banner">
</header>
<!-- background color -->

<div class="w3-sand w3-large">

  <div class="w3-container" id="recenttop5" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h1>Recently 5 most visited product</h1>
      <?php
      $product = array(
        "cookie1" => "Backpack",
        "cookie2" => "Wireless Headphone",
        "cookie3" => "Laptop Shoulder Bag",
        "cookie4" => "Wireless Charging",
        "cookie5" => "Coated Plastic Cover",
        "cookie6" => "Laptop Stands",
        "cookie7" => "Office Chair",
        "cookie8" => "Office Desk",
        "cookie9" => "Countertop Water Cooler",
        "cookie10" => "White Board",
      );
      $array = array();
      foreach($_COOKIE as $key => $value){
        if(preg_match('/^cookie/', $key, $matches, PREG_OFFSET_CAPTURE)){
            $array[$key] = $value;
         }
      }
      arsort($array);
      $count = 1;
      foreach($array as $key => $value){
        if($count > 5){
          break;
        }
        echo "<h3>$count. $product[$key], view:  $value</br></h3>";
        $count+=1;
      }
      ?>
        <div class="w3-container" id="back" style="padding-bottom:32px;">
            <button onclick="goBack()">Go Back</button>
        </div>
    </div>
  </div>

<div>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
