<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sanpham_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function save($value='')
  {
    $this->db->insert('sanpham', $value);
    return $this->db->insert_id();
  }

  function saveDetails($value='')
  {
    $this->db->insert('sanpham_thanhphan', $value);
    return $this->db->insert_id();
  }

  function getDetails($spID)
  {
    $this->db->select('sanpham.*, nhomsp.ten as tennhom, dongsp.ten as tendong, phanloai.ten as tenphanloai, loaithu.ten as tenthu, nhomthu.ten as tennhomthu');
    $this->db->join('nhomsp', 'sanpham.nhomID = nhomsp.id');
    $this->db->join('dongsp', 'sanpham.dongID = dongsp.id');
    $this->db->join('phanloai', 'sanpham.phanloaiID = phanloai.id');
    $this->db->join('loaithu', 'sanpham.loaithuID = loaithu.id');
    $this->db->join('nhomthu', 'loaithu.nhomID = nhomthu.id');
    $this->db->where('sanpham.status', 1);
    $this->db->where('sanpham.id', $spID);
    $query = $this->db->get('sanpham');
    return $query->result();
  }

  function getThanhphanBy($spID='')
  {
    $this->db->select('sanpham_thanhphan.thanhphanID, sanpham_thanhphan.soluong, thanhphan.ten, thanhphan.donvi');
    $this->db->join('thanhphan', 'thanhphan.id = sanpham_thanhphan.thanhphanID');
    $this->db->where('sanpham_thanhphan.sanphamID', $spID);
    $this->db->where('sanpham_thanhphan.status', 1);
    $query = $this->db->get('sanpham_thanhphan');
    return $query->result();
  }

  function getAll($limit)
  {
    $this->db->select('sanpham.id as spID, sanpham.ten as tensp, sanpham.lieudung, sanpham.khoiluong, sanpham.dang as formsp, nhomsp.ten as tenNhom');
    $this->db->join('nhomsp', 'sanpham.nhomID = nhomsp.id');
    $this->db->where('sanpham.status', 1);
    $this->db->order_by('sanpham.id', 'desc');
    if ($limit > 0) {
      $this->db->limit($limit);
    }
    $query = $this->db->get('sanpham');
    return $query->result();
  }

  function getAllWith($limit=0, $orderBy='', $filterBy=array())
  {
    $this->db->select('sanpham.id as spID, sanpham.ten as tensp, sanpham.lieudung, sanpham.khoiluong, sanpham.dang as formsp, nhomsp.ten as tenNhom');
    $this->db->join('nhomsp', 'sanpham.nhomID = nhomsp.id');
    $this->db->join('loaithu', 'sanpham.loaithuID = loaithu.id');
    $this->db->join('dongsp', 'sanpham.dongID = dongsp.id');
    $this->db->where('sanpham.status', 1);
    if ($limit > 0) {
      $this->db->limit($limit);
    }
    if ($orderBy != '') {
      if ($orderBy == 'newest') {
        $this->db->order_by('sanpham.ngaytao', 'desc');
      } else if($orderBy == 'name'){
        $this->db->order_by('sanpham.ten', 'asc');
      }
    }
    if ($filterBy['animal'] != '') {
      $this->db->where('loaithu.ten', $filterBy['animal']);
    }
    if ($filterBy['category'] != '') {
      $this->db->where('nhomsp.ten', $filterBy['category']);
    }
    if ($filterBy['serie'] != '') {
      $this->db->where('dongsp.ten', $filterBy['serie']);
    }
    if ($filterBy['form'] != '') {
      $this->db->where('sanpham.dang', $filterBy['form']);
    }
    $query = $this->db->get('sanpham');
    return $query->result();
  }

  function getDong($name='')
  {
    if ($name != '') {
      $this->db->where('ten', $name);
    }
    $this->db->where('status', 1);
    $query = $this->db->get('dongsp');
    return $query->result();
  }

  function saveBenh($name='')
  {
    $this->db->where('ten', $name);
    $this->db->where('status', 1);
    $check = $this->db->get('loaibenh');
    if ($check->num_rows()) {
      $tmpObj = $check->row();
      return $tmpObj->id;
    }else{
      $this->db->insert('loaibenh', array('ten'=>$name));
      return $this->db->insert_id();
    }
  }
  function saveBenh2($value='')
  {
    $this->db->insert_batch('benhcuathu', $value);
  }

  function getNhom($name='')
  {
    if ($name != '') {
      $this->db->where('ten', $name);
    }
    $this->db->where('status', 1);
    $query = $this->db->get('nhomsp');
    return $query->result();
  }

  function getPhanloai($name='')
  {
    if ($name != '') {
      $this->db->where('ten', $name);
    }
    $this->db->where('status', 1);
    $query = $this->db->get('phanloai');
    return $query->result();
  }

  function getNhomthu()
  {
    $this->db->where('status', 1);
    $query = $this->db->get('nhomthu');
    return $query->result();
  }

  function getLoaithu($name='')
  {
    if ($name != '') {
      $this->db->where('ten', $name);
    }
    $this->db->where('status', 1);
    $query = $this->db->get('loaithu');
    return $query->result();
  }

  function getThanhphan($name='')
  {
    if ($name != '') {
      $this->db->where('ten', $name);
    }
    $this->db->where('status', 1);
    $query = $this->db->get('thanhphan');
    return $query->result();
  }

  function getThanhphanInfo($name='', $unit='')
  {
    $this->db->where('ten', $name);
    $this->db->where('donvi', $unit);
    $this->db->where('status', 1);
    $query = $this->db->get('thanhphan');
    return $query->result();
  }

  function getByID($id='')
  {
    $this->db->where('id', $id);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('sanpham');
    return $query->result();
  }

  function getByName($ten='')
  {
    $this->db->where('ten', $ten);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get('sanpham');
    return $query->result();
  }

  function update($value='')
  {
    $this->db->where('id', $value['id']);
    $this->db->update('sanpham', $value);
  }

  function deleteThanhphan($id='')
  {
    $this->db->where('sanphamID', $id);
    $this->db->delete('sanpham_thanhphan');
  }
}
