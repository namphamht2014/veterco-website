<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->checkLogin();
    date_default_timezone_set('Asia/SaiGon');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->load->model('Sanpham_model', 'database');
    $this->load->model('Thanhphan_model', 'database_tp');
    $this->load->model('Nhomsp_model', 'database_nhom');
    $this->load->model('Dongsp_model', 'database_dong');
    $this->load->model('Phanloai_model', 'database_phanloai');
    $this->load->library('excel');
    $this->lang->load('backend_lang');
  }

  function index()
  {
    $data['title'] = '- '.$this->lang->line('button_product');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css'
    );
    $data['script'] = 'main.activeMenu("products");';

    $this->load->view('template/header', $data);
    $this->load->view('products/index');
    $this->load->view('template/footer');
  }

  function danhsach($limit='100')
  {
    $data['title'] = '- '.$this->lang->line('product_list');
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
    $data['script'] = 'main.activeMenu("products");main.initFootable();';

    $data['dong'] = $this->database->getAll($limit);
    $data['limit'] = $limit;
    for ($i=0; $i < count($data['dong']); $i++) {
      $data['dong'][$i]->thanhphan = $this->database->getThanhphanBy($data['dong'][$i]->spID);
    }

    $this->load->view('template/header', $data);
    $this->load->view('products/sanpham');
    $this->load->view('template/footer');
  }

  function xemChitiet($spID='')
  {
    $data['title'] = '- '.$this->lang->line('product_details');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css'
    );
    $data['script'] = 'main.activeMenu("products");';
    $data['dong'] = $this->database->getDetails($spID);
    $data['dong'][0]->thanhphan = $this->database->getThanhphanBy($spID);

    $this->load->view('template/header', $data);
    $this->load->view('products/sanphamchitiet');
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
      $data['title'] = '- '.$this->lang->line('product_add');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['footers'] = array(
        base_url().'assets/bower_components/bootstrap3-typeahead/bootstrap3-typeahead.min.js'
      );
      $data['dong'] = $this->database->getDong();
      $data['nhom'] = $this->database->getNhom();
      $data['phanloai'] = $this->database->getPhanloai();
      $data['nhomthu'] = $this->database->getNhomthu();
      $data['loaithu'] = $this->database->getLoaithu();
      $data['thanhphan'] = $this->database->getThanhphan();
      $data['script'] = 'main.activeMenu("products");main.initLoaithu(\''.json_encode($data['loaithu']).'\');main.initThanhPhan(\''.json_encode($data['thanhphan']).'\')';

      $this->load->view('template/header', $data);
      $this->load->view('products/taosanpham');
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

  /**
   * Upload excel file for adding multiple products
   * @return [] [nothing to return]
   */
  function uploadExcel()
  {
    $data['title'] = '- '.$this->lang->line('product_upload_excel');
    $data['headers'] = array(
      base_url().'assets/css/sticky-footer-navbar.css'
    );
    $data['script'] = 'main.activeMenu("products");';
    $this->load->view('template/header', $data);
    $this->load->view('products/uploadExcel');
    $this->load->view('template/footer');
  }

  function do_upload()
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'xls|xlsx';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file'))
    {
      $error = array('error' => $this->upload->display_errors());

      $data['title'] = '- '.$this->lang->line('product_upload_excel');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';
      $this->load->view('template/header', $data);
      $this->load->view('products/uploadExcel', $error);
      $this->load->view('template/footer');
    }
    else
    {
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 300);
      $uploadData = array('upload_data' => $this->upload->data());
      $file = $uploadData['upload_data']['full_path'];
      $objPHPExcel= PHPExcel_IOFactory::load($file);
      $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
      foreach ($cell_collection as $key => $cell) {
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

        if ($row == 1) {
          $header[$row][$column] = $data_value;
        }else {
          $arr_data[$row][$column] = $data_value;
        }
      }
      $data['header'] = $header;
      $data['values'] = $arr_data;

      foreach ($arr_data as $key => $value) {
        if (isset($value['E']) && $value['E'] !='' &&
            isset($value['F']) && $value['F'] != '') {
          $ten = (isset($value['B'])) ? $value['B'] : '' ;
          $dong = $this->database->getDong($value['E']);
          if (!$dong) {
            $dongID = $this->database_dong->save(array('ten' => strtolower($value['E'])));
            $objDong = new stdClass();
            $objDong->id = $dongID;
            $dong = array($objDong);
          }
          $nhom = $this->database->getNhom($value['F']);
          if (!$nhom) {
            $nhomID = $this->database_nhom->save(array('ten' => strtolower($value['F'])));
            $objNhom = new stdClass();
            $objNhom->id = $nhomID;
            $nhom = array($objNhom);
          }
          $phanloai = $this->database->getPhanloai($value['G']);
          if (!$phanloai) {
            $phanloaiID = $this->database_phanloai->save(array('ten' => $value['G']));
            $objPhanloai = new stdClass();
            $objPhanloai->id = $phanloaiID;
            $phanloai = array($objPhanloai);
          }
          $mota = (isset($value['H'])) ? $value['H'] : '' ;
          $chidinh = (isset($value['I'])) ? $value['I'] : '' ;
          $chongchidinh = (isset($value['J'])) ? $value['J'] : '' ;
          $lieudung = (isset($value['K'])) ? $value['K'] : '' ;
          $cachdung = (isset($value['L'])) ? $value['L'] : '' ;

          $thuArr = array(
            'Fish' => (isset($value['M'])) ? 1 : 0 ,
            'Shirmp' => (isset($value['N'])) ? 1 : 0 ,
            'Pig' => (isset($value['O'])) ? 1 : 0 ,
            'Pets' => (isset($value['P'])) ? 1 : 0 ,
            'Poultry' => (isset($value['Q'])) ? 1 : 0 ,
            'Cattle' => (isset($value['R'])) ? 1 : 0 ,
            'Buffalo' => (isset($value['S'])) ? 1 : 0 ,
            'Horse' => (isset($value['T'])) ? 1 : 0 ,
            'Camel' =>(isset($value['U'])) ? 1 : 0
          );
          $loaiID = 0;
          foreach ($thuArr as $key2 => $value2) {
            if ($value2) {
              $loaiID = $this->database->getLoaithu($key2)[0]->id;
            }
          }
          $productData = array(
            'ten' => strtolower($ten),
            'dongID' => $dong[0]->id,
            'nhomID' => $nhom[0]->id,
            'phanloaiID' => $phanloai[0]->id,
            'dang' => strtolower($value['D']),
            'mota' => $mota,
            'chidinh' => $chidinh,
            'chongchidinh' => $chongchidinh,
            'lieudung' => $lieudung,
            'cachdung' => $cachdung,
            'loaithuID' => $loaiID,
            'khoiluong' => '0'
          );

          //prepare details data
          $thanhphanID = 0;
          $thanhPhanArr = explode(';', $value['C']);
          array_pop($thanhPhanArr);
          $khoiluong = explode(':', end($thanhPhanArr));
          $khoiluong[0] = preg_replace( "/\r|\n/", "", $khoiluong[0] );
          $khoiluong = ($khoiluong[0] == 'Exp') ? $khoiluong = trim($khoiluong[1]) : '' ;
          $productData['khoiluong'] = $khoiluong;

          $sanphamID = $this->database->save($productData);
          foreach ($thanhPhanArr as $key3 => $value3) {
            if ($value3 != '') {
              $tenTP = explode(':', $value3);
              if (count($tenTP) > 1) {
                $soluong = explode(' ', trim($tenTP[1]));
                $tmpDonvi = '';
                if ($soluong[0] != 'none') {
                  $tmpDonvi = end($soluong);
                }elseif ($soluong[0] == '++') {
                  $tmpDonvi = $soluong[0];
                }

                $tenTP[0] = preg_replace( "/\r|\n/", "", $tenTP[0] );
                $thanhphan = $this->database->getThanhphanInfo(trim($tenTP[0]), $tmpDonvi);
                if (!$thanhphan) {
                  if (trim($tenTP[0]) != 'Exp') {
                    $data = array(
                      'ten' => trim($tenTP[0]),
                      'donvi' => $tmpDonvi
                    );
                    $tpID = $this->database_tp->save($data);
                    $tpObj = new stdClass();
                    $tpObj->id = $tpID;
                    $tpObj->ten = trim($tenTP[0]);
                    $tpObj->donvi = $tmpDonvi;
                    $thanhphan = array($tpObj);
                  }
                }

                if ($thanhphan) {
                  $thanhphanID = $thanhphan[0]->id;

                  $tpData = array(
                    'sanphamID' => $sanphamID,
                    'thanhphanID' => $thanhphanID,
                    'soluong' => $soluong[0]
                  );
                  $this->database->saveDetails($tpData);
                }
              }
            }
          }
        }
      }

      $error = array('succ' => $this->lang->line('err_upload_success'));

      $data['title'] = '- '.$this->lang->line('product_upload_excel');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['script'] = 'main.activeMenu("products");';
      $this->load->view('template/header', $data);
      $this->load->view('products/uploadExcel', $error);
      $this->load->view('template/footer');
    }
  }

  function sua($id='')
  {
    $this->form_validation->set_rules('ten', $this->lang->line('field_name'), 'required|trim');
    $this->form_validation->set_rules('mota', $this->lang->line('field_desc'), 'required|trim');
    $this->form_validation->set_rules('chidinh', $this->lang->line('field_indication'), 'required|trim');
    $this->form_validation->set_rules('lieudung', $this->lang->line('field_dosage'), 'required|trim');
    $this->form_validation->set_rules('thanhphanID[]', $this->lang->line('button_composition'), 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['title'] = '- '.$this->lang->line('product_edit');
      $data['headers'] = array(
        base_url().'assets/css/sticky-footer-navbar.css'
      );
      $data['footers'] = array(
        base_url().'assets/bower_components/bootstrap3-typeahead/bootstrap3-typeahead.min.js'
      );
      $data['dong'] = $this->database->getDong();
      $data['nhom'] = $this->database->getNhom();
      $data['phanloai'] = $this->database->getPhanloai();
      $data['nhomthu'] = $this->database->getNhomthu();
      $data['loaithu'] = $this->database->getLoaithu();
      $data['thanhphan'] = $this->database->getThanhphan();
      $data['sanpham'] = $this->database->getByID($id);
      foreach ($data['loaithu'] as $key => $value) {
        if ($value->id == $data['sanpham'][0]->loaithuID) {
          $data['sanpham'][0]->nhomthuID = $value->nhomID;
        }
      }
      $thanhphan = $this->database->getThanhphanBy($id);

      $data['script'] = 'main.activeMenu("products");
      main.initLoaithu(\''.json_encode($data['loaithu']).'\');
      main.initThanhPhan(\''.json_encode($data['thanhphan']).'\');
      main.initSanphamData(\''.json_encode($thanhphan).'\')';

      $this->load->view('template/header', $data);
      $this->load->view('products/suasanpham');
      $this->load->view('template/footer');
    } else {
      $saveData = array(
        'id' => $id,
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
      $this->database->update($saveData);

      $this->database->deleteThanhphan($id);

      $thanhphan = $this->input->post('thanhphanID');
      $soluong = $this->input->post('soluong');
      for ($i=0; $i < count($thanhphan); $i++) {
        $tpData = array(
          'sanphamID' => $id,
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
      $data = array(
        'id' => $id,
        'status' => 0
      );
      $this->database->update($data);

      redirect('Products/danhsach', 'refresh');
    }else{
      echo $this->lang->line('err_nothing_delete');
    }
  }

  function check_ten()
  {
    $ten = $this->input->post('ten');
    if ($this->database->getByName($ten)) {
      $this->form_validation->set_message('check_ten', $this->lang->line('err_name_exist'));
      return FALSE;
    } else {
      return TRUE;
    }

  }

  function checkLogin()
  {
    return ($this->session->userdata('loggedIn')) ? TRUE : redirect('Welcome', 'refresh');
  }
}
