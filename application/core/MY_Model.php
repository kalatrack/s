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
		public  $rules = array();

		function __construct(){
			parent::__construct();
		}
		public function array_form_post($fields){
			$data = array();
			foreach($fields  as $field){
				$data[$field] = $this->input->post($field);
			}
			return $data;
		}
		public function get($id = NULL, $single= FALSE){
			if($id != NULL){
				$filter = $this->primary_filter;
				$id = $filter($id);
				$this->db->where($this->primary_key, $id);
				$method = "row";
			}elseif($single == TRUE){
				$method = 'row';
			}else{
				$method = 'result';
			}
			if(!count($this->db->ar_order)){
				$this->db->orderby($this->order_by);
			}
			return $this->db->get($this->table_name)->$method();
		}
		public function get_by($where,$single=FALSE){
			$this->db->where($where);
			return $this->get(NULL,$single);
		}
		public function save($data,$id=NULL){
			if($this->timestamps == TRUE){
				$now = date('Y-m-d H:i:s');
				$id || $data['created'] = $now;
				$data['modified'] = $now;
			}
			if($id === NULL){
				!isset($data[$this->primary_key]) || $data[$this->primary_key] = NULL;
				$this->db->set($data);
				$this->db->insert($this->table_name);
				$id = $this->db->insert_id();
			}else{
				$filter = $this->primary_filter;
				$id = $filter($id);
				$this->db->set($data);
				$this->db->where($this->primary_key, $id);
				$this->db->update($this->table_name);
			}
			return $id;
		}
		public function delete($id){
			$filter = $this->primary_filter;
			$id = $filter($id);
			if(!$id){
				return FALSE;
			}
			$this->db->where($this->primary_key,$id);
			$this->db->limit(1);
			$this->db->delete($this->table_name);
		}

	}

 ?>