<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('Login');
		$this->load->view('footer');
	}

	public function evaluar(){
		$usua_login =$this->input->post('usua_login');
		$usua_password =$this->input->post('usua_password');

		$result=$this->db->query("SELECT * FROM biblioteca_g9.usuario WHERE usua_login ='{$usua_login}' AND usua_password='{$usua_password}'");
		
		if($result->num_rows()>0){

			$row=$result->row();

			echo "Bienvenido ($usua_login)";
			$data=array('user'=>$usua_login, 'usua_id'=>$row->usua_id, 'auth'=>true); 
			$this->session->set_userdata($data);
			redirect();
		}
		else{
			echo "Usuario o Contraseña incorrecta.";
			redirect('Login');
			}
		
		/*
		if($usuario=='admin'&&$password=='123'){
			echo "Bienvenido ($usuario)";
			$data=array('user'=>$usuario, 'auth'=>true);
			$this->session->set_userdata($data);
			redirect();
		}
		else{
			echo "Usuario o Contraseña incorrecta.";
		}*/


		//echo $usuario." ".$password; //muestra la contraseña y usuario

		
	}

	public function salir(){
		$this->session->sess_destroy();//elimina
		redirect();
	}

	public function mostrar(){
			if($this->session->userdata('auth')==true){
				echo "esto es confidencial";
			}
			else{
				echo "no tienes privilegios para ver esta infroacion ";
			}
		}
}
