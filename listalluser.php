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
        <h1>Combined list of users</h1>

    <div class="w3-container" id="back" style="padding-bottom:32px;">
      <form action = "index.php#secure">
        <button type="submit">Go Back</button>
      </form>
    </div>
          <?php
          // ========= member A =========
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "https://allnewtek.com/getUserListJson.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $output = curl_exec($ch);

          print("<h3 style=\"color: red;font-weight:bold;\">Team Member A company's User list</h3>");
          print("<h4 style=\"color: red;\">website: \"https://allnewtek.com/getUserListJson.php\"</h4><br/>");
          $data = json_decode($output,true);

          print("<table>
            <tr>
              <th>id</th>
              <th>first name</th>
              <th>last name</th>
              <th>email</th>
              <th>address</th>
              <th>home phone</th>
              <th>cellphone</th>
            </tr>");

          foreach($data as $key => $value){
            print("<tr>");
            print("<th>$value[ID]</th>");
            print("<th>$value[FirstName]</th>");
            print("<th>$value[LastName]</th>");
            print("<th>$value[Email]</th>");
            print("<th>$value[Address]</th>");
            print("<th>$value[HomePhone]</th>");
            print("<th>$value[CellPhone]</th>");
            print("</tr>");
           }

           print("</table>");

          // ========= member B =========
          print("<h3 style=\"color: red;font-weight:bold;\">Team Member B company's User list</h3>");
          print("<h4 style=\"color: red;\">website: \"http://www.kristinezhang.com/cmpe272/listofusers.php\"</h4><br/>");

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "http://www.kristinezhang.com/cmpe272/listofusers.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $output = curl_exec($ch);

          print($output);

          // ========= mine =========
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "http://lumacheng.com/cmpe272/search.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $output = curl_exec($ch);

          curl_exec($ch);
          curl_close($ch);


          print("<h3 style=\"color: red;font-weight:bold;\">My company's User list</h3>");
          print("<h4 style=\"color: red;\">website: \"http://lumacheng.com/cmpe272/search.php\"</h4><br/>");
          $start = False;

          $pos1 = strpos($output, "<table>");
          $pos2 = strpos($output, "</table>");
          $table = substr($output, $pos1, $pos2);
          echo $table;

          ?>


    </div>
  </div>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
