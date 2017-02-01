<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row profiles">
		<div class="col-sm-2 col-lg-1"></div>
		<div class="col-xs-5 col-sm-4 col-md-3 col-lg-2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luke-page.jpg" alt="Luke Lee" class="img-responsive">
		</div>
		<div class="col-xs-5 col-sm-6 col-md-7">
			<div class="pull-left">
				<h1>Luke<br> 
					Lee</h1>
				<div>Principal</div>
				<a href="mailto:#">luke@assetman.com</a><br>
				<div class="container" style="padding:0px">
					<a href="http://twitter.com/lukebiotech" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg"></a>
					<a href="http://www.linkedin.com/in/lukejlee" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg"></a>
					<a href="http://angel.co/lukejlee" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Angel.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row profiles">
		<div class="col-sm-3"></div>
		<div class="col-sm-7">
			<div class="bio-content">
				<h2>Experience</h2>
					Luke has been with AMV since 2013, focusing on working with founders on highly unmet needs in the life science and digital health industry. Prior to AMV, Luke led projects with Warburg Pincus and the Stanford GSB in addition to the Stanford Hospital & Clinics. He has been quoted in Reuters around the topic of genomics and digital health and serves as a mentor to A-Level Capital.
				<h2>Education</h2>
					Luke is a Ph.D. candidate in Cancer Biology at the Stanford University School of Medicine and holds a Bachelor’s degree in Molecular and Cellular Biology from Johns Hopkins University.
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>