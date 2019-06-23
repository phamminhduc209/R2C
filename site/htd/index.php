<div id="pageloader"><div class="spinner"></div></div>
<?php $this->load->view('site/slide', $this->data);?>



<section class="block container block-title-cm block-banner-homepage" style="margin-top: 30px">
<div class="row">
    <div class="col-sm-4 block-countdown ">
      <a href="<?=$infosetting->linkqc1?>">
      <div class="inner">
        <div class="block-title text-center">
          <!-- <h2 class="heading-secondary"><?=$infosetting->name_about?><span><?=$infosetting->intro_about?></span></h2> -->
          <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting->bannerqc1);?>" alt="a">
        </div>
      </div>
      </a>
      <?php 
      $infosetting->flash_sale = time() >= $infosetting->flash_sale_start ? $infosetting->flash_sale : strtotime('1970/01/01');
      ?>
        <div id="clock" class="clearfix"></div>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#clock').countdown('<?=date('Y/m/d H:i:s',$infosetting->flash_sale); ?>', function(event){
                $(this).html(event.strftime('<div>%D<span>Ngày</span></div> <div>%H<span>Giờ</span></div> <div>%M<span>Phút</span></div> <div>%S<span>Giây</span></div>'));
            });
          });
        </script>
    </div>
    <div class="col-sm-8 banner">
      <div class="row">
          <div class="block30 col-sm-12 item">
            <a href="<?=$infosetting->link_about?>">
              <img class="lazyload hidden-xs" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting->img_video);?>">
              <img class="lazyload hidden-sm hidden-md hidden-lg" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting->img_video_mobile);?>">
            </a>
          </div>
          <div class="col-sm-6 col-xs-12 two-item">
            <a href="<?=$infosetting->link_img_qc1?>">
              <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting->banner_flash1);?>">
            </a>
          </div>
          <div class="col-sm-6 col-xs-12 two-item">
            <?php if($infosetting->video):?>
              <iframe width="363" height="205" src="<?=$infosetting->video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php else:?>
              <a href="<?=$infosetting->link_img_qc2?>">
                <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting->banner_flash2);?>">
              </a>
            <?php endif;?>
          </div>
      </div>
    </div>
</div>
</section>


<section class="block container block-title-cm block-layout-three-col homepage">
<!-- <hr> -->
<div class="row">
        <div class="col-md-12 main-col block-article">
          <?php if(isset($list_dmnb) && $list_dmnb):?>
          <div class="block-title">
            <h2 class="heading-primary heading-line half darken"><?=$infosetting->name_block_mt?></h2>
          </div>
          <div class="block-content">
            <?php foreach($list_dmnb as $row):?>
            <div class="item block-item">
              <a href="<?=base_url($row->url.'-c'.$row->id)?>">
                <figure>
                  <?php if($row->image_link):?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/catalogs/'.$row->image_link);?>" alt="<?=$row->name?>">
                  <?php else:?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/fa-image.png');?>" alt="<?=$row->name?>">
                  <?php endif;?>
                  <figcaption><h4><?=$row->name?></h4></figcaption>
                </figure>
              </a>
            </div>
            <?php endforeach;?>
          </div>
          <?php endif;?>
        </div>       
    <?php /* $this->load->view('site/giohang', $this->data) */ ?>
</div>
</section>
