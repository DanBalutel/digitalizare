<?php
if (isset($_POST['cui'])) {
    $cui = $_POST['cui']; 

    $directoryPath = "uploads/$cui/";
    $files = [];

    if (is_dir($directoryPath)) {
        $files = scandir($directoryPath);
        
        $files = array_diff($files, ['.', '..']);
    }

    if (count($files) > 0) {
        echo "<div class='row'>";
        foreach ($files as $file) {
            echo "<div class='col-md-3'><a href='" . $directoryPath . $file . "' target='_blank'>" . $file . "</a></div>";
        }
        echo "</div>";
    } else {
        echo "<p>Nu sunt fisiere.</p>";
    }
}
?>
