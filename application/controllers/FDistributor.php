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
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
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

  public function whyUs($details='', $section='')
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
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
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
    if (($details !== '' && $section !== '') && strtolower($details) == 'details') {
      switch ($section) {
        case 'website':
          $content_text = '
            Our website contains the latest news on New Product Lines, On-sale Items and Seasonal Promotion along with detailed product information and effective sales materials for end users.
            <br>
            Distributor Partners enjoy exclusive access to the website, and especially our Authorized Distributor Support Database for order tracking and shipment status.
            <br>
            This enables Distributor to make reasonable order for the best profitable interest.';
          $white_text = 'Website';
          break;
        case 'ongoing':
          $content_text = 'Our Veterinarian, Doctors and Specialists are arranged for online seminar or direct seminar with your company’s staff for discussion on Product Improvement and Adaptation for your particular market.
          <br><br>The conference will be held in reasonable point of time for better understanding between Supplier and Distributor.';
          $white_text = 'On-going technical training';
          break;
        case 'customize':
          $content_text = 'Veterco does much more than sell. Our staff works closely with our distributor partners to implement unique marketing campaigns to drive business. From Delivery Vehicle, Promotional Materials, to Website Marketing, Veterco is a willing partner in tailoring and executing programs with our family of Distributors.
          <br><br>Our staff is exceptionally knowledgeable and able to provide the right solutions for all needs. We provide highly effective sales and marketing tools along with aggressive marketing campaigns to create end user awareness in the industry.';
          $white_text = 'CUSTOMIZED MARKETING<br>PROGRAMS – EXCEPTIONAL<br>SUPPORT';
          break;
        case 'friendly':
          $content_text = 'Veterco Vietnam is a partner that brings real value - we understand distribution and meet your needs like no other. Our primary focus is serving the distributor and we go out of our way to ensure distributor partners succeed.';
          $white_text = 'DISTRIBUTOR FRIENDLY';
          break;
        case 'benefit':
          $content_text = 'We offer extra yearly incentive benefits which is calculated and sent at the end of every 12 months. This offer stimulates the development of your Sales Department and is a great way to boots up the company\'s branding with extra profit.';
          $white_text = 'YEARLY INCENTIVE <br>BENEFIT';
          break;
        case 'monopoly':
          $content_text = 'The Distributor is normally able to secure a lower price on goods, giving you greater buying power. You handle a specific territory, with exclusive rights to sell the brand in that area. We dedicate our Products and Services for your esteemed company exclusively and double the attention for your company’s branding in the process of introducing the products to your market.';
          $white_text = 'MONOPOLY + VIP PRICING <BR> MARGIN';
          break;

        default:
          $content_text = '';
          $white_text = '';
          $section = '';
          break;
      }
      if ($section === '') {
        $this->load->view('frontend/distributor_support_whyus', $data);
      }else{
        $data['section'] = strtolower($section);
        $data['white_text'] = $white_text;
        $data['content_text'] = $content_text;
        $this->load->view('frontend/distributor_support_whyus_details', $data);
      }
    } else {
      $this->load->view('frontend/distributor_support_whyus', $data);
    }
    $this->load->view('template/footer', $data);
  }

  public function be_the_first()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_distributor_bethefirst');

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
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
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
    $this->load->view('frontend/distributor_bethefirst', $data);
    $this->load->view('template/footer', $data);
  }

  public function samples_shipping_quote()
  {
    //Page title
    $data['title'] = '- '.$this->lang->line('f_distributor_samples');

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
      base_url().'assets/bower_components/jquery.easing/js/jquery.easing.min.js',
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
    $this->load->view('frontend/distributor_samplesshippingquote', $data);
    $this->load->view('template/footer', $data);
  }
}

/* End of file FDistributor.php */
/* Location: ./application/controllers/FDistributor.php */
