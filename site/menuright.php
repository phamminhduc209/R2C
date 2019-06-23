<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-col-sidebar">
  <?php /* if(isset($tt_left1) && $tt_left1):?>
  <div class="block-sidebar block-user-countdown">
    <div class="block-module block-links-sidebar">
      <?php if($this->ngonngu != 'en'):?>
      <div class="block-content">
          <div class="block-title">
            <h2><i class="fa fa-bar-chart" aria-hidden="true"></i> <?=($infosetting->name_block_sidebar1)?$infosetting->name_block_sidebar1:$infotintuc1->name?></h2>
          </div>
          <?php foreach($tt_left1 as $row):?>
          <p><i class="fa fa-arrow-circle-o-right"></i> <a href="<?=site_url($row->url.'-t'.$row->id)?>"><?=$row->name?></a> </p>
          <?php endforeach;?>
      </div>
      <?php endif;?>
      <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
      <div class="block-content">
          <div class="block-title">
            <h2><i class="fa fa-bar-chart" aria-hidden="true"></i> <?=($infosetting->name_block_sidebar1_en)?$infosetting->name_block_sidebar1_en:$infotintuc1->name_en?></h2>
          </div>
          <?php foreach($tt_left1 as $row):?>
          <p><i class="fa fa-arrow-circle-o-right"></i> <a href="<?=site_url('en/'.$row->url_en.'-t'.$row->id)?>"><?=$row->name_en?></a> </p>
          <?php endforeach;?>
      </div>
      <?php endif;?>
    </div>
  </div>
  <?php endif; */ ?>

  <?php if(isset($tt_left2) && $tt_left2):?>
  <div class="block-sidebar">
      <?php if($this->ngonngu != 'en'):?>
      <div class="block-module block-links-sidebar">
          <div class="block-title">
              <h2><i class="fa fa-newspaper-o"></i> <?=($infosetting->name_block_sidebar2)?$infosetting->name_block_sidebar2:$infotintuc2->name?></h2>
          </div>
          <div class="block-content">
              <ul class="list">
                  <?php foreach($tt_left2 as $row):?>
                  <li>
                    <a href="<?=site_url($row->url.'-t'.$row->id)?>" title="<?=$row->name?>">
                        <p class="thumb">
                          <?php if($row->image_link):?>
                          <img src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name?>">
                          <?php else:?>
                          <img src="<?=public_url('site/images/demoiweb247.png');?>" alt="<?=$row->name?>"/>
                          <?php endif;?>
                        </p>
                        <h3><?=$row->name?></h3>
                    </a>
                  </li>
                  <?php endforeach;?>
              </ul>
          </div>
      </div>
      <?php endif;?>
      <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
      <div class="block-module block-links-sidebar">
          <div class="block-title">
              <h2><i class="fa fa-newspaper-o"></i> <?=($infosetting->name_block_sidebar2_en)?$infosetting->name_block_sidebar2_en:$infotintuc2->name_en?></h2>
          </div>
          <div class="block-content">
              <ul class="list">
                  <?php foreach($tt_left2 as $row):?>
                  <li>
                    <a href="<?=site_url('en/'.$row->url_en.'-t'.$row->id)?>" title="<?=$row->name_en?>">
                        <p class="thumb">
                          <?php if($row->image_link):?>
                          <img src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name_en?>">
                          <?php else:?>
                          <img src="<?=public_url('site/images/demoiweb247.png');?>" alt="<?=$row->name?>"/>
                          <?php endif;?>
                        </p>
                        <h3><?=$row->name_en?></h3>
                    </a>
                  </li>
                  <?php endforeach;?>
              </ul>
          </div>
      </div>
      <?php endif;?>
  </div>
<?php endif;?>
<?php if(isset($hotrotructuyen) && $hotrotructuyen):?>
  <div class="block-sidebar block-sidebar-contact-info">
    <div class="block-module block-links-sidebar">
      <?php if($this->ngonngu != 'en'):?>
		  <div class="block-title"><h2><i class="fa fa-newspaper-o"></i> <?=$infosetting->name_block_hotro?></h2></div>	
      <?php endif;?>
      <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
      <div class="block-title"><h2><i class="fa fa-newspaper-o"></i> <?=$infosetting->name_block_hotro_en?></h2></div>
      <?php endif;?>
      <div class="block-content clearfix">
        <?php foreach($hotrotructuyen as $row):?>
      	<div class="item">
      		<i class="fa fa-user" aria-hidden="true"></i> 
      		<div class="content">
            <?php if($this->ngonngu != 'en'):?><b><?=$row->chucdanh?></b><?php endif;?>
            <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?><b><?=$row->chucdanh_en?></b><?php endif;?>
      			Phone: <span class="txt-number"><?=$row->sdt?></span> <?=$row->name?>
      		</div>
      	</div>
        <?php endforeach;?>     	      	
      </div>
    </div>
  </div>
<?php endif;?>
</div>
