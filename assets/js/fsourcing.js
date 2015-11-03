var header = {
  hover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "block";
    }
  },
  unhover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "none";
    }
  },
  active: function (menuID) {
    $('#header ul li').removeClass('active');
    $('#header ul li#'+menuID).addClass('active');
  }
};
var block = {
  hover: function (element) {
    element.childNodes[1].className += " move";
  },
  unhover: function (element) {
    element.childNodes[1].className = element.childNodes[1].className.replace(' move', '');
  }
};
$(function () {
  $('#header').addClass('show');
});
