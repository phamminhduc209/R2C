<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block block-title-cm user-page">
<div class="container">
<div class="tablist-account-page row">
  <ul class="nav nav-stacked col-md-3" role="tablist">
    <li class="user-info">
       <div class="user-avatar"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/user-avatar.png')?>" alt="Avatar_user"/></div>
        <p>Tài khoản của</p>
        <h4><?=$user_login->name?></h4>
    </li>
    <li><a href="<?=base_url('thong-tin-tai-khoan')?>"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
    <li class="active"><a href="<?=base_url('thong-tin-tai-khoan')?>"><i class="fa fa-clock-o"></i> Lịch sử đơn hàng</a></li>
    <li><a href="javascript:;" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
  </ul>
   <!-- Tab panes -->
   <div class="tab-content order-detail col-md-9">
      <div class="block-title">
        <h1 class="heading-small darken">Chi tiết đơn hàng #<?=str_pad($donhang->id, 6, '0', STR_PAD_LEFT)?> - 
          <?php if($donhang->status == 0):?>
          <span class="waitting"><i class="fa fa-refresh fa-spin"></i> Đang xử lý</span>
          <?php elseif($donhang->status == 1):?>
          <span><i class="fa fa-check"></i> Giao hàng thành công</span>
          <?php else:?>
          <span class="disabled"><i class="fa fa-times"></i> Đơn hàng đã hủy</span>
          <?php endif;?>
        </h1>
        <div class="sub-heading">Ngày đặt hàng: <?=get_date($donhang->created)?></div>
      </div>
      <div class="block-content row">
        <div class="form-group col-sm-12">
          <?php if($donhang->status == 0 || $donhang->status == 1):?>
            <?php if($donhang->message): ?>
          <label>Ghi chú</label>
          
          <p class="quotes"><?=$donhang->message?></p>
          <?php endif; ?>
          <?php else:?>
          <label class="disabled">Lý do hủy đơn hàng</label>
          <p class="quotes disabled"><?=$donhang->mess?></p>
          <?php endif;?>
        </div>
        <div class="form-group col-sm-6">
          <label>Địa chỉ người nhận</label>
          <?php if($donhang->other_address == 1):?>
          <div class="quotes">
            <p><span>Tên người nhận: </span> <strong><?=$donhang->other_name?></strong></p>
            <p><span>Địa chỉ: </span> <strong><?=$donhang->other_diachi?></strong></p>
            <p><span>Điện thoại: </span> <strong><?=$donhang->other_phone?></strong></p>
            <p><span>Email: </span> <strong><?=$donhang->other_email?></strong></p>
      	  </div>
          <?php else:?>
          <div class="quotes">
            <p><span>Tên người nhận: </span> <strong><?=$donhang->user_name?></strong></p>
            <p><span>Địa chỉ: </span> <strong><?=$donhang->user_diachi?></strong></p>
            <p><span>Điện thoại: </span> <strong><?=$donhang->user_phone?></strong></p>
            <p><span>Email: </span> <strong><?=$donhang->user_email?></strong></p>
          </div>
          <?php endif;?>
        </div>  
        <div class="form-group col-sm-6">
          <label>Hình thức thanh toán</label>
          <div class="quotes"><p><strong><?=$donhang->payment?></strong></p></div>
        </div>  
        <div class="clearfix block10"></div>
        <div class="form-group col-sm-12">
          <label>Sản phẩm được đặt</label>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 40%;">Sản phẩm</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <!-- <th>Coupon giảm giá</th> -->
                  <th>Tổng tiền</th>
                </tr>
              </thead>
              <tbody>
              <?php if(isset($chitietdonhang) & $chitietdonhang):?>
              <?php foreach($chitietdonhang as $row):?>
              <?php if($this->product_model->get_info($row->product_id)):?>
              <?php $product = $this->product_model->get_info($row->product_id);?>
                <tr>
                	<td>
                		<div class="product-image">
                    <?php if($product->type == 1): ?>
                		<img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?= base_url('uploads/images/products-images/'.$product->image_link)?>">
                    <?php else: ?>
                    <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?= base_url('uploads/images/r2c/'.$product->image_link)?>">
                    <?php endif;?>
                		</div>
                    	<h5><?=$product->name?></h5>
                    	<!-- <a href="#" class="btn btn-xs">mua lại</a> -->
                    </td>
                    <td class="text-center">
                      <p class="product-price" style="text-align: right;"><?=number_format($row->amount/$row->qty)?></p>
                    </td>
                    <td class="text-center"><?=$row->qty?></td>
<!--                     <td class="text-center">
                      <?php if($product->discount > 0 && $product->price > 0):?>
                        <p class="product-price"><?=number_format($product->discount)?>đ</p>
                      <?php else:?>
                        ---
                      <?php endif;?>
                    </td> -->
                    <td class="text-right"><?=number_format($row->amount)?></td>
                </tr>
              <?php endif;?>
              <?php endforeach;?>
              <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>      
        <div class="form-group col-sm-12">   
  				<div class="total-price-wrap clearfix">
            <div class="col-sm-6">
              <label>Sản phẩm dùng thử</label>
              <?php if($donhang->sanphamdungthu):?>
                <div><?=$donhang->sanphamdungthu?></div>
              <?php else:?>
                <div>Không có sản phẩm dùng thử</div>
              <?php endif;?>
            </div>
  					<div class="col-sm-6">
              <?php $giam = str_replace("đ", "", str_replace(",", "", $donhang->giam)); ?>
  						<p><span>Tạm tính: </span><strong class="price"><?=number_format($donhang->amount + $giam - $donhang->package_price)?></strong></p>
  						<p><span>Phí vận chuyển: </span><strong class="price"><?=($donhang->ship > 0)? '+ '.number_format($donhang->ship).'đ':'Miễn phí'?></strong></p>
              <?php if($donhang->giam):?>
              <p><span>Khuyến mãi: </span><strong class="price">- <?=$donhang->giam?></strong></p>              
              <?php endif;?>
              <?php if($donhang->package_id > 0): 
                $package = $this->package_model->get_info($donhang->package_id);?>
                         
               <p><span><?php echo $package->name; ?> </span><strong class="price"><?php echo number_format($donhang->package_price); ?></strong></p>          
            <?php endif; ?>
  						<hr class="hr-xs">
  						<p><span class="total text--md">Tổng cộng: </span><strong class="price price-total text--md"><?=number_format($donhang->amount + $giam + $donhang->ship - $giam)?></strong></p>
  					</div>
  				</div>
        </div>
      </div>
   </div>
</div>
</div>
</div>