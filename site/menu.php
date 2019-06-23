<div class="mocmenu"></div>
<!-- Mobile -->
<script type="text/javascript">
  $(function() {
    $('.btn-menu').click(function(){
      $('nav#menu-mobi').css({height: "auto"});
    });
    $('nav#menu-mobi').mmenu({
      extensions  : [ 'effect-slide-menu', 'pageshadow', 'theme-dark' ],
      searchfield : true,
      counters  : true,
      navbar: {
        title: ""
      },
      navbars   : [ {
        type    : 'tabs',
        content   : [ 
          '<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>', 
          '<a href="#panel-account"><i class="fa fa-user"></i> <span>Tài khoản</span></a>',
          // '<a href="javascript:;" class="btn_ttoan"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>'
          //'<div class="visual"><a href="/customer/account" class="avatar"><img class="avatar__thumb" src="https://graph.facebook.com/906024826171001/picture?width=60&amp;height=60" alt="avatar"><div class="avatar__content"><div class="avatar__name">Phạm Minh Đức</div><div class="avatar__email">minhducpham.it@gmail.com</div></div><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="20" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg></a></div>'
        ]
      }]
    });
  });
</script>
<!-- End Mobile -->
<nav id="menu-mobi" class="hidden-lg hidden-md">
  
  <div id="panel-menu">
    <ul>       
       <li <?php if((isset($active) && $active == 'home' ) || !isset($active)){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang Chủ</a></li>
        <li <?php if(isset($active) && $active == 'htd' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('htd'); ?>" title="HTD">HTD</a></li>
        <li <?php if(isset($active) && $active == 'dnrt' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('dnrt'); ?>" title="DNRT">DNRT</a></li>
        <li <?php if(isset($active) && $active == 'r2c' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('r2c'); ?>" title="R2C">R2C</a></li>        
        <li <?php if(isset($active) && $active == 'qua-tang' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('qua-tang'); ?>" title="Mẫu thử">Mẫu thử</a></li>
        <li <?php if(isset($active) && $active == 'member' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url('thanh-vien-enb'); ?>" title="Thành viên EnB">Thành viên EnB</a></li>
        <li <?php if(isset($active) && $active == 'contact' ){ ?> class="active" <?php } ?>><a href="http://demo.enb.vn/lien-he.html" title="Liên Hệ">Liên Hệ</a></li>
    </ul>
  </div>
  <div id="panel-account">
    <ul>
      <?php if(isset($user_login) && $user_login):?>
        <li><a href="<?=base_url('thong-tin-tai-khoan')?>"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
        <li>
          <a class="hidden_menu_mb" data-toggle="modal" data-target="#logoutModal" href="javascript:;"><i class="fa fa-lock"></i> Đăng xuất</a>
        </li>
      <?php else:?>
        <li><a class="hidden_menu_mb" data-toggle="modal" data-target="#modalLogin" href="javascript:;"><i class="fa fa-lock"></i> Đăng nhập</a></li>
        <li><a class="hidden_menu_mb" data-toggle="modal" data-target="#modalRegister" href="javascript:;"><i class="fa fa-user"></i> Đăng ký</a></li>
      <?php endif;?>
    </ul>
  </div>
</nav>
<script type="text/javascript">
  $(document).ready(function(){
      var API = $("#menu-mobi").data("mmenu");
      $('.hidden_menu_mb').click(function(){
        API.close();
      });
  });
</script>