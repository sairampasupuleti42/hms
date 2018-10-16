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
		echo "Welcome";
	}
}