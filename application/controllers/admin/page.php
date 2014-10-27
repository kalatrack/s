<?php 

	/**
	* page class extends Admin_controller to perform Authentication of CMS
	*/
	class Page extends Admin_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('page_m');
			
		}
		function index(){
			$this->data['pages'] = $this->page_m->get_with_parent();
			$this->load->view('page_layout', $this->data);
		}

		function order(){
			$this->data['page'] = $this->page_m->get_nested();
			$this->load->view('order_layout',$this->data);
		}

		
		function edit($id=NULL){
			if($id){
				$this->data['page'] = $this->page_m->get($id);
				count($this->data['page']) || $this->data['errors'][] = 'page Could not found';
			}else{
				$this->data['page'] = $this->page_m->get_new();
			}
			//pages for dropdown 
			$this->data['pages_no_parents'] = $this->page_m->get_no_parents();
			$rules = $this->page_m->rules;		
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {
				$data = $this->page_m->array_form_post(array('title','slug','body','parent_id'));
				$this->page_m->save($data, $id);
				redirect('admin/page');				
				}
			$this->load->view('edit_page_layout', $this->data);

		}
		
		function delete($id){
			$this->page_m->delete($id);
			redirect('admin/page');
		}
		function _unique_slug($str){
			$id = $this->uri->segment(4);
			$this->db->where('slug', $this->input->post('slug'));
			!$id || $this->db->where('id !=', $id);
			$page = $this->page_m->get();
			if(count($page)){
				$this->form_validation->set_message('_unique_slug','%s should be unique');
				return FALSE;
			}
			return TRUE;
		}
	}

 ?>