<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	
	public function index()
	{ 
		$this->load->view('Welcome/HeadViews');
		$this->load->view('Welcome/RegisterBodyViews');
		$this->load->view('Welcome/FooterViews');
        
	}
		
}