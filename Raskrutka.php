
/* USHBU KOD @YALQOVKODER tomonidan tuzilgan tayyor nakrutka bot kodi.Manbaga kut bulsa tegishaver*/

<?php
ob_start();
error_reporting(0);
define('API_KEY','5571503607:AAHvem3lFbtFpSG7AV6OEKslPDROhA64wpw');  //bot tokeni
$key="1031240b334fd2e9f28c08d860ff335a"; //api key partner.soc-proof.su saytidan olamz
$admin = "1215424881";
$adminuser = "@group_to_group_crypto_tg";
$botname = bot('getme',['bot'])->result->username;
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
 $res = curl_exec($ch);
 if(curl_error($ch)){
  var_dump(curl_error($ch));
 }else{
  return json_decode($res);
}
}

$ek = "Advertising: @$botname you too can start your own business through our bot";
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mid = $message->message_id;
$text = $message->text;  
$tx = $message->text;  
$firstname = $message->chat->first_name;
$lastname = $message->chat->last_name;
$uid= $message->from->id;
$dminuser="ADMIN_USER";
$callcid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$callmid = $update->callback_query->message->message_id;  
$mes_idi = $update->callback_query->message->message_id;  
$from_id = $update->callback_query->from->id;
$step = file_get_contents('step/$chat_id.txt');
$type = $message->chat->type;
mkdir("pul");
mkdir("ref");
$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$asosiy = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⭐️ Social networks"],['text'=>"📋 My orders"]],

[['text'=>"💰 Balance"],['text'=>"👤 Referral system"]],
[['text'=>"ℹ️ info"]],
]
]);
$orqa="❌ Back";

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Back"]]
]
]);

if($text=="Back"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*You have returned to the main menu.*",
    'parse_mode'=>'markdown',
    'reply_markup'=>$asosiy,
    ]);
}

$pay = json_encode([
'inline_keyboard'=>[
[['text'=>"Transfer money to balance",'callback_data'=>"buy"]],
]
]);
$balans= json_encode([
'inline_keyboard'=>[
[['text'=>"💳 Purchase",'callback_data'=>"buy"]],
]
]);
$chanel_3 = file_get_contents("stat/chanel_3.txt");
$chanel_22 = file_get_contents("stat/chanel_22.txt");




if(mb_stripos($text,"/start $cid")!==false){
    bot('sendMessage',[
          'chat_id'=>$cid,
          'text'=>"Welcome to home page!",
          'parse_mode'=>'html',
          'reply_markup'=>$key,
          ]);
    }else{
          $idref = "pul/$ex.db";
          $idref2 = file_get_contents($idref);
          $id = "$cid\n";
          $handle = fopen($idref, 'a+');
          fwrite($handle, $id);
          fclose($handle);
    if(mb_stripos($idref2,$cid) !== false ){
    }else{
    $pub=explode(" ",$text);
    $ex=$pub[1];
    $pul = file_get_contents("pul/$ex.txt");
    $a=$pul+0.25;
    file_put_contents("pul/$ex.txt","$a");
    $odam = file_get_contents("odam/$ex.dat");
    $b=$odam+1;
    file_put_contents("odam/$ex.dat","$b");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"$adminuser💥 Earn ₽ by inviting your friends to our bot
    You get 0.15 ₽ for each invited friend💸
✅ Open a similar bot via @VipKonsBot!"",
    'parse_mode'=>'html',
    'reply_markup'=>$key,
    ]);
    bot('sendmessage',[
    'chat_id'=>$ex,
    'text'=>"👏 Congratulations! Your friend has registered with our bot and you have received 0.25 ₽.",
    'parse_mode'=>'html',
    'reply_markup'=>$key,
    ]);
    }
    }


if($text=="/start"){
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul+0;
file_put_contents("pul/$cid.txt","$mm");
$odam = file_get_contents("referal/$cid.txt");
$kkd=$odam+0;
file_put_contents("referal/$cid.txt","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Welcome, $firstname |
✅ Open a similar bot via @VipKonsBot!"",
    'parse_mode'=>'html',
    'reply_markup'=>$asosiy,
    ]);
}


