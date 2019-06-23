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
                <li class="is-active"><span>Danh mục</span></li>
                <li><span>Thông tin sản phẩm</span></li>
                <li><span>Hình thức thanh toán</span></li>
            </ul>
        </div>
        <!-- m_steps -->
        <div class="m_type--cate">
            <form action="">
                <div class="m_type--cate-head">
                    <p><span class="required">*</span>Danh mục<i class="fa fa-info-circle"></i></p>
                    <span class="sub">(Bạn hãy chọn các danh mục ở mức cuối cùng được tô đậm để tạo sản phẩm)</span>
                </div>
                <div class="m_type--cate-content">
                    <div class="m_type--cate-inner">
                        <div class="m_type--cate-item">
                            <ul class="m_type--cate-item--menu">
                                <?php foreach($list_catalog as $parent_cata): 
                                      if($parent_cata->id == 312) continue;
                                $cateChild = $this->catalog_model->menuconadmin($parent_cata->id);
                                $countChild = count($cateChild);
                                ?>
                                <li class="lv1 <?php if($countChild>0): ?>parent <?php endif; ?>"><span class="lv1" data-value="<?php echo $parent_cata->id; ?>"><?php echo $parent_cata->name; ?></span></li>
                                <div class="hidden_lv2 hidden" data-parent="<?php echo $parent_cata->id; ?>">
                                <?php if($countChild > 0): ?>
                                    
                                        <?php foreach($cateChild as $cate):  ?>
                                            <li>
                                                <span data-value="<?php echo $cate->id; ?>"><?php echo $cate->name; ?></span>

                                            </li>
                                            <div class="hidden desc-lv2"><?php echo $cate->intro; ?></div>
                                        <?php endforeach;?> 
                                    
                                <?php endif; ?>
                                </div>
                                <div class="hidden desc"><?php echo $parent_cata->intro; ?></div>
                                <?php endforeach;?>                                
                            </ul>
                            <input type="hidden" class="lv1 catalog_id" name="catalog_id[]" value="">
                        </div>
                        <div class="m_type--cate-item">
                            <ul class="m_type--cate-item--menu m_type--cate-item--menu-level2" id="menu_post_lv_2">
                                
                            </ul>
                            <input type="hidden" class="lv2 catalog_id" name="catalog_id[]" value="">
                        </div>
                        <div class="m_type--cate-item m_type--cate-item--text">
                            <div class="m_type--cate-item-inner" id="loadDesc">
                                
                                <!-- <p><a class="btn btn-primary" href="#" title="">Đồng Ý</a></p> -->
                            </div>
                        </div>

                    </div>
                    <p class="text-right error" style="margin-top: 15px;display: none;" id="errorCate">Vui lòng chọn đầy đủ danh mục!</p>
                </div>
                <div class="m_button">
                    <a class="btn btn-primary btn-back" href="<?php echo base_url('dang-tin-ban/loai-tin'); ?>" title="Quay lại"><i class="fa fa-angle-left"></i> Quay lại</a>
                    <a class="btn btn-primary btn-next" data-href="<?php echo base_url('dang-tin-ban/thong-tin-san-pham'); ?>?post_type=<?php echo $post_type; ?>" href="javascript:;" title="Tiếp tục" id="btnNext">Tiếp tục <i class="fa fa-angle-right"></i></a>
                </div>
                <!-- m_button -->
            </form>
        </div>
        <!-- m_type_cate -->
    </div>
</div>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
    $(document).ready(function(){       
        $('#btnNext').click(function(){
            if($('input.lv1').val() == '' || ( $('input.lv2').val() == '' && $.trim($('#menu_post_lv_2').html()) != '')){
                $('#errorCate').show();
                return false;
            }else{
                $('#errorCate').hide();
            }
            var strHref = $(this).data('href') + '&catalog_id=';
            $('input.catalog_id').each(function(){
                if($(this).val() != ''){
                    strHref += $(this).val() + ',';
                }
            });
            location.href = strHref;
        });
        $('span.lv1').click(function(){
            $('li.lv1').removeClass('active');
            $(this).parents('li').addClass('active');
            $('#menu_post_lv_2').html($(this).parents('li').next().html());
            $('input.lv1').val($(this).data('value'));
            $('input.lv2').val('');
            $('#loadDesc').html($(this).parent().next().next().html());
        });
        $(document).on('click', '#menu_post_lv_2 li span', function(){
            $('input.lv2').val($(this).data('value'));
            $('#menu_post_lv_2 li').removeClass('active');
            $(this).parent().addClass('active');
            $('#loadDesc').html($(this).parent().next().html());
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