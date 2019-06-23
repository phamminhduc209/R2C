<div class='block block-breadcrumb block-breadcrumb-r2c'>
    <div class='container'>
        <ul class='breadcrumb'>
            <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
            <li><a href="<?php echo base_url('dnrt'); ?>">DNRT</a></li>
            <li class="active">Đăng tin bán</li>
        </ul>
    </div>
</div>
<div class="block container">
    <div class="m_post-product">
        <div class="m_steps">
            <ul class="list-unstyled multi-steps">
                <li class="is-active"><span>Hình ảnh</span></li>
                <li><span>Loại tin</span></li>
                <li><span>Danh mục</span></li>
                <li><span>Thông tin sản phẩm</span></li>
                <li><span>Hình thức thanh toán</span></li>
            </ul>
        </div>
        <!-- m_steps -->
        <form action="<?php echo base_url('dangtin/upload_image'); ?>" class="m_upload_images--form clearfix" id="formContent" method="POST" enctype="multipart/form-data" >            
            <div class="m_upload_images">
                <div class="m_upload_images--title">
                    <p>Hình ảnh trước của sản phẩm<br><span><i>(Hình ảnh chụp mặt trước, rõ nét của sản phẩm)</i></span></p>
                </div>
                <div class="m_upload_images--content">                    
                        <div class="m_upload_images--uploadFile">                            
                            <label for="upload1" title="Upload photo"  class="m_upload_images--camera" focus="1" <?php echo $image_link ?  'style="display:none"' : ''; ?>>
                                <span class="m_upload_images--text1">+ Upload</span><br>
                                <span class="m_upload_images--text2">Kích thước upload<br>600 x 600 px<br>Hình chụp rõ nét</span>
                            </label>
                            <label for="upload1" class="m_upload_images--upload">
                                <img id="image1" src="<?php echo $image_link ? base_url('uploads/temp/'.$image_link) : '' ;?>" focus="1" class="m_upload_images--imageReader" <?php echo !$image_link ?  'style="display:none"' : ''; ?>>
                            </label>
                            <input  type="file" name="image" data-focus="1" class="m_upload_images--chooseFile" id="upload1"  value="" />            
                            <a href="javascript:;" class="m_upload_images--Close" focus="1" <?php echo !$image_link ?  'style="display:none"' : ''; ?>>x</a>
                        </div>                  
                </div>
            </div>
            <div class="clearfix" style="margin-bottom: 20px"></div>
            <!-- m_upload_images -->
            <div class="m_upload_images">
                <div class="m_upload_images--title">
                    <p>Hình ảnh phụ của sản phẩm<br><span><i>(Hình ảnh chụp mặt khác, rõ nét của sản phẩm)</i></span></p>
                </div>
                <div class="m_upload_images--content">                    
                        <div class="m_upload_images--uploadFile">
                            <label for="upload2" title="Upload photo" focus="2"  class="m_upload_images--camera" <?php echo isset($image_list[0]) ?  'style="display:none"' : ''; ?>>
                                <span class="m_upload_images--text1">+ Upload</span><br>
                                <span class="m_upload_images--text2">Kích thước upload<br>600 x 600 px<br>Hình chụp rõ nét</span>                
                            </label>
                            <label for="upload2" class="m_upload_images--upload">                                
                                <img src="<?php echo isset($image_list[0]) ? base_url('uploads/temp/'.$image_list[0]) : '' ;?>" class="m_upload_images--imageReader" focus="2" <?php echo !isset($image_list[0]) ?  'style="display:none"' : ''; ?>>
                            </label>
                            <input  type="file" name="image_list[]" data-focus="2" class="m_upload_images--chooseFile" id="upload2" />
                            <a href="javascript:;" class="m_upload_images--Close" focus="2" <?php echo !isset($image_list[0]) ?  'style="display:none"' : ''; ?>>x</a>         
                        </div>
                        <div class="m_upload_images--uploadFile">
                            <label for="upload3" title="Upload photo" focus="3" class="m_upload_images--camera" <?php echo isset($image_list[1]) ?  'style="display:none"' : ''; ?>>
                                <span class="m_upload_images--text1">+ Upload</span><br>
                                <span class="m_upload_images--text2">Kích thước upload<br>600 x 600 px<br>Hình chụp rõ nét</span>
                            </label>
                            <label for="upload3" class="m_upload_images--upload">
                                <img src="<?php echo isset($image_list[1]) ? base_url('uploads/temp/'.$image_list[1]) : '' ;?>" class="m_upload_images--imageReader" focus="3" <?php echo !isset($image_list[1]) ?  'style="display:none"' : ''; ?>>
                            </label>
                            <input  type="file" name="image_list[]" data-focus="3" class="m_upload_images--chooseFile" id="upload3" />
                            <a href="javascript:;" class="m_upload_images--Close" focus="3" <?php echo !isset($image_list[1]) ?  'style="display:none"' : ''; ?>>x</a>          
                        </div>
                        <div class="m_upload_images--uploadFile">
                            <label for="upload4" title="Upload photo" focus="4" class="m_upload_images--camera" <?php echo isset($image_list[2]) ?  'style="display:none"' : ''; ?>>
                                <span class="m_upload_images--text1">+ Upload</span><br>
                                <span class="m_upload_images--text2">Kích thước upload<br>600 x 600 px<br>Hình chụp rõ nét</span>
                            </label>
                            <label for="upload4" class="m_upload_images--upload">
                                <img src="<?php echo isset($image_list[2]) ? base_url('uploads/temp/'.$image_list[2]) : '' ;?>" class="m_upload_images--imageReader" focus="4" <?php echo !isset($image_list[2]) ?  'style="display:none"' : ''; ?>>
                            </label>
                            <input  type="file" name="image_list[]" data-focus="4" class="m_upload_images--chooseFile" id="upload4">
                            <a href="javascript:;" class="m_upload_images--Close" focus="4" <?php echo !isset($image_list[2]) ?  'style="display:none"' : ''; ?>>x</a>        
                        </div>
                        <div class="m_upload_images--uploadFile">
                            <label for="upload5" title="Upload photo" focus="5" class="m_upload_images--camera" <?php echo isset($image_list[3]) ?  'style="display:none"' : ''; ?>>
                                <span class="m_upload_images--text1">+ Upload</span><br>
                                <span class="m_upload_images--text2">Kích thước upload<br>600 x 600 px<br>Hình chụp rõ nét</span>
                            </label>
                            <label for="upload5" class="m_upload_images--upload">
                                <img src="<?php echo isset($image_list[3]) ? base_url('uploads/temp/'.$image_list[3]) : '' ;?>" class="m_upload_images--imageReader" focus="5" <?php echo !isset($image_list[3]) ?  'style="display:none"' : ''; ?>>
                            </label>                            
                            <input  type="file" name="image_list[]" data-focus="5" class="m_upload_images--chooseFile"  id="upload5" />
                            <a href="javascript:;" class="m_upload_images--Close" focus="5" <?php echo !isset($image_list[3]) ?  'style="display:none"' : ''; ?>>x</a>          
                        </div>
                </div>
            </div>
        </form>
        <!-- m_upload_images -->
        <div class="m_button">            
            <a class="btn btn-primary btn-next" id="btnUpload" href="javascript:;" title="Tiếp tục">Tiếp tục <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnUpload').click(function(){
            if($('#upload1').val() == '' && ($('#image1').attr('src') == undefined || $('#image1').attr('src') == '' )){
                alert('Bạn chưa upload hình ảnh sản phẩm!');
                return false;
            }
            $('#formContent').submit();
        });
    });
</script>