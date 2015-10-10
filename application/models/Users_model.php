<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function addUser($value='')
  {
    $this->db->insert('users', $value);
    return $this->db->insert_id();
  }

  public function updateUser($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('users', $value);
  }

  public function getUserByUsername($username='', $password='')
  {
    $this->db->join('users', 'users.login_id = login.id');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('login.status', 1);
    $this->db->where('users.status', 1);
    $this->db->limit(1);

    $query = $this->db->get('login');
    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function getUserByID($uid='')
  {
    $this->db->where('id', $uid);
    $this->db->where('status', 1);
    $this->db->limit(1);

    $query = $this->db->get('users');
    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  function getAllUsers($uid='')
  {
    $this->db->join('login', 'login.id = users.login_id');
    if ($uid != '' && $uid > 0) {
      $this->db->where('users.id !=', $uid);
    }
    $this->db->where('users.status', 1);
    $query = $this->db->get('users');
    return $query->result();
  }
}
