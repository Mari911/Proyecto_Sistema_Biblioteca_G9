<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	public function confidencial(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		{
		$usua_id=$this->session->userdata('usua_id');
		
		$data['user']=$this->db->query("SELECT * FROM usuario WHERE usua_id ='{usua_id}'")->row();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('confidencial',$data);
		$this->load->view('footer');
		}
	}
	public function confidencial2(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		if($this->session->userdata('usua_id')!=8)die("Aceso Denegado");
		
		
		$data['biblioteca_g9.usuario']=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_id ='{usua_id}'")->result();
		

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('confidencial2',$data);
		$this->load->view('footer');
		
	}
	public function formulario(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		if($this->session->userdata('usua_id')!=8)die("Aceso Denegado");
		
		
		$data['biblioteca_g9.usuario']=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_id ='{usua_id}'")->result();
		

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('welcome/formulario',$data);
		$this->load->view('footer');
		
	}
	public function lista(){

		if($this->session->userdata('auth')!=true)die("Aceso Denegado");
		if($this->session->userdata('usua_id')!=8)die("Aceso Denegado");
		
		
		$data['biblioteca_g9.usuario']=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_id ='{usua_id}'")->result();
		

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('welcome/lista',$data);
		$this->load->view('footer');
		
	}
}
