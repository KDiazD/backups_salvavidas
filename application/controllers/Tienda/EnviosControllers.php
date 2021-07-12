<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnviosControllers extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TienedaModel');
	}
	public function index()
	{
		$Id_ventas=$this->input->post('Id_ventas');
		
		$datos['Id_ventas']=$Id_ventas;
		$datos['Categorias']=$this->TienedaModel->TraerCategoria();
        $datos['municipos']=$this->TienedaModel->TraerMunicipo();
        $datos['departamentos']=$this->TienedaModel->TraerDpartamento();
        $datos['direccion']=$this->TienedaModel->TraerDirecion();
		$this->load->view('Cliente/CodiRepetido/HeadViews');
		$this->load->view('Cliente/CodiRepetido/InLogoViews');
		$this->load->view('Cliente/CodiRepetido/NavigatorTienda',$datos);
		$this->load->view('Cliente/Tienda/EnviosViews',$datos);
		$this->load->view('Cliente/CodiRepetido/FooterViews');
	}
    public function agregarEnvios()
    {
      $Nombre=$this->input->post('Nombre');
	  $Apellido=$this->input->post('Apellido');
	  $Id_municipio=$this->input->post('Id_municipio');
	  $Id_departamento=$this->input->post('Id_departamento');
	  $Id_Direccion=$this->input->post('Id_Direccion');
	  $direccion=$this->input->post('direccion');
	  $barrio=$this->input->post('barrio');
	  $numero=$this->input->post('numero');
	  $Id_ventas=$this->input->post('Id_ventas');
	  $Id_Estado=1;
	  $this->TienedaModel->AgregarEnvios($Nombre,$Apellido,$Id_Direccion,$direccion,$barrio,$numero,$Id_ventas,$Id_municipio,$Id_departamento);
	  redirect(base_url().'Tienda/Pagar');
    }
}