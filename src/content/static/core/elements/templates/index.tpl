{extends 'file:templates/layouts/base.tpl'}

{*block 'template_variables'}{/block*}
{*block 'template_seo_meta'}{/block*}
{*block 'template_robots'}{/block*}

{block 'template_styles'}{/block}

{block 'template_content'}
    {$res.content}
{/block}

{block 'template_scripts'}{/block}
