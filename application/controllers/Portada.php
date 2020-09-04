<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portada extends CI_Controller {

	
	
public function index()
	{
		
		//$this->load->database(); //ya no lo necesitamos por que en config/autoload colocacamos en librerias 'database'
		$this->load->model('modelo_portada');

	

	}
	public function formulario(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		if($this->session->userdata('usua_id')!=8)die("Aceso Denegado");
		
		
		$data['biblioteca_g9.usuario']=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_id ='{usua_id}'")->result();
		

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('usuarios/formulario',$data);
		$this->load->view('footer');
		
	}
	public function lista(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		if($this->session->userdata('usua_id')!=8)die("Aceso Denegado");
		
		
		$data['biblioteca_g9.usuario']=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_id ='{usua_id}'")->result();
		

		$this->load->view('header');
		$this->load->view('usuarios/lista',$data);
		$this->load->view('footer');
		
	}

}
