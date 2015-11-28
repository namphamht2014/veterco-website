<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fsourcing extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    date_default_timezone_set('Asia/Saigon');
  }

  public function index()
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
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing');
    $this->load->view('template/footer');
  }

  public function abc()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing_abc');

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
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_abc');
    $this->load->view('template/footer');
  }

  public function product_details($type)
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing_productDetails');

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
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative");
      $(".sourcingProductDetailsContainer .diamond .desc > .title").addClass("line'.$type.'");
      $(".sourcingProductDetailsContainer .bottle").attr("style", "background: url(/assets/images/productDetails-line'.$type.'-bottle.png) no-repeat center center;background-size: 100% 100%;");
      $(".sourcingProductDetailsContainer .diamond").attr("style", "background: url(/assets/images/productDetails-line'.$type.'-diamond.png) no-repeat center center;background-size: 100% 100%;");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_productDetails');
    $this->load->view('template/footer');
  }

  public function animal_type()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing_animalType');

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
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_animal');
    $this->load->view('template/footer');
  }

  public function lifecycle_details($animalName)
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing_lifecycleDetails');

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

    $data['animalName'] = $animalName;
    $initStr = '';

    switch ($animalName) {
      case 'cho':
        $animalEngName = 'dog';
        $initStr = 'lifecycle.choInit();';
        break;
      case 'ga':
        $animalEngName = 'chicken';
        $initStr = 'lifecycle.gaInit();';
        break;
      case 'tom':
        $animalEngName = 'shrimp';
        $initStr = 'lifecycle.tomInit();';
        break;

      default:
        $animalEngName = 'buffalo';
        break;
    }
    $data['animalEngName'] = $animalEngName;

    //add js script to page
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative");
      $(".pill #pill-img").attr("src", "/assets/images/lifecycle-details-'.$animalName.'-pill.png");
      '.$initStr.'
    });';
    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_lifecycle_details', $data);
    $this->load->view('template/footer');
  }

}

/* End of file Fsourcing.php */
/* Location: ./application/controllers/Fsourcing.php */
