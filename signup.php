
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
.banner{
  display: block;
  width: 100%;
  border: none;
  background-color: black;
  padding: 14px 28px;
  height: 50px;

}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<body>

<!-- Header with image -->
<header class="banner">
</header>
<div class="w3-sand w3-grayscale w3-large">

<div class="w3-container" id="search" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <form action = "after_signup.php" method = "post">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="FIRSTNAME" required>

      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="LASTNAME" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="EMAIL" required>

      <label for="adderess"><b>Home Adderess</b></label>
      <input type="text" placeholder="Enter Adderess" name="ADDRESS" required>

      <label for="homephone"><b>Home phone</b></label>
      <input type="text" placeholder="Enter Home phone" name="HOMEPHONE" required>

      <label for="cellphone"><b>Cell phone</b></label>
      <input type="text" placeholder="Enter Cell phone" name="CELLPHONE" required>

      <!--<label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>-->

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <div class="clearfix">
          <button type="submit" class="signupbtn">Sign Up</button>
      </form>
        <form action = "index.php#secure">
        <button type="submit" class="cancelbtn">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
