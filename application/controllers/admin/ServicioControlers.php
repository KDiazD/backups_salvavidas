<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicioControlers extends CI_Controller {

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
		$datos['Servicios']=$this->AdminModel->TraerServicio();
		$datos['TpServicios']=$this->AdminModel->TraerTipoServe();
        $this->load->view('Admin/Page/ServicioViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
	public function AgregarServio()
	{
		$Nombre= $this->input->post('Nombre');
		$tcarga= $this->input->post('tcarga');
		$Descripcion= $this->input->post('Descripcion');
		$Id_TipoServicio= $this->input->post('Id_TipoServicio');
		$this->AdminModel->AgrgarServi($Nombre,$Id_TipoServicio,$tcarga,$Descripcion);
		$this->session->set_flashdata('Guardar', ' ');
		redirect(base_url().'Admin/Servicio');
	}
	public function EditarServicio()
	{
		$Nombre= $this->input->post('Nombre');
		$Descripcion= $this->input->post('Descripcion');
		$Id_TipoServicio= $this->input->post('Id_TipoServicio');
		$Id_servicio = $this->input->post('Id_servicio');
		$this->AdminModel->EditarServicio($Nombre,$Id_TipoServicio,$Descripcion,$Id_servicio);
		$this->session->set_flashdata('EditarPro', ' ');
		redirect(base_url().'Admin/Servicio');
	}
	public function EditarFoto()
	{ 
        
		$Id_servicio=$this->input->post('id');
		$Cagar=$this->input->post('tcarga');
		$this->AdminModel->EditarFtoServicio($Cagar,$Id_servicio);
		$this->session->set_flashdata('EditarProFot', ' ');
		redirect(base_url().'Admin/Servicio');
	}
	public function EliminarServi()
	{
		$Id_servicio=$this->input->post('Id_servicio');
		$this->AdminModel->Eliminarservi($Id_servicio);
		$this->session->set_flashdata('EliminarPro', ' ');
		redirect(base_url().'Admin/Servicio');
	}
}