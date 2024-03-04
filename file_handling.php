<?php 
    echo "File Handling in PHP";
    $file_path = "./fruits.txt";
    echo "<br>";
    if(file_exists($file_path)){
        echo readFile($file_path);
    }
?>