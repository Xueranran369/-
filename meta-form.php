<?php
	
	$title = 'aiosp_home_title';
	$keywords = 'aiosp_home_keywords';
	$description = 'aiosp_home_description';
	$metas = 'aiosp_home_metas';	
	$auto_des = 'web589_auto_description';
	$auto_des_num = 'web589_auto_description_num';
	$tag = 'web589_auto_keywords';
	$suffix = 'dxseo_title_suffix';
	$page_num = 'dxseo_title_paged';
	$sep = 'dxseo_title_sep';
	
	if( isset($_POST['update_index_meta']) && $_POST['update_index_meta'] ){
		$val=array(
			$title => isset($_POST[$title]) ? $_POST[$title] : '',
			$keywords => isset($_POST[$keywords]) ? $_POST[$keywords] : '',
			$description => isset($_POST[$description]) ? $_POST[$description] : '',
			$metas => isset($_POST[$metas]) ? $_POST[$metas] : '',
			$auto_des => isset($_POST[$auto_des]) ? $_POST[$auto_des] : '',
			$auto_des_num => isset($_POST[$auto_des_num]) ? $_POST[$auto_des_num] : '',
			$tag => isset($_POST[$tag]) ? $_POST[$tag] : '',
			$sep => isset($_POST[$sep]) ? $_POST[$sep] : '',
			$suffix => isset($_POST[$suffix]) ? $_POST[$suffix] : '',
			$page_num => isset($_POST[$page_num]) ? $_POST[$page_num] : ''
		);
		update_option('aioseop_options',$val);
	}
	
?>

<style type="text/css">
#container{width:98%;border:solid 1px #ddd;float:left;padding:0 0 20px 30px;background-color:#fff;-webkit-box-shadow:0 1px 1px 0 rgba(0,0,0,.1);box-shadow:0 1px 1px 0 rgba(0,0,0,.1)}.hidden{display:none}h3{background-color:#CCC;padding:5px}#function{margin:25px 0px 10px -34px;background-color:#f7f7f7;border-left:4px solid #ffba00;-webkit-box-shadow:0 1px 1px 0 rgba(0,0,0,.1);box-shadow:0 1px 1px 0 rgba(0,0,0,.1);padding:10px 0;text-indent:30px;font-weight:bold;font-size:14px}textarea{width:600px;height:50px}.wrap h2{margin-bottom:20px}
</style>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.on:radio').click(function(){
			$(this).nextAll('.toggle').fadeIn('slow');
		});
		$('.off:radio').click(function(){
			$(this).nextAll('.toggle').fadeOut('slow');
		});		
	});
</script>

<div class="wrap">

	<div id="icon-options-general" class="icon32"><br></div>
	
	<div id="container">
	<form action="" method="post">
		<div id="feature">
			<h3 id="function">??????SEO????????????</h3>
			<?php $value=get_option('aioseop_options');?>
				<p>
					<label for="<?php echo $auto_des; ?>">????????????????????????????????????description?????????</label>
					<input class="on" type="radio" name="<?php echo $auto_des; ?>" id="<?php echo $auto_des; ?>" value="on" <?php echo ($value[$auto_des]=='on') ? 'checked' : ''; ?>/>?????? 
					<input class="off" type="radio" name="<?php echo $auto_des; ?>" id="<?php echo $auto_des; ?>" value="off" <?php echo ($value[$auto_des]=='off') ? 'checked' : ''; ?>/>?????? 
					<label class="toggle <?php echo ($value[$auto_des]=='off') ? 'hidden' : ''; ?>" for="<?php echo $auto_des_num; ?>" >????????????</label>
					<input class="toggle" <?php echo ($value[$auto_des]=='off') ? 'hidden' : ''; ?> type="text" name="<?php echo $auto_des_num; ?>" id="<?php echo $auto_des_num; ?>" value="<?php echo $value[$auto_des_num]; ?>" size="20" />
				</p>
				<p>
					<label for="<?php echo $tag; ?>">????????????????????????????????????keyword?????????</label>
					<input type="radio" name="<?php echo $tag; ?>" id="<?php echo $tag; ?>" value="on" <?php echo ($value[$tag]=='on') ? 'checked' : ''; ?>/>?????? 
					<input type="radio" name="<?php echo $tag; ?>" id="<?php echo $tag; ?>" value="off" <?php echo ($value[$tag]=='off') ? 'checked' : ''; ?>/>?????? 
				</p>              
 				<p>
					<label for="<?php echo $suffix; ?>">??????title???????????????????????????</label>
                    <?php $val_suffix = isset($value[$suffix]) ? $value[$suffix] : ''; ?>
					<input type="checkbox" name="<?php echo $suffix; ?>" id="<?php echo $suffix; ?>" value="on" <?php checked( $val_suffix,'on' ); ?>/> ??????
				</p>
  				<p>
					<label for="<?php echo $page_num; ?>">title?????????????????????</label>
                    <?php $val_page_num = isset($value[$page_num]) ? $value[$page_num] : ''; ?>
					<input type="checkbox" name="<?php echo $page_num; ?>" id="<?php echo $page_num; ?>" value="on" <?php checked( $val_page_num,'on' ); ?>/> ??????
				</p>
 				<p>
					<label for="<?php echo $sep; ?>">title??????????????????</label>
                    <?php $val_sep = isset($value[$sep]) ? $value[$sep] : ' | '; ?>
					<input type="text" name="<?php echo $sep; ?>" id="<?php echo $sep; ?>" value="<?php echo $val_sep; ?>"/>
                    <span style="color:gray;"> ???????????????????????????????????????</span>
				</p>                                                          						
		</div>
	
		<div id="meta">
			<h3 id="function">??????SEO??????</h3>
			<p>
				<label for="<?php echo $title; ?>" style="padding-right:15px;"><b>???????????????</b></label>
				<input type="text" name="<?php echo $title; ?>" id="<?php echo $title; ?>" value="<?php echo esc_attr(stripslashes($value[$title])); ?>" size="80" />
			</p>
			<p>
				<label for="<?php echo $keywords; ?>" style="padding-right:15px;"><b>???????????????</b></label>
				<input type="text" name="<?php echo $keywords; ?>" id="<?php echo $keywords; ?>" value="<?php echo $value[$keywords]; ?>" size="80" />
			</p>
			<p>
				<label for="<?php echo $description; ?>" style="display:block;padding-bottom:10px;" ><b>???????????????</b></label>
				<textarea name="<?php echo $description; ?>" id="<?php echo $description; ?>" ><?php echo stripslashes($value[$description]); ?></textarea>
			</p>
			<p>
				<label for="<?php echo $metas; ?>" style="display:block;padding-bottom:10px;"><b>Metas(?????????)</b></label>
				<textarea name="<?php echo $metas; ?>" id="<?php echo $metas; ?>" ><?php echo stripslashes($value[$metas]); ?></textarea>
				<div style="color:gray;">???????????? ??????</div>
			</p>
				<input type="hidden" name="meta_save" value="on"/>
				<?php submit_button('??????SEO??????','primary','update_index_meta');?>
		</div>
	</form>
	</div>
	
	<div style="float:left;width:200px;margin-left:20px;border: 1px solid #DDD;background-color: #F7F7FF;padding:10px;display:none;">
		<?php do_action('web589_admin_side_show');?>
	</div>

</div>

<div style="clear:both;"></div>

<?php do_action( 'DXSEO_form_bottom' ); ?>