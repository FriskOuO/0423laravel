<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // 從資料庫獲取所有使用者
        // dd($users); // 測試資料是否正確取得
        return view('users', compact('users')); // 傳遞變數到視圖
    }
}
