<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-col-sidebar">

  <?php if(isset($banner_sp1) && $banner_sp1):?>
  <?php foreach($banner_sp1 as $row):?>
  <div class="block30 block-sidebar">
    <div class="block-content">
      <div class="hvr-animate-translate hvr-zoom-banner-image">
        <a href="<?=$row->link?>"><img src="<?=base_url('uploads/images/news/'.$row->image_link);?>" /></a> 
      </div>
    </div>
  </div>
  <?php endforeach;?>
  <?php endif;?>

  <?php if(isset($hangmoive) && $hangmoive):?>
  <div class="block30 block-sidebar">
      <div class="block-module block-links-sidebar">
          <div class="block-title"><h2><i class="fa fa-star" aria-hidden="true"></i> Hàng mới về</h2></div>
          <div class="block-content">
              <ul class="list">
                  <?php foreach($hangmoive as $row):?>
                  <li>
                    <a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>">
                        <figure class="thumb">
                          <img src="<?=base_url('uploads/images/products-images/'.$row->image_link);?>" alt="<?=$row->name?>"/>
                        </figure>
                        <article>
                          <h3><?=$row->name?></h3>
                          <div class="bl-price">
                            <?php if($row->price):?>
                              <?php if($row->discount):?>
                                <p class="des">
                                  <?=number_format($row->price - $row->discount)?>đ
                                  <span class="discount"><?=number_format($row->price)?>đ</span>
                                </p>
                              <?php else:?>
                                <p class="des"><?=number_format($row->price)?>đ</p>
                              <?php endif;?>
                            <?php else:?>
                              <p class="des">Liên hệ</p>
                            <?php endif;?>
                          </div>
                        </article>
                    </a>
                  </li>
                  <?php endforeach;?>
<!--                   <li class="text-center">
                      <a href="#" class="btn-text-link"><u>Xem thêm</u></a>
                  </li> -->
              </ul>
          </div>
      </div>
  </div>
  <?php endif;?>

  <?php if(isset($banner_sp1) && $banner_sp1):?>
  <?php foreach($banner_sp1 as $row):?>
  <div class="block30 block-sidebar">
    <div class="block-content">
      <div class="hvr-animate-translate hvr-zoom-banner-image">
        <a href="<?=$row->link?>"><img src="<?=base_url('uploads/images/news/'.$row->image_link);?>" /></a> 
      </div>
    </div>
  </div>
  <?php endforeach;?>
  <?php endif;?>
</div>
