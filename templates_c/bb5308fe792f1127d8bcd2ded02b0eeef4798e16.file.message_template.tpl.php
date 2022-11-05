<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-11-05 23:00:19
         compiled from "templates/message_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:512522296366eb0399deb8-31686771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb5308fe792f1127d8bcd2ded02b0eeef4798e16' => 
    array (
      0 => 'templates/message_template.tpl',
      1 => 1667684960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '512522296366eb0399deb8-31686771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6366eb039b2937_47178285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6366eb039b2937_47178285')) {function content_6366eb039b2937_47178285($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="refresh" content="3; url=index.php" />

    <meta name="author" content="Quevin"/>
    <meta name="generator" content="Quevin"/>
    <meta name="description" content="Inside the wall you are now"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  </head>

  <body>
  <p style="text-align:center;">
  <img src="images/1661722159822-0.jpg" style="max-width:428px;">
  </p>
  <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</h1>
  <body>
</html>
<?php }} ?>
