<?php
	class Adminpage extends CI_Controller{
		public function index(){

		

			$data['title'] = ucfirst($page);
			
			$this->load->view('adminpages/templates/header');
			$this->load->view('adminpages/'.$page, $data);
			$this->load->view('adminpages/templates/footer');
		}
	}


?>