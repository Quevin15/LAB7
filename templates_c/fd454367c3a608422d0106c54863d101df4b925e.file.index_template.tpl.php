<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-11-05 23:00:12
         compiled from "templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6945568236366eafce08fc6-01535175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd454367c3a608422d0106c54863d101df4b925e' => 
    array (
      0 => 'templates/index_template.tpl',
      1 => 1667684960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6945568236366eafce08fc6-01535175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER' => 0,
    'MICROPOSTS' => 0,
    'micropost' => 0,
    'NAMES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6366eafce7fa76_10122874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6366eafce7fa76_10122874')) {function content_6366eafce7fa76_10122874($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/share/php/smarty3/plugins/modifier.date_format.php';
?><!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8";/>
    <meta name="author" content="Quevin"/>
    <meta name="generator" content="Quevin"/>
    <meta name="description" content="Once I felt the warm inside the walls I knew that wasn't an escape anymore."/>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"
  title="index template" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"><?php echo '</script'; ?>
>


  <title>INSIDE THE WALLS</title>

  </head>

  <body>

    <!--- #### THE HEAD #### -->
    <div id="header">

      <div class="subHeader">
        <div class="container-fluid" style="padding-top:1ex">

          <div class="row">

            <div class="col-4">

    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
         <ol class="breadcrumb">
          <?php if (isset($_smarty_tpl->tpl_vars['USER']->value)) {?>
           <li class="breadcrumb-item active" aria-current="page">/<?php echo $_smarty_tpl->tpl_vars['USER']->value['name'];?>
</li>
           <?php } else { ?>
           <li class="breadcrumb-item active" aria-current="page">/home</li>
           <?php }?>
          </ol>
        </nav>
            </div>

            <div class="col-8" style="text-align:right;">

              <?php if (isset($_smarty_tpl->tpl_vars['USER']->value)) {?>
              <a href="./logout_action.php">logout</a>
              <a href=#>post blog</a>
              <?php } else { ?>
              <a href="./login.php">login</a>
              <a href="./register.php">register</a>
              <?php }?>
              <a href=#>Welcome <?php echo (($tmp = @$_smarty_tpl->tpl_vars['USER']->value['name'])===null||$tmp==='' ? "anon" : $tmp);?>
</a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class ="wrapper">
    <div class="container">
      <h1 class="blogName">Inside the Walls</h1>
      <div class="row">


<?php  $_smarty_tpl->tpl_vars['micropost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['micropost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MICROPOSTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['micropost']->key => $_smarty_tpl->tpl_vars['micropost']->value) {
$_smarty_tpl->tpl_vars['micropost']->_loop = true;
?>
        <div class="col-md-6">
    <div class="blogPost">
<div class="card">
  <img src="images/IamMarinush.png" class="card-img-top" alt="ruka">
  <div class="card-body">
    <h4 class="card-title"><strong><?php echo $_smarty_tpl->tpl_vars['micropost']->value['title'];?>
</strong></h4>

  <div id="multiCollapseExample1<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
" class="multi-collapse<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
 collapse show" style="">
    <p class="card-text text-truncate">

    <?php echo $_smarty_tpl->tpl_vars['micropost']->value['content'];?>

    </p>
    </div>
    <p>
    <button class="btn btn-primary" type="button" data-toggle="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
" aria-expanded="false" aria-controls="multiCollapseExample1<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
 multiCollapseExample2<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
" autocomplete="off">
      Expand
   </button>
    </p>

<div id="multiCollapseExample2<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
" class="multi-collapse<?php echo $_smarty_tpl->tpl_vars['micropost']->value['id'];?>
 collapse" style="">
    <div class="card-body">
    <p class="card-text">
    <?php echo $_smarty_tpl->tpl_vars['micropost']->value['content'];?>

      </p>
      </div>
    </div>

    <div class="row" style="padding-left:30px;">
      <div class="col-12">
       <p>by <?php echo $_smarty_tpl->tpl_vars['NAMES']->value[$_smarty_tpl->tpl_vars['micropost']->value['user_id']];?>
</p>
     </div>
      <div class="col">

    <p>
    Created: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['micropost']->value['created_at'],"%d-%m-%Y");?>

    </p>
    </div>
    <div class="col">

    <p>
    Updated: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['micropost']->value['updated_at'],"%d-%m-%Y");?>

    </p>
    </div>
      <div class="col">
      <?php if ($_smarty_tpl->tpl_vars['USER']->value['id']==$_smarty_tpl->tpl_vars['micropost']->value['user_id']) {?>
        <a href="#" class="card-link">update</a>
      <?php }?>
    </div>
  </div>
  </div>
</div>
    </div>
      </div>
      <?php } ?>
      </div>
    </div>
    </div>

<footer class="footer bg-light text-center">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 Copyright:
    Quevin Protsenko IPM
  </div>

</footer>
  </body>
</html>
<?php }} ?>
