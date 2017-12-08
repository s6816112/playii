# 前言

- 接收输入和返回响应，只是web开发里最常规，最表面的部分
- 产品意识、设计思想、工程经验、实效更重要，请饥渴
- 积极参与、促进技术交流

# 依赖管理

要点：标识（包名）、版本约束、vendor目录（为什么不提交版本控制）、require、require-dev

所谓依赖：运行某代码需要引入的其他代码。

这个“其他代码”可以是第三方的公开分发的开源代码，也可以是我们自己的代码。

依赖的定义非常简单，标识、版本和依赖关系，以摄影为例：
- 摄影依赖相机
- 相机有介质、分辨率之分别（版本）
- 镜头依赖相机（和摄影是间接关系）

```
"require": {
    "php": ">=5.4.0",
    "ext-gd": "*",
    "yiisoft/yii2": "~2.0.6",
    "yiisoft/yii2-bootstrap": "~2.0.0",
    "yiisoft/yii2-swiftmailer": "~2.0.0 || ~2.1.0"
},
```

不仅代码包，PHP版本和扩展，也可以作为依赖来处理。

## Composer

可类比Java的Maven，Python的pip，Ruby的RubyGems……

Composer下载地址：https://getcomposer.org/download/

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

以上，下载一个验证了文件摘要的Composer。

练习：

1）理解Composer的指令

- install
- update（和install的区别？）
- remove
- dump
- show
- status
- global

2）自己定义一个Composer包，并在另一个项目里去引入这个包

不必发布到 https://packagist.org ，指定代码仓库源即可，参考文档：

- https://getcomposer.org/doc/05-repositories.md#loading-a-package-from-a-vcs-repository
- http://docs.phpcomposer.com/02-libraries.html#Publishing-to-a-VCS （中文）

## 前端资源包

比如jQuery，比如Bootstrap。

前端代码，一般以bower或者npm方式来打包，Composer不能直接安装，所以有了：

https://github.com/fxpio/composer-asset-plugin

vs

https://asset-packagist.org/ （保守推荐）

练习：

fxp/composer-asset-plugin和asset-packagist.org二者异同？

# 自动加载

要点：PSR1、PSR4

把类名和类所在文件对应起来的规则。

练习：

理解PSR4、PSR1定义，并总结其异同。

# 单元测试

## PHPUnit

可以下载安装：https://phpunit.de/getting-started.html

也可以通过Composer安装。

PHPUnit的运行配置，可以通过XML文件指定，默认读取phpunit.xml.dist，如果phpunit.xml存在，优先读phpunit.xml。

phpunit.xml.dist与phpunit.xml是默认配置与本地／自定义配置的一个例子。

# 关于练手的几个要求

- 必须做
- 按时做
- 可以讨论、寻求帮助，但要说明是谁给予了支持
- 会有抽查和复查（理解成切磋）
- 欢迎积极提意见
