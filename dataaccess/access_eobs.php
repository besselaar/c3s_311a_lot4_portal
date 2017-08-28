<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../theme/favicon_0.png" type="image/png">
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (http://drupal.org)">
    <link rel="canonical" href="http://climate.copernicus.eu/events">
    <link rel="shortlink" href="http://climate.copernicus.eu/events">
    <title>E-OBS data access</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 

  <?php include('../include/styles.php'); ?>
  
  </head>


  <body class="html not-front not-logged-in no-sidebars page-events ff ff43 win desktop">
   <?php include('../include/header.php'); ?>  

    <!-- Title -->
    <div id="globalpageheaderwrapper" class="wrapper clearfix ">
      <div id="globalpageheadercontainer" class="container">
	<div id="globalpageheader">
          <div class="row">
	    <div class="region region-static-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	      <div class="row-fluid">
		<div id="block-delta-blocks-page-title" class="block block-delta-blocks col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		  <h1 id="page-title" class="title">E-OBS data access</h1>
		</div> <!-- /.block -->
	      </div>
	    </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="mainwrapper" class="wrapper clearfix ">
      <div id="maincontainer" class="container">
        <div id="main">
          <div class="row-fluid">
            <div class="region region-content  col-xs-12 col-sm-12 col-md-8 col-lg-8">
	      <div class="row-fluid">
		
		<!-- Breadcrum -->
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfgridobs.php">Home</a></span><span class="delimiter">»</span> <span class="inline even last"><a href="access_eobs.php">E-OBS data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  <span style="color:#FF0000;"><b>PAGE UNDER CONSTRUCTION</b></span><br>
		  This is the download page for the daily gridded observational dataset for precipitation, temperature and sea level pressure in Europe called E-OBS. 
		  
		  
		  <h3>Actual version and update policy</h3>
		  <br>
		  
		  ECA&amp;D staff will maintain and update the E-OBS gridded dataset. A registration system is in place which will be used to keep users informed about new versions in the future. If you haven&#39;t registered yourself yet as an E-OBS user using this system, we encourage you to do so here:
		  <br><br>
		  
		  <form method="post" action="registration.php" name="subscribeform" target="_blank">
		    <?php
		      echo '<input type="submit" name="register" id="register" value="Register as an E-OBS user" >';
		      ?>
		  </form>  
		  <br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="10%"><span style="color:#FFFFFF;"><strong>Version</strong></span></td>
			<td width="17.5%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="17.5%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
			<td width="55%"><span style="color:#FFFFFF;"><strong>Modification</strong></span></td>    
		      </tr>
		      <tr>
			<td><a href="access_eobs.php#datafiles">15.0</a></td>
			<td>June 2017</td>
			<td>1950-01-01 - 2016-12-31</td>
			<td>New stations have been included for Montenegro and updates have been included for Estonia, Israel, Hungary, UK and France.  Monthly updates are continued for Germany, Czech Republic, Bosnia and Herzegovina, Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands, Portugal, Spain and Switzerland. More detailed information can be found on the <a href="http://cib.knmi.nl/mediawiki/index.php/Compare_E-OBS_v15.0_and_v14.0" target="_blank">page comparing versions 15.0 and 14.0</a>. 
			  Together with the 'standard' E-OBS files, an ensemble of possible E-OBS fields are created. The ensemble mean and ensemble spread are available in a beta version (v15.0e_beta). A comparison between v15.0 and v15.0e_beta can be found on <a href="http://cib-dev.knmi.nl/mediawiki/index.php/Compare_E-OBS_v15.0_and_v15.0e_beta" target="_blank">this comparison page</a><span style="color:#FF0000">CIB-DEV, update later</span>.
			  
			</td>   
		      </tr>
		    </tbody>
		  </table>
 Information on older versions of E-OBS can be found <a href="http://www.ecad.eu/download/ensembles/oldversions.php">here</a>. 
 		  
		<h3> E-OBS datafiles 1950-01-01 - 2016-12-31</h3>

		The datafiles contain gridded data for 5 elements (daily mean temperature <b>TG</b>, daily minimum temperature <b>TN</b>, daily maximum temperature <b>TX</b>, daily precipitation sum <b>RR</b> and daily averaged sea level pressure <b>PP</b>). They cover the area: 25N-75N x 40W-75E. The data files are in compressed NetCDF format. There are 4 different versions: 2 grid resolutions x 2 grid flavours. Data is made available on a 0.25 and 0.5 degree regular lat-lon grid, as well as on a 0.22 and 0.44 degree rotated pole grid, with the north pole at 39.25N, 162W. The regular grid is the same as the monthly CRU data grids available from the <a href="http://www.cru.uea.ac.uk" target="_blank">Climatic Research Unit</a>. The rotated grid is the same as used in many <a href="http://ensemblesrt3.dmi.dk/" target="_blank">ENSEMBLES Regional Climate Models</a>. Besides 'best estimate' values, separate files are provided containing daily standard errors and elevation. See <a href="Haylock_et_al_2008.pdf" target="_blank">Haylock et al. (2008)</a>, <a href="http://www.agu.org/pubs/crossref/2011/2010JD015468.shtml" target="_blank">van den Besselaar et al. (2011)</a> and Cornes et al. (2017) for further details. The Global 30 Arc-Second Elevation Data Set (<a href="http://eros.usgs.gov/#/Find_Data/Products_and_Data_Available/GTOPO30" target="_blank">GTOPO30</a>), a global raster Digital Elevation Model (DEM) with a horizontal grid spacing of 30 arc seconds (approximately 1 kilometer) developed by USGS is used for the elevation file.<br><br>

		<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		  <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td width="25%" style="color:#FFFFFF;"><b>Version 15.0</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>Best estimate</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>Daily standard error</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>Elevation</b></td>      
		    </tr>
		    <tr>
		      <td>0.25 deg. regular grid</td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tg_0.25deg_reg_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tn_0.25deg_reg_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tx_0.25deg_reg_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/rr_0.25deg_reg_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/pp_0.25deg_reg_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tg_stderr_0.25deg_reg_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tn_stderr_0.25deg_reg_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/tx_stderr_0.25deg_reg_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/rr_stderr_0.25deg_reg_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/pp_stderr_0.25deg_reg_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg/elev_0.25deg_reg_v15.0.nc.gz">all elements</a></td> 
		    </tr>
		    <tr>
		      <td>0.50 deg. regular grid</td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tg_0.50deg_reg_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tn_0.50deg_reg_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tx_0.50deg_reg_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/rr_0.50deg_reg_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/pp_0.50deg_reg_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tg_stderr_0.50deg_reg_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tn_stderr_0.50deg_reg_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/tx_stderr_0.50deg_reg_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/rr_stderr_0.50deg_reg_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/pp_stderr_0.50deg_reg_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.50deg_reg/elev_0.50deg_reg_v15.0.nc.gz">all elements</a></td> 
		    </tr>
		    <tr>
		      <td>0.22 deg. rotated grid</td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tg_0.22deg_rot_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tn_0.22deg_rot_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tx_0.22deg_rot_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/rr_0.22deg_rot_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/pp_0.22deg_rot_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tg_stderr_0.22deg_rot_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tn_stderr_0.22deg_rot_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/tx_stderr_0.22deg_rot_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/rr_stderr_0.22deg_rot_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/pp_stderr_0.22deg_rot_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.22deg_rot/elev_0.22deg_rot_v15.0.nc.gz">all elements</a></td> 
		    </tr>
		    <tr>
		      <td>0.44 deg. rotated grid</td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tg_0.44deg_rot_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tn_0.44deg_rot_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tx_0.44deg_rot_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/rr_0.44deg_rot_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/pp_0.44deg_rot_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tg_stderr_0.44deg_rot_v15.0.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tn_stderr_0.44deg_rot_v15.0.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/tx_stderr_0.44deg_rot_v15.0.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/rr_stderr_0.44deg_rot_v15.0.nc.gz">RR</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/pp_stderr_0.44deg_rot_v15.0.nc.gz">PP</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.44deg_rot/elev_0.44deg_rot_v15.0.nc.gz">all elements</a></td> 
		    </tr>
		    <tr bgcolor="#941333" height="40px">
		      <td style="color:#FFFFFF;"><b>Version 15.0e_beta</b></td>
		      <td style="color:#FFFFFF;"><b>Ensemble mean</b></td>
		      <td style="color:#FFFFFF;"><b>Ensemble spread</b></td>
		      <td style="color:#FFFFFF;"><b>Elevation</b></td>      
		    </tr>
		    <tr>
		      <td>0.25 deg. regular grid</td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tg_ens_mean_0.25deg_reg_v15.0e_beta.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tn_ens_mean_0.25deg_reg_v15.0e_beta.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tx_ens_mean_0.25deg_reg_v15.0e_beta.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/rr_ens_mean_0.25deg_reg_v15.0e_beta.nc.gz">RR</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tg_ens_spread_0.25deg_reg_v15.0e_beta.nc.gz">TG</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tn_ens_spread_0.25deg_reg_v15.0e_beta.nc.gz">TN</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/tx_ens_spread_0.25deg_reg_v15.0e_beta.nc.gz">TX</a> <a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/rr_ens_spread_0.25deg_reg_v15.0e_beta.nc.gz">RR</a></td>
		      <td><a href="http://www.ecad.eu/download/ensembles/data/Grid_0.25deg_reg_ensemble/elev_ens_0.25deg_reg_v15.0e_beta.nc.gz">all elements</a></td>      
		    </tr>
		  <tbody>
		</table>


		      <h3>Citation and acknowledgement</h3>
		      
		      Whenever you publish research or applications based on these gridded data products, you should include the following acknowledgement and citations.<br><br>
		      E-OBS temperature and precipitation:<br>
		      "We acknowledge the E-OBS dataset from the EU-FP6 project ENSEMBLES (http://ensembles-eu.metoffice.com) and the data providers in the ECA&amp;D project (http://www.ecad.eu)"<br>
		      "Haylock, M.R., N. Hofstra, A.M.G. Klein Tank, E.J. Klok, P.D. Jones, M. New. 2008: A European daily high-resolution gridded dataset of surface temperature and precipitation. J. Geophys. Res (Atmospheres), <b>113</b>, D20119, doi:10.1029/2008JD10201" <img src="../images/pdf.gif" width="15" height="15" alt="" border="0"> <a href="Haylock_et_al_2008.pdf" target="_blank">Download as PDF</a>
		      <br><br>
		      
		      E-OBS sea level pressure:<br>
		      "We acknowledge the E-OBS dataset from the EU-FP6 project ENSEMBLES (http://ensembles-eu.metoffice.com) and the data providers in the ECA&D project (http://www.ecad.eu)"<br>
		      "van den Besselaar, E.J.M., M.R. Haylock, G. van der Schrier and A.M.G. Klein Tank. 2011: A European Daily High-resolution Observational Gridded Data set of Sea Level Pressure. J. Geophys. Res., <b>116</b>, D11110, doi:10.1029/2010JD015468" <img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="http://www.agu.org/pubs/crossref/2011/2010JD015468.shtml" target="_blank">Website</a>
		      <br><br>
		      
		      Ensemble version:<br>
		      "We acknowledge the E-OBS dataset from the EU-FP6 project UERRA (http://www.uerra.eu) and the data providers in the ECA&D project (http://www.ecad.eu)"<br>
		      "Cornes, R.C., G. van der Schrier, E.J.M. van den Besselaar and P.D. Jones. 2017: An Ensemble Version of the E-OBS Temperature and Precipitation Datasets.To be submitted"

		</div>	  
	      </div>
	      
	    </div> <!-- /.block -->
	  </div>
	</div>

       <?php include('../include/menu_portal.php'); ?>
     </div>	
    </div>
    <?php include('../include/footer.php'); ?>
    
  </body>
</html>
