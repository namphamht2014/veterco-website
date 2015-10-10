<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loaithu_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function save($value='')
  {
    $this->db->insert('loaithu', $value);
    return $this->db->insert_id();
  }

  function getAll()
  {
    $this->db->select('loaithu.id, loaithu.ten as tenThu, nhomthu.ten as tenLoai');
    $this->db->join('nhomthu', 'loaithu.nhomID = nhomthu.id');
    $this->db->where('loaithu.status', 1);
    $query = $this->db->get('loaithu');
    return $query->result();
  }

  function getByID($id='')
  {
    $this->db->where('id', $id);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('loaithu');
    return $query->result();
  }

  function getByName($ten='')
  {
    $this->db->where('ten', $ten);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('loaithu');
    return $query->result();
  }

  function getNhom()
  {
    $this->db->where('status', 1);
    $query = $this->db->get('nhomthu');
    return $query->result();
  }

  function update($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('loaithu', $value);
  }
}
