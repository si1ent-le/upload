<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="content-language" content="zh-CN"/>
    <title>服务端目录路径检测（利用00截断上传WebShell）</title>
<body>
<h3>绕过服务端目录路径检测上传Webshell</h3>

<form action="upload3.php" method="post" enctype="multipart/form-data" name="upload">
    <input type="hidden" name="path" value="images"/>
    请选择要上传的文件：<input type="file" name="upfile"/>
    <input type="submit" name="submit" value="上传"/>
</form>
</body>
</html>