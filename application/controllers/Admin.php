<?php

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin', TRUE);
    }
	function auth(){
		session_unset();
		$data=array();
		if(!empty($_POST)){
			$pdata['email']=!empty($_POST['email']) ? $_POST['email']:'';
			$pdata['password']=!empty($_POST['password']) ? $_POST['password']:'';
			$user=$this->admin->login($pdata);
			if(!empty($user['_id'])){
				session_start();
				if($user['userStatus']=='1'){
					
					$_SESSION['_SESS_ID']=$user['_id'];
					$_SESSION['_SESS_NAME']=$user['userName'];
					$_SESSION['_SESS_TYPE']=$user['userType'];
					
					redirect(base_url().strtolower($user['userType']));
				
				}else{
					echo "Your account is not in active ..Please contact administrator";
				
				}
			}
		}
		$data['invalid']=$_POST;
		$this->load->view('admin/login',$data);
	}
    function index()
    {
       $data=array();
	   //$this->_login();
	 
	   $this->_template('admin/dashboard');
    }
	function bookings()
    {
       $data=array();
	
	   $this->_template('admin/bookings/index');
    }
	function vendors()
    {
       $data=array();
	   
	   $this->_template('admin/vendors/index');
    }
	function customers()
    {
       $data=array();
	 
	   $this->_template('admin/customers/index');
    }
	function hotels()
    {
       $data=array();
	   $this->_template('admin/hotels/index');
    }
	function rooms()
    {
       $data=array();
	  
	   $this->_template('admin/rooms/index');
    }
	function profile()
    {
       $data=array();
	  
	   $this->_template('admin/profile');
    }
	function logout(){
		$this->_logout();
	}
	
}