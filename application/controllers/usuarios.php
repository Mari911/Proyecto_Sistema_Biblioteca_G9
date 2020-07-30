<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
	public function index()
	{

		
		//$this->load->database(); //ya no lo necesitamos por que en config/autoload colocacamos en librerias 'database'
		$this->load->model('model_personas');

		$result = $this->model_personas->consultar();
		//var_dump($result); //para ver que te esta enviando
		$datos = array('registros'=>$result);

		$this->load->view('header');
		$this->load->view('usuarios/lista',$datos);
		$this->load->view('footer');
	}
	public function Menu()
	{	
		$this->load->view('header');
		$this->load->view('usuarios/menu');
		$this->load->view('footer');
	}

	public function formulario()
	{	
		$this->load->view('header');
		$this->load->view('usuarios/formulario');
		$this->load->view('footer');
	}
	public function editar()
	{	
		$this->load->view('header');
		$this->load->view('usuarios/editar');
		$this->load->view('footer');
	}

	

	public function guardar()
	{
		$usua_login=$this->input->post('usua_login');
		$usua_password=$this->input->post('usua_password');
		$usua_codigo=$this->input->post('usua_codigo');
		$usua_nombres=$this->input->post('usua_nombres');
		$usua_apellidos=$this->input->post('usua_apellidos');
		$usua_direccion=$this->input->post('usua_direccion');
		$usua_email=$this->input->post('usua_email');
		$usua_telefono=$this->input->post('usua_telefono');
		$usua_esadmin=$this->input->post('usua_esadmin');
		
		$this->load->model('model_personas');

		$data = array(
			'usua_login'=>$usua_login,
			'usua_password'=>$usua_password,
			'usua_codigo'=>$usua_codigo,
			'usua_nombres'=>$usua_nombres,
			'usua_apellidos'=>$usua_apellidos,
			'usua_direccion'=>$usua_direccion,
			'usua_email'=>$usua_email,
			'usua_telefono'=>$usua_telefono,
			'usua_esadmin'=>$usua_esadmin
		);

		$this->model_personas->guardar($data);

		redirect('usuarios');//una ves guardado se redirige a perosnas
}
	public function eliminar()
	{	
		$this->load->view('header');
		$this->load->view('usuarios/eliminar');
		$id=$this->url->segment(3);
		$this->model_personas->eliminar($id);


		$this->load->view('footer');
	}
	/*public function editar()
	{	
		$usua_login=$this->input->post('usua_login');
		$usua_password=$this->input->post('usua_password');
		$usua_codigo=$this->input->post('usua_codigo');
		$usua_nombres=$this->input->post('usua_nombres');
		$usua_apellidos=$this->input->post('usua_apellidos');
		$usua_direccion=$this->input->post('usua_direccion');
		$usua_email=$this->input->post('usua_email');
		$usua_telefono=$this->input->post('usua_telefono');
		$usua_esadmin=$this->input->post('usua_esadmin');
		
		$this->load->model('model_personas');

				

$result = $db->query("UPDATE persona SET usua_login='{$usua_login}', usua_password='{$usua_password}', usua_codigo='{$usua_codigo}',  usua_nombres='{$usua_nombres}', usua_apellidos='{$usua_apellidos}', usua_direccion='{$usua_direccion}', usua_email='{$usua_email}', usua_telefono='{$usua_telefono}' WHERE usua_id='{$usua_id}'");

$this->model_personas->editar($data);

		
	}*/
}
class Portada extends CI_Controller {
public function index()
	{
		
		//$this->load->database(); //ya no lo necesitamos por que en config/autoload colocacamos en librerias 'database'
		$this->load->model('modelo_portada');

		

	}

}
?>
<html>

</html>
