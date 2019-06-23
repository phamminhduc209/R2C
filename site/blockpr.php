<?php if(isset($blockpr) && $blockpr):?>
<section class="block block-static">
  <div class="container">
    <div class="row">
      <?php foreach($blockpr as $row):?>
      <div class="col-sm-4 col-xs-12 item">
        <figure>
          <img src="<?=base_url('uploads/images/slide/'.$row->image_link);?>" alt="<?=$row->name?>" />
        </figure>
        <article>
          <strong><?=$row->name?></strong>
          <p><?=$row->slogan?></p>
        </article>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>
<?php endif;?>