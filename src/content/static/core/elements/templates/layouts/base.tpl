{set $version = '?ver=1.0.0'}

{set $res = $_modx->resource}
{set $config = $_modx->config}
{set $pageParam = $.get.page | sanitize}
{set $pageNum = $pageParam ? ' | стр. ' ~ $pageParam : ''}

{set $siteMenu = $_modx->runSnippet('@FILE snippets/pdoMenuFenom.php', [
    'parents' => 0,
    'level' => 2,
    'sortby' => 'menuindex',
    'sortdir' => 'asc',
    'where' => [
    	'deleted' => 0, 
    	'published' => 1,
    	'hidemenu' => 0,
    ],
    'toArray' => true,
])}

{block 'template_variables'}{/block}

<!DOCTYPE html>
<html lang="{$config.cultureKey}">
    
<head>
    <meta charset="UTF-8">
    
    {block 'template_seo_meta'}
        <title>{$res.seo_title ?: $res.pagetitle}{$pageNum}</title>
        <meta name="description" content="{$res.seo_description}">
        <meta property="og:title" content="{$res.seo_title ?: $res.pagetitle}{$pageNum}">
        <meta property="og:description" content="{$res.seo_description}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{$config.site_name}">
    {/block}
    
    {block 'template_robots'}
        {if $res.searchable}
            <meta name="robots" content="index, follow">
        {else}
            <meta name="robots" content="noindex, nofollow">
        {/if}
    {/block}

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    {* modules *}
    <link rel="stylesheet" href="/assets/dev/modules/notyf/notyf.min.css{$version}">
    
    {* main.css *}
    <link rel="stylesheet" href="/assets/templates/css/main.css{$version}">
    
    {block 'template_styles'}{/block}
</head>

<body>
    {include 'file:chunks/base/header.tpl'}

    {block 'template_content'}{/block}

    {include 'file:chunks/base/footer.tpl'}
    
    {include 'file:chunks/base/modals.tpl'}
    {include 'file:chunks/base/scripts.tpl'}
    
    {block 'template_scripts'}{/block}
</body>

</html>
