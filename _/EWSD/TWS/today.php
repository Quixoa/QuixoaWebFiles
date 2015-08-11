<html>
<?php

$timeZone = 'America/New_York';  // +2 hours 
date_default_timezone_set($timeZone); 
$dateSrc =  date_default_timezone_get(); 
$dateTime = new DateTime($dateSrc); 
$pre = date('m-d-Y', strtotime($dateSrc)); 
$final = ('http://ewsdonline.org/District/Events:Day/' . $pre);
echo '<META HTTP-EQUIV="Refresh" Content="0;' .$final.'">'; 
?>
</html>
