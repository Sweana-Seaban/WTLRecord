<?php
    if(isset($_FILES['image']))
    {
        echo "File Name :",$_FILES['image']['name']."<br>";
        echo "File Size :",$_FILES['image']['size']."<br>";
        echo "File Type:",$_FILES['image']['type']."<br>";
        echo "<br>Success uploaded.....";
    }
?>