<?php
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function addCustomer($pdata)
    {
        $this->db->insert("tbl_customers", $pdata);
        return $this->db->insert_id();
    }
    function updateCustomer($pdata, $customer_id)
    {
        $this->db->where("_id", $customer_id);
        return $this->db->update("tbl_customers", $pdata);
    }
    function delCustomer($customer_id)
    {
        $this->db->where("_id", $customer_id);
        return $this->db->delete("tbl_customers");
    }
    function getCustomerById($customer_id)
    {
        $this->db->select("c.*");
        $this->db->where("c._id", $customer_id);
        $query = $this->db->get("tbl_customers c");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function customerLogin($pdata)
    {
        $this->db->select("c.*");
        $this->db->where("c.customerEmail", $pdata['customerEmail']);
        $this->db->where("c.customerPassword", $pdata['customerPassword']);
        $query = $this->db->get("tbl_customers c");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function checkCustomerInDB($customerEmail)
    {
        $this->db->select('c.*');
        $this->db->where('customerEmail', $customerEmail);
        $query = $this->db->get("tbl_customers c");
        if ($query->num_rows() > 0) {
            return true;
        }
    }
    function searchCustomers($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("c.*");
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }

        $this->db->order_by("c._id DESC");
        $query = $this->db->get("tbl_customers c");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

}