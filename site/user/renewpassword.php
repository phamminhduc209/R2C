<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="container">
  <div class="row text-white">
    <div class="col-sm-4 col-sm-offset-4 text-center">
      <?php if(isset($changeok) && $changeok == 'ok'):?>
      <div class="alert alert-success">
        <div><i class="fa fa-check" style="font-size: 30px;"></i></div>
        <strong>Thành công !</strong> Chúc mừng bạn đã thay đổi mật khẩu thành công.
      </div>
      <div class="block-title">
        <div class="sub-heading">
          Bây giờ bạn có thể <a data-toggle="modal" data-target="#modalLogin" href="javascript:;" style="color: #06b7a4">Đăng nhập</a> với mật khẩu mới!
          <p>Hoặc <a href="/" style="color: #06b7a4">
            <i class="fa fa-long-arrow-left"></i> <b id="delayMsg">Trở về trang chủ</b></a>
          </p>
          <script type="text/javascript">
            function delayRedirect(){
              document.getElementById('delayMsg').innerHTML = 'Trở về trang chủ (<span id="countDown">5</span>s)';
              var count = 5;
              setInterval(function(){
                  count--;
                  document.getElementById('countDown').innerHTML = count;
                  if(count == 0){
                      window.location = '<?=base_url('/')?>'; 
                  }
              },1000);
            }
            delayRedirect();
          </script>
        </div>
      </div>
      <?php else:?>
      <div class="block-title">
        <h1 class="heading-small darken" style="margin-bottom: 5px;">Tạo mật khẩu mới</h1>
        <div class="sub-heading">
          Bạn chưa có tài khoản ? 
          <a style="color: #06b7a4" data-toggle="modal" data-target="#modalRegister" data-dismiss="modal" href="javascript:;">Đăng ký</a>
        </div>
      </div>
      <div class="info-form">
        <form action="" method="POST" class="form-inlin justify-content-center">
          <div class="form-group">
            <label class="sr-only">Mật khẩu</label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="password" placeholder="Mật khẩu từ 6 đến 32 ký tự">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="sr-only">Xác nhận mật khẩu</label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="repassword" placeholder="Xác nhận mật khẩu">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <?php if(form_error('password')):?>
            <div class="alert alert-danger" style="padding: 5px"><?=form_error('password')?></div>
          <?php endif;?>
          <?php if(form_error('repassword')):?>
            <div class="alert alert-danger" style="padding: 5px"><?=form_error('repassword')?></div>
          <?php endif;?>
          <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
        </form>
      </div>
      <?php endif;?>
    </div>
  </div>
</div>