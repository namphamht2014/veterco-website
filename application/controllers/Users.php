<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
    $this->checkAdmin();
    $this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = '- '.$this->lang->line('user');
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

    $data['script'] = 'main.activeMenu("users");main.initFootable();';
    $data['users'] = $this->Users_model->getAllUsers($this->session->userdata['loggedIn']->id);

    $this->load->view('template/header', $data);
    $this->load->view('users/index');
    $this->load->view('template/footer');
  }

  function tao()
  {
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('username', $this->lang->line('login_username'), 'trim|required|callback_check_username_exist');
		$this->form_validation->set_rules('password', $this->lang->line('login_password'), 'trim|required');
		$this->form_validation->set_rules('ten', $this->lang->line('myinfo_fullname'), 'trim|required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('user_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );

      $data['script'] = 'main.activeMenu("users");';

      $this->load->view('template/header', $data);
      $this->load->view('users/them');
      $this->load->view('template/footer');
    } else {
      $saveData = array(
        "username" => $this->input->post('username'),
        "password" => md5($this->input->post('password')),
        "ten" => $this->input->post('ten'),
        "vaitro" => $this->input->post('vaitro')
      );

      $this->Users_model->addUser($saveData);

      redirect('Users', 'refresh');
    }
  }

  function sua($uid)
  {
    $this->checkLogin();

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('ten', $this->lang->line('myinfo_fullname'), 'trim|required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('user_edit');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );

      $data['script'] = 'main.activeMenu("users");';

      $data['user'] = $this->Users_model->getUserByID($uid);

      $this->load->view('template/header', $data);
      $this->load->view('users/sua');
      $this->load->view('template/footer');
    } else {
      $saveData = array(
        "id" => $uid,
        "ten" => $this->input->post('ten'),
        "vaitro" => $this->input->post('vaitro')
      );

      $this->Users_model->updateUser($saveData);

      redirect('Users', 'refresh');
    }
  }

  function xoa($uid='')
  {
    if ($uid == '' || ($uid <= 0 && is_numeric($uid))) {
      $error = $this->lang->line('user_error1');
      $data['errors'] = $error;

      $data['title'] = '- Delete user';
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );

      $data['script'] = 'main.activeMenu("users");';

      $this->load->view('template/header', $data);
      $this->load->view('users/xoa');
      $this->load->view('template/footer');
    }else{
      $this->Users_model->updateUser(array('id' => $uid, 'status' => 0));

      redirect('Users', 'refresh');
    }
  }

  function check_username_exist()
  {
    $user = $this->Users_model->getUserByUsername($this->input->post('username'));
    if ($user) {
      $this->form_validation->set_message('check_username_exist', $this->lang->line('user_error2'));
      return FALSE;
    }else {
      return TRUE;
    }
  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? TRUE : redirect('Welcome', 'refresh') ;
  }

  function checkAdmin()
  {
    return ($this->session->userdata['loggedIn']->vaitro == isAdmin) ? TRUE : redirect('Welcome', 'refresh') ;
  }
}
