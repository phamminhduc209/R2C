<div id="pageloader"><div class="spinner"></div></div>
<?php $this->load->view('site/home/slide', $this->data);?>
<div class="block-links-new">
    <div class="container menu-r2c">
        <ul class="">
            <li><a href="#" title="">Nhanh Chóng</a></li>
            <li><a href="#" title="">Tiết Kiệm</a></li>
            <li><a href="#" title="">Quà Tặng</a></li>
        </ul>
    </div>
</div>
<!-- block-links-new -->
<div class="block-cate-new">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="item text-left">
                    <a href="<?php echo $infosetting2->home_banner_r2c_link; ?>">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_r2c);?>">
                  </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="item text-center">
                    <a href="<?php echo $infosetting2->home_banner_htd_link; ?>">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_htd);?>">
                  </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="item  text-right dnrt-banner">
                    <a href="<?php echo $infosetting2->home_banner_dnrt_link; ?>">
                        <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_dnrt);?>">
                    </a>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<!-- block-cate-new -->
<div class="block-benefit">
    <div class="container">
        <div class="row">
            <div class="items">
                <div class="item">
                    <a href="<?php echo $infosetting2->home_banner_1_link; ?>">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_1);?>">
                  </a>
                </div>
            </div>
            <div class="items">
                <div class="item moreitem">
                    <a href="<?php echo $infosetting2->home_banner_2_link; ?>">
                      <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_2);?>" style="height: 180px;">
                    </a>
                    <a href="<?php echo $infosetting2->home_banner_3_link; ?>">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->home_banner_3);?>">
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- block-benefit -->
<?php if(!empty($list_danhgia)): ?>
<div class="block-customer-new container">
    <div class="block-customer-new-title">Nhắn Gửi Từ Khách Hàng</div>
    <div class="block-customer-new-content">
        <ul id="owl-block-arrival" class="owl-carousel owl-theme owl-style2" data-nav="true" data-loop="false" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":3},"800":{"items":3},"992":{"items":4}}'>
            <?php foreach($list_danhgia as $danhgia): ?>
            <li class="item">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:void(0)"> <img class="img" src="<?= base_url('uploads/images/logo-banner/'.$danhgia->image_link) ?>"> </a>
                    </div>
                    <div class="card-info">
                        <h4 class="card-caption"><?php echo $danhgia->name; ?></h4>
                        <h6 class="card-location">
                            <i class="fa fa-map-marker"></i>
                            <?php echo $danhgia->address; ?>
                        </h6>
                        <p class="card-description"><?php echo $danhgia->content; ?></p>
                    </div>
                </div>
            </li>
            <?php endforeach;?>       
        </ul>
    </div>    
</div>
<?php endif; ?>