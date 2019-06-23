<div style="margin-bottom: 50px">
  <a href="<?php echo $infosetting2->member_banner_link; ?>">
      <img class="lazyload hidden-xs" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->member_banner);?>" style="width:100%">
      <img class="lazyload hidden-sm hidden-md hidden-lg" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/logo-banner/'.$infosetting2->member_banner_mobile);?>" style="width:100%">
    </a>
</div>
<div class="block block-title-cm user-page">
<div class="container">
<div class="tablist-account-page row">
  <?php $this->load->view('site/member/menu', $this->data);?>
  <!-- Tab panes -->
  <div class="tab-content col-md-9 chinhsuauser">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="block-title">
        <h1 class="heading-small darken"><?php echo $detailPage->name; ?></h1>
        <?php if($detailPage->intro): ?>
        <div class="sub-heading"><?php echo $detailPage->intro; ?></div>
        <?php endif;?>
      </div>
      <div class="block-content block-content-editor">
        <?php if($detailPage->id == 166): ?>
        <div class="form-group log_menber">          
            
            <div class="items">
                <h3>Giỏ hàng sẽ thay đổi khi bạn chọn gói thành viên</h3>                
                <div class="row">                      
                    <?php foreach($packageList as $pk): ?>
                    <div class="col-sm-4 col-xs-12 item">
                        <div class="inner">
                            <img  class="lazyload" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="<?=base_url('uploads/images/package/'.$pk->image_link);?>" alt="<?php echo $pk->name; ?>">
                            <a href="javascript:void(0)" class="btnChoosePackage btn 
                            <?php if($this->session->userdata('enb_package_id') == $pk->id): ?>
                                  btn-danger
                            <?php else: ?>
                              btn-primary
                            <?php endif; ?>
                            " data-id="<?php echo $pk->id; ?>">
                           
                            <?php if($this->session->userdata('enb_package_id') == $pk->id): ?>
                              
                              <?php if($pay_enb): ?>
                                GIA HẠN
                                <?php else: ?>
                                  HỦY ĐĂNG KÝ
                                <?php endif; ?>
                            
                            <?php else: ?>
                               ĐĂNG KÝ
                            <?php endif; ?>
                            </a>
                            <div class="desc">
                                <p><?php echo $pk->name; ?></p>
                                <p class="price"><?php echo number_format($pk->price); ?> VNĐ</p>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                    
                </div>
            </div>            
        </div>
        <?php endif; ?>
        <?php echo $detailPage->content;?>
      </div>
     </div>  
   </div>
</div>
</div>
</div>
<script type="text/javascript">
    function isEmpty(value){
      return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
    }
    $(document).ready(function(){      
      $('.btnChoosePackage').click(function(){        
        var id = $(this).data('id');
        var type = $(this).hasClass('btn-primary') == true ? 1 : 2;
        if(type == 1){          
          $('#package_id').val(id);
          $('.btnChoosePackage').removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
          $(this).removeClass('btn-primary').addClass('btn-danger').html('HỦY ĐĂNG KÝ');
        }else{
          swal("", "Tài khoản của bạn không phải là tài khoản thành viên ENB và các ưu đãi riêng cho thành viên sẽ không được áp dụng!", 'error');
          $('#package_id').val('');
          $(this).removeClass('btn-danger').addClass('btn-primary').html('ĐĂNG KÝ');
        }
        $.ajax({
          type : 'GET',
          url : '<?php echo base_url('cart/package');?>?is_checkout=1&type=' + type + '&id=' + id ,     
          success : function(data){           
            
          }
        });
      });
      
    });
</script>