<div id="pageloader"><div class="spinner"></div></div>
<div class="block block-about-r2c" style="margin-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="r2c-img">
                <div class="inner">
                    <a href="<?php echo $infosetting2->r2c_banner_1_link; ?>">
                        <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_1);?>">
                    </a>
                </div>
            </div>
            <div class="r2c-video">
                <div class="inner">    
                    <?php if($infosetting2->r2c_banner_video): ?>                
                        <a href="<?php echo $infosetting2->r2c_banner_video_link; ?>">
                            <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_video);?>">
                        </a>
                    <?php else: ?>
                        <iframe src="https://www.youtube.com/embed/<?php echo $infosetting2->r2c_video; ?>" frameborder="0" allowfullscreen></iframe>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block block-product-r2c">
    <div class="container">
        <div class="block-title-r2c">
            <h2><?php echo $infosetting2->r2c_home_text; ?></h2>
        </div>
        
    </div>
</div>
<?php foreach($list_catalog as $cata):?>
<div class="block block-product-r2c">
    <div class="container">
        <div class="block-content-r2c">
            <h3 class="title-r2c">
                <a href="<?=base_url($cata->url.'-c'.$cata->id)?>" title="<?php echo $cata->name; ?>"><?php echo $cata->name; ?></a>
            </h3>
            <div class="block-slides">
                <div class="owl-carousel" data-nav="true" data-margin="0" data-autoplayTimeout="700" data-autoplay="false" data-loop="false" data-responsive='{"0":{"items":1},"480":{"items":1},"600":{"items":2},"768":{"items":2},"800":{"items":3},"992":{"items":4}}'>
                    <?php if(!empty($productArr[$cata->id])): ?>
                    <?php foreach($productArr[$cata->id] as $key => $row):  ?>
                    <?php if($row->price_sell > 0 || $row->price_sell_2 > 0): ?>
                    <div class="item">
                        <div class="inner">

                            <div class="product-r2c w-product">
                                <div class="image product-img">
                                    <a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>">
                                        <?php if($row->image_link):?>
                                          <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/r2c/'.$row->image_link);?>" alt="<?=$row->name?>">
                                          <?php else:?>
                                          <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/fa-image.png');?>" alt="<?=$row->name?>">
                                          <?php endif;?>
                                    </a>
                                </div>
                                <div class="people text-center">
                                    <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                                    <span class="ration active"  data-type="1"
                                    data-price="<?php echo number_format($row->price_sell); ?>đ" data-price-member="<?php echo number_format($row->member_price_sell); ?>đ"
                                    >2 Người</span>
                                    <?php endif;?>                                    
                                    <?php if($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                                    <span class="ration <?php if($row->price_sell == 0 || $row->member_price_sell == 0): ?> active <?php endif;?>"  
                                        data-price="<?php echo number_format($row->price_sell_2); ?>đ" data-price-member="<?php echo number_format($row->member_price_sell_2); ?>đ" data-type="2">2-4 Người</span>
                                    <?php endif;?>

                                </div>
                                <div class="block-button-item">
                                    <a href="javascript:;" data-id="<?=$row->id?>" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="<?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>1<?php else: ?>2<?php endif; ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                                </div>
                                <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>"><?=$row->name?></a></h5>                              
                                <?php if(!$isEnb): ?>
                                <div class="price">
                                    <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                                    <p class="price-sale"><?php echo number_format($row->price_sell); ?>đ

                                    </p>
                                    <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                                        <p class="price-sale"><?php echo number_format($row->price_sell_2); ?>đ

                                    </p>
                                    <?php endif;?>
                                    <p class="price-menber">
                                        <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                                        <span class="price-member"><?php echo number_format($row->member_price_sell); ?>đ</span>
                                        <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                                        <span class="price-member"><?php echo number_format($row->member_price_sell_2); ?>đ</span>
                                        <?php endif;?>
                                        <span class="price-menber-info">
                                        <a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Giá thành viên" class="text-dk">(Giá thành viên)</a>
                                        <a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Đăng Ký" class="text-dk">(Đăng Ký)</a>
                                        </span>
                                    </p>
                                </div>
                                <?php else: ?>
                                <div class="price">
                                    <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                                        <p class="price-sale package"><?php echo number_format($row->member_price_sell); ?>đ</p>
                                    <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                                        <p class="price-sale package"><?php echo number_format($row->member_price_sell_2); ?>đ</p>
                                    <?php endif;?>
                                    <p class="price-menber">
                                        <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                                        <span class="price-member package"><?php echo number_format($row->price_sell); ?>đ</span>
                                        <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                                        <span class="price-member package"><?php echo number_format($row->price_sell_2); ?>đ</span>
                                        <?php endif;?>
                                        <span class="price-menber-info">
                                        <a href="javascript:void(0)" title="Giá thường" class="text-dk package">(Giá thường)</a>
                                        </span>
                                    </p>                                    
                                </div>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach;?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<div class="block block-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_2);?>">
                <span><?php echo $infosetting2->r2c_banner_2_text; ?></span>
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_3);?>">
                <span><?php echo $infosetting2->r2c_banner_3_text; ?></span>
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_4);?>">
                <span><?php echo $infosetting2->r2c_banner_4_text; ?></span>
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->r2c_banner_5);?>">
                <span><?php echo $infosetting2->r2c_banner_5_text; ?></span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>