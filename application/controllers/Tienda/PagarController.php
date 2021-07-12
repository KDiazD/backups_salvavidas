<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagarController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TienedaModel');
	}
	public function index()
	{

		$datos['Categorias']=$this->TienedaModel->TraerCategoria();
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/NavigatorTienda',$datos);
		$this->load->view('Cliente/Tienda/PagarViews');
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
}