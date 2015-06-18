<?php var_dump($_FILES); ?>
<form action=load.php method=post enctype=multipart/form-data>
<input type=file name=uploadfile>
<input type=submit value=Upload></form>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . './files/';
    $images = scandir($path);
    if (false !== $images) {
        $images = preg_grep('/\\.(?:png|gif|jpg|jpe?g)$/', $images);
        foreach ($images as $image){
            echo "<center>";
           echo "Name image = {$image} <br>";
           echo '<img height=300px src="/FileLoad/files/', htmlspecialchars(urlencode($image)),'" />';
           echo "<br></center>";
        }          
    }
?>