<!DOCTYPE HTML>
<!--Jesse Chen-->
<html>
	<head>
		<title></title>
	</head>
	<style type="text/css">

	</style>
	<script type="text/javascript">
		function validate()
			{
				var pass = document.getElementById("password").value;
				var confirm = document.getElementById("confirm").value;
				if(pass!=confirm){
						document.getElementById("passmatch").innerHTML="Passwords do not match";
						return false;
				}
			}
		function check()
			{
				var user = document.getElementById("user").value;
				var first = document.getElementById("first").value;
				var last = document.getElementById("last").value;
				var email = document.getElementById("email").value;
				var pass = document.getElementById("password").value;
				var confirm = document.getElementById("confirm").value;
				
				if(user=="")
				{
					document.getElementById("required").innerHTML="This field is required.";
					if(first=="")
						{
							document.getElementById("required4").innerHTML="This field is required.";
							if(last=="")
								{
									document.getElementById("required5").innerHTML="This field is required.";

									if(email=="")
										{
											document.getElementById("required6").innerHTML="This field is required.";
											
											if(pass=="")
												{
													document.getElementById("required2").innerHTML="This field is required.";
													
													if(confirm=="")
													{
														document.getElementById("required3").innerHTML="This field is required.";
														
														return false;	
													}
													return false;	
												}
											return false;	
										}
									return false;	
								}	
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
					<span class="register">Sign Up</span><br/>
					<br/>
					<?php
						if ( empty( $_POST ) ) {
					?>
					<div id="formstuff">
					<form name="registration" onSubmit="return check();" onSubmit="return validate();" action="registered.php" method="POST" >
					  <label for 'username'>Username: </label><br/>
					  <input class="field" type="text" id="user" name="username"/>  <span id="required"></span>
					  <br/>
					  <br/>
					  <label for 'password'>Password: </label><br/>
					  <input class="field" type="password" id="password" name="password"/> <span id="required2"></span>
					  <br/>
					  <br/>
					  <label for 'confirm'>Confirm Password: </label><br/>
					  <input class="field" type="password" id="confirm" name="confirm"/> <span id="passmatch"></span> <span id="required3"></span>
					  <br/>
					  <br/>
					  <label for 'firstName'>First name: </label><br/>
					  <input class="field" type="text" id="first" name="firstName"/> <span id="required4"></span>
					  <br/>
					  <br/>
					  <label for 'lastName'>Last name: </label><br/>
					  <input class="field" type="text" id="last" name="lastName"/> <span id="required5"></span>
					  <br/>
					  <br/>
					  <label for 'email'>Email: </label><br/>
					  <input class="field" type="text" id="email" name="email"/> <span id="required6"></span>
					  <br/>
					  <br/>
					  <br/>
					  <input id="submitbutt" type="submit"/>
					</form>
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
