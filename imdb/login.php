
<html><?php
session_start(); 
if(!isset($_SESSION['username'])){
	include("headimdbfinal.php");
}
else
	{include("headimdbfinalal.php");

}


?>
<body style="margin:0px; " bgcolor='orange' width="100%" height="100%" align="center">
	<div id="main" ">

		<div id="top">
			<?php
	//session_start(); 
			if(!isset($_SESSION['username'])){
				include("header.php");
			}
			else
				{include("headeral.php");
			
		}	
		?>	 
	</div>


	<div id="mid"  align="center">



		<form name="form1" method="post" action="">

			<H1>WELCOME!</H1>
			<table  border=2 id='table1'>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					
					<td align="center" colspan="2"><input type="submit" name="submit" value="Log In" /></td>
				</tr>
			</table>
		</form>
		<?php


		include 'db.php';
//session_start(); 

		if (isset($_POST['submit']))
		{      

			$username=($_POST['username']);
			$password=($_POST['password']);
			$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo"login done";
					$_SESSION["username"] = $username;
  //header("location:afterlogin.php");
					header("location:imdbfinal.php");
					
				}
				else{
					header("login.php");
					echo"<span class='error'><h2 >* Invalid Username Or Password</h2></span>";
				}
			}
		}
		?>

	</div>

	<div id="bottom">
		<marquee  >
			<font style="font-size: 25px;padding-top: 10px">IMDB 2015.</font></marquee>
		</div>

	</div>

</body>
</html>
