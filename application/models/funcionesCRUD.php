<?php
	class funcionesCRUD extends CI_Model {
		function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	    function getFuncion($id){
	    	$q = $this->db->query('SELECT 
    									funciones.id,
										funciones.id_titulo, 
										titulos.nombre as nombre_titulo,
										funciones.id_sala, 
										salas.nombre as nombre_sala,
										funciones.hora, 
										funciones.fecha
    								FROM 
    									funciones 
    								INNER JOIN
										titulos
									ON
										titulos.id = funciones.id_titulo
									INNER JOIN
										salas
									ON
										salas.id = funciones.id_sala
									WHERE
										funciones.id = '.$id.'
									AND
										funciones.estado = 0
										');
	    	return $q->row();
	    }
	    function getFunciones(){
	    	$q = $this->db->query('SELECT 
    									funciones.id,
										funciones.id_titulo, 
										titulos.nombre as nombre_titulo,
										funciones.id_sala, 
										salas.nombre as nombre_sala,
										funciones.hora, 
										funciones.fecha
    								FROM 
    									funciones 
    								INNER JOIN
										titulos
									ON
										titulos.id = funciones.id_titulo
									INNER JOIN
										salas
									ON
										salas.id = funciones.id_sala
									WHERE
										funciones.estado = 0
									ORDER BY
										funciones.fecha, funciones.hora
										');
	    	return $q->result();
	    }
	    function getFuncionesByDate($fecha = 0, $hora = 0){
	    	if($fecha == 0){
	    		$fecha = date("y-m-d");                         // AA-MM-DD
	    	}
	    	if($hora == 0){
	    		$hora = date("H:i:s");                         // HH:MM:SS
	    	}
	    	$q = $this->db->query('SELECT 
    									funciones.id,
										funciones.id_titulo, 
										titulos.nombre as nombre_titulo,
										funciones.id_sala, 
										salas.nombre as nombre_sala,
										funciones.hora, 
										funciones.fecha
    								FROM 
    									funciones 
    								INNER JOIN
										titulos
									ON
										titulos.id = funciones.id_titulo
									INNER JOIN
										salas
									ON
										salas.id = funciones.id_sala
									WHERE
										funciones.hora > "'.$hora.'"
									AND
										funciones.fecha = "'.$fecha.'"	
									AND
										funciones.estado = 0
										');
	    	return $q->result();
	    	

	    }

	    function addFuncion($id_titulo, $id_sala,$fecha,$hora){
	    	$q = $this->db->query('INSERT INTO 
    									funciones 
										(id_titulo,
										id_sala, 
										hora, 
										fecha) 
									VALUES 
										('.$id_titulo.',
										'.$id_sala.',
										"'.$hora.'",
										"'.$fecha.'" )');
	    	return $q;
	    }
	    function deleteFuncion($id){
	    	$q = $this->db->query('UPDATE 
    									funciones 
									SET 
										estado = 1 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    	    
	    function editFuncion($id,$id_titulo, $id_sala,$hora,$fecha){
	    	$q = $this->db->query('UPDATE 
	    								funciones 
    								SET 
    									id_titulo= '.$id_titulo.',
    									id_sala = '.$id_sala.',
    									hora = "'.$hora.'",
    									fecha = "'.$fecha.'" 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    
	}
?>