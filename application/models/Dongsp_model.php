<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dongsp_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function save($value='')
  {
    $this->db->insert('dongsp', $value);
    return $this->db->insert_id();
  }

  function getAll()
  {
    $this->db->where('status', 1);
    $query = $this->db->get('dongsp');
    return $query->result();
  }

  function getByID($id='')
  {
    $this->db->where('id', $id);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('dongsp');
    return $query->result();
  }

  function getByName($ten='')
  {
    $this->db->where('ten', $ten);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('dongsp');
    return $query->result();
  }

  function update($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('dongsp', $value);
  }
}
