
<footer class="footer">
  <?php if(!isset($tab_active)): ?>
  <section style="background-color: #FFF;padding-bottom: 15px;">
    <div class="container" style="margin-bottom: 50px">
      <a href="<?php echo $infosetting2->home_banner_footer_link; ?>">
          <img class="hidden-xs" src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_footer);?>">
          <img class="hidden-sm hidden-md hidden-lg" src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_footer_mobile);?>">
        </a>
    </div>
  <?php endif; ?>
  </section>

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12 ft-info">
          <div class="ft-block">
            <?php if($infosetting->tieudefooter1):?>
            <strong class="strong"><span class="span"><?=$infosetting->tieudefooter1?></span></strong>
            <?php endif;?>
            <?php if($infosetting->footer1):?>
            <div class="ft-block-body block-content"><div class="about-info block-editor-content"><?=$infosetting->footer1?></div></div>
            <?php endif;?>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 ft-info">
          <div class="ft-block">
            <?php if($infosetting->tieudefooter2):?>
            <strong class="strong"><span class="span"><?=$infosetting->tieudefooter2?></span></strong>
            <?php endif;?>
            <?php if($infosetting->footer2):?>
            <div class="ft-block-body block-content">
              <div class="about-info block-editor-li"><?=$infosetting->footer2?></div>
              <?php /*
              <div class="about-info block-social">
                <iframe src="https://www.facebook.com/plugins/page.php?href=<?=$infosetting->facebook?>&tabs=timeline&width=500&height=300&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
              */ ?>
            </div>
            <?php endif;?>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 ft-info">
          <div class="ft-block">
            <?php if($infosetting->tieudefooter3):?>
            <strong class="strong"><span class="span"><?=$infosetting->tieudefooter3?></span></strong>
            <?php endif;?>
            <?php if($infosetting->footer3):?>
            <div class="ft-block-body block-content"><?=$infosetting->footer3?>

              <?php /*
              <div class="about-info block-social">
                <iframe src="<?=$infosetting->map?>" width="560" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              */ ?>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bot"><div class="container"><?=$infosetting->copyright?></div></div>
  <a href="tel:<?=$infosetting->sdt;?>" class="hidden-xs hidden-sm suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="left: 0px; bottom: 100px;">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/phone.png');?>" alt="phone"></div>
  </a>
 <!--  <div class="header-hotline-mobile t-c padding-bs-0 hidden-md hidden-lg">
    <a class="hotline btn-xs" href="tel:<?=$infosetting->sdt;?>"><i></i><b>Hotline</b></a>
    <a class="sms btn-xs" href="sms:<?=$infosetting->sdt;?>"><i></i><b>SMS</b></a>
  </div> -->
  <a id="backTOP" href="javascript:;"></a>
</footer>

<!-- Đăng nhập -->
<div class="modal fade modalLogin block-title-cm" role="dialog" id="modalLogin"  style="z-index: 1400;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header block-title text-center"><h2 class="heading-primary darken">Đăng nhập</h2></div>
      <div class="modal-body">
        <div>
          <div class="form-group">
            <label>Email hoặc số điện thoại: </label>
            <input type="text" name="email_dn" id="email_dn" class="form-control" placeholder="Nhập email hoặc số điện thoại">
          </div>
           <div class="form-group">
            <label>Mật khẩu: </label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" id="pass_dn" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_dn" placeholder="Nhập mật khẩu">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="msger"></div>
            <button class="btn btn-block btn-dangnhap">Đăng nhập</button>
          </div>
          <div class="form-group"><hr><span class="or">hoặc</span></div>
          <div class="form-group hidden">
            <a type="submit" class="btn btn-block btn-facebook" href="<?=$this->facebook->login_url();?>">
              <i class="fa fa-facebook-square" aria-hidden="true"></i> Đăng nhập bằng facebook
            </a>
          </div>
          <div class="form-group hidden">
            <a type="submit" class="btn btn-block btn-google" href="<?=base_url('loginwithgoogle')?>">
              <i class="fa fa-google" aria-hidden="true"></i> Đăng nhập bằng Gmail
            </a>
          </div>
          <p>Quên mật khẩu? <a data-toggle="modal" data-target="#modalForgotpassword" data-dismiss="modal" href="javascript:void(0);">Click vào đây</a></p>
          <p>Chưa có tài khoản? <a data-toggle="modal" data-target="#modalRegister" data-dismiss="modal" href="javascript:void(0);">Đăng ký ngay</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Đăng ký -->
