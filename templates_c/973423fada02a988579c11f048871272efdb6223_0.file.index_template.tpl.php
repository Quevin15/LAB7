<?php
/* Smarty version 4.2.1, created on 2022-11-04 20:47:28
  from '/opt/lampp/htdocs/LAB4/templates/index_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63656c509337e2_81395726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973423fada02a988579c11f048871272efdb6223' => 
    array (
      0 => '/opt/lampp/htdocs/LAB4/templates/index_template.tpl',
      1 => 1667591238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63656c509337e2_81395726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/local/lib/php/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>

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
          <?php if ((isset($_smarty_tpl->tpl_vars['USER']->value))) {?>
           <li class="breadcrumb-item active" aria-current="page">/<?php echo $_smarty_tpl->tpl_vars['USER']->value['name'];?>
</li>
           <?php } else { ?>
           <li class="breadcrumb-item active" aria-current="page">/home</li>
           <?php }?>
          </ol>
        </nav>
            </div>

            <div class="col-8" style="text-align:right;">

              <?php if ((isset($_smarty_tpl->tpl_vars['USER']->value))) {?>
              <a href="./logout_action.php">logout</a>
              <a href=#>post blog</a>
              <?php } else { ?>
              <a href="./login.php">login</a>
              <a href="./register.php">register</a>
              <?php }?>
              <a href=#>Welcome <?php echo (($tmp = $_smarty_tpl->tpl_vars['USER']->value['name'] ?? null)===null||$tmp==='' ? "anon" ?? null : $tmp);?>
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


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MICROPOSTS']->value, 'micropost');
$_smarty_tpl->tpl_vars['micropost']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['micropost']->value) {
$_smarty_tpl->tpl_vars['micropost']->do_else = false;
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
      <?php if ($_smarty_tpl->tpl_vars['USER']->value['id'] == $_smarty_tpl->tpl_vars['micropost']->value['user_id']) {?>
        <a href="#" class="card-link">update</a>
      <?php }?>
    </div>
  </div>
  </div>
</div>
    </div>
      </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
