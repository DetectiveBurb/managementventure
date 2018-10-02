<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Some Site</title>
</head>
<body class="no-m-p">
<nav class="navbar navbar-dark bg-dark">
			
			<a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])== "index.php") echo 'active'; ?>" href="index.php">Home</a>
			<a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])== "post.php") echo 'active'; ?>" href="posts.php">Posts</a>
			<a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])== "report.php") echo 'active'; ?>" href="report.php">Report Issue</a>
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="float-right">
				<aside>
					<?php
					include 'includes/login.php';
					?>
				<a href="report.php">Report an Issue</a>
				</aside>
			</div>
		</div>	
	</div>
