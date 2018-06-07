<?php
session_start();
$product_name = "Laptop Stand";
$_SESSION['product_name'] = $product_name;

  $cookie_name = "cookie6";
  $keeptime = 3600*10;
  setcookie("product6", time(), time() + $keeptime, "/");
  if(!isset($_COOKIE[$cookie_name])) {
      setcookie($cookie_name, 1, time() + $keeptime, "/");
  } else {
    setcookie($cookie_name, $_COOKIE[$cookie_name]+1, time() + $keeptime, "/");
  }
?>

<html>
<title>Be a stylish Coder!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<?php
    // ====== review statics ======
    $conn = mysqli_connect('cmpe272finalproject.cpxjzynfvxe6.us-west-1.rds.amazonaws.com','root','sjsucmpe272');
    $query = "SELECT * FROM ebdb.review WHERE product_name='$product_name'";
    $result = $conn -> query($query);
    $star1 = 0;
    $star2 = 0;
    $star3 = 0;
    $star4 = 0;
    $star5 = 0;

    for($counter = 0;	$row = mysqli_fetch_row($result);	$counter++){
            if($row[2] == 1)
              $star1+=1;
            else if($row[2] == 2)
              $star2+=1;
            else if($row[2] == 3)
              $star3+=1;
            else if($row[2] == 4)
              $star4+=1;
            else if($row[2] == 5)
              $star5+=1;
    }

    $sum_rate = ($star1*1) + ($star2*2) + ($star3*3) + ($star4*4) + ($star5*5);
    $total_rate = $star1 + $star2 + $star3 + $star4 + $star5;
    if( $total_rate != 0)
      $average =  $sum_rate/$total_rate;
    else
      $average = 0;
    $star = intval($average);
    $average2 = sprintf('%0.1f', $average);
  ?>
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
.heading {
    font-size: 25px;
    margin-right: 25px;
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top: 10px;
}

.middle {
    float: left;
    width: 70%;
    margin-top: 10px;
}

/* Place text to the right */
.right {
    text-align: right;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}
