<html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47116001-1', 'quixoa.com');
  ga('send', 'pageview');

</script>
<body bgcolor="#8A0807"> 
<style>
body {color:fff;}
a {font-size:500%}
p {color:000}
a {color:000}
u {color:000}

</style>
<h1>
<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["sub"] . "	From: ". $fname . " " . $lname;
$msg = $_POST["msg"];
$from = $email;
$to = "shenc@ewsdmail.org";
$to1 = "jaina@ewsdmail.org";

$to2 = "jina@ewsdmail.org";

$to3 = "aldadr@ewsdmail.org";

$to4 = "dattc@ewsdmail.org";

$headers = "From:" . $from;
mail($to,$subject,$msg,$headers);
mail($to1,$subject,$msg,$headers);
mail($to2,$subject,$msg,$headers);
mail($to3,$subject,$msg,$headers);
mail($to4,$subject,$msg,$headers);






 
 
 ?>
 </h1>
<a href="http://10Pstudyhub.weebly.com">Return</a>

</html>