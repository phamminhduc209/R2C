<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="vi" class="no-js ie-old"><![endif]-->
<!--[if IE 7 ]><html lang="vi" class="no-js ie-old"><![endif]-->
<!--[if IE 8 ]><html lang="vi" class="no-js ie-old"><![endif]-->
<!--[if gt IE 8 ]><html lang="vi" class="no-js ie-old"><![endif]-->
<html lang="vi">
<head>
    <?php $this->load->view('site/head', $this->data); ?>
    <?=$infosetting->script_head?>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '356755481623654');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=356755481623654&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body <?= (current_url() ==  base_url() || current_url() ==  base_url('en.html'))?'class="home-page"':''?>>
    <div class="sidebar-overlay"></div>
	<?=$infosetting->script_body?>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=567408173358902";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div id="wrapper">
	    <?php $this->load->view('site/header', $this->data); ?>	 
        <?php $this->load->view('site/menu', $this->data); ?>     
	    <div class="wrapper clearfix">
	        <?php $this->load->view($temp, $this->data); ?>
	    </div>
	    <?php $this->load->view('site/footer', $this->data); ?>
        <div class="block-rightSidebar" id="showSidebar_Card">
            <div class="sidebar-content">
                <div class="block-title">
                    <h2><span>Giỏ Hàng Của Bạn</span></h2>
                    <span class="iconClose"><svg class="svg-drawing icon-close" viewBox="0 0 64 64"><path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path></svg></span>
                </div>
                <div class="block-content" id="content-cart-ajax">
                    <?php $this->load->view('site/cart/cart', $this->data); ?>
                </div>
            </div>
        </div><!-- /.rightSidebar -->
		<?php $this->load->view('site/script'); ?>
	</div>
	<!-- Thong bao loi ie8 -->
	<?php /*
	<div class="loiie">
		<h2>Bạn có biết rằng trình duyệt của bạn đã lỗi thời?</h2>
		<p>Trình duyệt của bạn đã lỗi thời, và có thể không tương thích tốt với website, chắc chắn rằng trải nghiệm của bạn trên website sẽ bị hạn chế. Bên dưới là danh sách những trình duyệt phổ biến hiện nay.</p><br>
		<p>Click vào biểu tượng để tải trình duyệt bạn muốn.</p><br>
		<ul class="ulloiie" style="display: inline-block;">
			<li><a href="https://www.google.com/chrome/"><img src="<?=public_url('site/images/Chrome.png')?>"></a></li>
			<li><a href="https://www.mozilla.org/firefox/"><img src="<?=public_url('site/images/Firefox.png')?>"></a></li>
			<li><a href="https//www.microsoft.com/windows/Internet-explorer/"><img src="<?=public_url('site/images/Explorer.png')?>"></a></li>
			<li><a href="https//www.opera.com/download/"><img src="<?=public_url('site/images/Opera-icon.png')?>"></a></li>
			<li><a href="https//www.apple.com/safari/download/"><img src="<?=public_url('site/images/Safari.png')?>"></a></li>
		</ul>
	</div>
	*/ ?>
	<?=$infosetting->script_footer?>
<div id="loading_overlay" style="display: none;">
    <div class="loading_animation">        
        <p class="loading_box">
            <img class="spinner_load" src="https://enb.vn/public/site/images/loading.gif" alt="spinner icon loading">            
        </p>
        
    </div>
</div>
<style type="text/css">
#loading_overlay{
	width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 51000;
    background: rgba(0,0,0,0.7);
}
.loading_animation img.spinner_load {
    position: absolute;
    top: 0;
    margin: 0 auto;
    left: 85px;
    -webkit-animation: spin 2.5s linear infinite;
    -moz-animation: spin 2.5s linear infinite;
    animation: spin 2.5s linear infinite;
}
.loading_animation img {
    width: 150px;
    margin: 30px auto;
    display: block;
}
.loading_animation p {
    font-size: 15px;
    letter-spacing: -1px;
    line-height: 1.4;
}
.loading_box {
    position: relative;
}
.loading_animation {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: 0;
    transform: translate(-50%, -50%);
    width: 290px;
    height: 350px;
    color: #fff;
    text-align: center;
    display: block;
    padding: 0;
    border-radius: 5px;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $(".header-r2c").sticky({
            topSpacing: 0,
            zIndex: 9
        });
    });
    $(document).ready(function(){
        $("img.lazyload").lazyload();
        $('span.ration').click(function(){
            var obj = $(this);
            var parent = obj.parents('.product-r2c');
            parent.find('.ration').removeClass('active');
            obj.addClass('active');
            parent.find('.price-sale').html(obj.data('price'));
            parent.find('.price-member').html(obj.data('price-member'));
            parent.find('.btn-mua').attr('data-type', obj.data('type'));
        });
    });
</script>
<input type="hidden" id="is_clear_fp" value="0">
</body>
</html>
