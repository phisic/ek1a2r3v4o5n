<?php /*%%SmartyHeaderCode:1384885178531b80dcd5bbe7-33616467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718760179fc5dd573a411e3f58c21cc455f501f9' => 
    array (
      0 => '/var/www/prestashop/modules/blocksupplier/blocksupplier.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1384885178531b80dcd5bbe7-33616467',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531b80dce13871_67407198',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b80dce13871_67407198')) {function content_531b80dce13871_67407198($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block"><a href="http://presta.lan/index.php?controller=supplier" title="Поставщики">Поставщики</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://presta.lan/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Подробнее о AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://presta.lan/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Подробнее о Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Все поставщики</option>
									<option value="http://presta.lan/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://presta.lan/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>