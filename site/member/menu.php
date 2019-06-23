<ul class="nav nav-stacked col-md-3" role="tablist">
    <!-- <li class="user-info">
      <div class="user-avatar"><img class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=public_url('site/images/user-avatar.png')?>" alt="Avatar_user"/></div>
        <p>Tài khoản của</p>
        <h4></h4>
    </li> -->
    <li <?php if(isset($tab_active) && $tab_active == 'member' ): ?> class="active" <?php endif; ?>><a href="<?php echo base_url('thanh-vien-enb'); ?>">    
    <?php if(!$user_login): ?>
        Đăng ký thành viên       
        <?php else: ?>
        Thông tin tài khoản
        <?php endif; ?>
</a></li>
    <li <?php if(isset($tab_active) && ($tab_active == 'r2c' || $tab_active == 'htd' || $tab_active == 'dnrt' || $tab_active == 'other')): ?> class="active" <?php endif; ?>><a href="#">Quyền lợi thành viên</a></li>
    <li  ><a href="<?php echo base_url('quyen-loi-tv-khi-mua-san-pham-r2c'); ?>" style="<?php if(isset($tab_active) && $tab_active == 'r2c'): ?> color: #06b7a4; <?php endif; ?>padding-left: 40px"><i class="fa fa-user"></i>R2C</a></li>
    <li class="" ><a href="<?php echo base_url('quyen-loi-tv-khi-mua-hang-tieu-dung'); ?>"  style="<?php if(isset($tab_active) && $tab_active == 'htd'): ?> color: #06b7a4; <?php endif; ?>padding-left: 40px"><i class="fa fa-user"></i>HTD</a></li>
    <li class="" ><a href="<?php echo base_url('quyen-loi-tv-khi-mua-san-pham-dnrt'); ?>"  style="<?php if(isset($tab_active) && $tab_active == 'dnrt'): ?> color: #06b7a4; <?php endif; ?>padding-left: 40px"><i class="fa fa-user"></i>DNRT</a></li>
    <li class="" ><a href="<?php echo base_url('quyen-loi-khac'); ?>" style="<?php if(isset($tab_active) && $tab_active == 'other'): ?> color: #06b7a4; <?php endif; ?>padding-left: 40px"><i class="fa fa-user"></i>Quyền lợi khác</a></li>
    <li <?php if(isset($tab_active) && $tab_active == 'member_fee' ): ?> class="active" <?php endif; ?>><a href="<?php echo base_url('phi-thanh-vien-enb'); ?>">Phí thành viên</a></li>
  </ul>