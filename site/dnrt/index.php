<div id="pageloader"><div class="spinner"></div></div>
<div class="block block-about-r2c" style="margin-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="r2c-img">
                <div class="inner">
                    <a href="<?php echo $infosetting2->r2c_banner_1_link; ?>">
                        <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting3->dnrt_banner_1);?>">
                    </a>
                </div>
            </div>
            <div class="r2c-video">
                <div class="inner">    
                    <?php if($infosetting3->dnrt_banner_video): ?>                
                        <a href="<?php echo $infosetting2->dnrt_banner_video_link; ?>">
                            <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting3->dnrt_banner_video);?>">
                        </a>
                    <?php else: ?>
                        <iframe src="https://www.youtube.com/embed/<?php echo $infosetting3->dnrt_video; ?>" frameborder="0" allowfullscreen></iframe>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="postnews">
    <div class="container">
        <div class="text-center">
            <a class="btn btn-primary btn_postnews" 
            <?php if(isset($user_login) && $user_login):?>
            href="<?php echo base_url('dang-tin-ban'); ?>"
            <?php else: ?>
            data-target="#modalLogin" data-toggle="modal" href="javascript:;"
            <?php endif; ?>
            >ĐĂNG TIN BÁN</a>
        </div>
    </div>
</div>
<div class="block_categories">
    <div class="container">
        <div class="inner">
            <h3 class="title">Tất cả sản phẩm <i class="fa fa-angle-double-right"></i></h3>
            <div class="categories_menu">
                <ul>
                    <li class="level0 parent">
                        <a href="cate-dnrt.html" title="">Bé ăn</a>
                        <ul class="level1 child">
                            <li><a href="#" title="">Bình sữa và phụ kiện</a></li>
                            <li><a href="#" title="">Đồ dùng phục vụ ăn uống</a></li>
                            <li><a href="#" title="">Ghế tập ăn cho bé</a></li>
                        </ul>
                    </li>
                    <li class="level0"><a href="#" title="">Bé vệ sinh</a></li>
                    <li class="level0"><a href="#" title="">Bé mặc</a></li>
                    <li class="level0"><a href="#" title="">Bé đi ra ngoài</a></li>
                    <li class="level0"><a href="#" title="">Bé học</a></li>
                    <li class="level0"><a href="#" title="">Bé ngủ</a></li>
                    <li class="level0"><a href="#" title="">Sản phẩm khác</a></li>
                    <li class="level0"><a href="#" title="">Sản phẩm cho/tặng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="block product_drnt">
    <div class="container">
        <div class="content">
            <div class="block_slides">
                <div class="owl-carousel" data-nav="true" data-margin="30" data-autoplayTimeout="700" data-autoplay="false" data-loop="false" data-responsive='{"0":{"items":2},"480":{"items":2},"600":{"items":2},"768":{"items":2},"800":{"items":5},"992":{"items":6}}'>
                    <?php foreach($list_catalog as $cata):?>
                    <div class="item">
                        <a href="<?php echo base_url($cata->url.'-c'.$cata->id); ?>" title="<?php echo $cata->name; ?>">
                            <span class="img"><img class="" src="<?=base_url('uploads/images/catalogs/'.$cata->image_link);?>" /></span>
                            <span class="txt"><?php echo $cata->name; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block product_drnt2">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6 item">
                <div class="inner">
                    <span class="info_status info_sold">Đã bán</span>
                    <div class="info">
                        <p class="ico"><img src="images/icn_user.jpg" alt=""></p>
                        <p class="ifn">
                            <span>Lam Lam</span>
                            <span class="down">5 phút trước</span>
                        </p>
                    </div>
                    <div class="img">
                        <a href="#" title="">
                            <img src="images/dnrt_08.jpg" alt="">
                        </a>
                    </div>
                    <div class="des">
                        <div class="block-button-item">
                            <a href="javascript:;" data-id="1928" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="1"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn-like-icon" data-like="1928"><i class="fa fa-thumbs-up"></i><span class="likes">0</span></a>
                        </div>
                        <h5 class="title"><a href="https://enb.vn/su-su-xao-ca-rot-sp1928.html" title="Su su xào cà rốt">Su su xào cà rốt</a></h5>
                        <div class="price">
                            <div class="price-inner">
                                <p class="price-now">85,000đ</p>
                                <p class="price-member">
                                    <span>68,000đ</span>
                                    <span class="text-base">(Giá thành viên)*</span>
                                    <a class="arrow-up" href="#" title="#">
                                        <span class="tooltip-arrow"></span>
                                        Đăng Kí Ngay
                                    </a>
                                </p>
                            </div>
                        </div>
                        <p class="text-center status">80% MỚI</p>
                        <div class="text-center info_price">
                            <p><span>Giá sản phẩm mới:</span> 120.000đ</p>
                            <p><span>Tiết kiệm được:</span> 52.000đ(30%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 item">
                <div class="inner">
                    <span class="info_status info_trading">Đang giao dịch</span>
                    <div class="info">
                        <p class="ico"><img src="images/icn_user.jpg" alt=""></p>
                        <p class="ifn">
                            <span>Lam Lam</span>
                            <span class="down">5 phút trước</span>
                        </p>
                    </div>
                    <div class="img">
                        <a href="#" title="">
                            <img src="images/dnrt_08.jpg" alt="">
                        </a>
                    </div>
                    <div class="des">
                        <div class="block-button-item">
                            <a href="javascript:;" data-id="1928" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="1"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn-like-icon" data-like="1928"><i class="fa fa-thumbs-up"></i><span class="likes">0</span></a>
                        </div>
                        <h5 class="title"><a href="https://enb.vn/su-su-xao-ca-rot-sp1928.html" title="Su su xào cà rốt">Su su xào cà rốt</a></h5>
                        <div class="price">
                            <div class="price-inner">
                                <p class="price-now">85,000đ</p>
                                <p class="price-member">
                                    <span>68,000đ</span>
                                    <span class="text-base">(Giá thành viên)*</span>
                                    <a class="arrow-up" href="#" title="#">
                                        <span class="tooltip-arrow"></span>
                                        Đăng Kí Ngay
                                    </a>
                                </p>                                               
                            </div>
                        </div>
                        <p class="text-center status">80% MỚI</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 item">
                <div class="inner">
                    <div class="info">
                        <p class="ico"><img src="images/icn_user.jpg" alt=""></p>
                        <p class="ifn">
                            <span>Lam Lam</span>
                            <span class="down">5 phút trước</span>
                        </p>
                    </div>
                    <div class="img">
                        <a href="#" title="">
                            <img src="images/dnrt_08.jpg" alt="">
                        </a>
                    </div>
                    <div class="des">
                        <div class="block-button-item">
                            <a href="javascript:;" data-id="1928" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="1"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn-like-icon" data-like="1928"><i class="fa fa-thumbs-up"></i><span class="likes">0</span></a>
                        </div>
                        <h5 class="title"><a href="https://enb.vn/su-su-xao-ca-rot-sp1928.html" title="Su su xào cà rốt">Su su xào cà rốt</a></h5>
                        <div class="price">
                            <div class="price-inner">
                                <p class="price-now">85,000đ</p>
                                <p class="price-member">
                                    <span>68,000đ</span>
                                    <span class="text-base">(Giá thành viên)*</span>
                                    <a class="arrow-up" href="#" title="#">
                                        <span class="tooltip-arrow"></span>
                                        Đăng Kí Ngay
                                    </a>
                                </p>                                               
                            </div>
                        </div>
                        <p class="text-center status">80% MỚI</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 item">
                <div class="inner">
                    <div class="info">
                        <p class="ico"><img src="images/icn_user.jpg" alt=""></p>
                        <p class="ifn">
                            <span>Lam Lam</span>
                            <span class="down">5 phút trước</span>
                        </p>
                    </div>
                    <div class="img">
                        <a href="#" title="">
                            <img src="images/dnrt_08.jpg" alt="">
                        </a>
                    </div>
                    <div class="des">
                        <div class="block-button-item">
                            <a href="javascript:;" data-id="1928" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="1"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn-like-icon" data-like="1928"><i class="fa fa-thumbs-up"></i><span class="likes">0</span></a>
                        </div>
                        <h5 class="title"><a href="https://enb.vn/su-su-xao-ca-rot-sp1928.html" title="Su su xào cà rốt">Su su xào cà rốt</a></h5>
                        <div class="price">
                            <div class="price-inner">
                                <p class="price-now">85,000đ</p>
                                <p class="price-member">
                                    <span>68,000đ</span>
                                    <span class="text-base">(Giá thành viên)*</span>
                                    <a class="arrow-up" href="#" title="#">
                                        <span class="tooltip-arrow"></span>
                                        Đăng Kí Ngay
                                    </a>
                                </p>                                               
                            </div>
                        </div>
                        <p class="text-center status">80% MỚI</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary" href="#" title="">Xem Thêm ...</a>
        </div>
    </div>
</div>
<div class="block block_banner">
    <div class="container">
      <a href="#">
          <img class="hidden-xs img-responsive" src="images/dnrt_09.jpg">
          <img class="hidden-sm hidden-md hidden-lg img-responsive" src="images/dnrt_09.jpg">
        </a>
    </div>
</div>
<div class="block-customer-new container">
    <div class="block-customer-new-content">
        <ul id="owl-block-arrival" class="owl-carousel owl-theme owl-style2" data-nav="true" data-loop="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":3},"800":{"items":3},"992":{"items":3}}'>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
            <li class="item">
                <img src="images/dnrt_10.jpg" alt="">
            </li>
        </ul>
    </div>    
</div>