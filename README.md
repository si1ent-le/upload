# upload
PHP文件上传漏洞测试平台集合(互联网大佬铺路,拿来主义,如有侵犯请及时反馈并修改来源).
```
测试平台源码具体来源位置不知道,有需要的可自行拉取到本地进行学习及研究.
```
## 前言：
文件上传属于常见的安全漏洞，基本用于webshell上传和测试使用
### 1、访问
测试环境包含7个本地测试.    
http://fileload.me:8888/  
![image](https://github.com/si1ent-le/upload/blob/master/images/index.png)
### 2、前台绕过
绕过前端的JS验证   
![](https://github.com/si1ent-le/upload/blob/master/images/js_.png)   
test.jpg命名,进行抓包测试.
![](https://github.com/si1ent-le/upload/blob/master/images/js2_.png)
截包过程中修改后缀名
![](https://github.com/si1ent-le/upload/blob/master/images/js_%20success.png)
OK，上传成功。测试访问获取phpinfo信息
![](https://github.com/si1ent-le/upload/blob/master/images/js_phpinfo.png)
### 3、请求头内Content-Type验证绕过
![](https://github.com/si1ent-le/upload/blob/master/images/content_type.png)
这里我们修改Content-type为jpeg上传成功，（文件名无所谓的，我是为了区分第一个）
![](https://github.com/si1ent-le/upload/blob/master/images/content_%20success.png)
测试访问
![](https://github.com/si1ent-le/upload/blob/master/images/content_%20phpinfo.png)
### 4、路径检测(这里测试可直接上传)
不同之处在于目录修改啦，其实测试images应该无法访问，需要修改路径到uplaod才行。
![](https://github.com/si1ent-le/upload/blob/master/images/dir_upload.png)
![](https://github.com/si1ent-le/upload/blob/master/images/dir_upload_success.png)
修改后再传
![](https://github.com/si1ent-le/upload/blob/master/images/dir_upload_success1.png)
### 5、扩展名检测绕过
PHP能够解析的后缀名有：php3、php4、php5、phtml等
测试，提示无法上传
![](https://github.com/si1ent-le/upload/blob/master/images/filename.png)
修改后缀为phtml传入成功。
![](https://github.com/si1ent-le/upload/blob/master/images/filename_phtml.png)
访问测试.
![](https://github.com/si1ent-le/upload/blob/master/images/filename_phtml_success.png)
### 6、文件头绕过
修改图片头信息为GIF98a，还有其他方式可以修改并进行测试。
![](https://github.com/si1ent-le/upload/blob/master/images/gif98a.png)
测试访问
![](https://github.com/si1ent-le/upload/blob/master/images/GIF98a_success.png)



