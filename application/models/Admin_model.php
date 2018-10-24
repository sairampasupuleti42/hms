<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function addUser($pdata)
    {
        $this->db->insert("tbl_users", $pdata);
        return $this->db->insert_id();
    }
    function updateUser($pdata, $_id)
    {
        $this->db->where("_id", $_id);
        return $this->db->update("tbl_users", $pdata);
    }
    function delCategory($_id)
    {
        $this->db->where("_id", $_id);
        return $this->db->delete("tbl_users");
    }
	 function login($pdata)
    {
        $this->db->select("u.*");
        $this->db->where("u.userEmail", $pdata['email']);
        $this->db->where("u.userPassword", md5($pdata['password']));
        $query = $this->db->get("tbl_users u");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function getUserById($_id)
    {
        $this->db->select("u.*");
        $this->db->where("u._id", $_id);
        $query = $this->db->get("tbl_users u");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function checkCategoryInDB($category_name)
    {
        $this->db->select('*');
        $this->db->where('name', $category_name);
        $query = $this->db->get("tbl_categories c");
        if ($query->num_rows() > 0) {
            return true;
        }
    }
    function searchCategories($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("c.*");
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }
        if(isset($s['language_id']) && !empty($s['language_id'])){
            $this->db->where('language_id',$s['language_id']);
        }
        if(isset($s['parent']) && !empty($s['parent'])){
            $this->db->where('c.parent_id=0');
        }
        $this->db->order_by("c.id DESC");
        $query = $this->db->get("tbl_categories c");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
    function getCustomerCnt()
    {

        $this->db->select('COUNT(_id) as cust_cnt');
        $query = $this->db->get("tbl_customers");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function getBookingsCnt()
    {

        $this->db->select('COUNT(_id) as booking_cnt');
        $query = $this->db->get("tbl_bookings");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
}