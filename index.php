<?php
  require 'main().php' ;
   require 'main.php' ;
   $n="Aditya Raj";
?>

<html>
<div id="header">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href="styles.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body {
        background-image: url("zuck.jpg ");
}

</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<h1><a href="index.php">FACEMASH</a></h1>
</div>
 <style media="screen" type="text/css">
 body {
 	font-family: Tahoma;
 	margin: 0;
 	padding: 0;
 	text-align: center;
 }
 a {
 	text-decoration: none;
 	color: darkblue;
 }
 a:hover {
 	text-decoration: underline;
 }
 img {
 	width: 175px;
 	height: 250px;
 	border: 2px solid #aaa;
 }
 #header {
 	background-color: #8C1B08;
 	color: #fff;
 	padding: 5px;
 }
 #header a{
 	color: #fff;
 	text-decoration: none;
 }
 #main table {
 	margin: 0 auto;
 }
 #footer {
 	font: 12px Tahoma;
 	margin: 25px 0 50px 0;
 }
 #footer a {
 	margin-right: 10px;
 }
 </style>
 <body>
   <script src="jquery.js"></script>
 </body>
<div id="main">
	<h3>Were we let in for our looks? No. Will we be judged on them? Yes.</h3>
	<h2>Who's Hotter? Click to Choose.</h2>
	<table>
<a href="http://127.0.0.1/">
    <input type="image" src="<?php echo "$result"; ?>"  name="imageLeft" width="260" height="235">
<a href="http://127.0.0.1/">
		<input type="image" src="<?php echo "$results"; ?>" width="260" height="235">
	</table>
</div>
<div id="footer">
	<a href="/#">INDIA</a>
	<br />
	<a href="index.php">Home</a>
	<a href="/about">About</a>
	<a href="rankings.php">Rankings</a>
</div>
</html>
