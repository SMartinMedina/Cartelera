<?php
	class salasCRUD extends CI_Model {
		function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	    function getSala($id){
	    	$q = $this->db->query('SELECT 
	    								salas.id,	    		
	    								salas.nombre 
    								FROM 
    									salas 
									WHERE
										salas.id = '.$id.'
									AND
										salas.estado = 0
										');
	    	return $q->row();
	    }
	    function getSalas(){
	    	$q = $this->db->query('SELECT 
	    								salas.id,	    		
	    								salas.nombre 
    								FROM 
    									salas 
									WHERE
										salas.estado = 0
										');
	    	return $q->result();
	    }	    

	    function addSala($nombre){
	    	$q = $this->db->query('INSERT INTO salas (nombre) VALUES ("'.$nombre.'")');
	    	return $q;
	    }
	    function deleteSala($id){
	    	$q = $this->db->query('UPDATE salas SET estado=1 WHERE  id='.$id);
	    	return $q;
	    }	    	    
	    function editSala($id,$nombre){
	    	$q = $this->db->query('UPDATE salas SET nombre="'.$nombre.'" WHERE  id='.$id);
	    	return $q;
	    }	    
	}
?>