/* Individual bars */
.bar-5 {width: <?php if($total_rate == 0) $bar5 = 0; else{ $bar5 = (($star5/$total_rate)*100); $bar5 = intval($bar5); } echo "$bar5%"; ?>; height: 18px; background-color: #4CAF50;}
.bar-4 {width: <?php if($total_rate == 0) $bar4 = 0; else{ $bar4 = (($star4/$total_rate)*100); $bar4 = intval($bar4); } echo "$bar4%"; ?>; height: 18px; background-color: #2196F3;}
.bar-3 {width: <?php if($total_rate == 0) $bar3 = 0; else{ $bar3 = (($star3/$total_rate)*100); $bar3 = intval($bar3); } echo "$bar3%"; ?>; height: 18px; background-color: #00bcd4;}
.bar-2 {width: <?php if($total_rate == 0) $bar2 = 0; else{ $bar2 = (($star2/$total_rate)*100); $bar2 = intval($bar2); } echo "$bar2%"; ?>; height: 18px; background-color: #ff9800;}
.bar-1 {width: <?php if($total_rate == 0) $bar1 = 0; else{ $bar1 = (($star1/$total_rate)*100); $bar1 = intval($bar1); } echo "$bar1%"; ?>; height: 18px; background-color: #f44336;}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;
    height: 50px;
     color: white;
}
tr:hover {background-color: #696969;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    /* Hide the right column on small screens */
    .right {
        display: none;
    }
}
</style>
<header class="banner">
</header>
<!-- background color -->
<div class="w3-sand w3-large w3-grayscale-min">

  <div class="w3-container" id="search" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
        <h1>Laptop Stand</h1>
        <ul>
        <li>Laptop stand raises laptops 6.1-inches off your desk for better ergonomics </li>
        <li>Made of a single piece of metal with silver-anodized powder coated finish; 4.4 pounds</li>
        <li>Cable organizer keeps your keyboard and mouse cables neatly stowed</li>
        <li>Forward tilt for easier viewing and improved air circulation</li>
        </ul>
        <img src="../image/products/LaptopStands.jpg" style="width:60%;max-width:600px" class="w3-margin-top">
        <div class="w3-container" id="back" style="padding-bottom:32px;">
            <button onclick="goBack()">Go Back</button>
        </div>
    </div>
  </div>




<div class="w3-blue-grey w3-large w3-border-khaki">
  <!-- Add icon library -->
  <div style="width:65%; margin:auto;margin-top: 30px;padding-bottom:32px;padding-top:32px;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <span class="heading">User Rating</span>
   <?php
       // ====== show star ======
       for ($x = 0; $x < $star; $x++) {
           echo "<span class=\"fa fa-star checked\"></span>";
       }
       for ($x = 0; $x < 5 - $star; $x++) {
           echo "<span class=\"fa fa-star\"></span>";
       }
       echo "<p> $average2 average based on $total_rate reviews.";
    ?>
    <!-- <p>4.1 average based on 254 reviews.</p> -->
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
      <div class="side">
        <div>5 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-5"></div>
        </div>
      </div>
      <div class="side right">
        <div><?php echo "$star5"; ?></div>
      </div>
      <div class="side">
        <div>4 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-4"></div>
        </div>
      </div>
      <div class="side right">
        <div><?php echo "$star4"; ?></div>
      </div>
      <div class="side">
        <div>3 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-3"></div>
        </div>
      </div>
      <div class="side right">
        <div><?php echo "$star3"; ?></div>
      </div>
      <div class="side">
        <div>2 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-2"></div>
        </div>
      </div>
      <div class="side right">
        <div><?php echo "$star2"; ?></div>
      </div>
      <div class="side">
        <div>1 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-1"></div>
        </div>
      </div>
      <div class="side right">
        <div><?php echo "$star1"; ?></div>
      </div>
    </div>
  </div>
</div>

<div class="w3-sand w3-large w3-border-khaki">
<div style="width:65%; margin:auto;margin-top: 30px">
  <span class="heading">Write Review</span>
	<form method="post" action="submit_review.php" method="post">
    <div class="w3-content" style="max-width:1000px;margin-top: 10px">

  			<select name="Rating" id="rating">
  				<option value="">- Rating -</option>
  				<option value="1">☆</option>
  				<option value="2">☆☆</option>
  				<option value="3">☆☆☆</option>
  				<option value="4">☆☆☆☆</option>
  				<option value="5">☆☆☆☆☆</option>
  			</select>
    </div>

      <div  style="max-width:1000px; margin-top: 20px">
				<textarea name="message" id="message" placeholder="Enter your review" rows="3" cols="70"></textarea>
			</div>

				<ul class="actions" style = "margin-top: 10px">
					<input type="submit" value="Submit Review" style = "margin-top: 10px"/></li>
					<input type="reset" value="Reset" class="alt" style = "margin-top: 10px;margin-left: 10px"/></li>
				</ul>
	</form>
</div>
</div>

<div class="w3-blue-grey w3-large w3-border-khaki">
<div style="width:65%; margin:auto; margin-top: 30px;padding-bottom:32px;padding-top:32px;">
  <span class="heading">User Review</span>
  <?php
    echo "<table>  <tr>
        <th>Name</th>
        <th>Star Rate</th>
        <th>Review</th>
      </tr>";
      $query = "SELECT * FROM ebdb.review WHERE product_name='$product_name'";
      $result = $conn -> query($query);

      for($counter = 0;	$row = mysqli_fetch_row($result);	$counter++){
          print("<tr>");
          print("<th>$row[5]</th>");
          print("<th>$row[2]</th>");
          print("<th>$row[3]</th>");
          print("</tr>");
      }
  ?>
</div>
</div>

<script>
function goBack() {
      window.location.href = "http://www.lumacheng.com/cmpe272/index.php#product";
}
</script>
</body>
</html>
