<?php /*%%SmartyHeaderCode:1597758775531368b00ebe75-81209361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bfdde100f0019cfffedcef00d53bded5a1c01cd' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597758775531368b00ebe75-81209361',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b0151fd6_37831216',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b0151fd6_37831216')) {function content_531368b0151fd6_37831216($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Производители</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item"><a href="http://presta.lan/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Подробнее о Apple Computer, Inc"><i class="icon-ok"></i>Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://presta.lan/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Подробнее о Shure Incorporated"><i class="icon-ok"></i>Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			
				<select class="form-control" id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Все производители</option>
									<option value="http://presta.lan/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://presta.lan/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>