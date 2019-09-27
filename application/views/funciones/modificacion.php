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
<?php echo form_open('modified-funcion'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Modificar Función
				<input 
					type="hidden" 
					id = "id_funcion" 
					name = "id_funcion"
					value="<?php echo $funcion->id; ?>" />
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Seleccione Titulo
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="id_titulo" name="id_titulo">

		<?php
		foreach ($titulos as $t) {
		?>
				<option 
					<?php if($t->id == $funcion->id_titulo) echo "selected"; ?>
					value = "<?php echo $t->id; ?>"
					>
					<?php echo $t->nombre; ?>
				</option>			
		<?php				
		}
		?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Seleccione Sala
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="id_sala" name="id_sala">

		<?php
		foreach ($salas as $s) {
		?>
				<option 
					<?php if($s->id == $funcion->id_sala) echo "selected"; ?>
					value = "<?php echo $s->id; ?>"
				>
					<?php echo $s->nombre; ?>
				</option>			
		<?php				
		}
		?>
			</select>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<h3>
				Fecha
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<input type="text" 
					id="fecha" 
					name="fecha" 
					value="<?php echo $funcion->fecha; ?>" />
		</div>
	</div>		
	<div class="row">
		<div class="col-md-12">
			<h3>
				Hora
			</h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<select id="hh" name="hh">
<?php
			list($hh,$mm) = explode(":", $funcion->hora);
			for($i = 0; $i < 24; $i++ ){
				if($i<10){$i="0".$i;}
?>
				<option 
					value ="<?php echo $i; ?>"
					<?php if($hh==$i) echo "selected"; ?>
				><?php echo $i; ?></option>
<?php				
			}
?>				
			</select>:
			<select id="mm" name="mm">
<?php
			for($i = 0; $i <= 59; $i+=5 ){
				if($i < 10){$i = "0".$i; }								
?>
				<option 
					value ="<?php echo $i; ?>"
					<?php if($mm == $i) echo "selected"; ?>
				><?php echo $i; ?></option>
<?php				
			}
?>				
			</select>hs
			<input 
				type="hidden" 
				id="hora" 
				name="hora"
				value="<?php echo $funcion->hora; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="control-group">
				<?php 
	        		echo form_submit(
	        				array(
			        			'value'=>'Editar',
			        			'class'=>'btn',
			        			'style'=>'width:100%;padding-top:0px'
	        				)); 
	        		echo form_close();
        		?>
			</div>
		</div>
	</div>
								
</div>




			<script type="text/javascript">
			  	$(document).ready(function()
				{
					//$("#hora").val($("#hh").val()+":"+$("#mm").val()+":"+"00");
					//$("#fecha").val(formatDate(new Date()));
				    $( "#fecha" ).datepicker({
						minDate: 0
					});
				});
				$("#hh").change(function(){
					refreshHora();
				});
				$("#mm").change(function(){
					refreshHora();
				});
				function refreshHora(){
					$("#hora").val($("#hh").val()+":"+$("#mm").val()+":"+"00");
				}
				function formatDate(value)
				{
					var mes = value.getMonth()+1;
					var dia = value.getDate();
					if(mes<10){mes="0"+mes;}
					if(dia<10){dia="0"+dia;}
			 		return dia + "/" + mes + "/" + value.getFullYear();
				}
			</script>

