<?php 

	/**
	* 
	*/
	class Answer_model extends MY_Model
	{
		protected $belongs_to = array('user','question'=> array('primary_key'=>'question_id'));
		public $validation = array(
			array(
				'field' => 'user_id',
				'label' => '',
				'rules' => 'intval'
				),
			array(
				'field' => 'question_id',
				'label' => '',
				'rules' => 'intval'
				),
			array(
				'field' => 'answer',
				'label' => 'Answer',
				'rules' => 'required|trim'
				)
			);
		
		function __construct()
		{
			parent::__construct();
			$this->_database = $this->db;
		}
		public function insert(){
			$data = array(
				'user_id'=> $this->input->post('user_id'),
				'question_id'=> $this->input->post('question_id'),
				'text'=> $this->input->post('text')
				);
			parent::insert($data);
		}
	}

 ?>