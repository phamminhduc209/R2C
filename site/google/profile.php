<div class="block block-title-cm user-page">
  <div class="container">
    <div class="tablist-account-page">
       <!-- Tab panes -->
       <div class="col-md-12">
          <div class="block-title" style="margin-top: 30px"><h3 style="text-align: center;">Tạo mật khẩu</h3></div>
          <div class="text-center form-group">
           <p>Vui lòng nhập mật khẩu cho tài khoản EnB của bạn trong lần đầu tiên đăng nhập</p>
          </div>
           <form method="post" action="<?=base_url('loginwithgoogle/resetPassFirst')?>">
           <div class="block-content">
             <div class="form-horizontal">
               <div class="form-group row">
                   <label class="control-label col-sm-2">Mật khẩu mới</label>
                   <div class="col-sm-4">                    
                     <div class="input-group show_hide_password">
                      <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_new_first" value="<?=set_value('pass_new_first')?>" placeholder="Mật khẩu từ 6 đến 32 ký tự">
                      <div class="input-group-addon">
                        <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <?php if(form_error('pass_new_first')):?>
                     <div class="alert alert-danger loi-user"><?=form_error('pass_new_first')?></div>
                    <?php endif;?>
                   </div>
                   <!-- end -->
                   <label class="control-label col-sm-2">Nhập lại mật khẩu</label>
                   <div class="col-sm-4">                    
                     <div class="input-group show_hide_password">
                      <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" placeholder="Nhập lại mật khẩu mới của bạn" name="pass_new_first_again" value="<?=set_value('pass_new_first_again')?>">
                      <div class="input-group-addon">
                        <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <?php if(form_error('pass_new_first_again')):?>
                     <div class="alert alert-danger loi-user"><?=form_error('pass_new_first_again')?></div>
                    <?php endif;?>
                   </div>
                   <!-- end -->
               </div>
               <!-- end -->
               <div class="form-group row">
                  <div class="col-sm-3 col-sm-offset-2">
                    <input class="btn btn-main" type="submit" value="Cập nhật">
                  </div>
               </div>
               <!-- end -->
             </div>
           </div>
            </form>
       </div>
    </div>
  </div>
</div>
<style type="text/css">
  .loi-user{
    padding: 5px 10px;
    margin-top: 15px;
  }
</style>