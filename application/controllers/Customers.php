<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
    $this->checkAdmin();
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->load->model('Customers_model', 'database');
    $this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = '- '.$this->lang->line('cus_list');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css',
      base_url().'assets/bower_components/footable/css/footable.core.min.css',
      base_url().'assets/bower_components/footable/css/footable.standalone.min.css'
    );
    $data['footers'] = array(
      base_url().'assets/bower_components/footable/dist/footable.min.js',
      base_url().'assets/bower_components/footable/dist/footable.filter.min.js',
      base_url().'assets/bower_components/footable/dist/footable.paginate.min.js'
    );

    $data['script'] = 'main.activeMenu("customers");main.initFootable();';
    $data['customers'] = $this->database->getAllCustomers();

    $this->load->view('template/header', $data);
    $this->load->view('customers/index');
    $this->load->view('template/footer');
  }

  function xem($cid='')
  {
    $data['title'] = '- '.$this->lang->line('cus_details');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css',
      base_url().'assets/bower_components/footable/css/footable.core.min.css',
      base_url().'assets/bower_components/footable/css/footable.standalone.min.css'
    );

    $data['script'] = 'main.activeMenu("customers");';
    $data['customer'] = $this->database->getCustomerByID($cid);

    $this->load->view('template/header', $data);
    $this->load->view('customers/xem');
    $this->load->view('template/footer');
  }

  function tao()
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');
    $this->form_validation->set_rules('mota', $this->lang->line('field_desc'), 'required|trim');
    $this->form_validation->set_rules('chidinh', $this->lang->line('field_indication'), 'required|trim');
    $this->form_validation->set_rules('lieudung', $this->lang->line('field_dosage'), 'required|trim');
    $this->form_validation->set_rules('thanhphanID[]', $this->lang->line('button_composition'), 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('cus_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      // $data['dong'] = $this->database->getDong();
      // $data['nhom'] = $this->database->getNhom();
      // $data['phanloai'] = $this->database->getPhanloai();
      // $data['nhomthu'] = $this->database->getNhomthu();
      // $data['loaithu'] = $this->database->getLoaithu();
      // $data['thanhphan'] = $this->database->getThanhphan();
      $data['script'] = 'main.activeMenu("customers");';

      $data['page_header'] = $this->lang->line('cus_add');
      $data['action'] = site_url('Customers/tao');
      $data['submit_text'] = $this->lang->line('button_add');

      $data['username'] = '';
      $data['password'] = '';
      $data['ngdaidien'] = '';
      $data['tencty'] = '';
      $data['diachi'] = '';
      $data['hotline'] = '';
      $data['email'] = '';
      $data['bankinfo'] = '';
      $data['sodkkd'] = '';
      $data['shipinfo'] = '';

      $this->load->view('template/header', $data);
      $this->load->view('customers/tao');
      $this->load->view('template/footer');
    } else {
      $saveData = array(
        'ten' => $this->input->post('ten'),
        'dongID' => $this->input->post('dong'),
        'nhomID' => $this->input->post('nhom'),
        'phanloaiID' => $this->input->post('phanloai'),
        'mota' => $this->input->post('mota'),
        'chidinh' => $this->input->post('chidinh'),
        'chongchidinh' => $this->input->post('chongchidinh'),
        'lieudung' => $this->input->post('lieudung'),
        'cachdung' => $this->input->post('cachdung'),
        'loaithuID' => $this->input->post('loaithu'),
        'khoiluong' => $this->input->post('khoiluong')
      );
      $sanphamID = $this->database->save($saveData);

      $thanhphan = $this->input->post('thanhphanID');
      $soluong = $this->input->post('soluong');
      for ($i=0; $i < count($thanhphan); $i++) {
        $tpData = array(
          'sanphamID' => $sanphamID,
          'thanhphanID' => $thanhphan[$i],
          'soluong' => $soluong[$i]
        );

        $this->database->saveDetails($tpData);
      }

      redirect('Products/danhsach', 'refresh');
    }
  }

  function sua($cid)
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim|callback_check_ten');
    $this->form_validation->set_rules('mota', $this->lang->line('field_desc'), 'required|trim');
    $this->form_validation->set_rules('chidinh', $this->lang->line('field_indication'), 'required|trim');
    $this->form_validation->set_rules('lieudung', $this->lang->line('field_dosage'), 'required|trim');
    $this->form_validation->set_rules('thanhphanID[]', $this->lang->line('button_composition'), 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('cus_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      // $data['dong'] = $this->database->getDong();
      // $data['nhom'] = $this->database->getNhom();
      // $data['phanloai'] = $this->database->getPhanloai();
      // $data['nhomthu'] = $this->database->getNhomthu();
      // $data['loaithu'] = $this->database->getLoaithu();
      // $data['thanhphan'] = $this->database->getThanhphan();
      $data['script'] = 'main.activeMenu("customers");';

      $data['page_header'] = $this->lang->line('cus_edit');
      $data['action'] = site_url('Customers/sua/'.$cid);
      $data['submit_text'] = $this->lang->line('button_edit');

      $data['id'] = $cid;
      $customer = $this->database->getCustomerByID($cid);
      $data['username'] = $customer[0]->username;
      $data['password'] = '';
      $data['ngdaidien'] = $customer[0]->ngdaidien;
      $data['tencty'] = $customer[0]->tenCty;
      $data['diachi'] = $customer[0]->diachi;
      $data['hotline'] = $customer[0]->hotline;
      $data['email'] = $customer[0]->email;
      $data['bankinfo'] = $customer[0]->bankinfo;
      $data['sodkkd'] = $customer[0]->sodkkd;
      $data['shipinfo'] = $customer[0]->thongtingoihang;

      $this->load->view('template/header', $data);
      $this->load->view('customers/tao');
      $this->load->view('template/footer');
    } else {
      $saveData = array(
        'ten' => $this->input->post('ten'),
        'dongID' => $this->input->post('dong'),
        'nhomID' => $this->input->post('nhom'),
        'phanloaiID' => $this->input->post('phanloai'),
        'mota' => $this->input->post('mota'),
        'chidinh' => $this->input->post('chidinh'),
        'chongchidinh' => $this->input->post('chongchidinh'),
        'lieudung' => $this->input->post('lieudung'),
        'cachdung' => $this->input->post('cachdung'),
        'loaithuID' => $this->input->post('loaithu'),
        'khoiluong' => $this->input->post('khoiluong')
      );
      $sanphamID = $this->database->save($saveData);

      $thanhphan = $this->input->post('thanhphanID');
      $soluong = $this->input->post('soluong');
      for ($i=0; $i < count($thanhphan); $i++) {
        $tpData = array(
          'sanphamID' => $sanphamID,
          'thanhphanID' => $thanhphan[$i],
          'soluong' => $soluong[$i]
        );

        $this->database->saveDetails($tpData);
      }

      redirect('Products/danhsach', 'refresh');
    }
  }

  function xoa($id='')
  {
    if ($id != '' && $id > 0) {
      $customer = $this->database->getLoginID($id);

      $logindata = array(
        'id' => $customer[0]->login_id,
        'status' => 0
      );
      $this->database->updateLogin($logindata);

      $data = array(
        'id' => $id,
        'status' => 0
      );
      $this->database->update($data);

      redirect('Customers', 'refresh');
    }else{
      echo $this->lang->line('err_nothing_delete');
    }
  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? TRUE : redirect('Welcome', 'refresh') ;
  }

  function checkAdmin()
  {
    return ($this->session->userdata['loggedIn']->vaitro == isAdmin) ? TRUE : redirect('Welcome', 'refresh') ;
  }

}
