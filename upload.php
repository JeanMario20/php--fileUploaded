<?php 
$target_dir = "uploads/."; //specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // specifies the path of the file to be uploaded
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file (lowe case).
//CHECK IF IMAGE IS A ACTUAL IMAGE OR FAKE IMAGE.
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !==false) {
        echo "file is a image - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else {
        echo "File is not an image.";
        $uploadOK = 0;
    }
}

//check if file already exists
if(file_exists($target_file)){
    echo 'Sorry file already exists.';
    $uploadOK = 0;
}

//check file size
if($_FILES["fileToUpload"]["size"] > 500000) {
    echo 'sorry, your file is too large';
    $uploadOK = 0;
}

//Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK =0;
}

if($uploadOK == 0){
    echo "sorry, your file was not uploaded";
    // if everythong is ok, try to upload file.
} else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "the file " . htmlspecialchars( basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
    } else {
        echo "sorry, there was an error uploading your file.";
    }
}
?>