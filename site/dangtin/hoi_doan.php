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
                <li><span>Thông tin sản phẩm</span></li>
                <li class="is-active"><span>Chọn nơi cho/tặng</span></li>
            </ul>
        </div>
        <!-- m_steps -->
        <div class="m_post-product--partner">
            <p class="fs18">Danh sách các Hội, Đoàn, Cơ sở mà EnB đang liên kết</p>
            <form action="">
                <?php foreach($hoiList as $hoi): ?>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" class="option-input" name="optionsRadios" id="optionsRadios1" value="option1">
                            <?php echo $hoi->name; ?>
                        </label>
                        <a href="#" title="" target="_blank">Xem thông tin chi tiết</a>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="m_button">
                    <a class="btn btn-primary btn-back" href="<?php echo base_url('dang-tin-ban/thong-tin-san-pham'); ?>" title="Quay lại"><i class="fa fa-angle-left"></i> Quay lại</a>
                    <button class="btn btn-primary btn-next" type="button" id="btnDone">Hoàn thành <i class="fa fa-angle-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
    $(document).ready(function(){
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