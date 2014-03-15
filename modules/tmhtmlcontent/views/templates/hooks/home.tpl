{if $htmlitems.items}
	{foreach name=itemFirst from=$htmlitems.items item=hItemF}
    	{if $smarty.foreach.itemFirst.index < 1}
        	<div class="right-banner">
            	{if $hItemF.url}
                        <a href="{$hItemF.url}" class="item-link"{if $hItemF.target == 1} target="_blank"{/if}>
                    {/if}
                        {if $hItemF.image}
                            <img src="{$module_dir}images/{$hItemF.image}" class="item-img" alt="" />
                        {/if}
                        {if $hItemF.title && $hItemF.title_use == 1}
                            <h3 class="item-title">{$hItemF.title}</h3>
                        {/if}
                        {if $hItemF.html}
                            <div class="item-html">
                                {$hItemF.html}                      
                            </div>
                        {/if}
                    {if $hItemF.url}
                        </a>
                    {/if}
            </div>
            <div class="clearfix"></div>
        {/if}
    {/foreach}
    <div id="htmlcontent_home">
        <ul class="htmlcontent-home clearfix row">
            {foreach name=items from=$htmlitems.items item=hItem}
            	{if $smarty.foreach.items.iteration > 1}
                	<li class="htmlcontent-item col-xs-12 col-sm-12">
                    {if $hItem.url}
                        <a href="{$hItem.url}" class="item-link"{if $hItem.target == 1} target="_blank"{/if}>
                    {/if}
                        {if $hItem.image}
                            <img src="{$module_dir}images/{$hItem.image}" class="item-img" alt="" />
                        {/if}
                        {if $hItem.title && $hItem.title_use == 1}
                            <h3 class="item-title">{$hItem.title}</h3>
                        {/if}
                        {if $hItem.html}
                            <div class="item-html">
                                {$hItem.html} <i class="icon-double-angle-right"></i>                            
                            </div>
                        {/if}
                    {if $hItem.url}
                        </a>
                    {/if}
                </li>
                {/if}
            {/foreach}
        </ul>
    </div>
{/if}
