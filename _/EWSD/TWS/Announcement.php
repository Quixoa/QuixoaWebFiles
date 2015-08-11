<html>
<body bgcolor="#8A0807"> 

<style>
body {color:fff;}
body {position:relative; top:50%; height:270px; margin-top:-75px;}
body{
 border:0px none;
 text-align: center;
}
h1 {font-size:200%}
p {color:fff}
a {color:fff}
h1 {color:fff}
body {font-size:200%;}


</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47116001-1', 'quixoa.com');
  ga('send', 'pageview');

</script>

<?php
$file = 'mes.html';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file

$current = nl2br($_POST['MSG']);


// Write the contents back to the file
file_put_contents($file, $current);

$file_contents = file_get_contents($file);
$file_contents = str_replace("<br />","",$file_contents);
file_put_contents($file,$file_contents);
echo '<center>Thank You!<br>';
echo 'Your Announcement Has Been Posted</center>';

?>

</html>