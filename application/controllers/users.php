<?php 

	/**
	* 
	*/
	class Users extends MY_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function index(){
			if(!$this->ion_auth->logged_in()){
				redirect('users/login');
			}else{
				redirect('questions/listing');
			}
		}
		public function login(){
			//TODO redirect if user already logged in 
			if($this->ion_auth->logged_in() == TRUE){
				redirect('questions/listing');
			}
			//TODO setup form
			$this->form_validation->set_rules($this->user_model->validation);

			//TODO process the form
			if($this->form_validation->run() == TRUE){
				var_dump($_POST);
				//TODO Try to login
				if($this->ion_auth->login($this->input->post('email'),$this->input->post('password'))==TRUE){
			//TODO redirect 
					redirect('questions/listing');
				}else{
			//TODO Displaying error messages
					
				$this->data['error'] = 'we could not login in ';
				}
			}
			
			//TODO set up subview & load layout
			echo 'please login now';
			$this->load_view('users/login');
		}
		public function logout(){ 
			$this->ion_auth->logout();
			redirect('users/login');
		}
		public function register(){
			
		}
	}
 ?>