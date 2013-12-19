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

<title>New England Database Summit Posters</title>
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
New England Database Summit Posters <br> 
</h2>

The poster session will include drinks and appetizers.  It will be held in <a href="htdocs/postermap.html"> on the 4th floor of building 32 </a> (same building as the main conference.)

</h2>

<h3> Information for Poster Presenters </h3>

We will be able to provide poster board, easels, and mounting supplies for
you.
<p>
You will need to print your poster and bring it with you to the conference. 
We recommend posters to be either A0, A1, or ANSI D or E sizes (either 24" by
32" or 36" by 42").  Our poster boards are large enough to accommodate any of these.
You may orient your poster as you see fit.  If you prefer to print out individual 8.5" x 11" pages,
our board will be large enough to accommodate about 12 pages.  However, we recommend making
a single poster -- if you don't have access to a large format printer Fedex/Kinkos can print your
poster for you.
<p>
We will have a storage area for poster tubes at the conference.  You will be able to set up
your posters during the lunch break.



<h3>
List of accepted posters:
</h3>


<!-- Site navigation menu -->
<ul class="navbar">
<img src="logo.jpg" width=200></img> 
  <li><a href="index.html">Home page</a>
  <li>Paper Submission (closed)
  <li><a href="http://www.eventbrite.com/event/4563158530">Registration</a>
  <li><a href="program.html">Program</a>
  <li><a href="papers.php">Accepted Papers</a>
  <li>Accepted Posters
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

$data =file("posters.txt");
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
