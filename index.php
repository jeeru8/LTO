<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>LTO</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	
	<section class="container" align="center">
		<br>
		<br>
		<br>
		<br>
		
	    <section class="login-form">
			
		<section align="center">
			
		</section>
		<div class="panel panel-default">
			<form method="post" action="login.php" role="login">
		  	<div class="panel-body">

		  		<?php 

                                $errors = array(
                                    1=>"ERROR: ADMIN NOT FOUND",
                                    2=>"LOGIN FIRST"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?> 

		    	
					<div class="form-group">
						<h3 align="center" class="alert alert-warning">LTO Admin Dashboard</h3>
						<label>Admin Username</label>
						<input type="text" name="username" required class="form-control" />
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" required class="form-control" />
					</div>
					
			
					<a href="Dashboard/dashboard.php" class="btn btn-primary btn-block">Log in</a>
					<br>
					
				</form>
		  	</div>
		  	<div class="panel-footer">
		  	
		  	</div>
		</div>
		
		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>