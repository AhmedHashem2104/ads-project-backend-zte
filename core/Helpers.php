<?php

use Response\Response;
// Compress image
function compress($source, $destination, $quality)
{
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

function compressImage($file, $filename, $path)
{
  if (!is_dir(dirname(dirname(__FILE__)) . '/public/' . $path)) {
    mkdir(dirname(dirname(__FILE__)) . '/public/' . $path);
  }
  $error = $file->error;
  $targetPath = dirname(dirname(__FILE__)) . '/public/' . $path . '/' . $filename;
  $tempPath = $file->tmp_name;
  if ($error > 0) {
    http_response_code(400);
    die(Response::json(array('message' => 'There is an error has been happened')));
  } else {
    $valid_ext = array('png', 'jpeg', 'jpg');
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    if (in_array($file_extension, $valid_ext)) {
      // Compress Image
      compress($tempPath, $targetPath, 60);
      return true;
    } else {
      http_response_code(400);
      die(Response::json(array('message' => 'Please enter valid extensions ( JPEG , JPG , PNG)')));
    }
  }
}

function movePublicPath($file, $filename, $path)
{

  if (!is_dir(dirname(dirname(__FILE__)) . '/public/' . $path)) {
    mkdir(dirname(dirname(__FILE__)) . '/public/' . $path);
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST" or $_SERVER['REQUEST_METHOD'] == "GET")
    move_uploaded_file($file->tmp_name, dirname(dirname(__FILE__)) . '/public/' . $path . '/' . $filename);
  else
    copy($file->tmp_name, dirname(dirname(__FILE__)) . '/public/' . $path . '/' . $filename);


  return false;
}
