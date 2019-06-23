<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<!-- Chi tiết sản phẩm -->
<div class="block block-two-col container product-detail">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-main">
  <div class="block-title-commom block-detail block-detail-r2c">
      <div class="block-content">
          <div class="row">
              <div class="col-sm-6">
                <div class="block block-slide-detail">
                  <?php $image_list = json_decode($product->image_list);?>
                  <?php if(!$image_list == ''):?>
                  <div id="slider" class="flexslider">
                    <ul class="slides slides-large">
                      <?php foreach($image_list as $list):?>
                      <li><img style="margin:auto;" src="<?=base_url('uploads/images/products-images/'.$list)?>" alt="<?=$list?>" /></li>
                      <?php endforeach;?>
                    </ul>
                  </div>
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <?php foreach($image_list as $list):?>
                      <li><img src="<?=base_url('uploads/images/products-images/'.$list)?>" alt="<?=$list?>"/></li>
                      <?php endforeach;?>
                    </ul>
                  </div>
                  <?php else:?>
                      <img style="margin:auto;" src="<?=base_url('uploads/images/products-images/'.$product->image_link)?>" alt="<?=$product->image_link?>"/>
                  <?php endif;?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="block-page-common clearfix">
                  <div class="block-title"><h1 class="heading-small darken"><?=$product->name?></h1></div>
                  <div class="block-content">
                    <div class="block block-product-options clearfix">
                      <div class="catalog clearfix">
                        <p><b><?=lang('product_category')?>: </b><a href="<?=base_url($catalogFirst->url.'-c'.$catalogFirst->id);?>"><?=$catalogFirst->name?></a></p>
                      </div>
                  <?php if($product->catalog_id != 235):?>
                      <div class="trangthaiview">
                        <b>Trạng thái: </b>
                        <span class="trangstt">
                        <?php if($product->total > 0):?>
                          <span class="slcon">Còn hàng</span>
                        <?php else:?>
                          <span class="slhet">Hết hàng</span>
                        <?php endif;?>
                        </span>
                      </div>
                      <?php if($product->price_sell > 0):?>
                        <?php if($product->discount > 0):?>
                        <div class="bl-modul-cm bl-price">
                          <span class="title">Giá bán: </span>
                          <p class="des"><?=number_format($product->price_sell - $product->discount);?></p>
                          <p class="discount"><?=number_format($product->price_sell);?>đ</p>
                          <hr>
                        </div>
                        <?php else:?>
                          <div class="bl-modul-cm bl-price">
                          <span class="title">Giá thường: </span>
                          <p class="des"><?=number_format($product->price_sell)?></p>
                        </div>
                        <?php if($product->member_price_sell): ?>
                        <div class="bl-modul-cm bl-price">
                          <span class="title">Giá thành viên: </span>
                          <p class="des" style="color: #06b7a4;"><?=number_format($product->member_price_sell)?></p>
                        </div>
                         <?php endif;?>
                        <?php endif;?>
                      <?php endif;?>
                  <?php endif;?>
                      <?php if($product->mota):?><div class="bl-modul-cm block-editor-content"><?=$product->mota?><hr></div><?php endif;?>
                  <?php if($product->catalog_id != 235):?>
                   
                      <?php if($product->price_sell > 0):?>
