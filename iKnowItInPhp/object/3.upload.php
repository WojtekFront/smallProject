<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "</pre>";

// comunicate errors type
    $uploadErrors = array(
        UPLOAD_ERR_OK => "1",
        UPLOAD_ERR_INI_SIZE => "2",
        UPLOAD_ERR_FORM_SIZE => "3",
        UPLOAD_ERR_PARTIAL => "4",
        UPLOAD_ERR_NO_FILE => "5",
        UPLOAD_ERR_NO_TMP_DIR => "6",
        UPLOAD_ERR_CANT_WRITE => "7",
        UPLOAD_ERR_EXTENSION => "8"
    );
    basement
// create file 
// !!! need create folder img !!!
    $tempName = $_FILES['file_upload']['tmp_name'];
    $tempFile = $_FILES['file_upload']['name'];
    $directory = "img";
//upload file or error
    if (move_uploaded_file($tempName, $directory . "/" . $tempFile)) {
        $errorMessage = "super, you upload";
    } else {
        $theError = $_FILES['file_upload']['error'];
        $errorMessage = $uploadErrors[$theError];
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
    <!-- open form which take picture -->
    <form action="3.upload.php" enctype="multipart/form-data" method="post">
        <?php
        if (!empty($uploadErrors)) {
            echo $errorMessage . "<br>";
        }
        ?>
        <input type="file" name="file_upload"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>