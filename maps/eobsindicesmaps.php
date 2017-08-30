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
    <title>E-OBS indices maps</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 
   <!-- General settings to embed adaguc viewer -->
  <?php include('../include/adaguc/embed_adaguc.js'); ?>
  <script type="text/javascript" src="../include/adaguc/gfiapp_d3c3.js"></script>
  <!-- Specific for this page -->
  <script type="text/javascript" src="../include/adaguc/eobsindices.js"></script>
  <?php
   $EOBSversion="11.0";
  ?>

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
		  <h1 id="page-title" class="title">E-OBS indices maps</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">»</span> <span class="inline even last"><a href="eobsindicesmaps.php">E-OBS indices maps</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

  Shown are the indices maps based on E-OBS v<?php echo $EOBSversion ?>.  These indices data are freely available for non-commercial research and education: see the <a href="http://www.ecad.eu/documents/ECAD_datapolicy.pdf" target="_blank">data policy</a> for more details. Each index describes a particular characteristic of climate change (both changes in the mean and the extremes). A core set of 27 indices follows the definitions recommended by the CCl/CLIVAR/JCOMM Expert Team on Climate Change Detection and Indices (<a href="http://www.clivar.org/organization/etccdi/etccdi.php" target="_blank">ETCCDI</a>). These indices are calculated in a similar way for other regions of the world. An additional set of 8 indices highlights particular characteristics of climate change in Europe (including the Standardized Precipitation Index, etc.).
<br><br>
To learn more about the meaning and the way each index is calculated see the <a href="http://www.ecad.eu/indicesextremes/indicesdictionary.php">Indices dictionary</a>, but note that the indices shown on current page use 
1981-2010 as normal period instead of 1961-1990.

    <br><br>
    
 Select period 
             <div id="groupselector"></div>
<br>
    
    Select index
                                       <div id="layerlist"></div>
<br>
    
            Selected date: <b><span id="currenttime"></span></b>
<div id="timeslider"></div>
               <button style="font-size:11px" id="timesliderprev" class="deletenextandpreviousbutton">&lt;</button><button style="font-size:11px" id="timeslidernext" class="deletenextandpreviousbutton">&gt;
</button>
<br><br>
	       <div id="colorrangechooser"><p class="normaltext">Define range min:
               <input style="width:40px;" type="text" name="min"/>max:
               <input style="width:40px;" type="text" name="max"/>
               <button name="submit">Submit</button>
               <button name="reset">Reset</button>
               <button name="downloadmap">Download map</button></p>
              </div>

  <br>
          <hr>
          <p class="normaltext">Timeseries for a location (click on map &amp; scroll down)</p>
          <hr>
<div>
          <div id="webmap1" style="width:652px;height:490px;"></div>
</div>
          <div id="graphmaker" class="chartstyle" ></div>
 
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
