<section class="block-title-cm block-lienhe block">
  <div class="container">
    <?php if($this->ngonngu != 'en'):?>
    <div class="block-title text-center">
      <h2 class="wow fadeInUp" data-wow-delay="0.3s"><?=$infosetting->name_block_tuvan?></h2>
      <p class="desc wow fadeInUp" data-wow-delay="0.6s"><?=$infosetting->intro_block_tuvan?></p>
    </div>
    <?php endif;?>
    <?php if($this->ngonngu == 'en' && $infosetting->ngonngu == 1):?>
    <div class="block-title text-center">
      <h2 class="wow fadeInUp" data-wow-delay="0.3s"><?=$infosetting->name_block_tuvan_en?></h2>
      <p class="desc wow fadeInUp" data-wow-delay="0.6s"><?=$infosetting->intro_block_tuvan_en?></p>
    </div>
    <?php endif;?>
    <div class="block-content wow fadeInUp" data-wow-delay="0.9s">
      <div class="row">
        <form class="block-form clearfix">
          <div class="form-group name col-sm-4 col-xs-12">
          <input type="text" class="form-control" name="name-nhanmail" placeholder="<?=lang('dkyhoten')?>">
          </div>
          <div class="form-group phone col-sm-4 col-xs-12">
          <input type="number" class="form-control" name="phone-nhanmail" placeholder="<?=lang('dkyphone')?>">
          </div>
          <div class="form-group mail col-sm-4 col-xs-12">
          <input type="text" class="form-control" name="email-nhanmail" placeholder="Email">
          </div>
          <div class="col-sm-12 col-xs-12 tc">
            <button type="button" class="btn btn-second btn-nhanmail"><?=lang('guilienhe')?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>