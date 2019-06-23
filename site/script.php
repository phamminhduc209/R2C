<!-- ===== JS Bootstrap ===== -->
<!-- date js -->
<script src="<?=public_url('site/js/bootstrap-datepicker.min.js')?>"></script>
<script src="<?=public_url('site/js/bootstrap-datepicker.vi.min.js')?>"></script>
<!-- carousel -->
<script src="<?=public_url('site/lib/carousel/owl.carousel.min.js')?>"></script>
<!-- sticky -->
<script src="<?=public_url('site/lib/sticky/jquery.sticky.js')?>"></script>
<!-- Js Common -->
<script src="<?=public_url('site/js/common.js')?>"></script>
<!-- Js zoom -->
<script src="<?=public_url('site/lib/jquery.zoom.min.js')?>"></script>
<!-- Flexslider -->
<script src="<?=public_url('site/lib/flexslider/jquery.flexslider-min.js')?>"></script>
<!-- Js Fixheight -->
<script src="<?=public_url('site/js/fixheight.js')?>"></script>
<!-- Fancybox -->
<script src="<?=public_url('site/js/jquery.fancybox.min.js')?>"></script>
<!-- Fakecrop -->
<script src="<?=public_url('site/js/jquery.fakecrop.js')?>"></script>
<!-- wow js -->
<script src="<?=public_url('site/js/wow.min.js')?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?=public_url('site/js/jquery.counterup.min.js')?>"></script>

<script src="<?=public_url('site/lib/jquery.countdown.min.js')?>"></script>

<!-- slidelight -->
<script src="<?=public_url('site/lib/lightslider/lightslider.js')?>"></script>
<!-- Share icon -->
<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b215c2a2658a8a"></script> -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/velocity/2.0.3/velocity.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/velocity/2.0.3/velocity.ui.min.js"></script>

<script src="<?=public_url('site/lib/revolution/js/jquery.themepunch.tools.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/jquery.themepunch.revolution.min.js')?>"></script>  

<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.actions.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.carousel.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.kenburn.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.layeranimation.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.migration.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.navigation.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.parallax.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.slideanims.min.js')?>"></script>
<script src="<?=public_url('site/lib/revolution/js/extensions/revolution.extension.video.min.js')?>"></script> 
<script src="<?=public_url('site/js/sweetalert2.min.js')?>"></script> 

<!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> -->

<!--===================================== Like sản phẩm =====================================-->
<script type="text/javascript">
  $(document).ready(function(){
    $(".btn-like-icon").click(function(){
      var obj = $(this);
      var btnlike = $(this).find('.likes');
      var idlike = $(this).attr('data-like');
      $.ajax({
        type:"post",
        url:"<?=base_url('product/like');?>",
        data:{idlike:idlike},
        success:function(data){
          console.log(data);
          if(data == 'errorlogin'){
            $('#modalLogin').modal('show');
          }else if(data == 'blocklike'){
            alert('Cảm ơn bạn! Bạn đã like trước đó rồi!');
          }else{
            btnlike.html($.parseJSON(data).likes);
            obj.off('click');
          }
        }
      });
    });
  });
</script>


<!--===================================== Xem ở cửa sổ mới =====================================-->
<script type="text/javascript">
  function openW(e){
    var href = e.attr('data-href');
    var left = (screen.width/2)-(768/2);
    var top = (screen.height/2)-(400/2);
    window.open(href, '', 'width=768, height=400, '+'left='+left+', top='+top);
    return false;
  }
</script>
<!--===================================== END Xem ở cửa sổ mới =====================================-->

<!--===================================== Gio hang ajax =====================================-->
<!-- Thêm trang chi tiết -->
<script type="text/javascript">
$(document).ready(function(){
  $(".btn-addde").click(function(){
    var btnclick = $(this);
    $('.wrapper').find('.addok').remove();
    var id = $(this).attr('data-id');
    var qtyajax = $("input[name='quantity']").val();
    var type = btnclick.attr('data-type') != undefined ? btnclick.attr('data-type') : 1;
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/addajaxdetail');?>",
      data:{idspajax:id, qtyajax:qtyajax, type : type},
      success:function(data){
        if(data == 'errorlogin'){
          $('#modalLogin').modal('show');
        }else if(data == 'outof'){
          $('#outofModal').modal('show');
        }else if(data == 'blockcart'){
          alert('Vui lòng xóa mẫu thử trước khi thay đổi thùng hàng. Sau đó chọn lại mẫu thử.');
        }else if(data == 'limit_buy'){
          alert('Đã đạt số lượng mua tối đa cho sản phẩm này');
        }else{
          $('.cart-ajax').html($.parseJSON(data).qty);
          loadCart();          
        }
      }
    });
  });
});
</script>

