<?php if(isset($slide_list_home) && $slide_list_home): ?>
  <div id="myCarousel" class="carousel slide block hidden-xs" data-ride="carousel" data-interval="7000">
    <ol class="carousel-indicators">
      <?php foreach($slide_list_home as $key=>$slide):?>
      <li data-target="#myCarousel" data-slide-to="<?=$key?>" class="<?=($key == 0)?'active':''?>"></li>
      <?php endforeach;?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php foreach($slide_list_home as $key=>$slide):?>       
      <div class="item <?=($key == 0)?'active':''?>">
        <a href="<?=($slide->link)?$slide->link:'#'?>">
        <img src="<?=base_url('uploads/images/slide/'.$slide->image_link)?>" alt="<?=$slide->name?>">
        </a>
      </div>
      <?php endforeach;?>
    </div>    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
    </a>
  </div>
<?php endif;?>
<?php if(isset($slide_list_home) && $slide_list_home): ?>
  <div id="myCarouselmobile" class="carousel slide block hidden-sm hidden-md hidden-lg" data-ride="carousel" data-interval="7000">   
    <?php if(count($slide_list_home) > 1): ?>
    <ol class="carousel-indicators">
      <?php foreach($slide_list_home as $key=>$slide):?>
      <li data-target="#myCarouselmobile" data-slide-to="<?=$key?>" class="<?=($key == 0)?'active':''?>"></li>
      <?php endforeach;?>
    </ol> 
  <?php endif; ?>
    <div class="carousel-inner" role="listbox">
      <?php foreach($slide_list_home as $key=>$slide):?>
      <div class="item <?=($key == 0)?'active':''?>">
        <a href="<?=($slide->link)?$slide->link:'#'?>">
        <img src="<?=base_url('uploads/images/slide/'.$slide->image_link_mobile)?>" alt="<?=$slide->name?>">
        </a>
      </div>
      <?php endforeach;?>
    </div>
    <a class="left carousel-control" href="#myCarouselmobile" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#myCarouselmobile" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
    </a>
  </div>
<?php endif;?>

<script type="text/javascript">
  $('#myCarousel').mouseenter(function(){
    $(".fa-angle-left").css({'opacity': '1', 'left': '10px'});
    $(".fa-angle-right").css({'opacity': '1', 'right': '10px'});
  }).mouseleave(function(){
    $(".fa-angle-left").css("opacity", 0);
    $(".fa-angle-right").css("opacity", 0);
  });
  $('#myCarouselmobile').mouseenter(function(){
    $(".fa-angle-left").css({'opacity': '1', 'left': '10px'});
    $(".fa-angle-right").css({'opacity': '1', 'right': '10px'});
  }).mouseleave(function(){
    $(".fa-angle-left").css("opacity", 0);
    $(".fa-angle-right").css("opacity", 0);
  });
</script>