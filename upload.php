<?php

$uploaddir = 'uploads/';
if (isset($_POST['submit'])) {
    if (file_exists($uploaddir)) {
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
            echo '文件上传成功，保存于：' . $uploaddir . $_FILES['upfile']['name'] . "\n";
        }
    } else {
        exit($uploaddir . '文件夹不存在,请手工创建！');
    }
    //print_r($_FILES);
}
?>