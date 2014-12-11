<?php 

	/**
	* 
	*/
	class MY_Controller extends CI_Controller{
		
		public $data = array();

		public function __construct(){
			parent::__construct();
			//$this->load->database();
			//$this->load->library('ion_auth');
			$no_redirect = array('users/login');
			if($this->ion_auth->logged_in() == FALSE && !in_array(uri_string(), $no_redirect)){
				redirect('users/login');
			}
		}
		public function load_view($subview){
			$this->data['subview'] = $subview; 
			$data = array('subview' => $subview);
			$this->load->view('layouts/layout',$this->data);
		}
		
	}
 ?>