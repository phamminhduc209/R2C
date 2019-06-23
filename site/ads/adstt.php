      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-col-sidebar">
          <?php if(isset($tt_left1) && $tt_left1):?>
          <div class="block30 block-sidebar">
                <div class="block-module block-links-sidebar">
                    <div class="block-title">
                        <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> 
                          <?=($infosetting->name_block_sidebar1)?$infosetting->name_block_sidebar1:$infotintuc1->name?></h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <?php foreach($tt_left1 as $row):?>
                            <li>
                              <a href="<?=site_url($row->url.'-t'.$row->id)?>" title="<?=$row->name?>">
                                  <figure class="thumb">
                                    <img src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name?>"/>
                                  </figure>
                                  <article><h3><?=$row->name?></h3></article>
                              </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
          </div>
          <?php endif;?>

          <?php if(isset($tt_left2) && $tt_left2):?>
          <div class="block30 block-sidebar">
                <div class="block-module block-links-sidebar">
                    <div class="block-title">
                        <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> 
                          <?=($infosetting->name_block_sidebar2)?$infosetting->name_block_sidebar2:$infotintuc2->name?></h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <?php foreach($tt_left2 as $row):?>
                            <li>
                              <a href="<?=site_url($row->url.'-t'.$row->id)?>" title="<?=$row->name?>">
                                  <figure class="thumb">
                                    <img src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name?>"/>
                                  </figure>
                                  <article><h3><?=$row->name?></h3></article>
                              </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
          </div>
          <?php endif;?>
        <?php if(isset($banner_tt) && $banner_tt):?>
        <?php foreach($banner_tt as $row):?>
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