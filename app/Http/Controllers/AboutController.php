<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AboutController extends Controller
{
    public function show()
    {
        // 取得剛剛用 Tinker 建立的 User 資料 (John Doe, ID: 1)
        $user = User::first(); 
        
        return view('introduction', compact('user'));
    }
}
