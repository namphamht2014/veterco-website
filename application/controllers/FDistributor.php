<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FDistributor extends CI_Controller {

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
    $data['title'] = '- '.$this->lang->line('f_distributor');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/fdistributor.css'
    );
    if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fdistributor_opera.css';
    }

    //add js to page
    $data['footers'] = array(
      'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js',
      base_url().'assets/js/fdistributor.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("distributor");
      $("header").removeClass("header").addClass("headerFixed");
    });';
    //add data to page
    // $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/distributor_support', $data);
    $this->load->view('template/footer', $data);
  }

  public function whyUs()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_distributor_whyus');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/fdistributor.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/fdistributor_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fdistributor_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/fdistributor_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js',
      base_url().'assets/js/fdistributor_whyus.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("distributor");
      $("header").removeClass("header").addClass("headerFixed");
    });';
    //add data to page
    // $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/distributor_support_whyus', $data);
    $this->load->view('template/footer', $data);
  }

}

/* End of file FDistributor.php */
/* Location: ./application/controllers/FDistributor.php */
