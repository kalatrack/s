<?php 
	/**
	* migration for database automatations
	*/
	class Migration extends Admin_Controller{
		
		function __construct(){
			
			parent::__construct();						
		}

		function index(){
			$this->load->library('migration');
			if ( ! $this->migration->current()){
				show_error($this->migration->error_string());
			}else{
				$this->data['a'] =  "Migration Just Worked Well...";
				$this->load->view("migration", $this->data);
			}
		}
	}

 ?>