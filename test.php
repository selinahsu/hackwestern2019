<?php
   $content = $_POST['file'];
   $sfile   = fopen("test.jpg", 'wb');   // 'wb' parameter means "write binary"
   fwrite($sfile, $content);
   fclose($sfile);
?>