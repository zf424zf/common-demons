<html>
<head>
    <title>{$title|capitalize}</title>
</head>
<body>
<p>
    hi,{$name},welcome to this page!
    {$create_time|date_format:"%Y %m %d"}
    <!-- 注释 -->
    {* $name *}
    {if $name != 'huhu'}

</p>
<div>12345</div>
{/if}
{include file='div.tpl'}
{literal}
<script>
    console.log(1);
</script>
{/literal}
</body>
</html>