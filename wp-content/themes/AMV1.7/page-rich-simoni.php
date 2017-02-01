<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row profiles">
		<div class="col-sm-2 col-lg-1"></div>
		<div class="col-xs-5 col-sm-4 col-md-3 col-lg-2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/rich-page.jpg" alt="Rich Simoni" class="img-responsive">
		</div>
		<div class="col-xs-5 col-sm-6 col-md-7">
			<div class="pull-left">
				<h1>Rich<br> 
					Simoni</h1>
				<div>Partner</div>
				Admin: <a href="mailto:#">laurelle@assetman.com</a><br>
				<div class="container" style="padding:0px">
					<a href="http://twitter.com/AMV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg"></a>
					<a href="www.linkedin.com/pub/richard-simoni/0/4b/bb4" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg"></a>
					<a href="https://angel.co/asset-management-ventures" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Angel.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row profiles">
		<div class="col-sm-3"></div>
		<div class="col-sm-7">
			<div class="bio-content">
				<h2>Focus</h2>
				<p>Rich joined Asset Management Ventures in 2002. He combines a deep technical background with extensive operational business experience.</p>
				<br><h2>Experience</h2>
				<p>Over the past 20 years Rich has been involved with numerous start-up companies, in both management and consulting roles. 
					Prior to joining the firm, he co-founded Talkway Communications, a provider of Internet video services such as video email to major providers including AT&T and British Telecom.
					<br><br>Two of his academic publications were chosen for inclusion in the 25-year retrospective of the International Symposium on Computer Architecture, the premier conference in the computer architecture field. He is an expert in distributed computing, performance measurement and optimization, scalable computing, Internet protocols and architectures, digital audio and video, and wireless computing.</p>
				<br><h2>Education</h2>
				<p>Rich has a Ph.D. in Electrical Engineering from Stanford University, where he held a Fellowship from the National Science Foundation. Rich also has master’s and bachelor’s degrees in Electrical Engineering from Stanford and Rice University.</p>
			</div>
			<div class="bio-investments">
				<br><h2>Investments</h2>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#keepsafe">
						<img src="<?php echo get_template_directory_uri(); ?>/images/keepsafe.jpg" alt="KeepSafe">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#mozio">
						<img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/08/mozio.png" alt="Mozio">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#proteus">
						<img src="<?php echo get_template_directory_uri(); ?>/images/proteus.jpg" alt="Proteus Digital Health">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#twist">
						<img src="<?php echo get_template_directory_uri(); ?>/images/twist.jpg" alt="Twist Bioscience">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#unikey">
						<img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/03/imgres.png" alt="Unikey">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#womply">
						<img src="<?php echo get_template_directory_uri(); ?>/images/womply.jpg" alt="Womply">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>