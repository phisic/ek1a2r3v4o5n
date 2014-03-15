<?php /* Smarty version Smarty-3.1.14, created on 2014-03-02 12:21:52
         compiled from "/var/www/prestashop/themes/theme852/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028243711531368b0822e13-51608548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce55b1657f04ca0dbe68b1870952ead733886381' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/footer.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028243711531368b0822e13-51608548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'RightColumn' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368b084b5c3_08166328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368b084b5c3_08166328')) {function content_531368b084b5c3_08166328($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))!=''){?><?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(3, null, 0);?><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['RightColumn']->value)&&$_smarty_tpl->tpl_vars['RightColumn']->value!=0){?>
				<div id="right_column" class="col-xs-12 col-sm-3 column">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
            <?php }?>
			</div>
            </div>
</div>
<!-- Footer -->
			<div class="page_wrapper_3 clearfix">
                <footer id="footer" class="container">
                <div class="row modules">
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                     <?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
                        <p class="center clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
                    <?php }?>
                </div>
                   
                </footer>
            </div>
	<?php }?>
	</body>
</html>
<?php }} ?>