<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<!-- Hỏi đáp -->
<div class="block block-title-cm block-layout-three-col block-faqs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 main-col">
        <div class="block block-title">
          <h1 class="heading-primary darken">Yêu cầu từ nhà cung cấp</h1>
        </div>
    		<div class="block-title"><h2 class="heading-small darken">Thông tin nhà cung cấp</h2></div>
        <?php if(isset($message) && $message):?><div class="suss"><i class="fa fa-check fa-2"></i> <?=$message?></div><?php endif;?>
    		<div class="block-content">
    			<form method="POST" action="" id="yeucaukhach">
    				<div class="form-group">
              <?php if(form_error('name')):?><span class="error"><?=form_error('name')?></span><?php endif;?>
    					<input name="name" type="text" class="form-control" value="<?=set_value('name')?>" placeholder="Họ tên khách hàng">
    				</div>
    				<div class="form-group">
              <?php if(form_error('phone')):?><span class="error"><?=form_error('phone')?></span><?php endif;?>
    					<input name="phone" type="text" class="form-control" value="<?=set_value('phone')?>" placeholder="Số điện thoại">
    				</div>
    				<div class="form-group">
              <?php if(form_error('email')):?><span class="error"><?=form_error('email')?></span><?php endif;?>
    					<input name="email" type="text" class="form-control" value="<?=set_value('email')?>" placeholder="Email">
    				</div>
    				<div class="form-group">
              <?php if(form_error('content')):?><span class="error"><?=form_error('content')?></span><?php endif;?>
    					<textarea name="content" rows="4" class="form-control" placeholder="Nội dung"><?=set_value('content')?></textarea>
    				</div>
            <div class="wait"></div>
    				<div class="form-group"><button type="submit" class="btn btn-primary btn-gui">Gửi liên hệ</button></div>       				
    			</form>
    		</div>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#yeucaukhach').submit(function(){
              if('<?=$message?>' <= 0){
                $('.wait').html('<div><i class="fa fa-spinner fa-pulse"></i> Vui lòng đợi trong giây lát...</div>');
              }
            });
          });
        </script>
    		<hr>
        <?php if(isset($yeucauncc) && $yeucauncc):?>
  			<div class="block-title"><h2 class="heading-small darken">Các yêu cầu</h2></div>
  			<div class="block-content">
			    <div id="accordion" class="panel-group">
            <?php foreach($yeucauncc as $key=>$row):?>
				    <div class="panel">
				      <h5><a href="#panelBody<?=$key?>" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"><?=$key+1?>./ <?=$row->name?></a></h5>
				      <div id="panelBody<?=$key?>" class="panel-collapse collapse">
                <div class="ques"><p>Câu hỏi:</p> <span>Ngày: <?=get_date($row->created)?></span><?=$row->content?></div>
                <div class="rep"><p>Trả lời:</p> <?=($row->reply)?$row->reply:'<i class="fa fa-refresh fa-spin"></i> Đang đợi trả lời...'?></div>
              </div>
				    </div>
            <?php endforeach;?>
			    </div>
  			</div>
      <?php endif;?>
      </div>
      <?php /* $this->load->view('site/giohang', $this->data) */?>
    </div>
  </div>
</div>