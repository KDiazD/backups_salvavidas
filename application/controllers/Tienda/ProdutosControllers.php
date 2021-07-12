<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutosControllers extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TienedaModel');
	}
	public function Producto($Id_Producto)
	{
		
		$datos['Categorias']=$this->TienedaModel->TraerCategoria();
		$datos['ElPrductos']=$this->TienedaModel->TraerUnpro($Id_Producto);
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/NavigatorTienda',$datos);
		$this->load->view('Cliente/Tienda/ProductosViews',$datos);
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
	public function AgregarVentas()
	{
		$Cantidad=$this->input->post('Cantidad');
		$Precio=$this->input->post('precio');
		$Id_Producto=$this->input->post('Id_producto');
		$Id_user=$this->input->post('Id_user');
		$Codigo=$this->input->post('Codigo');
		$Id_Producto=$this->input->post('Id_producto');
		$total= $Cantidad*$Precio ;
		$TotalDEc = number_format($total, 3, '.', '');
		$validar=$this->TienedaModel->ValidarVentas($Codigo);
		if ($validar->contar==1) {
			$Id=$this->TienedaModel->IdVentas($Codigo);
			$IdVentas=$Id->Id_Ventas;
			$this->TienedaModel->AgreVenPro($IdVentas,$Id_Producto,$Cantidad,$TotalDEc);
			redirect(base_url().'Tienda/Producto/'.$Id_Producto);
		} 
		else {
			$this->TienedaModel->AgreVentas($Codigo,$Id_user);
			$Id=$this->TienedaModel->IdVentas($Codigo);
			$IdVentas=$Id->Id_Ventas;
			$this->TienedaModel->AgreVenPro($IdVentas,$Id_Producto,$Cantidad,$TotalDEc);
			redirect(base_url().'Tienda/Producto/'.$Id_Producto);
		}
	}
	
}