<?php
$pathdir = "/usr/home/Miechu/domains/teledoor.mmdsgn.ct8.pl/public_html";  
  
// Enter the name to creating zipped directory 
$zipcreated = "teledoor.zip"; 
  
// Create new zip class 
$zip = new ZipArchive; 
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) { 
      
    // Store the path into the variable 
    $dir = opendir($pathdir); 
       
    while($file = readdir($dir)) { 
        if(is_file($pathdir.$file)) { 
            $zip -> addFile($pathdir.$file, $file); 
        } 
    } 
    $zip ->close(); 
} 