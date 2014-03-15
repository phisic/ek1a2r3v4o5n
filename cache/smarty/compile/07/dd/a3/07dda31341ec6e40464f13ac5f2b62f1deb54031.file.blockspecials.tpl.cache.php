<?php /* Smarty version Smarty-3.1.14, created on 2014-03-02 12:21:52
         compiled from "/var/www/prestashop/themes/theme852/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532093984531368b03a9f58-15332416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07dda31341ec6e40464f13ac5f2b62f1deb54031' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockspecials/blockspecials.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532093984531368b03a9f58-15332416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'special' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b041ffd9_58348031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b041ffd9_58348031')) {function content_531368b041ffd9_58348031($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Block specials -->
    <section id="specials" class="main_page_products block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
	<div class="block_content toggle_content">
<?php if ($_smarty_tpl->tpl_vars['special']->value){?>
		<ul>
			<li class="clearfix">
            	<div class="inner_content clearfix">
                	<div class="product_image">
                    	<a class="products_block_img" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['legend'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
" /></a>
                    </div>
                    <div>
                    <div class="label-box">
                    	<?php if (isset($_smarty_tpl->tpl_vars['special']->value['reduction'])&&$_smarty_tpl->tpl_vars['special']->value['reduction']&&isset($_smarty_tpl->tpl_vars['special']->value['on_sale'])&&$_smarty_tpl->tpl_vars['special']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['special']->value['show_price'])&&$_smarty_tpl->tpl_vars['special']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><div class="sale-box"><span class="on_sale"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span></div><?php }?>
                    </div>
                    <h5><a class="product_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8'),35,'...');?>
</a></h5>
                    <p class="product_desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['special']->value['description_short']), 'html', 'UTF-8'),60,'...');?>
</p>                
                    <span class="price price-new"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
                    <span class="price-old price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['priceWithoutReduction_tax_excl']->value),$_smarty_tpl);?>
<?php }?></span>
                    </div>
                </div>
			</li>
		</ul>
		<a class="button_large btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a>
<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No product specials are available at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</p>
<?php }?>
	</div>
</section>
<!-- /MODULE Block specials --><?php }} ?>