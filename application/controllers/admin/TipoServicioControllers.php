<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoServicioControllers extends CI_Controller {

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
        $datos['Servicios']=$this->AdminModel->TraerTipoServe();
        $this->load->view('Admin/Page/TipoServicioViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
    public function agregarServicio()
    {
        $Servicio= $this->input->post('Servicio');
        $this->AdminModel->AgregarServicio($Servicio);
        $this->session->set_flashdata('Guardar', ' ');
        redirect(base_url().'Admin/TipoServi');
    }
    public function modificarTpServi()
    {
        $TipoServicio=$this->input->post('TipoServicio');
        $Id_TipoServicio= $this->input->post('Id_TipoServicio');
        $this->AdminModel->ModificarTpoServi($TipoServicio,$Id_TipoServicio);
        $this->session->set_flashdata('EditarCategor', ' ');
        redirect(base_url().'Admin/TipoServi');
    }
    public function EliminarTpServi()
    {
       
        $Id_TipoServicio= $this->input->post('Id_TipoServicio');
        $this->AdminModel->EliminarTpServi($Id_TipoServicio);
        $this->session->set_flashdata('EliminarCategor', ' ');
        redirect(base_url().'Admin/TipoServi');
    }
}