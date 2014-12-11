<?php 


	/**
	* testing model for active record testinng
	*/
	class Test_model extends MY_Model{
		
		public function __construct(){
			parent::__construct();
		}
		public function active_work(){
			$this->db->select()->from('users');
			$this->db->join('questions','questions.user_id=users.id');
			$this->db->where('user_id',1);
			$data = $this->db->get();
			return $data->result();
		}
	}
?>