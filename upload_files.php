<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $cui = isset($_POST['cui_file']) ? $_POST['cui_file'] : '';
    $tmpFilePath = $file['tmp_name'];

    $newFilePath = 'uploads/'.$cui.'/' . $tmpFilePath;

    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo "File uploaded successfully as $newFilename!";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "Invalid request.";
}

?>
