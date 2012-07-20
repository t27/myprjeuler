<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from projecteuler.net/index.php?section=problems&id=114 by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 16 Jul 2012 06:03:51 GMT -->
<head>
<meta charset="utf-8" />
<meta name="author" content="Colin Hughes" />
<meta name="description" content="A website dedicated to the fascinating world of mathematics and programming" />
<meta name="keywords" content="programming,mathematics,problems,puzzles" />

<title>Problem 114 - Project Euler</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="style_main.css" />

<script type="text/x-mathjax-config">
   MathJax.Hub.Config({
      jax: ["input/TeX", "output/HTML-CSS"],
      tex2jax: {
         inlineMath: [ ["$","$"], ["\\(","\\)"] ],
         displayMath: [ ["$$","$$"], ["\\[","\\]"] ],
         processEscapes: true
      },
      "HTML-CSS": { availableFonts: ["TeX"] }
   });
</script>

<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML">
</script>
<link rel="stylesheet" type="text/css" href="style_light.css" /></head>

<body>
<div id="container">

   <div id="nav" class="noprint">
      <ul>
<li><a href="about.html" title="About" accesskey="h">About</a></li>
<li><a href="register.html" title="Register" accesskey="1">Register</a></li>
<li id="current"><a href="problems.html" title="Problems" accesskey="2">Problems</a></li>
<li><a href="login.html" title="Login" accesskey="3">Login</a></li>
      </ul>
   </div>
<div id="info_panel"><a href="rss2_euler.xml"><img src="http://projecteuler.net/images/icon_rss.png" alt="RSS Feed" title="RSS Feed" /></a><a href="http://projecteuler.net/secure=yes"><img src="http://projecteuler.net/images/icon_lock.png" alt="Use secure connection" title="Use secure connection" /></a></div>

<div id="logo" class="noprint">
   <img src="http://projecteuler.net/images/pe_banner_light.png" alt="Project Euler .net" />
</div>

<div id="content">
<div style="text-align:center;" class="print"><img src="http://projecteuler.net/images/pe_banner.png" alt="projecteuler.net" style="border:none;" /></div>
<h2 style="cursor:help;" title="Solved by 4025">Problem 114</h2>
<div title="Published on 17 February 2006 at 06:00 pm" style="cursor:help;color:#666;font-size:80%;">17 February 2006</div><br />
<div class="problem_content" role="problem">
<p>A row measuring seven units in length has red blocks with a minimum length of three units placed on it, such that any two red blocks (which are allowed to be different lengths) are separated by at least one black square. There are exactly seventeen ways of doing this.</p>

<table cellpadding="5" cellspacing="1" border="0" align="center">

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="3" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="66" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="4" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="89" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="4" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="89" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="4" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="89" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="4" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="89" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="5" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="112" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="5" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="112" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="5" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="112" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="6" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="135" height="20" alt="" /></td>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td style="background-color:#000000"><img src="http://projecteuler.net/images/spacer.gif" width="20" height="20" alt="" /></td>
<td colspan="6" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="135" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>
<table cellspacing="1" cellpadding="0" border="1">
<tr>
<td colspan="7" style="background-color:#cc0000"><img src="http://projecteuler.net/images/spacer.gif" width="158" height="20" alt="" /></td>
</tr>
</table>
</td>
<td>&nbsp;</td>
</tr>

</table>
<p>How many ways can a row measuring fifty units in length be filled?</p>
<p class="info">NOTE: Although the example above does not lend itself to the possibility, in general it is permitted to mix block sizes. For example, on a row measuring eight units in length you could use red (3), black (1), and red (4).</p>
</div><br />
<br /></div>





<div id="footer" class="noprint">
<a href="copyright.html">Project Euler Copyright Information</a>
<!--/Creative Commons License--><!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
   <Work rdf:about="">
      <license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/" />
   <dc:type rdf:resource="http://purl.org/dc/dcmitype/Text" />
   </Work>
   <License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
</div>
</div>
<div style="height:1px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></body>

<!-- Mirrored from projecteuler.net/index.php?section=problems&id=114 by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 16 Jul 2012 06:03:51 GMT -->
</html>