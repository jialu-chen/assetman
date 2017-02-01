<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row profiles">
		<div class="col-sm-2 col-lg-1"></div>
		<div class="col-xs-5 col-sm-4 col-md-3 col-lg-2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lou-page.jpg" alt="Lou Lange" class="img-responsive">
		</div>
		<div class="col-xs-5 col-sm-6 col-md-7">
			<div class="pull-left">
				<h1>Lou<br> 
					Lange</h1>
				<div>Partner</div>
				Admin: <a href="mailto:#">laurelle@assetman.com</a><br>
				<div class="container" style="padding:0px">
					<a href="http://twitter.com/AMV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg"></a>
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
				Dr. Lange has 22 years experience in academic medicine at Harvard and Washington University, where he served 
				as Chief of Cardiology and Professor of Medicine at Jewish Hospital from 1985-1992 and was one of the first 
				academicians in molecular cardiology.
				<br><br>He founded CV Therapeutics based on this broad field and as Chairman, CEO and Chief Scientific Officer, 
				led the IPO in 1996 and the overall pipeline development and the initiatives for US FDA and European EMEA approval 
				for Ranexa®, a first-in-class late sodium channel blocker and the first anti-anginal drug class approved in 30 years 
				in the US. He also led the approval of Lexiscan®, a first-in-class adenosine A2a receptor agonist for use in 
				myocardial perfusion imaging studies. Dr. Lange oversaw the commercial success of CV Therapeutics and its sale to 
				Gilead in 2009 for $1.4 billion dollars.
				<br><br>As a member of the Board of Trustees at the University of Rochester since 1998 and as Chair of the 
				Health Affairs committee that oversees all of the medical operations for five years, Dr. Lange has been part of 
				the leadership team for strategic re-invigoration of the medical center with construction of two research buildings 
				and recruitment of over 100 faculty members. As a member of BIO Board of Directors (the trade organization of 
				biotech companies) from 1999 to 2009, Dr. Lange led the largest committee of member companies for two years and 
				was picked as one of two biotech executives to attend the ceremonies at the White House for the signing of the 
				Bioterrorism bill in 2004. Dr. Lange has been on numerous other public and private Boards in both the non-profit 
				and for-profit arena.
				<br><h2>Education</h2>
				<p>Dr. Lange has a Bachelor's degree from the University of Rochester, an M.D. from Harvard University and a Ph.D. in
				 Biological Chemistry, also from Harvard University.</p>
			</div>
			<div class="bio-investments">
				<br><h2>Investments</h2>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#aegis">
						<img src="<?php echo get_template_directory_uri(); ?>/images/aegis.jpg" alt="Aegis">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#audentes">
						<img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/09/Audentes.png" alt="Audentes">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#cardiodx">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cardiodx.jpg" alt="CardioDX">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#esperion">
						<img src="<?php echo get_template_directory_uri(); ?>/images/esperion.jpg" alt="Esperion">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#imuc">
						<img src="<?php echo get_template_directory_uri(); ?>/images/imuc.jpg" alt="ImmunoCellular Therapeutics">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#indi">
						<img src="<?php echo get_template_directory_uri(); ?>/images/indi.jpg" alt="Indi Molecular">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#maverix">
						<img src="<?php echo get_template_directory_uri(); ?>/images/maverix.jpg" alt="Maverix Biomics">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#profusa">
						<img src="<?php echo get_template_directory_uri(); ?>/images/profusa.jpg" alt="Profusa">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#rapidscan">
						<img src="<?php echo get_template_directory_uri(); ?>/images/rapidscan.jpg" alt="Rapidscan">
					</a>
				</div>

				<div class="col-md-4 col-xs-6">
					<a href="<?php echo get_option( 'home', $default ); ?>/portfolio/#viewpoint">
						<img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/04/Viewpoint.jpg" alt="ViewPoint">
					</a>
				</div></div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>