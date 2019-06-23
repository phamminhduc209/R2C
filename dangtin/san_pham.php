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
                <?php if($this->session->userdata('post_type') == 1): ?>
                <li><span>Danh mục</span></li>
                <li class="is-active"><span>Thông tin sản phẩm</span></li>
                <li><span>Hình thức thanh toán</span></li>
                <?php else: ?>                    
                <li class="is-active"><span>Thông tin sản phẩm</span></li>
                <li><span>Chọn nơi cho/tặng</span></li>
                <?php endif;?>
            </ul>
        </div>
        <div class="m_post-product-cate">
            <span>Danh mục: </span>
            <span><strong><?php echo $catalogDetail->name; ?></strong></span>
        </div>
        <!-- m_post-product-cate -->
        <div class="m_post-product--info">
            <form action="<?php echo base_url('dang-tin-ban/save-product-info'); ?>" method="POST" id="infoForm">
                <div class="row">
                    <input type="hidden" name="post_type" id="post_type" value="<?php echo $this->session->userdata('post_type'); ?>">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="name">
                            <span class="required">*</span> Tên sản phẩm <i class="fa fa-info-circle"></i>
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($arrOld['name']) ? $arrOld['name'] : ""; ?>">
                        </div>
                        <div class="error-info" data-focus="name"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="status">
                            <span class="required">*</span> Tình trạng sản phẩm <i class="fa fa-info-circle"></i>
                            </label>
                            <div class="input-group">                                
                                <select class="form-control" id="tinh_trang" name="tinh_trang">
                                    <option value="">--Chọn--</option>
                                    <?php for($i=70; $i<=100; $i++): ?>
                                    <option value="<?php echo $i; ?>"
                                        <?php echo isset($arrOld['tinh_trang']) && $arrOld['tinh_trang'] == $i ? "selected" : ""; ?>
                                        ><?php echo $i; ?></option>
                                    <?php endfor;?>
                                </select>
                                <div class="input-group-addon">%</div>
                            </div>                            
                        </div>
                        <div class="error-info" data-focus="tinh_trang"></div>
                    </div>
                    <?php if($this->session->userdata('post_type') == 1): ?>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="price">
                            <span class="required">*</span> Gía bán <i class="fa fa-info-circle"></i>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control number" id="price_sell" name="price_sell" value="<?php echo isset($arrOld['price_sell']) ? $arrOld['price_sell'] : ""; ?>">
                                <div class="input-group-addon">đ</div>
                            </div>
                            
                        </div>
                        <div class="error-info" data-focus="price_sell"></div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="tax">
                            Phí lấy hàng <i class="fa fa-info-circle"></i>
                            </label>
                            <div class="input-group">
                                <input type="text" readonly="true" class="form-control number" id="phi_lay_hang" name="phi_lay_hang" value="<?php echo isset($arrOld['phi_lay_hang']) ? $arrOld['phi_lay_hang'] : ""; ?>">
                                <div class="input-group-addon">đ</div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($this->session->userdata('post_type') == 1): ?>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="status">Giá sản phẩm mới <i class="fa fa-info-circle"></i></label>
                            <div class="input-group">
                                <input type="text" class="form-control number" id="price_new" name="price_new"  value="<?php echo isset($arrOld['price_new']) ? $arrOld['price_new'] : ""; ?>">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>
                                <span class="required">*</span> Kích thước sản phẩm <i class="fa fa-info-circle"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="length">Chiều dài</label>
                            <div class="input-group">
                                <input type="text" maxlength="3" class="form-control number" id="chieu_dai" name="chieu_dai" value="<?php echo isset($arrOld['chieu_dai']) ? $arrOld['chieu_dai'] : ""; ?>">
                                <div class="input-group-addon">cm</div>
                            </div>
                           
                        </div>
                        <div class="error-info" data-focus="chieu_dai"></div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="width">Chiều rộng</label>
                            <div class="input-group">
                                <input type="text" maxlength="3" class="form-control number" id="chieu_rong" name="chieu_rong" value="<?php echo isset($arrOld['chieu_rong']) ? $arrOld['chieu_rong'] : ""; ?>">
                                <div class="input-group-addon">cm</div>
                            </div>
                            
                        </div>
                        <div class="error-info" data-focus="chieu_rong"></div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="height">Chiều cao</label>  
                            <div class="input-group">
                                <input type="text" maxlength="3" class="form-control number" id="chieu_cao" name="chieu_cao" value="<?php echo isset($arrOld['chieu_cao']) ? $arrOld['chieu_cao'] : ""; ?>">
                                <div class="input-group-addon">cm</div>
                            </div>
                            
                        </div>
                        <div class="error-info" data-focus="chieu_cao"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="capacity">Dung tích sản phẩm</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="dung_tich" name="dung_tich" value="<?php echo isset($arrOld['dung_tich']) ? $arrOld['dung_tich'] : ""; ?>">
                                <div class="input-group-addon">ml</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="weight">Cân nặng sản phẩm</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="can_nang" name="can_nang" value="<?php echo isset($arrOld['can_nang']) ? $arrOld['can_nang'] : ""; ?>">
                                <div class="input-group-addon">kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="size">Kích cỡ sản phẩm</label>  
                            <input type="text" class="form-control" id="kich_co" name="kich_co" value="<?php echo isset($arrOld['kich_co']) ? $arrOld['kich_co'] : ""; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="amount">Số lượng</label>
                            <input type="text" class="form-control number" id="total" name="total" placeholder="" value="<?php echo isset($arrOld['total']) ? $arrOld['total'] : 1; ?>">
                        </div>
                        <div class="error-info" data-focus="total"></div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label>Đơn vị tính</label>
                            <div class="select-cs">
                                <select class="form-control" id="donvi_id" name="donvi_id">
                                    <option value="">--Chọn--</option>
                                    <?php foreach($donviList as $dv): ?>
                                    <option value="<?php echo $dv->id; ?>"
                                        <?php echo isset($arrOld['donvi_id']) && $arrOld['donvi_id'] == $dv->id ? "selected" : ""; ?>
                                        ><?php echo $dv->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="error-info" data-focus="donvi_id"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label>Chất liệu</label>  
                            <input type="text" class="form-control" id="chat_lieu" name="chat_lieu" value="<?php echo isset($arrOld['chat_lieu']) ? $arrOld['chat_lieu'] : ""; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="color">Màu sắc</label>
                            <input type="text" class="form-control" id="mau_sac" name="mau_sac" value="<?php echo isset($arrOld['mau_sac']) ? $arrOld['mau_sac'] : ""; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label>Xuất xứ</label>
                            <input type="text" class="form-control" id="xuat_xu" name="xuat_xu" value="<?php echo isset($arrOld['xuat_xu']) ? $arrOld['xuat_xu'] : ""; ?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" id="fee_max_60" value="20000">
                <input type="hidden" id="fee_min_60" value="40000">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="highlights">Đặc điểm nổi bật <i class="fa fa-info-circle"></i></label>
                            <textarea class="form-control" name="mota" id="mota" rows="10"><?php echo isset($arrOld['mota']) ? $arrOld['mota'] : ""; ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="description">Mô tả chi tiết <i class="fa fa-info-circle"></i></label>
                            <textarea class="form-control" name="content" id="content" rows="10"><?php echo isset($arrOld['content']) ? $arrOld['content'] : ""; ?></textarea>
                        </div>
                        <div class="error-info" data-focus="content"></div>
                    </div>
                </div>
                <div class="m_button">
                    <a class="btn btn-primary btn-back" href="<?php echo base_url('dang-tin-ban/danh-muc'); ?>" title="Quay lại"><i class="fa fa-angle-left"></i> Quay lại</a>
                    <?php if($this->session->userdata('post_type') == 1): ?>
                    <button class="btn btn-primary btn-next" type="button" id="btnSaveInfo">Tiếp tục <i class="fa fa-angle-right"></i></button>
                    <?php else: ?>
                    <button class="btn btn-primary btn-next" type="button" id="btnSaveInfo">Tiếp tục <i class="fa fa-angle-right"></i></button>
                    <?php endif;?>
                </div>
            </form>
        </div>
        <!-- m_post-product--info -->
    </div>
