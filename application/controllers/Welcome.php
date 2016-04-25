<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
		$this->lang->load('backend_lang');
  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('loggedIn')) {
			redirect('Backend', 'refresh');
		}

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('username', $this->lang->line('login_username'), 'trim|required|callback_username_check');
		$this->form_validation->set_rules('password', $this->lang->line('login_password'), 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = '- '.$this->lang->line('login');
			$data['headers'] = array(base_url().'assets/css/login.css');
			$this->load->view('template/header', $data);
			$this->load->view('welcome_message');
			$this->load->view('template/footer');
		} else {
			redirect('Backend', 'refresh');
		}
	}

	function username_check()
	{
		$value = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$pw = $this->Users_model->getUserByUsername($value['username'], md5($value['password']));

		if ($pw) {
			$this->session->userdata['loggedIn'] = $pw[0];
			return TRUE;
		} else {
			$this->form_validation->set_message('username_check', $this->lang->line('login_error'));
			return FALSE;
		}
	}

  public function customerLogin()
  {
    $result = array(
      'result' => 'OK'
    );
		$value = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$pw = $this->Users_model->getUserByUsername($value['username'], md5($value['password']));
    $result['data'] = $value;
		if ($pw) {
			$this->session->userdata['loggedIn'] = $pw[0];
		} else {
      $result['result'] = 'Failed';
      $result['message'] = 'Wrong username or password.';
		}

    die(json_encode($result));
  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? redirect('Backend', 'refresh') : FALSE ;
  }
}
