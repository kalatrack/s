<?php 
	/**
	* article model 
	*/
	class article_m extends MY_Model{
		protected $timestamps = TRUE;
		protected $table_name = 'articles';
		protected $order_by = 'pubdata desc, id desc';

		public  $rules = array(
'pubdate'=>array('field'=>'pubdate','label'=>'Publication Date','rules'=>'trim|required|exact_length[10]|xss_clean'),
'title'=>array('field'=>'title','label'=>'Title','rules'=>'trim|required|xss_clean'),
'slug'=>array('field'=>'slug','label'=>'Slug','rules'=>'trim|required|xss_clean'),
'body'=>array('field'=>'body','label'=>'Body','rules'=>'trim|required|'),
			);

		function get_new(){
			$article = new stdClass();
			$article->title = '';
			$article->slug = '';
			$article->body = '';
			$article->pubdate = date('Y-m-d');
			return $article;
		}
		function __construct(){
			parent::__construct();
		}
		
	}

 ?>