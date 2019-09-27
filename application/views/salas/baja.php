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
<?php echo form_open('deleted-sala'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Baja Sala
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
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Eliminar',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>	