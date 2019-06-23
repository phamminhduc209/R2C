<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($user_login) && $user_login):?>
<div class="block block-title-cm user-page">
<div class="container">
<div class="tablist-account-page row">
  <ul class="nav nav-stacked col-md-3" role="tablist">
    <li class="user-info">
      <div class="user-avatar"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/user-avatar.png')?>" alt="Avatar_user"/></div>
        <p>Tài khoản của</p>
        <h4><?=$user_login->name?></h4>
    </li>
    <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
    <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i> Lịch sử đặt hàng</a></li>
    <li><a href="javascript:;" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content col-md-9 chinhsuauser">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="block-title">
        <h1 class="heading-small darken">Thông tin tài khoản</h1>
        <div class="sub-heading">Chúc mừng bạn đã trở thành khách hàng thân thiết của chúng tôi.</div>
        <?php if($user_login->enb > 0 ): ?>
          <h3 style="color: #06b7a4">Gói thành viên EnB <?php echo $packageDetail['no_month']; ?> tháng của bạn có giá trị đến <?php echo date('d/m/Y', ($packageDetail['date_end'])); ?></h3>
        <?php endif; ?>        
      </div>
      <div class="block-content">
        <div class="row">
          <div class="form-group col-sm-6">
            <label class="name_update">Họ và tên:</label>
            <input name="name-update" type="text" class="form-control" value="<?=$user_login->name?>">
          </div>
          <div class="form-group col-sm-6">
            <label class="phone_update">Điện thoại:</label>
            <input name="phone-update" type="number" class="form-control" value="<?=$user_login->phone?>">
          </div>            
          <div class="form-group col-sm-6">
            <label>Email:</label><input type="text" class="form-control" placeholder="<?=$user_login->email?>" disabled>
          </div>
          <div class="form-group col-sm-6">
            <label class="address_update">Địa chỉ:</label>
            <input name="address-update" type="text" class="form-control" value="<?=$user_login->address?>">
          </div>   
          <div class="form-group col-sm-6">
            <label>Ngày đăng ký:</label><input type="text" class="form-control" placeholder="<?=get_date($user_login->created)?>" disabled>
          </div> 
          <div class="form-group col-sm-6">
            <label class="pass_old">Mật khẩu hiện tại:</label>           
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_old" placeholder="Nhập mật khẩu hiện tại">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="form-group col-sm-6">
            <label class="pass_new">Mật khẩu mới:</label>
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_new" placeholder="Mật khẩu từ 6 đến 32 ký tự">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>            
          </div>   
          <div class="form-group col-sm-6">
            <label class="pass_new_again">Xác nhận mật khẩu:</label>            
            <div class="input-group show_hide_password">
              <input class="form-control password" type="password" style="border-radius: 5px 0px 0px 5px;" name="pass_new_again" placeholder="Xác nhận mật khẩu">
              <div class="input-group-addon">
                <a href="javascript:void(0);" title="Hiển thị mật khẩu" style="color: #000"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 text-center"><div class="msgss"></div></div>
          <div class="form-group col-sm-12 text-center">
            <button class="btn btn-primary btn-update-user"><i class="fa fa-repeat" aria-hidden="true"></i> Cập nhật thông tin</button>
          </div>
        </div>
      </div>
     </div>
     <!-- end tab -->
    <div role="tabpanel" class="tab-pane bonusPoints" id="tab2">
      <div class="block-title"><h1 class="heading-small darken">Lịch sử đặt hàng</h1></div>
        <div class="block-content">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th style="width: 35%;">Phương thức thanh toán</th>
                <th>Tổng tiền</th>
                <th style="width: 15%;">Trạng thái</th>
              </tr>
            </thead>
            <tbody>
              <?php if(isset($history) && $history):?>
              <?php foreach($history as $row):?>
              <tr>
                <th>
                  <a href="<?=base_url('don-hang/chi-tiet-don-hang-'.$row->id)?>">#<?=str_pad($row->id, 6, '0', STR_PAD_LEFT)?></a>
                </th>
                <td class="text-center"><?=get_date($row->created, false)?></td>
                <td class="text-center"><?=$row->payment?></td>
                <td class="text-center"><?=number_format($row->amount + $row->ship)?>đ</td>
                <?php if($row->status == 0):?>
                  <td class="waitting"><i class="fa fa-refresh fa-spin"></i> Đang xử lý</td>
                <?php elseif($row->status == 1):?>
                  <td class="complete"><i class="fa fa-check"></i> Thành công</td>
                <?php else:?>
                  <td class="disabled"><i class="fa fa-times"></i> Đã hủy</td>
                <?php endif;?>
              </tr>
              <?php endforeach;?>
              <?php else:?>
              <tr>
                <td colspan="5" style="text-align: center;">Bạn chưa có giao dịch nào</td>
              </tr>
              <?php endif;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>
</div>
</div>
</div>

<?php endif;?>

<script type="text/javascript">
$(document).ready(function(){
  $(".btn-update-user").click(function(){
    var name_update = $("input[name='name-update']").val();
    var phone_update = $("input[name='phone-update']").val();
    var address_update = $("input[name='address-update']").val();
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
        pass_new_again:pass_new_again
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