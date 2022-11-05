 <?php

session_start();

// put full path to Smarty.class.php
require_once('vendor/smarty/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';



   if ( isset($_SESSION['message']) )
       $smarty->assign('MESSAGE', $_SESSION['message']);
   else
       $smarty->assign('MESSAGE', '');

       if ( isset($_SESSION['email']) )
       $smarty->assign('email', $_SESSION['email']);
   else
       $smarty->assign('email', '');


  // Actualiza o template
  $smarty->display('login_template.tpl');

?>
