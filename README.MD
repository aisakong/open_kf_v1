编程浪子开源云客服
=========
## 环境准备
* nginx + mysql + php
* [nginx的配置](./docs/nginx/kefu.conf)
* [数据库文件：saas_stkf_v1](./docs/saas_stkf_v1.sql)
* YII2 配置
    * 数据库配置：common/config/main-local.php
    * 访问系统域名配置：common/config/params-local.php
* [课程使用vendor，切记文件夹名称是 vendor ](https://pan.baidu.com/s/1riMKPdSHLPdZK1-pMfFWvw)

## 启动websocket
* php console/server_jobs/start.php start

## 账号说明
* 管理员测试账户 用户名：54php.cn 密码：123456
* 客服测试账户 用户名：54php.cn 密码：123456

## 客服系统如何使用
* 在websocket 服务启动之后，登录客服系统，点击 开始上班。 就可以进行沟通了

## 展示图
* ![统计首页](./docs/images/stat.jpg)
* ![客服登录地址](./docs/images/help.jpg)
* ![首页](./docs/images/home.png)
* ![客服系统](./docs/images/kf.jpg)

## 参考文档
* [Workerman](https://www.workerman.net/)
* [GatewayWorker](http://workerman.net/gatewaydoc/)