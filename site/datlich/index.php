<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>

<div class="block container block-title-cm block-order-page">
  <div class="row">
    <div class="col-sm-6 col-first">
      <div class="block block-title style-line-horizone">
        <h1 class="title">VIỆN CHĂM SÓC DI ĐỘNG XIN HÂN HẠNH ĐƯỢC HỖ TRỢ QUÝ KHÁCH</h1>
      </div>
      <div class="doi"></div>
      <div class="block-content">
        <div class="order-tab-content">
            <div class="block-content-header clearfix">
              <h3 class="sub-title">Quý khách đang quan tâm về:</h3>
              <div class="nhucau">
                <select name="dh_nhucau">
                  <option value="">-- Chọn nhu cầu đặt hẹn --</option>
                  <option value="Đặt hẹn sửa máy">Đặt hẹn sửa máy</option>
                  <option value="Đặt hẹn xem máy">Đặt hẹn xem máy</option>
                </select>
              </div>
            </div>
            <div class="form-row block">
              <div class="col">
                <label class="label-control">Họ và tên (*)</label>
                <input type="text" name="dh_name" class="form-control" >
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control">Số điện thoại (*)</label>
                <input type="number" name="dh_phone" class="form-control valphone" onkeypress="return isNumberKey(event);">
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control">Địa chỉ email (*)</label>
                <input type="text" name="dh_email" class="form-control"  >
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control">Model (*)</label>
                <input type="text" name="dh_model" class="form-control"  >
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control">Màu máy (*)</label>
                <input type="text" name="dh_maumay" class="form-control"  >
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control">Dung lượng máy (*)</label>
                <input type="text" name="dh_dungluong" class="form-control"  >
              </div>
              <!-- end col -->
              <div class="col">
                <label class="label-control label-textarea">Nội dung mô tả</label>
                <textarea type="text" name="dh_mota" class="form-control form-textarea"></textarea>
              </div>
              <!-- end col -->
            </div>
            <div class="wrap-btn">
              <button class="btn btn-order" id="btn-order">Gửi Liên Hệ</button>
            </div>
          	<!-- Modal -->
          	<!-- Thanh cong -->
          	<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
	            <div class="modal-dialog" role="document">
	              	<div class="modal-content block-title-cm">
		                <div class="modal-header block-title text-center">
		                  <h2>ĐẶT LỊCH THÀNH CÔNG!</h2>
		                </div>
		                <div class="modal-body"><?=$infosetting->thongbaodatlich?></div>
		                <div class="modal-footer wrap-btn">
		                    <a href="<?=base_url()?>" class="btn btn-main">Trở về trang chủ</a>
		                </div>
	              	</div>
	            </div>
          	</div>
          	<!-- That bai -->
          	<div class="modal fade" id="orderModaltb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
	            <div class="modal-dialog" role="document">
	              	<div class="modal-content block-title-cm">
		                <div class="modal-body" style="color: red">Có lỗi xảy ra trong quá trình đặt lịch. Thử lại sau!</div>
		                <div class="modal-footer wrap-btn">
		                    <a href="<?=base_url()?>" class="btn btn-main">Về trang chủ</a>
		                </div>
	              	</div>
	            </div>
          	</div>

        </div>
      </div>
    </div>
    <?php if(isset($bvdatlich) && $bvdatlich):?>
    <div class="col-sm-6 col-second">
        <div class="block-title">
          <h3><?=$bvdatlich->name?></h3>
        </div>
        <div class="block-content block-editor-content">
            <p><?=$bvdatlich->content?></p>
        </div>
        <div class="share-item">
            <div class="addthis_inline_share_toolbox share-item"></div>
        </div>
    </div>
    <?php endif;?>
  </div>

</div>
<!-- dang ky mail ajax -->
<script type="text/javascript">
$(document).ready(function(){
  $("#btn-order").click(function(){
      	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      	var dh_nhucau = $("select[name='dh_nhucau']").val();
      	var dh_name = $( "input[name='dh_name']").val();
      	var dh_phone = $( "input[name='dh_phone']").val();
      	var dh_email = $( "input[name='dh_email']").val();
      	var dh_model = $( "input[name='dh_model']").val();
      	var dh_maumay = $( "input[name='dh_maumay']").val();
      	var dh_dungluong = $( "input[name='dh_dungluong']").val();
      	var dh_mota = $( "textarea[name='dh_mota']").val();

      	if(dh_nhucau === ''){
        	alert('Chưa chọn nhu cầu đặt hẹn');
        	$("select[name='dh_nhucau']").focus();
        	$("select[name='dh_nhucau']").addClass('error_focus');
        	return false;
    	}
      	if(dh_name === ''){
        	alert('Bạn chưa nhập tên');
        	$("input[name='dh_name']").focus();
        	$("input[name='dh_name']").addClass('error_focus');
        	return false;
    	}
      	if(dh_phone === ''){
        	alert('Bạn chưa nhập số điện thoại');
        	$("input[name='dh_phone']").focus();
        	$("input[name='dh_phone']").addClass('error_focus');
        	return false;
    	}
      	if(dh_email === ''){
        	alert('Bạn chưa nhập email');
        	$("input[name='dh_email']").focus();
        	$("input[name='dh_email']").addClass('error_focus');
        	return false;
    	}
      	if(!filter.test(dh_email)) {
          	alert('Địa chỉ email không hợp lệ.\nExample@gmail.com');
        	$("input[name='dh_email']").focus();
        	$("input[name='dh_email']").addClass('error_focus');
          	return false;
      	}
      	if(dh_model === ''){
        	alert('Bạn chưa nhập model');
        	$("input[name='dh_model']").focus();
        	$("input[name='dh_model']").addClass('error_focus');
        	return false;
    	}
      	if(dh_maumay === ''){
        	alert('Bạn chưa nhập màu máy');
        	$("input[name='dh_maumay']").focus();
        	$("input[name='dh_maumay']").addClass('error_focus');
        	return false;
    	}
      	if(dh_dungluong === ''){
        	alert('Bạn chưa nhập dung lượng');
        	$("input[name='dh_dungluong']").focus();
        	$("input[name='dh_dungluong']").addClass('error_focus');
        	return false;
    	}
      	if(dh_mota.length > 255){
        	alert('Nội dung không được quá 255 ký tự');
        	$("textarea[name='dh_mota']").focus();
        	$("textarea[name='dh_mota']").addClass('error_focus');
        	return false;
    	}
    	else{
	        $.ajax({
	          	type:"post",
	          	url:"<?=base_url('datlich/dat_hen_fun');?>",
	          	data:{
	          		dh_nhucau:dh_nhucau, 
	          		dh_name:dh_name, 
	          		dh_phone:dh_phone, 
	          		dh_email:dh_email, 
	          		dh_model:dh_model, 
	          		dh_maumay:dh_maumay, 
	          		dh_dungluong:dh_dungluong, 
	          		dh_mota:dh_mota
	          	},
	          	success:function(data){
			      	$("select[name='dh_nhucau']").val('');
			      	$("input[name='dh_name']").val('');
			      	$("input[name='dh_phone']").val('');
			      	$("input[name='dh_email']").val('');
			      	$("input[name='dh_model']").val('');
			      	$("input[name='dh_maumay']").val('');
			      	$("input[name='dh_dungluong']").val('');
			      	$("textarea[name='dh_mota']").val('');
			      	if(data == 1){
			      		$("#orderModal").modal();
			      	}else{
			      		$("orderModaltb").modal();
			      	}
	          		
	          	}
	        });
        }
    });
});
</script>