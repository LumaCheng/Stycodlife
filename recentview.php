3<html>
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
      <h1>Last five previously visited products</h1>
      <?php
      $product = array(
        "product1" => "Backpack",
        "product2" => "Wireless Headphone",
        "product3" => "Laptop Shoulder Bag",
        "product4" => "Wireless Charging",
        "product5" => "Coated Plastic Cover",
        "product6" => "Laptop Stands",
        "product7" => "Office Chair",
        "product8" => "Office Desk",
        "product9" => "Countertop Water Cooler",
        "product10" => "White Board",
      );

      $array = array();
      foreach($_COOKIE as $key => $value){
        if(preg_match('/^product/', $key, $matches, PREG_OFFSET_CAPTURE)){
            $array[$key] = $value;
         }
      }
      arsort($array);

      $count = 1;
      foreach($array as $key => $value){
        if($count > 5){
          break;
        }
          echo "<h3>$count.  $product[$key]</br></h3>";
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
