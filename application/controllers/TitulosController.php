<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TitulosController extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('titulosCRUD');
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
		$titulos = $this->titulosCRUD->getTitulos();
		$this->load->view("main", array("page" => 'titulos/lista',
										"titulos" => $titulos));
	}
	public function getFormAlta(){
		$paises = $this->paisesCRUD->getPaises();
		$generos = $this->generosCRUD->getGeneros();
		$this->load->view("main", array("page" => 'titulos/alta',
										"paises" => $paises,
										"generos" => $generos));		
	}
	public function setAlta(){
		$this->form_validation->set_rules('nombre', "Nombre", "max_length[50]|required");
		$this->form_validation->set_rules('id_pais_origen', "Pais", "numeric|required");
		$this->form_validation->set_rules('id_genero', "Genero",  "numeric|required");
		$this->form_validation->set_rules('idioma_hablado', "Idioma", "required");
		$this->form_validation->set_rules('idioma_subtitulo', "Subitulos", "max_length[50]");
		$this->form_validation->set_rules('duracion', "Duracion", "numeric|required");
		$nombre = $_POST['nombre'];
		$id_pais_origen = $_POST['id_pais_origen'];
		$id_genero = $_POST['id_genero'];
		$idioma_hablado = $_POST['idioma_hablado'];
		$idioma_subtitulo = $_POST['idioma_subtitulo'];
		$duracion = $_POST['duracion'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormAlta();
		}else{			
			$ok = $this->titulosCRUD->addTitulo($nombre, $id_pais_origen,$id_genero,$idioma_hablado,$idioma_subtitulo,$duracion);
			$this->getListado();
		}
	}
	public function getFormBaja($id){
		$titulo = $this->titulosCRUD->getTitulo($id);
		$this->load->view("main", array("page" => 'titulos/baja',
										"titulo" => $titulo));	
	}
	public function setBaja(){
		$this->form_validation->set_rules('id', "ID", "numeric|required");
		$id = $_POST['id'];
		if ($this->form_validation->run() == FALSE){
			$this->getListado();
		}else{
			$titulo = $this->titulosCRUD->deleteTitulo($id);			
			$this->getListado();
		}
	}	
	public function getFormModif($id){
		$paises = $this->paisesCRUD->getPaises();
		$generos = $this->generosCRUD->getGeneros();		
		$titulo = $this->titulosCRUD->getTitulo($id);
		$this->load->view("main", array("page" => 'titulos/modificacion',
										"titulo" => $titulo, 
										"paises" => $paises, 
										"generos" => $generos));			
	}	
	public function getView($id){
		$paises = $this->paisesCRUD->getPaises();
		$generos = $this->generosCRUD->getGeneros();		
		$titulo = $this->titulosCRUD->getTitulo($id);
		$this->load->view("main", array("page" => 'titulos/ver',
										"titulo" => $titulo, 
										"paises" => $paises, 
										"generos" => $generos));			
	}		
	public function setModif(){
		$this->form_validation->set_rules('id', "ID", "numeric|required");
		$this->form_validation->set_rules('nombre', "Nombre", "max_length[50]|required");
		$this->form_validation->set_rules('id_pais_origen', "Pais", "numeric|required");
		$this->form_validation->set_rules('id_genero', "Genero",  "numeric|required");
		$this->form_validation->set_rules('idioma_hablado', "Idioma", "required");
		$this->form_validation->set_rules('idioma_subtitulo', "Subitulos", "max_length[50]");
		$this->form_validation->set_rules('duracion', "Duracion", "numeric|required");
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$id_pais_origen = $_POST['id_pais_origen'];
		$id_genero = $_POST['id_genero'];
		$idioma_hablado = $_POST['idioma_hablado'];
		$idioma_subtitulo = $_POST['idioma_subtitulo'];
		$duracion = $_POST['duracion'];
		if ($this->form_validation->run() == FALSE){
			$this->getFormModif($id);
		}else{
			$ok = $this->titulosCRUD->editTitulo($id, $nombre, $id_pais_origen,$id_genero,$idioma_hablado,$idioma_subtitulo,$duracion);
			$this->getListado();
		}

	}		
}
