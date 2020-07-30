<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portada extends CI_Controller {
public function index()
	{
		
		//$this->load->database(); //ya no lo necesitamos por que en config/autoload colocacamos en librerias 'database'
		$this->load->model('modelo_portada');

	

	}

}
