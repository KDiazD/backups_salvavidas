<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiendaControlles extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TienedaModel');
	}
	public function index()
	{
		$datos['Categorias']=$this->TienedaModel->TraerCategoria();
		$datos['Productos']= $this->TienedaModel->Traerprodu();
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/NavigatorTienda',$datos);
		$this->load->view('Cliente/Tienda/TiendaViews',$datos);
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
	public function Categoria($Id)
	{
		$datos['Productos']= $this->TienedaModel->TraerProductoCatego($Id);
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$datos['Categorias']=$this->TienedaModel->TraerCategoria();
		$this->load->view('Cliente/CodiRepetido/NavigatorTienda',$datos);
		$this->load->view('Cliente/Tienda/TiendaViews',$datos);
		$this->load->view('Cliente/CodiRepetido/FooterViews');

	}	
}