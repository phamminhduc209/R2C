<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block block-two-col container">
  <div class="block-page-common">
    <div class=" block-title">
      <h1 class="heading-primary darken"><?=lang('c_dathangdone')?></h1>
    </div>
  </div><!-- /block-page-common -->
  <div class="row">
    <div class="col-sm-8 col-xs-12">
      <div class="block-billing">
        <div class="block-title"><?=lang('c_tbtc')?></div>
        <div class="block-content">
          <div class="table cart-tbl">
            <?php if(!isset($user_login)):?>
            <?=$infosetting->dkthanhcong_en;?>
            <?php else:?>
            <?=$infosetting->dkthanhcong;?>
            <?php endif;?>
          </div>
          <div class="block-btn text-right">   
            <a href="<?=base_url()?>" title="Trở về trang chủ" class="btn btn-primary right"><i class="fa fa-long-arrow-right"></i> <?=lang('c_backhome')?></a>           
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12 block-col-right">
      <div class="block-billing-product">
        <div class="block-title"><?=lang('c_payment')?></div>
        <div class="block-content" style="padding: 10px 15px;">
          <h4><strong>THÔNG TIN KHÁCH HÀNG: </strong></h4>
          <p><span><?=lang('dkyhoten')?>: </span><strong><?=$thongtindone['user_name']?></strong></p>
          <p><span><?=lang('address')?>: </span><strong><?=$thongtindone['user_diachi']?></strong></p>
          <p><span><?=lang('phone')?>: </span><strong><?=$thongtindone['user_phone']?></strong></p>
          <p><span>Email: </span><strong><?=$thongtindone['user_email']?></strong></p>
          <p><span><?=lang('c_date')?>: </span><strong><?=get_date($thongtindone['created'], false)?></strong></p>
          <?php 
          if($thongtindone['other_address'] == 1):
          ?>
          <?php if($thongtindone['other_name'] != '' || $thongtindone['other_diachi'] != '' || $thongtindone['other_phone'] || $thongtindone['other_email']):?>
            <div class="block-title"><h3 class="heading-small" style="color: #fff; font-size: 14px;height: 36px; padding-top: 7px;font-weight: normal;"><strong>THÔNG TIN GIAO HÀNG </strong></h3></div>
            <?php if($thongtindone['other_name']):?>
              <p><span><?=lang('dkyhoten')?>: </span><strong><?=$thongtindone['other_name']?></strong></p>
            <?php endif;?>
            <?php if($thongtindone['other_diachi']):?>
              <p><span><?=lang('address')?>: </span><strong><?=$thongtindone['other_diachi']?></strong></p>
            <?php endif;?>
            <?php if($thongtindone['other_phone']):?>
              <p><span><?=lang('phone')?>: </span><strong><?=$thongtindone['other_phone']?></strong></p>
            <?php endif;?>
            <?php if($thongtindone['other_email']):?>
              <p><span>Email: </span><strong><?=$thongtindone['other_email']?></strong></p>
            <?php endif;?>
          <?php endif;?>
          <?php endif; ?>
          <?php if($thongtindone['company_name'] != '' || $thongtindone['company_diachi'] != '' || $thongtindone['company_mst']):?>
            <div class="block-title"><h3 class="heading-small"  style="color: #fff; font-size: 14px;height: 36px; padding-top: 7px;font-weight: normal;"><strong>THÔNG TIN XUẤT HÓA ĐƠN </strong></h3></div>
            <?php if($thongtindone['company_name']):?>
              <p><span><?=lang('dkyhoten')?>: </span><strong><?=$thongtindone['company_name']?></strong></p>
            <?php endif;?>
            <?php if($thongtindone['company_diachi']):?>
              <p><span><?=lang('address')?>: </span><strong><?=$thongtindone['company_diachi']?></strong></p>
            <?php endif;?>
            <?php if($thongtindone['company_mst']):?>
              <p><span>MST: </span><strong><?=$thongtindone['company_mst']?></strong></p>
            <?php endif;?>
          <?php endif;?>
        
          <?php if($thongtindone['message'] != ''):?>
            <p style="color: #06b7a4; font-weight: bold"><?=$thongtindone['message']?></p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.cart-ajax').html(0);
  });
</script>