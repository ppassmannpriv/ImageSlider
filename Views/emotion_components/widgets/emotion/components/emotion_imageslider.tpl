<div class="topslider">
	<div class="sliderwrap">
	<link type="text/css" media="screen" rel="stylesheet" href="/templates/klein/frontend/_resources/javascript/bxslider.css">
	<script type="text/javascript" src="{link file='/templates/klein/frontend/_resources/javascript/easing.js'}"></script>
	<script type="text/javascript" src="{link file='/templates/klein/frontend/_resources/javascript/bxslider.js'}"></script>
	<script type="text/javascript" src="{link file='/templates/klein/frontend/_resources/javascript/sliderscript.js'}"></script>

	<ul>
	{if $Data.image_1}
		<li>
			<a href="{$Data.image_link_1}" title="{$Data.image_title_1}"><img src="{$Data.image_1}" alt="{$Data.image_alt_1}" /></a>
		</li>
	{/if}

	{if $Data.image_2}
		<li>
			<a href="{$Data.image_link_2}" title="{$Data.image_title_2}"><img src="{$Data.image_2}" alt="{$Data.image_alt_2}" /></a>
		</li>
	{/if}

	{if $Data.image_3}
		<li>
			<a href="{$Data.image_link_3}" title="{$Data.image_title_3}"><img src="{$Data.image_3}" alt="{$Data.image_alt_3}" /></a>
		</li>
	{/if}

	{if $Data.image_4}
		<li>
			<a href="{$Data.image_link_4}" title="{$Data.image_title_4}"><img src="{$Data.image_4}" alt="{$Data.image_alt_4}" /></a>
		</li>
	{/if}

	{if $Data.image_5}
		<li>
			<a href="{$Data.image_link_5}" title="{$Data.image_title_5}"><img src="{$Data.image_5}" alt="{$Data.image_alt_5}" /></a>
		</li>
	{/if}
	</ul>
	</div>
</div>