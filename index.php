<?php
	session_start();
	if(!@$_SESSION["EmployeeCode"]){
		header('Location: login.php');
	}
?>
<html>
    <head>
        <title>Main Page</title>
         <link href="../../bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/loginform.css" rel="stylesheet" type="text/css">
		 <link rel="shortcut icon" href="images/pms_logo_white.png">
    </head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<a class="navbar-brand" href="#"><img src="images/pms_logo.png" width="40"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Link 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link 2</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							Dropdown link
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid" style="padding-top: 60px;">
			<?php
				print_r($_SESSION);
			?>
		</div>
		<script src="../../bootstrap4/dist/js/jquery.min.js"></script>
		<script src="../../bootstrap4/dist/js/bootstrap.min.js"></script>
	</body>
</html>