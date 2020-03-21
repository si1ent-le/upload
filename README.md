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
### 前台绕过
绕过前端的JS验证   
![](https://github.com/si1ent-le/upload/blob/master/images/js_.png)   
test.jpg命名,进行抓包测试.
![](https://github.com/si1ent-le/upload/blob/master/images/js2_.png)
截包过程中修改后缀名
![](https://github.com/si1ent-le/upload/blob/master/images/js_%20success.png)
OK，上传成功。测试访问获取phpinfo信息
![](https://github.com/si1ent-le/upload/blob/master/images/js_phpinfo.png)
### 请求头内Content-Type验证绕过


