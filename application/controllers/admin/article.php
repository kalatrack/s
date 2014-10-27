<?php 

	/**
	* article class extends Admin_controller to perform Authentication of CMS
	*/
	class Article extends Admin_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('article_m');
			
		}
		function index(){
			$this->data['articles'] = $this->article_m->get();
			$this->load->view('article_layout', $this->data);
		}

		

		
		function edit($id=NULL){
			if($id){
				$this->data['article'] = $this->article_m->get($id);
				count($this->data['article']) || $this->data['errors'][] = 'article Could not found';
			}else{
				$this->data['article'] = $this->article_m->get_new();
			}
			//articles for dropdown 

			$rules = $this->article_m->rules;		
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {
				$data = $this->article_m->array_form_post(array('title','slug','body','pubdate'));
				$this->article_m->save($data, $id);
				redirect('admin/article');				
				}
			$this->load->view('edit_article_layout', $this->data);

		}
		
		function delete($id){
			$this->article_m->delete($id);
			redirect('admin/article');
		}
		
	}

 ?>