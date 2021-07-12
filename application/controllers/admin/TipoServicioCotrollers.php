<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoServicioCotrollers extends CI_Controller {

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
        $datos['Categoria']=$this->AdminModel->TraerCategoria();
        $this->load->view('Admin/Page/CategoriaViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
    public function agregarCategoria()
    {
        $Categoria= $this->input->post('categoria');
        $this->AdminModel->AgregarCategori($Categoria);
        $this->session->set_flashdata('Guardar', ' ');
        redirect(base_url().'Admin/Catgoria');
    }
    public function modificarCatego()
    {
        $Categoria=$this->input->post('Categoria');
        $Id_categoria= $this->input->post('Id_categoria');
        $this->AdminModel->ModicarCatego($Categoria,$Id_categoria);
        $this->session->set_flashdata('EditarCategor', ' ');
        redirect(base_url().'Admin/Catgoria');
    }
    public function EliminarCate()
    {
       
        $Id_categoria= $this->input->post('Id_categoria');
        $this->AdminModel->Eliminar($Id_categoria);
        $this->session->set_flashdata('EliminarCategor', ' ');
        redirect(base_url().'Admin/Catgoria');
    }
}