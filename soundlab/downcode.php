<?php
if(isset($_POST['download'])){
 
 $filename = "DNNtoCPPclass (1).zip";

 if (file_exists($filename)) {
  header('Content-Type: application/zip');
  header('Content-Disposition: attachment; filename="'.basename($filename).'"');
  header('Content-Length: ' . filesize($filename));

  flush();
  readfile($filename);
 }
 else{
 echo " Dosya Bulunamadi !"; 
}
}

if(isset($_POST['download1'])){
 
 $filename = "DNNtoCPPclass.zip";

 if (file_exists($filename)) {
  header('Content-Type: application/zip');
  header('Content-Disposition: attachment; filename="'.basename($filename).'"');
  header('Content-Length: ' . filesize($filename));

  flush();
  readfile($filename);
 }
 else{
 echo "File not found!"; 
}
}
?>
