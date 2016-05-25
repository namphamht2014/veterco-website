<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fsourcing extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->language('frontend_lang');
    $this->load->library('user_agent');
    date_default_timezone_set('Asia/Saigon');
    $this->load->model('Sanpham_model', 'database');
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
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
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

    $data['sortBy'] = 'newest';
    $data['filterBy'] = [
      'animal' => '',
      'category' => '',
      'serie' => '',
      'form' => '',
      'searchStr' => ''
    ];
    $limit = 24;
    $url = parse_url($_SERVER['REQUEST_URI']);
    if (isset($url['query'])) {
      $limit = 0;
      parse_str($url['query'], $params);
      $data['sortBy'] = (isset($params['sort'])? $params['sort']: 'newest');
      $data['filterBy']['animal'] = (isset($params['animaltype'])? $params['animaltype']: '');
      $data['filterBy']['category'] = (isset($params['category'])? str_replace('AND', '&', $params['category']): '');
      $data['filterBy']['serie'] = (isset($params['serie'])? $params['serie']: '');
      $data['filterBy']['form'] = (isset($params['form'])? $params['form']: '');
      $data['filterBy']['searchStr'] = (isset($params['searchStr'])? str_replace('AND', '&', $params['searchStr']): '');
    }

    $tmp = 0;
    foreach ($data['filterBy'] as $key => $value) {
      if ($value != '') $tmp++;
    }

    $data['blockHeight'] = $tmp;

    $data['products'] = $this->database->getAllWith($limit, $data['sortBy'], $data['filterBy']);

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/fsourcing.css'
    );
    // if ($this->agent->is_browser('Safari')) {
    //   // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    // } else if ($this->agent->is_browser('Chrome')) {
    //   $data['headers'][] = base_url().'assets/css/fsourcing_chrome.css';
    // } else if ($this->agent->is_browser('Opera')) {
    //   $data['headers'][] = base_url().'assets/css/fsourcing_opera.css';
    // } else if ($this->agent->is_browser('Firefox')) {
    //   $data['headers'][] = base_url().'assets/css/fsourcing_firefox.css';
    // }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative;clear:both;");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_abc', $data);
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
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_firefox.css';
    }

    $productObj = $this->database->getProductWithID($type);
    // print_r($productObj);exit;
    $data['productObj'] = $productObj;

    $type = 1;

    //add js to page
    $data['footers'] = array(
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative");
      $(".sourcingProductDetailsContainer .diamond .desc > .title").addClass("line'.$type.'");
      $(".sourcingProductDetailsContainer .bottle").attr("style", "background: url(/assets/images/productDetails-line'.$type.'-bottle.png) no-repeat center center;background-size: 100% 100%;");
      $(".sourcingProductDetailsContainer .diamond-block").attr("style", "background: url(/assets/images/productDetails-line'.$type.'-diamond.png) no-repeat center center;background-size: 100% 100%;");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_productDetails', $data);
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
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
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
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/lifecycle_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/lifecycle_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/lifecycle_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
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
      $(".sourcingLifeCycleDetailsContainer").addClass("'.$animalName.'");
      $(".footer2").attr("style", "position: relative");
      $(".pill #pill-img").attr("src", "/assets/images/lifecycle-details-'.$animalName.'-pill.png");
      '.$initStr.'
    });';
    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_lifecycle_details', $data);
    $this->load->view('template/footer');
  }

  public function productForms()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_sourcing_productForms');

    //Add css to page
    $data['headers'] = array(
      base_url().'assets/css/fhome.css',
      base_url().'assets/css/fsourcing.css'
    );
    if ($this->agent->is_browser('Safari')) {
      // $data['headers'][] = base_url().'assets/css/fwelcome_safari.css';
    } else if ($this->agent->is_browser('Chrome')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_chrome.css';
    } else if ($this->agent->is_browser('Opera')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_opera.css';
    } else if ($this->agent->is_browser('Firefox')) {
      $data['headers'][] = base_url().'assets/css/fsourcing_firefox.css';
    }

    //add js to page
    $data['footers'] = array(
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
      base_url().'assets/js/jquery-ui.min.js',
      base_url().'assets/js/fsourcing.js',
      base_url().'assets/js/fsourcing_productForm.js'
    );

    //add js script to page
    $data['script'] = '$(function(){
      header.active("sourcing");
      $("header").removeClass("header").addClass("headerFixed");
      $(".footer2").attr("style", "position: relative;clear:both;");
    });';

    $this->load->view('template/header', $data);
    $this->load->view('frontend/sourcing_product_forms');
    $this->load->view('template/footer');
  }

}

/* End of file Fsourcing.php */
/* Location: ./application/controllers/Fsourcing.php */
