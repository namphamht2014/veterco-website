<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phanloai extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->load->model('Phanloai_model', 'database');
    $this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = '- '.$this->lang->line('classification');
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
    $this->load->view('products/phanloai');
    $this->load->view('template/footer');
  }

  function tao()
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('class_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';

      $this->load->view('template/header', $data);
      $this->load->view('products/taophanloai');
      $this->load->view('template/footer');
    } else {
      $this->database->save(array('ten' => $this->input->post('ten')));

      redirect('Phanloai', 'refresh');
    }
  }

  function sua($id='')
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('class_edit');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';
      $data['nhom'] = $this->database->getByID($id);

      $this->load->view('template/header', $data);
      $this->load->view('products/suaphanloai');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'id' => $id,
        'ten' => $this->input->post('ten')
      );
      $this->database->update($data);

      redirect('Phanloai', 'refresh');
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

      redirect('Phanloai', 'refresh');
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
