<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<!-- flash sale -->
<div class="block container block-title-cm block-layout-three-col page">
  <div class="row">
    <div class="col-md-12 main-col">
        <div class="">
          <div class="block-title"><h2 class="heading-primary heading-line half darken">Flash sale</h2></div>
          <div class="block-content">
          
          <div class="block text-center">
            <?php 
            if(time() >= $infosetting->flash_sale_start):
            ?>
              <div id="clock" class="clockpage" class="clearfix"></div>
              <script type="text/javascript">
              $(document).ready(function() {
              $('#clock').countdown('<?=date('Y/m/d H:i:s',$infosetting->flash_sale);?>', function(event){
              $(this).html(event.strftime('<div>%D<span>Ngày</span></div> <div>%H<span>Giờ</span></div> <div>%M<span>Phút</span></div> <div>%S<span>Giây</span></div>'));
              });
              });
              </script>
            <?php else: ?>
              <p style="font-size: 17px">Chương trình FLASH SALE sẽ diễn ra vào ngày <?php echo date('d/m/Y', $infosetting->flash_sale_start); ?> lúc <?php echo date('H:i', $infosetting->flash_sale_start); ?></p>
            <?php endif;?>
          </div>
        
          <?php if(isset($list_sale) && $list_sale && time() >= $infosetting->flash_sale_start && time() <= $infosetting->flash_sale):?>
            <div class="product-list row">
            <?php foreach($list_sale as $row):?>
              <div class="col-lg-3 col-sm-3 col-xs-6 product-item">
                <div class="inner">
                  <div class="product-img w-product">
                    <?php /* if($row->new == 1):?>
                      <p class="box-ico-se"><span class="ico-selling ico">Bán chạy</span></p>
                    <?php endif; */?>
                    <?php if($row->price > 0 && $row->discount > 0 && $row->price > $row->discount):?>
                      <p class="box-ico"><span class="ico-sales ico">-<?=round(($row->discount * 100)/$row->price)?>%</span></p>
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
                      <?php if($row->price > 0):?>
                      <a href="javascript:;" data-id="<?=$row->id?>" data-tab="htd" class="btn-add-cart-icon btn_add_cart btn-mua"><i class="fa fa-shopping-cart"></i></a>
                      <?php else:?>
                      <span class="btn-add-cart-icon btn_add_cart btn-mua">Liên Hệ</span>
                      <?php endif;?>
                      <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                    </div>
                    <div class="soluong" data-conhet="<?=$row->id?>">
                      <?php if($row->total > 0):?>
                        <?php if($row->new == 1):?>
                        <span class="slcon">bán chạy</span>
                        <?php endif;?>
                      <?php else:?>
                        <span class="slhet">Hết hàng</span>
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="product-info">
                    <?php /*
                    <h5 class="title" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>"><a href="javascript:;"><?=$row->name?></a></h5>
                    */?>
                    <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>"><?=$row->name?></a></h5>
                    <div class="product-price fixgia">
                      <?php if($row->price > 0):?>
                        <?php if($row->discount > 0):?>
                          <span class="price-new"><?=number_format($row->price - $row->discount)?>đ</span>
                          <span class="price-old"><?=number_format($row->price)?>đ</span>
                        <?php else:?>
                          <span class="price-new"><?=number_format($row->price)?>đ</span>
                        <?php endif;?>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
              </div>
          	<?php endforeach;?>
            </div>
            <nav class="block-pagination"><?=$phantrang?></nav>
        	<?php endif;?>
          </div>
        </div>
    </div>
  </div>
</div>
