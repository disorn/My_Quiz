<!DOCTYPE HTML>
<!--Jesse Chen-->
<?php session_start(); ?>
<html>
	<head>
		<title></title>
		<?php
			$hostname = "localhost";
			$dbname = "myquizuser";
			$uname = "root";
			$pword = "";
						
			$connection = new PDO("mysql:host=".$hostname.";dbname=".$dbname,$uname,$pword);
			$form = $_POST;
			$username = $form[ 'username' ];
			$password = $form[ 'password' ];
			
			$uname = "SELECT username FROM users WHERE username = '$username'";
			$statement = $connection->prepare($uname);
			$statement->execute();
			$uname = $statement->fetch();
			
			$checkpass = "SELECT password FROM users WHERE password = '$password'";
			$statement2 = $connection->prepare($checkpass);
			$statement2->execute();
			$checkpass = $statement2->fetch();
			
			if (!$uname)
			{
				$confirm="You have entered an incorrect username or password";	
				$try="block";
				$play="none";
			}
			else
			{
				if (!$checkpass)
				{
					$confirm="You have entered an incorrect username or password";
					$none="none";
					$try="block";
					$play="none";
				}
				else
				{
					$confirm="You have successfully logged in";
					$try="none";
					$play="block";
					$_SESSION['username']=$username;//btw the login goes to mainpage.php which contains this variable.
					header("Location:http://localhost/myquiz/userProfile.php");	
				}
			}
		?>
	</head>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		function tryagain()
		{
			document.getElementById("tryagain").style.display="inline-block";
		}
		function play()
		{
			document.getElementById("play").style.display="inline-block";
		}
	</script>
	<body>
		
		<div id="page">
			<div id="news">
				<div id="border"> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/></div>
				<div id="position">
					<span id="register"></span><br/>
					<br/>
					<a href="login.php" id="link"><button id="tryagain">TRY AGAIN</button></a></br></br>
					<a href="playnow.php" id="link"><button id="play">PLAY NOW</button></a>
				</div>
			</div>
		</div>
	</body>

	<script>
	/*
		document.getElementById("register").innerHTML = "<?php echo $confirm?>";
		document.getElementById("tryagain").style.display="<?php echo $try?>";
		document.getElementById("play").style.display="<?php echo $play?>";
	*/
	</script>
</html>
