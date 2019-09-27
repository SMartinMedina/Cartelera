modificacion.php
	id numeric, required
	nombre length < 50, required
	id_pais_origen numeric, required
	id_genero numeric, required
	idioma_hablado length < 50, required
	idioma_subitulo length < 50
	duracion  numeric, required

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
<?php echo form_open('modified-titulo'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Modificacion Titulo
			</h1>
			<input type="hidden" id="id" name="id" value="<?php echo $titulo->id;?>">
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
			<input type="text" 
					id="nombre" 
					name="nombre" 
					value="<?php echo $titulo->nombre; ?>">
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
				<option 
					value = "<?php echo $p->id; ?>"
					<?php if($p->id == $titulo->id_pais_origen) echo "selected"; ?>
				><?php echo $p->nombre; ?></option>			
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
				<option 
					value = "<?php echo $g->id; ?>"
					<?php if($g->id == $titulo->id_genero) echo "selected"; ?>					
					><?php echo $g->nombre; ?></option>			
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
				<option 
					value = "Español"
					<?php if($titulo->idioma_hablado == "Español") echo "selected";?>
					>Español</option>
				<option 
					value = "Ingles"
					<?php if($titulo->idioma_hablado == "Ingles") echo "selected";?>
					>Ingles</option>
				<option 
					value = "Portugues"
					<?php if($titulo->idioma_hablado == "Portugues") echo "selected";?>
					>Portugues</option>
				<option 
					value = "Frances"
					<?php if($titulo->idioma_hablado == "Frances") echo "selected";?>
					>Frances</option>				
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
				<option 
					value = ""
					<?php if($titulo->idioma_subtitulo=="")echo "selected";?>
					>Sin Subtitulos</option>				
				<option 
					value = "Español"
					<?php if($titulo->idioma_subtitulo=="Español")echo "selected";?>
					>Español</option>
				<option 
					value = "Ingles"
					<?php if($titulo->idioma_subtitulo=="Ingles")echo "selected";?>
					>Ingles</option>
				<option 
					value = "Portugues"
					<?php if($titulo->idioma_subtitulo=="Portugues")echo "selected";?>
					>Portugues</option>
				<option 
					value = "Frances"
					<?php if($titulo->idioma_subtitulo=="Frances")echo "selected";?>
					>Frances</option>				
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
			<input 
				type="text" 
				id="duracion" 
				name="duracion"
				value="<?php echo $titulo->duracion; ?>"> min
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Modificar Titulo',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>		