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
<?php echo form_open('modified-sala'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Modificacion Sala
			</h1>
			<input type="hidden" id="id" name="id" value="<?php echo $sala->id; ?>">
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
			<input type="text" id="nombre" name="nombre" value="<?php echo $sala->nombre; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Modificar Sala',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>	