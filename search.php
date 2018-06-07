<html>
<title>search</title>
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
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
<body>

<!-- Header with image -->
<header class="banner">
</header>
<!-- background color -->
<div class="w3-sand w3-grayscale w3-large">
<!-- search -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="w3-container" id="search" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <form class="example" action="searchresult.php" method = "post">
      <h1>Search User</h1>
      <p>Please enter names, email or phone numbers to search.</p>
      <hr>
      <input type="text" placeholder="Search.." name="SEARCH">
      <button type="submit"><i class="fa fa-search"></i></button>

    </form>
  <div>
</div>
<div class="w3-container" id="back" style="padding-bottom:32px;">
  <form action = "index.php#secure">
  <button type="submit" class="cancelbtn">Go back</button>
  </form>
</div>
  <p>Here are the users in database:</p>
  <table>
    <tr>
      <th>id</th>
      <th>first name</th>
      <th>last name</th>
      <th>email</th>
      <th>address</th>
      <th>home phone</th>
      <th>cellphone</th>
    </tr>

  <?php
    extract($_POST);

    require_once('Dblocal.php');
    $conn = new DB();
    $conn -> table_exist();

    $query = "SELECT * FROM myDB.User";
    $result = $conn -> query($query);

    for($counter = 0;
        $row = mysqli_fetch_row($result);
        $counter++){
          print("<tr>");

          foreach($row as $key => $value)
             print("<th>$value</th>");
          print("</tr>");
        }
  ?>
</table>
