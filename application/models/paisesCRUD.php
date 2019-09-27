<?php
	class paisesCRUD extends CI_Model {
		function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	    function getPais($id){
	    	$q = $this->db->query('SELECT 
	    								paises.id,
	    								paises.nombre
    								FROM 
    									paises 
									WHERE
										paises.id = '.$id.'
									AND
										paises.estado = 0
										');
	    	return $q->result();
	    }
	    function getPaises(){
	    	$q = $this->db->query('SELECT 
	    								paises.id,	    		
	    								paises.nombre
    								FROM 
    									paises 
									WHERE
										paises.estado = 0
										');
	    	return $q->result();
	    }	    

	    function addPais($nombre){
	    	$q = $this->db->query('INSERT INTO 
    									paises 
										(nombre) 
									VALUES 
										("'.$nombre.'" )');
	    	return $q;
	    }
	    function deletePais($id){
	    	$q = $this->db->query('UPDATE 
    									paises 
									SET 
										estado = 1 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    	    
	    function editPais($id,$nombre){
	    	$q = $this->db->query('UPDATE 
	    								paises 
    								SET 
    									nombre = "'.$nombre.'"" 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    
	}
?>