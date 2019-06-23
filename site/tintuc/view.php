<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($baivietinfo) && $baivietinfo):?>
<!-- Bai viet -->
<?php if($baivietinfo->kieubaiviet == 0):?>
<div class="block block-two-col container ">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-col-main">
      <div class="block block-page-common block-dt-sales block-article-detail">
        <div class="block-title ">
          <?php if($this->ngonngu != 'en'):?><h1 class="heading-primary darken"><?=$baivietinfo->name?></h1><?php endif;?>
          <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
            <h1 class="heading-primary darken"><?=$baivietinfo->name_en?></h1>
          <?php endif;?>
        </div>
        <div class="block-content">
          <?php if($this->ngonngu != 'en'):?>
            <div class="block block-aritcle block-editor-content"><?=$baivietinfo->content?></div>
          <?php endif;?>
          <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
            <div class="block block-aritcle block-editor-content"><?=$baivietinfo->content_en?></div>
          <?php endif;?>
        </div>
      </div>
      <?php if(isset($spcungloai) && $spcungloai):?>
      <div class="block-page-common block-aritcle-related">
        <div class="block-title"><h2 class="heading-primary"><?=lang('bvlq')?></h2></div>
        <div class="block-content">
          <ul class="list">
            <?php foreach($spcungloai as $row):?>
              <?php if($this->ngonngu != 'en'):?>
                <li><h5><a href="<?=site_url($row->url.'-t'.$row->id)?>" title="<?=$row->name?>"><?=$row->name?></a></h5></li>
              <?php endif;?>
              <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
                <li><h5><a href="<?=site_url('en/'.$row->url_en.'-t'.$row->id)?>" title="<?=$row->name_en?>"><?=$row->name_en?></a></h5></li>
              <?php endif;?>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
      <?php endif;?>
    </div>
    <?php /* $this->load->view('site/giohang', $this->data) */?>
  </div>
</div>
<?php endif;?>
<!-- End bai viet -->
<!-- TRang -->
<?php if($baivietinfo->kieubaiviet == 1):?>
<div class="block block-two-col container ">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-col-main">
      <div class="block block-page-common block-dt-sales">
        <div class="block-title">
          <?php if($this->ngonngu != 'en'):?><h1 class="heading-primary darken"><?=$baivietinfo->name?></h1><?php endif;?>
          <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?><h1 class="heading-primary darken"><?=$baivietinfo->name_en?></h1><?php endif;?>
        </div>
        <div class="block-content">
          <?php if($this->ngonngu != 'en'):?>
            <div class="block block-aritcle block-editor-content"><?=$baivietinfo->content?></div>
          <?php endif;?>
          <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
            <div class="block block-aritcle block-editor-content"><?=$baivietinfo->content_en?></div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <?php /* $this->load->view('site/giohang', $this->data) */?>
  </div>
</div>
<?php endif;?>
<!-- End trang -->
<?php if($baivietinfo->kieubaiviet == 2):?>
<div class="alert alert-warning text-center">
  <strong>Cảnh báo!</strong> Bạn chưa có layout này. Vui lòng liên hệ <a href="https://iweb247.com/" class="alert-link">Iweb247.com</a>
</div>
<?php endif;?>
<?php if($baivietinfo->kieubaiviet == 3):?>
<div class="alert alert-warning text-center">
  <strong>Cảnh báo!</strong> Bạn chưa có layout này. Vui lòng liên hệ <a href="https://iweb247.com/" class="alert-link">Iweb247.com</a>
</div>
<?php endif;?>

<?php endif;?>

