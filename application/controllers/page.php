<?php 
/**
* 
*/
	class Page extends Frontend_Controller{ 
		
		function __construct(){
			parent::__construct();
			$this->load->model('page_m');
			$this->data['site_name'] = config_item('site_name');

		}
		function index(){
			$this->data['page']  = $this->page_m->get_nested();
			$this->load->view('index', $this->data);
			

		}
		
	}
 ?>