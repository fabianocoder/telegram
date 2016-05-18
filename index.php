<?php

// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '232285088:AAHOw7nZeaTtNDKLul_X4Hnd0ZaBxRcclIM';
$BOT_NAME = 'fiza_bot';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e;
}

use Longman\TelegramBot\Request;


/*
Para pegar o chat_id bata na url 
https://api.telegram.org/bot232285088:AAHOw7nZeaTtNDKLul_X4Hnd0ZaBxRcclIM/getUpdates
e pegue o chat_id da conversa e coloque o id dela na variavel aqui embaixo
*/
$chat_id = 204623326;
$result = Request::sendMessage(['chat_id' => $chat_id, 'text' => 'hello world']);

