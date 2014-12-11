<?php 

	/**
	* login user and redirect to the questions controller
	*/
	class Questions extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('question_model');
			$this->load->model('answer_model');
			$this->output->enable_profiler(TRUE);

		}
		public function add(){
			if(count($_POST)){
					$this->question_model->insert();
					redirect('questions/listing');s
			}	
				$this->load_view('questions/add');
		}
		public function detail($id){
			$this->data['question'] = $this->question_model->with('user')->get($id);
			$this->db->where('question_id', $id);
			$this->data['answers'] = $this->answer_model->with('user')->get_all();
			$this->load_view('questions/detail');	

			// $this->form_validation->set_rules($this->answer_model->validation);
			// $this->form_validation->run();
			if(count($_POST)){
				$this->answer_model->insert();
			}		

		}
		public function listing(){
			$this->data['questions'] = $this->question_model->get_with_users();
			$this->load_view('questions/listing',$this->data);	
		
		}
	}
 ?>