<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from projecteuler.net/index.php?section=problems&id=81 by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 16 Jul 2012 06:03:45 GMT -->
<head>
<meta charset="utf-8" />
<meta name="author" content="Colin Hughes" />
<meta name="description" content="A website dedicated to the fascinating world of mathematics and programming" />
<meta name="keywords" content="programming,mathematics,problems,puzzles" />

<title>Problem 81 - Project Euler</title>
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
<h2 style="cursor:help;" title="Solved by 12403">Problem 81</h2>
<div title="Published on 22 October 2004 at 05:00 pm" style="cursor:help;color:#666;font-size:80%;">22 October 2004</div><br />
<div class="problem_content" role="problem">
<p>In the 5 by 5 matrix below, the minimal path sum from the top left to the bottom right, by <b>only moving to the right and down</b>, is indicated in bold red and is equal to 2427.</p>
<div style='text-align:center;'>
<table cellpadding='0' cellspacing='0' border='0' align='center'>
<tr>
<td><img src='http://projecteuler.net/images/bracket_left.gif' width='8' height='120' alt='' align='middle' /><br /></td>
<td>
<table cellpadding='3' cellspacing='0' border='0'>
<tr>
<td><span style='color:#dd0000;'><b>131</b></span></td><td>673</td><td>234</td><td>103</td><td>18</td>
</tr>
<tr>
<td><span style='color:#dd0000;'><b>201</b></span></td><td><span style='color:#dd0000;'><b>96</b></span></td><td><span style='color:#dd0000;'><b>342</b></span></td><td>965</td><td>150</td>
</tr>
<tr>
<td>630</td><td>803</td><td><span style='color:#dd0000;'><b>746</b></span></td><td><span style='color:#dd0000;'><b>422</b></span></td><td>111</td>
</tr>
<tr>
<td>537</td><td>699</td><td>497</td><td><span style='color:#dd0000;'><b>121</b></span></td><td>956</td>
</tr>
<tr>
<td>805</td><td>732</td><td>524</td><td><span style='color:#dd0000;'><b>37</b></span></td><td><span style='color:#dd0000;'><b>331</b></span></td>
</tr>
</table>
</td>
<td><img src='http://projecteuler.net/images/bracket_right.gif' width='8' height='120' alt='' align='middle' /><br /></td>
</tr>
</table>
</div>
<p>Find the minimal path sum, in <a href='http://projecteuler.net/project/matrix.txt'>matrix.txt</a> (right click and 'Save Link/Target As...'), a 31K text file containing a 80 by 80 matrix, from the top left to the bottom right by only moving right and down.</p>

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

<!-- Mirrored from projecteuler.net/index.php?section=problems&id=81 by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 16 Jul 2012 06:03:45 GMT -->
</html>