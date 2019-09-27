<div class="container">
	<div class="row">
		<h1>
			Salas
		</h1>		
	</div>
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2">
			<a href="alta-sala">
				<button type="button" class="btn btn-success"> + Agregar Sala</button>
			</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-1">
	      	ID
	    </div>
	    <div class="col-md-8">
	      	Nombre
	    </div>
	    <div class="col-md-3">
	      
	  	</div>
  	</div>
<?php
	foreach ($salas as $s) {
?>
	<div class="row">
	    <div class="col-md-1">
	      <?php echo $s->id;?>
	    </div>
	    <div class="col-md-8">
    		<a href="ver-sala/<?php echo $s->id; ?>">
	      		<?php echo $s->nombre;?>
	      	</a>
	    </div>
	    <div class="col-md-3">
	    	<a href="modificar-sala/<?php echo $s->id; ?>">
	    		Editar <ion-icon name="create"></ion-icon> 
	    	</a> | 
    		<a href="baja-sala/<?php echo $s->id; ?>">
	    		Eliminar <ion-icon name="trash"></ion-icon>
    		</a>
	  	</div>
  	</div>
<?php		
	}
?>
</div>