<?php 

	/**
	* 
	*/
	class User_model extends MY_Model{

		protected $has_many = array('questions','answers');
		public $validation = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email'
				),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|trim'
				)
			);
		
		function __construct(){
			parent::__construct();
			$this->_database = $this->db;
		}
	}

 ?>