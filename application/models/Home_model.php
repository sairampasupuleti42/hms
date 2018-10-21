<?php
class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getHotelById($hotel_id)
    {
        $this->db->select("h.*");
        $this->db->where("h._id", $hotel_id);
        $query = $this->db->get("tbl_hotels h");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
    function searchHotels($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("h.*");
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }
        if (isset($s['_id']) && !empty($s['_id'])) {
            $this->db->where('_id', $s['_id']);
        }
        if (isset($s['parent']) && !empty($s['parent'])) {
            $this->db->where('h.parent_id=0');
        }
        $this->db->order_by("h._id DESC");
        $query = $this->db->get("tbl_hotels h");

        if ($query->num_rows() > 0) {
            if ($mode == "CNT") {
                $row = $query->row_array();
                return $row['CNT'];
            }
            return $query->result_array();
        }
        return false;
    }

}