    <div id="cartsidebar" class="col-lg-4 col-md-4 col-md-4 col-sm-12 col-xs-12 add-to-cart--form <?=($this->uri->rsegment(1) == 'cart')?'col-sm-offset-4':''?>">
        <div id="giohang" class="inner">
          <div class="form-group titlefix">
            <div class="block-title text-center"><h3 class="heading-small">Thùng hàng bạn đang có</h3></div>
          </div>
        <?php if(isset($total_items) && $total_items > 0):?>
          <div class="block-content-fix">
            <div class="form-group product-list">
              <ul class="giohangok">
                <?php
                  $tonghoadon = 0;
                  foreach($cart as $row):
                    $tonghoadon += $row['subtotal'];                   
                ?>
                <li>
                  <?php if($row['product_type'] == 1): ?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/products-images/'.$row['image_link']);?>" alt="<?=$row['image_link']?>">
                <?php else :?>
                  <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/r2c/'.$row['image_link']);?>" alt="<?=$row['image_link']?>">
                <?php endif; ?>
                  <div class="content">
                      <h5 class="title"><a target="_blank" href="<?php echo site_url($row['url'].'-sp'.$row['id']); ?>"><?=$row['name']?>
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
                <?php endforeach;?>
              </ul>
            </div>
            <div class="form-group cart-price-total">
              <div id="dmm">
                <?php 
                $noteck = '';
                $ship_fee = $this->session->userdata('ship_fee');          
                if($ship_fee){
                  $noteck .= '<p class="ship_fee"><label>Phí giao hàng:</label> <strong class="giohangtien" style="font-weight:bold;float:right">'.number_format($this->session->userdata('ship_fee')).'</strong></p>';
                
                }
                 
                  $noteck .= '<p class="total"><label>Tổng:</label> <strong class="giohangtien">'.number_format($tonghoadon+$ship_fee).'</strong></p>';

                  if(isset($chietkhau) && $chietkhau){
                    foreach($chietkhau as $ck){
                      if($tonghoadon >= $ck->giatridonhang){
                        $noteck = '<p class="total"><label>Tạm tính:</label> <strong>'.number_format($tonghoadon).'đ</strong></p>';
                        $noteck .= '<p class="total"><label>Ưu đãi:</label> <strong>'.$ck->phantram.'%</strong></p>';
                        $noteck .= '<p class="total"><label>Tổng:</label> <strong>'.number_format(ceil(($tonghoadon/100)*(100-$ck->phantram))).'đ</strong></p>';
                        break;
                      }
                    }
                  }
                  echo $noteck;
                ?>                
                <?php if($this->uri->rsegment(1) != 'order' && $this->uri->rsegment(2) != 'checkout'):?>
                <p class="buy-add text-right" style="margin-bottom: 0"><a href="/san-pham-c224">Mua thêm</a></p>
                <?php endif;?>
              </div>
            </div>
            <div class="form-group cart-gif-list">
              <h4 class="dkqdmm">
              <?php if(isset($listnhanqua) && $listnhanqua):?>
                <?php $hien = FALSE; foreach($listnhanqua as $key=>$row):?>
                  <?php if($tonghoadon >= $row->giatang):?>
                  <?php $hien = TRUE; $tb = 'Bạn được chọn '.$row->soluong.' sản phẩm dùng thử'?>
                  <?php break; endif;?>
                <?php endforeach;?>
                <?php if($hien == FALSE):?>Danh sách sản phẩm dùng thử:<?php endif;?>
                <?php if($hien == TRUE && isset($tb)):?><?=$tb?><?php endif;?>
              <?php endif;?>
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
          </div>
            
              
          <?php else:?>
          <div class="block-content-fix">
            <div class="form-group product-list">
              <ul class="giohangok"><div class="text-center">Giỏ hàng rỗng. Vui lòng mua sản phẩm!</div></ul>
            </div>
            <div class="form-group cart-price-total">
              <div id="dmm"><p class="total"><label>Tổng:</label> <strong class="giohangtien">0đ</strong></p></div>
            </div>
            <div class="block20 form-group cart-gif-list">
              <h4 class="dkqdmm">Danh sách sản phẩm dùng thử:</h4>
              <ol class="quatang">Chưa có sản phẩm dùng thử </ol>
              <a class="quat" href="<?=base_url('qua-tang')?>"><i class="fa fa-gift"></i> Xem và chọn mẫu thử</a>
            </div>
          </div>
          <?php if($infosetting->gioihan > 0):?>
          	<p class="text-center max_gioihan">MIỄN PHÍ GIAO HÀNG VỚI ĐƠN HÀNG TỪ <?= number_format($infosetting->max_free_ship)?>Đ</p>
          <?php endif;?>
          <?php if($this->uri->rsegment(1) != 'order' && $this->uri->rsegment(2) != 'checkout'):?>
          <div class="form-group cartfix"><button class="btn btn-primary btn-lg btn-block btn_ttoan">Thanh toán</button></div>
          <?php endif;?>
        <?php endif;?>
        </div>
    </div>
    <?php if($this->uri->rsegment(1) == 'cart'):?>
      <style type="text/css">
        .add-to-cart--form .inner{
          border: 1px solid #cccccc;
          padding: 10px 10px 5px 10px;
        }
      </style>
    <?php endif;?>
    <?php if($this->uri->rsegment(1) != 'cart'):?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#giohang').affix({
          offset: {
            top: $('#giohang').offset().top,
            bottom: ($('footer').outerHeight(true) + 70)
          }
        });
      });
    </script>
    <?php endif;?>
    <style type="text/css" media="screen">
      @media (min-width: 1025px){
        .affix { top: 70px; width: 363px;}
        .affix-bottom { position: absolute;}
      }
      @media (max-width: 1024px) {
        .affix,
        .affix-top { position: static!important; }
      }
    </style>