<!--                         <form action="<?=site_url('cart/add/'.$product->id)?>" class="block20 cart clearfix" method="post" enctype="multipart/form-data"> -->
                          <div class="bl-modul-cm bl-qty clearfix">
                              <p class="title">Nhập số lượng:</p>
                              <div class="des">
                                <input type="number" step="1" min="1" name="quantity" value="1" title="SL" class="prod_qty" id="quantity" size="4" pattern="[0-9]*" inputmode="numeric" onkeypress="return event.charCode >= 48">
                              </div>
                          </div>
                          <div class="bl-modul-cm block-btn-addtocart">
                            <a class="btn btn-primary btn-addde" data-id="<?=$product->id?>"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn btn-like-icon" data-like="<?=$product->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$product->likes?></span></a>
                          </div>
                        <?php else:?>
                        <div class="bl-modul-cm block-btn-addtocart">
                            <a href="<?=base_url('lien-he')?>" class="btn btn-primary btn-block btn-lg"><?=lang('lienhe')?></a>
                        </div>
                      <?php endif;?>

                  <?php else:?>
                    <div class="bl-modul-cm block-btn-addtocart">                      
                        <a href="javascript:;" style="border-radius: 50px;font-size: 18px;width: 70px" data-id="<?=$product->id?>" class="btn-primary btn btn-add-cart-icon add-quatang"><i class="fa fa-shopping-cart"></i></a>
                      <a href="javascript:;" class=" btn btn-like-icon" data-like="<?=$product->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$product->likes?></span></a>
                 
                  </div>
                  <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <?php if($product->content || $product->content_en):?>
  <div class="block block-page-common block-title-cm clearfix">
    <div class="block-title"><h2 class="fs18"><?=lang('thongtindetail')?></h2></div>
    <div class="block-content block-editor-content"><?=$product->content?></div>
  </div>
  <?php endif;?>
  <div class="block-page-common block-title-cm clearfix block-related">
      <?php if(isset($spcungloai) && $spcungloai):?>
      <div class="block-content">
          <div class="block-title"><h2 class="fs18"><?=lang('product_same')?></h2></div>
          <div class="owl-carousel owl-theme">
              <?php foreach($spcungloai as $row):?>
                <div class="item product-item">
                <div class="inner">
                  <div class="product-img w-product">
                    <?php if($row->new == 1):?>
                      <p class="box-ico-se"><span class="ico-selling ico">Bán chạy</span></p>
                    <?php endif;?>
                    <?php if($row->price_sell > 0 && $row->discount > 0 && $row->price > $row->discount):?>
                      <p class="box-ico"><span class="ico-sales ico">-<?=round(($row->discount * 100)/$row->price_sell)?>%</span></p>
                    <?php endif;?>
                    <?php /*
                      <a href="javascript:;" title="<?=$row->name?>" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>">
                    */ ?>
                    <a title="<?=$row->name?>" href="<?=site_url($row->url.'-sp'.$row->id)?>">
                      <?php if($row->image_link):?>
                      <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/products-images/'.$row->image_link);?>" alt="<?=$row->name?>">
                      <?php else:?>
                      <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/fa-image.png');?>" alt="<?=$row->name?>">
                      <?php endif;?>
                    </a>
                    <div class="block-button-item">
                      <?php if($row->price_sell > 0 || $row->catalog_id == 235):?>
                      <a href="javascript:;"  <?php if( $row->catalog_id == 235): ?> data-tab="mt" <?php else: ?> data-tab="htd" <?php endif;?>  data-id="<?=$row->id?>" class="btn-add-cart-icon <?php if( $row->catalog_id == 235): ?> add-quatang <?php else: ?> btn_add_cart <?php endif;?>"><i class="fa fa-shopping-cart"></i></a>
                      <?php endif;?>
                      <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                    </div>
                    <div class="soluong" data-conhet="<?=$row->id?>">
                      
                      <?php if($row->total == 0 && $row->catalog_id != 235):?>
                        <span class="slhet">Hết hàng</span>
                      <?php endif;?>                      
                    </div>
                  </div>
                  <div class="product-info product-r2c">                   
                    <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>"><?=$row->name?></a></h5>
                    <?php if(!$row->member_price_sell): ?>
                    <div class="product-price fixgia">
                      <?php if($row->price > 0):?>
                        <?php if($row->discount > 0):?>
                          <span class="price-new"><?=number_format($row->price - $row->discount)?>đ</span>
                          <span class="price-old"><?=number_format($row->price)?></span>
                        <?php else:?>
                          <span class="price-new"><?=number_format($row->price)?></span>
                        <?php endif;?>
                      <?php endif;?>
                    </div>
                    <?php else:?>
                    <div class="price">
                        <?php if($row->price_sell  && $row->member_price_sell): ?>
                        <p class="price-sale"><?php echo number_format($row->price_sell); ?>

                        </p>                       
                        <?php endif;?>
                        <p class="price-menber">
                            <?php if($row->price_sell > 0 && $row->member_price_sell): ?>
                            <span class="price-member"><?php echo number_format($row->member_price_sell); ?></span>                            
                            <?php endif;?>
                            <?php if($row->member_price_sell > 0): ?>
                            <span class="price-menber-info">
                              <a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Giá thành viên" class="text-dk">(Giá thành viên)</a>
                              <a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Đăng Ký" class="text-dk">(Đăng Ký)</a>
                            </span>
                          <?php endif; ?>
                        </p>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
                </div>
              <?php endforeach;?>
          </div>
          <script type="text/javascript">
            $(document).ready(function(){
              $('.block-related .owl-carousel').owlCarousel({
                loop:false,
                margin:30,
                nav:true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive:{0:{items:2},600:{items:3},1000:{items:4}}
              });
            });
          </script>
      </div>
      <?php endif;?>
  </div>
</div>
<?php /* $this->load->view('site/giohang', $this->data) */?>
</div>
</div>
<!-- End chi tiết sản phẩm -->
<script type="text/javascript">
$(document).ready(function(){
// The slider being synced must be initialized first
$('#carousel').flexslider({
  animation: "slide",
  controlNav: false,
  animationLoop: true,
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
