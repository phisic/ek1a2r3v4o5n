<?php /*%%SmartyHeaderCode:939917819531368b042e716-48405376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe45e64eed982cae3a3b6aa6a3a155344082b2ba' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockstore/blockstore.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939917819531368b042e716-48405376',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b044e731_29475111',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b044e731_29475111')) {function content_531368b044e731_29475111($_smarty_tpl) {?>
<section id="stores_block_left" class="block  column_box">
	<h4><span>Наши магазины</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
	<div class="block_content blockstore toggle_content">
		<p class="store_image"><a href="http://presta.lan/index.php?controller=stores" title="Наши магазины"><img src="/modules/blockstore/store.jpg" alt="Наши магазины"  /></a></p>
		<p>
			<a class="button btn btn-default" href="http://presta.lan/index.php?controller=stores" title="Наши магазины">Найдите наши магазины на карте</a>
		</p>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>