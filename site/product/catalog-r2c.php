<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($catalog) && $catalog):?>

<?php if(isset($list_data) && $list_data):?>
<div class="block block-title-cm block-layout-three-col">
  <?php if($catalog->banner):?>
  <div class="block container text-center"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/catalogs/'.$catalog->banner)?>" class="w-100"></div>
  <?php endif; ?>
  <div class="block container block-title text-center">
    <h1 class="heading-primary"><?=$catalog->name?></h1>
    <?php if($catalog->intro):?><div class="sub-heading"><?=$catalog->intro?></div><?php endif;?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 main-col">
        <?php foreach($list_data as $key=>$rows):?>
        <?php $dm = $this->catalog_model->get_info($key);?>
        <div class="block-row cat-slider<?=$key?>">
          <div class="block-title">
            <h3 class="heading-icon">
            	<a href="<?=base_url($dm->url.'-c'.$dm->id)?>"><?=$dm->name?></a>
            	<a class="catalog-view-more" href="<?=base_url($dm->url.'-c'.$dm->id)?>"><i class="fa fa-hand-o-right"></i>Xem tất cả</a>
            </h3>
          </div>
          <div class="block-content">
            <div class="owl-carousel owl-theme product-list">
              <?php foreach($rows as $row):?>
                <?php if($row->price_sell > 0 || $row->price_sell_2 > 0): ?>
              <div class="item product-item">
                <div class="inner">
                  <div class="product-r2c w-product">
                    <div class="image">
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
                        <span class="ration active" data-type="1"
                        data-price="<?php echo number_format($row->price_sell); ?>đ" data-price-member="<?php echo number_format($row->member_price_sell); ?>đ"
                        >2 Người</span>
                        <?php endif;?>
                        <?php if($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                        <span class="ration <?php if($row->price_sell == 0 && $row->member_price_sell == 0): ?> active <?php endif;?>"  
                            data-price="<?php echo number_format($row->price_sell_2); ?>đ" data-type="2" data-price-member="<?php echo number_format($row->member_price_sell_2); ?>đ">2-4 Người</span>
                        <?php endif;?>

                    </div>
                    <div class="block-button-item">
                        <a href="javascript:;" data-id="<?=$row->id?>" data-tab="r2c" class="btn-add-cart-icon btn_add_cart btn-mua" data-type="<?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>1<?php else: ?>2<?php endif; ?>"><i class="fa fa-shopping-cart"></i></a>
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
            <?php endif;?>
              <?php endforeach;?>
            </div>
          </div>
          <script type="text/javascript">
          $(document).ready(function(){
            $('.cat-slider'+'<?=$key?>'+' .owl-carousel').owlCarousel({
              margin: 30,
              nav:true,
              navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
              responsive:{0:{items:1},600:{items:3},1000:{items:4}}
            });
          });
          </script>
        </div>
        <?php endforeach;?>
      </div>      
    </div>
  </div>
</div>
<?php endif;?>
<?php if(isset($list_data_con) && $list_data_con):?>
<div class="block container block-title-cm block-layout-three-col page">
  <div class="row">
    <div class="col-sm-12 col-md-12 main-col">
        <div class="block-article">
          <div class="block-title"><h2 class="heading-primary heading-line half darken"><?=$catalog->name?></h2></div>
          <div class="block-content">
            <div class="product-list row">
              <?php foreach($list_data_con as $row):?>
              <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 product-item">
                <div class="inner">
                    <div class="product-r2c w-product">
                    <div class="image">
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
                        <span class="ration active" 
                        data-price="<?php echo number_format($row->price_sell); ?>đ" data-type="1" data-price-member="<?php echo number_format($row->member_price_sell); ?>đ"
                        >2 Người</span>
                        <?php endif;?>
                        <?php if($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                        <span class="ration <?php if($row->price_sell == 0 && $row->member_price_sell == 0): ?> active <?php endif;?>"  
                            data-price="<?php echo number_format($row->price_sell_2); ?>đ" data-price-member="<?php echo number_format($row->member_price_sell_2); ?>đ" data-type="2">2-4 Người</span>
                        <?php endif;?>

                    </div>
                    <div class="block-button-item">
                        <a href="javascript:;" data-id="<?=$row->id?>" class="btn-add-cart-icon btn_add_cart btn-mua" data-tab="r2c" data-type="<?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>1<?php else: ?>2<?php endif; ?>"><i class="fa fa-shopping-cart" data-tab="r2c"></i></a>
                        <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                    </div>
                    <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>"><?=$row->name?></a></h5>
                    <?php if(!$isEnb): ?>
                    <div class="price">
                        <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
                        <p class="price-sale"><?php echo number_format($row->price_sell); ?>đ</p>
                        <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
                            <p class="price-sale"><?php echo number_format($row->price_sell_2); ?>đ</p>
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
              <?php endforeach;?>
            </div>
          </div>
          <nav class="block-pagination"><?=$phantrang?></nav>
        </div>
    </div>  
  </div>
</div>
<?php endif;?>

<?php endif;?>
