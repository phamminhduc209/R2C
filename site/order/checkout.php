<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block block-two-col container">
  <div class="block-page-common">
    <div class=" block-title"><h1 class="heading-primary darken"><?=lang('c_tttt')?></h1>
    <?php if(!isset($user_login)):?>
    <p class="subheading-text"><a data-toggle="modal" data-target="#modalLogin" href="javascript:;">Đăng nhập ngay!</a> Nếu bạn là thành viên của Enb</p>
	<?php endif;?>
    </div>
  </div>
  <div class="row" id="rowCheckout">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 block-col-left">
      <div class="block-billing">
        <div class="block-title"><?=lang('c_tttt')?></div>
        <div class="block-content">
          <form id="addressForm" action="<?=base_url('order/checkout');?>" method="POST" class="form-billing">
            <?php 
            $sessionArr = $this->session->userdata('form_payment');            
            $name_set = '';
            if(isset($user_login->name) && empty($sessionArr)){
              $name_set = $user_login->name;
            }else{                  
              $name_set = isset($sessionArr['name']) ? $sessionArr['name'] : '';         
            }
            if(isset($user_login->email) && empty($sessionArr)){
              $email_set = $user_login->email;
            }else{
              $email_set = isset($sessionArr['email']) ? $sessionArr['email'] : '';                          
            }
            if(isset($user_login->phone) && empty($sessionArr)){
              $phone_set = $user_login->phone;
            }else{              
              $phone_set = isset($sessionArr['phone']) ? $sessionArr['phone'] : '';          
            }
            if(isset($user_login->address) && empty($sessionArr)){
              $address_set = $user_login->address;
            }else{              
              $address_set = isset($sessionArr['address']) ? $sessionArr['address'] : '';
            }
            ?>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-user"></i></span>
              <input type="text" value="<?php echo $name_set; ?>" class="form-control req" id="name" name="name" placeholder="<?=lang('dkyhoten')?>">
            </div><div class="error_name"></div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" value="<?php echo $email_set; ?>" class="form-control req" id="email" name="email" placeholder="Email">
            </div><div class="error_email"></div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-phone"></i></span>
              <input type="text" value="<?php echo $phone_set; ?>" class="form-control req" id="phone" name="phone" placeholder="<?=lang('c_sdt')?>">
            </div><div class="error_phone"></div>
            <div class="row cus-addre">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group error_tinhthanh_id">
                    <select name="tinhthanh_id" class="tinhthanh form-control" id="tinhthanh_id">
                        <option value="">Chọn Tỉnh/Thành phố</option>
                        <?php if($tinhthanh):?>
                            <?php foreach ($tinhthanh as $row):?>
                            <option <?php echo isset($user_login->tinhthanh_id) && $user_login->tinhthanh_id == $row->id ? "selected" : "";?> data-tinhthanhid="<?=$row->id?>" value="<?=$row->id?>"><?=$row->name?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                </div><div class="error_tinhthanh"></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group error_quanhuyen_id">
                    <select name="quanhuyen_id" class="quanhuyen form-control" id="quanhuyen_id">
                        <option value="">Chọn Quận/Huyện</option>
                    </select>
                </div><div class="error_quanhuyen"></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group error_phuongxa_id">
                    <select name="phuongxa_id" class="phuongxa form-control">
                        <option value="">Chọn Phường/Xã</option>
                    </select>
                </div><div class="error_phuongxa"></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <span class="input-addon"><i class="fa fa-home"></i></span>
                  <input type="text" value="<?php echo $address_set; ?>" class="form-control req" id="address" name="address" placeholder="<?=lang('diachi')?>">
                </div><div class="error_address"></div>
              </div>
            </div>

            <?php if(!isset($user_login->name)):?>
            <input type="hidden" name="regis_new" value="1">
            <div class="form-group loginForm">
                <h3>Vui lòng nhập mật khẩu để đăng ký tài khoản EnB</h3>
                <div class="row" style="margin-bottom: 10px;">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">                      
                      <div class="input-group show_hide_password">
                        <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_user_checkout" placeholder="Mật khẩu (*)">
                        <div class="input-group-addon">
                          <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="error_pass_user_checkout" style="margin-top: 2px"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">                      
                      <div class="input-group show_hide_password">
                        <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="passagain_user_checkout" placeholder="Nhập lại mật khẩu (*)">
                        <div class="input-group-addon">
                          <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="error_passagain_user_checkout" style="margin-top: 2px"></div>
                    </div>
                  </div>
                </div>
                <label class="choose-another rules-check"><input type="checkbox" id="agree_user" name="agree_user_checkout" class="radio-cus req" value="1">
                <?php if(isset($dieukhoan) && $dieukhoan):?>
                	Tôi đã đọc và đồng ý các <a href="<?=base_url($dieukhoan->url.'-tt'.$dieukhoan->id)?>" target="_blank">điều khoản của EnB</a>
                <?php else:?>
                	Tôi đã đọc và đồng ý các <a href="#" target="_blank">điều khoản của EnB</a>
            	<?php endif;?>
                </label>
                <div class="error_dieukhoan"></div>
            </div>
          <?php endif; ?>
          <?php if($showPackage): ?>
            <div class="form-group log_menber">          
              
              <div class="items">
                  <div class="title">ĐĂNG KÝ THÀNH VIÊN <span class="text-secondary-color" style="font-size: 14px">(Giỏ hàng sẽ thay đổi khi bạn chọn gói thành viên)</span></div>
                  <p><a style="font-size: 14px;" class="text-primary-color" href="<?php echo base_url('thanh-vien-enb'); ?>" title="Xem nội dung ưu đãi của gói thành viên">Xem nội dung ưu đãi của gói thành viên</a></p>
                  <div class="row">                      
                      <?php foreach($packageList as $pk): ?>
                      <div class="col-sm-4 col-xs-12 item">
                          <div class="inner">
                              <img  class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/package/'.$pk->image_link);?>" alt="<?php echo $pk->name; ?>">
                              <a href="javascript:void(0)" class="btnChoosePackage btn 
                              <?php if($this->session->userdata('enb_package_id') == $pk->id): ?>
                                btn-danger
                              <?php else: ?>
                                btn-primary
                              <?php endif; ?>
                              " data-id="<?php echo $pk->id; ?>">
                             
                              <?php if($this->session->userdata('enb_package_id') == $pk->id): ?>
                                HỦY ĐĂNG KÝ
                              <?php else: ?>
                                 ĐĂNG KÝ
                              <?php endif; ?>
                              </a>
                              <div class="desc">
                                  <p><?php echo $pk->name; ?></p>
                                  <p class="price"><?php echo number_format($pk->price); ?> VNĐ</p>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                      
                  </div>
              </div>
              <ul>
                  <li>Sau khi chọn gói thành viên: </li>
                  <li>- Tài khoản thành viên của khách sẽ được kích hoạt ngay</li>
                  <li>- Các quyền lợi và ưu đãi của tài khoản thành viên sẽ được áp dụng ngay</li>
                  <li>- Phí thành viên của gói sẽ được nhân viên giao hàng của EnB thu hộ trong đơn hàng đầu tiên mà quý khách đặt tại EnB.vn</li>
              </ul>
          </div>
          <?php endif; ?>
            <div class="form-group">
              <label class="choose-another"><input type="checkbox" id="choose-other-address" name="choose_other_address" class="radio-cus"> <?=lang('c_other_address')?></label>
            </div>
            <div id="div-other-address" style="display: none;">
              <div class="form-group">
                  <span class="input-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" id="other_name" name="other_name" placeholder="<?=lang('dkyhoten')?>">
              </div>
              <div class="form-group">
                  <span class="input-addon"><i class="fa fa-envelope"></i></span>
                  <input type="email" class="form-control" id="other_email" name="other_email" placeholder="Email">
              </div>
              <div class="form-group">
                  <span class="input-addon"><i class="fa fa-phone"></i></span>
                  <input type="text" class="form-control" id="other_phone" name="other_phone" placeholder="<?=lang('c_sdt')?>">
              </div>
              <div class="row cus-addre">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group error_tinhthanh_id_other">
                      <select name="tinhthanh_id_other" class="tinhthanh_other form-control">
                          <option value="">Chọn Tỉnh/Thành phố</option>
                          <?php if($tinhthanh):?>
                              <?php foreach ($tinhthanh as $row):?>
                              <option data-tinhthanhid_other="<?=$row->id?>" value="<?=$row->id?>"><?=$row->name?></option>
                              <?php endforeach;?>
                          <?php endif;?>
                      </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group error_quanhuyen_id_other">
                      <select name="quanhuyen_id_other" class="quanhuyen_other form-control">
                          <option value="">Chọn Quận/Huyện</option>
                      </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group error_phuongxa_id_other">
                      <select name="phuongxa_id_other" class="phuongxa_other form-control">
                          <option value="">Chọn Phường/Xã</option>
                      </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group error_other_address">
                    <span class="input-addon"><i class="fa fa-home"></i></span>
                    <input type="text" class="form-control req diachi" id="other_address" name="other_address" placeholder="<?=lang('diachi')?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="choose-another"><input type="checkbox" value="1" id="xuathoadon" name="xuathoadon" class="radio-cus"> <?=lang('c_xuat')?></label>
            </div>
            <div id="div-xuathoadon" style="display: none;">
                <div class="form-group">
                    <span class="input-addon"><i class="fa fa-building"></i></span>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="<?=lang('c_ctyten')?>">
                </div>
                <div class="form-group">
                    <span class="input-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" class="form-control" id="company_address" name="company_address" placeholder="<?=lang('diachi')?>">
                </div>
                <div class="form-group">
                    <span class="input-addon"><i class="fa fa-tag"></i></span>
                    <input type="text" class="form-control" id="company_mst" name="company_mst" placeholder="<?=lang('c_mst')?>">
                </div>
            </div>
            <!-- hình thức thanh toán -->
            <div class="form-group"><h3 class="heading-small">Hình thức thanh toán</h3></div>
            <div class="form-group">
              <label class="choose-another"><input type="radio" value="COD" name="payment" class="radio-cus status_nganhang" checked="checked"> COD</label>
            </div>
            <div class="form-group" style="display: none;">
              <label class="choose-another"><input type="radio" value="Chuyển khoản" name="payment" class="radio-cus status_nganhang"> Chuyển khoản</label>
            </div>
            <div id="div-nganhang" style="display: none;"><?=$infosetting->nganhang?></div>
            <!-- end -->
            <div class="form-group" style="margin-top: 15px">
                <textarea class="form-control form_textarea" rows="5" name="ghichu" placeholder="<?=lang('c_ghichu')?>"></textarea>
            </div>
            <input type="hidden" name="package_id" value="<?php echo $this->session->userdata('enb_package_id'); ?>" id="package_id">
            <div class="text-right" style="margin-top: 10px">
              <input type="hidden" name="hoadoncuoi" value="">
              <input type="hidden" name="giam" value="">
              <input type="hidden" name="mapost" value="">
              <button type="button" id="btnSave" class="btn btn-main btn_hoantat">
                <?php if(!isset($user_login)):?>
                Đăng ký và hoàn tất đơn hàng <i class="fa fa-long-arrow-right"></i>
                <?php else:?>
                Hoàn tất đơn hàng<i class="fa fa-long-arrow-right"></i>
                <?php endif;?>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="cartsidebar" class="col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12">
        <div id="giohang"> 
          <div class="block-rightSidebar-checkout">
              <div class="sidebar-content block-payment-cart">
                  <div class="block-title">Giỏ Hàng Của Bạn</div>
                  <div class="block-content" id="payment_cart">
                    <div class="shop-cart-sidebar text-center" style="padding: 30px;">
                      <i class="fa fa-spin fa-spinner"></i>
                    </div>
                  </div><!--#payment_cart-->
              </div>  
          </div>
          <input type="hidden" id="is_checkout" value="1">
        </div>
    </div><!--col-md-4-->
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#giohang').affix({
      offset: {
        top: $('#giohang').offset().top,
        bottom: ($('footer').outerHeight(true) + 38)
      }
    });
   
    document.getElementById('choose-other-address').onclick = function(e){
      if(this.checked){
        $("#div-other-address").show();
      }else{
        $("#div-other-address").hide();
        $("#other_name").val('');
        $("#other_email").val('');
        $("#other_phone").val('');
        $("#other_address").val('');
      }
    };
    document.getElementById('xuathoadon').onclick = function(e){
      if(this.checked){
        $("#div-xuathoadon").show();
      }else{
        $("#div-xuathoadon").hide();
        $("#company_name").val('');
        $("#company_address").val('');
        $("#company_mst").val('');
      }
    };
    $('.status_nganhang').click(function(){
      if($(this).val() == 'Chuyển khoản'){
        $("#div-nganhang").show();
      }else{
        $("#div-nganhang").hide();
      }
    });
  });
