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
    <title>E-OBS indices access</title>
    
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
		  <h1 id="page-title" class="title">E-OBS indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">»</span> <span class="inline even last"><a href="access_eobs_indices.php">E-OBS indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  <span style="color:#FF0000;"><b>PAGE UNDER
		  CONSTRUCTION</b></span><br> This is the download
		  page for the indices derived from the E-OBS dataset.
		  The datafiles below provide 30 climate indices
		  (ETCCDI indices marked with *) for the E-OBS v11.0
		  derived using daily minimum temperature (TN), daily
		  maximum temperature (TX) and daily precipitation sum
		  (RR). They cover the area 25N-75N x 40W-75E with
		  0.25 deg regular grid. The data files are in NetCDF
		  format, separated in three sets per index: annual,
		  monthly and seasonal. Seasonal indices are
		  calculated from the monthly indices, where for
		  December-January-February (DJF) the December of the
		  previous year is used:
		  Dec(1951)-Jan(1952)-Feb(1952).
  
		  <h3>Terms of use</h3>

		  The <a href="http://www.ecad.eu/documents/ECAD_datapolicy.pdf">ECA&amp;D data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. Scientific results based on these data must be submitted for publication in the open literature without any delay linked to commercial objectives. If you are unsure about the terms "commercial", "research", and "education", or you have any questions about the climate indices please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification.

		  <h3>Temperature indices</h3>

		  <!--TN10p & TX10p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of cold nights (TN10p)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>No. of cold day-times (TX10p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn10p_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx10p_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn10p_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx10p_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn10p_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tn10p_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tn10p_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tn10p_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx10p_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tx10p_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tx10p_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tx10p_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
	

		  <!--TN90p & TX90p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of warm nights (TN90p)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of warm day-times (TX90p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn90p_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx90p_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn90p_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx90p_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tn90p_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tn90p_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tn90p_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tn90p_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tx90p_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tx90p_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tx90p_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tx90p_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  

		  <!--WSDI  & CSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Warm Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Cold Spell Duration Index (CSDI)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/wsdi_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/csdi_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--TXx & TXn -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily maximum temperature (TXx)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily maximum temperature (TXn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txx_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txn_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txx_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txn_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txx_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/txx_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/txx_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/txx_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/txn_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/txn_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/txn_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/txn_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--TNx & TNn-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily minimum temperature (TNx)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily minimum temperature (TNn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnx_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnn_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnx_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnn_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnx_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tnx_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tnx_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tnx_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tnn_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tnn_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tnn_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tnn_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--FD & ID-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of frost days (FD)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of ice days (ID)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/fd_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/id_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/fd_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/id_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/fd_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/fd_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/fd_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/fd_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/id_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/id_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/id_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/id_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SU & TR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of summer days (SU)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of tropical nights (TR)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/su_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tr_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/su_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tr_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/su_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/su_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/su_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/su_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/tr_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/tr_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/tr_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/tr_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--CFD & CSU -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Consecutive frost days (CFD)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>Consecutive summer days (CSU)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/cfd_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/csu_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/cfd_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/csu_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/cfd_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/cfd_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/cfd_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/cfd_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="../indices_R/tr_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/csu_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/csu_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/csu_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		  </table>
		  
		  <!--GSL & DTR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Growing Season Length (GSL)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Mean of diurnal temperature range (DTR)*</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/gsl_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/dtr_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/dtr_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/dtr_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/dtr_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/dtr_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/dtr_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <h3>Precipitation indices</h3>

		  <!--rx1day & rx5day -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Highest 1-day precipitation amount (RX1day)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Highest 5-day precipitation amount (RX5day)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx1day_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx5day_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx1day_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx5day_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx1day_DJF_025deg_reg_v11.nc">DJF</a>   
			<a href="http://www.ecad.eu/download/indices_R/rx1day_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/rx1day_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/rx1day_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/rx5day_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/rx5day_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/rx5day_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/rx5day_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SDII & R1mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Simple Daily Intensity (SDII)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>No. of wet days (R1mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/sdii_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r1mm_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/sdii_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r1mm_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/sdii_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/sdii_MAM_025deg_reg_v11.nc">MAM</a>    
			<a href="http://www.ecad.eu/download/indices_R/sdii_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/sdii_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r1mm_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r1mm_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r1mm_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r1mm_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
       
		  <!--R10mm & R20mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Heavy precipitation days (R10mm)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Very heavy precipitation days (R20mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r10mm_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r20mm_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r10mm_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r20mm_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r10mm_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r10mm_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r10mm_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r10mm_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r20mm_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r20mm_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r20mm_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r20mm_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CWD  & CDD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive wet days (CWD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/cwd_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/cdd_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--R75pTOT & R95pTOT  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to moderate wet days (R75pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to very wet days (R95pTOT)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r75ptot_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r95ptot_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r75ptot_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r95ptot_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r75ptot_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r75ptot_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r75ptot_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r75ptot_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r95ptot_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r95ptot_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r95ptot_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r95ptot_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R99pTOT & PRCPTOT  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to extremely wet days (R99pTOT)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to wet days (PRCPTOT)*</strong></span></td>    
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r99ptot_yr_025deg_reg_v11.nc">Annual</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/prcptot_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r99ptot_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/prcptot_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/r99ptot_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/r99ptot_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/r99ptot_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/r99ptot_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/prcptot_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/prcptot_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/prcptot_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/prcptot_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--RRanom & SPI3  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation anomaly w.r.t. 1981-2010 (RRanom)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>3-month Standardized Precipitation Index (SPI3)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/RRanom_yr_025deg_reg_v11.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/RRanom_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/spi3_mon_025deg_reg_v11.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/RRanom_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/RRanom_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/RRanom_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/RRanom_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/spi3_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/spi3_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/spi3_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/spi3_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!-- SPI6 -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>6-month Standardized Precipitation Index (SPI6)</strong></span></td>
		      <td class="normaltext"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/spi6_mon_025deg_reg_v11.nc">Monthly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://www.ecad.eu/download/indices_R/spi6_DJF_025deg_reg_v11.nc">DJF</a>  
			<a href="http://www.ecad.eu/download/indices_R/spi6_MAM_025deg_reg_v11.nc">MAM</a>   
			<a href="http://www.ecad.eu/download/indices_R/spi6_JJA_025deg_reg_v11.nc">JJA</a>   
			<a href="http://www.ecad.eu/download/indices_R/spi6_SON_025deg_reg_v11.nc">SON</a> 
		      </td>
		      <td width="33%">
		      </td>
		    </tr>
		    </tbody>
		  </table>
        
		  <h3>Citation and acknowledgement</h3>

		  Whenever you publish research or applications based
		  on these gridded indices products, you should
		  include the following acknowledgement and citations.
		  <br><br>
		  
		  "We acknowledge the E-OBS climate indices dataset from the
		  EU-FP7 project EUPORIAS (http://www.euporias.eu) and the data
		  providers in the ECA&amp;D project (http://www.ecad.eu)."

		</div>	  
	      </div>
	      
	    </div> <!-- /.block -->
	  </div>
	</div>
	<!-- menu_portal.php -->
       <?php include('../include/menu_portal.php'); ?>
     </div>	
    </div>
    <?php include('../include/footer.php'); ?>
    
  </body>
</html>
