<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuienesSomosController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Cliente/Partials/HeadViews');
		$this->load->view('Cliente/Partials/Navbar');
		$this->load->view('Cliente/QuienesSomos/InfoEmpresaViews');
		$this->load->view('Cliente/QuienesSomos/DatosEmpresaViews');
		$this->load->view('Cliente/QuienesSomos/EquipoCorporativoViews');
		$this->load->view('Cliente/QuienesSomos/ConveniosEmpresarialesViews');
		$this->load->view('Cliente/Partials/FooterViews');

	}
}
