<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Central</title>
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Code Central</h1>
    </header>
    <nav>
      <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Scratch Basics 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href = scratchinfo.html>Scratch Info</a>  
                </div>
    
            <div class="dropdown">
                <button class="dropbtn">HTML/CSS basics 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="htmlcss.html">Basics - File Setup</a>
                  <a href="cssbasics.html">Basics - CSS</a>
                </div>
              </div>
              <a href="register.html">Register</a>
    </nav>
    <br>
    <br>
    <h3>Code Central</h3>
    <br>
    <br>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
        <div class = "ad">
         <img src="images/advert1.gif" width="400" height="700" class="tutorialimg1"border="0" alt="meh">
        </div>
        </a>
</body>

</html>