<!-- Thêm -->
<script type="text/javascript">
$(document).ready(function(){
  $(".btn_add_cart").click(function(){
    var btnclick = $(this);
    $('.wrapper').find('.addok').remove();
    var id = $(this).attr('data-id');
    var qtyajax = 1;
    var type = btnclick.attr('data-type') != undefined ? btnclick.attr('data-type') : 1;   
    var tab = btnclick.data('tab');
    localStorage.setItem('enb_cart_tab_active', tab);
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/addajax');?>",
      data:{
        idspajax : id, 
        qtyajax : qtyajax, 
        type : type
      },
      success:function(data){
        if(data == 'errorlogin'){
          $('#modalLogin').modal('show');
        }else if(data == 'outof'){
          $('#outofModal').modal('show');
        }else if(data == 'blockcart'){
          alert('Vui lòng xóa mẫu thử trước khi thay đổi thùng hàng. Sau đó chọn lại mẫu thử.');
        }else if(data == 'errorsale'){
          alert('Đã hết thời gian FLASH SALE. Vui lòng quay lại sau!');
        }else if(data == 'limit_buy'){
          alert('Đã đạt số lượng mua tối đa cho sản phẩm này!');
        }else{                 
          $('.cart-ajax').html($.parseJSON(data).qty);
          loadCart();          
        }
      }
    });
  });
});
</script>
<!-- Update -->
<script type="text/javascript">
  function updateqty(e){
    var qty = e.val();
    if(qty <= 0){qty = 1;}
    var rowid = e.attr('data-rowid');
    var idupdate = e.attr('data-update');
    var qtycu = e.attr('data-qtycu');
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/updateajax');?>",
      data:{qty:qty, rowid:rowid, idupdate:idupdate, qtycu:qtycu},
      // beforeSend: function(){
      //   $('.add-to-cart--form .product-list').append('<div class="backload"></div>');
      // },
      success:function(data){
      	//$('.add-to-cart--form .product-list').find('.backload').remove();
        if(data == 'blockcart'){
          e.val(qtycu);
          alert('Vui lòng xóa mẫu thử trước khi thay đổi thùng hàng. Sau đó chọn lại mẫu thử.');
        }else if(data == 'outof'){
          e.val(qtycu);
      		$('#outofModal').modal('show');
      	}else if(data == 'limit_buy'){
          e.val(qtycu);
          alert('Đã đạt số lượng mua tối đa cho sản phẩm này!');
        }else{          
	        $('.cart-ajax').html($.parseJSON(data).qty);
	        loadCart();
      	}
      }
    });
  }
</script>
<!-- Delete -->
<script type="text/javascript">
  function deleteqty(e){
    var idrow = e.attr('data-idrow');
    var iddelete = e.attr('data-delete');
    var qtyde = e.attr('data-qty');
    // var dataconhet = $('.product-img .soluong').attr('data-conhet');
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/deleteajax');?>",
      data:{idrow:idrow, iddelete:iddelete, qtyde:qtyde},
      // beforeSend: function(){
      //   $('.add-to-cart--form .product-list').append('<div class="backload"></div>');
      // },
      success:function(data){
        //$('.add-to-cart--form .product-list').find('.backload').remove();
        if(data == 'blockcart'){
          alert('Vui lòng xóa mẫu thử trước khi thay đổi thùng hàng. Sau đó chọn lại mẫu thử.');
        }else{          
          $('.cart-ajax').html($.parseJSON(data).qty);
          loadCart();
          if($.parseJSON(data).qty == 0 && $('#is_checkout').val() == 1){
            alert('Giỏ hàng rỗng, không thể tiếp tục thanh toán. Vui lòng chọn mua thêm sản phẩm.');
            location.href="<?php echo base_url(); ?>"
          }
        }
      }
    });
  }
