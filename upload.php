<?php

$uploaded = 0;
if(isset($_POST['submit'])){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
        echo "File was uploaded";
        $uploaded =1;
    }
    else{
        echo "File was not uploaded";
    }

    if($uploaded == 1){
        $file = $_FILES["fileToUpload"]["name"];
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>File Upload!!</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id=""><br>
        <button name="submit">Upload</button>
    </form>

    </center>
    <center>
        <img src="<?php echo 'upload/'.$file; ?>" alt="">
    </center>
</body>
</html>