<?php /*%%SmartyHeaderCode:65806176531368b06302e4-20562787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761dacf9a07b0532b225a264b1fbb8c647ca3027' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65806176531368b06302e4-20562787',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b0683cd8_38788962',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b0683cd8_38788962')) {function content_531368b0683cd8_38788962($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="block blockmyaccountfooter col-sm-3">
	<h4>Моя учетная запись<i class="icon-plus-sign"></i></h4>
		<ul class="list-footer toggle_content clearfix">
			<li><a href="http://presta.lan/index.php?controller=history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://presta.lan/index.php?controller=order-slip" title="Мои кредитные квитанции" rel="nofollow">Мои кредитные квитанции</a></li>
			<li><a href="http://presta.lan/index.php?controller=addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://presta.lan/index.php?controller=identity" title="Управление моей личной информацией" rel="nofollow">Моя личная информация</a></li>
						
		</ul>    		
</section>
<!-- /Block myaccount module -->
<?php }} ?>