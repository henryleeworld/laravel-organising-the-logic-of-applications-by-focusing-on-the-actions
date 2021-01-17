# Laravel 8 通過專注於動作來組織應用程式邏輯

引入 lorisleiva 的 laravel-actions 套件來擴增通過專注於動作來組織應用程式邏輯，無需新增控制器、任務、監聽器等，它使您可以新增一個處理特定任務的 PHP 類別，並根據需要運行該類別。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/users/password` 來進行密碼更新。

----

## 畫面截圖
![](https://i.imgur.com/51zFned.png)
> 可以專注於我的應用程式實際上是做什麼的開發思維