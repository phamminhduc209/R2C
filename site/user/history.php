<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<?php if(isset($user_login) && $user_login):?>
<!-- Lịch sử giao dịch -->
<div class="block block-title-cm container block-history">
  <div class="block block-title text-center"><h1>Lịch sử giao dịch</h1></div>
  <div class="block-content table-responsive">
    <table class="table">
    <thead>
      <tr>
        <th>Đơn hàng</th>
        <th>Nhà mạng</th>
        <th>Mệnh giá</th>
        <th>Số lượng</th>
        <th>Số tiền</th>
        <th>Ngày giao dịch</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($history) && $history):?>
        <?php foreach($history as $row):?>
        <?php 
	        if($this->menhgia_model->get_info($row->id_menhgia)){
	        	$menhgia = $this->menhgia_model->get_info($row->id_menhgia);
		        if($this->nhamang_model->get_info($menhgia->catalog_id)){
		        	$nhamang = $this->nhamang_model->get_info($menhgia->catalog_id);
		        }
	        }
        ?>
        <?php if(isset($menhgia) && $menhgia && isset($nhamang) && $nhamang):?>
        <tr>
          <td>#<?=str_pad($row->id, 6, '0', STR_PAD_LEFT)?></td>
          <td><?=$nhamang->name?></td>
          <td><?=number_format($menhgia->price)?>đ</td>
          <td><?=$row->qty?></td>
          <td><?=number_format($row->amount)?>đ</td>
          <td><?=get_date($row->created)?></td>
          <?php if($row->status == 0):?>
            <td class="cl-dangxl">Đang xử lý</td>
          <?php elseif($row->status == 1):?>
            <td class="cl-conthe">Thành công</td>
          <?php else:?>
            <td class="cl-hetthe">Không thành công</td>
          <?php endif;?>
        </tr>
	    <?php else:?>
	      <tr>
	        <td colspan="7" style="text-align: center;">Bạn chưa có giao dịch nào</td>
	      </tr>
	    <?php endif;?>
        <?php endforeach;?>
      <?php else:?>
      <tr>
        <td colspan="7" style="text-align: center;">Bạn chưa có giao dịch nào</td>
      </tr>
      <?php endif;?>

    </tbody>
  </table>
  </div>
</div>
<?php endif;?>