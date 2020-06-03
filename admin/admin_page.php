<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!--	<link rel="stylesheet" type="text/css" href="css/botstrap.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container" style="background-color:#232426; width:100%; margin:0 auto; ">
		<!-- start top header -->
		<div class="row" style="background-color:skyblue; height:50px; padding:50px;">
		<div class="col-6 ">
	<?php
		$user = $_SESSION['user'];
		echo "Welcome  ".$user;
	?>
	</div>
	<div class="col-6" >
	<a style="float:right;" href="logout.php">Logout</a>
	</div>
	</div>
	<!-- End top header -->
	
	<div class="row">

	<div class="col-2" style="background-color: darkgray; padding:20px; height:500px; width:15%;  float:left">
		<ul>
			<li><a href="admin_page.php?id=1">Home</a></li>
			<li><a href="admin_page.php?id=2">Profile</a></li>
			<li><a href="admin_page.php?id=3">Users</a></li>
			
		</ul>
	</div>

	<div class="col-8" style="background-color:purple; width:100%">
		<?php
			if (isset($_GET['id'])) {
				$clicked_id = $_GET['id'];
				if ($clicked_id  == 1) {
					echo "This is home";
				}
				if ($clicked_id  == 2) {
					echo "This is Profile";
				}
				if ($clicked_id  == 3) {
					include_once 'view.php';
				}

			}
		?>
	</div>
	</div>
		
	</div>
</body>
</html>