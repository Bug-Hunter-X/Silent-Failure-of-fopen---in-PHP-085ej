```php
$file = fopen("myfile.txt", "r");
if ($file === false) {
    //Proper error handling
    $error = error_get_last();
    $errorMessage = "Error opening file: " . (isset($error['message']) ? $error['message'] : 'Unknown error');
    error_log($errorMessage);
    die($errorMessage); //Or take appropriate action based on error
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
}
```