<div class="modal fade modalRegister block-title-cm" role="dialog" id="modalRegister">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header block-title text-center"><h2 class="heading-primary darken">Đăng ký</h2></div>
      <div class="modal-body">
        <p style="color: #ea0000;text-align: center;font-size: 13px;">BẠN CÓ THỂ ĐĂNG KÝ NGAY <br>HOẶC SAU KHI MUA SẮM TẠI TRANG THANH TOÁN</p>
        <div>
          <div class="form-group">
            <label>Họ tên khách hàng (*): </label>
            <input type="text" name="name_user" class="form-control" placeholder="Nhập họ tên">
            <label class="name_user err"></label>
          </div>
           <div class="form-group">
            <label>Số điện thoại (*): </label>
            <input type="text" name="phone_user" class="form-control" placeholder="Nhập số điện thoại">
            <label class="phone_user err"></label>
          </div>
           <div class="form-group">
            <label>Địa chỉ email (*): </label>
            <input type="text" name="email_user" class="form-control" placeholder="Nhập email">
            <label class="email_user err"></label>
          </div>
          <div class="form-group">
            <label>Nhập mật khẩu (*): </label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_user" placeholder="Nhập mật khẩu">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
            <label class="pass_user err"></label>
          </div>
          <div class="form-group">
            <label>Nhập lại mật khẩu (*): </label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="passagain_user" placeholder="Nhập lại mật khẩu">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
            <label class="passagain_user err"></label>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="agree_user" value="1">
                <?php if(isset($dieukhoan) && $dieukhoan):?>
                Tôi đã đọc và đồng ý những <a href="<?=base_url($dieukhoan->url.'-tt'.$dieukhoan->id)?>" target="_blank">điều khoản của EnB</a>
                <?php else:?>
                Tôi đã đọc và đồng ý những <a href="#" target="_blank">điều khoản của EnB</a>
                <?php endif;?>
              </label>
            </div>
            <label class="agree_user err"></label>
          </div>
          <div class="form-group"><button class="btn btn-block btn-dk-user">Đăng ký</button></div>
          <p>
            Quên mật khẩu? <a data-toggle="modal" data-target="#modalForgotpassword" data-dismiss="modal" href="javascript:;">Click vào đây</a>
          </p>
          <p>
            Đăng nhập? <a data-toggle="modal" data-target="#modalLogin" data-dismiss="modal" href="javascript:;">Click vào đây</a>
          </p>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Quên mật khẩu -->
<div class="modal fade modalForgotpassword block-title-cm" role="dialog" id="modalForgotpassword">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header block-title text-center">
        <h2 class="heading-primary darken">Quên mật khẩu</h2>
        <p class="sub-heading">Nếu bạn quên mật khẩu, bạn có thể dùng mẫu sau để thiết lập lại mật khẩu. Bạn sẽ nhận được một email với nội dung hướng dẫn lại đặt mật khẩu.</p>
      </div>
      <div class="modal-body">
        <div>
          <div class="form-group">
            <label>Địa chỉ email (*):</label>
            <input type="text" name="email_forgot" class="form-control" placeholder="Nhập thông tin..">
            <label class="email_forgot err"></label>
          </div>
          <button class="btn-forgot-pass btn btn-block">Gửi yêu cầu</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Thông báo đổi mật khẩu thành công -->
<div class="modal fade modalNotify block-title-cm" role="dialog" id="modalNotify">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header block-title text-center">
          <h2 class="heading-primary darken">Đã gửi yêu cầu</h2>
          <p><strong>Chúng tôi đã gửi thông tin đến địa chỉ email của bạn!</strong></p>
          <p>Vui lòng kiểm tra email để cập nhật MẬT KHẨU MỚI</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modalNotify block-title-cm" role="dialog" id="modalSuccess">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header block-title text-center">
        <div class="icondone"><i class="fa fa-check-circle-o"></i></div>
        <h2 class="heading-primary">Chúc mừng bạn</h2>
        <div class="dkok">Đã đăng ký tài khoản thành công</div>
        <p class="warsu" style="display: none;"><strong>Vui lòng kiểm tra email kích hoạt tài khoản trong hôp thư đến hoặc mục Spam</strong></p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" role="dialog" id="logoutModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content block-title-cm">
      <div class="modal-body ">
        <div class="block-title text-center"><h2>Đăng xuất</h2></div>
        <div class="tes text-center">Bạn có thực sự muốn đăng xuất?</div>
        <a href="javascript:;" class="btn btn-main btn-block btnok btn-dangxuat">Đăng xuất</a>
        <a href="javascript:;" data-dismiss="modal" class="btn btn-second btn-block btn-offout">Ở lại</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" role="dialog" id="outofModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content block-title-cm">
      <div class="modal-body ">
        <div class="block-title text-center">
          <h2>Thông báo</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="tes text-center">Sản phẩm này đã hết hàng!<br/>Hoặc không còn đủ số lượng theo nhu cầu của bạn</div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).on('hidden.bs.modal', function (event) {
  if ($('.modal:visible').length) {
    $('body').addClass('modal-open');
  }
});
</script>
