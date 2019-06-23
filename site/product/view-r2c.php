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
                      <li><img style="margin:auto;" src="<?=base_url('uploads/images/r2c/'.$list)?>" alt="<?=$list?>" /></li>
                      <?php endforeach;?>
                    </ul>
                  </div>
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <?php foreach($image_list as $list):?>
                      <li><img src="<?=base_url('uploads/images/r2c/'.$list)?>" alt="<?=$list?>"/></li>
                      <?php endforeach;?>
                    </ul>
                  </div>
                  <?php else:?>
                      <img style="margin:auto;" src="<?=base_url('uploads/images/r2c/'.$product->image_link)?>" alt="<?=$product->image_link?>"/>
                  <?php endif;?>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="block-page-common clearfix">
                    <div class="block-title">
                        <h1 class="heading-small darken"><?=$product->name?></h1>
                    </div>
                    <div class="block-content">
                        <div class="block block-product-options clearfix product-r2c">
                            <div class="block-btn-people" style="margin-bottom: 10px">
                                <?php if($product->price_sell > 0 && $product->member_price_sell > 0): ?>
                                  <span class="ration active"  data-type="1"
                                  data-price="<?php echo number_format($product->price_sell); ?>" data-price-member="<?php echo number_format($product->member_price_sell); ?>"
                                  >2 Người</span>
                                  <?php endif;?>
                                  <?php if($product->price_sell_2 > 0 && $product->member_price_sell_2 > 0): ?>
                                  <span class="ration <?php if($product->price_sell == 0 && $product->member_price_sell == 0): ?> active <?php endif;?>"  
                                      data-price="<?php echo number_format($product->price_sell_2); ?>đ" data-price-member="<?php echo number_format($product->member_price_sell_2); ?>" data-type="2">2-4 Người</span>
                                  <?php endif;?>
                            </div>
                            <div class="bl-modul-cm">

                                <div class="bl-price">
                                    <span class="title">Giá thường: </span>
                                    <?php if($product->price_sell > 0 && $product->member_price_sell > 0): ?>
                                  <p class="des price-sale"><?php echo number_format($product->price_sell); ?>

                                  </p>
                                  <?php elseif($product->price_sell_2 > 0 && $product->member_price_sell_2 > 0): ?>
                                      <p class="des price-sale"><?php echo number_format($product->price_sell_2); ?>

                                  </p>
                                  <?php endif;?>
                                </div>
                                <div class="bl-price">
                                    <span class="title">Giá thành viên: </span>
                                    <?php if($product->price_sell > 0 && $product->member_price_sell > 0): ?>
                                    <span class="des price-member" style="color: #06b7a4;"><?php echo number_format($product->member_price_sell); ?></span>
                                    <?php elseif($product->price_sell_2 > 0 && $product->member_price_sell_2 > 0): ?>
                                    <span class="des price-member" style="color: #06b7a4"><?php echo number_format($product->member_price_sell_2); ?></span>
                                    <?php endif;?>
                                </div>
                                <?php if($product->mota):?><div class="bl-modul-cm block-editor-content">
                                  <p style="margin-bottom: 5px;font-size: 15px;">Danh sách các nguyên/hương liệu:</p>
                                  <?=$product->mota?><hr></div><?php endif;?>
                                <hr>
                            </div>                         
                            <div class="bl-modul-cm bl-qty clearfix">
                                <p class="title">Số lượng</p>
                                <div class="des">
                                    <input type="number" step="1" min="1" name="quantity" value="1" title="SL" class="prod_qty" id="quantity" size="4" pattern="[0-9]*" inputmode="numeric" onkeypress="return event.charCode >= 48">
                                </div>
                            </div>
                            <div class="bl-modul-cm block-btn-addtocart">
                                <a class="btn btn-primary btn-addde btn-mua" data-type="<?php if($product->price_sell > 0 && $product->member_price_sell > 0): ?>1<?php else: ?>2<?php endif; ?>" data-id="<?=$product->id?>"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:;" class="btn btn-like-icon" data-like="<?=$product->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$product->likes?></span></a>
                            </div>                            
                        </div>
                    </div>
                </div>                
              </div>
          </div>
      </div>
  </div>
  <?php if($product->content):?>
  <div class="block block-page-common block-title-cm clearfix">
    <div class="block-title"><h2 class="fs18">HƯỚNG DẪN NẤU</h2></div>
    <div class="block-content block-editor-content"><?=$product->content?></div>
  </div>
  <?php endif;?>
  <?php if(isset($spcungloai) && $spcungloai):?>
  <div class="block block-relative-r2c">
      <div class="block-title"><h2 class="fs18">CÁC MÓN ĂN GỢI Ý</h2></div>
      <div class="block-content block-product-r2c">
          <div class="block-slides">
            
              <div class="owl-carousel" data-nav="true" data-margin="0" data-autoplayTimeout="700" data-autoplay="false" data-loop="true" data-responsive='{"0":{"items":1},"480":{"items":1},"600":{"items":2},"768":{"items":2},"800":{"items":3},"992":{"items":4}}'>
                  <?php foreach($spcungloai as $row):?>
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
                                  <span class="ration <?php if($row->price_sell == 0 && $row->member_price_sell == 0): ?> active <?php endif;?>"  
                                      data-price="<?php echo number_format($row->price_sell_2); ?>đ" data-price-member="<?php echo number_format($row->member_price_sell_2); ?>đ" data-type="2">2-4 Người</span>
                                  <?php endif;?>

                              </div>
                              <div class="block-button-item">
                                  <a href="javascript:;"  data-tab="r2c" data-id="<?=$row->id?>" class="btn-add-cart-icon btn_add_cart btn-mua" data-type="<?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>1<?php endif; ?>"><i class="fa fa-shopping-cart"></i></a>
                                  <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                              </div>
                              <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>"><?=$row->name?></a></h5>
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
                          </div>
                      </div>
                  </div>
                  <?php endif;?>
                  <?php endforeach;?>
              </div>
          </div>
      </div>
  </div>
  <?php endif;?>  
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
