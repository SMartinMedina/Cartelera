<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionesController extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('funcionesCRUD');
        $this->load->model('titulosCRUD');
        $this->load->model('salasCRUD');
        $this->load->model('paisesCRUD');
        $this->load->model('generosCRUD');
	}	
	public function index()	{
		$this->load->view("index", array(
							"data" => $intenciones,
							"mensaje" => $mensaje, 
							"cant" =>$cant ));		
	}
	public function getListado(){
		$funciones = $this->funcionesCRUD->getFunciones();
		for ($i=0;$i<sizeof($funciones); $i++) {
			$funciones[$i]->fecha = $this->espDateFormat($funciones[$i]->fecha);
			$funciones[$i]->hora =  $this->getHHMM($funciones[$i]->hora);
		}
		$this->load->view("main", array("page" => 'funciones/lista',
										"funciones" => $funciones));
	}
	public function getFormAlta(){
		$titulos = $this->titulosCRUD->getTitulos();
		$salas = $this->salasCRUD->getSalas();
		$this->load->view("main", array("page" => 'funciones/alta',
										"titulos" => $titulos,
										"salas" => $salas));		
	}
	public function setAlta(){
		$this->form_validation->set_rules('id_titulo', "Titulo", "numeric|required");
		$this->form_validation->set_rules('id_sala', "Sala",  "numeric|required");
		$this->form_validation->set_rules('fecha', "Fecha", "required|callback_date_format");
		$this->form_validation->set_rules('hora', "Hora", "required|callback_validate_time_format");
		$id_titulo = $_POST['id_titulo'];
		$id_sala = $_POST['id_sala'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormAlta();
		}else{			
			$fechaSQL = $this->sqlDateFormat($fecha);
			$ok = $this->funcionesCRUD->addFuncion($id_titulo, $id_sala,$fechaSQL,$hora);
			$this->getListado();
		}
	}
	public function getFormBaja($id){
		$funcion = $this->funcionesCRUD->getFuncion($id);
		$this->load->view("main", array("page" => 'funciones/baja',
										"funcion" => $funcion));	
	}
	public function setBaja(){
		$this->form_validation->set_rules('id_funcion', "ID", "numeric|required");
		$id = $_POST['id_funcion'];
		if ($this->form_validation->run() == FALSE){
			$this->getListado();
		}else{
			$funcion = $this->funcionesCRUD->deleteFuncion($id);			
			$this->getListado();
		}
	}	
	public function getFormModif($id){
		$titulos = $this->titulosCRUD->getTitulos();
		$salas = $this->salasCRUD->getSalas();
		$funcion = $this->funcionesCRUD->getFuncion($id);
		$funcion->fecha = $this->espDateFormat($funcion->fecha);		

		$this->load->view("main", array("page"=>'funciones/modificacion',
										"funcion" => $funcion, 
										"titulos" => $titulos, 
										"salas" => $salas));
	}
	public function getView($id){
		$titulos = $this->paisesCRUD->getPaises();
		$salas = $this->generosCRUD->getGeneros();		
		$funcion = $this->funcionesCRUD->getFuncion($id);
		$funcion->fecha = $this->espDateFormat($funcion->fecha);
		$funcion->hora = $this->getHHMM($funcion->hora);
		$this->load->view("main", array("page"=>'funciones/ver',
										"funcion" => $funcion, 
										"titulos" => $titulos, 
										"salas" => $salas));
	}	
	public function setModif(){
		$this->form_validation->set_rules('id_funcion', "ID", "numeric|required");
		$this->form_validation->set_rules('id_titulo', "Titulo", "numeric|required");
		$this->form_validation->set_rules('id_sala', "Sala",  "numeric|required");
		$this->form_validation->set_rules('fecha', "Fecha", "required|callback_date_format");
		$this->form_validation->set_rules('hora', "Hora", "required|callback_validate_time_format");
		$id = $_POST['id_funcion'];
		$id_titulo = $_POST['id_titulo'];
		$id_sala = $_POST['id_sala'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormModif($id);
		}else{
			$fechaSQL = $this->sqlDateFormat($fecha);
			$ok = $this->funcionesCRUD->editFuncion($id, $id_titulo, $id_sala,$hora,$fechaSQL);
			$this->getListado();
		}

	}

	public function validate_time_format($str)
	{
		if (strrchr($str,":")) {
	        list($hh, $mm, $ss) = explode(':', $str);
	        if (!is_numeric($hh) || !is_numeric($mm) || !is_numeric($ss)){
	            return FALSE;
	        }elseif ((int) $hh > 24 || (int) $mm > 59 || (int) $ss > 59){
	            return FALSE;
	        }elseif (mktime((int) $hh, (int) $mm, (int) $ss) === FALSE){
	            return FALSE;
	        }
       		return TRUE;
	    }else{
	        return FALSE;
	    }   
	}
	public function date_format($date) {
		if (strrchr($date,"/")) {
	        list($dd, $mm, $yyyy) = explode('/', $date);
	        if (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)){
	        	$this->form_validation->set_message('date_format', 
	        		'El campo fecha es requerido y debe tener un formato válido.');
	            return FALSE;
	        }
       		return TRUE;
	    }else{
	    	$this->form_validation->set_message('date_format', 
	        		'El campo fecha es requerido y debe tener un formato válido.');
	        return FALSE;
	    }   

	}
	public function sqlDateFormat($fecha)
	{
		list($dd,$mm,$yyyy) = explode('/',$fecha);
		return $yyyy."-".$mm."-".$dd;
	}
	public function espDateFormat($fecha)
	{
		list($yyyy,$mm,$dd) = explode('-',$fecha);
		return $dd."/".$mm."/".$yyyy;
	}
	public function getHHMM($hora_full){
		return substr($hora_full, 0, 5); 

	}
}
