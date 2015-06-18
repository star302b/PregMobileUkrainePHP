<?php

$uploaddir = './SLabel/12/files/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Files is upload</h3>";
}
else { echo "<h3>No Upload</h3>"; exit; }
header("Location: index.php");
?>