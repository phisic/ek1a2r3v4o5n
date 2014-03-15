<?php /*%%SmartyHeaderCode:1494722015531368b01576e1-23622493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a395c91ea727d82549d6ef8d600b0598fcd73a8c' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blocksupplier/blocksupplier.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1494722015531368b01576e1-23622493',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b01be510_38150674',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b01be510_38150674')) {function content_531368b01be510_38150674($_smarty_tpl) {?>
<!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Поставщики</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item">
			<a href="http://presta.lan/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Подробнее о AppleStore"><i class="icon-ok"></i>AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://presta.lan/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Подробнее о Shure Online Store"><i class="icon-ok"></i>Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
		
				<select class="form-control" id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Все постащики</option>
										<option value="http://presta.lan/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
										<option value="http://presta.lan/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
		
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>