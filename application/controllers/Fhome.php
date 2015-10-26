<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fhome extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
  }

  public function index()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_home');

    //Add css to page
    $data['headers'] = array(base_url().'assets/css/fhome.css');

    //add js to page
    // $data['footers'] = array(
      // base_url().'assets/bower_components/footable/dist/footable.min.js',
      // base_url().'assets/bower_components/footable/dist/footable.filter.min.js',
      // base_url().'assets/bower_components/footable/dist/footable.paginate.min.js'
    // );

    //add js script to page
    // $data['script'] = 'main.initFootable();';
    //add data to page
    $data['data'] = array('test', 'test');

    $this->load->view('template/header', $data);
    $this->load->view('frontend/home');
    $this->load->view('template/footer');
  }

}

/* End of file Fhome.php */
/* Location: ./application/controllers/Fhome.php */
