<div class="shop-cart-sidebar <?php if($total_items == 0): ?>shop-cart-sidebar-empty<?php endif; ?>">
    <?php if($total_items > 0): ?>
    <div class="add-to-cart--form">
        <div class="inner">
            <div class="cart-inner">
                <div class="cart-items">
                    <?php 
                    $tonghoadon = 0;
                    foreach($cartArr as $kcart => $vCart): 
                        if(!empty($vCart)):
                           $totalSpLoai = 0;
                            foreach($vCart as $spInCart){
                              $totalSpLoai+=$spInCart['qty'];
                            }
                    ?>
                    <div class="cart">
                        <div class="cart-header" data-tab="<?php echo $kcart; ?>">
                            <h2><?php echo $kcart == 'htd' ? "HTD - Hàng tiêu dùng" : "R2C - Ready To Cook"; ?> [<?php echo $totalSpLoai; ?>]</h2>
                            <span id="span_total_<?php echo $kcart; ?>"></span>
                        </div>
                        <div class="cart-main" tab="<?php echo $kcart; ?>">
                            <div class="cart-item">
                                <?php
                                
                                    $tongHoaDonTheoLoai = 0;
                                    foreach($vCart as $row):
                                        $tonghoadon += $row['subtotal'];     
                                        $tongHoaDonTheoLoai += $row['subtotal'];
                                ?>
                                <div class="form-group product-list">
                                    <ul>
                                        <li>
                                            <?php if($row['product_type'] == 1): ?>
                                            <img src="<?=base_url('uploads/images/products-images/'.$row['image_link']);?>" alt="<?=$row['image_link']?>">
                                            <?php else :?>
                                            <img src="<?=base_url('uploads/images/r2c/'.$row['image_link']);?>" alt="<?=$row['image_link']?>">
                                            <?php endif; ?>
                                            <div class="content">
                                                <h5 class="title"><a target="_blank" href="<?php echo site_url($row['url'].'-sp'.$row['product_id']); ?>"><?=$row['name']?>
                                                    <?php if($row['product_type'] == 2){
                                                      echo $row['khau_phan'] == 1 ? "[2 người]" : '[2-4 người]';
                                                    } ?>
                                                  </a></h5>
                                                <?php if($row['id'] != $this->idGift): ?>
                                                  <div class="qty form-inline">
                                                    <div class="form-group">
                                                      <?php if($this->uri->rsegment(1) != 'order' && $this->uri->rsegment(2) != 'checkout'):?>
                                                      
                                                      <input type="number" class="form-control" data-update="<?=$row['id']?>" data-rowid="<?=$row['rowid']?>" data-qtycu="<?=$row['qty']?>" value="<?=$row['qty']?>" min="1" onchange="updateqty($(this))">
                                                    
                                                      <?php else:?>
                                                        <b><?=$row['qty']?></b>
                                                      <?php endif;?>
                                                    </div>
                                                  </div>x
                                                  <?php if($row['product_type'] == 1):?>

                                                  <?php if($row['discount'] > 0):?>
                                                    <div class="price" style="font-weight: normal;"><?=number_format($row['price'])?></div>
                                                  <?php else:?>
                                                    <div class="price" style="font-weight: normal;"><?=number_format($row['price_goc'])?></div>
                                                  <?php endif;?>
                                                <?php else: ?>
                                                  <div class="price" style="font-weight: normal;"><?=number_format($row['price'])?></div>
                                                <?php endif;?>
                                                  = <?=number_format($row['subtotal'])?>
                                                  <?php endif; ?>                                       
                                            </div>
                                            <?php if($this->uri->rsegment(1) != 'order' && $this->uri->rsegment(2) != 'checkout'):?>
                                              <?php if($row['id'] != $this->idGift): ?>
                                              <button class="delete" data-qty="<?=$row['qty']?>" data-delete="<?=$row['id']?>" data-idrow="<?=$row['rowid']?>" onclick="deleteqty($(this))">Xóa</button>
                                              <?php endif; ?>
                                              <?php endif;?>
                                        </li>
                                       
                                    </ul>                                        
                                </div>
                                <?php 
                                    endforeach;                               
                                ?>                              
                            </div>
                            <div class="cart-price-total">                                 
                                <?php if($kcart == 'htd'): ?>
                                <p class="buy-add text-right" style="margin-bottom: 0"><a href="/san-pham-c224">Mua thêm</a></p>
                                <?php else: ?>
                                    <p class="buy-add text-right" style="margin-bottom: 0"><a href="<?php echo base_url('r2c'); ?>">Mua thêm</a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                     endif;
                     endforeach; ?>
                     <div class="cart">
                        <div class="cart-header" tab="mt">
                            <h2>Mẫu thử [<?php echo count($this->session->userdata('quatang')); ?>]</span>
                        </div>
                        <div class="cart-main" tab="mt">
                            <div class="cart-item">         
                            <?php 
                           // var_dump($listnhanqua);die;
                            ?>                       
                                <?php if($tonghoadon >= 300000): ?>
                                <div class="form-group cart-gif-list">
                                    <h4 class="dkqdmm">  
                                      <?php if($soluongqua>0): ?>
                                      Bạn được chọn <?php echo $soluongqua; ?> sản phẩm dùng thử.<br> <br>           
                                      <?php endif; ?>
                                       <?php if(!empty($this->session->userdata('quatang'))):?>              
                                        <p>Danh sách sản phẩm dùng thử:</p>
                                        <?php endif; ?>
                                      </h4>
                                      <ol class="quatang">
                                        <?php if(!empty($this->session->userdata('quatang'))):?>
                                          <?php foreach($this->session->userdata('quatang') as $row):?>
                                          <li><a href="javascript:;"><?=$row['name']?></a><span onclick="deletequa($(this))" data-iddung="<?=$row['id']?>">Xóa</span></li>
                                          <?php endforeach;?>
                                        <?php else:?>Chưa có sản phẩm dùng thử <?php endif;?>
                                      </ol>
                                      <a class="quat" href="<?=base_url('qua-tang')?>"><i class="fa fa-gift"></i> Xem và chọn mẫu thử</a>
                                </div>
                                <?php else: ?>
                                  <h4 class="dkqdmm" style="color: red">Bạn sẽ nhận được số lượng mẫu thử theo giá trị thùng hàng từ 300K</h4>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php if(!$isCheckout): ?>
                <div class="cartfix">
                <?php endif; ?>
                <?php
                $ship_fee = $this->session->userdata('ship_fee') ? $this->session->userdata('ship_fee') : 0;
                $package_price = 0;
                $isPackage = $this->session->userdata('enb_package_id') > 0 ? true : false;
                $chiet_khau = ceil(($tonghoadon*$phantramCk)/100);
                ?>
                    <div class="cart_payment">
                      <div class="cart-total">
                          <p>TỔNG CỘNG</p>
                          <p class="price"><?php echo number_format($tonghoadon); ?> VNĐ</p>
                      </div>
                      <?php if($phantramCk > 0): ?>
                      <div class="cart-total">
                          <p>Chiết khấu <?php echo $phantramCk; ?>%</p>                          
                          <p class="price"><?php echo number_format($chiet_khau); ?> VNĐ</p>
                      </div>
                      <?php endif; ?>
                      <?php if(!$isPackage && !$isEnb): ?>
                      <p class="text-primary-color text-xs"><i>Với mức giá thành viên, Tiết kiệm thêm 3% cho đơn hàng từ 300K</i></p>
                      <?php endif; ?>
                      <div class="cart-total cart-tax-ship">
                          <p>Phí giao hàng</p>
                          <p class="price text-normal"><?php echo number_format($ship_fee); ?> VNĐ</p>
                      </div>                     
                      <?php if(!$isPackage && !$isEnb): ?>
                      <p class="text-primary-color text-xs"><i>Miễn phí giao hàng khi là thành viên</i></p>
                      <?php else: 
                        $packageInfo = $this->session->userdata('enb_package_info');
                        if(!empty($packageInfo)):
                          $package_price = $packageInfo->price;          
                        
                      ?>
                      <div class="cart-total">
                          <p><?php echo $packageInfo->name; ?></p>                          
                          <p class="price"><?php echo number_format($packageInfo->price); ?> VNĐ</p>
                      </div>
                      <?php 
                    endif;
                    endif; ?>
                      <div class="cart-total">
                          <p style="color: #06b7a4">TỔNG THANH TOÁN</p>                          
                          <p class="price text-secondary-color"><?php echo number_format($tonghoadon + $ship_fee + $package_price - $chiet_khau); ?> VNĐ</p>
                      </div>
                    </div>
                  <?php if(!$isCheckout): ?>
                    <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-block btn_ttoan">Thanh toán</a>
                </div>
                  <?php endif; ?>
            </div>
        </div>
    </div>
    <?php else: ?>
        <div class="shop-cart-empty">
            <div class="shop-cart-empty-container">
                <div class="empty-text">Giỏ hàng rỗng.<!-- <br>Vui lòng mua sản phẩm! --></div>
                <svg class="svg-drawing empty-bag" viewBox="0 0 44 44">
                    <g fill-rule="evenodd">
                        <path d="M3.986 12.31L2.028 37.853c-.071.927.593 1.645 1.514 1.645l26.463-.019c.936 0 1.639-.74 1.595-1.676L30.41 12.28c-.044-.972-.877-1.767-1.846-1.767H5.916c-.973 0-1.855.818-1.93 1.799zm-1.994-.152c.155-2.022 1.904-3.646 3.924-3.646h22.648c2.038 0 3.75 1.635 3.845 3.674l1.19 25.523a3.572 3.572 0 0 1-3.592 3.77l-26.464.018c-2.087.001-3.67-1.71-3.51-3.797l1.959-25.542z" fill-rule="nonzero"></path>
                        <path d="M9.95 18.333c1.502 0 2.719-1.236 2.719-2.762 0-1.525-1.217-2.761-2.719-2.761-1.5 0-2.718 1.236-2.718 2.761 0 1.526 1.217 2.762 2.718 2.762zM24.818 18.244c1.501 0 2.718-1.237 2.718-2.762 0-1.526-1.217-2.762-2.718-2.762-1.502 0-2.719 1.236-2.719 2.762 0 1.525 1.217 2.762 2.719 2.762z"></path>
                        <path d="M10.875 16.095V8.223c0-3.077 2.66-5.476 6.35-5.476 3.684 0 6.349 2.407 6.349 5.476v7.872h2V8.223C25.574 4 21.97.747 17.224.747c-4.75 0-8.35 3.246-8.35 7.476v7.872h2z" fill-rule="nonzero"></path>
                    </g>
                </svg>
            </div>
        </div>
    <?php endif;?>
</div>
<?php if($isCheckout): ?>
  <style type="text/css">
    .add-to-cart--form .cart-inner .cart-items .cart .cart-main {display: block !important;}
  </style>
<?php endif; ?>