<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $header_data = array();

    function __construct()
    {
        parent::__construct();
        $this->_REQ = $_POST + $_GET;
        $this->load->helper('common');
      
    }

    function clean($text)
    {
        return str_replace("\r\n", ' ', strip_tags($text));
    }

    public function _hash($password)
    {
        return hash('sha256', $password);
    }
    function getActivePage($page){
        if($this->uri->segment(3)==$page){
            return "class='active'";
        }
    }
    function validRequest()
    {
        $auth = $this->api->getAuth();
        if (isset($_SERVER['HTTP_NG_AUTH'])) {
            if ($_SERVER['HTTP_NG_AUTH'] == $auth['auth_value'])
                return true;
            else
                return false;
        } else {
            return false;
        }
    }

    public function sendEmail($view, $data = [])
    {
        if (empty($data['from'])) {
            $data['from'] = "no-reply@" . base_url();
        }
        include_once(rtrim(APPPATH, "/") . "/third_party/phpmailer/class.phpmailer.php");
        $body = $this->load->view($view, $data, true);
        try {
            $mail = new PHPMailer();
            if (!empty($data['from']) && !empty($data['from_name'])) {
                $mail->SetFrom($data['from'], $data['from_name']);
            } else if (!empty($data['from'])) {
                $mail->SetFrom($data['from']);
            }
            if (!empty($data['to']) && !empty($data['to_name'])) {
                $mail->AddAddress($data['to']);
            } else if (!empty($data['to'])) {
                $mail->AddAddress($data['to']);
            }
            $mail->Subject = !empty($data['subject']) ? $data['subject'] : "";
            $mail->isHTML(true);
            //$mail->MsgHTML($body);
            $mail->Body = $body;
            return $mail->Send();
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }

    public function _remap($method, $params = array())
    {
        $data = array();
        $this->header_data['page_name'] = $method;
        $method = str_replace("-", "_", $method);
        $this->method = $method;
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        } else {
            //redirect(base_url());
        }
    }

    function lchar($str, $val)
    {
        return strlen($str) <= $val ? $str : substr($str, 0, $val) . '...';
    }

    public function _json_out($response = [])
    {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    public function _template($page_name = 'index', $data = array())
    {
        $this->load->view('admin/header', $this->header_data);
        $this->load->view($page_name, $data);
        $this->load->view('admin/footer');
    }

    public function _iframe($page_name = 'index', $data = array())
    {
        $this->load->view('admin/iframe_header', $this->header_data);
        $this->load->view($page_name, $data);
        $this->load->view('admin/iframe_footer');
    }

    public function _home($page_name = 'index', $data = array())
    {
        $this->load->view('home/header', $this->header_data);
        $this->load->view($page_name, $data);
        $this->load->view('home/footer', $this->header_data);
    }
    function _login(){
		if(!isset($_SESSION['_SESS_ID']) && empty($_SESSION['_SESS_ID'])){
		//   redirect(base_url().'admin/auth');
	    }
	}
	function _logout(){
		
		if(isset($_SESSION['_SESS_ID']) && !empty($_SESSION['_SESS_ID'])){
			unset($_SESSION);
		$_SESSION=null;
		session_unset();
		   redirect(base_url().'admin/auth');
	    }
	}
}
