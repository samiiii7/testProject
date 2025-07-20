<?php
//var_dump($_FILES);

$path = 'uploads/';
$path .= $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $path);

echo $path;
