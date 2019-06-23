	<?php if(isset($banner_dmsp) && $banner_dmsp):?>
	<?php foreach($banner_dmsp as $row):?>
	<div class="block30 block-sidebar">
		<div class="block-content">
			<div class="hvr-animate-translate hvr-zoom-banner-image">
				<a href="<?=$row->link?>"><img src="<?=base_url('uploads/images/news/'.$row->image_link);?>" /></a>	
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<?php endif;?>