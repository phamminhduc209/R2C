<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-gif" id="gift">
  <?php if(isset($list_noibat) && $list_noibat):?>
  <div class="block-title" style="margin-bottom: 10px;">
    <h2 class="heading-cus heading-line half darken"><a href="https://enb.vn/qua-tang"><?=$infosetting->name_block_spmoi?></a></h2>
  </div>
  <div class="block-content">
    <div class="product-list row">
      <?php foreach($list_noibat as $key=>$row): if($key == 2){break;}?> 
      <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 product-item">
        <div class="inner">
          <div class="product-img w-product">
            <a href="javascript:;" title="<?=$row->name?>" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>">
              <?php if($row->image_link):?>
              <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/products-images/'.$row->image_link);?>" alt="<?=$row->name?>">
              <?php else:?>
              <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/fa-image.png');?>" alt="<?=$row->name?>">
              <?php endif;?>
            </a>
            <div class="block-button-item">
              <a href="javascript:;" data-id="<?=$row->id?>" class="btn-add-cart-icon add-quatang"><i class="fa fa-shopping-cart"></i></a>
              <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
            </div>
          </div>
          <div class="product-info" style="padding: 12px 2px;">
            <h5 class="title" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>"><a><?=$row->name?></a></h5>
            <!-- <div class="product-price"><span class="price-new"><?=$row->price?>đ</span></div> -->
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
  <?php endif;?>
</div>