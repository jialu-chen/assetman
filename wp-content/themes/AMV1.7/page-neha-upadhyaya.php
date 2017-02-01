<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row profiles">
		<div class="col-sm-2 col-lg-1"></div>
		<div class="col-xs-5 col-sm-4 col-md-3 col-lg-2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/neha-page.jpg" alt="Neha Upadhyaya" class="img-responsive">
		</div>
		<div class="col-xs-5 col-sm-6 col-md-7">
			<div class="pull-left">
				<h1>Neha<br>
					Upadhyaya</h1>
				<div>Controller</div>
				<a href="mailto:#">neha@assetman.com</a><br>
				<div class="container" style="padding:0px">
					<a href="http://twitter.com/AMV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg"></a>
					<a href="http://www.linkedin.com/in/nehaupadhyaya" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg"></a>
					<a href="https://angel.co/asset-management-ventures" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Angel.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row profiles">
		<div class="col-sm-3"></div>
		<div class="col-sm-7">
			<div class="bio-content">
				<h2>Experience</h2>
				<p>Neha joined Asset Management Ventures in 2012. She provides accounting, finance and website support. 
					She learned about the venture capital industry while working at VC Privé, a specialized investment bank, 
					which sparked her interest in the finance industry.
				<br><br>
				Prior to joining AMV LLC, she worked at Stanford University.

				<h2>Education</h2>
				Neha has a bachelor's degree in Economics, Finance, and Business Administration from Notre Dame de Namur University. 
				</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>