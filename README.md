管理系统
===============
1.cd 进入server目录
## 后台安装和搭建
~~~
cd server
~~~
~~~
composer install
~~~
2.cd  进入server/public目录下,把server.sql数据文件导入到数据库中
3.修改server/.env的相关配置
# 测试运行
~~~
php think run
~~~

## 后台PHP文档
[完全开发手册](https://www.workerman.net/doc/webman/install.html)
#注：后台配置详情可以看server/README.md文件

## 后台前端安装
~~~
cd web
~~~
# 安装依赖
~~~
npm install
~~~
建议不要直接使用 cnpm 安装依赖，会有各种诡异的 bug。可以通过如下操作解决 npm 下载速度慢的问题
# 可以使用淘宝镜像
~~~
npm install --registry=https://registry.npm.taobao.org
~~~
# 启动服务
测试服务器管理后台请求地址在vue.config.js中修改target: `https://zntapi.lvrichina.com/`,
~~~
npm run dev
~~~
## 后台前端打包
在.env.production中修改VUE_APP_BASE_API(打包后，管理后台请求地址)
如：VUE_APP_BASE_API = 'https://zntapi.lvrichina.com/'
打包后文件会保存到web/dist目录中
~~~
npm run build
~~~
注：前端配置详情可以看web/README.zh-CN.md文件

