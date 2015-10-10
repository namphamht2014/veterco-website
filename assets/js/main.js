var main = {
  activeMenu: function (menuID) {
    $('ul.nav li').removeClass();
    $('ul.nav li#'+menuID).addClass('active');
  },
  initFootable: function () {
    $('.footable').footable();
  },
  xoaUser: function (url) {
    return (confirm('Are you sure?')) ? location.href = url : false;
  },
  updateInfo: function (element) {
    $(element).hide();

    $('.btnSubmit').html('<button type="submit" name="submit" class="btn btn-info">Update</button>');
    $('#ten').removeAttr('readonly');
    $('#vaitro').removeAttr('disabled');
  },
  loaithu: {},
  initLoaithu: function (strLoaithu) {
    strLoaithu = strLoaithu.replace(/ten/gi, 'name');
    main.loaithu = $.parseJSON(strLoaithu);
    main.updateLoaithu();
  },
  updateLoaithu: function () {
    var nhomid = $('select.nhomthu').val();

    var html = '';
    for (var i = 0, ilength = main.loaithu.length; i < ilength; i++) {
      if (main.loaithu[i].nhomID == nhomid) {
        html += '<option value="'+main.loaithu[i].id+'">'+main.loaithu[i].name+'</option>';
      }
    }

    $('select.loaithu').html(html);
  },
  lines: [],
  thanhphan: [],
  sanphamData: [],
  initSanphamData: function (strSP) {
    main.sanphamData = $.parseJSON(strSP);

    for (var i = 0, ilength = main.sanphamData.length; i < ilength; i++) {
      main.themline('abc');
    }
  },
  initThanhPhan: function (strThanhphan) {
    strThanhphan = strThanhphan.replace(/\n/gi, "name");
    strThanhphan = strThanhphan.replace(/ten/gi, "name");
    main.thanhphan = $.parseJSON(strThanhphan);
  },
  themline: function (arg) {
    var lineNo = main.lines.length + 1;

    var htmlStr = '<div class="form-group row line'+lineNo+'">';
    if (arg !== '') {
      htmlStr += '<div class="col-sm-11">';
      htmlStr += '<div class="row">';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="thanhphan">Name</label>';
      htmlStr += '<input type="text" name="thanhphan" autocomplete="off" class="form-control thanhphan" value="'+main.sanphamData[lineNo-1].ten+'">';
      htmlStr += '<input type="hidden" name="thanhphanID[]" id="thanhphanID" value="'+main.sanphamData[lineNo-1].thanhphanID+'">';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="soluong">Quantity</label>';
      htmlStr += '<input type="text" name="soluong[]" id="soluong" class="form-control" value="'+main.sanphamData[lineNo-1].soluong+'">';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="donvi">Unit</label>';
      htmlStr += '<input type="text" name="donvi[]" id="donvi" readonly class="form-control" value="'+main.sanphamData[lineNo-1].donvi+'">';
      htmlStr += '</div>';
      htmlStr += '</div>';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-1 text-right">';
      htmlStr += '<label for="donvi" class="text-transparent">Delete</label>';
      htmlStr += '<button class="btn btn-danger" onclick="main.xoaline('+lineNo+')">Delete</button>';
      htmlStr += '</div>';
      htmlStr += '</div>';
    }else{
      htmlStr += '<div class="col-sm-11">';
      htmlStr += '<div class="row">';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="thanhphan">Name</label>';
      htmlStr += '<input type="text" name="thanhphan" autocomplete="off" class="form-control thanhphan" value="">';
      htmlStr += '<input type="hidden" name="thanhphanID[]" id="thanhphanID" value="">';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="soluong">Quantity</label>';
      htmlStr += '<input type="text" name="soluong[]" id="soluong" class="form-control" value="">';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-4">';
      htmlStr += '<label for="donvi">Unit</label>';
      htmlStr += '<input type="text" name="donvi[]" id="donvi" readonly class="form-control" value="">';
      htmlStr += '</div>';
      htmlStr += '</div>';
      htmlStr += '</div>';
      htmlStr += '<div class="col-sm-1 text-right">';
      htmlStr += '<label for="donvi" class="text-transparent">Delete</label>';
      htmlStr += '<button class="btn btn-danger" onclick="main.xoaline('+lineNo+')">Delete</button>';
      htmlStr += '</div>';
      htmlStr += '</div>';
    }
    $('.btnsubmit').before(htmlStr);
    main.lines.push(htmlStr);

    var $input = $("div.line"+lineNo+" input.thanhphan");
		$input.typeahead({ source: main.thanhphan });
    $input.change(function() {
      var current = $input.typeahead("getActive");
      if (current) {
        $("div.line"+lineNo+' #thanhphanID').val(current.id);
        $("div.line"+lineNo+' #donvi').val(current.donvi);
        $("div.line"+lineNo+' #soluong').val(0);
      }
    });
  },
  xoaline: function (lineNo) {
    var htmlID = main.lines.length;

    if (htmlID > 0) {
      $('div.line'+lineNo).remove();
      delete main.lines[lineNo - 1];
    }
  },
  showProducts: function (element, url) {
    location.href = url +'/'+ element.value;
  }
};
