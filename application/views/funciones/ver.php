ver.php
	id numeric, required
	id_titulo numeric, required
	id_sala numeric, required
	fecha date_format, required
	hora hour_format, required
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>
				<?php 
					echo $funcion->nombre_titulo; 
				?>
			</h2>				
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
			<a href="<?php echo base_url(); ?>funciones">
				<button type="button" class="btn btn-secondary btn-lg">
					Volver al Listado
				</button>
			</a>
		</div>
	</div>
</div>