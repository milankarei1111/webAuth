# blog.com 網站開發流程

## 建置環境

#### 域名
>* [配置laravel 域名影片教學]
(https://www.youtube.com/watch?v=a2Z_wGRCx3w&list=PLAYoruToK_vNbGXmCTPW8zGVuAz0jeBTY&index=4)

#### 配置DB  config.database.php
> 修改'prefix' => env('DB_PREFIX','')

#### 修改.env檔案
> 修改資料庫連線名稱 DB_DATABASE=blog

> 增加表格前綴詞 DB_PREFIX=blog_
