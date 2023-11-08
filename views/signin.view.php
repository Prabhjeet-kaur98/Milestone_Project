<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			// header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<?php require('partials/head.php') ?>
    <?php require('partials/nav.php') ?>
    <div class="sign-in-container">
   <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
             
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            
            <a class="button" href="index.php">Sign In</a><br><br>
        </form>
</div>

    <?php require('partials/footer.php') ?>