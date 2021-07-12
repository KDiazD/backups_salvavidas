<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CarritoController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('TienedaModel');
	}
	public function index()
	{
		$numero = $this->session->userdata('Numero');
		$letras = $this->session->userdata('Letra');
		$Codigo = $numero . $letras;
		$Id = $this->TienedaModel->IdVentas($Codigo);
		$IdVentas = $Id->Id_Ventas;
		
		$validar = $this->TienedaModel->ValidarVentasPro($IdVentas);
		if ($validar->contar >= 1) {
			$datos['Categorias'] = $this->TienedaModel->TraerCategoria();
			$this->load->view('Cliente/CodiRepetido/HeadViews');
			$this->load->view('Cliente/CodiRepetido/InLogoViews');
			$this->load->view('Cliente/CodiRepetido/NavigatorTienda', $datos);
			$datos['Productos'] = $this->TienedaModel->VentasProducto($IdVentas);
			$datos['Suma'] = $this->TienedaModel->sumaProducVentas($IdVentas);
			$this->load->view('Cliente/Tienda/CarritoViews', $datos);
			$this->load->view('Cliente/CodiRepetido/FooterViews');
		} 
		else {
			echo 'el carrito esta vacios' ;
		}
	}
}
