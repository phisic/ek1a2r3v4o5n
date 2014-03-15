<?php /*%%SmartyHeaderCode:734258441531368afb693f0-20338182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0d9c74a1fd2ccb820aadc317d1799ca7b53eca' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blocksearch/blocksearch-top.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
    '9ff5de5ff85b31e3a65a93f4044f7cc98b8c9f11' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734258441531368afb693f0-20338182',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368afbeda43_97404634',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368afbeda43_97404634')) {function content_531368afbeda43_97404634($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://presta.lan/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top">Поиск</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
	    </p>
        <a class="btn btn-default button btn_add_cart" href="javascript:document.getElementById('searchbox').submit();"><i class="icon-search"></i><span>Поиск</span></a>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://presta.lan/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>