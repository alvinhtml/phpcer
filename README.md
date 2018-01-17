# 使用 Composer 搭建自己的PHP框架
首先建一个文件夹做为项目目录

> sudo mkdir phpcer && cd phpcer

## 下载安装 Composer


局部安装：

> curl -sS https://getcomposer.org/installer | php

全局安装：

> sudo mv composer.phar /usr/local/bin/composer

## 初始化 Composer

> composer init

执行后根据提示, 依次填写项目名称, 作者等信息, 如果没有全局安装, 执行的时候需要 php composer.phar

> php composer.phar init

如果初始化成功, 会在 phpcer 下看到 composer.json, 然后执行 :

> composer update

## 创建 .gitignore 文件

> sudo vim .gitignore

加入如下内容, 目的是告诉 git 哪些文件不用提交到版本库

    /node_modules
    /public/storage
    /public/hot
    /storage/*.key
    /vendor
    /.idea
    Homestead.json
    Homestead.yaml
    .env
