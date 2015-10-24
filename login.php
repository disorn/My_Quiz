<!DOCTYPE HTML>
<!--Jesse Chen-->
<html style="height:100%;">
	<head>
		<title>Login</title>
	</head>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		function check()
			{
				var user = document.getElementById("user").value;
				var pass = document.getElementById("password").value;
				
				if(user=="")
				{
					document.getElementById("required").innerHTML="This field is required.";
					if(user!="" && pass=="")
						{
							document.getElementById("required2").innerHTML="This field is required.";
							return false;	
						}
					if(pass=="")
						{
							document.getElementById("required2").innerHTML="This field is required.";
							return false;	
						}
					return false;	
				}
			}
	</script>
	<body>
		
		<div id="page">
			<div id="news">
				<div id="border"> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/> &nbsp <br/></div>
				<div id="position">
					<span class="register">LOG IN</span><br/>
					<br/>
					<?php
						if ( empty( $_POST ) ) {
					?>
					<div id="formstuff">
					<form name="login" onSubmit="return check();" action="logincomplete.php" method="POST">
					  <label for 'username'>Username: </label><br/>
					  <input class="field" type="text" id="user" name="username"/>  <span id="required"></span>
					  <br/>
					  <br/>
					  <label for 'password'>Password: </label><br/>
					  <input class="field" type="password" id="password" name="password"/> <span id="required2"></span>
					  <br/>
					  <br/>
					  <input id="submitbutt" type="submit"/>
					  <span id="wrong"></span>
					</form></br>
					<a href="register.php"><button id="submitbutt">Sign Up</button></a>
					</div>
					<?php
					} else {
						print_r( $_POST );
						}
					?>
				</div>
			</div>
		</div>
		
	</body>

	<script>
	
	</script>
</html>
