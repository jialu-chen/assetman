<?php
/**
 * Template file for displaying content.
 */

get_header(); ?>

<div class="container-fluid">
  <!--left-->
  <div class="col-xs-12 col-sm-3 col-lg-2">
    <div class="panel panel-default portfolio-sidebar">
      <div class="panel-heading" style="background-color: transparent; padding-left: 0px;">
          <h2>Portfolio</h2>
      </div>
      <div class="panel-body portfolio-sidebar">
        <ul class="nav nav-pills nav-stacked" id="controls">
          <li><a href="#current">All Current</a></li>
          <li><a href="#dh">&emsp;Digital Health</a></li>
          <li><a href="#tech">&emsp;Technology</a></li>
          <li><a href="#lifesciences">&emsp;Life Sciences</a></li>
          <li><a href="#historical">Featured Historical</a></li>
        </ul>
      </div>
    </div>
  </div><!---/left sidebar-->


<!--main-->
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
    <section id="main" class="container-fluid">

      <div class="box current dh">
        <div class="col-xs-12 portco" id="docway">
          <div class="col-md-4">
            <img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/06/1docway.png" alt="1DocWay">
          </div>
          <div class="col-md-8 portco-detail">
            <h4>1DocWay</h4>
            <strong>Acquisition:</strong> Genoa Healthcare<br>
            <strong>Headquarters:</strong> New York, NY<br><br>
            <p>Online telepsychiatry platform connecting hospitals, doctors, clinics and patients.</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-xs-12 portco" id="aegis">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/aegis.jpg" alt="Aegis">
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Aegis</h4>
            <strong>Headquarters:</strong> Dublin, Ireland<br><br>
            <p>Access system for percutaneous transaortic transcatheter aortic valve replacement</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="amgen">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.amgen.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/amgen.jpg" alt="Amgen">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Amgen</h4>
            <strong>Public:</strong> Nasdaq: AMGN, Nasdaq 100, S&P 500<br>
            <strong>Website:</strong><a href="http://www.amgen.com" target="_blank"> www.amgen.com</a>
            <br><br>
            <p>
              Committed to unlocking the potential of biology for patients suffering from serious illnesses by discovering, developing, manufacturing and delivering innovative human therapeutics 
            </p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="appliedbio">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.appliedbiosystems.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/appliedbiosystems.jpg" alt="Applied Biosystems">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Applied Biosystems</h4>
            <strong>Acquisition:</strong> Life Technologies, Thermo Fisher Scientific<br>
            <strong>Website:</strong><a href="http://www.appliedbiosystems.com" target="_blank"> www.appliedbiosystems.com</a>
            <br><br>
            <p>Global leader in providing innovative instruments and reagents to accelerate academic and clinical research, drug discovery and development, pathogen detection and forensic DNA analysis</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="amcc">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.apm.com/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/appliedmicro.jpg" alt="AppliedMicro">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>AppliedMicro Circuts Corporation</h4>
            <strong>Public:</strong> Nasdaq: AMCC<br>
            <strong>Website:</strong><a href="http://www.apm.com/" target="_blank"> www.apm.com</a>
            <br><br>
            <p>Global leader in computing and connectivity solutions for next-generation cloud infrastructure and data centers</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="arterys">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.arterys.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/04/Arterys-Logo.jpg" alt="Arterys">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Arterys</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.arterys.com" target="_blank"> www.arterys.com</a>
            <br><br>
            <p>Web-based application that allows real-time visualization and pressure readings of blood flow within the heart</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="audentes">
          <div class="col-md-4">
            <a class="pull-left" href="http://audentestx.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/09/Audentes.png">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Audentes</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
	<strong>Public:</strong> Nasdaq: BOLD <br>
            <strong>Website:</strong><a href="http://audentestx.com" target="_blank"> www.audentestx.com</a>
            <br><br>
            <p>Biotechnology company committed to the development and commercialization of innovative new gene therapy treatments for people with serious rare diseases.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="benefitter">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.benefitter.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/benefitter.jpg" alt="Benefitter">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Benefitter</h4>
		<strong>Acquisition:</strong> HealthMarkets
            <br><br>
            <p>Comprehensive assessment, planning, communication, enrollment and administrative solution to help employers save on health insurance</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="biogen">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.biogenidec.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/biogen.jpg" alt="Biogen Idec">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Biogen Idec</h4>
            <strong>Public:</strong> Nasdaq: BIIB, Nasdaq 100, S&P 500<br>
            <strong>Website:</strong><a href="http://www.biogenidec.com" target="_blank"> www.biogenidec.com</a>
            <br><br>
            <p>
               Dedicated to developing new therapies to improve the lives of patients with neurological, autoimmune and hematological disorders
            </p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco">
          <div class="col-md-4 col-xs-8">
            <a class="pull-left" href="www.sanofi.us" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/bipar.gif" alt="BiPar Sciences">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>BiPar Sciences</h4>
            <strong>Acquisition:</strong> Sanofi
            <br><br>
            <p>
              Developer of PARP inhibitors as cancer therapies
            </p>
          </div>
        </div>
      </div>


      <div class="box current dh">
        <div class="col-sm-12 portco" id="cardiodx">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.cardiodx.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cardiodx.jpg" alt="CardioDX">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>CardioDX</h4>
            <strong>Headquarters:</strong> Palo Alto, CA<br>
            <strong>Website:</strong><a href="http://www.cardiodx.com" target="_blank"> www.cardiodx.com</a>
            <br><br>
            <p>A cardiovascular genomic diagnostics company developing tests to aid and tailor the care of individuals with cardiovascular diseases</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="cardiogen">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.chimerix.com/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cardiogen.png" alt="Cardiogen">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Cardiogen Sciences</h4>
            <strong>Acquired:</strong> Audentes Therapeutics<br>
            <strong>Headquarters:</strong> Palo Alto, CA<br>
            <br>
            <p>Developing gene therapy solutions for orphan inherited arrhythmogenic diseases</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.chimerix.com/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/chimerix.jpg" alt="Chimerix">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Chimerix</h4>
            <strong>Public:</strong> Nasdaq: CMRX<br>
            <strong>Headquarters:</strong> Durham, NC<br>
            <strong>Website:</strong><a href="http://www.chimerix.com/" target="_blank"> www.chimerix.com/</a>
            <br><br>
            <p>Developing and commercializing novel antiviral therapeutics in areas of high unmet medical need</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco">
          <div class="col-md-4">
            <a class="pull-left" href="www.coherent.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coherent.jpg" alt="Coherent">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Coherent</h4>
            <strong>Public:</strong> Nasdaq: COHR<br>
            <strong>Website:</strong><a href="http://www.coherent.com" target="_blank"> www.coherent.com</a>
            <br><br>
            <p>
               Leading supplier of laser solutions used in scientific and commercial applications
            </p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="cvthera">
          <div class="col-xs-7 col-md-4">
            <a class="pull-left" href="www.gilead.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cvt.jpg" alt="CV Therapeutics">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>CV Therapeutics</h4>
            <strong>Acquisition:</strong> Gilead Sciences
            <br><br>
            <p>
               Molecular cardiology and drug discovery
            </p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="esperion">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.esperion.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/esperion.jpg" alt="Esperion">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Esperion Therapeutics</h4>
            <strong>Public:</strong> Nasdaq: ESPR<br> 
            <strong>Headquarters:</strong> Ann Arbor, MI<br>
            <strong>Website:</strong><a href="http://www.esperion.com" target="_blank"> www.esperion.com</a>
            <br><br>
            <p>Developer of HDL therapies to prevent, treat, and reverse cardiovascular and metabolic diseases</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-xs-12 portco" id="evidation">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.evidation.com/" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/03/Evidationlogo.png" alt="Evidation Health">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Evidation Health</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.evidation.com" target="_blank"> www.evidation.com</a>
            <br><br>
            <p>Defining and demonstrating value in digital health through clinical and economic evidence generation and new approaches to predictive analytics that help payers and providers deploy the most effective management strategies and interventions for the right patients at the right time.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="healthtap">
          <div class="col-sm-8 col-md-4">
            <a class="pull-left" href="http://www.healthtap.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/healthtap.jpg" alt="HealthTap">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>HealthTap</h4>
            <strong>Headquarters:</strong> Palo Alto, CA<br>
            <strong>Website:</strong><a href="http://www.healthtap.com" target="_blank"> www.healthtap.com</a>
            <br><br>
            <p>Web and mobile-based interaction between physicians and patients</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="icon">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.iconaircraft.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon.jpg" alt="ICON Aircraft">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>ICON Aircraft</h4>
            <strong>Headquarters:</strong> Vacaville, CA<br>
            <strong>Website:</strong><a href="http://www.iconaircraft.com" target="_blank"> www.iconaircraft.com</a>
            <br><br>
            <p>Designs and manufactures Light Sport Aircraft (LSA)</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="imuc">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.imuc.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/imuc.jpg" alt="ImmunoCellular Therapeutics">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>ImmunoCellular Therapeutics</h4>
            <strong>Public:</strong> Nasdaq: IMUC<br>
            <strong>Headquarters:</strong> Calabasas, CA<br>
            <strong>Website:</strong><a href="http://www.imuc.com" target="_blank"> www.imuc.com</a>
            <br><br>
            <p>Developer of active immunotherapies to target regular tumor cells as well as cancer stem cells believed to cause cancer growth and reoccurrence</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="indi">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.indimolecular.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/indi.jpg" alt="Indi Molecular">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Indi Molecular</h4>
            <strong>Headquarters:</strong> Culver City, CA<br>
            <strong>Website:</strong><a href="http://www.indimolecular.com" target="_blank"> www.indimolecular.com</a>
            <br><br>
            <p>Emerging life sciences company developing a synthetic class of diagnostic and therapeutic agents with antibody-like properties: protein-catalyzed capture agents</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="keepsafe">
          <div class="col-sm-8 col-md-4">
            <a class="pull-left" href="http://www.getkeepsafe.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/keepsafe.jpg" alt="KeepSafe">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>KeepSafe</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.getkeepsafe.com" target="_blank"> www.getkeepsafe.com</a>
            <br><br>
            <p>Producer of privacy software empowering the user to control personal data</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="kii">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.kii.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/kii.jpg" alt="Kii">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Kii</h4>
            <strong>Headquarters:</strong> Tokyo, Japan<br>
            <strong>Website:</strong><a href="http://www.kii.com" target="_blank"> www.kii.com</a>
            <br><br>
            <p>Worldwide leader in mobile backup, search, and discovery</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="lark">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.lark.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/lark.jpg" alt="Lark">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Lark</h4>
            <strong>Headquarters:</strong> Mountain View, CA<br>
            <strong>Website:</strong><a href="http://www.lark.com" target="_blank"> www.lark.com</a>
            <br><br>
            <p>Coaching and data to help improve overall wellness</p>
          </div>
        </div>
      </div>

      <div class="box historical tech">
        <div class="col-sm-12 portco" id="liquidm">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.liquidm.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/liquidm.png" alt="LiquidM">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>LiquidM</h4>
            <strong>Acquisition:</strong> Bertlesmann<br>
            <strong>Website:</strong><a href="http://www.liquidm.com" target="_blank"> www.liquidm.com</a>
            <br><br>
            <p>Allows media buyers to optimize their processes across the full range of premium to performance advertising</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="maverix">
          <div class="col-sm-8 col-md-4">
            <a class="pull-left" href="http://www.maverixbio.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/maverix.jpg" alt="Maverix Biomics">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Maverix Biomics</h4>

            <strong>Headquarters:</strong> San Mateo, CA<br>
            <strong>Website:</strong><a href="http://www.maverixbio.com" target="_blank"> www.maverixbio.com</a>
            <br><br>
            <p>Enabling the next generation surfing of genomic sequencing data</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="mozio">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.mozio.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/08/mozio.png" alt="Mozio">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Mozio</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.mozio.com" target="_blank"> www.mozio.com</a>
            <br><br>
            <p>Search engine and white label booking system for airport ground transporation operators</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="nuance">
          <div class="col-md-4">
            <a class="pull-left" href="www.nuance.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/nuance.jpg" alt="Nuance">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Nuance</h4>
            <strong>Public:</strong> Nasdaq: NUAN<br>
            <strong>Website:</strong><a href="http://www.nuance.com" target="_blank"> www.nuance.com</a>
            <br><br>
            <p>
              Multinational computer software technology corporation providing speech and imaging applications
            </p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="ooma">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.ooma.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ooma.jpg" alt="Ooma">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Ooma</h4>
            <strong>Headquarters:</strong> Palo Alto, CA<br>
            <strong>Website:</strong><a href="http://www.ooma.com" target="_blank"> www.ooma.com</a>
            <br><br>
            <p>Industry-leading VoIP phones</p>
          </div>
        </div>
      </div>


      <div class="box current dh">
        <div class="col-sm-12 portco" id="profusa">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.profusacorp.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/profusa.jpg" alt="Profusa">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Profusa</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.profusacorp.com" target="_blank"> www.profusacorp.com</a>
            <br><br>
            <p>Develops an in vivo human sensor system to generate real-time data on the levels of various body chemistries</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.pmcs.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pmc.jpg" alt="PMC-Sierra">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>PMC-Sierra</h4>
            <strong>Public:</strong> Nasdaq: PMCS<br>
            <strong>Website:</strong><a href="http://www.pmcs.com" target="_blank"> www.pmcs.com</a>
            <br><br>
            <p>
              Produces MIPS processors in addition to a range of ICs for the communications, storage, and consumer markets
            </p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="proteus">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.proteus.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/proteus.jpg" alt="Proteus Digital Health">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Proteus Digital Health</h4>
            <strong>Headquarters:</strong> Redwood City, CA<br>
            <strong>Website:</strong><a href="http://www.proteus.com" target="_blank"> www.proteus.com</a>
            <br><br>
            <p>Digital health feedback technology integrated into ingestible products provides unprecedented views into personal health choices and physiologic response</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="rallypoint">
          <div class="col-sm-8 col-md-4">
            <a class="pull-left" href="http://www.rallypoint.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/rallypoint.jpg" alt="RallyPoint">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>RallyPoint</h4>
            <strong>Headquarters:</strong> Boston, MA<br>
            <strong>Website:</strong><a href="http://www.rallypoint.com" target="_blank"> www.rallypoint.com</a>
            <br><br>
            <p>Professional network for current and former US military members</p>
          </div>
        </div>
      </div>

      <div class="box current lifesciences">
        <div class="col-sm-12 portco" id="rapidscan">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.rapidscanpharma.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/rapidscan.jpg" alt="Rapidscan">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Rapidscan</h4>
            <strong>Headquarters:</strong> Palo Alto, CA<br>
            <strong>Website:</strong><a href="http://www.rapidscanpharma.com" target="_blank"> www.rapidscanpharma.com</a>
            <br><br>
            <p>RapidScan is improving patient care surrounding the diagnosis of cardiac disease by reducing time and cost while increasing efficiency.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="reify">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.reifyhealth.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/reify.jpg" alt="Reify">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Reify</h4>
            <strong>Headquarters:</strong> Boston, MA<br>
            <strong>Website:</strong><a href="http://www.reifyhealth.com" target="_blank"> www.reifyhealth.com</a>
            <br><br>
            <p>Mobile technology development platform to effectively change health behaviors</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="signalvine">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.signalvine.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/signalvine.jpg" alt="SignalVine">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>SignalVine</h4>
            <strong>Headquarters:</strong> Alexandria, VA<br>
            <strong>Website:</strong><a href="http://www.signalvine.com" target="_blank"> www.signalvine.com</a>
            <br><br>
            <p>Text messaging platform to enable organizations and their staff to easily communicate with thousands of students in a way that maximizes student responsiveness and engagement.</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="skybox">
          <div class="col-md-4">
            <a class="pull-left" href="http://www.skyboximaging.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/skybox.jpg" alt="Skybox">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Skybox Imaging</h4>
            <strong>Headquarters:</strong> Mountain View, CA<br>
            <strong>Website:</strong><a href="http://www.skyboximaging.com" target="_blank"> www.skyboximaging.com</a>
            <br><br>
            <p>Developing the world’s highest performance constellation of imaging micro satellites to deliver high resolution imagery of any spot on earth multiple times per day.</p>
          </div>
        </div>
      </div>

      <div class="box historical">
        <div class="col-sm-12 portco" id="tandem">
          <div class="col-md-4">
            <a class="pull-left" href="http://en.wikipedia.org/wiki/Tandem_Computers" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/tandemcomputers.jpg" alt="Tandem Computers">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Tandem Computers</h4>
            <strong>Acquisition:</strong> Hewlett Packard
            <br><br>
            <p>
              Tandem was the dominant manufacturer of fault-tolerant computer systems for ATM networks, banks, stock exchanges, telephone switching centers, and other similar commercial transaction processing applications requiring maximum uptime and zero data loss
            </p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="thunder">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.makethunder.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/04/PaperG.jpg" alt="Thunder">
            </a>
          </div>
          <div class="col-md-8 portco-detail">
            <h4>Thunder</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.makethunder.com" target="_blank"> www.makethunder.com</a>
            <br><br>
            <p>Thunder builds tools that allow publishers and agencies to create and distribute cross-platform display advertising at scale.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="twist">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.twistbioscience.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/twist.jpg" alt="Twist Bioscience">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Twist Bioscience</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.twistbioscience.com" target="_blank"> www.twistbioscience.com</a>
            <br><br>
            <p>Provides synthetic DNA for health and sustainability.</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="unikey">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.unikey.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2015/03/imgres.png" alt="Twist Bioscience">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Unikey</h4>
            <strong>Headquarters:</strong> Winter Park, FL<br>
            <strong>Website:</strong><a href="http://www.unikey.com" target="_blank"> www.unikey.com</a>
            <br><br>
            <p>World's first true smart lock</p>
          </div>
        </div>
      </div>

      <div class="box current tech">
        <div class="col-sm-12 portco" id="viewpoint">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.viewpointtherapeutics.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/04/Viewpoint.jpg" alt="ViewPoint">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>ViewPoint</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.viewpointtherapeutics.com" target="_blank"> www.viewpointtherapeutics.com</a>
            <br><br>
            <p>ViewPoint Therapeutics is a biotechnology company dedicated to the development of treatments for diseases of protein misfolding, including cataracts.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="welkin">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.welkinapp.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/welkin.png" alt="Welkin">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Welkin</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.welkinhealth.com" target="_blank"> www.welkinhealth.com</a>
            <br><br>
            <p>Welkin Health helps healthcare companies strengthen patient relationships and implement the best outreach solutions for those with chronic illness, leading to improved clinical and financial outcomes.</p>
          </div>
        </div>
      </div>

      <div class="box current dh">
        <div class="col-sm-12 portco" id="welldoc">
          <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://www.welldoc.com" target="_blank">
              <img src="http://www.assetman.com/wordpress/wp-content/uploads/2016/04/WellDoc.jpg" alt="WellDoc">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>WellDoc</h4>
            <strong>Headquarters:</strong> Baltimore, MD<br>
            <strong>Website:</strong><a href="http://www.welldoc.com" target="_blank"> www.welldoc.com</a>
            <br><br>
            <p>WellDoc developed the first FDA-approved digital therapeutic, a mobile app that targets diabetes patients.</p>
          </div>
        </div>
      </div>



      <div class="box current tech">
        <div class="col-sm-12 portco" id="womply">
         <div class="col-xs-12 col-md-4">
            <a class="pull-left" href="http://womply.com" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/womply.jpg" alt="Womply">
            </a>
          </div>
          <div class="col-sm-8 portco-detail">
            <h4>Womply</h4>
            <strong>Headquarters:</strong> San Francisco, CA<br>
            <strong>Website:</strong><a href="http://www.womply.com" target="_blank"> www.womply.com</a>
            <br><br>
            <p>Womply uses technology and data to grow, protect, and simplify small business</p>
          </div>
        </div>
      </div>
    </section>
  </div><!--end main-->
</div>


<?php get_footer(); ?>