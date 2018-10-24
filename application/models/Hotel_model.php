<?php

class Hotel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function addHotel($pdata)
    {
        $this->db->insert("tbl_hotels", $pdata);
        return $this->db->insert_id();
    }

    function addRooms($pdata)
    {
        $this->db->insert("tbl_rooms", $pdata);
        return $this->db->insert_id();
    }

    function updateHotel($pdata, $hotel_id)
    {
        $this->db->where("_id", $hotel_id);
        return $this->db->update("tbl_hotels", $pdata);
    }

    function delHotel($hotel_id)
    {
        $this->db->where("_id", $hotel_id);
        return $this->db->delete("tbl_hotels");
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

    function checkHotelInDB($hotel_name)
    {
        $this->db->select('*');
        $this->db->where('hotelName', $hotel_name);
        $query = $this->db->get("tbl_hotels h");
        if ($query->num_rows() > 0) {
            return true;
        }
    }

    function searchHotels($s = array(), $mode = "   ")
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

    function getHotelCnt()
    {

        $this->db->select('COUNT(_id) as hotel_cnt');
        $query = $this->db->get("tbl_hotels");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
}