</div>
<script type="text/javascript" src="<?= public_url()?>admin/js/jquery/number/jquery.number.min.js"></script>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#chieu_dai, #chieu_rong, #chieu_cao').blur(function(){
            getFee();
        });
        $('#btnSaveInfo').click(function(){
            getFee(); 
            $.ajax({
              type:"post",
              url:"<?=base_url('dangtin/check_product_info');?>",
              data:$('#infoForm').serialize(),
              beforeSend: function(){
                $('#infoForm').append('<div class="backload"></div>');
              },
              success:function(data){
                $('#infoForm').find('.backload').remove();
                if(data == 1){                 
                  $('#infoForm').submit();
                }else{
                    var errors = $.parseJSON(data);                    
                    for(var k in errors) {                      
                       $('.error-info[data-focus=' + k + ']').html('<div class="alert alert-danger alert-loi">' +errors[k] +'</div>');                       
                    }               
                    $(window).scrollTop($('#name').offset().top - 140);  
                } //else
              } // success
            }); // ajax
        });
    function getFee(){
        if($('#post_type').val()== 2){
            $('#phi_lay_hang').val('');
        }else{
            var chieu_dai = $.trim($('#chieu_dai').val());
            var chieu_rong = $.trim($('#chieu_rong').val());
            var chieu_cao = $.trim($('#chieu_cao').val());
            if(chieu_dai > 0 && chieu_rong > 0 && chieu_cao > 0){
                if(chieu_cao >= 60 || chieu_rong >= 60 || chieu_dai >= 60){
                    $('#phi_lay_hang').val($('#fee_min_60').val());
                }else{
                    $('#phi_lay_hang').val($('#fee_max_60').val());
                }
            }    
        }        
    }
    $('.number').number(true, 0);
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