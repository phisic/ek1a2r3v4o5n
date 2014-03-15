<?php /*%%SmartyHeaderCode:594532519531368afae40e2-53296357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effc5b1069697ce852726a957cd7a9edace426f3' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594532519531368afae40e2-53296357',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368afb64cd8_59771126',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368afb64cd8_59771126')) {function content_531368afb64cd8_59771126($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links" class="hidden-xs">
        <!--li><a href="http://presta.lan/index.php" class="header_links_home">Главная</a></li-->
        <li id="header_link_contact"><a class="header_links_contact" href="http://presta.lan/index.php?controller=contact" title="Контакты">Контакты</a></li>
        <li id="header_link_sitemap"><a class="header_links_sitemap" href="http://presta.lan/index.php?controller=sitemap" title="Карта сайта">Карта сайта</a></li>
        <!--li id="header_link_bookmark">
            <script type="text/javascript">writeBookmarkLink('http://presta.lan/index.php', 'ECommerce', 'в закладки');</script>
        </li-->

        
    </ul>

    <div class="mobile-link-top header-button visible-xs">
        <h4 class="icon_wrapp">
             <span class="title-hed"></span><i class="arrow_header_top_menu arrow_header_top icon-reorder"></i>
        </h4>
        <ul id="mobilelink" class="list_header">
            <!--li><a href="http://presta.lan/index.php" class="header_links_home">Главная</a></li-->
            <li id="header_link_contact"><a class="header_links_contact" href="http://presta.lan/index.php?controller=contact" title="Контакты">Контакты</a></li>
            <li id="header_link_sitemap"><a class="header_links_sitemap" href="http://presta.lan/index.php?controller=sitemap" title="Карта сайта">Карта сайта</a></li>
            <!--li id="header_link_bookmark">
                <script type="text/javascript">writeBookmarkLink('http://presta.lan/index.php', 'ECommerce', 'в закладки');</script>
            </li-->
		</ul>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


<?php }} ?>