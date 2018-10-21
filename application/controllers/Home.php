<?php

class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'home', TRUE);
    }
    function index()
    {
		$data=array();
		$data['hotels']=$this->home->searchHotels();
		$this->_home('home/index',$data);
	}
    function hotels_list()
    {
        $data=array();
        $data['hotels']=$this->home->searchHotels();
        $this->_home('home/hotel-list',$data);
    }
    function hotel_details()
    {
        $data=array();
        $data['hotels']=$this->home->getHotelById(1);
        $this->_home('home/view-details',$data);
    }
    function search(){
        $data=array();
        $data['hotels']=$this->home->searchHotels();
        $this->_home('home/hotel-list',$data);
    }
    function book_your_room(){

    }
    function confirm(){

    }
    function cancelled(){

    }
    function thank_you(){

    }
}