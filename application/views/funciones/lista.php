<div class="container">
	<div class="row">
		<h1>
			Funciones
		</h1>		
	</div>
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2">
			<a href="alta-funcion">
				<button type="button" class="btn btn-success"> + Agregar Funcion</button>
			</a>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-1">
	      ID
	    </div>
	    <div class="col-md-3">
	      Titulo
	    </div>
	    <div class="col-md-2">
	      Sala
	    </div>
	    <div class="col-md-2">
	      Fecha
	    </div>
	    <div class="col-md-1">
	      Hora
	    </div>
	    <div class="col-md-3">
	      
	  	</div>
  	</div>
<?php
	foreach ($funciones as $f) {
?>
	<div class="row">
	    <div class="col-md-1">
	      <?php echo $f->id;?>
	    </div>
	    <div class="col-md-3">
    		<a href="ver-funcion/<?php echo $f->id;?>">
	      		<?php echo $f->nombre_titulo;?>
	      	</a>
	    </div>
	    <div class="col-md-2">
	      <?php echo $f->nombre_sala;?>
	    </div>
	    <div class="col-md-2">
	      <?php echo $f->fecha;?>
	    </div>
	    <div class="col-md-1">
	      <?php echo $f->hora;?>
	    </div>
	    <div class="col-md-3">
	    	<a href="modificar-funcion/<?php echo $f->id;?>">
	    		Editar <ion-icon name="create"></ion-icon> 
	    	</a> | 
    		<a href="baja-funcion/<?php echo $f->id;?>">
	    		Eliminar <ion-icon name="trash"></ion-icon>
    		</a>
	  	</div>
  	</div>
<?php		
	}
?>
</div>