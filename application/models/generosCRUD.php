<?php
	class generosCRUD extends CI_Model {
		function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	    function getGenero($id){
	    	$q = $this->db->query('SELECT 
	    								generos.id,
	    								generos.nombre
    								FROM 
    									generos 
									WHERE
										generos.id = '.$id.'
									AND
										generos.estado = 0
										');
	    	return $q->result();
	    }
	    function getGeneros(){
	    	$q = $this->db->query('SELECT 
	    								generos.id,	    		
	    								generos.nombre
    								FROM 
    									generos 
									WHERE
										generos.estado = 0
										');
	    	return $q->result();
	    }	    

	    function addGenero($nombre){
	    	$q = $this->db->query('INSERT INTO 
    									generos 
										(nombre) 
									VALUES 
										("'.$nombre.'" )');
	    	return $q;
	    }
	    function deleteGenero($id){
	    	$q = $this->db->query('UPDATE 
    									generos 
									SET 
										estado = 1 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    	    
	    function editGenero($id,$nombre){
	    	$q = $this->db->query('UPDATE 
	    								generos 
    								SET 
    									nombre = "'.$nombre.'"" 
									WHERE  
										id = '.$id);
	    	return $q;
	    }	    
	}
?>