<?php 
//use Netcarver\Textile;
	/**
	* 
	*/
	class Email extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		
		}
		
		function index(){
			// $parser = new Textile\Parser();
			// $string = 'h1. welcome '.PHP_EOL.PHP_EOL;
			// $string .= '* list item '.PHP_EOL;
			// $string.='* another list item'.PHP_EOL;
			// echo $parser->textileThis($string);

			$data = array('subview'=> 'homepage');
			$this->load->view('layouts/layout',$data);

		}

	}


 ?>