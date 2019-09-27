<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"> 
		<!-- Jquery JS -->
		<script src="<?php echo base_url();?>/js/jquery.js"></script>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>/js/datepicker-config.js"></script>	
		
		<!-- Bootstrap core JavaScript -->
	    <script src="<?php echo base_url();?>js/bootstrap.bundle.min.js"></script>

	    <!-- Plugin JavaScript -->
	    <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>

	    <!-- Custom JavaScript for this theme -->
	    <script src="<?php echo base_url();?>js/scrolling-nav.js"></script>
	    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>

		<!-- JQuery CSS -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <!-- Font-->
	    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i,900" rel="stylesheet">
	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
	    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
		<title>
			Cartelera
		</title>
	</head>
	<body>
		<nav class="navbar navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					Cartelera
				</a>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-3"> 
					<a href="<?php echo base_url(); ?>funciones">
						<button type="button" class="btn btn-secondary btn-lg">
							Funciones
						</button>
					</a>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url(); ?>salas">
						<button type="button" class="btn btn-secondary btn-lg">
							Salas
						</button>
					</a>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url(); ?>titulos">
						<button type="button" class="btn btn-secondary btn-lg">
							Titulos
						</button>
					</a>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
		<?php
			$this->load->view($page);
		?>
		<footer>
		</footer>
	</body>
</html>