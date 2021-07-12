<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControllers extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		//$this->logged_in();
	}
	/*private function logged_in()
	{
		if (!$this->session->userdata('authenticated')) {
			redirect(base_url());
		}
	}*/
	public function index()
	{
		$this->load->view('Admin/CodiRepetido/HeadViews');
		$this->load->view('Admin/CodiRepetido/NavigatorViews');
		$this->load->view('Admin/Page/IndexViews');
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
	
	public function Profile()
	{
		$Id_User = $this->session->userdata('Id_user');
		$this->load->view('Admin/CodiRepetido/HeadViews');
		$this->load->view('Admin/CodiRepetido/NavigatorViews');
		$datos['Users'] = $this->AdminModel->TraerUser($Id_User);
		$datos['TraerTpDocuemt'] = $this->AdminModel->TraerTpDocuemt();
		$datos['traerPaises'] = $this->AdminModel->traerPaises();
		$this->load->view('Admin/Page/ProfileViews', $datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}

	public function EditPerfil()
	{
		$Nombre = $this->input->post('NameUsers');
		$Apellido = $this->input->post('LastNameUsers');
		$EmailUsers = $this->input->post('EmailUsers');
		$FechaNaci = $this->input->post('FechaNacimentoUsers');
		$Id_TpDocument = $this->input->post('Id_TpDocument');
		$NumeroDocument = $this->input->post('NumDocumentUsers');
		$FechaExpedicion = $this->input->post('FechaExpedi');
		$Id_pais = $this->input->post('Id_Pais');
		$ciudad = $this->input->post('Ciudad');
		$Id_User = $this->input->post('Id_User');
		$this->AdminModel->EditUsers($Nombre, $Apellido, $EmailUsers, $FechaNaci, $Id_TpDocument, $NumeroDocument, $FechaExpedicion, $Id_pais, $ciudad, $Id_User);
		$this->session->set_flashdata('Editar', ' ');
		redirect(base_url() . 'Admin/Perfil');
	}
	public function EditarFoto()
	{
		$foto = $this->input->post('tcarga');
		$Id = $this->input->post('id');
		$this->AdminModel->Editarfoto($foto, $Id);
		redirect(base_url() . 'Admin/Perfil');
	}
	public function Editarpass()
	{
		//$this->load->library('encrypt');
		//$encrypted_string = $this->encrypt->encode($actual);
		$actual = $this->input->post('ActualPass');
		$NeW = $this->input->post('NewPass');
		$ConPass = $this->input->post('ConPass');
		$Id_User = $this->input->post('Id_User');
		$validar = $this->AdminModel->ValidarPass($Id_User);
		if (password_verify($actual, $validar->PassUser)) {
			if ($NeW == $ConPass) {
				
				$encrypted_pass = password_hash("$NeW", PASSWORD_DEFAULT) . "\n";

				$this->AdminModel->ModiPAss($encrypted_pass, $Id_User);

				redirect(base_url() . '/Admin/Perfil');

				$this->session->set_flashdata('password', ' ');
			    redirect(base_url() . '/Admin/Perfil');
			} else {
				$this->session->set_flashdata('NoConsidenpassword', ' ');
				redirect(base_url() . '/Admin/Perfil');
			}
		} else {
			$this->session->set_flashdata('erropassword', ' ');
			redirect(base_url() . '/Admin/Perfil');
		}
	}
}
