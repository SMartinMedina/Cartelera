<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalasController extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('salasCRUD');
//        $this->load->model('salasCRUD');
//        $this->load->model('funcionesCRUD');
	}	
	public function index()	{
		$this->load->view("index", array(
							"data" => $intenciones,
							"mensaje" => $mensaje, 
							"cant" =>$cant ));		
	}
	public function getListado(){
		$salas = $this->salasCRUD->getSalas();
		$this->load->view("main", array("page" => 'salas/lista',"salas" => $salas));
	}
	public function getFormAlta(){
		$this->load->view("main", array("page" => 'salas/alta'));
	}
	public function setAlta(){
		$this->form_validation->set_rules('nombre', "Nombre", "max_length[50]|required");
		$nombre = $_POST['nombre'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormAlta();
		}else{			
			$ok = $this->salasCRUD->addSala($nombre);
			$this->getListado();
		}
	}
	public function getFormBaja($id){
		$sala = $this->salasCRUD->getSala($id);
		$this->load->view("main", array("page" => 'salas/baja',"sala" => $sala));	
	}
	public function setBaja(){
		$this->form_validation->set_rules('id', "ID", "numeric|required");
		$id = $_POST['id'];
		if ($this->form_validation->run() == FALSE){
			$this->getListado();
		}else{
			$sala = $this->salasCRUD->deleteSala($id);			
			$this->getListado();
		}
	}	
	public function getFormModif($id){
		$sala = $this->salasCRUD->getSala($id);
		$this->load->view("main", array("page" => 'salas/modificacion',"sala" => $sala));			
	}	
	public function getView($id){
		$sala = $this->salasCRUD->getSala($id);
		$this->load->view("main", array("page" => 'salas/ver',"sala" => $sala));			
	}		
	public function setModif(){
		$this->form_validation->set_rules('id', "ID", "numeric|required");
		$this->form_validation->set_rules('nombre', "Nombre", "max_length[50]|required");
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormModif();
		}else{
			$ok = $this->salasCRUD->editSala($id, $nombre);
			$this->getListado();
		}

	}		
}
