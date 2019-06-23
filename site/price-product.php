<?php if(!$isEnb): ?>
<div class="price">
    <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
    <p class="price-sale"><?php echo number_format($row->price_sell); ?>đ</p>
    <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
        <p class="price-sale"><?php echo number_format($row->price_sell_2); ?>đ</p>
    <?php endif;?>
    <p class="price-menber">
        <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
        <span class="price-member"><?php echo number_format($row->member_price_sell); ?>đ</span>
        <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
        <span class="price-member"><?php echo number_format($row->member_price_sell_2); ?>đ</span>
        <?php endif;?>
        <span class="price-menber-info">
        <a href="#" title="" class="text-dk">(Giá thành viên)</a>
        <a href="#" title="" class="text-dk">(Đăng Ký)</a>
        </span>
    </p>
</div>
<?php else: ?>
<div class="price">
    <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
        <p class="price-sale package"><?php echo number_format($row->member_price_sell); ?>đ</p>
    <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
        <p class="price-sale package"><?php echo number_format($row->member_price_sell_2); ?>đ</p>
    <?php endif;?>
    <p class="price-menber">
        <?php if($row->price_sell > 0 && $row->member_price_sell > 0): ?>
        <span class="price-member package"><?php echo number_format($row->price_sell); ?>đ</span>
        <?php elseif($row->price_sell_2 > 0 && $row->member_price_sell_2 > 0): ?>
        <span class="price-member package"><?php echo number_format($row->price_sell_2); ?>đ</span>
        <?php endif;?>
        <span class="price-menber-info">
        <a href="javascript:void(0)" title="Giá thường" class="text-dk package">(Giá thường)</a>
        </span>
    </p>                                    
</div>
<?php endif; ?>