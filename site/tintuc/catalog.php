<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($catalog) && $catalog):?>
<!-- layout work shop -->
<?php if($catalog->loai == 'workshop'):?>
<?php if(count($this->catalognew_model->menucon($catalog->id)) > 0):?>
<div class="alert alert-warning text-center">
  <strong>Cảnh báo!</strong> Bạn chưa có layout này. Vui lòng liên hệ <a href="https://iweb247.com/" class="alert-link">Iweb247.com</a>
</div>
<?php else:?>
<div class="alert alert-warning text-center">
  <strong>Cảnh báo!</strong> Bạn chưa có layout này. Vui lòng liên hệ <a href="https://iweb247.com/" class="alert-link">Iweb247.com</a>
</div>
<?php endif;?>
<?php endif;?>
<!-- End layout workshop -->

<!-- Layout dich vu(Talk show) -->
<?php if($catalog->loai == 'dichvu'):?>
<div class="alert alert-warning text-center">
  <strong>Cảnh báo!</strong> Bạn chưa có layout này. Vui lòng liên hệ <a href="https://iweb247.com/" class="alert-link">iweb247.com</a>
</div>
<?php endif;?>
<!-- End layout dich vu(Talk show) -->

<!-- End layout tin tuc -->
<?php if($catalog->loai == 'tintuc'):?>
<div class="block block-two-col container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-col-main">
      <div class="block-page-common block-sales">
        <div class="block-title">
          <?php if($this->ngonngu != 'en'):?><h1 class="heading-primary"><?=$catalog->name?></h1><?php endif;?>
          <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?><h1 class="heading-primary"><?=$catalog->name_en?></h1><?php endif;?>
        </div>
        <div class="block-content">
        <?php if(isset($list) && $list):?>
        <?php foreach($list as $row):?>
          <div class="item">
            <?php if($this->ngonngu != 'en'):?>
            <div class="inner clearfix">
              <div class="thumb">
                <a href="<?=site_url($row->url.'-t'.$row->id)?>">
                  <?php if($row->image_link):?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name?>">
                  <?php else:?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/demoiweb247.png')?>" alt="<?=$row->name?>">
                  <?php endif;?>
                </a>
              </div>
              <div class="des">
                <h4><a href="<?=site_url($row->url.'-t'.$row->id)?>"><?=$row->name?></a></h4>
                <p class="date-post"><i class="fa fa-calendar"></i> <?=get_date($row->created, false)?></p>
                <p class="description"><?=$row->intro?></p>
              </div>
            </div>
            <?php endif;?>
            <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
            <div class="inner clearfix">
              <div class="thumb">
                <a href="<?=site_url('en/'.$row->url_en.'-t'.$row->id)?>">
                  <?php if($row->image_link):?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name_en?>">
                  <?php else:?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/demoiweb247.png')?>" alt="<?=$row->name_en?>">
                  <?php endif;?>
                </a>
              </div>
              <div class="des">
                <h4><a href="<?=site_url('en/'.$row->url_en.'-t'.$row->id)?>"><?=$row->name_en?></a></h4>
                <p class="date-post"><i class="fa fa-calendar"></i> <?=get_date($row->created, false)?></p>
                <p class="description"><?=$row->intro_en?></p>
              </div>
            </div>
            <?php endif;?>
          </div>
        <?php endforeach;?>
        <?php endif;?>
        </div>
      </div>
      <nav class="block-pagination"><?=$phantrang?></nav>
    </div>
    <?php /* $this->load->view('site/menuright.php', $this->data); */ ?>
  </div>
</div>
<?php endif;?>
<!-- End layout tin tuc -->

<?php endif;?>