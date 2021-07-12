<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PedidosControlers extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		//$this->logged_in();
	}
	/*private function logged_in()
	{
		if (!$this->session->userdata('authenticated')) {
			redirect(base_url());
		}
	}*/
	
	public function index()
	{
		$this->load->view('Admin/CodiRepetido/HeadViews');
		$this->load->view('Admin/CodiRepetido/NavigatorViews');
        $datos['Pedidos']=$this->AdminModel->TraerPedido();
        $this->load->view('Admin/Page/PedidoViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');
	}
    public function VerProducto($Id_Ventas)
    {
        $this->load->view('Admin/CodiRepetido/HeadViews');
		$this->load->view('Admin/CodiRepetido/NavigatorViews');
        $datos['envios']=$this->AdminModel->Envios($Id_Ventas);
		$datos['Pedidos']=$this->AdminModel->TraerPedidoPro($Id_Ventas);
        $this->load->view('Admin/Page/PedidosProViews',$datos);
		$this->load->view('Admin/CodiRepetido/FooterViews');

    }
}