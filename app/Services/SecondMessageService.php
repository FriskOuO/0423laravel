<?php

namespace App\Services;

class SecondMessageService
{
    public function getMessage(): string
    {
        return '第二個服務回傳：Hello from SecondMessageService';
    }
}
