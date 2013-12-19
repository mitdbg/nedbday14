<html>

<head>

<script type="text/javascript">

function toggle(element) {

  if (document.getElementById(element).style.display == "none") {

    document.getElementById(element).style.display = "";

  } else {

    document.getElementById(element).style.display = "none";

  }

}

</script>

<title>New England Database Summit Papers</title>
<style type="text/css">
h2 {
padding-left: 0em;
      color : #0000CC;

}

title {
}

authors {
}

abstract {
}

BODY {
padding-left: 16em;
      background-color : #FFFFFF;
      font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
      color : #000088;
      margin: 0px; 
      width: 700px;
      }
  ul.navbar {
    position: absolute;
    top: 0em;
    left: 1em;
    width: 11em }

</style>

</head>
<body bgcolor=#FFFFFF fgcolor=#000000>

<table>
<tr>
<td></td>
</tr>
<tr>
<td>
<h2>
New England Database Summit Papers for Presentation <br> 
</h2>
<h3>
List of accepted papers:
</h3>


<!-- Site navigation menu -->
<ul class="navbar">
<img src="logo.jpg" width=200></img> 
  <li><a href="index.html">Home page</a>
  <li>Paper Submission (closed)
  <li><a href="http://www.eventbrite.com/event/4563158530">Registration</a>
  <li><a href="program.html">Program</a>
  <li>Accepted Papers
  <li><a href="posters.php">Accepted Posters</a>
  <li><a href="http://whereis.mit.edu/map-jpg?selection=32">Map</a>
</ul>

<ul>

  <table>
    
<?php


// Make compatible with older version of PHP (<4.2)
if (!isset($_SERVER) && isset($HTTP_SERVER_VARS)) 	define('_SERVER', 'HTTP_
SERVER_VARS');
if (!isset($_POST) 	 && isset($HTTP_POST_VARS)) 	define('_POST', 'HTTP_POST_VARS');
if (!isset($_GET) 	 && isset($HTTP_GET_VARS)) 		define('_GET', 'HTTP_GET_VARS');
if (!isset($_FILES)  && isset($HTTP_POST_FILES)) 	define('_FILES', 'HTTP_POST_FILES');

$data =file("papers.txt");
    $i=0;
foreach ($data as $row) {
   $i++;    
  $ar = explode("\t",$row);
    $title = trim($ar[0],"\"\n.");
    $auth = trim($ar[2],"\"\n.");
    $abs = trim($ar[1],"\"\n");

  echo "<li>".$auth.". <i>".$title.". </i><a href=\"javascript:toggle(".$i.")\">Click to show abstract. </a> <div id=\"".$i."\" style = 'display: None;'> <p style = \"color:black; font-size:100%;  font-style:italic\">  ".$abs."</div><p>\n\n";  
}

?>

</ul>
</td></tr>
</table>
</body>
</html>
