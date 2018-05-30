<?php
$file = fopen("entries.docs","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>
