<!DOCTYPE HTML>
<!--Jesse Chen-->
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
			$firstName = $form[ 'firstName' ];
			$lastName = $form[ 'lastName' ];
			$email = $form[ 'email' ];
			
			$money="1000";
			
			$character="zhest";
			
			$checkUser = "SELECT username FROM users WHERE username = '$username'";
			$statement = $connection->prepare($checkUser);
			$statement->execute();
			$uname = $statement->fetch();
			
			$checkemail = "SELECT email FROM users WHERE email = '$email'";
			$statement2 = $connection->prepare($checkemail);
			$statement2->execute();
			$emailz = $statement2->fetch();
			/*
			if ($uname)
			{
				header("Location: {$_SERVER['HTTP_REFERER']}");
				exit;
			}
			//ask about session start and how u can use session start to transfer data to the prev state ex: sess var = "user name exists"
			//and when username does exists it goes back to prev page and displays this.
			if ($emailz)
			{
				header("Location: {$_SERVER['HTTP_REFERER']}");
				exit;
			}
			*/
			$sql = "INSERT INTO users ( username, password, firstName, lastName, email ) VALUES ( :username, :password, :firstName, :lastName, :email )";
			$query = $connection->prepare($sql);
			$query->execute( array( ':username'=>$username, ':password'=>$password, ':firstName'=>$firstName, ':lastName'=>$lastName, ':email'=>$email ) );
			
			if ( $query){
			  $confirm="Your account has been created.";
			  $give="UPDATE users SET money='1000' WHERE username='$username'";
			  $startgive=$connection->prepare($give);
			  $startgive->execute();
			} else {
			  $error="There has been an error";
			}
			
		?>
	</head>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
	</script>
	<body onload="">
		
		<div id="page">
			<div id="news">
				<div id="border"> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/></div>
				<div id="position">
					<span id="register" class="register"></span><br/>
					<br/>
					<a href="login.php" id="link"><button id="play">LOGIN</button></a>
				</div>
			</div>
		</div>
		
	</body>
	<script>
		document.getElementById("register").innerHTML = "<?php echo $confirm?>";
	</script>
</html>
