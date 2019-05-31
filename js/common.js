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