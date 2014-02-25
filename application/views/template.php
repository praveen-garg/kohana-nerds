<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo URL::base();?>/assets/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo URL::base();?>/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo URL::base();?>/assets/css/main.css">

        <script src="<?php echo URL::base();?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">[@kohana]</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">v3.3.1</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Examples<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL::base();?>index.php/rating">Simple</a></li>
                <li><a href="<?php echo URL::base();?>index.php/user">Auth Module</a></li>
              </ul>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.gargpraveen.blogspot.com/" target="_blank">About me</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Assets in tutorial</li>
                <li><a href="#">HTML5Boilerplate Template</a></li>
                <li><a href="#">Bootstrap Theme </a></li>
                <li><a href="#">Mobile responsive </a></li>
                <li class="dropdown-header">Other</li>
                 <li><a href="#">Custom 404 Error page</a></li>
                 <li><a href="#">crossdomain.xml</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Kohana world, Enjoy!</h1>
        <p>This is a basic set of <a href="http://kohanaframework.org/download" target="_blank"> Kohana [v3.3.1] </a> with:
         <ul>
          <li> <a href="http://getbootstrap.com/" target="_blank">Bootstrap (Mobile responsive)</a>
          <li> <a href="http://html5boilerplate.com/" target="_blank">HTML5Boilerplate template</a></li>
          <li> Modernizr, minified jQuery from <a href="http://www.initializr.com/" target="_blank">[http://www.initializr.com/]</a></li>
        </ul>

        <strong> A basic example, which explains CRUD operation on entity using ORM [object resource mapping] technique.</strong><br>
        <strong> An example, using auth module for user sign-in/sign-up using ORM.</strong>

      </p>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
            <?php echo $content; ?>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; <a href="http://nerdapplabs.com" target="_blank">nerdapplabs 2014</a> | Praveen Garg</p>
      </footer>
    </div> <!-- /container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="' + <?php echo URL::base();?> + '/assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="<?php echo URL::base();?>/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo URL::base();?>/assets/js/plugins.js"></script>
        <script src="<?php echo URL::base();?>/assets/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
