<div id="pageloader"><div class="spinner"></div></div>
<div style="margin-bottom: 50px">
  <a href="<?php echo $infosetting2->member_banner_link; ?>">
      <img class="lazyload hidden-xs" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->member_banner);?>" style="width:100%">
      <img class="lazyload hidden-sm hidden-md hidden-lg" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->member_banner_mobile);?>" style="width:100%">
    </a>
</div>
<div class="block block-title-cm user-page">
<?php 
$name = $user_login->name ? $user_login->name : '';
$phone = $user_login->phone ? $user_login->phone : '';
$email = $user_login->email ? $user_login->email : '';
$address = $user_login->address ? $user_login->address : '';
?>
<div class="container">
<div class="tablist-account-page row">
  <?php $this->load->view('site/member/menu', $this->data);?>
  <!-- Tab panes -->
  <div class="tab-content col-md-9 chinhsuauser">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="block-title">
        <?php if($user_login): ?>
        <h1 class="heading-small darken">THÔNG TIN TÀI KHOẢN THÀNH VIÊN</h1>        
        <?php else: ?>
        <h1 class="heading-small darken">ĐĂNG KÝ TÀI KHOẢN THÀNH VIÊN ENB</h1>        
        <?php endif; ?>
        <?php if($user_login->enb > 0 ): ?>
          <h3 style="color: #06b7a4">Gói thành viên EnB <?php echo $packageDetail['no_month']; ?> tháng của bạn có giá trị đến <?php echo date('d/m/Y', ($packageDetail['date_end'])); ?></h3>
        <?php endif; ?>
      </div>
      <div class="block-content">
        <?php if($message): ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
        <?php endif; ?>
        <?php if(!$user_login):  ?>
          <form id="addressForm" action="<?=base_url('user/enb');?>" method="POST" class="form-billing">
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
            <input type="hidden" name="regis_new" value="1">
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
            <div class="form-group loginForm">                
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
            </div>
      
          <?php if($showPackage): ?>
            <div class="form-group log_menber">          
              
              <div class="items">
                  <div class="title">GÓI THÀNH VIÊN <span class="text-secondary-color" style="font-size: 14px">(Giỏ hàng sẽ thay đổi khi bạn chọn gói thành viên)</span></div>                                   
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
          <input type="hidden" name="package_id" value="<?php echo $this->session->userdata('enb_package_id'); ?>" id="package_id">
          <label class="choose-another rules-check"><input type="checkbox" id="agree_user" name="agree_user_checkout" class="radio-cus req" value="1">
            <?php if(isset($dieukhoan) && $dieukhoan):?>
              Tôi đã đọc và đồng ý các <a href="<?=base_url($dieukhoan->url.'-tt'.$dieukhoan->id)?>" target="_blank">điều khoản của EnB</a>
            <?php else:?>
              Tôi đã đọc và đồng ý các <a href="#" target="_blank">điều khoản của EnB</a>
          <?php endif;?>
            </label>
            <div class="error_dieukhoan"></div>
            <div class="text-center" style="margin-top: 20px">         
              <button type="button" id="btnSave" class="btn btn-primary btn_hoantat">                
                Đăng ký <i class="fa fa-long-arrow-right"></i>
              </button>
            </div>
          <?php endif; ?>
        </form>
        <?php else: ?>
        <div class="row">
          <div class="form-group col-md-6">
            <label class="name_update">Họ và tên</label>
            <input name="name-update" type="text" class="form-control" value="<?php echo $name; ?>">
          </div>
          <div class="form-group col-md-6">
            <label class="phone_update">Điện thoại</label>
            <input name="phone-update" type="number" class="form-control" value="<?php echo $phone ; ?>" >
          </div>            
          <div class="form-group col-md-6">
            <label>Email:</label><input type="text" class="form-control" value="<?php echo $email ; ?>" disabled>
          </div>
            <div class="col-md-6">
              <label class="address_update">Tỉnh/Thành</label>
              <div class="form-group error_tinhthanh_id">
                  <select name="tinhthanh_id" class="tinhthanh form-control" id="tinhthanh_id">
                      <option value="">--Chọn--</option>
                      <?php if($tinhthanh):?>
                          <?php foreach ($tinhthanh as $row):?>
                          <option <?php echo isset($user_login->tinhthanh_id) && $user_login->tinhthanh_id == $row->id ? "selected" : "";?> data-tinhthanhid="<?=$row->id?>" value="<?=$row->id?>"><?=$row->name?></option>
                          <?php endforeach;?>
                      <?php endif;?>
                  </select>
              </div><div class="error_tinhthanh"></div>
            </div>
            <div class="col-md-6">
              <div class="form-group error_quanhuyen_id">
                  <label class="address_update">Quận/Huyện</label>
                  <select name="quanhuyen_id" class="quanhuyen form-control" id="quanhuyen_id">
                      <option value="">--Chọn--</option>
                  </select>
              </div><div class="error_quanhuyen"></div>
            </div>
            <div class="col-md-6">
              <label class="address_update">Phường/Xã</label>
              <div class="form-group error_phuongxa_id">
                  <select name="phuongxa_id" class="phuongxa form-control">
                      <option value="">--Chọn--</option>
                  </select>
              </div><div class="error_phuongxa"></div>
            </div>
            <div class="col-md-12">
              <label class="address_update">Địa chỉ</label>
              <div class="form-group">             
                <input type="text" class="form-control req" id="address-update" name="address-update" placeholder="<?=lang('diachi')?>" autocomplete="off" value="<?php echo $address; ?>">
              </div><div class="error_address"></div>
            </div>
             <?php if($showPackage): ?>
            <div class="form-group log_menber col-md-12">          
              
              <div class="items">
                  <div class="title">GÓI THÀNH VIÊN <span class="text-secondary-color" style="font-size: 14px">(Giỏ hàng sẽ thay đổi khi bạn chọn gói thành viên)</span></div>
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
          <input type="hidden" name="package_id" value="<?php echo $this->session->userdata('enb_package_id'); ?>" id="package_id">
          <label class="choose-another rules-check"><input type="checkbox" id="agree_user" name="agree_user_checkout" class="radio-cus req" value="1">
            <?php if(isset($dieukhoan) && $dieukhoan):?>
              Tôi đã đọc và đồng ý các <a href="<?=base_url($dieukhoan->url.'-tt'.$dieukhoan->id)?>" target="_blank">điều khoản của EnB</a>
            <?php else:?>
              Tôi đã đọc và đồng ý các <a href="#" target="_blank">điều khoản của EnB</a>
          <?php endif;?>  
        </label>
          <div class="clearfix"></div>
          <?php endif; ?>                       
          <div class="col-sm-12 text-center"><div class="msgss"></div></div>   
          <div class="clearfix"></div>       
          <div class="form-group col-sm-12 text-center">           
            <button class="btn btn-primary btn-update-user"> CẬP NHẬT</button>            
          </div>
        </div>
        <?php endif; ?>
      </div>
     </div>  
   </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    <?php if($message): ?>
      swal({   
        title: "Chúc mừng bạn!", 
        text: "Tài khoản của bạn đã trở thành tài khoản thành viên, đặt đơn hàng đầu tiên để tận hưởng các ưu đãi từ ENB.",  
        type: "success",          
        confirmButtonColor: "#06b7a4", 
       });
    <?php endif; ?>
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
                $(".quanhuyen").html('<option value="">--Quận/Huyện--</option>');
                $(".phuongxa").html('<option value="">--Chọn--</option>');
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
                $(".phuongxa").html('<option value="">--Chọn--</option>');
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
                $(".quanhuyen").html('<option value="">--Chọn--</option>');
                $(".phuongxa").html('<option value="">--Chọn--</option>');
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
                $(".phuongxa").html('<option value="">--Chọn--</option>');
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
  $(".btn-update-user").click(function(){
    var name_update = $("input[name='name-update']").val();
    var phone_update = $("input[name='phone-update']").val();
    var address_update = $("input[name='address-update']").val();
    var tinhthanh_id = $("#tinhthanh_id").val();
    var quanhuyen_id = $("#quanhuyen_id").val();
    var package_id = $("#package_id").val();
    var phuongxa_id = $("#phuongxa_id").val();
    var pass_old = $("input[name='pass_old']").val();
    var pass_new = $("input[name='pass_new']").val();
    var pass_new_again = $("input[name='pass_new_again']").val();

    $.ajax({
      type:"post",
      url:"<?=base_url('user/update_info_user');?>",
      data:{
        name_update:name_update,
        phone_update:phone_update,
        address_update:address_update,
        pass_old:pass_old,
        pass_new:pass_new,
        pass_new_again:pass_new_again,
        tinhthanh_id :tinhthanh_id,
        quanhuyen_id:quanhuyen_id,
        phuongxa_id:phuongxa_id,
        package_id:package_id
      },
      beforeSend: function(){
        $('.btn-update-user').append(' <i class="fa fa-spinner fa-spin"></i>');
      },
      success:function(data){
        $('.btn-update-user').find('.fa-spinner').remove();
        if(data != 1){
          var loi = $.parseJSON(data);
          if(loi.name_update){
            $(".name_update").append('<span class="lb_eu">'+loi.name_update+'</span>');
          }else{
            $(".name_update").find('.lb_eu').remove();
          }
          if(loi.phone_update){
            $(".phone_update").append('<span class="lb_eu">'+loi.phone_update+'</span>');
          }else{
            $(".phone_update").find('.lb_eu').remove();
          }
          if(loi.address_update){
            $(".address_update").append('<span class="lb_eu">'+loi.address_update+'</span>');
          }else{
            $(".address_update").find('.lb_eu').remove();
          }
          if(loi.pass_old){
            $(".pass_old").append('<span class="lb_eu">'+loi.pass_old+'</span>');
          }else{
            $(".pass_old").find('.lb_eu').remove();
          }
          if(loi.pass_new){
            $(".pass_new").append('<span class="lb_eu">'+loi.pass_new+'</span>');
          }else{
            $(".pass_new").find('.lb_eu').remove();
          }
          if(loi.pass_new_again){
            $(".pass_new_again").append('<span class="lb_eu">'+loi.pass_new_again+'</span>');
          }else{
            $(".pass_new_again").find('.lb_eu').remove();
          }
          $('.msgss').html('');
        }else{
          $(".block-content").find('.lb_eu').remove();
          $("input[name='pass_old']").val('');
          $("input[name='pass_new']").val('');
          $("input[name='pass_new_again']").val('');
          $('.msgss').html('<div style="transition: all 0.5s ease;" class="alert alert-success text-center alertupdate"><i class="fa fa-check"></i> Cập nhật thông tin thành công</div>');
        }
      }
    });
  });
});
</script>
<script type="text/javascript">
    function isEmpty(value){
      return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
    }
    $(document).ready(function(){      
      $('.btnChoosePackage').click(function(){        
        var id = $(this).data('id');
        var type = $(this).hasClass('btn-primary') == true ? 1 : 2;
        if(type == 1){          
          $('#package_id').val(id);
          $('.btnChoosePackage').removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
          $(this).removeClass('btn-primary').addClass('btn-danger').html('HỦY ĐĂNG KÝ');
        }else{
          swal("", "Tài khoản của bạn không phải là tài khoản thành viên ENB và các ưu đãi riêng cho thành viên sẽ không được áp dụng!", 'error');
          $('#package_id').val('');
          $(this).removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
        }
        $.ajax({
          type : 'GET',
          url : '<?php echo base_url('cart/package');?>?is_checkout=1&type=' + type + '&id=' + id ,     
          success : function(data){           
            
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
        var package_id = $("#package_id").val();
        var agree_user_checkout = 0;
        if(package_id==''){
          swal('', 'Bạn chưa chọn gói thành viên.', 'error');
          return false;
        }
        if($("input[name='agree_user_checkout']").is(":checked")){
          var  agree_user_checkout = $("input[name='agree_user_checkout']").val();
        }

        $.ajax({
          type:"post",
          url:"<?=base_url('order/check_checkout');?>",
          data:{name:name, email:email, phone:phone, tinhthanh_id:tinhthanh_id, quanhuyen_id:quanhuyen_id, phuongxa_id:phuongxa_id, address:address, pass_user: pass_user, passagain_user:passagain_user, regis_new:1,agree_user_checkout:agree_user_checkout, package_id : package_id},
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
            }
          }
        });
      });
    });
</script>