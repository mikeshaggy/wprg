<?php
function handle_directory($path, $directory_name, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    if (!is_dir($path)) {
        return "Error: The specified path does not exist!";
    }

    switch ($operation) {
        case 'read':
            if (!is_dir($path . $directory_name)) {
                return "Error: The specified directory does not exist!";
            }
            $contents = scandir($path . $directory_name);
            $contents = array_diff($contents, array('.', '..'));
            return "Elements in the directory '$directory_name': " . implode(', ', $contents);
        case 'delete':
            if (!is_dir($path . $directory_name)) {
                return "Error: The specified directory does not exist!";
            }
            if (count(glob($path . $directory_name . '/*')) === 0) {
                if (rmdir($path . $directory_name)) {
                    return "Success: The directory '$directory_name' has been removed!";
                } else {
                    return "Error: Failed to delete the directory '$directory_name'!";
                }
            } else {
                return "Error: The directory '$directory_name' is not empty!";
            }
        case 'create':
            if (mkdir($path . $directory_name)) {
                return "Success: The directory '$directory_name' has been created!";
            } else {
                return "Error: Failed to create the directory '$directory_name'!";
            }
        default:
            return "Error: Unknown operation!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST["path"];
    $directory_name = $_POST["directory_name"];
    $operation = isset($_POST["operation"]) ? $_POST["operation"] : 'read';

    $result = handle_directory($path, $directory_name, $operation);
    echo "<p>$result</p>";
}
?>
