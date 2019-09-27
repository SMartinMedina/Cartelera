<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('titulosCRUD');
        $this->load->model('salasCRUD');
        $this->load->model('funcionesCRUD');
	}	
	public function index()	{

	}
}
