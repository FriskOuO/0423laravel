<?php

namespace App\Services;

class FirstMessageService
{
    public function getMessage(): string
    {
        return '第一個服務回傳：Hello from FirstMessageService';
    }
}
