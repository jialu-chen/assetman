<?php get_header(); ?>

<!-- Carousel
================================================== -->
<div class="container-fluid maincarousel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <div class="col-sm-6 homecarousel">
        <img src="<?php echo get_template_directory_uri(); ?>/images/amv1.jpg" class="img-responsive">
      </div>
      <div class="col-sm-6 homecarousel">
      <img src="<?php echo get_template_directory_uri(); ?>/images/amv2.jpg" class="img-responsive">
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="http://www.proteus.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/proteus-home-2.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="http://www.proteus.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/proteus-home-1.jpg" class="img-responsive"></a>
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="http://www.skyboximaging.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/skybox-home-2.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="http://www.skyboximaging.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/skybox-home-1.jpg" class="img-responsive"></a>
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="http://www.iconaircraft.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-home-1.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="http://www.iconaircraft.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-home-2.jpg" class="img-responsive"></a>
      </div>
    </div>


    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="https://www.twistbioscience.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/02/twist3.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="https://www.twistbioscience.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/02/TwistBioHi-Res2.jpg" class="img-responsive"></a>
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="https://www.getkeepsafe.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/keepsafe-home-2.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="https://www.getkeepsafe.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/keepsafe-home-1.jpg" class="img-responsive"></a>
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="https://www.healthtap.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/04/healthtap-home2.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="https://www.healthtap.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/04/healthtap-home.jpg" class="img-responsive"></a>
      </div>
    </div>

    <div class="item">
      <div class="col-sm-6 homecarousel">
        <a href="http://http://www.ooma.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/01/Ooma-Text.jpg" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 homecarousel">
        <a href="http://http://www.ooma.com" target="_blank"><img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/01/ooma-nest2.jpg" class="img-responsive"></a>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>  
</div>
</div>
<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-sm-4 featurette">
      <a href=" <?php echo get_option( 'home', $default ); ?>/portfolio">
        <div class="inner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/leaf.png" class="img-responsive">
              <h4>Early Stage</h4>
              <p>Focused on seed <br>
                  and Series A companies</p>
              <p>Read More »</p>
        </div>
      </a>
    </div>

    <div class="col-sm-4 featurette">
      <a href=" <?php echo get_option( 'home', $default ); ?>/about">
        <div class="inner">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hourglass.png" class="img-responsive">
          <h4>Experienced</h4>
          <p>In the business <br>
            since 1965</p>
          <p>Read More »</p>
        </div> 
      </a>  
    </div>

    <div class="col-sm-4 featurette">
      <a href=" <?php echo get_option( 'home', $default ); ?>/team">
        <div class="inner">
          <img src="<?php echo get_template_directory_uri(); ?>/images/venn.png" class="img-responsive">
          <h4>Integrated</h4>
          <p>Investing across digital health,<br>
          tech and life sciences</p>
          <p>Read More »</p>
        </div>
      </a>
    </div>
  </div><!-- /.row-->

<div class="container-fluid"><!--perspectives on homepage-->
  <div class="row">
    <div class="col-md-6 perspective-home">
      <h2>Latest Articles</h2>
      	
		<div class="perspective">
			<h4><a href="http://bit.ly/1Pelt3E" target="_blank">Large Series A financings are a worrying digital health investment trend</a></h4>
			<div class="slug">
				<strong>Skip Fleshman</strong><br>
				<em>MedCity News<br>
				Nov 3, 2015</em>
			</div>
			<p>Although the proliferation of $1 billion + mega-funds has made it hard for many venture capitalists to justify smaller Series A investments, I don’t think this is the right approach for venture capitalists or for startups. The excess capital creates the wrong incentive structure for long-term success.</p>
			<p><a class="btn btn-default" href="http://bit.ly/1Pelt3E" target="_blank">Read more »</a></p>
		</div>	

		<div class="perspective">
		<h4><a href="http://bit.ly/1gFG1U7" target="_blank">6 Tips for Hackers in Healthcare</a></h4>
		<div class="slug">
			<strong>Skip Fleshman</strong><br>
			<em>VentureBeat<br>
			July 17, 2015</em>
		</div>
		<p>Since I first started investing in digital health in 2007, the sector has exploded. Digital health startups raised over $4 billion in venture capital in 2014 and will likely raise even more this year. Based on my observations, a large proportion of these startups are founded by folks who want to apply their background in tech to healthcare. Many are young, successful engineers and product managers who have a negative experience with healthcare and want to fix it. These pitches often start with a personal story. They want to disrupt the system from the inside.</p>
		<p><a class="btn btn-default" href="http://bit.ly/1gFG1U7" target="_blank">Read more »</a></p>
	</div>


<div class="perspective">
        <h4><a href="http://onforb.es/1FQOD4T" target="_blank">Why Telemedicine's Time Has Finally Come</a></h4>
        <div class="slug">
          <strong>Skip Fleshman</strong><br>
          <em>Forbes<br>
          January 13, 2015</em>
        </div>
        <p>Telemedicine may just be the biggest trend in digital health in 2015. As a partner focused on digital health investments at venture capital firm AMV, I spend a lot of time crisscrossing the country chatting with leading healthcare providers and insurers about their technology needs. By far the area they are most interested in is telemedicine. For hospitals, expanding telemedicine is a way to cut costs while providing consumers with the convenience they crave. But the idea has been around for a while so why now?</p>
        <p><a class="btn btn-default" href="http://onforb.es/1FQOD4T" target="_blank">Read more »</a></p>
      </div>
    </div>
    <div class="col-md-6 perspective-home">
      <a class="twitter-timeline" href="https://twitter.com/AMV/lists/amv" data-widget-id="429033767731073024">Tweets from https://twitter.com/AMV/lists/amv</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>
<?php get_footer(); ?>