<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 13:59:39
         compiled from "/var/www/prestashop/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19354280585318c59be79bb3-69017966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbaf0b4e7d78f152567303ba740451e7b58db30' => 
    array (
      0 => '/var/www/prestashop/modules/addsharethis/addsharethis_header.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19354280585318c59be79bb3-69017966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5318c59c056d95_46351977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5318c59c056d95_46351977')) {function content_5318c59c056d95_46351977($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>