</script>
<!-- End Gio hang ajax -->

<!--===================================== Quà tặng ajax =====================================-->
<!-- Thêm quà tặng -->
<script type="text/javascript">
$(document).ready(function(){
  $(".add-quatang").click(function(){
    var btnclick = $(this);
    $('.wrapper').find('.addok').remove();
    var idqua = $(this).attr('data-id');
    
    
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/addquaajax');?>",
      data:{idqua:idqua},
      success:function(data){

        if(data == 'errorlogin'){
          $('#modalLogin').modal('show');
        }else if(data == 'notdk'){
          alert('Bạn sẽ nhận được số lượng mẫu thử theo giá trị thùng hàng từ 300K');
        }else if(data == 'errormax'){
          alert('Rất tiếc bạn không thể nhận thêm sản phẩm dùng thử');
        }else if(data == 'erroronly'){
          alert('Bạn chỉ được chọn mỗi loại mẫu thử 1 lần cho 1 đơn hàng.');
        }else{
          localStorage.setItem('enb_cart_tab_active', 'mt');
          loadCart();
        }
      }
    });
  });
});
</script>

<!-- Xóa quà tặng -->
<script type="text/javascript">
  function deletequa(e){
    var idqua = e.attr('data-iddung');
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/xoaquaajax');?>",
      data:{idqua:idqua},
      // beforeSend: function(){
      //   $('.add-to-cart--form .product-list').append('<div class="backload"></div>');
      // },
      success:function(data){
        console.log(data);
        // $('.add-to-cart--form .product-list').find('.backload').remove();        
        $('.cart-ajax').html($.parseJSON(data).qty);
        loadCart();
      }
    });
  }
</script>
<!-- End quà tặng ajax -->

<!-- Check nút thanh toán -->
<script type="text/javascript">
  $(document).on('click', '.btn_ttoan', function(){
    $.ajax({
      type:"post",
      url:"<?=base_url('cart/testcheckout');?>",
      // beforeSend: function(){
      //   $('.add-to-cart--form .product-list').append('<div class="backload"></div>');
      // },
      success:function(data){
        //$('.add-to-cart--form .product-list').find('.backload').remove();
        if(data == 'errorlogin'){
          $('#modalLogin').modal('show');
        }else if(data == 'checkoutok'){
          window.location.href = "<?=base_url('order/checkout')?>";
        }else if(data == 'checkoutgioihan'){
          alert('Giá trị tối thiểu của thùng hàng là '+'<?=number_format($infosetting->gioihan)?>'+'đ. Vui lòng chọn thêm sản phẩm.');
        }else{
          alert('Bạn chưa có sản phẩm trong giỏ hàng.');
        }
      }
    });
  });
</script>

<!-- wow init -->
<script type="text/javascript">
  new WOW({
    boxClass:     'wow',
    animateClass: 'animated'
  }).init();
</script>

<script type="text/javascript">
  $(".valphone").on("keypress", function(evt) {
  var keycode = evt.charCode || evt.keyCode;
  if (keycode == 46 || this.value.length==12) {
    return false;
  }
  });
</script>
<script type="text/javascript">
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
  }
</script>

<!-- dang ky mail footer -->
<script type="text/javascript">
$(document).ready(function(){
  $(".btn_dkonlymail").click(function(){
      // var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var emailonly = $("input[name='emailonly']").val();
      if(emailonly === ''){
        alert('Vui lòng nhập email!');
        return false;
      }
      // if(!filter.test(emailonly)) {
      //   alert('Địa chỉ email không hợp lệ!');
      //   return false;
      // }
      $.ajax({
        type:"post",
        url:"<?=base_url('lienhe/dkemailonly');?>",
        data:{emailonly:emailonly},
        beforeSend: function(){
            $('.btn_dkonlymail').append(' <i class="fa fa-spinner fa-spin"></i>');
        },
        success:function(data){
          $('.btn_dkonlymail').find('.fa-spinner').remove();
          $("input[name='emailonly']").val('');
          alert(data)
        }
      });
  });
});
</script>

