<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service 注入示範</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <h1 class="text-3xl font-bold">零配置依賴注入示範</h1>
        <p class="mt-3 text-gray-700">點擊按鈕後會透過 Route 呼叫 Controller，並自動注入對應 Service。</p>

        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ route('services.first') }}" class="rounded bg-blue-600 px-4 py-2 font-semibold text-white hover:bg-blue-700">
                呼叫第一個服務
            </a>
            <a href="{{ route('services.second') }}" class="rounded bg-emerald-600 px-4 py-2 font-semibold text-white hover:bg-emerald-700">
                呼叫第二個服務
            </a>
            <a href="{{ route('services.index') }}" class="rounded border border-gray-300 bg-white px-4 py-2 font-semibold text-gray-700 hover:bg-gray-50">
                重置
            </a>
        </div>

        <div class="mt-8 rounded-lg border border-gray-200 bg-white p-5 shadow-sm">
            <h2 class="text-lg font-semibold">服務回傳結果</h2>
            <p class="mt-2"><strong>目前服務：</strong>{{ $source }}</p>

            @if($podcast)
                <div class="mt-4 space-y-2">
                    <p><strong>Podcast ID：</strong>{{ $podcast['id'] }}</p>
                    <p><strong>標題：</strong>{{ $podcast['title'] }}</p>
                    <p><strong>作者：</strong>{{ $podcast['author'] }}</p>
                    <p><strong>描述：</strong>{{ $podcast['description'] }}</p>

                    <div class="pt-2">
                        <h3 class="font-semibold">集數清單</h3>
                        <ul class="list-inside list-disc">
                            @foreach($podcast['episodes'] as $episode)
                                <li>{{ $episode['title'] }} - {{ $episode['duration'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
                <p class="mt-2">請按下任一按鈕呼叫服務。</p>
            @endif
        </div>
    </div>
</body>
</html>
