<? 

$bt=form_input(array('type'=>'submit','name'=>'_INPUT_BT','value'=>"Simpan",'class'=>'bt')).form_hidden('_INPUT','true');
?>
<!-- mce editor -->
<?=loadJs('jquery.funtion.global.js',false,true)?>	
<?=loadJs('tiny_mce/jquery.tinymce.js',false,true)?>	
<script type="text/javascript">
$(function() {
	$('textarea.summary,textarea.desc,textarea.ket_diskon').tinymce({
		// Location of TinyMCE script
		script_url : '<?=loadJs('tiny_mce/tiny_mce.js',false,true,true)?>',
		theme : "advanced",
		plugins : "advimage,advlink,preview,paste,media,imagemanager,inlinepopups,pagebreak",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,pagebreak,|,link,unlink,preview,code",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "<?=loadCss('general.css',false,false,true)?>" //,<?=base_url('site')?>priv/css/default/temp.css"
	});
});
</script>

<!-- hover -->
<?=loadJs('hover/hover.js',false,true)?>
<?=loadCss('js/hover/hover.css',false,true,false,true)?>

<!-- autocomplete -->
<?=loadJs('autocomplete/jquery.autocomplete.js',false,true)?>
<?=loadCss('js/autocomplete/styles.css',false,true,false,true)?>

<div class="header">
	<?=loadImg('icon/mainmenu.png','',false,config_item('modulename'),true)?>
	<span><?=lang('det_produk')?></span>
</div>
<br class="clr" />

<?=form_open_multipart(current_url(),array('id'=>'submitthisform'))?>


<fieldset class="produk_detail">
<legend>Profile</legend>
<? if(isset($ok)){?><div class="<?=$ok?'msg_success':'msg_error'?>"><?=$msg?></div><br class="clear" /><? }?>

<table class="admintable" cellspacing="1">
<tbody>



<tr>
	<th>Deskripsi</th>
	<td><textarea name="desc" class="desc"><?=$desc?></textarea></td>
</tr>

</tbody>
</table>
</fieldset>


</tbody>
</table>
</fieldset><a href="<?=base_url('admin')?>">Kembali</a>

<?=$bt?>
<br />
</form>




