<?php 

	/**
	* extends AdminContorller
	*/
	class Deshboard extends Admin_Controller{

		function __construct(){
			parent::__construct();
			$this->data["meta_title"] = 'My AweSome CMS'; 
			$this->load->helper('url');
			$this->load->model('user_m');
		}

		function index(){
			$this->load->view('Deshboard', $this->data);
		}
		function modal(){
			$this->load->view('_layout_modal',$this->data);
		}
	}


 ?>