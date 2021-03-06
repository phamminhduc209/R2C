/*
 * ---------------------------------------------------
 * 1. Slide Carousel
 * 2. Scroll to Top
 * 3. Sticky Menu
 * 4. Accordion has icon
 * 5. Hover tag a show ul page Product
 * 6. POPUP order a product - check on info Payment
 * 7. Scroll News Item Tablet & Mobile
 */

  (function($){
    "use strict";
  /* ==================================================== */

  $('.cart_click').on('click', function() {
    $(this).addClass('active');    
    // loadCart();
  });

  $('.block-rightSidebar .block-title .iconClose, .sidebar-overlay').on('click', function() {
    $('showRightsidebar').removeClass('active');    
    $('.block-rightSidebar').removeClass('active');
  });

  /*
   * 1. Slide Carousel
  */
  $(document).ready(function() {
    $('.owl-carousel').each(function(index, el) {
      var config = $(this).data();
      config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
      config.smartSpeed="800";
      
      if($(this).hasClass('owl-style2')){
        config.animateOut='fadeOut';
        config.animateIn='fadeIn';    
      }
      if($(this).hasClass('dotsData')){
        config.dotsData="true";
      }
      $(this).owlCarousel(config);
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('.edit').click(function(){
    $('#txtId').val($(this).data('text'));
    $('#txtContent').val($(this).html());
    $('#editContentModal').modal('show');
  });
  $('#btnSaveContent').click(function(){
    $.ajax({
      url : $('#route-save-content').val(),
      type : "POST",
      data : {
        id : $('#txtId').val(),
        content : $('#txtContent').val()
      },
      success:  function(){
        window.location.reload();
      }

    });
  });
  });
  jQuery('.fb-page1').toggleClass('hide');
    jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat với chúng tôi').css({'bottom':0});
  jQuery('#closefbchat').click(function(){
    jQuery('.fb-page1').toggleClass('hide');
    if(jQuery('.fb-page1').hasClass('hide')){
      jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat với chúng tôi').css({'bottom':0});
    }
    else{
      jQuery('#closefbchat').text('Tắt Chat').css({'bottom':299});
    }
  });
  $(document).on('keypress', '.txtSearch', function(e) {
        var obj = $(this);

        if (e.which == 13) {
            if ($.trim(obj.val()) == '') {
                return false;
            }
        }
    });
  
  $(document).on('keypress', '#txtNewsletter', function(e){
    if(e.keyCode==13){
        $('#btnNewsletter').click();
    }
  });
    
  $('#btnNewsletter').click(function() {
      var email = $.trim($('#txtNewsletter').val());        
      if(validateEmail(email)) {
          $.ajax({
            url: $('#route-newsletter').val(),
            method: "POST",
            data : {
              email: email,
            },
            success : function(data){
              if(+data){
                alert('Đăng ký nhận bản tin thành công.');
              }
              else {
                alert('Địa chỉ email đã được đăng ký trước đó.');
              }
              $('#txtNewsletter').val("");
            }
          });
      } else {
          alert('Vui lòng nhập địa chỉ email hợp lệ.')
      }
  });

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
  /*
   * 2. Scroll to Top
  */
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {
      $('#return-to-top').addClass('td-scroll-up-visible');
    } else {
      $('#return-to-top').removeClass('td-scroll-up-visible');
    }
  });
  $('#return-to-top').click(function() {    
    $('body,html').animate({
      scrollTop : 0
    }, 'slow');
  });

  /*
   * 3. Sticky Menu
  */
  $('.fixed').sticky({ topSpacing: 0 });

  // Click show user info login
  $('.user-section-header a').on('click', function() {
    $(this).parent().toggleClass('active');
    console.log('clicked!');
  })

  $(document).on('click', '.cart-header', function() {
    localStorage.setItem('enb_cart_tab_active', $(this).data('tab')); 
    $(this).parents('.cart').find('.cart-main').slideToggle();
    $(this).parents('.cart').siblings().find('.cart-main').slideUp();
  });

})(jQuery); // End of use strict
$(document).ready(function(){
   $('.btn-addcart-product').click(function(){
       var quantity = $('#quantity').val();
       var product_id = $(this).data('id');
        addToCart(product_id, quantity);
   });

 });
 $(document).on('click', '.del_item', function() {
    if(confirm('Quý khách chắc chắn muốn xóa sản phẩm này?')){
        var id = $(this).data('id');
        $(this).parents('.tr-wrap').remove();
        update_product_quantity(id, 0, 'ajax');      
    }
  });
 function addToCart(product_id, quantity) {
   $.ajax({
     url: $('#route-add-to-cart').val(),
     method: "GET",
     data : {
       id: product_id,
       quantity : quantity
     },
     success : function(data){
        location.href = $('#route-cart').val();
     }
   });
 } 
 function update_product_quantity(id, quantity, type) {
    $.ajax({
        url: $('#route-update-product').val(),
        method: "POST",
        data: {
            id: id,
            quantity: quantity
        },
        success: function(data) {
                      
        }
    });
}
function HeightCart(){
  var h_headertop = $('#sticky-wrapper .header-r2c .header-r2c-top').outerHeight();
  $('.block-rightSidebar').css('top', h_headertop);
}
function resetWidthCart(){
  $('#giohang').width($('#cartsidebar').width());
}
$(window).on('load resize', function(){
  HeightCart();
  resetWidthCart();
});
$(document).ready(function(){
  $("#upload1").change(function () {
  
    var file = this.files[0];
    var imageFile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {      
      return false;
    } else {      
       var reader = new FileReader();
       reader.onload = imageIsLoaded1;
       reader.readAsDataURL(this.files[0]);
    }
  });
   $("#upload2").change(function () {
   
    var file = this.files[0];
    var imageFile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {      
      return false;
    } else {      
       var reader2 = new FileReader();
       reader2.onload = imageIsLoaded2;
       reader2.readAsDataURL(this.files[0]);
    }
  });
    $("#upload3").change(function () {
    
    var file = this.files[0];
    var imageFile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {      
      return false;
    } else {      
       var reader3 = new FileReader();
       reader3.onload = imageIsLoaded3;
       reader3.readAsDataURL(this.files[0]);
    }
  });
     $("#upload4").change(function () {
   
    var file = this.files[0];
    var imageFile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {      
      return false;
    } else {      
       var reader4 = new FileReader();
       reader4.onload = imageIsLoaded4;
       reader4.readAsDataURL(this.files[0]);
    }
  });
      $("#upload5").change(function () {   
    var file = this.files[0];
    var imageFile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {      
      return false;
    } else {      
       var reader5 = new FileReader();
       reader5.onload = imageIsLoaded5;
       reader5.readAsDataURL(this.files[0]);
    }
  });
  function imageIsLoaded1(e) {
    $(".m_upload_images--imageReader[focus=1]").attr('src', e.target.result).show();
    $(".m_upload_images--camera[focus=1]").hide();
    $(".m_upload_images--imageReader[focus=1]").show();
    $(".m_upload_images--Close[focus=1]").show();    
  }
  function imageIsLoaded2(e) {
    $(".m_upload_images--imageReader[focus=2]").attr('src', e.target.result).show();
    $(".m_upload_images--camera[focus=2]").hide();
    $(".m_upload_images--imageReader[focus=2]").show();
    $(".m_upload_images--Close[focus=2]").show();
  }
  function imageIsLoaded3(e) {
    $(".m_upload_images--imageReader[focus=3]").attr('src', e.target.result).show();
    $(".m_upload_images--camera[focus=3]").hide();
    $(".m_upload_images--imageReader[focus=3]").show();
    $(".m_upload_images--Close[focus=3]").show();
  }
  function imageIsLoaded4(e) {
    $(".m_upload_images--imageReader[focus=4]").attr('src', e.target.result).show();
    $(".m_upload_images--camera[focus=4]").hide();
    $(".m_upload_images--imageReader[focus=4]").show();
    $(".m_upload_images--Close[focus=4]").show();
  }
  function imageIsLoaded5(e) {
    $(".m_upload_images--imageReader[focus=5]").attr('src', e.target.result).show();
    $(".m_upload_images--camera[focus=5]").hide();
    $(".m_upload_images--imageReader[focus=5]").show();
    $(".m_upload_images--Close[focus=5]").show();
  }
  $('.m_upload_images--Close').click(function(){
     var focus = $(this).attr('focus');
     $(".m_upload_images--imageReader[focus=" + focus + "]").attr('src', '').hide();
      $(".m_upload_images--camera[focus=" + focus + "]").show();
      $(".m_upload_images--imageReader[focus=" + focus + "]").hide();
      $(".m_upload_images--Close[focus=" + focus + "]").hide();
      $('#upload' + focus).val('');
  });
});

