<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fwelcome extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    $this->load->library('user_agent');
  }

  public function index()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_welcome');

    //Add css to page
    $data['headers'] = array(base_url().'assets/css/fwelcome.css');
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/fwelcome_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fwelcome_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/fwelcome_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/js/fwelcome.js'
    );

    //add js script to page
    // $data['script'] = 'main.initFootable();';
    //add data to page
    $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/welcome', $data);
    $this->load->view('template/footer', $data);
  }
}

/* End of file F_welcome.php */
/* Location: ./application/controllers/F_welcome.php */
