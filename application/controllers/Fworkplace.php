<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fworkplace extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    $this->load->library('user_agent');
    date_default_timezone_set('Asia/Saigon');
  }

  public function index()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_workplace');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/workplace.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      // $data['headers'][] = base_url().'assets/css/who_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      // $data['headers'][] = base_url().'assets/css/who_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      // $data['headers'][] = base_url().'assets/css/who_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/js/workplace.js'
    );

    //add js script to page
    // $data['script'] = '$(function(){
    //   header.active("sourcing");
    //   $("header").removeClass("header").addClass("headerFixed");
    // });';

    //add data to page
    $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/workplace', $data);
    $this->load->view('template/footer', $data);
  }
  public function whoweare()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_workplace_who');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/workplace.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      // $data['headers'][] = base_url().'assets/css/who_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      // $data['headers'][] = base_url().'assets/css/who_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      // $data['headers'][] = base_url().'assets/css/who_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/js/workplace.js'
    );

    //add js script to page
    // $data['script'] = '$(function(){
    //   header.active("sourcing");
    //   $("header").removeClass("header").addClass("headerFixed");
    // });';

    //add data to page
    $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/workplace_2', $data);
    $this->load->view('template/footer', $data);
  }

}

/* End of file Fchairman.php */
/* Location: ./application/controllers/Fchairman.php */
