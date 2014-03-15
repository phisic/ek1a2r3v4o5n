<?php /*%%SmartyHeaderCode:1708964671531b80b1c334a6-13345171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e7dc3648df05995d66b1db58613dfd71d1f804e' => 
    array (
      0 => '/var/www/prestashop/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708964671531b80b1c334a6-13345171',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531b80b1ccbed3_46074483',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b80b1ccbed3_46074483')) {function content_531b80b1ccbed3_46074483($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4 class="title_block"><a href="http://presta.lan/index.php?controller=manufacturer" title="Производители">Производители</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://presta.lan/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Подробнее о Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://presta.lan/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Подробнее о Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Все производители</option>
									<option value="http://presta.lan/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://presta.lan/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>