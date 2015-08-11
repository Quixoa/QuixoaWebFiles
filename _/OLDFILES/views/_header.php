<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quxioa</title>





<style type="text/css">
 #navbar{
 
 
 	background-color: #fff; 
}
 #navbar ul { 
	

	padding: 10px; 
	list-style-type: none; 
    width:100.2%;
    margin-left: -1%;
    margin-right: -15px;
    margin-top: -10px;
 	text-align: center; 
	} 
 
#navbar ul li {  
	display:inline;
	} 
 
#navbar ul li a { 
	text-decoration: none; 
	padding: .5em 3em; 
	color: #460078; 
	background-color: #fff; 
		font-size:18px;

	} 
 
#navbar ul li a:hover { 
	color: #fff; 
	background-color: #460078; 
	font-size:18px;
	} 
 
        /* just for the demo */
        a {
        color:#fff;
        
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color:#fff;
        }
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
        }
    </style>
<link rel="shortcut icon" href="http://quixoa.com/images/favicon.ico">
<body bgcolor = "#460078">
<body>
<div id="navbar">
<b>
  <ul> 
 	<li><a href="#">Home</a></li> 
	<li><a href="#">Math</a></li> 
	<li><a href="#">Science</a></li> 
	<li><a href="">English</a></li> 
	<li><a href="#">Social Studies</a></li> 
	<li><a href="#">Foreign Language</a></li> 
	
	</b>
  </ul> 
</div> 
</head>




<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
