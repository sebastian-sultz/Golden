<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Signup form</title>
   </head>
   <body>
      <div class="login">
         <img src="img/mainnn.jpg" alt="login image" class="login__img">

         <form method="post" action="" class="login__form">
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<h1 class="login__title">Signup</h1>
<div class="login__content">
   <div class="login__box">
	  <i class="ri-user-3-line login__icon"></i>
	  <div class="login__box-input">
		 <input type="text" name="user_name" required class="login__input" id="login-email" placeholder=" ">
		 <label for="login-email" class="login__label">Username</label>
	  </div>
   </div>
   <div class="login__box">
	  <i class="ri-lock-2-line login__icon"></i>

	  <div class="login__box-input">
		 <input type="password" name="password" required class="login__input" id=" login-pass" placeholder=" ">
		 <label for="login-pass" class="login__label">Password</label>
		 <i class="ri-eye-off-line login__eye" id="login-eye"></i>
	  </div>
   </div>
</div>
<button type="submit" value="Login" class="login__button" onclick="window.location.href='login.php'">Signup</button>
<p class="login__register">
   Already have an account? <a href="login.php">Login</a>
</p>
</form>
</div>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>
</body>
</html>