<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarritoController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('CodiRepetido/HeadViews');
		$this->load->view('CodiRepetido/InLogoViews');
		$this->load->view('CodiRepetido/Navigator');
		$this->load->view('Tienda/CarritoViews');
		$this->load->view('CodiRepetido/FooterViews');
	}
}