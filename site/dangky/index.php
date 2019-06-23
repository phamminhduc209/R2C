<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<!-- <?php if(isset($messagedk) || isset($messagedk_en)): echo $messagedk;?> -->

<div id="boxes">
  <div id="dialog" class="window" style="display: none;">
    <div class="dkthanhcong">
        <h4><?=lang('dkdone')?></h4>

        <?php 
            if($this->ngonngu != 'en'){
                echo $messagedk;
            }
            if($this->ngonngu == 'en'){
                echo $messagedk_en;
            }
        ?>
    </div>
  </div>
  <div id="mask"></div>
</div>

<!-- <?php endif;?> -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-sm-4 col-xs-12">
            <form action="" method="post" class="formdangky">
            <div class="form-group">
                <h4><?=lang('dknow')?></h4>
                <p><?=lang('dkfullinfo')?></p>
            </div>
            <?php if(isset($tinhthanh) && $tinhthanh):?>
            <div class="form-group">
                <select id="tinhthanh" class="form-control" name="thanhpho">
                    <option value="">(*) <?=lang('dkytp')?></option>
                    <?php foreach($tinhthanh as $row):?>
				        <?php if($this->ngonngu != 'en'): ?>
				        	<option value="<?=$row->id?>"><?=$row->name?></option>
				        <?php endif;?>
				        <?php if($this->ngonngu == 'en'):?>
							<option value="<?=$row->id?>"><?=$row->name_en?></option>
				        <?php endif;?>
					
                    <?php endforeach;?> 
                </select>
            </div>
            <?php endif;?>
            <?php if(form_error('thanhpho')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('thanhpho')?></div>
            <?php endif;?>
            <div class="form-group">
                <select id="quanhuyen" class="form-control" name="quanhuyen">
                    <option value="">(*) <?=lang('dkyquan')?></option>
                </select>
            </div>
            <?php if(form_error('quanhuyen')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('quanhuyen')?></div>
            <?php endif;?>
            <div class="form-group">
                <input name="hoten" type="text" class="form-control" placeholder="(*) <?=lang('dkyhoten')?>">
            </div>
            <?php if(form_error('hoten')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('hoten')?></div>
            <?php endif;?>
            <div class="form-group">
                <input name="didong" type="text" class="form-control" placeholder="(*) <?=lang('dkyphone')?>">
            </div>
            <?php if(form_error('didong')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('didong')?></div>
            <?php endif;?>
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="(*) Email">
            </div>
            <?php if(form_error('email')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('email')?></div>
            <?php endif;?>
            <div class="form-group">
                <select class="form-control" name="loaixe">
                    <option value="">(*) <?=lang('dkyloaixe')?></option>
                    <option value="Xe 3 gác giao hàng"><?=lang('dkloaixe1')?></option>
                    <option value="Tải < 500kg"><?=lang('dkloaixe2')?></option>
                    <option value="Tải < 1 Tấn"><?=lang('dkloaixe3')?></option>
                </select>
            </div>
            <?php if(form_error('loaixe')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('loaixe')?></div>
            <?php endif;?>
<!--             <div class="form-group">
                <select class="form-control" name="tinhtrang">
                    <option value="">(*) <?=lang('dkytinhtrang')?></option>
                    <option value="Xe riêng"><?=lang('dktinhtrang1')?></option>
                    <option value="Xe thuê"><?=lang('dktinhtrang2')?></option>
                </select>
            </div>
            <?php if(form_error('tinhtrang')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('tinhtrang')?></div>
            <?php endif;?> -->
            <div class="form-group">
                <select class="form-control" name="nguongioithieu">
                    <option value="">(*) <?=lang('dkynguon')?></option>
                    <option value="Bạn bè"><?=lang('dkynguon1')?></option>
                    <option value="Mạng xã hội"><?=lang('dkynguon2')?></option>
                    <option value="Báo chí"><?=lang('dkynguon3')?></option>
                    <option value="Nguồn khác"><?=lang('dkynguon4')?></option>
                </select>
            </div>
            <?php if(form_error('nguongioithieu')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('nguongioithieu')?></div>
            <?php endif;?>
            <div class="form-group">
                <input name="magioithieu" type="text" class="form-control" placeholder="<?=lang('dkyma')?>">
            </div>
            <div class="form-group">
                <?php $sess_captcha = $this->session->userdata('captcha'); ?>
                <div class="captchare">
                    <span class="captcha"><?=$sess_captcha['word'];?></span>
                    <input type="text" class="form-control ipcaptcha" name="captcha" placeholder="(*) <?=lang('placeholder_captcha')?>">
                </div>
            </div>
            <?php if(form_error('captcha')):?>
                <div class="alert alert-danger" role="alert"><?=form_error('captcha')?></div>
            <?php endif;?>
            <div class="form-group">
                <?php if($this->ngonngu != 'en'):?>
                <p>Khi tiếp tục, tôi đồng ý Gobi được phép thu thập, sử dụng và tiết lộ thông tin được tôi cung cấp theo <a data-fancybox data-src="#hidden-content" href="javascript:;" class="csbm">Chính sách Bảo mật</a> mà tôi đã đọc và hiểu.</p>
                <div style="display: none;" id="hidden-content">
                    <h3 style="text-align: center; padding-bottom: 20px"><?=$this->news_model->get_info($infosetting->id_chinhsach)->name?></h3>
                    <div style="font-size: 14px; line-height: 30px"><?=$this->news_model->get_info($infosetting->id_chinhsach)->content?></div>
                </div>
                <?php endif?>
                <?php if($this->ngonngu == 'en'):?>
                <p>By continuing, I agree that Gobi is permitted to collect, use and disclose information provided to me under the <a data-fancybox data-src="#hidden-content" href="javascript:;" class="csbm" href="">Privacy Policy</a> that I have read and understood.</p>
                <div style="display: none;" id="hidden-content">
                    <h3 style="text-align: center; padding-bottom: 20px"><?=$this->news_model->get_info($infosetting->id_chinhsach)->name_en?></h3>
                    <div style="font-size: 14px; line-height: 30px"><?=$this->news_model->get_info($infosetting->id_chinhsach)->content_en?></div>
                </div>
                <?php endif?>
            </div>
            <button type="submit" class="btn dktaixe"><?=lang('dkbtn')?></button>
          </form>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="block-page-common clearfix">
                <div class="block block-title">
                    <h1 class="title-main"><?=lang('dkytx')?></h1>
                </div>
                <div class="block-content accordions cauhoithuonggap">
                    <div class="ttac"><?=lang('dkycauhoi')?></div>
                    <div class="panel-group" id="accordion">
                        <?php if(isset($chtg) && $chtg):?>
                        <?php foreach($chtg as $key=>$row):?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <?php if($this->ngonngu != 'en'):?>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>"><span class="icontg"><?=$key+1?></span> <?=$row->name?><i class="fa fa-caret-down"></i></a>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>"><span class="icontg"><?=$key+1?></span> <?=$row->name_en?><i class="fa fa-caret-down"></i></a>
                                <?php endif;?>
                              </h4>
                            </div>
                            <div id="collapse<?=$key?>" class="panel-collapse collapse">
                                <?php if($this->ngonngu != 'en'):?>
                                <div class="panel-body"><?=$row->content?></div>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <div class="panel-body"><?=$row->content_en?></div>
                                <?php endif;?>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <img src="<?=base_url('uploads/images/logo-banner/'.$infosetting->banner_qc)?>" alt="Banner quảng cáo gobi">
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tinhthanh").change(function(){
            var idtinhthanh = $(this).val();
            $.ajax({
                type:'post',
                url:"<?php echo base_url('ajax/ajaxloadquanhuyen/')?>",
                data:{'idtinhthanh':idtinhthanh},
                success:function(data){
                    $("#quanhuyen").html(data);
                }
            });
        });
    });
</script>