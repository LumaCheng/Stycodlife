<!DOCTYPE html>
<html>
<title>Sign up result!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<style>
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
button {
  background-color: grey;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Set a style for all buttons */
</style>
<body>
<header class="banner">
</header>
<div class="w3-sand w3-grayscale w3-large">

  <div class="w3-container" id="search" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
          <?php

            require_once('Db.php');

            //echo "Connected successfully";
            extract( $_POST );
            $conn = new DB();
            $conn -> table_exist();
             $sql = "INSERT INTO LumaDB.User (firstname, lastname, email, address, homephone, cellphone)
             VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$ADDRESS', '$HOMEPHONE', '$CELLPHONE')";

            // $result =  $conn -> query($sql);
            // echo $result;
            if ($conn -> query($sql)) {
                echo "<h2>New user created successfully</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn -> error();
            }

            // mysqli_close($conn);
          ?>
          <div class="container">
            <form action = "index.php#secure">
              <button type="submit" class="button">back</button>
            </form>

            <form action = "search.php">
              <button type="submit" class="button">search</button>
            </form>
          </div>
        </div>
      </div>
</body>
</html>
