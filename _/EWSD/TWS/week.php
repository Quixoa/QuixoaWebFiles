<html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47116001-1', 'quixoa.com');
  ga('send', 'pageview');

</script>
<?php

$timeZone = 'America/New_York';  // +2 hours 
date_default_timezone_set($timeZone); 
$dateSrc =  date_default_timezone_get(); 
$dateTime = new DateTime($dateSrc); 
$pre = date('m-d-Y', strtotime($dateSrc)); 
$final = ('http://ewsdonline.org/District/Events:Week/' . $pre);
echo '<META HTTP-EQUIV="Refresh" Content="0;' .$final.'">'; 
?>
</html>