<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $tmpFilePath = $file['tmp_name'];
    $newFilePath = 'uploads/' . $filename;

    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo "File uploaded successfully!";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "Invalid request.";
}

?>