<!-- dang ky mail ajax -->
<script type="text/javascript">
$(document).ready(function(){
  $(".btn-nhanmail").click(function(){
      $('.mesg').find('.alert-success').remove();
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var namedangky = $("input[name='name-nhanmail']").val();
      var phonedangky = $("input[name='phone-nhanmail']").val();
      var emaildangky = $("input[name='email-nhanmail']").val();
      var ghichudangky = $("textarea[name='ghichu-nhanmail']").val();
      if(phonedangky === '' || namedangky === ''){
        alert('Điền đầy đủ thông tin! - Fill full the information!');
        return false;
      }
      if(!filter.test(emaildangky)) {
          alert('Địa chỉ email không hợp lệ - Email address is not valid.\nExample@gmail.com');
          return false;
      }
      $.ajax({
        type:"post",
        url:"<?=base_url('lienhe/dknt');?>",
        data:{namedangky:namedangky, phonedangky:phonedangky, emaildangky:emaildangky, ghichudangky:ghichudangky},
        beforeSend: function(){
            $('.btn-nhanmail').append(' <i class="fa fa-spinner fa-spin"></i>');
        },
        success:function(data){
          $('.btn-nhanmail').find('.fa-spinner').remove();
          $("input[name='name-nhanmail']").val('');
          $("input[name='phone-nhanmail']").val('');
          $("input[name='email-nhanmail']").val('');
          $("textarea[name='ghichu-nhanmail']").val('');
          $('.mesg').append('<div class="alert alert-success">'+data+'</div>');
        }
      });
  });
});
</script>

<script type="text/javascript">
  $(function() {
    $('.fixgia').matchHeight(false);
  });
  $(function() {
    $('.bangnhau1').matchHeight(false);
  });
  $(function() {
    $('.bangnhau2').matchHeight(false);
  });
  $(function() {
    $('.equalHeight').matchHeight(false);
  });
  $(function() {
    $('.block-static-block-homepage .block-item .description').matchHeight(false);
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
  var titledau = $('.videofocus').first().attr('data-title');
  var srcdau = $('.videofocus').first().attr('data-src');
  $('.titleplaylist p.vdtitle').html(titledau);
  $("#content-video").attr('src',srcdau);
  $('.videofocus').click(function(){
    $('.videofocus').removeClass('active');
    $(this).addClass('active');
    // $(this).find('span').remove();
    // $(this).find('i').remove();
    // $(this).find('a').prepend("<i class='fa fa-caret-right'></i>");
    var title = $(this).attr('data-title');
    var sort = $(this).attr('data-sort');
    var src = $(this).attr('data-src');
    $('.titleplaylist p.vdtitle').html(title);
    $('.titleplaylist p i.vdtong').html(sort);
    $("#content-video").attr('src',src);
  });
});
</script>
<script>
window.images_size = {
  ratio_width : 1,
  ratio_height : 1,
};
</script>

<script type="text/javascript">
$(document).ready(function() {
$(".fancybox").fancybox({
  prevEffect		: 'none',
  nextEffect		: 'none',
  closeBtn		: false,
  helpers		: {
    title	: { type : 'inside' },
    buttons	: {}
  }
});
});
</script>
<script type="text/javascript">
(function($){
	function fixButtonHeights() {
		var heights = new Array();

		// Loop to get all element heights
		$('.equalHeight').each(function() {
			// Need to let sizes be whatever they want so no overflow on resize
			$(this).css('min-height', '0');
			$(this).css('max-height', 'none');
			$(this).css('height', 'auto');

			// Then add size (no units) to array
	 		heights.push($(this).height());
		});

		// Find max height of all elements
		var max = Math.max.apply( Math, heights );

		// Set all heights to max height
		$('.equalHeight').each(function() {
			$(this).css('height', max + 'px');
            // Note: IF box-sizing is border-box, would need to manually add border and padding to height (or tallest element will overflow by amount of vertical border + vertical padding)
		});
	}

	$(window).load(function() {
		// Fix heights on page load
		fixButtonHeights();

		// Fix heights on window resize
		$(window).resize(function() {
			// Needs to be a timeout function so it doesn't fire every ms of resize
			setTimeout(function() {
	      		fixButtonHeights();
			}, 120);
		});
	});
})(jQuery);
</script>

