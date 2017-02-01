<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>


<div class="container-fluid about">
	<div class="col-sm-8 col-sm-offset-1">
		<h4>Early History</h4>
		<img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/03/draper-10824-300x184.jpg" class="img-responsive thumbnail" alt="Pitch Johnson">
		<p>
			Our founder, Pitch Johnson, was one of the earliest venture capitalists in Silicon Valley. He started in 1962 when he formed Draper & Johnson with Bill Draper. To find companies to invest in, the two of them drove around the fruit orchards of Sunnyvale, Santa Clara and San Jose in leased Pontiacs, knocking on the doors of any companies that sounded technology-related. Three years later, he struck out on his own, forming Asset Management Company.
		</p>
		<h4>Emerging Technologies</h4>
		<p>
			For nearly half a century, Asset Management has invested in companies that pushed innovation to new levels. Some of those early investments included Boole and Babbage, the first venture capital-funded software company; Tandem Computer, which produced the world’s first fault-tolerant computers; and Coherent Laser, which built one of the first lasers for health care applications. In the late 1970’s, Pitch began researching start-ups that were not only creating new innovations, but also a whole new industry &mdash; biotechnology. In 1980 he, along with Bill Bowes from USVP, founded and invested in Applied Molecular Genetics, known today as Amgen. 
		</p>
		<h4>Consistent Diversified Strategy</h4>
			<p>Over the next 30 years, Asset Management continued its diversified approach to venture capital investing by deploying capital in information technology and healthcare markets. Our leadership team is comprised of experienced investors who are former entrepreneurs with expertise in scientific, engineering and medical fields. AMV invests in the combination of technology and biotech that has served Asset Management so well in the past, while also targeting the innovative new space of digital health that leverages our expertise in both sectors. </p>
	<div class="bio-investments">
		<h4>Historical Successes</h4>  
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#amgen">
						<img src="<?php echo get_template_directory_uri(); ?>/images/amgen.jpg" alt="Amgen">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#appliedbio">
						<img src="<?php echo get_template_directory_uri(); ?>/images/appliedbiosystems.jpg" alt="Applied Biosystems">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#amcc">
						<img src="<?php echo get_template_directory_uri(); ?>/images/appliedmicro.jpg" alt="AppliedMicro">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#biogen">
						<img src="<?php echo get_template_directory_uri(); ?>/images/biogen.jpg" alt="Biogen Idec">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#cvthera">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cvt.jpg" alt="CV Therapeutics">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#nuance">
						<img src="<?php echo get_template_directory_uri(); ?>/images/nuance.jpg" alt="Nuance">
					</a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#tandem">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tandemcomputers.jpg" alt="Tandem Computers">
					</a>
				</div>
</div>
			</div>
	</div>
</div>










<?php get_footer(); ?>