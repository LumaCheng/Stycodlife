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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
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
  <div class="w3-container" id="search" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
        <h1>Search User</h1>

    <div class="w3-container" id="back" style="padding-bottom:32px;">
        <button onclick="goBack()">Go Back</button>
    </div>

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
            require_once('Dblocal.php');

            $conn = new DB();
            extract( $_POST );

            $query = "SELECT * FROM myDB.User WHERE firstname = '$SEARCH' OR lastname = '$SEARCH'
            OR email = '$SEARCH' OR homephone = '$SEARCH' OR cellphone = '$SEARCH'";
            $conn -> table_exist();
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

        <br/> Your search yielded<strong><?php print(" $counter")?> results.<br /></strong>
    </div>
  </div>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
