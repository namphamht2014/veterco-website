<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flifecycle extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    $this->load->library('user_agent');
  }

  public function index()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_lifecycle');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/flifecycles.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      // base_url().'assets/js/fhome.js',
      base_url().'assets/js/flifecycles.js'
    );

    //add js script to page
    // $data['script'] = 'main.initFootable();';
    //add data to page
    // $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/life_cycles', $data);
    $this->load->view('template/footer', $data);
  }
  public function aquatics()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_lifecycle').' - Aquatics';

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/flifecycles.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      // base_url().'assets/js/fhome.js',
      base_url().'assets/js/flifecycles.js'
    );

    //add js script to page
    // $data['script'] = 'main.initFootable();';
    //add data to page
    // $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/life_cycles_aquatics', $data);
    $this->load->view('template/footer', $data);
  }
  public function chicken()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_lifecycle').' - Chicken';

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/flifecycles.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/flifecycles_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      // base_url().'assets/js/fhome.js',
      base_url().'assets/js/flifecycles.js'
    );

    //add js script to page
    // $data['script'] = 'main.initFootable();';
    //add data to page
    // $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/life_cycles_chicken', $data);
    $this->load->view('template/footer', $data);
  }
}

/* End of file Flifecycle.php */
/* Location: ./application/controllers/Flifecycle.php */
