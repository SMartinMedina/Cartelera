<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				<?php echo $titulo->nombre;?>
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<strong>Pais:</strong><?php echo $titulo->pais_origen; ?>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<strong>Genero:</strong><?php echo $titulo->genero; ?>
		</div>
	</div>			
	<div class="row">
		<div class="col-md-12">
			<strong>Idioma:</strong><?php echo $titulo->idioma_hablado; ?>
		</div>
	</div>		
	<div class="row">
		<div class="col-md-12">
			<strong>Subtitulos:</strong><?php echo $titulo->idioma_subtitulo; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<strong>Duracion:</strong><?php echo $titulo->duracion; ?> min
		</div>
	</div>
	<div class="col-md-3">
		<a href="<?php echo base_url(); ?>titulos">
			<button type="button" class="btn btn-secondary btn-lg">
				Volver al Listado
			</button>
		</a>
	</div>
								
</div>	