$('.m_menu--cate--list li.has-child>i').click(function () {
  $(this).parent().toggleClass('open');
  $(this).next().slideToggle();
  $(this).parent().siblings().removeClass('open').find('.cate-child').hide('100');
});
$("#js-range-slider-status-products").ionRangeSlider({
    type: "double",
    skin: "round",
    grid: true,
    min: 70,
    max: 99,
    from: 85,
    to: 90,
    // prefix: "%"
});
$('.m_user_post--list .m_user_post--list--item .cmt .text .viewmore').click(function () {
  $(this).parent().find('p').animate({height:"100%"}, 10);
});

document.addEventListener('DOMContentLoaded', function () {
  var $movieBtn = $('.js_top_movie_btn');
  if ($movieBtn.length) {
    var ua = navigator.userAgent;
    function playMovie() {
      var $player = $('.js_top_movie_player')[0].contentWindow;
      $player.postMessage('{"event":"command", "func": "playVideo", "args":""}', '*');
    };
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      $movieBtn.on('touchstart', function() {
        $movieBtn.fadeOut(100);
      });
    }
    $movieBtn.on('click', function() {
      if ($movieBtn.length) $movieBtn.fadeOut();
      playMovie();
    });
  }
});
$('.block_categories').on('click', function() {
  $(this).toggleClass('active');
})

$('.js_m_filter').click(function() {
  $(this).parents('body').find('.js-filter-product_drnt').slideToggle();
})

$('[data-toggle="popover"]').popover({ trigger: "hover | focus", html: "true" });