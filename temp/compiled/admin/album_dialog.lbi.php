<!-- <?php if ($this->_var['image_type'] == 0): ?> -->
    <!-- <?php if ($this->_var['log_type'] == 'image'): ?> -->
    <div id="dialogAlbum" ectype="album-warp">
        <div class="dialogTop" ectype="albumFilter">
            <div class="imitate_select select_w220" id="album_id">
                <div class="cite"><?php echo $this->_var['lang']['select_album']; ?></div>
                <ul style="display:none;" ectype="album_list_check">
                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                    <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                    <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <input name="album_id" type="hidden" value="<?php echo empty($this->_var['album_id']) ? '0' : $this->_var['album_id']; ?>" id="album_id_val" ectype="album_id_val">
            </div>
            <div class="imitate_select select_w220" id="sort_name">
                <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                <ul style="display: none;" class="ps-container">
                    <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['sort_update_desc']; ?></a></li>
                    <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['sort_update_asc']; ?></a></li>
                    <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_asc']; ?></a></li>
                    <li><a href="javascript:;" data-value="4" class="ftx-01"><?php echo $this->_var['lang']['sort_picsize_desc']; ?></a></li>
                    <li><a href="javascript:;" data-value="5" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_asc']; ?></a></li>
                    <li><a href="javascript:;" data-value="6" class="ftx-01"><?php echo $this->_var['lang']['sort_picname_desc']; ?></a></li>
                </ul>
                <input name="sort_name" type="hidden" value="2" id="sort_name_val">
            </div>
            <div class="fl"><a href="javascript:void(0);"  class="btn red_btn btn30" ectype="add_album"><?php echo $this->_var['lang']['add_album']; ?></a></div>
            <div class="fl ml10"><a href="javascript:void(0);"  class="btn red_btn btn30" ectype="albumFile" id="albumFile"><?php echo $this->_var['lang']['upload_image']; ?></a></div>
			<div class="fl album_Percent ml20 hide">
                <div class="label_value">
                    <div class="text_div mr0 w120 pl0"><span class="Percent_pic" ></span></div><div class="Percent"></div>
                </div>
            </div>
        </div>
        <div class="table_list" ectype="pic_list">
            <div class="gallery_album" data-act="get_albun_pic" data-vis="1" data-inid="pic_list" data-url='get_ajax_content.php' data-where="sort_name=<?php echo $this->_var['filter']['sort_name']; ?>&album_id=<?php echo $this->_var['filter']['album_id']; ?>">
                <ul class="ga-images-ul" ectype='pic_replace' data-type="check">
                    <?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pic_album');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['pic_album']):
?>
                    <li data-url="<?php echo $this->_var['pic_album']['pic_file']; ?>"><div class="img-container"><img src="<?php echo $this->_var['pic_album']['pic_file']; ?>"></div><i class="checked"></i></li>
                    <?php endforeach; else: ?>
                    <li class="notic"><?php echo $this->_var['lang']['no_image']; ?></li>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <div class="clear"></div>
                <?php echo $this->fetch('library/lib_page.lbi'); ?>
            </div>
        </div>
    </div>
	
    <!-- <?php else: ?> -->
    <div id="dialogTxt">
        <?php echo $this->fetch('library/goods_mobile_test.lbi'); ?>
    </div>
    <!-- <?php endif; ?> -->
