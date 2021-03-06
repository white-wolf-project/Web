<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta content="text/html; charset=windows-1252" http-equiv="content-type">
		<link rel="shortcut icon" href="IMG/loup.jpg" type="image/x-icon" />
		<title>Ragnarok Tableau de bord</title>
		<!-- Style de la page -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<center>
				<a class="nav-link" href="https://github.com/white-wolf-project/Web">
				<i class="fa fa-fw fa-link"></i>
				<span class="nav-link-text">Team White Wolf</span>
				</a>
			</center>
			<!--menu -->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableau de bord">
						<a class="nav-link" href="index.html">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Tableau de bord</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Map">
						<a class="nav-link" href="Map.html">
						<i class="fa fa-fw fa-area-chart"></i>
						<span class="nav-link-text">MAP</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data">
						<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
						<i class="fa fa-table"></i>
						<span class="nav-link-text">Data</span>
						</a>
						<ul class="sidenav-second-level collapse" id="collapseComponents">
							<li>
								<a href="donnees.php">AP data</a>
								<a href="devices.php">Devices</a>
							</li>
						</ul>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Informations">
						<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#infoComponents" data-parent="#Accordion">
						<i class="fa fa-fw fa-wrench"></i>
						<span class="nav-link-text">Informations</span>
						</a>
						<ul class="sidenav-second-level collapse" id="infoComponents">
							<li>
								<a href="materiel.html">Materiels</a>
								<a href="docs/index.html">Documentation Mathieu </a>
								<a href="DOCT.html">Documentation Thomas </a>
							</li>
						</ul>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notre école">
						<a class="nav-link" href="http://www.esme.fr/formation-informatique/bts-systemes-numeriques">
						<i class="fa fa-fw fa-area-chart"></i>
						<span class="nav-link-text">Notre Ecole</span>
						</a>
					</li>
				</ul>
				<!-- permet d'agrandir le milieu -->
				<ul class="navbar-nav sidenav-toggler">
					<li class="nav-item">
						<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
						</a>
					</li>
				</ul>
				</ul>
			</div>
		</nav>
		<div class="content-wrapper">
		<div class="container-fluid">
			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">DEVICES</a>
				</li>
				<li class="breadcrumb-item active">Ragnarok</li>
			</ol>
			<!-- Premier tableau-->
			<!-- Récupération donne sur la base de donnée -->
			<?php
				try
				{
				  $databaseHost = 'localhost';
				  $databaseName = 'ragnarok_bdd';
				  $databaseUsername = 'root';
				  $databasePassword = 'root';
				  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
				}
				catch(Exception $e)
				{
				
						die('Erreur : '.$e->getMessage());
				}
				$result = mysqli_query($mysqli, "SELECT * FROM Device_info");
			?>
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Devices Table 
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>MAC</th>
									<th>Time</th>
									<th>IP</th>
								</tr>
							</thead>
							<?php
								while($donnees = mysqli_fetch_array($result))
								{
								?>
							<tr>
								<td><?php echo $donnees['Mac'];?></td>
								<td><?php echo $donnees['Time'];?></td>
								<td><?php echo $donnees['IP'];?></td>
							</tr>
							<?php
								}
								?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<footer class="sticky-footer">
		<div class="container">
		<div class="text-center">
			<!-- Deuxieme tableau -->
			<!-- /.container-fluid-->
			<!-- /.content-wrapper-->
			<footer class="sticky-footer">
				<div class="container">
					<div class="text-center">
						<small>Copyright © WhiteWolf Team</small>
					</div>
				</div>
			</footer>
			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
			</a>
			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			<!-- Page level plugin JavaScript-->
			<script src="vendor/datatables/jquery.dataTables.js"></script>
			<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
			<!-- Custom scripts for all pages-->
			<script src="js/sb-admin.min.js"></script>
			<!-- Custom scripts for this page-->
			<script src="js/sb-admin-datatables.min.js"></script>
		</div>
	</body>
</html>