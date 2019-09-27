<?php echo form_open('deleted-titulo'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				<?php echo $titulo->nombre;?>
			</h1>
			<input type="hidden" id="id" name="id" value="<?php echo $titulo->id; ?>">
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
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Borrar Titulo',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>	