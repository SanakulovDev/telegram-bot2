<?php 
include 'Telegram.php';
$telegram = new Telegram('1718864914:AAGdgFusZOVAi22wpnJO2OnUExyH5Tw-PUg');
$chat_id = 1359920466;
$telegram->setWebhook("https://bot2.smartdesign.uz/");
$text = $telegram->Text();
// if($text == "/start"){
    $content =array('chat_id' => $chat_id, 'text'=>"Hello My bot");
    $telegram->sendMessage($content);

    $option = array( 
    array($telegram->buildKeyboardButton("Button 😂"), $telegram->buildKeyboardButton("Button 💕")),
    array($telegram->buildKeyboardButton("Button 👍👍")) );
$keyb = $telegram->buildKeyBoard($option, $onetime=false);
if($text == "Button 😂"){

$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
$telegram->sendMessage($content);
}
// }










?>