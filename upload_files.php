<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $cui = isset($_POST['cui_file']) ? $_POST['cui_file'] : '';
    
    // Sanitize the cui value
    $cui = preg_replace("/[^a-zA-Z0-9]/", "", $cui); 

    // Create the directory if it doesn't exist
    $directoryPath = 'uploads/' . $cui;
    if (!is_dir($directoryPath)) {
        mkdir($directoryPath, 0755, true);
    }

    // Loop through each file and handle them
    foreach ($_FILES['file']['name'] as $index => $filename) {
        $filename = basename($filename); // Using basename() for security reasons
        $tmpFilePath = $_FILES['file']['tmp_name'][$index];
        $newFilePath = $directoryPath . '/' . $filename;

        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "File uploaded successfully as $newFilePath!<br>";
        } else {
            echo "Failed to upload file: $filename.<br>";
        }
    }
} else {
    echo "Invalid request.";
}

?>
