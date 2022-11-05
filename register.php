<?php

session_start();

// put full path to Smarty.class.php
require_once('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';



if(isset($_SESSION['message_error'])){
  $smarty->assign('MESSAGE',$_SESSION['message_error']);
}

if (isset($_SESSION['new_email']))
   $smarty->assign('new_email', $_SESSION['new_email']);
else
   $smarty->assign('new_email', '');

if (isset($_SESSION['new_name']))
   $smarty->assign('new_name', $_SESSION['new_name']);
else
   $smarty->assign('new_name', '');

if (isset($_SESSION['password']))
   $smarty->assign('password', $_SESSION['password']);
else
   $smarty->assign('password', '');

if (isset($_SESSION['password_repeat']))
   $smarty->assign('password_repeat', $_SESSION['password_repeat']);
else
   $smarty->assign('password_repeat', '');

// Actualiza o template
$smarty->display('register_template.tpl');
?>