$lichka = file_get_contents("lichka.txt");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
mkdir("pul");
mkdir("step");
mkdir("nakrutka");
mkdir("kanal");
$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$nakrutka=json_encode([
  'inline_keyboard'=>[
[['text'=>"✈ Telegram",'callback_data'=>"nakrutka=Telegram"],['text'=>"📸 Instagram",'callback_data'=>"nakrutka=Instagram"]],
[['text'=>"🎶  TikTok",'callback_data'=>"nakrutka=TikTok"],['text'=>"📽 YouTube",'callback_data'=>"nakrutka=YouTube"]],
[['text'=>" 📓 Facebook",'callback_data'=>"nakrutka=Facebook"],['text'=>" 💠 Vkontakte",'callback_data'=>"nakrutka=VK"]],/*
['text'=>" ⭕ Yandex-Then",'callback_data'=>"nakrutka=YT"]],
[['text'=>" 🎵 Spotify",'callback_data'=>"nakrutka=SP"],['text'=>" 🔶 Odnoklassniki",'callback_data'=>"nakrutka=SH"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
    ]
    ]);
    $Telegram1=json_encode([
  'inline_keyboard'=>[
  [['text'=>" Telegram – Subscribers",'callback_data'=>"nakrutka=Telegram2"]],
   [['text'=>"Telegram - Просмотры",'callback_data'=>"nakrutka=Telegram4"]],
    [['text'=>" Telegram - Реакции ",'callback_data'=>"nakrutka=Telegram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  
  $Telegram5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ᴛɢ 🎁 Бесплатные просмотры на 1 пост - 0.20 ₽",'callback_data'=>"Telegram=PM=602=0.20"]],
[['text'=>" ᴛɢ ⭐ Моментальные просмотры на пост - 0.50 ₽",'callback_data'=>"Telegram=PM=498=0.50"]],
[['text'=>"🇦🇪 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=791=6"]],
[['text'=>"🇦🇪 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=796=59"]],
[['text'=>"🇺🇿 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=728=6"]],
  [['text'=>"🇺🇿 Просмотры на пост ⟮ для приватных каналов ⟯ - 10.00 ₽",'callback_data'=>"Telegram=PM=732=10"]],
  [['text'=>"🇺🇿 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=733=59"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Telegram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ᴛɢ Быстрые подписчики ⟮ для приватных ссылок ⟯ - 37.00 ₽ ",'callback_data'=>"Telegram=Obuna=598=37"]],
    [['text'=>"ᴛɢ ⭐ Реальные подписчики ⟮ ♻ ʀ 15 ⟯ - 83.00 ₽ ",'callback_data'=>"Telegram=Obuna=709=83"]],
    [['text'=>" ᴛɢ ⭐️ Быстрые подписчики без списаний - 60.00 ₽ ",'callback_data'=>"Telegram=Obuna=700=60"]],
        [['text'=>"ᴛɢ Реальные подписчики ⟮ сим 🇺🇸 США / 🇬🇧 Англия ⟯ - 27.00 ₽ ",'callback_data'=>"Telegram=Obuna=695=27"]],
                [['text'=>"ᴛɢ Быстрые подписчики для сим 🇮🇷 Иран / 🇺🇸 США / 🇨🇳 Китай - 22.00 ₽",'callback_data'=>"Telegram=Obuna=995=22"]],
[['text'=>"ᴛɢ ⭐ 🇷🇺 Русские подписчики - 47.00 ₽",'callback_data'=>"Telegram=Obuna=994=47"]],
[['text'=>"ᴛɢ Медленные боты - 20.00 ₽ ",'callback_data'=>"Telegram=Obuna=926=20"]],
[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ 🇺🇸 Subscribers USA - 29.00 ₽",'callback_data'=>"Telegram=Obuna=785=29"]],
[['text'=>"ᴛɢ 🇸🇦 Арабские подписчики - 46.00 ₽",'callback_data'=>"Telegram=Obuna=332=46"]],
[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ ⭐ Реальные подписчики ⟮ ♻ ʀ 15 ⟯ - 82.00 ₽",'callback_data'=>"Telegram=Obuna=709=82"]],
 [['text'=>"ᴛɢ ⭐ HQ подписчики ⟮ ♻ ʀ 30 ⟯ - 128.00 ₽",'callback_data'=>"Telegram=Obuna=830=128"]],
  [['text'=>" ᴛɢ 🇰🇿 Subscribers (Казахстан) - 603.00 ₽",'callback_data'=>"Telegram=Obuna=586=603"]],
    [['text'=>" ᴛɢ 🇺🇦 Subscribers живые ⟮ Украина ⟯ - 603.00 ₽ ",'callback_data'=>"Telegram=Obuna=553=603"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Telegram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ᴛɢ Позитивные реакции на пост ⟮ микс 👍🤩🎉🔥❤️ ⟯ - 9.00 ₽",'callback_data'=>"Telegram=REK=881=9"]],
[['text'=>"- ᴛɢ Негативные реакции на пост ⟮ микс 👎😁😢??🤮 ⟯ - 9.00 ₽",'callback_data'=>"Telegram=REK=882=9"]],
[['text'=>" ᴛɢ 🔥 Реакции на пост - 8.00 ₽ ",'callback_data'=>"Telegram=REK=871=8"]],
[['text'=>"ᴛɢ 👍 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=868=8"]],
[['text'=>"👎 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=869=8"]],
[['text'=>"❤ Реакции на пост - 8.00 ₽ ",'callback_data'=>"Telegram=REK=870=8"]],
[['text'=>" ᴛɢ 🤮 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=878=8"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Telegram
    $Instagram1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Instagram - Subscribers",'callback_data'=>"nakrutka=Instagram2"]],
      [['text'=>"Instagram - Просмотры",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"Instagram - Лике",'callback_data'=>"nakrutka=Instagram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Instagram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ɪɢ Subscribers (боты) - 13.00 ₽",'callback_data'=>"Instagram=Obuna=155=13"]],
[['text'=>"ɪɢ Реальные подписчики - 20.00 ₽",'callback_data'=>"Instagram=Obuna=674=20"]],
[['text'=>"ɪɢ 🔥 Моментальные подписчики - 32.00 ₽",'callback_data'=>"Instagram=PM=627=32"]],
[['text'=>"ɪɢ Subscribers Mix - 36.00 ₽",'callback_data'=>"Instagram=Obuna=128=36"]],
[['text'=>"ɪɢ ⭐ 🇷🇺 Subscribers RU HQ - 47.00 ₽",'callback_data'=>"Instagram=Obuna=3=47"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $Instagram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ɪɢ Лайки (боты) - 5.00 ₽",'callback_data'=>"Instagram=Like=14=5"]],
[['text'=>"ɪɢ Лайки「 на 10 последних постов 」 - 15.00 ₽",'callback_data'=>"Instagram=Like=582=15"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
      $Instagram5=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ɪɢ Автопросмотры видео с охватом - 9.00 ₽",'callback_data'=>"Instagram=PM=85=9"]],
    [['text'=>"ɪɢ Автоохват - 7.00 ₽",'callback_data'=>"Instagram=PM=88=7"]],
        [['text'=>"ɢ Автосохранения - 4.00 ₽",'callback_data'=>"Instagram=PM=87=4"]],
          [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Instagram
  $TikTok1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"TikTok - Subscribers",'callback_data'=>"nakrutka=TikTok2"]],
      [['text'=>"TikTok - Просмотры",'callback_data'=>"nakrutka=TikTok4"]],
        [['text'=>"TikTok - Лике",'callback_data'=>"nakrutka=TikTok6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$TikTok3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"Subscribers - 27.00 ₽",'callback_data'=>"TikTok=Obuna=247=27"]],
 /*   [['text'=>"⚫ Obunachi [O'rtacha]  17000 ₽",'callback_data'=>"TikTok=Obuna=388=17000"]],
      [['text'=>"⚫ Obunachi [Chiqmaydigan] 22000 ₽",'callback_data'=>"TikTok=Obuna=356=22000"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $TikTok7=json_encode([
  'inline_keyboard'=>[
   [['text'=>"Лайки - 50.00 ₽",'callback_data'=>"TikTok=Like=430=50"]],
       /*   [['text'=>"❤Like [O'rtacha] 25000 ₽",'callback_data'=>"TikTok=Like=539=25000"]],*/
[['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $TikTok5=json_encode([
  'inline_keyboard'=>[
   [['text'=>"Моментальные просмотры - 6.00 ₽",'callback_data'=>"TikTok=PM=55=6"]],
    [['text'=>"⭐ Реальные просмотры - 11.00 ₽",'callback_data'=>"TikTok=PM=382=11"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //TikTok
    $YouTube1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"YouTube - Subscribers",'callback_data'=>"nakrutka=YouTube2"]],
      [['text'=>"YouTube - Просмотры",'callback_data'=>"nakrutka=YouTube4"]],
        [['text'=>"YouTube - Лике",'callback_data'=>"nakrutka=YouTube6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $YouTube3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ʏᴛ Subscribers (боты) - 98.00 ₽",'callback_data'=>"YouTube=Obuna=5=98"]],
[['text'=>" ʏᴛ 🇷🇺 Русские подписчики - 868.00 ₽",'callback_data'=>"YouTube=Obuna=630=868"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ʏᴛ Просмотры - 29.00 ₽",'callback_data'=>"YouTube=PM=514=29"]],
    [['text'=>"ʏᴛ Просмотры (быстрые) - 35.00 ₽",'callback_data'=>"YouTube=PM=39=35"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YouTube7=json_encode([
  'inline_keyboard'=>[
        [['text'=>"ʏᴛ Лайки - 27.00 ₽",'callback_data'=>"YouTube=Like=125=27"]],
                [['text'=>"ʏᴛ Лайки ⟮ ♻ ʀ 30 ⟯ - 35.00 ₽",'callback_data'=>"YouTube=Like=867=35"]],
                                [['text'=>"ʏᴛ ⭐ Дизлайки - 221.00 ₽",'callback_data'=>"YouTube=Like=47=221"]],
                                  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
    $Facebook1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Facebook - Subscribers",'callback_data'=>"nakrutka=Facebook2"]],
   /*   [['text'=>" korish",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"like",'callback_data'=>"nakrutka=Instagram6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Facebook3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ғʙ Subscribers to profile - 58.00 ₽",'callback_data'=>"Facebook=Obuna=899=58"]],
    [['text'=>"ғʙ Subscribers to profile - 76.00 ₽",'callback_data'=>"Facebook=Obuna=428=76"]],
      [['text'=>"ғʙ Плавные лайки + подписчики для паблик-страницы - 80.00 ₽",'callback_data'=>"Facebook=Obuna=73=80"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK1=json_encode([
  'inline_keyboard'=>[
      [['text'=>"VK - Subscribers",'callback_data'=>"nakrutka=VK2"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"⭐ ᴠᴋ Быстрые подписчики ⟮ ♻ ʀ 30 ⟯ - 68.00 ₽ ",'callback_data'=>"VK=Obuna=1028=68"]],
        [['text'=>" ᴠᴋ Быстрые подписчики - 87.00 ₽",'callback_data'=>"VK=Obuna=34=87"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YT=json_encode([
  'inline_keyboard'=>[
    [['text'=>"🗂Obunachi [Jivoy] 80000 ₽",'callback_data'=>"YT=Obuna=152=80000"]],
    [['text'=>"❤Like [Jivoy] 70000 ₽",'callback_data'=>"YT=Like=491=70000"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$SP=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Kafolatlangan] 6000 ₽",'callback_data'=>"SP=Obuna=359=6000"]],
    [['text'=>"🗂Obunachi[Pleylist] 10000 ₽",'callback_data'=>"SP=Obuna=354=10000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $SH=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Russia,Real] 17000 ₽",'callback_data'=>"SH=Obuna=294=17000"]],
    [['text'=>"👁 Ko'rish [video] 6000 ₽",'callback_data'=>"SH=PM=276=6000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
if(mb_stripos($data,"nakrutka")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
    $ex=explode("=",$data)[1];
   if($ex=="Telegram"){
   $key=$Telegram1;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram2"){
   $key=$Telegram3;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram4"){
   $key=$Telegram5;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram6"){
   $key=$Telegram7;
}
//Telegram
    $ex=explode("=",$data)[1];
   if($ex=="Instagam"){
   $key=$Instagrm1;
}
   if($ex=="Instagram"){
   $key=$Instagram1;
}
   if($ex=="Instagram2"){
   $key=$Instagram3;
}
   if($ex=="Instagram4"){
   $key=$Instagram5;
}
   if($ex=="Instagram6"){
   $key=$Instagram7;
}
//Instagram
   if($ex=="TikTok"){
   $key=$TikTok1;
}
   if($ex=="TikTok2"){
   $key=$TikTok3;
}
   if($ex=="TikTok4"){
   $key=$TikTok5;
}
   if($ex=="TikTok6"){
   $key=$TikTok7;
}
//Tiktok
   if($ex=="YouTube"){
   $key=$YouTube1;
}
   if($ex=="YouTube2"){
   $key=$YouTube3;
}
   if($ex=="YouTube4"){
   $key=$YouTube5;
}
   if($ex=="YouTub6"){
   $key=$YouTube7;
}
   if($ex=="Likee"){
   $key=$Likee;
}
   if($ex=="Facebook"){
   $key=$Facebook1;
}
   if($ex=="Facebook2"){
   $key=$Facebook3;
}
   if($ex=="VK"){
   $key=$VK1;
}
   if($ex=="VK2"){
   $key=$VK3;
}
   if($ex=="YT"){
   $key=$YT;
}
if($ex=="SP"){
   $key=$SP;
}
if($ex=="SH"){
   $key=$SH;
}
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"📂 $ex  выберите социальную сеть для накрутки\n💰 Нцены указаны в аккаунтах на 1000 заказов..",
    'parse_mode'=>'markdown',
    'reply_markup'=>$key,
    ]);
}
 

if(mb_stripos($data,"=Like")!==false or mb_stripos($data,"=PM")!==false or mb_stripos($data,
"=Obuna")!==false or mb_stripos($data,"=REK")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  $tarmoq=explode("=",$data)[0];
   $tur=explode("=",$data)[1];
  $id=explode("=",$data)[2];
  $qb=explode("=",$data)[3];
file_put_contents("step/$callcid.txt","nak=$tarmoq=$tur=$id=$qb");
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"Сколько подписчиков вы хотите заказать?",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[       
        [['text'=>"$orqa",'callback_data'=>"back"],],
        ]
      ])
    ]);
}
$minimalnar = file_get_contents("stat/minimal.txt");
if(mb_stripos($step,"nak=")!==false){
  if(is_numeric($text) and $text>0){
  $ex=explode("=",$step);
  $tarmoq=$ex[1];
   $tur=$ex[2];
if($tarmoq=="Telegram"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="YouTube"){
$min=$minimalnar;
$max=25000;
}
if($tarmoq=="TikTok"){
$min=$minimalnar;
$max=50000;
}

if($tarmoq=="Instagram"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="Likee"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="Facebook"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="VK"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="YT"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SP"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SH"){
$min=$minimalnar;
$max=20000;
}
  $tur=$ex[2];
  $id=$ex[3];
  $qb=$ex[4];
  $son=$text;
if($text>=$min and $text<=$max){
  unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","havola=$tarmoq=$id=$son=$tur=$qb");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$tarmoq пришлите вашу ссылку (должна быть https://)",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Минимальный: $min Максимальный: $max Введите диапазон чисел",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Пусть это будет просто число",
    'reply_markup'=>$back,
    ]);
}
}
if(mb_stripos($step,"havola")!==false and $text!=$orqa){
  if(mb_stripos($text,"https:")!==false){
    $ex=explode("=",$step);
    $tarmoq=$ex[1];
    $id=$ex[2];
    $son=$ex[3];
    $tur=$ex[4];
    $qb=$ex[5];
    if($tarmoq=="TikTok"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YouTube"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Telegram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Instagram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Likee"){
      $rak=$son/1000*$qb;
}elseif($tarmoq=="Facebook"){
      $rak=$son/1000*$qb;
      }elseif($tarmoq=="VK"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YT"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SP"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SH"){
      $rak=$son/1000*$qb;
    }
    if($pul>$rak){
    $info=str_replace("$tarmoq","🌐 $tarmoq для сети $son заказать $rak ₽ будет списано с вашего счета ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>⭕️ О заказе
🌐 Сеть: $tarmoq
🔤 Количество: $son
🔢 Ссылка: $text

<b>💢$info 💢</b>

❗Пожалуйста, проверьте, все ли данные верны ✅ Подтверждение...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"✅ Подтверждение",'callback_data'=>"tasdiq"],],
          [['text'=>"$orqa",'callback_data'=>"back"],],
          ]
        ])
      ]);
      unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","uz=$tarmoq=$son=$rak=$id=$tur=$qb");
file_put_contents("nakrutka/$chat_id.txt","$text");
  }else{
    unlink("step/$chat_id.txt");
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>💸 Недостаточно средств....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$menu,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>☹️ ссылка неверна.... Пожалуйста, отправьте повторно!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$back,
      ]);
  }
}

if(mb_stripos($data,"tasdiq")!==false){
$step=file_get_contents("step/$callcid.txt");
 $ex=explode("=",$step);
 $tarmoq=$ex[1];
 $son=$ex[2];
 $rak=$ex[3];
 $id=$ex[4];
$url=file_get_contents("nakrutka/$callcid.txt");
$tur=$ex[5];
bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
$urll=json_decode(file_get_contents("https://partner.soc-proof.su/api/v2?key=$chanel_3&action=add&link=$url&quantity=$son&service=$id"),true);
$order=$urll['order'];
$error=$urll['error'];
file_put_contents("nakrutka/$callcid.dat",file_get_contents('nakrutka/$callcid.dat')."\n".$order);
if(isset($error)){
if($error=="Quantity must be multiple of 1000"){
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"<b>⛔️ Ошибка...
Введите цифры для заказа следующим образом!👇</b>
<code>
1000
2000</code>",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}else{
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"❌",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq","🌐 $tarmoq tarmog'i uchun $son buyurtmaga $rak ₽ hisobingizdan yechildi✅",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"
🔒<b>Заказ был принят!</b>
🆔<b>Заказ ID: $order</b>
✅<b>Заказ: В ходе выполнения...</b>
🌐<b>Сеть $tarmoq</b>
🔢<b>Количество заказов:</b> <b>$son</b>

<b>💢$info 💢</b>",
      'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
   ]);
unlink("step/$callcid.txt");
unlink("nakrutka/$callcid.txt");
}
}

$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$nakrutka2=json_encode([
  'inline_keyboard'=>[
[['text'=>"🇺🇿 Telegram",'callback_data'=>"nakrutka=Telegram10"]],/*['text'=>"📸 Instagram",'callback_data'=>"nakrutka=Instagram"]],
[['text'=>"🎶  TikTok",'callback_data'=>"nakrutka=TikTok"],['text'=>"📽 YouTube",'callback_data'=>"nakrutka=YouTube"]],
[['text'=>" 📓 Facebook",'callback_data'=>"nakrutka=Facebook"],['text'=>" 💠 Vkontakte",'callback_data'=>"nakrutka=VK"]],
['text'=>" ⭕ Yandex-Then",'callback_data'=>"nakrutka=YT"]],
[['text'=>" 🎵 Spotify",'callback_data'=>"nakrutka=SP"],['text'=>" 🔶 Odnoklassniki",'callback_data'=>"nakrutka=SH"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
    ]
    ]);
  
    $Telegram11=json_encode([
  'inline_keyboard'=>[
  [['text'=>" 🇺🇿 Telegram – Subscribers",'callback_data'=>"nakrutka=Telegram12"]],
/*   [['text'=>"Telegram - Просмотры",'callback_data'=>"nakrutka=Telegram4"]],
    [['text'=>" Telegram - Реакции ",'callback_data'=>"nakrutka=Telegram6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  
  $Telegram130=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ᴛɢ 🎁 Бесплатные просмотры на 1 пост - 0.20 ₽",'callback_data'=>"Telegram=PM=602=0.20"]],
[['text'=>" ᴛɢ ⭐ Моментальные просмотры на пост - 0.50 ₽",'callback_data'=>"Telegram=PM=498=0.50"]],
[['text'=>"🇦🇪 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=791=6"]],
[['text'=>"🇦🇪 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=796=59"]],
[['text'=>"🇺🇿 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=728=6"]],
  [['text'=>"🇺🇿 Просмотры на пост ⟮ для приватных каналов ⟯ - 10.00 ₽",'callback_data'=>"Telegram=PM=732=10"]],
  [['text'=>"🇺🇿 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=733=59"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Telegram13=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ᴛɢ 🇺🇿 Узбекский активный подписчик - 145.00 ₽ ",'callback_data'=>"Telegram=Obuna=630=145"]],
    [['text'=>"ᴛɢ 🇺🇿  Узбекский абонент [Женщины]- 146.00 ₽ ",'callback_data'=>"Telegram=Obuna=631=146"]],
    [['text'=>" ᴛɢ 🇺🇿 Узбекский подписчик [женщины/мужчины] Для группы - 60.00 ₽ ",'callback_data'=>"Telegram=Obuna=806=150"]],
   /*  [['text'=>"ᴛɢ Реальные подписчики ⟮ сим 🇺🇸 США / 🇬🇧 Англия ⟯ - 27.00 ₽ ",'callback_data'=>"Telegram=Obuna=695=27"]],*/
          /*      [['text'=>"ᴛɢ Быстрые подписчики для сим 🇮🇷 Иран / 🇺🇸 США / 🇨🇳 Китай - 22.00 ₽",'callback_data'=>"Telegram=Obuna=995=22"]],
[['text'=>"ᴛɢ ⭐ 🇷🇺 Русские подписчики - 47.00 ₽",'callback_data'=>"Telegram=Obuna=994=47"]],
[['text'=>"ᴛɢ Медленные боты - 20.00 ₽ ",'callback_data'=>"Telegram=Obuna=926=20"]],
[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ 🇺🇸 Subscribers USA - 29.00 ₽",'callback_data'=>"Telegram=Obuna=785=29"]],
[['text'=>"ᴛɢ 🇸🇦 Арабские подписчики - 46.00 ₽",'callback_data'=>"Telegram=Obuna=332=46"]],
[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ ⭐ Реальные подписчики ⟮ ♻ ʀ 15 ⟯ - 82.00 ₽",'callback_data'=>"Telegram=Obuna=709=82"]],
 [['text'=>"ᴛɢ ⭐ HQ подписчики ⟮ ♻ ʀ 30 ⟯ - 128.00 ₽",'callback_data'=>"Telegram=Obuna=830=128"]],
  [['text'=>" ᴛɢ 🇰🇿 Subscribers (Казахстан) - 603.00 ₽",'callback_data'=>"Telegram=Obuna=586=603"]],
    [['text'=>" ᴛɢ 🇺🇦 Subscribers живые ⟮ Украина ⟯ - 603.00 ₽ ",'callback_data'=>"Telegram=Obuna=553=603"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Telegram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ᴛɢ Позитивные реакции на пост ⟮ микс 👍🤩🎉🔥❤️ ⟯ - 9.00 ₽",'callback_data'=>"Telegram=REK=881=9"]],
[['text'=>"- ᴛɢ Негативные реакции на пост ⟮ микс 👎😁😢💩🤮 ⟯ - 9.00 ₽",'callback_data'=>"Telegram=REK=882=9"]],
[['text'=>" ᴛɢ 🔥 Реакции на пост - 8.00 ₽ ",'callback_data'=>"Telegram=REK=871=8"]],
[['text'=>"ᴛɢ 👍 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=868=8"]],
[['text'=>"👎 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=869=8"]],
[['text'=>"❤ Реакции на пост - 8.00 ₽ ",'callback_data'=>"Telegram=REK=870=8"]],
[['text'=>" ᴛɢ 🤮 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=878=8"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Telegram
    $Instagram1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Instagram - Subscribers",'callback_data'=>"nakrutka=Instagram2"]],
      [['text'=>"Instagram - Просмотры",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"Instagram - Лике",'callback_data'=>"nakrutka=Instagram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Instagram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ɪɢ Subscribers (боты) - 13.00 ₽",'callback_data'=>"Instagram=Obuna=155=13"]],
[['text'=>"ɪɢ Реальные подписчики - 20.00 ₽",'callback_data'=>"Instagram=Obuna=674=20"]],
[['text'=>"ɪɢ 🔥 Моментальные подписчики - 32.00 ₽",'callback_data'=>"Instagram=PM=627=32"]],
[['text'=>"ɪɢ Subscribers Mix - 36.00 ₽",'callback_data'=>"Instagram=Obuna=128=36"]],
[['text'=>"ɪɢ ⭐ 🇷🇺 Subscribers RU HQ - 47.00 ₽",'callback_data'=>"Instagram=Obuna=3=47"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $Instagram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ɪɢ Лайки (боты) - 5.00 ₽",'callback_data'=>"Instagram=Like=14=5"]],
[['text'=>"ɪɢ Лайки「 на 10 последних постов 」 - 15.00 ₽",'callback_data'=>"Instagram=Like=582=15"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
      $Instagram5=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ɪɢ Автопросмотры видео с охватом - 9.00 ₽",'callback_data'=>"Instagram=PM=85=9"]],
    [['text'=>"ɪɢ Автоохват - 7.00 ₽",'callback_data'=>"Instagram=PM=88=7"]],
        [['text'=>"ɢ Автосохранения - 4.00 ₽",'callback_data'=>"Instagram=PM=87=4"]],
          [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Instagram
  $TikTok1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"TikTok - Subscribers",'callback_data'=>"nakrutka=TikTok2"]],
      [['text'=>"TikTok - Просмотры",'callback_data'=>"nakrutka=TikTok4"]],
        [['text'=>"TikTok - Лике",'callback_data'=>"nakrutka=TikTok6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$TikTok3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"Subscribers - 27.00 ₽",'callback_data'=>"TikTok=Obuna=247=27"]],
 /*   [['text'=>"⚫ Obunachi [O'rtacha]  17000 ₽",'callback_data'=>"TikTok=Obuna=388=17000"]],
      [['text'=>"⚫ Obunachi [Chiqmaydigan] 22000 ₽",'callback_data'=>"TikTok=Obuna=356=22000"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $TikTok7=json_encode([
  'inline_keyboard'=>[
   [['text'=>"Лайки - 50.00 ₽",'callback_data'=>"TikTok=Like=430=50"]],
       /*   [['text'=>"❤Like [O'rtacha] 25000 ₽",'callback_data'=>"TikTok=Like=539=25000"]],*/
[['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $TikTok5=json_encode([
  'inline_keyboard'=>[
   [['text'=>"Моментальные просмотры - 6.00 ₽",'callback_data'=>"TikTok=PM=55=6"]],
    [['text'=>"⭐ Реальные просмотры - 11.00 ₽",'callback_data'=>"TikTok=PM=382=11"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //TikTok
    $YouTube1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"YouTube - Subscribers",'callback_data'=>"nakrutka=YouTube2"]],
      [['text'=>"YouTube - Просмотры",'callback_data'=>"nakrutka=YouTube4"]],
        [['text'=>"YouTube - Лике",'callback_data'=>"nakrutka=YouTube6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $YouTube3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ʏᴛ Subscribers (боты) - 98.00 ₽",'callback_data'=>"YouTube=Obuna=5=98"]],
[['text'=>" ʏᴛ 🇷🇺 Русские подписчики - 868.00 ₽",'callback_data'=>"YouTube=Obuna=630=868"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ʏᴛ Просмотры - 29.00 ₽",'callback_data'=>"YouTube=PM=514=29"]],
    [['text'=>"ʏᴛ Просмотры (быстрые) - 35.00 ₽",'callback_data'=>"YouTube=PM=39=35"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YouTube7=json_encode([
  'inline_keyboard'=>[
        [['text'=>"ʏᴛ Лайки - 27.00 ₽",'callback_data'=>"YouTube=Like=125=27"]],
                [['text'=>"ʏᴛ Лайки ⟮ ♻ ʀ 30 ⟯ - 35.00 ₽",'callback_data'=>"YouTube=Like=867=35"]],
                                [['text'=>"ʏᴛ ⭐ Дизлайки - 221.00 ₽",'callback_data'=>"YouTube=Like=47=221"]],
                                  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
    $Facebook1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Facebook - Subscribers",'callback_data'=>"nakrutka=Facebook2"]],
   /*   [['text'=>" korish",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"like",'callback_data'=>"nakrutka=Instagram6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Facebook3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ғʙ Subscribers to profile - 58.00 ₽",'callback_data'=>"Facebook=Obuna=899=58"]],
    [['text'=>"ғʙ Subscribers to profile - 76.00 ₽",'callback_data'=>"Facebook=Obuna=428=76"]],
      [['text'=>"ғʙ Плавные лайки + подписчики для паблик-страницы - 80.00 ₽",'callback_data'=>"Facebook=Obuna=73=80"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK1=json_encode([
  'inline_keyboard'=>[
      [['text'=>"VK - Subscribers",'callback_data'=>"nakrutka=VK2"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"⭐ ᴠᴋ Быстрые подписчики ⟮ ♻ ʀ 30 ⟯ - 68.00 ₽ ",'callback_data'=>"VK=Obuna=1028=68"]],
        [['text'=>" ᴠᴋ Быстрые подписчики - 87.00 ₽",'callback_data'=>"VK=Obuna=34=87"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YT=json_encode([
  'inline_keyboard'=>[
    [['text'=>"🗂Obunachi [Jivoy] 80000 ₽",'callback_data'=>"YT=Obuna=152=80000"]],
    [['text'=>"❤Like [Jivoy] 70000 ₽",'callback_data'=>"YT=Like=491=70000"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$SP=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Kafolatlangan] 6000 ₽",'callback_data'=>"SP=Obuna=359=6000"]],
    [['text'=>"🗂Obunachi[Pleylist] 10000 ₽",'callback_data'=>"SP=Obuna=354=10000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $SH=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Russia,Real] 17000 ₽",'callback_data'=>"SH=Obuna=294=17000"]],
    [['text'=>"👁 Ko'rish [video] 6000 ₽",'callback_data'=>"SH=PM=276=6000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
if(mb_stripos($data,"nakrutka")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
    $ex=explode("=",$data)[1];
   if($ex=="Telegram10"){
   $key=$Telegram11;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram12"){
   $key=$Telegram13;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram4"){
   $key=$Telegram5;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram6"){
   $key=$Telegram7;
}
//Telegram
    $ex=explode("=",$data)[1];
   if($ex=="Instagam"){
   $key=$Instagrm1;
}
   if($ex=="Instagram"){
   $key=$Instagram1;
}
   if($ex=="Instagram2"){
   $key=$Instagram3;
}
   if($ex=="Instagram4"){
   $key=$Instagram5;
}
   if($ex=="Instagram6"){
   $key=$Instagram7;
}
//Instagram
   if($ex=="TikTok"){
   $key=$TikTok1;
}
   if($ex=="TikTok2"){
   $key=$TikTok3;
}
   if($ex=="TikTok4"){
   $key=$TikTok5;
}
   if($ex=="TikTok6"){
   $key=$TikTok7;
}
//Tiktok
   if($ex=="YouTube"){
   $key=$YouTube1;
}
   if($ex=="YouTube2"){
   $key=$YouTube3;
}
   if($ex=="YouTube4"){
   $key=$YouTube5;
}
   if($ex=="YouTub6"){
   $key=$YouTube7;
}
   if($ex=="Likee"){
   $key=$Likee;
}
   if($ex=="Facebook"){
   $key=$Facebook1;
}
   if($ex=="Facebook2"){
   $key=$Facebook3;
}
   if($ex=="VK"){
   $key=$VK1;
}
   if($ex=="VK2"){
   $key=$VK3;
}
   if($ex=="YT"){
   $key=$YT;
}
if($ex=="SP"){
   $key=$SP;
}
if($ex=="SH"){
   $key=$SH;
}
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"📂 $ex  выберите социальную сеть для накрутки\n💰 Нцены указаны в аккаунтах на 1000 заказов..",
    'parse_mode'=>'markdown',
    'reply_markup'=>$key,
    ]);
}
 

if(mb_stripos($data,"=Like")!==false or mb_stripos($data,"=PM")!==false or mb_stripos($data,
"=Obuna")!==false or mb_stripos($data,"=REK")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  $tarmoq=explode("=",$data)[0];
   $tur=explode("=",$data)[1];
  $id=explode("=",$data)[2];
  $qb=explode("=",$data)[3];
file_put_contents("step/$callcid.txt","nak=$tarmoq=$tur=$id=$qb");
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"Сколько подписчиков вы хотите заказать?",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[       
        [['text'=>"$orqa",'callback_data'=>"back"],],
        ]
      ])
    ]);
}
$minimalnar = file_get_contents("stat/minimal.txt");
if(mb_stripos($step,"nak=")!==false){
  if(is_numeric($text) and $text>0){
  $ex=explode("=",$step);
  $tarmoq=$ex[1];
   $tur=$ex[2];
if($tarmoq=="Telegram10"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="YouTube"){
$min=$minimalnar;
$max=25000;
}
if($tarmoq=="TikTok"){
$min=$minimalnar;
$max=50000;
}

if($tarmoq=="Instagram"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="Likee"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="Facebook"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="VK"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="YT"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SP"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SH"){
$min=$minimalnar;
$max=20000;
}
  $tur=$ex[2];
  $id=$ex[3];
  $qb=$ex[4];
  $son=$text;
if($text>=$min and $text<=$max){
  unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","havola=$tarmoq=$id=$son=$tur=$qb");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$tarmoq пришлите вашу ссылку (должна быть https://)",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Минимальный: $min Максимальный: $max Введите диапазон чисел",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Пусть это будет просто число",
    'reply_markup'=>$back,
    ]);
}
}
if(mb_stripos($step,"havola")!==false and $text!=$orqa){
  if(mb_stripos($text,"https:")!==false){
    $ex=explode("=",$step);
    $tarmoq=$ex[1];
    $id=$ex[2];
    $son=$ex[3];
    $tur=$ex[4];
    $qb=$ex[5];
    if($tarmoq=="TikTok"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YouTube"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Telegram10"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Instagram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Likee"){
      $rak=$son/1000*$qb;
}elseif($tarmoq=="Facebook"){
      $rak=$son/1000*$qb;
      }elseif($tarmoq=="VK"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YT"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SP"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SH"){
      $rak=$son/1000*$qb;
    }
    if($pul>$rak){
    $info=str_replace("$tarmoq","🌐 $tarmoq для сети $son заказать $rak ₽ будет списано с вашего счета ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>⭕️ О заказе
🌐 Сеть: $tarmoq
🔤 Количество: $son
🔢 Ссылка: $text

<b>💢$info 💢</b>

❗Пожалуйста, проверьте, все ли данные верны ✅ Подтверждение...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"✅ Подтверждение",'callback_data'=>"tasdiq"],],
          [['text'=>"$orqa",'callback_data'=>"back"],],
          ]
        ])
      ]);
      unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","uz=$tarmoq=$son=$rak=$id=$tur=$qb");
file_put_contents("nakrutka/$chat_id.txt","$text");
  }else{
    unlink("step/$chat_id.txt");
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>💸 Недостаточно средств....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$menu,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>☹️ ссылка неверна.... Пожалуйста, отправьте повторно!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$back,
      ]);
  }
}

if(mb_stripos($data,"tasdiq")!==false){
$step=file_get_contents("step/$callcid.txt");
 $ex=explode("=",$step);
 $tarmoq=$ex[1];
 $son=$ex[2];
 $rak=$ex[3];
 $id=$ex[4];
$url=file_get_contents("nakrutka/$callcid.txt");
$tur=$ex[5];
bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
$urll=json_decode(file_get_contents("https://topsmm.uz/api/v2?key=$chanel_22&action=add&link=$url&quantity=$son&service=$id"),true);
$order=$urll['order'];
$error=$urll['error'];
file_put_contents("nakrutka/$callcid.dat",file_get_contents('nakrutka/$callcid.dat')."\n".$order);
if(isset($error)){
if($error=="Quantity must be multiple of 1000"){
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"<b>⛔️ Ошибка...
Введите цифры для заказа следующим образом!👇</b>
<code>
1000
2000</code>",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}else{
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"❌",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq","🌐 $tarmoq tarmog'i uchun $son buyurtmaga $rak ₽ hisobingizdan yechildi✅",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"
🔒<b>Заказ был принят!</b>
🆔<b>Заказ ID: $order</b>
✅<b>Заказ: В ходе выполнения...</b>
🌐<b>Сеть $tarmoq</b>
🔢<b>Количество заказов:</b> <b>$son</b>

<b>💢$info 💢</b>",
      'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
   ]);
unlink("step/$callcid.txt");
unlink("nakrutka/$callcid.txt");
}
}

if($data=="back"){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"<b>📂 Выберите социальную сеть для накрутки</b>",
'parse_mode'=>"HTML",
    'reply_markup'=>$nakrutka,
    ]);
}



  
  if($text=="🇺🇿 Узбекский абонент"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📂 Выберите социальную сеть для накрутки.",
    'reply_markup'=>$nakrutka2,
    ]);
}
if($text=="⭐️ Социальные сети"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📂 Выберите социальную сеть для накрутки.",
    'reply_markup'=>$nakrutka,
    ]);
}
  

//////kutamiz
  if($text == "💰Balans"){
    $balans = file_get_contents("pul/$cid.txt");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>👤 $firstname\n➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳ \n👤Hisobingizda $balans ₽ Mavjud.\n
➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳➳</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$olish,
]);
}


if($text=="🪙API Balans" and $chat_id==$admin){
$api_balance = json_decode(file_get_contents("https://partner.soc-proof.su/api/v2?key=$chanel_3&action=balance"),true);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizning API Balansingizda
".$api_balance['balance']." Rubl",
'reply_markup'=>$panel,
]);
}
if($text=="🪙API Balans [Uzbek obunachi uchun]" and $chat_id==$admin){
$api_balance = json_decode(file_get_contents("https://topsmm.uz/api/v2?key=$chanel_22&action=balance"),true);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizning API Balansingizda
".$api_balance['balance']." Rubl",
'reply_markup'=>$panel,
]);
}

$kanal=file_get_contents("kanal.txt");
$set_edit=file_get_contents("set/edit.txt");
if($text == "📢 Kanal qoʻshish"  and $cid == $admin){
file_put_contents("step/$cid.step","kanal_add");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>📡Kanal qo‘shish uchun kanal havolasini yuboring!
🔰Masalan: @VipKons</b>",
'parse_mode'=>'html',
'reply_markup'=>$bosh,
]);
}

if($step == "kanal_add" and $text!="🗄 Boshqaruv"){
if(joinchat($cid,$text,$panel)=="1"){
if(mb_stripos($kanal,"$text")!==false){
}else{
file_put_contents("kanal.txt","$kanal\n$text");
unlink("step/$id.step");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>📡Kanalingiz botga muvaffaqiyatli qo‘shildi!
🤖Endi botni kanalingizga admin qiling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
}
}

if($text == "📢 Kanalni oʻchirish"){
$ids = explode("\n",$kanal);
$soni = substr_count($kanal,"@");
$kanal=file_get_contents("kanal.txt");
$ids = explode("\n",$kanal);
foreach($ids as $id){
$keyboards = [];
$k=[];
for ($for = 1; $for <= $soni; $for++) {
$kanall=str_replace("@","",$ids[$for]);
$ism=bot('getChat',['chat_id'=>"@".$kanall,])->result->title;
$keyboards[]=["text"=>"$for $ism","callback_data"=>"del=@$kanall"];
}
$keyboard2=array_chunk($keyboards, 2);
$keyboard=json_encode([
'inline_keyboard'=>$keyboard2,
]);
}
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
<b>📡Kanalni oʻchirish uchun kanalni tanlang

📝Jami kanallar soni: $soni ta
</b>",
'parse_mode'=>'html',
'reply_markup'=>$keyboard,
]);
}

if(mb_stripos($data,"del=")!==false){
$k2=explode("=",$data)[1];
if(mb_stripos($kanal,$k2)!==false){
$k = str_replace("\n".$k2."","",$kanal);
file_put_contents("kanal.txt",$k);
unlink("set/edit.txt");
bot('sendmessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>🔰$k2 muvaffaqiyatli oʻchirildi!✅</b>",
'parse_mode'=>'html',
]);
del($callcid,$callmid);
}
}


if($text=="💰Sotib Olish"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>💵 Qanday to'lov usulida Rubl sotib olmoqchisiz?
Karta, Paynet va qiwi orqali toʻlovlar qilish tavsiya etiladi.
[1 ₽ = 110 soʻm] [10 ₽ = 110 soʻm]
QiWi orqali 
[1 ₽ = 1 ₽] [10 ₽ = 10 ₽]</b>
<b>Karta orqali:</b> <code>Lichkada</code>
<b>QiWi orqali:</b> <code>Lichkada</code>
<b>Paynet orqali:</b> <code>Lichkada</code>
<b>Tolov amalga oshiring va adminga murojaat qiling</b>",
'parse_mode'=>'html',
'reply_markup'=>$olish,
    ]);
}

if($text=="☎️"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🔰 Bizga savollaringiz yoki muammolaringiz bo'lsa, iltimos, bizning qo'llab-quvvatlash jamoamiz bilan bog'laning.
Admin: @$adminuser*",
'parse_mode'=>'markdown',
    ]);
}
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝Userga Xabar"],['text'=>"📋Userga Forward"]],
[['text'=>"➕Pul berish"],['text'=>"➖Pul ayirish"]],
[['text'=>"🪙API Balans"],['text'=>"❤️Api Sozlash"],['text'=>"📊Statistika"]],
[['text'=>"🔰 Minimal buyurtmani"],['text'=>"/start"]],
[['text'=>"🪙API Balans [Uzbek obunachi uchun]"]],
[['text'=>"❤️Api Sozlash [Uzbek obunachi uchun]"]],
]
]);

$okstat=file_get_contents("status/$cid.status");
if($text=="📋 My orders"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Введите идентификационный номер заказа",
]);
mkdir("status");
file_put_contents("status/$cid.status","1");
}
if($okstat==1){
if(is_numeric($text)){
$orderstat=json_decode(file_get_contents("https://partner.soc-proof.su/api/v2?key=$chanel_3&action=status&order=$text"),true);
$miqdor=$orderstat['charge'];
if($orderstat['status'] !=null or $orderstat['remains'] !=null){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Статус заказа: ".$orderstat['status']."
Количество заказа: ".$orderstat['remains']."",
]);unlink("status/$cid.status");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>" Нет в наличии" ,
]);
unlink("status/$cid.status");
}
}
}




mkdir("stat");
if($tx == "🛠 Sozlash" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"<i>Majburiy a‘zolik kanallarini sozlash uchun pastagi tugmalar orqali kanalingizni ulang.</i>

<b>Eslatma:</b> <i>Majburiy a‘zolikga kiritilgan kanallaringizda ushbu botingiz admin bo‘lishi kerak aks holda bot ishlamaydi.</i>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"1⃣ - Kanal"],['text'=>"2⃣ - Kanal"]],
    ]
    ])
    ]);
    }
     $step = file_get_contents("stat/$cid.step");
   if($tx=="1⃣ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>e‘tibor bering kanalingiz useriga @ belgisini</b> qo‘shmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_1");
} 
if($tx=="🔰 Minimal buyurtmani" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>Minimal buyurtmani yuboring!</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","minmalna");
} 

if($step=="minmalna" and $cid==$admin){ 
file_put_contents("stat/minimal.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($step=="chanel_1" and $cid==$admin){ 
file_put_contents("stat/chanel_1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning birinchi kanalingiz @$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($tx=="2⃣ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>2-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>e‘tibor bering kanalingiz useriga @ belgisini</b> qo‘shmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_2");
} 
 
if($step=="chanel_2" and $cid==$admin){ 
file_put_contents("stat/chanel_2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning ikkinchi kanalingiz @$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="❤️Api Sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz https://partner.soc-proof.su</b> ‼️.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_3");
} 

if($step=="chanel_3" and $cid==$admin){ 
file_put_contents("stat/chanel_3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="❤️Api Sozlash [Uzbek obunachi uchun]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz https://topsmm.uz</b> ‼️.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_22");
} 

if($step=="chanel_22" and $cid==$admin){ 
file_put_contents("stat/chanel_22.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}




if($text == "/panel" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Assalamu alaykum <a href='tg://user?id=$uid'>Admin</a></b>\n\n<i>Kerakli boʻlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}


if($text=="📊Statistika" && $cid==$admin){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname statistikasi
Bot azolari ".substr_count($lichka,"\n")." ta ",
'reply_markup'=>$panel,
]);
}

function send($c,$m,$p){
bot('sendMessage',[
'chat_id'=>$c,
'text'=>$m,
'parse_mode'=>$p,
]);
}
function reyting(){
    $text = "🏆 <b>TOP 5 ta eng koʻp pul ishlagan foydalanuvchilar:</b>\n\n";
    $daten = [];
    $rev = [];
    $fayllar = glob("./pul/*.*");
    foreach($fayllar as $file){
        if(mb_stripos($file,".pul")!==false){
        $value = file_get_contents($file);
        $id = str_replace(["./pul/",".pul"],["",""],$file);
        $daten[$value] = $id;
        $rev[$id] = $value;
        }
        echo $file;
    }

    asort($rev);
    $reversed = array_reverse($rev);
    for($i=0;$i<5;$i+=1){
        $order = $i+1;
        $id = $daten["$reversed[$i]"];
        $text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<code>".$reversed[$i]."</code>"." <b>rubl</b>"."\n";
    }
    return $text;
}
if($text=="/reyting"){
$y = reyting();
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>$y,
'parse_mode'=>html,
]);
}
$step = file_get_contents("step/$chat_id.step");
     
if($text == "📝Userga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Userlarga yuboriladigan habarni kiriting!!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("step/$cid.step","user");
    }

    if($step == "user" and $cid == $admin){
      if($text == "/cancel"){
      unlink("step/$chat_id.step");
      }else{ 
      $idszs=explode("\n",$lichka);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);  unlink("step/$cid.step");
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Habar Barcha Userlarga yuborildi!",
          ]);      
      unlink("step/$cid.step");
        }
      }
    }
     

if($text == "📋Userga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Userlarga forward qilinadigan xabarni kiriting!
Bakor qilish uchun /cancel ni bosing*",
'parse_mode'=>'markdown',
]);
file_put_contents("step/$cid.step","forward");
}

if($step == "forward" and $cid == $admin){
if($text == "/cancel"){
unlink("stat/$chat_id.step");
}else{ 
$ids=explode("\n",$lichka);
foreach($ids as $id){
$user = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);unlink("step/$cid.step");
}

if($user){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("step/$cid.step");
}
}
}

if($text=="💰 Balance"){

$dost = file_get_contents("pul/$cid.ref");
$soat=date('H:i:s',strtotime('2 hour'));
$sana=date("d-M-y",strtotime("2 hour"));
$hisob  = file_get_contents("pul/$chat_id.txt");
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
💲 Ваш баланс: $hisob ₽
🏷 Ваш id: <code>$cid</code>
",
'parse_mode'=>"HTML",
'reply_markup'=>$pay,
])->result->message_id;

}
$dost = file_get_contents("pul/$cid.ref");
$hisob  = file_get_contents("pul/$chat_id.txt");
if($text=="👤 Referral system"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"‍Партнёрская программа

Даёт возможность хорошо заработать, с каждого потенциального клиента.Все чисто и прозрачно.Если ваш реферал пополнит баланс от 1000 руб, то вы получите 50 руб.

Ваши приглашённые:

Приглашено всего: $dost 
Заработано с рефералов: 0.25 ₽
Ваша партнёрская ссылка: 
https://t.me/$botname?start=$cid
",
'reply_markup'=>$pay,
])->result->message_id;
}

if($data=="card"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>⬇Оплатите на номер карты ниже и напишите администратору</b>

💳 Kарта: <code>Карта номер</code>
💸 Минимальный платеж: 10 ₽

<b>📊 Курс рубля на боте: 1 ₽ - сум в зависимости от курса</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻 Техническая поддержка",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($data=="qiwi"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b> Ваши деньги, отправленные через платежную систему 🥝 QIWI, за считанные минуты
 будут автоматически зачислены на ваш счет.</b>

💳 QIWI: <code>QIWI  номер</code>
📝 Примечание: <code>$callcid</code>

<b>Внимание!  Если вы забудете ввести комментарий или введете его неправильно, ваш аккаунт не будет зачислен!
 В таких случаях вы можете связаться с нами.</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻 Техническая поддержка",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($text=="Back"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Отменено!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
exit();
}

$step = file_get_contents("step/$cid.step");
$hisob = file_get_contents("pul/$cid.txt");
$types = file_get_contents("step/$cid.turi");


$dost = file_get_contents("pul/$cid.ref");
if($text=="ℹ️ info"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname - уникальный сервис для СММ

Наши преимущества:
✔️ Низкие цены
✔️ Полная автоматизация
✔️ Быстрота и удобство
✔️ Разнообразие сервисов и стран
✔️ Партнёрская программа
✔️ Постоянные обновления
✔️ Отзывчивая поддержка",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍💻 Техподдержка / Администратор","url"=>"https://t.me/$adminuser"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]]),])->result->message_id;}
$dost = file_get_contents("pul/$cid.ref");
if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
Партнёрская программа

Даёт возможность хорошо заработать, с каждого потенциального клиента.Все чисто и прозрачно.Если ваш реферал пополнит баланс от 1000руб, то вы получите 50руб.

Ваши приглашённые:

Приглашено всего: $dost
Заработано с рефералов: 0.25 ₽
Ваша партнёрская ссылка: 
https://t.me/$botname?start=$callcid",
]);
}


if($data=="buy"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
💵 Каким способом оплаты вы хотите пополнить свой счет?
 Расплачиваться рекомендуется картой и киви.
 👇 Выберите из кнопок:",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💴 С картой",'callback_data'=>"card"],['text'=>"🥝 QIWI",'callback_data'=>"qiwi"]],
]
]),
]);
}                            



$ss=file_get_contents("admin.txt");
if($text=="➕Pul berish" and $cid==$admin){
file_put_contents("admin.txt","coin");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobini nechi pulga toʻldirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay");
 }


if($ss=="pay" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum + $summa;
file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingiz admin tomonidan $summa ₽ga toʻldirildi!

Hozirgi hisobingiz: $jami rubl",
]);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansi toʻldirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}
////////
$ss=file_get_contents("admin.txt");
if($text=="➖Pul ayirish" and $cid==$admin){
file_put_contents("admin.txt","coin1");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobidan qancha pul ayirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin1" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay1");
 }


if($ss=="pay1" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum - $summa;
$okminus=file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingizdan admin tomonidan $summa pul ayirildi!

Hozirgi hisobingiz: $jami ₽",
]);
}
if($okminus){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansidan $summa ₽ ayirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}

if($tx=="/stat"){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Botimiz a'zolari $lich ta
",
]);
}
