<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('LoginModel');
		$this->load->model('TienedaModel');
	}


	public function index()
	{
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/Navigator');
		$this->load->view('Cliente/Welcome/LoginBodyViews');
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
	public function newPass($Id_User = null)
	{
		$ID = $Id_User;
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/Navigator');
		$this->load->view('Cliente/Welcome/NewPassViews', compact("ID"));
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
	public function Login()
	{
		$users = $this->input->post('Email');
		$pass = $this->input->post('Password');

		$valida = $this->LoginModel->consulta_cuenta($users);
		if (password_verify($pass, $valida->PassUser)) {
			$pass = $valida->PassUser;
			$resul = $this->LoginModel->Traer_datos($users, $pass);
			$codigo=$this->TienedaModel->Codigo();
			$codigos = $codigo->contar;
			$letras = $codigo->Lectra;
			$this->TienedaModel->AgreCodi($codigos,$letras);
			
			$sess_data = array(
				"Id_user" => $resul->Id_User,
				"Nombre" => $resul->NameUser,
				"Apellido" => $resul->LastNameUser,
				"Foto"=> $resul->Photo,
				"Email" => $resul->EmailUser,
				"rol" => $resul->Rol,
				"Letra"=>$letras,
				"Numero"=>$codigos,
				'authenticated' => TRUE
			);
			$this->session->set_userdata($sess_data);
			if ($resul->Rol == "Cliente") {
				redirect(base_url());
			} 
			elseif ($resul->Rol == "Administrador") {
				redirect(base_url() . 'Admin');
			}		
		}
		else {
			echo 'las contraseña y el correo no coinciden';
		}
	
	}

	public function Registre()
	{
		//$this->load->library('encrypt');
		$Name = $this->input->post('NameUser');
		$LastName = $this->input->post('LastNameUser');
		$Email = $this->input->post('EmailUser');
		//$Pass = $this->encrypt->encode($this->input->post('PassUser'));
		$Pass =$this->input->post('PassUser');
		$encrypted_pass = password_hash("$Pass", PASSWORD_DEFAULT) . "\n";
		
		$foto = $this->input->post('foto');
		$Id_rol = $this->input->post('Id_rol');
		

		$validar = $this->LoginModel->ContarUser($Name, $LastName, $Email, $Id_rol);
		if ($validar->contar == 1) {
			echo 'ya esta registrado';
			//$this->session->set_flashdata('errorValides', ' ');
			//redirect(base_url().'Login');
		} else {
			$this->LoginModel->AgregarUser($Name,$LastName,$Email,$foto,$encrypted_pass,$Id_rol);
			echo 'se a guardado';
			//$this->session->set_flashdata('Agregar', ' ');
			//redirect(base_url().'Login');
		}
		
	}
	public function recovered()
	{
		$Email = $this->input->post('Email');

		$validar = $this->LoginModel->contarId($Email);

		if ($validar->contar == 1) {
			$this->load->library('email');
			$dato = $this->LoginModel->TraerIdemail($Email);
			$Id_User = $dato->Id_User;
			$configuraciones['mailtype'] = 'html';
			$this->email->initialize($configuraciones);
			$this->email->from('salvavida@salvavidasgroup.com', 'Salvavida');
			$this->email->to($Email);
			$this->email->subject('Recupera contraseña');
			$this->email->message('<p> para poder cambiar la contraseña tiene hacer click en esta link</p><br><a href="https://salvavidasgroup.com.co/Login/nuevo/' . $Id_User . '">Cambiar la contraseña</a>');
			if ($this->email->send()) {
				echo 'se a enviado el correo';
				//echo $this->email->print_debugger();
			} else {
				//$this->session->set_flashdata('correNoEnvido', ' ');
				echo 'correo no se a enviado';
			}
		} else {
			//$this->session->set_flashdata('CorreoNoExiste', ' ');
			echo 'el correo no existe';
		}
	}
	public function MoficarContra()
	{
		$Newpass = $this->input->post('NewPassUser');
		$RePAss = $this->input->post('RePassUser');
		$Id_user = $this->input->post('Id_User');
		if ($Newpass == $RePAss) {
			$encrypted_pass = password_hash("$Newpass", PASSWORD_DEFAULT) . "\n";
			$this->LoginModel->ModiPAss($encrypted_pass, $Id_user);
			redirect(base_url() . 'Login/nuevo/' . $Id_user);
		} else {
			//$this->session->set_flashdata('ContrseNocon', ' ');
			echo 'las contraseñas no considen ';
		}
	}
	public function salir()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
