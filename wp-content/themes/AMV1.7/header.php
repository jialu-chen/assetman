<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asset Management Ventures</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AMV is a venture capital firm investing in early stage digital health, technology and life sciences companies.">
    
<!-- Le styles -->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js">></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42635873-1', 'auto');
  ga('send', 'pageview');
</script>
  </head>

  <body>

<div class="navbar-custom">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid" style="padding-left:10px;">
      <!--toggle-->
      <div class="col-xs-10" style="padding-left:0px">
        <a href=" <?php echo get_option( 'home', $default ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/AMV.png" class="img-responsive" style="max-width:170px;"></a>
      </div>
      <div class="col-xs-2" style="padding-right:0px">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="margin-top:16px;">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    </div>
    <div class="container-fluid longform-navbar">  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?=echoActiveClassIfRequestMatches("")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>">Home</a></li>
          <li <?=echoActiveClassIfRequestMatches("about")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/about">About</a></li>
          <li <?=echoActiveClassIfRequestMatches("team")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/team">Team</a></li>
          <li <?=echoActiveClassIfRequestMatches("portfolio")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/portfolio">Portfolio</a></li>
          <li <?=echoActiveClassIfRequestMatches("strategy")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/strategy">Strategy</a></li>
          <li <?=echoActiveClassIfRequestMatches("perspectives")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/perspectives">Perspectives</a></li>
          <li <?=echoActiveClassIfRequestMatches("contact")?>>
              <a href=" <?php echo get_option( 'home', $default ); ?>/contact">Contact</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</div>