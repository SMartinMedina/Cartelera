<?php
	class titulosCRUD extends CI_Model {
		function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	    function getTitulo($id){
	    	$q = $this->db->query('SELECT 
									titulos.id,
									titulos.nombre, 
									titulos.id_pais_origen,
									paises.nombre as pais_origen,
									titulos.id_genero,
									generos.nombre as genero,
									titulos.idioma_hablado, 
									titulos.idioma_subtitulo, 
									titulos.duracion
    								FROM 
    									titulos 
									INNER JOIN
										paises
									ON
										paises.id = titulos.id_pais_origen
									INNER JOIN
										generos
									ON
										generos.id = titulos.id_genero 						
									WHERE
										titulos.id = '.$id.'
									AND
										titulos.estado = 0
										');
	    	return $q->row();
	    }
	    function getTitulos(){
	    	$q = $this->db->query('SELECT 
    									titulos.id,
										titulos.nombre, 
										titulos.id_pais_origen,
										paises.nombre as pais_origen,
										titulos.id_genero,
										generos.nombre as genero,
										titulos.idioma_hablado, 
										titulos.idioma_subtitulo, 
										titulos.duracion
    								FROM 
    									titulos 
									INNER JOIN
										paises
									ON
										paises.id = titulos.id_pais_origen
									INNER JOIN
										generos
									ON
										generos.id = titulos.id_genero				
									WHERE
										titulos.estado = 0
									ORDER BY
										titulos.nombre
										');
	    	return $q->result();
	    }	    

	    function addTitulo($nombre, $id_pais_origen,$id_genero,$idioma_hablado,$idioma_subtitulo,$duracion){
	    	$q = $this->db->query('INSERT INTO 
    									titulos 
										(nombre,
	    								id_pais_origen,
	    								id_genero,										
										idioma_hablado, 
										idioma_subtitulo, 
										duracion) 
									VALUES 
										("'.$nombre.'",
										'.$id_pais_origen.',
										'.$id_genero.',										
										"'.$idioma_hablado.'",
										"'.$idioma_subtitulo.'",
										'.$duracion.' )');
	    	return $q;
	    }
	    function deleteTitulo($id){
	    	$q = $this->db->query('UPDATE 
    									titulos 
									SET 
										estado = 1 
									WHERE  
										id='.$id);
	    	return $q;
	    }	    	    
	    function editTitulo($id, $nombre, $id_pais_origen,$id_genero,$idioma_hablado,$idioma_subtitulo,$duracion){
	    	$q = $this->db->query('UPDATE 
	    								titulos 
    								SET 
    									nombre= "'.$nombre.'",
    									id_pais_origen = '.$id_pais_origen.',
    									id_genero = '.$id_genero.',			
    									idioma_hablado = "'.$idioma_hablado.'",
    									idioma_subtitulo = "'.$idioma_subtitulo.'",
    									duracion = '.$duracion.' 
									WHERE  
										id='.$id);
	    	return $q;
	    }	    
	}
?>