</script>
<script type="text/javascript">
    function isEmpty(value){
      return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
    }
    $(document).ready(function(){
      loadCart();
      $('.btnChoosePackage').click(function(){        
        var id = $(this).data('id');
        var type = $(this).hasClass('btn-primary') == true ? 1 : 2;
        if(type == 1){
          $('#package_id').val(id);
          $('.btnChoosePackage').removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
          $(this).removeClass('btn-primary').addClass('btn-danger').html('HỦY ĐĂNG KÝ');
        }else{
          swal("", "Tài khoản hiện tại của bạn không phải là tài khoản thành viên ENB và các ưu đãi riêng cho thành viên sẽ không dc áp dụng!", 'error');
          $('#package_id').val('');
          $(this).removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
        }
        $.ajax({
          type : 'GET',
          url : '<?php echo base_url('cart/package');?>?is_checkout=1&type=' + type + '&id=' + id ,     
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
            $('.cart-main[tab=' + tab_active + ']').show();
          }
        });
      });
      $('.btn-apdung').click(function(){
        $("input[name='hoadoncuoi']").val('');
        $("input[name='giam']").val('');
        $("input[name='mapost']").val('');
        $('.msg').find('.alert').remove();
        $('.magiam').find('.giamgiaC').remove();
        $('.magiam').find('.thanhtienC').remove();
        var makhuyenmai = $( "input[name='makhuyenmai']" ).val();
        // var tongtien = "$tonghoadon";
        if(isEmpty(makhuyenmai) == true){
          $('.magiam .tongcongC').css('display', 'table-row');
          $('.msg').append('<div class="alert alert-warning"><i class="fa fa-times-circle"></i>Chưa nhập mã giảm giá!</div>');
          return false;
        }
        $.ajax({
          type:"post",
          url:"<?=base_url('order/checkmagiamgia')?>",
          data:{makhuyenmai:makhuyenmai,tongtien:tongtien},
          success:function(data){
            var result = $.parseJSON(data);
            if(result.error){
              $('.msg').append(result.error);
              $('.magiam .tongcongC').css('display', 'table-row');
            }
            if(result.done){
              $('.msg').append('<div class="alert alert-success""><i class="fa fa-check"></i>Áp dụng mã <b style="text-transform: uppercase;font-size: 17px;">'+makhuyenmai+'</b> thành công</div>');
              $('.magiam tr:last').before(result.done);
              $('.magiam .tongcongC').css('display', 'none');
              var hoadoncuoi = $('.thanhtienC td p').attr('data-tong');
              var giam = $('.giamgiaC td p').attr('data-giam');
              $("input[name='hoadoncuoi']").val(hoadoncuoi);
              $("input[name='giam']").val(giam);
              $("input[name='mapost']").val(makhuyenmai);
            }
          }
        });
      });
    });
