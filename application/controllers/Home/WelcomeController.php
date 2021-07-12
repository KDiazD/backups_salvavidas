<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Cliente/Partials/HeadViews');
		$this->load->view('Cliente/Home/CarousellViews');
		$this->load->view('Cliente/Partials/Navbar');
		$this->load->view('Cliente/Welcome/WelcomeBodyViews');
		$this->load->view('Cliente/Partials/ContactoViews');
		$this->load->view('Cliente/Partials/FooterViews');
	}
		
	public function inicio()
	{
		echo 'leo';
		//$this->load->view('welcome_message');
	}
}
