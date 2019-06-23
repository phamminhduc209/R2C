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
                <li class="is-active"><span>Loại tin</span></li>
                <li><span>Danh mục</span></li>
                <li><span>Thông tin sản phẩm</span></li>
                <li><span>Hình thức thanh toán</span></li>
            </ul>
        </div>
        <!-- m_steps -->
        <div class="m_type_news">
            <button class="
            <?php if($this->session->userdata('post_type') == 1 || !$this->session->userdata('post_type')):?>
            active
            <?php endif;?>
             choose_post_type" data-value="1" >Đăng sản phẩm BÁN <i class="fa fa-angle-right"></i></button>
            <button class="
            <?php if($this->session->userdata('post_type') == 2):?>
            active
            <?php endif;?>
            choose_post_type
            " data-value="2">Đăng sản phẩm CHO/TẶNG <i class="fa fa-angle-right"></i></button>
        </div>
        <!-- m_type_news -->
        <div class="m_button m_button__style2">
            <a class="btn btn-primary btn-back" href="<?php echo base_url('dang-tin-ban'); ?>" title="Quay lại"><i class="fa fa-angle-left"></i> Quay lại</a>            
            <a class="btn btn-primary btn-next" data-href1="<?php echo base_url('dang-tin-ban/danh-muc'); ?>?post_type=1" data-href2="<?php echo base_url('dang-tin-ban/thong-tin-san-pham'); ?>" href="<?php echo $this->session->userdata('post_type') == 2 ? base_url('dang-tin-ban/thong-tin-san-pham') : base_url('dang-tin-ban/danh-muc'); ?>" id="btnNext" title="Tiếp tục">Tiếp tục <i class="fa fa-angle-right"></i></a>            
        </div>
    </div>
</div>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
    $(document).ready(function(){
    // The slider being synced must be initialized first
    $('.choose_post_type').click(function(){
        $('.choose_post_type').removeClass('active');
        $(this).addClass('active');
        $('#btnNext').attr('href', $('#btnNext').data('href' + $(this).data('value')));
    });
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