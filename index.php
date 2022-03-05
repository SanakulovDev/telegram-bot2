<?php 
include 'Telegram.php';
$telegram = new Telegram('1718864914:AAGdgFusZOVAi22wpnJO2OnUExyH5Tw-PUg');
$chat_id = 1359920466;
$text = $telegram->Text();
if($text == "/start"){
    $content = array('chat_id' => $chat_id, 'text'=>"Xush kelibsiz bizning botga");
    $telegram->sendMessage($content);
}

?>