<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block block-two-col container block-category-article search-pages">
    <div class="row">
        <div class="col-sm-8">
            <div class="block-page-common clearfix">
                <div class="block-title"><h1 class="title-main"><?=$title?></h1></div>
                <?php if(isset($ketqua) && $ketqua || isset($ketquatin) && $ketquatin):?>
                <?php if(isset($ketqua) && $ketqua):?>
                <div class="block-content ">
                  <div class="product-list row">
                      <?php foreach($ketqua as $row):?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-item">
                        <div class="inner">
                          <div class="product-img w-product">
                            <?php /* if($row->new == 1):?>
                              <p class="box-ico-se"><span class="ico-selling ico">Bán chạy</span></p>
                            <?php endif; */?>
                            <?php if($row->price > 0 && $row->discount > 0 && $row->price > $row->discount):?>
                              <p class="box-ico"><span class="ico-sales ico">-<?=round(($row->discount * 100)/$row->price)?>%</span></p>
                            <?php endif;?>
                            <?php /*
                              <a href="javascript:;" title="<?=$row->name?>" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>">
                            */ ?>
                            <a title="<?=$row->name?>" href="<?=site_url($row->url.'-sp'.$row->id)?>">
                              <?php if($row->image_link):?>
                              <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/products-images/'.$row->image_link);?>" alt="<?=$row->name?>">
                              <?php else:?>
                              <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/fa-image.png');?>" alt="<?=$row->name?>">
                              <?php endif;?>
                            </a>
                            <div class="block-button-item">
                              <?php if($row->price > 0):?>
                              <a href="javascript:;" <?php if($row->type == 1): ?> data-tab="htd" <?php else: ?> data-tab="r2c" <?php endif; ?>data-id="<?=$row->id?>" class="btn-add-cart-icon btn_add_cart btn-mua"><i class="fa fa-shopping-cart"></i></a>
                              <?php else:?>
                              <span class="btn-add-cart-icon btn_add_cart btn-mua">Liên Hệ</span>
                              <?php endif;?>
                              <a href="javascript:;" class="btn-like-icon" data-like="<?=$row->id?>"><i class="fa fa-thumbs-up"></i><span class="likes"><?=$row->likes?></span></a>
                            </div>
                            <div class="soluong" data-conhet="<?=$row->id?>">
                              <?php if($row->total > 0):?>
                                <?php if($row->new == 1):?>
                                <span class="slcon">bán chạy</span>
                                <?php endif;?>
                              <?php else:?>
                                <span class="slhet">Hết hàng</span>
                              <?php endif;?>
                            </div>
                          </div>
                          <div class="product-info">
                          <?php /*
                          <h5 class="title" onclick="openW($(this))" data-href="<?=site_url($row->url.'-sp'.$row->id)?>"><a href="javascript:;"><?=$row->name?></a></h5>
                          */?>
                          <h5 class="title"><a href="<?=site_url($row->url.'-sp'.$row->id)?>"><?=$row->name?></a></h5>
                            <div class="product-price fixgia">
                              <?php if($row->price > 0):?>
                                <?php if($row->discount > 0):?>
                                  <span class="price-new"><?=number_format($row->price - $row->discount)?>đ</span>
                                  <span class="price-old"><?=number_format($row->price)?>đ</span>
                                <?php else:?>
                                  <span class="price-new"><?=number_format($row->price)?>đ</span>
                                <?php endif;?>
                              <?php endif;?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach;?>
                  </div>
                </div>
                <?php endif;?>
                <?php if(isset($ketquatin) && $ketquatin):?>
                <div class="block-content row">
                  <?php foreach($ketquatin as $row):?>
                    <div class="col-lg-4 col-sm-6 col-xs-6 block-item">
                      <div class="inner">
                        <figure>
                          <a href="<?=site_url($row->url.'-t'.$row->id)?>">
                            <?php if($row->image_link):?>
                            <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/news/'.$row->image_link)?>" alt="<?=$row->name?>">
                            <?php else:?>
                            <img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/demoiweb247.png')?>" alt="<?=$row->name?>">
                            <?php endif;?>
                          </a>
                        </figure>
                        <article>
                          <h3><a href="<?=site_url($row->url.'-t'.$row->id)?>"><?=$row->name?></a></h3>
                          <?php /* <p><?=$row->intro?></p> */ ?>
                        </article>
                      </div>
                    </div>
                  <?php endforeach;?>
                </div>
                <?php endif;?>
              <?php else:?>
              <div class="block-content">
                <div class="alert alert-danger">
                  <?=lang('no_results')?>
                </div>
                <a class="btn btn-danger" href="<?=base_url()?>"><?=lang('c_backhome')?></a>
              </div>
              <?php endif;?>
            </div>
        </div>
        <?php $this->load->view('site/giohang', $this->data)?>
    </div>
</div>
