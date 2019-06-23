<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($catalog) && $catalog):?>

<?php if(isset($list_qua) && $list_qua):?>
<div class="block container block-title-cm block-layout-three-col">
  <div class="row">
    <div class="col-md-12">
        <!-- <div class="block-article"> -->
        <div class="">
          <div class="block-title">
            <h2 class="heading-primary heading-line half darken"><?=$catalog->name?></h2>
            <div class="desc block"><?=$catalog->intro?></div>
          </div>
          <div class="block-content">
            <div class="product-list row">
              <?php foreach($list_qua as $row):?>
              <div class="col-lg-3 col-sm-3 col-xs-12 product-item">
                <div class="inner">
                  <div class="product-img w-product">
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
                      <a href="javascript:;" data-id="<?=$row->id?>" class="btn-add-cart-icon add-quatang"><i class="fa fa-shopping-cart"></i></a>
                      <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                    </div>
                  </div>
                  <div class="product-info">
                    <?php /*
                    <h5 class="title" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>"><a href="javascript:;"><?=$row->name?></a></h5>
                    */?>
                    <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>"><?=$row->name?></a></h5>
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
