<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>RiTa Reference</title>
		<link rel="stylesheet" href="../../../css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="../../../css/syntax.css" type="text/css" />
		<link rel="stylesheet" href="../../../css/style.css" type="text/css" />
		<link rel="shortcut icon" type="image/x-icon" href="http://rednoise.org/rita/rita.ico"/>

		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script language="javascript" src="js/highlight.js"></script>
		<!-- <script src="../../../js/processing-min.js" type="text/javascript"></script> -->
		<!--script type="text/javascript" src="../../../mailto.js"></script-->
	</head>

	<body>
		
 <?php include("header.php"); ?>


  
<div class="gd-section pad-large"> 
<div class="gd-center pad-large"> 
<div class="row">
  <div class="col1"></div>
  <div class="col10">
     <h3>Reference</h3>
     <div class="page row">
				
				<div class="refbar span3">
					<div id="index">
						<!-- begin publish.classesIndex -->
						<h3></h3>
						<ul class="classList" >
							<br />
							<li style="top:60px;left:50px">
								<a href="../../index.html">Back to index</a>
							</li>
						</ul>
						<hr />
						<!-- end publish.classesIndex -->
					</div>
				</div>
								
				
				<div class="span11">
					<table cellpadding="0" cellspacing="0" border="0" class="ref-item">
						<tr class="name-row">
							<th scope="row">Class</th>
							<!-- ------------ METHODS PROPERTIES HERE ------------ -->

							<!-- ClASS -->
							<td><h3><a href="../../RiWordNet.html">RiWordNet</a></h3></td>
						</tr>
						
						<tr class="name-row">
							<th scope="row">Name</th>

							<!-- METHOD NAME -->
							<td><h3>getAllMeronyms</h3></td>
						</tr>

						<tr class="">
							<th scope="row">Description</th>

							<!-- DESCRIPTION  -->
							<td>Returns array of whole-to-part relationships for all senses of word/pos<br/>X is a meronym of Y if Y has X as a part.<br/>X is a holonym of Y if X has Y as a part. That is, if Y is a meronym of X. <br/>Holds between: Nouns and nouns<br/>Returns part,member, and substance meronyms<br/>Example: arm -> [wrist, carpus, wrist-joint, radiocarpal-joint...]</td>
						</tr>
						
						<tr class='Syntax'>
							<th scope="row">Syntax</th>

							<!-- SYNTAX  -->
							<td><pre>getAllMeronyms(query, pos);</pre></td>
						</tr>

						    
						<tr class='Parameters'>
							<th scope="row">Parameters</th>
							<td>
							
							<!-- PARAMETERS  -->
							
							<table cellpadding="0" cellspacing="0" border="0" class="sub-table">
								<tr class=''><th width='25%' scope='row' class=nobold>String</th><td width='75%'>query</td></tr><tr class=''><th width='25%' scope='row' class=nobold>String</th><td width='75%'>the part-of-speech</td></tr>
							</table></td>
						</tr>


						<tr class='Returns'>
							<th scope="row">Returns</th>
							<td>
								
							<!-- RETURNS/TYPE (for variables)  -->

							<table cellpadding="0" cellspacing="0" border="0" class="sub-table">
								<tr class=''><th width='25%' scope='row' class=nobold>java.lang.String[]</th><td width='75%'></td></tr>
							</table></td>
						</tr>

						<tr class='Related' style='display:none'>
							<th scope="row">Related</th>

							<!-- RELATED  -->
							<td>tmp_related</td>
						</tr>
						
						<tr class='Note' style='display:none'>
							<th scope="row">Note</th>
							<!-- NOTE  -->
							<td>tmp_note</td>
						</tr>
						
						<tr class='Example' style='display:none'>
							<th scope='row'>Example</th>
							<td>
							<div class="example">

								<!-- EXAMPLE  -->
								<!--img src="../../../img/RiTa-logo4.png" alt="example pic" /-->
								<pre class="margin">tmp_example</pre>
							</div></td>
						</tr>
						
						<tr class="">
							<th scope="row">Platform</th>
							<!-- PLATFORM  -->
							<td>Java only</td>
						</tr>
						
						<tr class="">
							<th scope="row"></th>
							<td></td>
						</tr>

					</table>
				</div>
			</div>
  </div>
    <div class="col1"></div>
  
</div>
</div>
    </div>




<?php include("footer.php"); ?>
			

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://rednoise.org/al/piwik/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

	</body>
</html>
