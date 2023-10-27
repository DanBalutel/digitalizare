<?php
if (isset($_POST['cui'])) {
    $cui = $_POST['cui']; // Make sure to sanitize this value

    $directoryPath = "uploads/$cui/";
    $files = [];

    if (is_dir($directoryPath)) {
        $files = scandir($directoryPath);
        
        // Remove the '.' and '..' entries
        $files = array_diff($files, ['.', '..']);
    }

    if (count($files) > 0) {
        echo "<ul>";
        foreach ($files as $file) {
            echo "<li><a href='" . $directoryPath . $file . "' target='_blank'>" . $file . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No files found.</p>";
    }
}
?>
