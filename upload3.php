<?php
//文件上传漏洞演示脚本之目录验证
$uploaddir = $_POST['path'];
if (isset($_POST['submit']) && isset($uploaddir)) {
    if (!file_exists($uploaddir)) {
        mkdir($uploaddir);
    }
//var_dump($_FILES['upfile']);
    if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
        echo '文件上传成功，保存于：' . $uploaddir . '/' . $_FILES['upfile']['name'] . "\n";
    }
    else {
        echo '文件类型不正确，请重新上传！' . "\n";
    }
    //print_r($_FILES);
}
?>