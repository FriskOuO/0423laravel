## 2026-04-23 作業紀錄（Dependency Injection + Service + Route + Blade）

本日完成兩組練習：

1. Apple Music 注入範例（Podcast 顯示）
2. 雙 Service 按鈕切換範例（第一個按鈕與第二個按鈕分別呼叫不同 music service）

### 老師快速查核路徑

#### A. Apple Music 注入範例

- Service: `app/Services/AppleMusic.php`
- Controller: `app/Http/Controllers/PodcastController.php`
- Route: `routes/web.php`（`/podcasts/{id}`，名稱 `podcasts.show`）
- Blade: `resources/views/podcasts/show.blade.php`

測試網址：

- `http://127.0.0.1:8000/podcasts/456`

#### B. 雙按鈕 Service 注入範例

- 第一個 Service: `app/Services/SpotifyMusic.php`
- 第二個 Service: `app/Services/AppleMusic.php`
- Controller: `app/Http/Controllers/ServiceDemoController.php`
- Route: `routes/web.php`
	- `GET /services`（`services.index`）
	- `GET /services/first`（`services.first`）
	- `GET /services/second`（`services.second`）
- Blade: `resources/views/services/index.blade.php`

測試網址：

- `http://127.0.0.1:8000/services`

### 功能說明

1. 在 Blade 頁面按「呼叫第一個服務」會注入 `SpotifyMusic` 並顯示 podcast 資料。
2. 在 Blade 頁面按「呼叫第二個服務」會注入 `AppleMusic` 並顯示 podcast 資料。
3. 以上流程會用到 View、Route、Service 的依賴注入。