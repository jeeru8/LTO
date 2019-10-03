

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LTO</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->


  	<script src="js/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap.min.js"></script>


</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>LTO</span>ADMIN</a>
				
				
						
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">MONITORING DASHBOARD</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Administrator</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li  ><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="users.php"><em class="fa fa-bar-chart">&nbsp;</em> Users</a></li>
			<li class="active"><a href="ticket.php"><em class="fa fa-bar-chart">&nbsp;</em> Issue Ticket</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Issued Violation Tickets</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-file color-blue"></em>
							<div class="large"><div>
							<div class="text-muted">Total Tickets Issued</div>
						</div>
					</div>
				</div>
				
			</div><!--/.row-->
		</div>

		<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Issued Violation Tickets</h3>

                                    </div>
                                    
                                </div>
                                


                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>Ticket Id</th>
                                                <th>Violation Name</th>
                                                <th>Description</th>
                                                <th>Location</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         	<?php

                                         		error_reporting(0);
												$servername = "localhost";
												$username = "lto";
												$password = "123456789";
												$dbname = "lto";

												// Create connection
												$conn = new mysqli($servername, $username, $password, $dbname);
												// Check connection
												if ($conn->connect_error) {
												    die("Connection failed: " . $conn->connect_error);
												} 

												$sql = "SELECT * FROM ticket";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
												    // output data of each row
												    while($row = $result->fetch_assoc()) {
												        echo '<tr>';
												        echo '<td>';
												        echo  $row["id"];
												        echo '</td>';
												        echo '<td>';
												        echo  $row["violation"];
												        echo '</td>';
												        echo '<td>';
												        echo  $row["description"];
												        echo '</td>';
												        echo '<td>';
												        echo  $row["location"];
												        echo '</td>';
												        echo '<td>';
												        echo  $row["date"];
												        echo '</td>';
												        
												      
												        
												        echo '<td>';
												        echo  '<a href="deleteticket.php?id='.$row['id'].'" class="btn btn-danger">Delete Ticket</a>';
												         echo  '<a href="print.php?ticketid='.$row['id'].'" class="btn btn-success">Print Ticket</a>';
												      
												        echo '</td>';


												        echo '</tr>';
												    }
												} else {

												}
												$conn->close();
												?>
                                        	    
                                        </tbody>
                                    </table>

                                       <script>
                                        $(document).ready(function() {
                                        $('#example').DataTable();
                                    } );
                                        </script>

                                        <br>

                                   

                            </div>
                        </div>
                    </div>
                    
                </div>
		
		
		
			<hr>

			<a href="addticket.php" class="btn btn-success btn-lg">ISSUE TICKET</a>
		
			
			
			<div class="col-sm-12">
				<p class="back-link">MADE BY: <a href="#">CWSSTSI</a></p>
			</div>
		</div><!--/.row-->
		
		
	</div>	<!--/.main-->
	

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>