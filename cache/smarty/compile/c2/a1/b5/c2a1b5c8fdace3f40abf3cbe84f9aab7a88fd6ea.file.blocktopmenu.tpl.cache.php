<?php /* Smarty version Smarty-3.1.14, created on 2014-03-08 15:19:08
         compiled from "/var/www/prestashop/themes/theme852/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894792616531368afc6f0b6-34515691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a1b5c8fdace3f40abf3cbe84f9aab7a88fd6ea' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1394309945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894792616531368afc6f0b6-34515691',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368afc918d6_36384469',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368afc918d6_36384469')) {function content_531368afc918d6_36384469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
</div>
<div class="menu_wrapper">
	<div class="container">
        <div id="menu-wrap" class="clearfix desktop">
            <div id="menu-trigger"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blocktopmenu'),$_smarty_tpl);?>
<i class="menu-icon icon-plus-sign-alt"></i></div>
                <ul id="menu-custom">
                <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
                        <li class="search">
                            <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                                        <input type="hidden" name="controller" value="search" />
                                <input type="hidden" value="position" name="orderby"/>
                                <input type="hidden" value="desc" name="orderway"/>
                                <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" placeholder="Search..." />
                            </form>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    <script type="text/javascript">
		$(document).ready(function() {
            $('#menu-custom li:has(ul)').addClass('hasSub');
        });
	</script>
<?php }?><?php }} ?>