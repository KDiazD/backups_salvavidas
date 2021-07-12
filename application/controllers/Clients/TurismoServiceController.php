<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TurismoServiceControlelr extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Cliente/Partials/HeadViews');
		$this->load->view('Cliente/Partials/Navbar');
		$this->load->view('Cliente/Servicios/Turismo/InfoTurismoViews');
		$this->load->view('Cliente/Servicios/Turismo/BeneficiosTurismoViews');
		$this->load->view('Cliente/Servicios/Turismo/GaleriaTurismoViews');
		$this->load->view('Cliente/Partials/FooterViews');

	}
}