<script type="text/javascript">
  $(document).ready(function(){
    if($("#backTOP").length > 0){
      $(window).scroll(function (){
        var e = $(window).scrollTop();
        if (e > 400) {
          $("#backTOP").show()
        } else {
          $("#backTOP").hide()
        }
      });
      $("#backTOP").click(function(){
        $('html, body').animate({
          scrollTop: 0
        },1500);
      });
    }
  });
</script>

<!-- dang ky tài khoản -->
<script type="text/javascript">
$(document).ready(function(){
  $(".btn-dk-user").click(function(){
    var name_user = $("input[name='name_user']").val();
    var phone_user = $("input[name='phone_user']").val();
    var email_user = $("input[name='email_user']").val();
    var pass_user = $("input[name='pass_user']").val();
    var passagain_user = $("input[name='passagain_user']").val();
    var agree_user = 0;
    if($("input[name='agree_user']").is(":checked")){
      agree_user = $("input[name='agree_user']").val();
    }
    $.ajax({
      type:"post",
      url:"<?=base_url('user/register');?>",
      data:{
        name_user:name_user,
        phone_user:phone_user,
        email_user:email_user,
        pass_user:pass_user,
        passagain_user:passagain_user,
        agree_user:agree_user
      },
      beforeSend: function(){
          $('.btn-dk-user').append(' <i class="fa fa-spinner fa-spin"></i>');
      },
      success:function(data){
        $('.btn-dk-user').find('.fa-spinner').remove();
        if(data != 1){
          var loi = $.parseJSON(data);
          if(loi.name_user){
            $(".name_user").html('<span class="lb_err">'+loi.name_user+'</span>');
          }else{
            $(".name_user").html('');
          }
          if(loi.phone_user){
            $(".phone_user").html('<span class="lb_err">'+loi.phone_user+'</span>');
          }else{
            $(".phone_user").html('');
          }
          if(loi.email_user){
            $(".email_user").html('<span class="lb_err">'+loi.email_user+'</span>');
          }else{
            $(".email_user").html('');
          }
          if(loi.pass_user){
            $(".pass_user").html('<span class="lb_err">'+loi.pass_user+'</span>');
          }else{
            $(".pass_user").html('');
          }
          if(loi.passagain_user){
            $(".passagain_user").html('<span class="lb_err">'+loi.passagain_user+'</span>');
          }else{
            $(".passagain_user").html('');
          }
          if(loi.agree_user){
            $(".agree_user").html('<span class="lb_err">'+loi.agree_user+'</span>');
          }else{
            $(".agree_user").html('');
          }
        }else{
          $("input[name='name_user']").val('');
          $("input[name='phone_user']").val('');
          $("input[name='email_user']").val('');
          $("input[name='pass_user']").val('');
          $("input[name='passagain_user']").val('');
          $('#modalRegister').modal('hide');
          $('#modalSuccess').modal('show');
          setTimeout(function(){
            window.location.reload();
          }, 1000);
        }
      }
    });
  });
});

// Quên pass
$(document).ready(function(){
  $(".btn-forgot-pass").click(function(){
    var email_forgot = $("input[name='email_forgot']").val();
    $.ajax({
      type:"post",
      url:"<?=base_url('user/forgot_pass');?>",
      data:{email_forgot:email_forgot},
      beforeSend: function(){
          $('.btn-forgot-pass').append(' <i class="fa fa-spinner fa-spin"></i>');
      },
      success:function(data){
        $('.btn-forgot-pass').find('.fa-spinner').remove();
        if(data != 1){
          var loi = $.parseJSON(data);
          if(loi.email_forgot){
            $(".email_forgot").html('<span class="lb_err">'+loi.email_forgot+'</span>');
          }else{
            $(".email_forgot").html('');
          }
        }else{
          $('#modalForgotpassword').modal('hide');
          $('#modalNotify').modal('show');
        }
      }
    });
  });
});

