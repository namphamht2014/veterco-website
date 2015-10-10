<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
		$this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = $this->lang->line('backend');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css'
    );

    $data['welcome'] = $this->lang->line('backend_welcome').$this->session->userdata['loggedIn']->ten;

    $this->load->view('template/header', $data);
    $this->load->view('backend/home');
    $this->load->view('template/footer');
  }

  function myinfo()
  {
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('ten', $this->lang->line('myinfo_fullname'), 'trim|required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('backend_myinfo');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );

      $data['user'] = $this->Users_model->getUserByID($this->session->userdata['loggedIn']->id);

      $this->load->view('template/header', $data);
      $this->load->view('backend/myinfo');
      $this->load->view('template/footer');
    }else {
      $saveData = array(
        "id" => $this->session->userdata['loggedIn']->id,
        "ten" => $this->input->post('ten'),
        "vaitro" => $this->input->post('vaitro')
      );

      $this->Users_model->updateUser($saveData);

      redirect('Backend/myinfo', 'refresh');
    }
  }

  function doimatkhau()
  {
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('oldpw', $this->lang->line('changepass_old'), 'trim|required|callback_check_password');
		$this->form_validation->set_rules('newpw', $this->lang->line('changepass_new'), 'trim|required');
		$this->form_validation->set_rules('repeat-newpw', $this->lang->line('changepass_repeat'), 'trim|required|callback_check_match');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('myinfo_changepass');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );

      $data['user'] = $this->Users_model->getUserByID($this->session->userdata['loggedIn']->id);

      $this->load->view('template/header', $data);
      $this->load->view('backend/changePass');
      $this->load->view('template/footer');
    }else {
      $saveData = array(
        "id" => $this->session->userdata['loggedIn']->id,
        "password" => md5($this->input->post('newpw'))
      );

      $this->Users_model->updateUser($saveData);

      redirect('Backend/myinfo', 'refresh');
    }
  }

  function check_password()
  {
    $oldPw = $this->session->userdata['loggedIn']->password;
    if (md5($this->input->post('oldpw')) == $oldPw) {
      return TRUE;
    }else {
      $this->form_validation->set_message('check_password', $this->lang->line('changepass_error1'));
      return FALSE;
    }
  }

  function check_match()
  {
    if ($this->input->post('newpw') != $this->input->post('repeat-newpw')) {
      $this->form_validation->set_message('check_match', $this->lang->line('changepass_error2'));
      return FALSE;
    }else {
      return TRUE;
    }
  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? TRUE : redirect('Welcome', 'refresh');
  }

  function logout()
  {
    if ($this->session->userdata('loggedIn')) {
      $this->session->unset_userdata('loggedIn');
      redirect('Welcome', 'refresh');
    }
  }
}
