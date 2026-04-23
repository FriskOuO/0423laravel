<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人簡歷 - 黃健程</title>
    <style>
        body { 
            font-family: 'Helvetica Neue', Arial, '微軟正黑體', sans-serif; 
            background-color: #e9ecef; 
            margin: 0; 
            padding: 40px 20px; 
            color: #333; 
        }
        .resume-container { 
            max-width: 800px; 
            margin: 0 auto; 
            background: #fff; 
            border-radius: 12px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.08); 
            overflow: hidden; 
        }
        .profile-header {
            background-color: #1a73e8; /* 搭配圖片的藍色背景 */
            color: white;
            text-align: center;
            padding: 40px 20px;
        }
        .avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid #fff;
            object-fit: cover;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .profile-header h1 {
            margin: 0;
            font-size: 2.2em;
            letter-spacing: 2px;
        }
        .subtitle {
            margin-top: 10px;
            font-size: 1.1em;
            opacity: 0.9;
        }
        .content {
            padding: 40px 50px;
        }
        .section-title {
            color: #1a73e8;
            font-size: 1.5em;
            margin-bottom: 20px;
            border-left: 6px solid #1a73e8;
            padding-left: 15px;
            font-weight: bold;
        }
        .intro-text {
            color: #555;
            line-height: 1.8;
            font-size: 1.1em;
            margin-bottom: 50px;
            text-align: justify;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
            font-size: 1.1em;
        }
        .info-table td:first-child {
            font-weight: bold;
            color: #333;
            width: 120px;
        }
    </style>
</head>
<body>

    <div class="resume-container">
        <!-- 上方藍色橫幅區塊 -->
        <div class="profile-header">
            <!-- 你的大頭照 -->
            <img src="{{ asset('images/TEST.png') }}" alt="個人照片" class="avatar">
            <h1>黃健程</h1>
            <div class="subtitle">學號 C112156226</div>
        </div>

        <!-- 下方白色內容區塊 -->
        <div class="content">
            <!-- 個人簡介 -->
            <div>
                <div class="section-title">個人簡介</div>
                <p class="intro-text">
                    大家好，我是黃健程，學號 C112156226。目前正在學習 Laravel MVC、資料庫操作與 Blade 樣板整合，並透過實作練習 routes、controller、view 與 seeder 的完整流程。希望持續精進後端與網頁整合能力，打造更完整、易維護的系統。
                </p>
            </div>

            <!-- 基本資料 -->
            <div>
                <div class="section-title">基本資料</div>
                <table class="info-table">
                    <tr>
                        <td>姓名</td>
                        <td>黃健程</td>
                    </tr>
                    <tr>
                        <td>學號</td>
                        <td>C112156226</td>
                    </tr>
                    <tr>
                        <td>學校</td>
                        <td>請填入你的學校</td>
                    </tr>
                    <tr>
                        <td>科系</td>
                        <td>請填入你的科系</td>
                    </tr>
                    <tr>
                        <td>興趣</td>
                        <td>Laravel、資料庫、網頁開發</td>
                    </tr>
                    <tr>
                        <td>目標</td>
                        <td>完成 MVC 專題並持續提升開發能力</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>