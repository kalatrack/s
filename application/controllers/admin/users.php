<?php 

	/**
	* 
	*/
	class Users extends Admin_Controller{
		
		function __construct(){
			parent::__construct();
			$this->data["meta_title"] = 'My AweSome CMS'; 
			$this->load->helper('url');		
		}

		function index(){
			$this->load->view('users', $this->data);

		}


	}
 ?>