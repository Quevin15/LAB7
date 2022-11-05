<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Quevin"/>
    <meta name="generator" content="Quevin"/>
    <meta name="description" content="Once I felt the warm inside the walls I knew that wasn't an escape anymore."/>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"
  title="index template" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
         <li class="breadcrumb-item"><a href="./index.php">/ home</a></li>

           <li class="breadcrumb-item active" aria-current="page">register</li>
          </ol>
        </nav>
            </div>

            <div class="col-8" style="text-align:right;">

             <a href="./login.php">login</a>

             <a href="#">register</a>
           </div>
          </div>
        </div>
      </div>
    </div>

  <h3 align="center" style="padding-top:1em;"><font color="red">{$MESSAGE}</font></h3>


  <div class="container pt-5" style="max-width:500px;min-height:2200px;">
      <h2>Register</h2>


        <form method="post" action="register_action.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" value="{$new_name}" class="form-control" name="new_name" placeholder="Only ASCII characters are allowed">
          </div>
         <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" value="{$new_email}" class="form-control" name="new_email" placeholder="Enter a valid mail address">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" value="{$password}" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <label for="pwd">Password confimation:</label>
          <input type="password" value="{$password_repeat}" class="form-control" name="password_repeat" placeholder="Type again password">
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
