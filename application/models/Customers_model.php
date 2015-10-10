<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function addUser($value='')
  {
    $this->db->insert('customers', $value);
    return $this->db->insert_id();
  }

  public function update($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('customers', $value);
  }
  public function updateLogin($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('login', $value);
  }

  public function getCustomerByID($cid='')
  {
    $this->db->select('login.username, customers.tenCty, customers.diachi, customers.ngdaidien, customers.sodkkd, customers.thongtingoihang, customers.hotline, customers.email, customers.bankinfo, customers.ngaytao, customers.ngayupdate');
    $this->db->join('login', 'login.id = customers.login_id');
    $this->db->where('customers.id', $cid);
    $this->db->where('customers.status', 1);
    $this->db->limit(1);

    $query = $this->db->get('customers');
    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  function getAllcustomers()
  {
    $this->db->where('status', 1);
    $query = $this->db->get('customers');
    return $query->result();
  }
  function getLoginID($cid)
  {
    $this->db->select('login_id');
    $this->db->where('id', $cid);
    $this->db->where('status', 1);
    $query = $this->db->get('customers');
    return $query->result();
  }
}
