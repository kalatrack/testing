<?php 

	/**
	* 
	*/
	class Question_model extends MY_Model
	{
		//inthis array we write this question belongs_to other model
		// it is a process to use dependancy with others table and model and this 
		//function is available in MY_Model code funciton downloaded form gitHub 
		// belongs_t0 relationship will effect on model side not for table name
		// has_many relationship will effect by table name  
		protected $belongs_to = array('user');
		protected $has_many = array('answers' => array('primary_key' => 'question_id', 'model' => 'answer_model'));
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
		public function __construct()
		{
			parent::__construct();
			$this->_database = $this->db;
		}
		public function get_with_users(){
			$this->db->select('questions.*, users.first_name, users.last_name');
			$this->db->join('users','questions.user_id = users.id');
			return $this->get_all();
		}
		public function insert(){
			$data = array(
				'user_id'=> $this->input->post('user_id'),
				'subject'=> $this->input->post('subject'),
				'text'=> $this->input->post('text')
				);
			parent::insert($data);
		}
		
	}

 ?>