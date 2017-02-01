<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row profiles">
		<div class="col-sm-2 col-lg-1"></div>
		<div class="col-xs-5 col-sm-4 col-md-3 col-lg-2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/jialu-page.jpg" alt="Jialu Chen" class="img-responsive">
		</div>
		<div class="col-xs-5 col-sm-6 col-md-7">
			<div class="pull-left">
				<h1>Jialu<br> 
					Chen</h1>
				<div>Principal</div>
				<a href="mailto:#">jialu@assetman.com</a><br>
				<div class="container" style="padding:0px">
					<a href="http://twitter.com/jialu_" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg"></a>
					<a href="http://www.linkedin.com/in/jialuchen" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg"></a>
					<a href="http://angel.co/jialu-chen" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Angel.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row profiles">
		<div class="col-sm-3"></div>
		<div class="col-sm-7">
			<div class="bio-content">
				<h2>Experience</h2>
					Jialu began her career as a journalist for <i>The Boston Globe</i> where she profiled tech entrepreneurs and reviewed restaurants. She developed her venture capital chops at Learn Capital, a leading edtech venture firm. At AMV, she covers investments in edtech, digital health, mobile and big data. 
				<h2>Education</h2>
					Jialu has a Bachelor's Degree from Yale University in Economics and East Asian Literature. 
			</div>
			<div class="bio-investments">
				<br><h2>Investments</h2>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#lark">
						<img src="<?php echo get_template_directory_uri(); ?>/images/lark.jpg" alt="Lark">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#thunder">
						<img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/04/PaperG.jpg" alt="Thunder">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#signalvine">
						<img src="<?php echo get_template_directory_uri(); ?>/images/signalvine.jpg" alt="Signalvine">
					</a>
				</div>

			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>