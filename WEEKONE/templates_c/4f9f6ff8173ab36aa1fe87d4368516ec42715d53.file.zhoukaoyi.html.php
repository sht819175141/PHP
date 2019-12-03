<?php /* Smarty version Smarty-3.1.15, created on 2016-10-08 01:40:05
         compiled from ".\templates\zhoukaoyi.html" */ ?>
<?php /*%%SmartyHeaderCode:2444757f84a08c0e599-26761669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9f6ff8173ab36aa1fe87d4368516ec42715d53' => 
    array (
      0 => '.\\templates\\zhoukaoyi.html',
      1 => 1475890801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2444757f84a08c0e599-26761669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57f84a09130e76_71399308',
  'variables' => 
  array (
    'arr' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f84a09130e76_71399308')) {function content_57f84a09130e76_71399308($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="templates/css/style.css">
</head>
<body>
	<table>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['val']->value[0];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value[1];?>
</td></tr>
		<?php } ?>	
	</table>
	
	
</body>
</html><?php }} ?>
