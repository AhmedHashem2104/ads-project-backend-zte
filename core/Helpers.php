<?php  

// Compress image
function compressImage($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);
  
    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);
  
    elseif ($info['mime'] == 'image/png') {
      $image = imagecreatefrompng($source);
    }
  
    imagejpeg($image, $destination, $quality);
  
  }

function movePublicPath($file , $filename , $path){
    if (!is_dir(dirname(dirname(__FILE__)).'/public/'.$path)) {
        mkdir(dirname(dirname(__FILE__)).'/public/'.$path);
    }
    $error = $file->error;
    $targetPath = dirname(dirname(__FILE__)).'/public/'.$path.'/'.$filename;
    $tempPath = $file->tmp_name;
    if ($error > 0) {
        http_response_code(400);
        die(Response::json(array('message' => 'There is an error has been happened')));
    }
    else {
        $valid_ext = array('png','jpeg','jpg');
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        if(in_array($file_extension,$valid_ext)){
        // Compress Image
        compressImage($tempPath,$targetPath,60);
        return true;
        }
        else{
            http_response_code(400);
        die(Response::json(array('message' => 'Please enter valid extensions ( JPEG , JPG , PNG)')));
        }
    }
    }

function moveTmpPath($file , $filename , $path){

    if (is_dir(dirname(dirname(__FILE__)).'/tmp/'.$path)){

    move_uploaded_file($file->tmp_name, dirname(dirname(__FILE__)).'/tmp/'.$path.'/'.$filename);

    return true;

    }

    else{

    mkdir(dirname(dirname(__FILE__)).'/tmp/'.$path);

    move_uploaded_file($file->tmp_name, dirname(dirname(__FILE__)).'/tmp/'.$path.'/'.$filename);

    return true;

    }

    return false;

    }

?>