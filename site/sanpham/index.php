<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block container block-title-cm">
  <div class="block-page-common clearfix">
    <?php if($this->ngonngu != 'en'):?>
    <div class="block block-title text-center"><h1>Sản phẩm</h1></div>
    <?php endif;?>
    <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
    <div class="block block-title text-center"><h1>Product</h1></div>
    <?php endif;?>
    <?php if(isset($listsp) && $listsp):?>
    <div class="block-content">
      <div class="product-list">
        <div class="row">
          <?php foreach($listsp as $sp):?>
          <div class="col-lg-chia5 col-md-3 col-sm-4 col-xs-6">
            <div class="product-item">
              <div class="product-img">
                <p class="box-ico">
                  <?= ($sp->new == 1)?'<span class="ico-new ico">New</span>':''?>
                  <?php if($this->ngonngu != 'en'):?>
                    <?php if($sp->price > 0 && $sp->discount > 0):?>
                    <span class="ico-sales ico">-<?=round($sp->discount * 100 / $sp->price)?>%</span>
                    <?php endif;?>
                  <?php endif;?>
                  <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
                    <?php if($sp->price_en > 0 && $sp->discount_en > 0):?>
                    <span class="ico-sales ico">-<?=round($sp->discount_en * 100 / $sp->price_en)?>%</span>
                    <?php endif;?>
                  <?php endif;?>
                </p>
                <?php if($this->ngonngu != 'en'):?>
                <a href="<?=site_url($sp->url.'-sp'.$sp->id)?>" title="<?=$sp->name?>">
                  <img src="<?=base_url('uploads/images/products-images/'.$sp->image_link)?>" class="img-1" alt="<?=$sp->name?>">
                </a>
                <?php endif;?>
                <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
                <a href="<?=site_url('en/'.$sp->url_en.'-sp'.$sp->id)?>" title="<?=$sp->name_en?>">
                  <img src="<?=base_url('uploads/images/products-images/'.$sp->image_link)?>" class="img-1" alt="<?=$sp->name_en?>">
                </a>
                <?php endif;?>
              </div>
              <div class="product-info">
                <h2 class="title">
                  <?php if($this->ngonngu != 'en'):?>
                  <a href="<?=site_url($sp->url.'-sp'.$sp->id)?>" title="<?=$sp->name?>"><?=$sp->name?></a>
                  <?php endif;?>
                  <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
                  <a href="<?=site_url('en/'.$sp->url_en.'-sp'.$sp->id)?>" title="<?=$sp->name_en?>"><?=$sp->name_en?></a>
                  <?php endif;?>
                </h2>
                <?php if($this->ngonngu != 'en'):?>
                <div class="product-price">
                  <a href="<?=site_url($sp->url.'-sp'.$sp->id)?>" title="<?=$sp->name?>">
                    <?php if($sp->price > 0):?>
                      <?php if($sp->discount > 0):?>
                        <span class="price-new"><?=number_format($sp->price - $sp->discount)?>đ</span>
                        <span class="price-old"><?=number_format($sp->price)?>đ</span>
                      <?php else:?>
                        <span class="price-new"><?=number_format($sp->price)?>đ</span>
                      <?php endif;?>
                    <?php else:?>
                      <span class="price-new"><?=lang('contact')?></span>
                    <?php endif;?>
                  </a>
                </div>
                <?php endif;?>
                <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
                <div class="product-price">
                  <a href="<?=site_url('en/'.$sp->url_en.'-sp'.$sp->id)?>" title="<?=$sp->name_en?>">
                    <?php if($sp->price_en > 0):?>
                      <?php if($sp->discount > 0):?>
                        <span class="price-new"><?=number_format($sp->price_en - $sp->discount_en)?>đ</span>
                        <span class="price-old"><?=number_format($sp->price_en)?>đ</span>
                      <?php else:?>
                        <span class="price-new"><?=number_format($sp->price_en)?>đ</span>
                      <?php endif;?>
                    <?php else:?>
                      <span class="price-new"><?=lang('contact')?></span>
                    <?php endif;?>
                  </a>
                </div>
                <?php endif;?>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
        <nav class="block-pagination"><?=$phantrang?></nav>
      </div>
    </div>
    <?php endif;?>
  </div>
</div>
