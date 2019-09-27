<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Sala
			</h1>
			<input type="hidden" id="id" name="id" value="<?php echo $sala->id;?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<strong>Nombre: </strong><?php echo $sala->nombre; ?>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url(); ?>salas">
				<button type="button" class="btn btn-secondary btn-lg">
					Volver al Listado
				</button>
			</a>
		</div>
	</div>
								
</div>	