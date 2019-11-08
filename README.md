# blog.com 網站開發流程

## 建置環境

#### 域名
>* [配置laravel 域名影片教學]
(https://www.youtube.com/watch?v=a2Z_wGRCx3w&list=PLAYoruToK_vNbGXmCTPW8zGVuAz0jeBTY&index=4)

#### 配置DB  config.database.php
>* 修改'prefix' => env('DB_PREFIX','')

#### 修改.env檔案
>* 修改資料庫連線名稱 DB_DATABASE=blog

>* 增加表格前綴詞 DB_PREFIX=blog_

>* 在phpMyAdmin新增連線blog,並新增CommonController測試連線是否正常

    $pdo = DB::connection()->getPdo();
    dd($pdo);

## 引入後台模板 admin資料夾
>* [取得博客後台模板,參考github基于laravel5.2的博客view/admin資料夾]
(https://github.com/yanqiangmiffy/laravel-blog)

#### 修改模板內容
>* 將views/admin/style資料夾複製至public資料夾 

>* 更改 login.blade.php 相關link 使用asset()對應至puble/style路徑
