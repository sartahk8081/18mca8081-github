<html>
<head>
<title>F Page</title>
<link rel="stylesheet" type="text/css" media="screen"href="CSS/Main1.css" >
</head>
<body>
<div class ="logo">
<img src="CSS/CU.gif" alt="Smiley face" height="200px" width="120px">
</div>
<div class ="nev">
<img src="CSS/CU1.jpg" alt="Smiley face" height="195px" width="484px">
</div>
<div calss="marquee">
<marquee style="height:35px; background-color:Yellow;border:1px solid red;" sscrollamount="10" scrolldelay="0" 
behavior="scroll" >WELCOME THE CU</marquee></div>
<div class ="sidebar">
<ul class="ul">
  <li><a href="#home">Home</a></li>
  <li><a href="p2.php">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a class="active" href="#about">About</a></li>
</ul>
</div>
<div class ="contant">
<form action="action_page.php">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this User ID & Password.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <button type="submit" class="loginbtn">login</button>
  </div>

  <div class="container signin">
    <p>Create an account? <a href="#">Sign up</a>.</p>
  </div>
</form>
</div>
<div class ="fot"></div>
</body>
</html>