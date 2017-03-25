<html>
<head>

<style>

body{ background : #59b3d5 ; 
font-family: Calibri ;}

#footer
{
	width:1368px;
	height:235px;
	
	background-image:url(footer1.png);
	text-align:left;
	margin-top:50px;
	margin-bottom:-10px;
	margin-left:-10px;
	margin-right:-100px;
}
.b
{
	background-repeat:no-repeat;
	background-size:100% 100%;
}
.b a
{
	color:white;
}

.SiteSearch{  text-align:center; }
</style>

<link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "menu.html";?>	
	

<table>
<div class="SiteSearch">
    <form action="search.php" id="searchform" method="get">

	 <input type="Submit" id="gBtn" value="Search" style="margin: 10px;
			border:none;
			padding: 10px 25px;
			text-align: center;
			font-family : calibri ;
			display: inline-block;
			font-size: 16px;"/>	
	<input type="button" value="Logout" onclick="window.location='logout.php'" style="margin: 10px;
			border:none;
			padding: 10px 25px;
			text-align: center;
			font-family : calibri ;
			display: inline-block;
			font-size: 16px;"></br>
    </form><br>
	<p>
	</p>
	
</div>


<table border="0" align="center" cellpadding="0" cellspacing="0" height="70%" width="74%" style="background: #4c9bb9; border-radius: 20px; color: white;">

<tr>
<center><td colspan="4"><font face="Calibri" size="18" color="white"><h1>PROJECTS</h1></font></td></center>
</tr>
<tr>
<th>Project name</th>
<th>Skills</th>

<th>Deadlines</th>

</tr>
<tr>
<td>
<a href="p1.php">2. Online shopping management system</td></a>

</td><td>html,javascripting,jquery,php mysql</td>
<td>12-Apr</td>
</tr>
<tr>
<td>
<a href="p2.php">2. Online library management system</td></a>
<td>html,css,javascripting,jquery,ajax,php mysql</td>
<td>18-May</td>
</tr>
<tr>
<td>
3. Online medical management system</td>
<td>html,css,javascripting,jquery,ajax,php mysql</td>
<td>16-Nov</td>
</tr>
<tr>
<td>
4. Simple flash html project
</td>
<td>
html</td>
<td>16-Nov</td>
</tr>
<tr>
<td>
5. Html website building
</td>
<td>
PHP, Website Design,Graphic Design,HTML</td>
<td>22-Nov</td>
</tr>
<tr>
<td>6. Viewport / HTML / Android and Mobile Cross Browser Display Small Job</td>
<td>
JavascriptWebsite DesignGraphic DesignCSSHTML</td>
<td>27-Nov</td>
</tr>
<tr>
<td>
7. Header only: revamp / redesign a simple website header with a handful of elements
</td>
<td>
Graphic DesignHTMLWebsite Design</td>
<td>29-Nov</td>
</tr>
<tr>
<td>
8. Online HTML template editor
</td>
<td>
Website DesignAJAXC# ProgrammingjQuery / PrototypeMVC
</td>
<td>30-Nov</td>
</tr>


</table>

<div id="footer" class="b">
<font color="#3399FF">

<div style="width:1355px; height:200px; margin-left:-10px; margin-right:-10px"><img src="footer1.png" height="250" width="100%" />
<div style="width:51%; height:100; margin-left:350px; margin-top:-230px">
<table width="51%" height="96" border="0" align="center" >
<tr height="100" ></tr>
  <td valign="top"><a href="home.php">HOME</a></td><td><a href="about.html">ABOUT US</a></td><td><a href="conatct.html">CONTACT US</a><br /></td>
</table>
</div>
</div>
</font>

 <div style="width:100%; height:10; margin-top:50px">
 <center>
   <font color="#000000" size="2">All Rights Reserved Copyright &copy;</font>
</center>
</div> 
</div>



</body>
</html>