</script>


<!-- // Xử lý quận huyện =============================================================================================== -->
<script type="text/javascript">
$(document).ready(function(){
    <?php if((isset($user_login) && $user_login->tinhthanh_id > 0) || (!empty($sessionArr) && $sessionArr['tinhthanh_id'] > 0)) { ?>
      var tinhthanh_id = <?php echo empty($sessionArr) ? $user_login->tinhthanh_id : $sessionArr['tinhthanh_id']; ?>;
      var quanhuyen_id = <?php echo empty($sessionArr) ? $user_login->quanhuyen_id : $sessionArr['quanhuyen_id']; ?>;
      $('#tinhthanh_id').val(tinhthanh_id);
      $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxquanhuyen')?>",
            data:{tinhthanh_id:tinhthanh_id},
            success:function(data){
              var result = $.parseJSON(data);
              if(result.is_lock == 1){
                $(".quanhuyen").html(result.html);
                $(".quanhuyen").val(quanhuyen_id);
              }else{
                $(".tinhthanh option[value='']").prop('selected', true);
                $(".quanhuyen").html('<option value="">Chọn Quận/Huyện</option>');
                $(".phuongxa").html('<option value="">Chọn Phường/Xã</option>');
                alert('Không hỗ trợ ship tới khu vực này');
              }
            }
        });
      $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxphuongxa')?>",
            data:{quanhuyen_id:quanhuyen_id},
            success:function(data){
              var result = $.parseJSON(data);
              if(result.is_lock == 1){
                $(".phuongxa").html(result.html);
                $(".phuongxa").val(<?php echo $sessionArr['phuongxa_id'] > 0 ?  $sessionArr['phuongxa_id'] : $user_login->phuongxa_id; ?>)
              }else{
                $(".quanhuyen option[value='']").prop('selected', true);
                $(".phuongxa").html('<option value="">Chọn Phường/Xã</option>');
                alert('Không hỗ trợ ship tới khu vực này');
              }
            }
        });
      <?php } ?>

    $(".tinhthanh").change(function(){
        var tinhthanh_id = $('option:selected', this).attr('data-tinhthanhid');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxquanhuyen')?>",
            data:{tinhthanh_id:tinhthanh_id},
            success:function(data){
            	var result = $.parseJSON(data);
            	if(result.is_lock == 1){
            		$(".quanhuyen").html(result.html);
            	}else{
            		$(".tinhthanh option[value='']").prop('selected', true);
            		$(".quanhuyen").html('<option value="">Chọn Quận/Huyện</option>');
            		$(".phuongxa").html('<option value="">Chọn Phường/Xã</option>');
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
$(document).ready(function(){
    $(".quanhuyen").change(function(){
        var quanhuyen_id = $('option:selected', this).attr('data-quanhuyenid');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxphuongxa')?>",
            data:{quanhuyen_id:quanhuyen_id},
            success:function(data){
            	var result = $.parseJSON(data);
            	if(result.is_lock == 1){
            		$(".phuongxa").html(result.html);
            	}else{
            		$(".quanhuyen option[value='']").prop('selected', true);
            		$(".phuongxa").html('<option value="">Chọn Phường/Xã</option>');
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
$(document).ready(function(){
    $(".phuongxa").change(function(){
        var phuongxa_id = $('option:selected', this).attr('data-phuongxaid');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajax_islock_phuongxa')?>",
            data:{phuongxa_id:phuongxa_id},
            success:function(data){
            	if(data == 0){
            		$(".phuongxa option[value='']").prop('selected', true);
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $(".tinhthanh_other").change(function(){
        var tinhthanh_id_other = $('option:selected', this).attr('data-tinhthanhid_other');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxquanhuyen_other')?>",
            data:{tinhthanh_id_other:tinhthanh_id_other},
            success:function(data){
            	var result = $.parseJSON(data);
            	if(result.is_lock == 1){
            		$(".quanhuyen_other").html(result.html);
            	}else{
            		$(".tinhthanh_other option[value='']").prop('selected', true);
            		$(".quanhuyen_other").html('<option value="">Chọn Quận/Huyện</option>');
            		$(".phuongxa_other").html('<option value="">Chọn Phường/Xã</option>');
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
$(document).ready(function(){
    $(".quanhuyen_other").change(function(){
        var quanhuyen_id_other = $('option:selected', this).attr('data-quanhuyenid_other');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajaxphuongxa_other')?>",
            data:{quanhuyen_id_other:quanhuyen_id_other},
            success:function(data){
            	var result = $.parseJSON(data);
            	if(result.is_lock == 1){
            		$(".phuongxa_other").html(result.html);
            	}else{
            		$(".quanhuyen_other option[value='']").prop('selected', true);
            		$(".phuongxa_other").html('<option value="">Chọn Phường/Xã</option>');
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
$(document).ready(function(){
    $(".phuongxa_other").change(function(){
        var phuongxa_id_other = $('option:selected', this).attr('data-phuongxaid_other');
        $.ajax({
            type:'post',
            url:"<?=base_url('ajax/ajax_islock_phuongxa_other')?>",
            data:{phuongxa_id_other:phuongxa_id_other},
            success:function(data){
            	if(data == 0){
            		$(".phuongxa_other option[value='']").prop('selected', true);
            		alert('Không hỗ trợ ship tới khu vực này');
            	}
            }
        });
    });
});
</script>

<!-- Check login trước khi thanh toán -->
<script type="text/javascript">
  $(document).ready(function(){
      $("img.lazyload").lazyload();
      $('.total_loai').each(function(){
        $('#span_total_' + $(this).data('set')).html($(this).html());
      });
      $(window).on('beforeunload', function(){
          if($('#is_clear_fp').val() == 0){
            $.ajax({
              type:"post",
              url:"<?=base_url('order/saveinfo');?>",
              data : $('#addressForm').serialize()            
            }); 
          }                   
      });
  });
  $('.btn_hoantat').click(function(){
  	var name = $("input[name='name']").val();
  	var email = $("input[name='email']").val();
  	var phone = $("input[name='phone']").val();
  	var tinhthanh_id = $("select[name='tinhthanh_id']").val();
  	var quanhuyen_id = $("select[name='quanhuyen_id']").val();
  	var phuongxa_id = $("select[name='phuongxa_id']").val();
  	var address = $("input[name='address']").val();
  	var passagain_user = $("input[name='passagain_user_checkout']").val();
    var pass_user = $("input[name='pass_user_checkout']").val();
    var regis_new = $("input[name='regis_new']").val();
    var agree_user_checkout = 0;
    if($("input[name='agree_user_checkout']").is(":checked")){
      var  agree_user_checkout = $("input[name='agree_user_checkout']").val();
    }

    $.ajax({
      type:"post",
      url:"<?=base_url('order/check_checkout');?>",
      data:{name:name, email:email, phone:phone, tinhthanh_id:tinhthanh_id, quanhuyen_id:quanhuyen_id, phuongxa_id:phuongxa_id, address:address, pass_user: pass_user, passagain_user:passagain_user, regis_new:regis_new,agree_user_checkout:agree_user_checkout},
      beforeSend: function(){
        $('#addressForm').append('<div class="backload"></div>');
      },
      success:function(data){
        $('#addressForm').find('.backload').remove();
        // if(data == 'errorlogin'){
        //   $('#modalLogin').modal('show');
        // }else
        if(data == 'checkoutgioihan'){
          alert('Giá trị tối thiểu của thùng hàng là '+'<?=number_format($infosetting->gioihan)?>'+' vnđ');
        }else if(data == 1){
          $('#loading_overlay').show();
          $('#addressForm').submit();
        }else{
        	var error = $.parseJSON(data);
            if(error.name){
              $('.error_name').html('<div class="alert alert-danger alert-loi">'+error.name+'</div>');
              $("input[name='name']").focus();
            }else{
            	$('.error_name').html('');
            }
            if(error.email){
              $('.error_email').html('<div class="alert alert-danger alert-loi">'+error.email+'</div>');
              $("input[name='email']").focus();
            }else{
            	$('.error_email').html('');
            }
            if(error.phone){
              $('.error_phone').html('<div class="alert alert-danger alert-loi">'+error.phone+'</div>');
              $("input[name='phone']").focus();
            }else{
            	$('.error_phone').html('');
            }
            if(error.tinhthanh_id){
              $('.error_tinhthanh').html('<div class="alert alert-danger alert-loi">'+error.tinhthanh_id+'</div>');
              $("select[name='tinhthanh_id']").focus();
            }else{
            	$('.error_tinhthanh').html('');
            }
            if(error.quanhuyen_id){
              $('.error_quanhuyen').html('<div class="alert alert-danger alert-loi">'+error.quanhuyen_id+'</div>');
              $("select[name='quanhuyen_id']").focus();
            }else{
            	$('.error_quanhuyen').html('');
            }
            if(error.phuongxa_id){
              $('.error_phuongxa').html('<div class="alert alert-danger alert-loi">'+error.phuongxa_id+'</div>');
              $("select[name='phuongxa_id']").focus();
            }else{
            	$('.error_phuongxa').html('');
            }
            if(error.address){
              $('.error_address').html('<div class="alert alert-danger alert-loi">'+error.address+'</div>');
              $("input[name='address']").focus();
            }else{
            	$('.error_address').html('');
            }
            if(error.pass_user){
              $('.error_pass_user_checkout').html('<div class="alert alert-danger alert-loi">'+error.pass_user+'</div>');
              $("input[name='pass_user_checkout']").focus();
            }else{
              $('.error_pass_user_checkout').html('');
            }
            if(error.passagain_user){
              $('.error_passagain_user_checkout').html('<div class="alert alert-danger alert-loi">'+error.passagain_user+'</div>');
              $("input[name='passagain_user_checkout']").focus();
            }else{
              $('.error_passagain_user_checkout').html('');
            }
            if(error.agree_user_checkout){
              $('.error_dieukhoan').html('<div class="alert alert-danger alert-loi">'+error.agree_user_checkout+'</div>');
              $("input[name='agree_user_checkout']").focus();
            }else{
              $('.error_dieukhoan').html('');
            }
        } //esle
      } // success
    }); // ajax
  });
</script>