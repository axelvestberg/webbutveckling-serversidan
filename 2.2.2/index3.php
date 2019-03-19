<?php

$target_dir = '../../uploads';//varibeln target_dir tilldelas med mappen uploads där den valda filen sparas för att laddas upp

//sätter bildens maxstorlek till 60000
$maxFileSize = 60000;
//ifsatsen utförs om submitknappen är aktiverad.
if(isset($_POST["submit"])) {
    move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"], "$target_dir/{$_FILES["fileToUpload"]["name"]}");//lagrar den uppladdadee filen på servern
    $postedFile = "$target_dir/{$_FILES["fileToUpload"]["name"]}";//tilldela den uppladdade filen i en variabel
    $fileName   = basename($_FILES["fileToUpload"]["name"]);//hämtar filens namn
    $mimeType   = $_FILES["fileToUpload"]["type"];// hämtar filens mimestorlek
    $fileSize   = $_FILES["fileToUpload"]["size"];//hämtar filens storlek

    //om filensstorlek är större än max tillåtet skrivs felmeddelandet ut
   if ($fileSize > $maxFileSize) {
       echo "Fil $fileName storlek $fileSize är större än vad som är tillåtet: $maxFileSize bytes";
    } elseif ($mimeType == "text/plain") {
       header("Content-type: text/plain");
       readfile($postedFile);//om mimetypen är text/plain läses den valda filen
    } elseif ($mimeType == "image/jpeg") {
       header("Content-type: image/jpg");
       readfile($postedFile);//om mimetypen är image/jpg läses den valda filen
    } elseif ($mimeType == "image/png") {
       header("Content-type: image/png");
        readfile($postedFile);//om mimetypen är image/png läses den valda filen
    } else {
      echo "file name = " . $fileName . "\nmime type= ." . $mimeType . "\nfile size= " . $fileSize;//om mimetypen inte är någon av ovanstående skrivs endast filnamnet, mimetypen och filens storlek ut. Själva filen visas inte
    }
}

?>