<?php
//文件上传漏洞演示脚本之MIME验证
$uploaddir = 'uploads/';
if (isset($_POST['submit'])) {
    if (file_exists($uploaddir)) {
        if (($_FILES['upfile']['type'] == 'image/gif') || ($_FILES['upfile']['type'] == 'image/jpeg') ||
            ($_FILES['upfile']['type'] == 'image/png') || ($_FILES['upfile']['type'] == 'image/bmp')
        ) {
            if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
                echo '文件上传成功，保存于：' . $uploaddir . $_FILES['upfile']['name'] . "\n";
            }
        } else {
            echo '文件类型不正确，请重新上传！' . "\n";
        }
    } else {
        exit($uploaddir . '文件夹不存在,请手工创建！');
    }
    //print_r($_FILES);
}
?>