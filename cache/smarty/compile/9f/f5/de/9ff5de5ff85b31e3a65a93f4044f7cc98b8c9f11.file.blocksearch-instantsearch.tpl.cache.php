<?php /* Smarty version Smarty-3.1.14, created on 2014-03-02 12:21:51
         compiled from "/var/www/prestashop/themes/theme852/modules/blocksearch/blocksearch-instantsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866257297531368afba1ae7-81995532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff5de5ff85b31e3a65a93f4044f7cc98b8c9f11' => 
    array (
      0 => '/var/www/prestashop/themes/theme852/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1392747076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866257297531368afba1ae7-81995532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantsearch' => 0,
    'blocksearch_type' => 0,
    'search_ssl' => 0,
    'link' => 0,
    'cookie' => 0,
    'ajaxsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531368afbe9543_63959176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531368afbe9543_63959176')) {function content_531368afbe9543_63959176($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['instantsearch']->value){?>
	<script type="text/javascript">
	// <![CDATA[
		function tryToCloseInstantSearch() {
			if ($('#old_center_column').length > 0)
			{
				$('#center_column').remove();
				$('#old_center_column').attr('id', 'center_column');
				$('body').removeClass('instant_search');
				$('#slider .nivo-main-image').trigger('mouseout');
				$('#center_column').show();
				return false;
			}
		}
		
		instantSearchQueries = new Array();
		function stopInstantSearchQueries(){
			for(i=0;i<instantSearchQueries.length;i++) {
				instantSearchQueries[i].abort();
			}
			instantSearchQueries = new Array();
		}
		
		$("#search_query_<?php echo $_smarty_tpl->tpl_vars['blocksearch_type']->value;?>
").keyup(function(){
			if($(this).val().length > 0){
				stopInstantSearchQueries();
				instantSearchQuery = $.ajax({
					url: '<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1){?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true));?>
<?php }else{ ?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'));?>
<?php }?>',
					data: {
						instantSearch: 1,
						id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>
,
						q: $(this).val()
					},
					dataType: 'html',
					type: 'POST',
					success: function(data){
						if($("#search_query_<?php echo $_smarty_tpl->tpl_vars['blocksearch_type']->value;?>
").val().length > 0)
						{
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="instant ' + $('#old_center_column').attr('class') + '">'+data+'</div>');
							$('#center_column').find('ul#product_list').removeClass('grid').addClass('list');
							$('body').addClass('instant_search');
							$('#old_center_column').hide();
							// Button override
							ajaxCart.overrideButtonsInThePage();
							$('#slider .nivo-main-image').trigger('mouseenter');
							$("#instant_search_results a.close-search").click(function() {
								$("#search_query_<?php echo $_smarty_tpl->tpl_vars['blocksearch_type']->value;?>
").val('');
								$('body').removeClass('instant_search');
								$('#slider .nivo-main-image').trigger('mouseout');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	// ]]>
	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ajaxsearch']->value){?>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_<?php echo $_smarty_tpl->tpl_vars['blocksearch_type']->value;?>
")
				.autocomplete(
					'<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1){?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true));?>
<?php }else{ ?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'));?>
<?php }?>', {
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
							id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>

						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_<?php echo $_smarty_tpl->tpl_vars['blocksearch_type']->value;?>
').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>
<?php }?><?php }} ?>