// Dang nhap
$(document).ready(function(){
  $(".btn-dangnhap").click(function(){
    $('#is_clear_fp').val(1);
    var email_dn = $("input[name='email_dn']").val();
    var pass_dn = $("input[name='pass_dn']").val();
    $.ajax({
      type:"post",
      url:"<?=base_url('user/login');?>",
      data:{
            email_dn:email_dn,
            pass_dn:pass_dn,
          },
      beforeSend: function(){
          $('.btn-dangnhap').append(' <i class="fa fa-spinner fa-spin"></i>');
      },
      success:function(data){
        $('.btn-dangnhap').find('.fa-spinner').remove();
        if(data != 1){
          var loi = $.parseJSON(data);
          if(loi.login){
            $('.msger').html('<div class="alert alert-danger alertdn" role="alert">'+loi.login+'</div>');
          }
        }else{
          $('.msger').html('');
          $("input[name='email_dn']").val('');
          $("input[name='pass_dn']").val('');
          $('#modalLogin').modal('hide');
          location.reload();
        }
      }
    });
  });
});

// Dang xuat
$(document).ready(function(){
  $(".btn-dangxuat").click(function(){
      $('#is_clear_fp').val(1);
      $.ajax({
          url: '<?=base_url('user/loguot');?>',
          success: function(data){
            location.reload();
          }
      });
  });
});
</script>

<script type="text/javascript">
$('#sandbox-container input').datepicker({
    weekStart: 1,
    endDate: "+",
    language: "vi"
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.span-number').counterUp({
      delay: 10,
      time: 2000
  });
    $('#pageloader').velocity({'backgroundColor':'#000000'},2400);
    $('#pageloader .spinner').velocity({'opacity': '1'},2500,
        function(){
            $('#pageloader').velocity({'height':'0px'},2800);
            $('#pageloader .spinner').velocity({'top': '0px'},2800,
                function(){
                    $("#pageloader").velocity({'opacity': '0'},1500,
                        function(){
                            $("#pageloader").hide();
                        });
                    // setTimeout(displaycontent,300);
                });
    });
});
</script>
<script type="text/javascript">
	function isIE(){
	  ua = navigator.userAgent;
	  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
	  return is_ie; 
	}
	if(isIE() || $('html').hasClass('ie-old')){
	    alert('Vui lòng sử dụng trình duyệt khác để truy cập vào EnB.vn');
	}
</script>

<!-- Tỷ lệ vuông hình ảnh sản phẩm -->
<script type="text/javascript">
  var aspect_ratio = 1
  var $box = jQuery(".product-img img");
  jQuery(document).ready(function($) {
    $box.height( $box.width() * aspect_ratio );
  });
  jQuery(window).resize(function() {
    $box.height( $box.width() * aspect_ratio );
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".show_hide_password a").on('click', function(event) {
        event.preventDefault();
        var parent = $(this).parents('.show_hide_password');
        if(parent.find('input').attr("type") == "text"){
            parent.find('input').attr('type', 'password');
            parent.find('i').addClass( "fa-eye-slash" );
            parent.find('i').removeClass( "fa-eye" );
        }else if(parent.find('input').attr("type") == "password"){
            parent.find('input').attr('type', 'text');
            parent.find('i').removeClass( "fa-eye-slash" );
            parent.find('i').addClass( "fa-eye" );
        }
    });
    //enter login
    $('#modalLogin input').on('keydown', function(e) {
        if (e.which == 13 && $('#email_dn').val() != '' && $('#pass_dn').val() != '') {
            $('#modalLogin .btn-dangnhap').click();
        }
    });
  });

  function loadCart(){
    var isCheckout =  $('#is_checkout').val() == 1 ? 1 : 0;
    $.ajax({
      type : 'GET',
      url : '<?php echo base_url('cart/loadAjax');?>?is_checkout=' + isCheckout,     
      success : function(data){
        if($('#is_checkout').val() == 1){          
          $('#payment_cart').html(data);
          $('#content-cart-ajax').html(data);
        }else{
          $('#content-cart-ajax').html(data);
          $('#showSidebar_Card').addClass('active');
        }
        $("img.lazyload").lazyload();
        $('.total_loai').each(function(){
          $('#span_total_' + $(this).data('set')).html($(this).html());
        });
        var tab_active = localStorage.getItem('enb_cart_tab_active') != null ? localStorage.getItem('enb_cart_tab_active') : 'htd';
        if(isCheckout == 1){
          $('.cart-main').show();
        }else{
          $('.cart-main[tab=' + tab_active + ']').show();
        }
        
      }
    })
  }
</script>