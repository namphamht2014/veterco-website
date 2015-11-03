<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fhome extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    date_default_timezone_set('Asia/Saigon');
  }

  public function index()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_home');

    //Add css to page
    $data['headers'] = array(base_url().'assets/css/fhome.css');

    //add js to page
    $data['footers'] = array(
      'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
      base_url().'assets/js/fhome.js'
    );

    //add js script to page
    // $data['script'] = '$(function(){});';

    //add data to page
    $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/home');
    $this->load->view('template/footer');
  }

  public function sourcing()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/fsourcing.css'
    );

    //add js to page
    $data['footers'] = array(
      'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
      base_url().'assets/js/fsourcing.js'
    );

    //add js script to page
    $data['script'] = '$(function(){header.active("sourcing")});';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing');
    $this->load->view('template/footer');
  }
}

/* End of file Fhome.php */
/* Location: ./application/controllers/Fhome.php */
