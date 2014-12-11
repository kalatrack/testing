<?php 

	/**
	* 
	*/
	class Test extends MY_Controller{
		public $dat = array();
		public function __construct(){
			parent::__construct();
			$this->load->model('test_model');
		}
		public function index(){
			$dat['user'] = $this->test_model->active_work();
			$this->load->view('test',$dat);
		}

	}
?>