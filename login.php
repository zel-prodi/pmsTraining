<?php
	session_start();
	require_once 'configuration/connection.php';
	if(@$_REQUEST["Username"] && $_REQUEST["Password"]){
		require_once 'configuration/check_user.php';
		if($cnt > 0){
			$_SESSION = $session;
			header('Location: ./');
			
		}else{
			header('Location: login.php?status=err');
		}
	}
?>
<html>
    <head>
        <title>Login</title>
         <link href="../../bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/loginform.css" rel="stylesheet" type="text/css">
		 <link rel="shortcut icon" href="images/pms_logo_white.png">
    </head>
	<body> 
	<div class="container">
		<div class="signin">
			<div class="div-left">
				<img src="images/pms_logo.png" width="100%" height="120">
				<strong><span class="title_name">Project Management System!</span></strong>
				<p>The Companydelivers various products to its customers,
				ranging from a singleapplication program through to complete installation of hardware withcustomized software.</p>
			</div>
			<div class="div-right"><hr>
				<span class="login-title"><strong>LOGIN!</strong></span><hr>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
					<label>Username</label>
					<input type="text" class="form-control" name="Username" placeholder="Enter username..." required autofocus>
					<label class="pass">Password</label>
					<input type="password" class="form-control" name="Password" placeholder="Enter password..." required>
					<br><button class="btn btn-outline-primary form-control" type="submit"><i class="fa fa-lock"></i> Login</button>
				</form>
			</div>
		</div>
	</div>
	<script src="../../bootstrap4/dist/js/jquery.min.js"></script>
	<script src="../../bootstrap4/dist/js/bootstrap.min.js"></script>
	<?php
		if(@$_REQUEST["status"]){
			echo 
			"<script language='javascript'>
				alert('Incorrect Username Or Password..');
			</script>";
		}
	?>
	</body>
</html>