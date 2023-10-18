<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    //
    public function WebHook() {
        // 在这里处理请求，并返回视图或响应
        $apiKe = config('EchoMail.Telegram.AccessKey');

        return $apiKe;
    }
    
}
