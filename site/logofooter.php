<?php if(isset($logodoitac) && $logodoitac):?>
<section class="block container block-brand-slider">
  <div class="owl-carousel owl-theme">
      <?php foreach($logodoitac as $row):?>
      <div class="item"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/doitac/'.$row->image_link)?>" alt="<?=$row->name?>"></div>
      <?php endforeach;?>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.block-brand-slider .owl-carousel').owlCarousel({
          margin:30,
          nav:true,
          navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
          responsive:{0:{items:2, margin:5},600:{items:3},1000:{items:8}}
        })
      });
  </script>
</section>
<?php endif;?>