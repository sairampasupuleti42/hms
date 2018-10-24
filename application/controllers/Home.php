<?php

class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'home', TRUE);
        $this->load->model('Customer_model', 'customer', TRUE);
        $this->load->library('session');
    }

    function index()
    {
        $data = array();
        $data['hotels'] = $this->home->searchHotels();
        $this->_home('home/index', $data);
    }

    function hotels_list()
    {
        $data = array();
        $data['hotels'] = $this->home->searchHotels();
        $this->_home('home/hotel-list', $data);
    }

    function hotel_details()
    {
        $data = array();
        $data['hotels'] = $this->home->getHotelById(1);
        $this->_home('home/view-details', $data);
    }

    function signup()
    {
        $data = array();
        if (!empty($_POST['REG']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $cdata['customerName'] = !empty($_POST['username']) ? $_POST['username'] : '';
            $cdata['customerEmail'] = !empty($_POST['email']) ? $_POST['email'] : '';
            $cdata['customerPassword'] = !empty($_POST['password']) ? md5($_POST['password']) : '';
            if(!$this->customer->checkCustomerInDB($cdata['customerEmail'])) {
                $customer_id = $this->customer->addCustomer($cdata);
                $cupdata['customerId'] = 'C' . time();
                $this->customer->updateCustomer($cupdata, $customer_id);
                if (!empty($customer_id)) {
                    $user = $this->customer->getCustomerById($customer_id);
                    if (!empty($user['_id'])) {
                        $_SESSION = array();
                        $_SESSION['CUSTOMER_ID'] = $user['_id'];
                        $_SESSION['CUSTOMER_NAME'] = $user['customerName'];
                        $_SESSION['CUSTOMER_EMAIL'] = $user['customerEmail'];
                        //$_SESSION['IMG'] = $user['img'];

                        $_SESSION['STATUS'] = $user['customerStatus'];
                        if (isset($_GET['redirect'])) {
                            redirect(base_url() . "/" . $_GET['redirect']);
                        } else {
                            redirect(base_url() . "my-bookings/");
                        }


                    } else {
                        $_SESSION['error'] = "Invalid input.";
                    }
                }
            }else{
                $_SESSION['error'] = "User already exists with this mail !.";
            }
        }
        $data['custsomer'] = $_POST;
        $this->_home('home/signup', $data);
    }

    function signin()
    {
        $data = array();
        $_SESSION = [];
        $this->session->sess_destroy();

        if (!empty($_POST['LOGIN']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $user = $this->customer->customerLogin(['customerEmail' => $_POST['email'], 'customerPassword' => md5($_POST['password'])]);
            if (!empty($user['_id'])) {
                if ($user['customerStatus'] != "1") {
                    $_SESSION['error'] = "Your account is not active.";
                    $data['user'] = $_POST;
                } else {
                    $_SESSION = array();
                    $_SESSION['CUSTOMER_ID'] = $user['_id'];
                    $_SESSION['CUSTOMER_NAME'] = $user['customerName'];
                    $_SESSION['CUSTOMER_EMAIL'] = $user['customerEmail'];
                    //$_SESSION['IMG'] = $user['img'];
                    $_SESSION['STATUS'] = $user['customerStatus'];
                    redirect(base_url() . "my-bookings/");
                }
            } else {
                $_SESSION['error'] = "Invalid Email/Password.";
            }
        }
        $data['user'] = $_POST;
        $this->_home('home/signin', $data);
    }

    function search()
    {
        $data = array();
        $search = array();
        if (isset($_GET) && !empty($_GET)) {
            // $search['']
        }
        $data['hotels'] = $this->home->searchHotels();
        $this->_home('home/hotel-list', $data);
    }

    function book_your_room()
    {
    }

    function confirm()
    {
    }

    function cancelled()
    {
    }

    function thank_you()
    {
    }
    function my_bookings(){

    }
    function signout(){
        $_SESSION = [];
        $this->session->sess_destroy();
        // $_SESSION['error'] = "All sessions are destroyed";
        redirect($_SERVER['HTTP_REFERER']);
    }
}