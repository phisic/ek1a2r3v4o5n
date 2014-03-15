<?php /*%%SmartyHeaderCode:2036280816531368b007a155-79697243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952891fcb35073aab5805cf35dee064e81207b4b' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockcategories/blockcategories.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
    '0822946f7b9650c1ce7b65dc19e0a33386538599' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockcategories/category-tree-branch.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036280816531368b007a155-79697243',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b00e6289_50062501',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b00e6289_50062501')) {function content_531368b00e6289_50062501($_smarty_tpl) {?>
<!-- Block categories module -->
<section  id="categories_block_left"  class="column_box block">
	<h4><span>Категории</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
		<ul class="toggle_content tree dhtml">
									
<li class="category_3">
	<a href="http://presta.lan/index.php?id_category=3&amp;controller=category&amp;id_lang=1"  title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li class="category_4">
	<a href="http://presta.lan/index.php?id_category=4&amp;controller=category&amp;id_lang=1"  title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="category_5 last">
	<a href="http://presta.lan/index.php?id_category=5&amp;controller=category&amp;id_lang=1"  title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
</section>
<!-- /Block categories module -->
<?php }} ?>