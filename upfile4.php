<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="content-language" content="zh-CN"/>
    <title>文件上传漏洞演示脚本--服务端扩展名验证实例</title>
<body>
<h3>绕过服务器端扩展名检测上传</h3>

<form action="upload4.php" method="post" enctype="multipart/form-data" name="upload">
    请选择要上传的文件：<input type="file" name="upfile"/>
    <input type="submit" name="submit" value="上传"/>
</form>
</body>
</html>