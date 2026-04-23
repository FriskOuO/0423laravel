<?php

namespace App\Http\Controllers;

use App\Services\AppleMusic;
use App\Services\SpotifyMusic;
use Illuminate\View\View;

class ServiceDemoController extends Controller
{
    public function index(): View
    {
        return view('services.index', [
            'source' => '尚未選擇服務',
            'podcast' => null,
        ]);
    }

    public function first(SpotifyMusic $spotifyMusic): View
    {
        return view('services.index', [
            'source' => '第一個服務（SpotifyMusic）',
            'podcast' => $spotifyMusic->findPodcast('SP-001'),
        ]);
    }

    public function second(AppleMusic $appleMusic): View
    {
        return view('services.index', [
            'source' => '第二個服務（AppleMusic）',
            'podcast' => $appleMusic->findPodcast('AP-456'),
        ]);
    }
}
