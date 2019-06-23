<?php if(isset($ykien) && $ykien):?>
<div class="block block-title-cm block-testimonial">
  	<div class="container">
    	<div class="block-title"><h2>Cảm nhận về Ispace</h2></div>
	    <div class="block-content">
	      	<div class="owl-carousel owl-theme">
	      		<?php foreach($ykien as $row):?>
	            <div class="item">
	              	<figure><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/slide/'.$row->image_link)?>" alt="<?=$row->name?>"/></figure>
	              	<article>
		                <p><strong><?=$row->chucvu?></strong></p>
		                <p><em><?=$row->ykien?></em></p>
		                <p><strong><?=$row->name?></strong></p>
	              	</article>
	            </div>
	        	<?php endforeach;?>
	      	</div>

	      	<script type="text/javascript">
	      		$(document).ready(function(){
	        		$('.block-testimonial .owl-carousel').owlCarousel({
	          			pagination:true,
	          			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			          	responsive:{
			              	0:{
			                  	items:1
			              	},
			              	600:{
			                  	items:1
			              	},
			              	1000:{
			                  	items:1
			              	}
		          		}
	      			});
	      		});
	      	</script>
	    </div>
  	</div>
</div>
<?php endif;?>