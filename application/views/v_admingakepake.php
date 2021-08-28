
<?php
include("tamplate/header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <style type="text/css">
		body{
			background-color: 
		}

		

	</style> --> 
	<link rel = "stylesheet" type = "text/css" href="<?php echo base_url('assets/style.css')?>">
	<title>Home</title>
</head>
<body> 
	<div class="bg-primary min-vh-100">
		<div class="col-sm-3">
			<div class="container py-3">
				<div class="card bg-white p-4" align="center">
					<nav class="navbar navbar-light bg-light">
  						<a href="" class="navbar-brand">Navbar</a>
  					</nav>

  					<nav class="navbar navbar-light bg-light">
  						<a href="" class="navbar-brand">Navbar</a>
  					</nav>

  					<nav class="navbar navbar-light bg-light">
  						<a href="" class="btn btn-white">Kurikulum</a>
  					</nav>

  					<nav class="navbar navbar-light bg-light">
  						<a href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
  					</nav>
					
					
				</div>
				
			</div>
			
		</div> 

		


	</div>
		

		<!-- <h1>Login berhasil !</h1>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		 -->
	


</body>
</html>
	