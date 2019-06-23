<header class="header-r2c hidden-xs">
  <div class="header-r2c-inner">
      <div class="header-r2c-top">
          <div class="container">
              <div class="row">
                  <div class="display-table">
                      <div class="header-logo col-sm-2 text-center display-table-cell">
                          <div id="logo">
                              <a href="<?=base_url()?>"><img src="<?=base_url('uploads/images/logo-banner/'.$infosetting->logo)?>"></a>
                          </div>
                      </div>
                      <div class="col-sm-6 display-table-cell">
                          <div class="search-r2c">
                              <form action="/timkiem" method="GET">
                                  <div class="input-group stylish-input-group">
                                      <input name="keyword" type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm..." value="<?php echo $this->input->get('keyword'); ?>">
                                      <span class="input-group-addon"><button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="col-sm-4 display-table-cell">
                          <?php if(isset($user_login) && $user_login):?>
                          <div class="header-toolbox dnok">
                              <ul>
                                  <li class="user-section">
                                      <a href="javascript:;">
                                        <div class="icon-user"><i class="fa fa-user"></i></div>
                                        <p>Hi, <b title="Hi: <?=$user_login->name?>"> <?=$user_login->name?> <i class="fa fa-caret-down"></i></b></p>  
                                      </a>
                                      <ul class="customer-account">
                                          <li><a href="<?=base_url('thong-tin-tai-khoan')?>"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
                                          <li><a href="#logoutModal" data-toggle="modal"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                      </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:;" class="cart cart_click"><i class="fa fa-shopping-basket animation-cart" aria-hidden="true"></i><span class="cart-ajax"><?=$total_items?></span></a>
                                  </li>
                              </ul>
                          </div>
                          <?php else:?>
                          <div class="header-toolbox">
                              <ul>
                                  <li><a data-toggle="modal" data-target="#modalLogin" href="javascript:;"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                  <li><a data-toggle="modal" data-target="#modalRegister" href="javascript:;"><i class="fa fa-user"></i> Đăng ký</a></li>
                                  <li>
                                    <a href="javascript:;" class="cart cart_click"><i class="fa fa-shopping-basket animation-cart" aria-hidden="true"></i><span class="cart-ajax"><?=$total_items?></span></a>
                                  </li>
                              </ul>
                          </div>
                        <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="menu-r2c">
              <ul>
                  <li <?php if((isset($active) && $active == 'home' ) || !isset($active)){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang Chủ</a></li>
                  <li <?php if(isset($active) && $active == 'htd' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('htd'); ?>" title="">HTD</a></li>
                  <li <?php if(isset($active) && $active == 'dnrt' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('dnrt'); ?>" title="">DNRT</a></li>
                  <li <?php if(isset($active) && $active == 'r2c' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('r2c'); ?>" title="R2C">R2C</a></li>
                  <li <?php if(isset($active) && $active == 'qua-tang' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('qua-tang'); ?>" title="Mẫu thử">Mẫu thử</a></li>
                  <li <?php if(isset($active) && $active == 'member' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Thành viên EnB">Thành viên EnB</a></li>
                  <li <?php if(isset($active) && $active == 'contact' ){ ?> class="active" <?php } ?>><a href="http://enb.vn/lien-he.html" title="Liên Hệ">Liên Hệ</a></li>
              </ul>
          </div>
      </div>
  </div>
</header>
<header class="header1 hidden-lg">
  <div class="container">
    <?php if(isset($user_login) && $user_login):?>
    <div class="user-section-header hidden-lg hidden-sm text-right">
      <a href="javascript:;">
        <!-- <div class="icon-user"><i class="fa fa-user"></i></div> -->
        <p><b title="Hi,: <?=$user_login->name?>">Hi, <?=$user_login->name?> <i class="fa fa-caret-down"></i></b></p>  
      </a>
      <ul class="customer-account">
        <li><a href="<?=base_url('thong-tin-tai-khoan')?>"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
        <li>
          <a href="#logoutModal" data-toggle="modal"><i class="fa fa-lock"></i> Đăng xuất</a>
        </li>
      </ul> 
    </div>
    <?php endif;?>
    <div class="row mb-nav">
      <div class="display-table">
        <div class="col-sm-4 nav-bars display-table-cell">
          <a href="#menu-mobi" class="btn-menu mb-nav-bars"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
        <div class="col-sm-4 mb-logo display-table-cell">
          <a href="<?=base_url()?>"><img src="<?=base_url('uploads/images/logo-banner/'.$infosetting->logo_mau)?>"></a>
        </div>
        <div class="col-sm-4 mb-search display-table-cell">
          <a href="javascript:;" class="cart cart_click"><i class="fa fa-shopping-basket animation-cart" aria-hidden="true"></i><span class="cart-ajax"><?=$total_items?></span></a>
        </div>
      </div>
    </div>
    <div class="nav-search">
      <form action="/timkiem" method="GET">
        <div class="input-group stylish-input-group">
          <input name="keyword" type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm..." value="<?php echo $this->input->get('keyword'); ?>">
          <span class="input-group-addon"><button type="submit">Tìm kiếm</button></span>
        </div>
      </form>
    </div>
  </div>
</header>