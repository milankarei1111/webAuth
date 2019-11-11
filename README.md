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

## 建置平台

#### 引入後台模板 admin資料夾
>* [取得博客後台模板,參考github基于laravel5.2的博客view/admin資料夾]
(https://github.com/yanqiangmiffy/laravel-blog)

#### 修改模板內容
>* 更改 login.blade.php 相關link 使用asset()對應至style路徑

#### 控制器
>* 建立Admin資料夾

>* 建立公用控制器 CommonController

>* 建立登入控制器 loginController 繼承 CommonController,回傳login畫面

#### 路由
>* 配置登入路由

#### 驗證碼

>* [取得驗證碼,參考github基于laravel5.2的博客org資料夾]
(https://github.com/yanqiangmiffy/laravel-blog/resources)

>* 複製org\code資料夾至app\Lib下 改名為

>* 配置驗證路由

>* loginController的code方法並引入驗證碼類

>* 在public\index.php加入 session_start() : 才能打開$_SESSION的變數啟用

>* 模板使用驗證碼: login.blade.php加入img寫法
