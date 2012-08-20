<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Protostrap - a prototyping framework based on Bootstrap</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/protostrap.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body>
<?php include('./iosTabbar.php');?>
    <div class="container">
        <!-- The following generates a placeholder svg image -->
        <img data-ph="160:60:Logo" />
        <br>



<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Itineraries</a></li>
    <li><a href="#tab2" data-toggle="tab">Events</a></li>
    <li><a href="#tab3" data-toggle="tab">Today</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
        <h3>The highest Mountain</h3>
        <img data-ph="300:80:High Mountain" />
         Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris.

    </div>
    <div class="tab-pane" id="tab2">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane" id="tab3">
      <p>Howdy, I'm in Section 3.</p>
    </div>
  </div>
</div>






      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.svg.placeholder.js"></script>

    <script type="text/javascript">
      $(function(){
        $('img[data-ph]').tsPlaceHold();
      })
    </script>
  </body>
</html>
