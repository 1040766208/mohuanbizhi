
<?php
    include "Pic.php";
    $t = new ThumbHandler();
    $photo_server_folder = "./test.jpg";
    $photo_server_folder1 = "./test1.jpg";
    $t->setSrcImg($photo_server_folder);               //图片路径
    $t->setCutType(1);//这一句就OK了
    $t->setDstImg($photo_server_folder1);              //压缩后的图片路径
    $t->createImg(300,300);
    if(file_exists($photo_server_folder1)){
        echo "Success!";
    }else{
        echo "not success!";
    }
?>