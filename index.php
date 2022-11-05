<?php

include 'db.php';

session_start();

require_once('vendor/smarty/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir ='templates_c';

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);


if($db){
  $user_id = $_SESSION['id'];
  $query_user = "SELECT * FROM users WHERE id = '$user_id'";

  //execute query
  if(!($result = @ mysqli_query($db, $query_user)))
   showerror($db);

   $user = mysqli_fetch_assoc($result);

   if(mysqli_num_rows($result) != 0){
    $smarty->assign('USER',$user);
   }

   /////////////////////////////////
  $query_names= "SELECT * FROM users";
  if(!($result = @ mysqli_query($db, $query_names)))
   showerror($db);

  $nrows = mysqli_num_rows($result);
   for($i=0; $i<$nrows; $i++)
     $names[$i] = mysqli_fetch_assoc($result);

   foreach($names as $name)
     $asso_name[$name['id']] = $name['name'];

  $smarty->assign('NAMES',$asso_name);
////////////////////////

  $query_micropost = "SELECT * FROM microposts";
  if(!($result = @ mysqli_query($db, $query_micropost)))
   showerror($db);

  $nrows = mysqli_num_rows($result);
   for($i=0; $i<$nrows; $i++)
     $microposts[$i] = mysqli_fetch_assoc($result);

  // faz a atribuição das variáveis do template smarty
  $smarty->assign('MICROPOSTS',$microposts);

   $smarty->display('index_template.tpl');

  }
?>
