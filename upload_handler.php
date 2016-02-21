<?php

$name = $_FILES["pic"]["name"];
$tmp_name = $_FILES["pic"]["tmp_name"];

move_uploaded_file ($tmp_name, "./art/" . $name);

$fileHandle = fopen("./art/" . strtok($name, ".") . ".txt", "w");
fwrite($fileHandle, "By: " . $_POST["by"] . "\n");
fwrite($fileHandle, "Tags: " . $_POST["tags"] . "\n");
fclose($fileHandle);

header('Location: index.php');
?>