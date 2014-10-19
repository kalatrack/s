<?php 

	/**
	* extends AdminContorller
	*/
	class Deshboard extends Admin_Controller{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			var_dump($this->data);
		}
	}

 ?>