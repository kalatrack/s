<?php 
	/**
	* base model containing Generic functions for CRUD
	*/
	class MY_Model extends CI_Model{
		protected $table_name = '';
		protected $primary_key = 'id';
		protected $primary_filter = 'intval';
		protected $order_by = '';
		protected $timestamps = FALSE;
		protected $rules = array();

		function __construct(){
			parent::__construct();
		}
		public function get(){}
		public function get_by(){}
		public function save(){}
		public function delete(){}

	}

 ?>