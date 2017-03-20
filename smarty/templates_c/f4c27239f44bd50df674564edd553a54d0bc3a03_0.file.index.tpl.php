<?php
/* Smarty version 3.1.31, created on 2017-03-16 14:13:17
  from "C:\wamp64\www\single-php\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ca2cfd9e91c2_94966931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c27239f44bd50df674564edd553a54d0bc3a03' => 
    array (
      0 => 'C:\\wamp64\\www\\single-php\\smarty\\templates\\index.tpl',
      1 => 1489644795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:div.tpl' => 1,
  ),
),false)) {
function content_58ca2cfd9e91c2_94966931 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\wamp64\\bin\\php\\php7.0.10\\includes\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\bin\\php\\php7.0.10\\includes\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<html>
<head>
    <title><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>
</title>
</head>
<body>
<p>
    hi,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,welcome to this page!
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['create_time']->value,"%Y %m %d");?>

    <!-- 注释 -->
    
    <?php if ($_smarty_tpl->tpl_vars['name']->value != 'huhu') {?>

</p>
<div>12345</div>
<?php }
$_smarty_tpl->_subTemplateRender('file:div.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    console.log(1);
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
