<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loaithu extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->load->model('Loaithu_model', 'database');
    $this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = '- '.$this->lang->line('animal_list');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css',
      base_url().'assets/bower_components/footable/css/footable.core.min.css',
      base_url().'assets/bower_components/footable/css/footable.standalone.min.css'
    );
    $data['footers'] = array(
      base_url().'assets/bower_components/footable/dist/footable.min.js',
      base_url().'assets/bower_components/footable/dist/footable.filter.min.js',
      base_url().'assets/bower_components/footable/dist/footable.paginate.min.js'
    );
    $data['script'] = 'main.activeMenu("products");main.initFootable();';

    $data['dong'] = $this->database->getAll();

    $this->load->view('template/header', $data);
    $this->load->view('products/loaithu');
    $this->load->view('template/footer');
  }

  function tao()
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('animal_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';
      $data['nhomThu'] = $this->database->getNhom();

      $this->load->view('template/header', $data);
      $this->load->view('products/taoloaithu');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'ten' => $this->input->post('ten'),
        'nhomID' => $this->input->post('nhom')
      );
      $this->database->save($data);

      redirect('Loaithu', 'refresh');
    }
  }

  function sua($id='')
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('animal_edit');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';
      $data['nhom'] = $this->database->getByID($id);
      $data['nhomThu'] = $this->database->getNhom();

      $this->load->view('template/header', $data);
      $this->load->view('products/suaLoaithu');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'id' => $id,
        'ten' => $this->input->post('ten'),
        'nhomID' => $this->input->post('nhom')
      );
      $this->database->update($data);

      redirect('Loaithu', 'refresh');
    }
  }

  function xoa($id='')
  {
    if ($id != '' && $id > 0) {
      $data = array(
        'id' => $id,
        'status' => 0
      );
      $this->database->update($data);

      redirect('Loaithu', 'refresh');
    }else{
      echo $this->lang->line('err_nothing_delete');
    }
  }

  function check_ten()
  {
    $ten = $this->input->post('ten');
    if ($this->database->getByName($ten)) {
      $this->form_validation->set_message('check_ten', $this->lang->line('err_name_exist'));
      return FALSE;
    } else {
      return TRUE;
    }

  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? TRUE : redirect('Welcome', 'refresh');
  }
}
