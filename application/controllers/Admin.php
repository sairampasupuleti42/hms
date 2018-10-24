<?php

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_model', 'admin', TRUE);
        $this->load->model('Hotel_model', 'hapi', TRUE);
        $this->load->model('Customer_model', 'customer', TRUE);
        $this->header_data['app_title']="HMS";
    }

    function auth()
    {
        $data = array();
        $data['page_title']="HMS";
        if (!empty($_POST['LOGIN']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $user = $this->admin->login(['email' => $_POST['email'], 'password' => $_POST['password']]);
            if (!empty($user['_id'])) {
                if ($user['userStatus'] != "1") {
                    $_SESSION['error'] = "Your account is not active.";
                    $data['user'] = $_POST;
                } else {
                    $_SESSION = array();
                    $_SESSION['USER_ID'] = $user['_id'];
                    $_SESSION['USER_NAME'] = $user['userName'];
                    $_SESSION['USER_EMAIL'] = $user['userEmail'];
                    //$_SESSION['IMG'] = $user['img'];
                    $_SESSION['USER_TYPE'] = ($user['userType'] == 'ADMIN') ? 'admin' : 'vendors';
                    $_SESSION['STATUS'] = $user['userStatus'];
                    redirect(base_url() . "admin/");
                }
            } else {
                $_SESSION['error'] = "Invalid Email/Password.";
            }
        }
        $data['user'] = $_POST;
        $this->load->view('admin/login', $data);
    }

    function index()
    {
        $data = array();
        //$this->_login();
        _logged();
        $data['page_title']="Dashboard";
        $data['hc']=$this->hapi->getHotelCnt();
        $data['bc']=$this->admin->getBookingsCnt();
        $data['cc']=$this->admin->getCustomerCnt();
        $this->_template('admin/dashboard',$data);
    }

    function bookings()
    {
        $data = array();
        $data['page_title']="Bookings";
        $data['bookings']=$this->admin->getBookings();
        $this->_template('admin/bookings/index',$data);
    }



    function customers()
    {
        $data = array();
        $data['page_title']="Customers";
        $data['customers']=$this->customer->searchCustomers();
        $this->_template('admin/customers/index',$data);
    }

    function hotels($act = '', $st = '')
    {

        $data = array();
        if (!empty($_GET['act']) && $_GET['act'] == "del" && !empty($_GET['pk_id'])) {
            $this->api->delBill($_GET['pk_id']);
            redirect(base_url() . "admin/bills/");
        }
        if (!empty($_GET['act']) && $_GET['act'] == "status" && !empty($_GET['bill_id']) && isset($_GET['sta'])) {
            $is_active = (!empty($_GET['sta']) && $_GET['sta'] == "1") ? "1" : "0";
            //$this->api->updateBill(array("is_active" => $is_active), $_GET['bill_id']);
            redirect(base_url() . "admin/bills/");
        }
        if ($act == "add") {
            $this->header_data['title'] = "Add Hotel";
            $data = array();
            if (!empty($_POST['hotelName'])) {
                $qdata = [];
                $pdata = array();
                $pdata['hotelName'] = !empty($_POST['hotelName']) ? $_POST['hotelName'] : '';
                $pdata['hotelAddress1'] = !empty($_POST['hotelAddress1']) ? $_POST['hotelAddress1'] : '';
                $pdata['hotelAddress2'] = !empty($_POST['hotelAddress2']) ? $_POST['hotelAddress2'] : '';
                $pdata['hotelCity'] = !empty($_POST['hotelCity']) ? $_POST['hotelCity'] : '';
                $pdata['hotelState'] = !empty($_POST['hotelState']) ? $_POST['hotelState'] : '';
                $pdata['hotelPinCode'] = !empty($_POST['hotelPinCode']) ? $_POST['hotelPinCode'] : '';
                $pdata['hotelPermaLink'] = !empty($_POST['hotelName']) ? slugify($_POST['hotelName']) : '';
                $pdata['hotelEmail'] = !empty($_POST['hotelEmail']) ? $_POST['hotelEmail'] : '';
                $pdata['hotelPhone'] = !empty($_POST['hotelPhone']) ? $_POST['hotelPhone'] : '';
                $pdata['hotelRooms'] = !empty($_POST['hotelRooms']) ? $_POST['hotelRooms'] : '';
                $pdata['hotelRoomPrice'] = !empty($_POST['hotelRoomPrice']) ? $_POST['hotelRoomPrice'] : '';
                $pdata['hotelMobile'] = !empty($_POST['hotelMobile']) ? $_POST['hotelMobile'] : '';
                $pdata['hotelWebSite'] = !empty($_POST['hotelWebSite']) ? $_POST['hotelWebSite'] : '';
                $pdata['hotelType'] = !empty($_POST['hotelType']) ? $_POST['hotelType'] : '';
                $pdata['hotelAddedOn'] = date('Y-m-d H:i:s');
                $pdata['hotelStatus'] = '1';
                $fol='/uploads/hotels/'.$pdata['hotelPermaLink'].'/';
                createFolder($fol);
                uploadFiles($fol,'hotelImages');
                $pdata['hotelAddedBy'] = !empty($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : '1';
                $hotelCount = $this->hapi->getHotelCnt();
                if (!$this->hapi->checkHotelInDB($pdata['hotelName'])) {
                    $pdata['hotelImages']=$fol;
                    $hotel_pk_id = $this->hapi->addHotel($pdata);
                    if (!empty($hotel_pk_id)) {
                        $qdata['hotel_pk_id'] = $hotel_pk_id;
                        $cnt = str_pad($hotelCount['hotel_cnt'] + 1, 3, '0', STR_PAD_LEFT);
                        $ref_no = generateRefNo('H', $cnt);
                        $this->hapi->updateHotel(['hotelId' => $ref_no], $hotel_pk_id);
                        if (!empty($_POST['hotelRoomNo'])) {
                            foreach ($_POST['hotelRoomNo'] as $room) {
                                $l=0;
                                $rdata['roomPrice'] = $_POST['hotelRoomPrice'];
                                $rdata['roomTitle'] = $_POST['roomTitle'][$l];
                                $rdata['roomNo'] = $room;
                                $rdata['roomStatus'] = 1;
                                $rdata['hotelId'] = $hotel_pk_id;
                                $this->hapi->addRooms($rdata);
                                $l++;
                            }
                        }

                    }
                    $_SESSION['message'] = "Hotel added successfully !";
                    redirect(base_url() . 'admin/hotels/');
                } else {
                    $_SESSION['warning'] = "This hotel already exists in our records !";
                }

            }
            $this->_template('admin/hotels/form', $data);
        } elseif ($act == "edit") {
            $this->header_data['title'] = "Edit Post";
            $data = array();
            if (!empty($_POST['_id'])) {
                if (!empty($_POST['hotelName'])) {
                    $qdata = [];
                    $pdata = array();
                    $pdata['hotelName'] = !empty($_POST['hotelName']) ? $_POST['hotelName'] : '';
                    $pdata['hotelAddress1'] = !empty($_POST['hotelAddress1']) ? $_POST['hotelAddress1'] : '';
                    $pdata['hotelAddress2'] = !empty($_POST['hotelAddress2']) ? $_POST['hotelAddress2'] : '';
                    $pdata['hotelCity'] = !empty($_POST['hotelCity']) ? $_POST['hotelCity'] : '';
                    $pdata['hotelState'] = !empty($_POST['hotelState']) ? $_POST['hotelState'] : '';
                    $pdata['hotelPinCode'] = !empty($_POST['hotelPinCode']) ? $_POST['hotelPinCode'] : '';
                    $pdata['hotelGstNo'] = !empty($_POST['hotelGstNo']) ? $_POST['hotelGstNo'] : '';
                    $pdata['hotelRooms'] = !empty($_POST['hotelRooms']) ? $_POST['hotelRooms'] : '';
                    $pdata['hotelPermaLink'] = !empty($_POST['hotelPermaLink']) ? slugify($_POST['hotelName']) : '';
                    $pdata['hotelEmail'] = !empty($_POST['hotelEmail']) ? $_POST['hotelEmail'] : '';
                    $pdata['hotelPhone'] = !empty($_POST['hotelPhone']) ? $_POST['hotelPhone'] : '';
                    $pdata['hotelMobile'] = !empty($_POST['hotelMobile']) ? $_POST['hotelMobile'] : '';
                    $pdata['hotelWebSite'] = !empty($_POST['hotelWebSite']) ? $_POST['hotelWebSite'] : '';
                    $pdata['hotelType'] = !empty($_POST['hotelType']) ? $_POST['hotelType'] : '';
                    $pdata['hotelAddedOn'] = date('Y-m-d H:i:s');
                    $pdata['hotelStatus'] = '1';
                    $pdata['hotelUpdatedBy'] = !empty($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : '1';
                    $this->api->updateHotel($pdata, $_POST['_id']);
                    $_SESSION['message'] = "Hotel updated successfully !";
                    redirect(base_url() . 'admin/hotels/');
                }
            }
            $this->_template('admin/hotels/form', $data);
        } else {
            $this->header_data['title'] = " Hotels";
            $search_data = array();
            if (!empty($this->_REQ['from_date'])) {
                $search_data['from_date'] = dateRangeForm2DB($this->_REQ['from_date']);
                $search_data['to_date'] = dateRangeForm2DB($this->_REQ['to_date']);
            } else {
                $search_data['date'] = date('Y-m-d');
            }
//            $search_data['category_name'] = "Highlight";
            $this->load->library('Pagenavi');
            $this->pagenavi->search_data = $search_data;
            $this->pagenavi->per_page = 10;
            $this->pagenavi->base_url = base_url() . 'admin/hotels/?';
            $this->pagenavi->process($this->hapi, 'searchHotels');
            $data['PAGING'] = $this->pagenavi->links_html;
            $data['hotels'] = $this->pagenavi->items;

            $this->_template('admin/hotels/index', $data);
        }
    }

    function rooms()
    {
        $data = array();
        $this->_template('admin/rooms/index');
    }

    function profile()
    {
        $data = array();
        $this->_template('admin/profile');
    }

    function logout()
    {
        $_SESSION = [];
        $this->session->sess_destroy();
        // $_SESSION['error'] = "All sessions are destroyed";
        redirect(base_url('admin/auth/'));
    }
}