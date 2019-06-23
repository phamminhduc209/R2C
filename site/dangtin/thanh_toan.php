<div class='block block-breadcrumb block-breadcrumb-r2c'>
    <div class='container'>
        <ul class='breadcrumb'>
            <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
            <li><a href="<?php echo base_url('dnrt'); ?>">DNRT</a></li>
            <li class="active">Đăng tin bán</li>
        </ul>
    </div>
</div>
<!-- Chi tiết sản phẩm -->
<div class="block container">
    <div class="m_post-product">
        <div class="m_steps">
            <ul class="list-unstyled multi-steps">
                <li><span>Hình ảnh</span></li>
                <li><span>Loại tin</span></li>
                <li><span>Danh mục</span></li>
                <li><span>Thông tin sản phẩm</span></li>
                <li class="is-active"><span>Hình thức thanh toán</span></li>
            </ul>
        </div>
        <div class="m_post-product--pay">
            <div class="m_post-product--pay--inner">
                <div class="m_post-product--pay--head">
                    <div class="m_post-product--partner">Chuyển tiền vào tài khoản ngân hàng của bạn</div>
                </div>
                <div class="m_post-product--pay--content">
                    <p>Khi sản phẩm được giao thành công cho người mua và sau khi trừ phí lấy hàng:</p>
                    <p>Tiền bán sản phẩm sẽ được chuyển vào tài khoản của người bán đã cung cấp cho EnB sau 2-4 ngày</p>
                    <p>Phí chuyển khoản người nhận trả</p>
                    <div class="m_post-product--info">
                        <form action="<?php echo base_url('dangtin/save_product'); ?>" method="POST" id="bankInfoForm">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="account_no">Số tài khoản <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="account_no" name="account_no" value="">
                                    </div>
                                    <div class="error-info" data-focus="account_no"></div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="account_name">Tên người thụ hưởng <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="account_name" name="account_name">
                                    </div>
                                    <div class="error-info" data-focus="account_name"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="bank_name">Tên ngân hàng <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name" value="">
                                    </div>
                                    <div class="error-info" data-focus="bank_name"></div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="branch">Chi nhánh ngân hàng <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="branch" name="branch">
                                    </div>
                                    <div class="error-info" data-focus="branch"></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="text-bold">
                                    <input type="checkbox" id="agree" name="agree" value="1">
                                    Tôi đã đọc và đồng ý các điều khoản bán hàng của EnB
                                </label>
                                
                            </div>
                            <div class="error-info col-md-4" data-focus="agree"></div>
                            <div class="m_button clearfix">
                                <p class="pull-left fs18"><a class="text-base" href="#" title="">Xem thêm các quy định bán hàng</a></p>
                                <a class="btn btn-primary btn-back" href="<?php echo base_url('dang-tin-ban/thong-tin-san-pham'); ?>" title="Quay lại"><i class="fa fa-angle-left"></i> Quay lại</a>
                                <button type="button" id="btnSaveBankInfo" class="btn btn-primary btn-next">Gửi duyệt và đăng bán <i class="fa fa-angle-right"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnSaveBankInfo').click(function(){          
            $.ajax({
              type : "POST",
              url : "<?php echo base_url('dangtin/check_bank_info');?>",
              data : $('#bankInfoForm').serialize(),
              beforeSend: function(){
                $('#bankInfoForm').append('<div class="backload"></div>');
              },
              success:function(data){
                $('#bankInfoForm').find('.backload').remove();
                if(data == 1){                 
                  $('#bankInfoForm').submit();
                }else{
                    var errors = $.parseJSON(data);                    
                    for(var k in errors) {                      
                       $('.error-info[data-focus=' + k + ']').html('<div class="alert alert-danger alert-loi">' +errors[k] +'</div>');                       
                    }               
                    $(window).scrollTop($('#account_no').offset().top - 50);  
                } //else
              } // success
            }); // ajax
        });
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 88,
            itemMargin: 20,
            nextText: "",
            prevText: "",
            asNavFor: '#slider'
        });
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            animationSpeed: 500,
            sync: "#carousel",
            animateHeight: false
        });
        $('.slides-large li').each(function () {
            $(this).zoom();
        });
    });
</script>