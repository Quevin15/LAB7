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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


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
          {if isset($USER)}
           <li class="breadcrumb-item active" aria-current="page">/{$USER.name}</li>
           {else}
           <li class="breadcrumb-item active" aria-current="page">/home</li>
           {/if}
          </ol>
        </nav>
            </div>

            <div class="col-8" style="text-align:right;">

              {if isset($USER)}
              <a href="./logout_action.php">logout</a>
              <a href=#>post blog</a>
              {else}
              <a href="./login.php">login</a>
              <a href="./register.php">register</a>
              {/if}
              <a href=#>Welcome {$USER.name|default:"anon"}</a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class ="wrapper">
    <div class="container">
      <h1 class="blogName">Inside the Walls</h1>
      <div class="row">


{foreach $MICROPOSTS as $micropost}
        <div class="col-md-6">
    <div class="blogPost">
<div class="card">
  <img src="images/IamMarinush.png" class="card-img-top" alt="ruka">
  <div class="card-body">
    <h4 class="card-title"><strong>{$micropost.title}</strong></h4>

  <div id="multiCollapseExample1{$micropost.id}" class="multi-collapse{$micropost.id} collapse show" style="">
    <p class="card-text text-truncate">

    {$micropost.content}
    </p>
    </div>
    <p>
    <button class="btn btn-primary" type="button" data-toggle="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse{$micropost.id}" aria-expanded="false" aria-controls="multiCollapseExample1{$micropost.id} multiCollapseExample2{$micropost.id}" autocomplete="off">
      Expand
   </button>
    </p>

<div id="multiCollapseExample2{$micropost.id}" class="multi-collapse{$micropost.id} collapse" style="">
    <div class="card-body">
    <p class="card-text">
    {$micropost.content}
      </p>
      </div>
    </div>

    <div class="row" style="padding-left:30px;">
      <div class="col-12">
       <p>by {$NAMES[$micropost.user_id]}</p>
     </div>
      <div class="col">

    <p>
    Created: {$micropost.created_at|date_format:"%d-%m-%Y"}
    </p>
    </div>
    <div class="col">

    <p>
    Updated: {$micropost.updated_at|date_format:"%d-%m-%Y"}
    </p>
    </div>
      <div class="col">
      {if $USER.id eq $micropost.user_id}
        <a href="#" class="card-link">update</a>
      {/if}
    </div>
  </div>
  </div>
</div>
    </div>
      </div>
      {/foreach}
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
