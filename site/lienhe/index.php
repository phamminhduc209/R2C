<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block container">
    <div class="row">
            <div class="block-page-common clearfix">
            	<div class="col-lg-12">
	                <div class="block-title">
	                    <h1 class="heading-primary"><?=lang('lienhe')?></h1>
	                </div>
                </div>
                <div class="block-content">
                	<div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
						<ul class="ttlienhe">
                            <?php if($infosetting->tenquocte || $infosetting->tenquocte_en):?>
                            <li>
                                <p><?=lang('tenquocte')?></p>
                                <?php if($this->ngonngu != 'en'):?>
                                <p class="heading-small"><?=$infosetting->tenquocte?></p>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <p class="heading-small"><?=$infosetting->tenquocte_en?></p>
                                <?php endif;?>
                            </li>
                            <?php endif;?>
                            <?php if($infosetting->tengoitat || $infosetting->tengoitat_en):?>
                            <li>
                                <p><?=lang('tengoitat')?></p>
                                <?php if($this->ngonngu != 'en'):?>
                                <p class="heading-small"><?=$infosetting->tengoitat?></p>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <p class="heading-small"><?=$infosetting->tengoitat_en?></p>
                                <?php endif;?>
                            </li>
                            <?php endif;?>
                            <?php if($infosetting->diachi || $infosetting->address):?>
							<li>
								<p><?=lang('diachi')?></p>
								<?php if($this->ngonngu != 'en'):?>
								<p class="heading-small"><?=$infosetting->diachi?></p>
								<?php endif;?>
								<?php if($this->ngonngu == 'en'):?>
								<p class="heading-small"><?=$infosetting->address?></p>
								<?php endif;?>
							</li>
                            <?php endif;?>
                            <?php if($infosetting->sdt || $infosetting->sdt_en):?>
							<li>
								<p><?=lang('phone')?></p>
                                <?php if($this->ngonngu != 'en'):?>
								<p class="heading-small"><?=$infosetting->sdt?></p>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <p class="heading-small"><?=$infosetting->sdt_en?></p>
                                <?php endif;?>
							</li>
                            <?php endif;?>
                            <?php if($infosetting->website):?>
							<li>
								<p>Website</p>
								<p class="heading-small"><?=$infosetting->website?></p>
							</li>
                            <?php endif;?>
                            <?php if($infosetting->email || $infosetting->email_en):?>
							<li>
								<p>Email</p>
                                <?php if($this->ngonngu != 'en'):?>
								<p class="heading-small"><?=$infosetting->email?></p>
                                <?php endif;?>
                                <?php if($this->ngonngu == 'en'):?>
                                <<p class="heading-small"><?=$infosetting->email_en?></p>
                                <?php endif;?>
							</li>
                            <?php endif;?>
						</ul>
                	</div>
					<div class="col-lg-8 col-md-8 col-sm-6 col-sx-12">
                    <?php if($this->ngonngu != 'en'):?>
                    <div class="block-address"><?=$infosetting->thongtinlienhe?></div>
                    <?php endif;?>
                    <?php if($this->ngonngu == 'en'):?>
                    <div class="block-address"><?=$infosetting->thongtinlienhe_en?></div>
                    <?php endif;?>
                    <form method="POST" action=""  class="block-form form-lien-he">
                        <?php if( isset($message) && $message ): ?>
                            <div class="alert alert-success"><strong><?=$message?></strong></div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="text" placeholder="<?=lang('placeholder_name')?> (*)" name="hoten" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <?php if(form_error('hoten')):?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger" role="alert"><?=form_error('hoten')?></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="text" placeholder="<?=lang('placeholder_address')?> (*)" name="diachi" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <?php if(form_error('diachi')):?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger" role="alert"><?=form_error('diachi')?></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="tel" placeholder="<?=lang('dkyphone')?> (*)" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <?php if(form_error('phone')):?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger" role="alert"><?=form_error('phone')?></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="email" placeholder="Email (*)" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <?php if(form_error('email')):?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger" role="alert"><?=form_error('email')?></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <textarea rows="7" placeholder="<?=lang('noidunglienhe')?>" name="ghichu" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <?php $sess_captcha = $this->session->userdata('captcha'); ?>
                                <div class="captchare">
                                    <span class="captcha"><?=$sess_captcha['word'];?></span>
                                    <input type="text" class="form-control ipcaptcha" name="captcha" placeholder="<?=lang('placeholder_captcha')?> (*)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if(form_error('captcha')):?>
                            <div class="col-sm-12 col-xs-12" style="text-align: center;">
                                <div class="alert alert-danger" role="alert"><?=form_error('captcha')?></div>
                            </div>
                        	<?php endif;?>
                        </div>
                        <div class="row">
                        	<div class="form-group col-xs-12 btntextr">
                                <button type="submit" class="btn btn-primary"><?=lang('send')?></button>
                            </div>
                        </div>
                    </form>
                	</div>
                </div>
            </div><!-- /block-ct-news -->
    </div>
</div><!-- /block_big-title -->

<div class=" block-map">
    <?php if($this->ngonngu != 'en'):?>
    <object data="<?= $infosetting->map;?>"></object>
    <?php endif;?>
    <?php if($this->ngonngu == 'en'):?>
    <object data="<?= $infosetting->map_en;?>"></object>
    <?php endif;?>
</div>
