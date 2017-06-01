<?php
namespace Cart\Upload;

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';

function upload_file(){
    
    $tmpFile = $_FILES[InputKey]['tmp_name'];
    $dstFile = 'uploads/' . $_FILES[InputKey]['name'];
    
    if  (empty ($_FILES[InputKey])){
            die("file missing");
    }
    
    if  ($_FILES[InputKey]['error'] > 0 ){
            die("handle the error");
    }
    
    if  (!in_array($_FILES[InputKey] ['type'] , AllowedTypes)){
            die("handle file type not allowed");
    }

    if (!move_uploaded_file($tmpFile, $dstFile)){
            die("handle error");
    }
		
    if (file_exists($tmpFile)) {
        unlink($tmp); 
    }
}

