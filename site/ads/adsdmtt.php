  <?php if(isset($hangmoive) && $hangmoive):?>
  <div class="block30 block-sidebar">
      <div class="block-module block-links-sidebar">
          <div class="block-title"><h2><i class="fa fa-star" aria-hidden="true"></i> Hàng mới về</h2></div>
          <div class="block-content">
              <ul class="list">
                  <?php foreach($hangmoive as $row):?>
                  <li>
                    <a href="<?=site_url($row->url.'-sp'.$row->id)?>" title="<?=$row->name?>">
                        <figure class="thumb">
                          <img src="<?=base_url('uploads/images/products-images/'.$row->image_link);?>" alt="<?=$row->name?>"/>
                        </figure>
                        <article>
                          <h3><?=$row->name?></h3>
                          <div class="bl-price">
                            <?php if($row->price):?>
                              <?php if($row->discount):?>
                                <p class="des">
                                  <?=number_format($row->price - $row->discount)?>đ
                                  <span class="discount"><?=number_format($row->price)?>đ</span>
                                </p>
                              <?php else:?>
                                <p class="des"><?=number_format($row->price)?>đ</p>
                              <?php endif;?>
                            <?php else:?>
                              <p class="des">Liên hệ</p>
                            <?php endif;?>
                          </div>
                        </article>
                    </a>
                  </li>
                  <?php endforeach;?>
<!--                   <li class="text-center">
                      <a href="#" class="btn-text-link"><u>Xem thêm</u></a>
                  </li> -->
              </ul>
          </div>
      </div>
  </div>
  <?php endif;?>