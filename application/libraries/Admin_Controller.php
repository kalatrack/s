<?php 
	/**
	* MY_Controller Admin_controller for user login check ects
	*/
	class Admin_Controller extends MY_Controller{
		
		function __construct(){	
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('user_m');
			$this->data["meta_title"] = 'My AweSome CMS'; 
			$this->load->helper('url');
			
			$exception_uri = array(
				'admin/user/login','admin/user/logout'
				);
			if(in_array(uri_string(), $exception_uri) == FALSE){
				if($this->user_m->loggedin() == FALSE){
					redirect('admin/user/login');
				}
			}

			
		}

	}

 ?>