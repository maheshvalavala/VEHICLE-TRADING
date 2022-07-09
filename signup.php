<!DOCTYPE html>
<html>
    <head>
        <title>Signup Form</title>
        <link rel="stylesheet" href="signup.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: 'Times New Roman', Times, serif; 

background-image: url("https://i.pinimg.com/736x/4f/96/1d/4f961dac467855fe2ad7bc042d34809b.jpg");
background-size: 100%;
background-repeat: no-repeat;


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
  position: absolute;
  left: 60px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
  
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div>


    <!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
      <div class="topnav-right" style="float: right;">
        <a href="index.php"class="w3-bar-item w3-button w3-padding-large w3-hide-small" >LOGIN</a>
      <a href="signup.php"class="w3-bar-item w3-button w3-padding-large w3-hide-small"  >SIGNUP</a>
      </div>
      
      </div>
    </div>
  </div>
  

<form action="signups.php" style="border:1px solid #ccc">

  <div class="container"style="padding-left:50px">
    <h1 style="padding-top: 100px,">Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    

    <label for=" Username"><b> User Name</b></label>
    <input type="text"  placeholder="Enter username" name="Username" required><br>

    <label for=" Firstname"><b>First Name</b></label>
    <input type="text"  placeholder="Enter first name" name="Firstname" required><br>

    <label for=" Lastname"><b>Last Name</b></label>
    <input type="text"  placeholder="Enter Last name" name="Lastname" required><br>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required><br><br>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text"  placeholder="Enter Phone number" name="phone" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="cpsw"><b> Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="cpsw" required>

    
    
   
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
    <a href="index.php">  <button  type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


</body>
</html