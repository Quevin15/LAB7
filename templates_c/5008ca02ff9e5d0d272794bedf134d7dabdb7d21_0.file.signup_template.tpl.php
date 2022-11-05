<?php
/* Smarty version 4.2.1, created on 2022-11-04 11:51:27
  from '/opt/lampp/htdocs/LAB4/templates/signup_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6364eeaf7d0577_02840697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5008ca02ff9e5d0d272794bedf134d7dabdb7d21' => 
    array (
      0 => '/opt/lampp/htdocs/LAB4/templates/signup_template.tpl',
      1 => 1667558943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6364eeaf7d0577_02840697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Quevin"/>
    <meta name="generator" content="Quevin"/>
    <meta name="description" content="Once I felt the warm inside the walls I knew that wasn't an escape anymore."/>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"
  title="index template" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <title>THE WALLS SEEK YOU</title>

  </head>

  <body style="background-position:center;background-size:110ex;background-image:url(images/IamMarinush.png); background-repeat:no-repeat">

    <!--- #### THE HEAD #### -->
    <div id="header">

      <div class="subHeader">
        <div class="container-fluid" style="padding-top:1ex">

          <div class="row">


            <div class="col-4">

    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item active" aria-current="page">/ home</li>
          </ol>
        </nav>
            </div>

            <div class="col-8" style="text-align:right;">

             <a href="./login_template.html">login</a>

             <a href="./register_template.html">register</a>
           </div>
          </div>
        </div>
      </div>
    </div>

  <h2><font color="red"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</font></h2>


  <div class="container pt-5" style="max-width:500px;min-height:2200px;">
      <h2>Register</h2>


        <form method="post" action="signup_action_smarty.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" value="<?php echo $_smarty_tpl->tpl_vars['new_name']->value;?>
" class="form-control" name="new_name" placeholder="Only ASCII characters are allowed">
          </div>
         <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['new_email']->value;?>
" class="form-control" name="new_email" placeholder="Enter a valid mail address">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <label for="pwd">Password confimation:</label>
          <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['password_repeat']->value;?>
" class="form-control" name="password_repeat" placeholder="Type again password">
        </div>
        <div class="checkbox">
          <label><input type="checkbox"> I agree to giving you all my data</label>
        </div>
            <div class="row justify-content-center">
              <div class="col-3 p-2">
            <button type="submit" name="submitok" value="Register" class="btn btn-default border" href="index_template.html" >register</button>
              </div>
              <div class="col-2 p-2" >
            <button type="submit" name="clear" value="Clear" class="btn btn-default border">clear</button>
              </div>
            </div>
        </form>
        </div>
        </div>


<footer class="footer bg-light text-center ">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 Copyright:
    Quevin Protsenko IPM
  </div>

</footer>

  </body>
  </html>
<?php }
}
