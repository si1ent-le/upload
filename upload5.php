<?php
//文件上传漏洞演示脚本之内容验证
$uploaddir = 'uploads/';
if (isset($_POST['submit'])) {
    if (file_exists($uploaddir)) {
        //print_r($_FILES);
        $file_name = $_FILES['upfile']['tmp_name'];
        //print_r(getimagesize($file_name));
        $allow_ext = array('image/png', 'image/gif', 'image/jpeg', 'image/bmp');
        $img_arr = getimagesize($file_name);
        //print_r($img_arr);
        $file_ext = $img_arr['mime'];
        if (in_array($file_ext, $allow_ext)) {
            if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
                echo '文件上传成功，保存于：' . $uploaddir . $_FILES['upfile']['name'] . "\n";
            }
        } else {
            echo '此文件不允许上传' . "\n";
        }
    } else {
        exit($uploaddir . '文件夹不存在,请手工创建！');
    }
    //print_r($_FILES);
}
?>