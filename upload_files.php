<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = basename($file['name']); // Using basename() for security reasons
    $cui = isset($_POST['cui_file']) ? $_POST['cui_file'] : '';
    
    // Sanitize the cui value
    $cui = preg_replace("/[^a-zA-Z0-9]/", "", $cui); 

    $tmpFilePath = $file['tmp_name'];

    // Create the directory if it doesn't exist
    $directoryPath = 'uploads/' . $cui;
    if (!is_dir($directoryPath)) {
        mkdir($directoryPath, 0755, true);
    }

    $newFilePath = $directoryPath . '/' . $filename;

    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo "File uploaded successfully as $newFilePath!";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "Invalid request.";
}

?>
