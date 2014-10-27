<?php 
	/**
	* 
	*/
	class User_M extends MY_Model{
		protected $table_name = 'users';
		protected $order_by = 'name';
		public  $rules = array(
				'email'=>array('field'=>'email','label'=>'Email','rules'=>'trim|required|xss_clean|valid_email'),
				'password'=>array('field'=>'password','label'=>'Password','rules'=>'trim|required|')
			);
		public  $admin_rules = array(
'email'=>array('field'=>'email','label'=>'Email','rules'=>'trim|required|xss_clean|valid_email|callback__unique_email'),
'password'=>array('field'=>'password','label'=>'Password','rules'=>'trim|matches[password_confirm]|required'),
'password_confirm'=>array('field'=>'password_confirm','label'=>'Confirm Password','rules'=>'trim|matches[password]'),
'name'=>array('field'=>'name','label'=>'Name','rules'=>'trim|required|xss_clean')
			);
//callback__unique_email we use two __ for the because it will not accessable to the url
		// next inside the contorller we write method with the name of _unique_email just and it will works
		// just fine
		function __construct(){
			parent::__construct();

		}
		function login(){
			$user = $this->get_by(array(
					'email'=>$this->input->post('email'),
					'password'=> $this->hash($this->input->post('password')),
				),TRUE);
			if(count($user)){
				$data = array(
					'name' => $user->name,
					'email' => $user->email,
					'id' => $user->id,
					'loggedin' => TRUE,
					);
				$this->session->set_userdata($data);
			}

		}
		function logout(){
			$this->session->sess_destroy();
		}
		function loggedin(){
			return (bool) $this->session->userdata('loggedin');
		}
		function hash($string){
			return hash('sha512', $string . config_item('encryption_key'));
		}
		function get_new(){
			$user = new stdClass();
			$user->name = '';
			$user->email = '';
			$user->password = '';
			return $user;
		}

	}

 ?>