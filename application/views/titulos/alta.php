<?php
	if(validation_errors()!=""){
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="widget-box">
				<div class="alert alert-error">
					<strong><?php echo validation_errors(); ?></strong>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	}
?>	
<?php echo form_open('added-titulo'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Alta Titulo
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Nombre
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<input type="text" id="nombre" name="nombre">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Seleccione Pais de Origen
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="id_pais_origen" name="id_pais_origen">

		<?php
		foreach ($paises as $p) {
		?>
				<option value = "<?php echo $p->id; ?>"><?php echo $p->nombre; ?></option>			
		<?php				
		}
		?>
			</select>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<h3>
				Seleccione Genero
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="id_genero" name="id_genero">

		<?php
		foreach ($generos as $g) {
		?>
				<option value = "<?php echo $g->id; ?>"><?php echo $g->nombre; ?></option>			
		<?php				
		}
		?>
			</select>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<h3>
				Idioma
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="idioma_hablado" name="idioma_hablado">
				<option value = "Español">Español</option>
				<option value = "Ingles">Ingles</option>
				<option value = "Portugues">Portugues</option>
				<option value = "Frances">Frances</option>				
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Subtitulo
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="idioma_subtitulo" name="idioma_subtitulo">
				<option value = "">Sin Subtitulos</option>				
				<option value = "Español">Español</option>
				<option value = "Ingles">Ingles</option>
				<option value = "Portugues">Portugues</option>
				<option value = "Frances">Frances</option>				
			</select>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<h3>
				Duracion
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<input type="text" id="duracion" name="duracion"> min
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Agregar',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>	