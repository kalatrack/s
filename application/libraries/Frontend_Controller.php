<?php 
	/**
	* MY_Controller Frontend_Controller for user login check ects
	*/
	class Frontend_Controller extends MY_Controller{
		
		function __construct(){	
			parent::__construct();
			$this->data['site_name'] = config_item('site_name');
			
		}
	}

 ?>