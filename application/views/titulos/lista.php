<div class="container">
	<div class="row">
		<h1>
			Titulos
		</h1>		
	</div>
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2">
			<a href="alta-titulo">
				<button type="button" class="btn btn-success"> + Agregar Titulo</button>
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
	      	Nombre
	    </div>
	    <div class="col-md-2">
	     	País
	    </div>
	    <div class="col-md-2">
	      	Genero
	    </div>
	    <div class="col-md-1">
	      	Lenguaje (Subtitulos)
	    </div>
	    <div class="col-md-3">
	      
	  	</div>
  	</div>
<?php
	foreach ($titulos as $t) {
?>
	<div class="row">
	    <div class="col-md-1">
	      <?php echo $t->id;?>
	    </div>
	    <div class="col-md-3">
    		<a href="ver-titulo/<?php echo $t->id;?>">
	      		<?php echo $t->nombre;?>
	      	</a>
	    </div>
	    <div class="col-md-2">
	      <?php echo $t->pais_origen;?>
	    </div>
	    <div class="col-md-2">
	      <?php echo $t->genero;?>
	    </div>
	    <div class="col-md-1">
	      <?php echo $t->idioma_hablado; ?>
	      <?php if($t->idioma_subtitulo!="") echo "(".$t->idioma_subtitulo.")";?>
	      
	    </div>
	    <div class="col-md-3">
	    	<a href="modificar-titulo/<?php echo $t->id;?>">
	    		Editar <ion-icon name="create"></ion-icon>
	    	</a> | 
	    	<a href="baja-titulo/<?php echo $t->id;?>">
	    		Eliminar <ion-icon name="trash"></ion-icon>
    		</a>
	  	</div>
  	</div>
<?php		
	}
?>
</div>