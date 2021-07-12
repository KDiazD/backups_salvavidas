<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductoControllers extends CI_Controller {

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
		$datos['Productos']=$this->AdminModel->TraerPro();
		$datos['Categoria']=$this->AdminModel->TraerCategoria();
        $this->load->view('Admin/Page/PrductoViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
	public function AgregarPrducto()
	{
		$Nombre= $this->input->post('Nombre');
		$tcarga= $this->input->post('tcarga');
		$Marca= $this->input->post('Marca');
		$PrecioPubli= $this->input->post('PrecioPubli');
		$PrecioAsoci= $this->input->post('PrecioAsoci');
		$Descripcion= $this->input->post('Descripcion');
		$Id_Categoria= $this->input->post('Id_Categoria');
		$this->AdminModel->AgregarPro($Nombre,$Marca,$Descripcion,$PrecioPubli,$PrecioAsoci,$tcarga,$Id_Categoria);
		$this->session->set_flashdata('Guardar', ' ');
		redirect(base_url().'Admin/Producto');
	}
	public function EditarPro()
	{
		$Nombre= $this->input->post('Nombre');
		$tcarga= $this->input->post('tcarga');
		$Marca= $this->input->post('Marca');
		$PrecioPubli= $this->input->post('publico');
		$PrecioAsoci= $this->input->post('asociado');
		$Descripcion= $this->input->post('Descripcion');
		$Id_Categoria= $this->input->post('Id_Categoria');
		$Id_Producto = $this->input->post('Id_Producto');
		$this->AdminModel->EditarPro($Nombre,$Marca,$Descripcion,$PrecioPubli,$PrecioAsoci,$Id_Categoria,$Id_Producto);
		$this->session->set_flashdata('EditarPro', ' ');
		redirect(base_url().'Admin/Producto');
	}
	public function editarFoto()
	{
		$Id_Producto=$this->input->post('id');
		$Cagar=$this->input->post('tcarga');
		$this->AdminModel->ModificarFoto($Cagar,$Id_Producto);
		$this->session->set_flashdata('EditarProFot', ' ');
		redirect(base_url().'Admin/Producto');
	}
	public function EliminarPro()
	{
		$Id_Producto=$this->input->post('Id_Producto');
		$this->AdminModel->EliminarPro($Id_Producto);
		$this->session->set_flashdata('EliminarPro', ' ');
		redirect(base_url().'Admin/Producto');
	}
}