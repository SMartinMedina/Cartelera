baja.php
	id_funcion numeric, required
<?php echo form_open('deleted-funcion'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>
				<?php 
					echo "Baja Funcion: ".$funcion->nombre_titulo; 
				?>
			</h2>
				<input 
					type="hidden" 
					id = "id_funcion" 
					name = "id_funcion"
					value="<?php echo $funcion->id; ?>" />			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<strong>Sala: </strong> <?php echo $funcion->nombre_sala;?>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<strong>Fecha: </strong> <?php echo $funcion->fecha;?>
		</div>
	</div>		
	<div class="row">
		<div class="col-md-12">
			<strong>Hora: </strong> <?php echo $funcion->hora;?>hs
		</div>
	</div>			
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Borrar Funcion',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
</div>	