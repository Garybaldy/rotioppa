<!DOCTYPE HTML>
<html lang="id">
<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="<?=$keyword?>" />
	<meta name="description" content="<?=$description?>" />
	<link href='<?=base_url()?>themes/simple/img/images/logo.png' rel='SHORTCUT ICON'/>
	<title><?=$title?></title>

	<?=loadCss('index.css')?>
	<?=loadCss('style.css')?>
	<!-- <?=loadCss('jquery.jscrollpane.css')?> -->
	<?=loadCss('nav.css')?>
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
    <?=loadJs('jquery.js',false,true)?>
	<!-- lib for fancy -->
  


	<?=isset($template['metadata'])?$template['metadata']:''?>
	<?=isset($customheader)?$customheader:''?>
</head>



	<header>
		<!--<div class="call_center">
			Call Center : 081320572408
		</div>
		<br>-->
		<div id="jb-toolbar" style="background:url('<?=base_url()?>themes/simple/img/images/header_bg.png') repeat;">
			
			<?=isset($template['partials']['pg_topbar'])?$template['partials']['pg_topbar']:''?>
		</div>
	</header>
<body style="background:url('<?=base_url()?>themes/simple/img/images/pattern.jpg');">

<div id="page" class="main">


	<section class="sidebar">
		
		<? if(isset($template['partials']['pg_block5'])){?>
		<div id="block_testi">
			<div id="block-wrap">
					<div id="intro">
						<? echo $template['partials']['pg_block5'];?>
					</div>
			</div>
		</div>
		<? }?>
	
	</section>
	<section class="konten">
		
		<div id="block-body">
			<? if(isset($template['partials']['pg_banner'])){?>
			<div id="block-banner">
				<? echo $template['partials']['pg_banner'];?>
			</div>
			<? }?>
		</div>
	
		<? if(isset($template['partials']['pg_block4'])){?>
		<div id="block_produk_terbaru">
			<div id="block-wrap">
					<div id="intro">
						<? echo $template['partials']['pg_block4'];?>
					</div>
				
						
				
			</div>
		</div>
		<? }?>
	
		
	
	<div id="block-wrap">
		<div id="block-content" <?=isset($template['partials']['pg_sidebar'])?'class="width-content"':'';?>>
			<?=$template['body']?>
			<? if(isset($template['partials']['pg_block3'])){?>
				<div id="block-wrap">
				<? echo $template['partials']['pg_block3'];?>
				</div>
			<? }?>
		</div>
		
	</div>	
	
	</section>

</div>
	<div class="clearfix">
</div>
	<footer>
		<div class="foot-container">
		<? if(isset($template['partials']['pg_footer'])){echo $template['partials']['pg_footer'];}else{$this->template->load_view_ontheme('footer');}?>	
		</div>
	</footer>
</body>
</html>
