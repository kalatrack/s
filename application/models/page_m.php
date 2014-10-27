<?php 
	/**
	* page model 
	*/
	class Page_m extends MY_Model{
		function __construct(){
			parent::__construct();
		}
		
		protected $table_name = 'pages';
		protected $order_by = 'order';
		public  $rules = array(
				'title'=>array('field'=>'title','label'=>'Title','rules'=>'trim|required|xss_clean'),
				'slug'=>array('field'=>'slug','label'=>'Slug','rules'=>'trim|required|xss_clean|callback__unique_slug'),
				'parent_id'=>array('field'=>'parent_id','label'=>'Parent','rules'=>'trim|intval'),
				
				'body'=>array('field'=>'body','label'=>'Body','rules'=>'trim|required|'),
			);


		function get_new(){
			$page = new stdClass();
			$page->title = '';
			$page->slug = '';
			$page->body = '';
			$page->parent_id = 0;
			return $page;
		}
		function delete($id){
			//delete a page
			parent::delete($id);
			//Reset the parent or child  id if child or parent deleted
			$this->db->set(array('parent_id'=>0))->where('parent_id', $id)->update($this->table_name); 
		}
		function get_with_parent($id =NULL , $single = FALSE){
			$this->db->select('pages.*,p.slug as parent_slug,p.title as parent_title');
			$this->db->join('pages as p', 'pages.parent_id=p.id', 'left');
			return parent::get($id,$single); 
		}
		function get_nested(){
			$pages = $this->db->get('pages')->result_array();
			$array = array();
			foreach($pages as $page){
				if(!$page['parent_id']){
					$array[$page['id']] = $page;
				}else{
					$array[$page['parent_id']]['children'][] = $page;
				}
			}
			return $array;
		}
		function get_no_parents(){
			//fetch pages without parent
			$this->db->select('id , title');
			$this->db->where('parent_id', 0);
			$pages = parent::get();

			//retrun key => value pair array
			$array = array (0 => 'no parent');
			if(count($pages)){
				foreach($pages as $page){ 
				$array[$page->id] = $page->title;
				}
			}
			return $array;
		}

	}

 ?>