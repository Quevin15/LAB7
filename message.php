<?php

  session_start();

 require_once('/usr/share/php/smarty/libs/Smarty.class.php');
  $smarty = new Smarty();


  $smarty->template_dir = 'templates';
  $smarty->compile_dir ='templates_c';

  $smarty->assign('MESSAGE',$_SESSION['MESSAGE']);
  $smarty->display('message_template.tpl');

?>