<!-- <?php else: ?> -->
	<div id="dialogAlbum" ectype="album-warp" data-inid="<?php echo $this->_var['inid']; ?>" data-act="gallery_album_list">
        <div class="dialogTop" ectype="albumFilter">
            <div class="imitate_select select_w220 mr0" id="album_file">
                <div class="cite"><?php if ($this->_var['album_mame']): ?><?php echo $this->_var['album_mame']; ?><?php else: ?><?php echo $this->_var['lang']['select_album']; ?><?php endif; ?></div>
                <ul style="display:none;" ectype="album_list_check">
                    <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                    <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['album_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <input name="album_id" type="hidden" value="<?php echo empty($this->_var['album_id']) ? '0' : $this->_var['album_id']; ?>" ectype="album_id_val" id="album_file_val">
            </div>
            <div class="fl ml10"><a href="javascript:void(0);"  class="btn red_btn btn30" ectype="add_album"><?php echo $this->_var['lang']['add_album']; ?></a></div>
            <div class="fl ml10"><a href="javascript:void(0);"  class="btn red_btn btn30" ectype="albumFile" id="albumFile"><?php echo $this->_var['lang']['upload_image']; ?></a></div>
            <div class="fl album_Percent ml20 hide">
                <div class="label_value">
                    <div class="text_div mr0 w120 pl0"><span class="Percent_pic" ></span></div><div class="Percent"></div>
                </div>
            </div>
        </div>
        <div class="table_list" ectype="pic_list">
            <div class="gallery_album" data-act="get_albun_pic" data-vis="2" data-inid="pic_list" data-url='get_ajax_content.php' data-where="sort_name=<?php echo $this->_var['filter']['sort_name']; ?>&album_id=<?php echo $this->_var['filter']['album_id']; ?>&image_type=<?php echo $this->_var['image_type']; ?>&is_vis=<?php echo $this->_var['is_vis']; ?>&inid=<?php echo $this->_var['inid']; ?>">
                <ul class="ga-images-ul" ectype="pic_replace" data-type="<?php if ($this->_var['inid'] == 'gallery_album'): ?>radio<?php else: ?>check<?php endif; ?>">
                    <?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pic_album');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['pic_album']):
?>
                    <li data-url="<?php echo $this->_var['pic_album']['pic_file']; ?>" data-picid="<?php echo $this->_var['pic_album']['pic_id']; ?>"><div class="img-container"><img src="<?php echo $this->_var['pic_album']['pic_file']; ?>"></div><i class="checked"></i></li>
                    <?php endforeach; else: ?>
                        <li class="notic"><?php echo $this->_var['lang']['no_image']; ?></li>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <div class="clear"></div>
                <?php echo $this->fetch('library/lib_page.lbi'); ?>
            </div>
        </div>
    </div>
<!-- <?php endif; ?> -->
<!--<?php if ($this->_var['log_type'] != 'word'): ?>-->
<script type="text/javascript">
		var uploader_gallery = new plupload.Uploader({//创建实例的构造方法
			runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
			browse_button: 'albumFile', // 上传按钮
			url: "gallery_album.php?is_ajax=1&act=upload_pic", //远程上传地址
			filters: {
				max_file_size: '2mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
				mime_types: [//允许文件上传类型
					{title: "files", extensions: "jpg,png,gif,jpeg"}
				]
			},
			multi_selection: true, //true:ctrl多文件上传, false 单文件上传
			init: {
				FilesAdded: function(up, files) { //文件上传前
					window.Percent = 0; //初始化进度
					var i = 0;
					plupload.each(files, function(file) { //遍历文件
						i ++;
					});
					
					//单个文件比例
					window.Percentage = 1/i; 
					$(".album_Percent").show();
					album_submitBtn();
				},
				FileUploaded: function(up, file, info) { //文件上传成功的时候触发
					window.Percent = window.Percent + Percentage*100;
					
					$(".Percent_pic").css({"width": window.Percent + "%"});
					$(".Percent").html(Math.round(window.Percent) + "%");
					var data = eval("(" + info.response + ")");
					
					$("[ectype='pic_replace']").find(".notic").remove();
					$("[ectype='pic_replace']").prepend("<li data-url='" + data.pic + "' data-picid='" + data.picid + "'><div class='img-container'><img src='" + data.pic + "'></div><i class='checked'></i></li>");
				},
				UploadComplete:function(up,file){//所有文件上传成功时触发
					$(".album_Percent").hide();
					$(".Percent_pic").css({"width":"0%"});
				},
				Error: function(up, err) { //上传出错的时候触发
					alert(err.message);
				}
			}
		});
		uploader_gallery.init();

		function album_submitBtn(){
			var album_id = $("[ectype='album_id_val']").val();
			var data = {
				album_id: album_id
			};
			uploader_gallery.setOption("multipart_params", data);
			uploader_gallery.start();
		};
	</script>
<!--<?php endif; ?>-->
