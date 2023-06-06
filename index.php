<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>php Study Advance</title>
</head>
<body>
    <div class="container">
        <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
            <p>Select image to upload</p>
            <input type="file" name="fileToUpload">
            <br>
            <input type="submit" value="Upload Image" name="submit">            
        </form>
    </div>
    

</body>
</html>