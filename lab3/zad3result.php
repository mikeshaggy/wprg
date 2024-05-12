<?php
function handleDirectory($path, $directoryName, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    if (!is_dir($path)) {
        return "Error: The specified path does not exist!";
    }

    switch ($operation) {
        case 'read':
            if (!is_dir($path . $directoryName)) {
                return "Error: The specified directory does not exist!";
            }
            $contents = scandir($path . $directoryName);
            $contents = array_diff($contents, array('.', '..'));
            return "Elements in the directory '$directoryName': " . implode(', ', $contents);
        case 'delete':
            if (!is_dir($path . $directoryName)) {
                return "Error: The specified directory does not exist!";
            }
            if (count(glob($path . $directoryName . '/*')) === 0) {
                if (rmdir($path . $directoryName)) {
                    return "Success: The directory '$directoryName' has been removed!";
                } else {
                    return "Error: Failed to delete the directory '$directoryName'!";
                }
            } else {
                return "Error: The directory '$directoryName' is not empty!";
            }
        case 'create':
            if (mkdir($path . $directoryName)) {
                return "Success: The directory '$directoryName' has been created!";
            } else {
                return "Error: Failed to create the directory '$directoryName'!";
            }
        default:
            return "Error: Unknown operation!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST["path"];
    $directoryName = $_POST["directoryName"];
    $operation = isset($_POST["operation"]) ? $_POST["operation"] : 'read';

    $result = handleDirectory($path, $directoryName, $operation);
    echo "<p>$result</p>";
}
?>
