<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $tmpFilePath = $file['tmp_name'];

    // Generate a unique filename based on the current timestamp
    $newFilename = 'factura.png'. $filename;
    $newFilePath = 'uploads/' . $newFilename;

    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo "File uploaded successfully as $newFilename!";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "Invalid request.";
}

?>
