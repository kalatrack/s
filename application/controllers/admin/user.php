<?php 

	/**
	* User class extends Admin_controller to perform Authentication of CMS
	*/
	class User extends Admin_controller{
		
		function __construct(){
			parent::__construct();
			
		}
		function index(){
			$this->data['users'] = $this->user_m->get();
			$this->load->view('users_layout', $this->data);
		}

		function login(){
			$deshboard = 'admin/deshboard';
			$this->user_m->loggedin()== FALSE || redirect($deshboard);
			$rules = $this->user_m->rules;
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == TRUE) {
				// redirect to deshboard
				if($this->user_m->login() == TRUE){
				 	redirect($deshboard);				
				 }else{
				 	$this->session->set_flashdata('error', 'The combination of username and password does not exit');
				 	redirect('admin/user/login','refresh');
				 }			
			}

			$this->load->view('_layout_modal',$this->data);
		}

		function logout(){
			$this->user_m->logout();
			redirect('admin/user/login');
		}
		function edit($id=NULL){
			if($id){
				$this->data['user'] = $this->user_m->get($id);
				count($this->data['user']) || $this->data['errors'][] = 'User Could not found';
			}else{
				$this->data['user'] = $this->user_m->get_new();
			}
			
			$rules = $this->user_m->admin_rules;
			$id || $rules['password'] = '|required';			
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {
				$data = $this->user_m->array_form_post(array('name','email','password'));
				$data['password'] = $this->user_m->hash($data['password']);
				$this->user_m->save($data, $id);
				redirect('admin/user');				
				}
			$this->load->view('edit_user_layout', $this->data);

		}
		
		function delete($id){
			$this->user_m->delete($id);
			redirect('admin/user');
		}

		function _unique_email($str){
			$id = $this->uri->segment(4);
			$this->db->where('email', $this->input->post('email'));
			!$id || $this->db->where('id !=', $id);
			$user = $this->user_m->get();
			if(count($user)){
				$this->form_validation->set_message('_unique_email','%s should be unique');
				return FALSE;
			}
			return TRUE;
		}
	}

 ?>