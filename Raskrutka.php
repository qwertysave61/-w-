
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
[['text'=>"â­ī¸ Social networks"],['text'=>"đ My orders"]],

[['text'=>"đ° Balance"],['text'=>"đ¤ Referral system"]],
[['text'=>"âšī¸ info"]],
]
]);
$orqa="â Back";

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
[['text'=>"đŗ Purchase",'callback_data'=>"buy"]],
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
    'text'=>"$adminuserđĨ Earn âŊ by inviting your friends to our bot
    You get 0.15 âŊ for each invited friendđ¸
â Open a similar bot via @VipKonsBot!"",
    'parse_mode'=>'html',
    'reply_markup'=>$key,
    ]);
    bot('sendmessage',[
    'chat_id'=>$ex,
    'text'=>"đ Congratulations! Your friend has registered with our bot and you have received 0.25 âŊ.",
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
â Open a similar bot via @VipKonsBot!"",
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
[['text'=>"â Telegram",'callback_data'=>"nakrutka=Telegram"],['text'=>"đ¸ Instagram",'callback_data'=>"nakrutka=Instagram"]],
[['text'=>"đļ  TikTok",'callback_data'=>"nakrutka=TikTok"],['text'=>"đŊ YouTube",'callback_data'=>"nakrutka=YouTube"]],
[['text'=>" đ Facebook",'callback_data'=>"nakrutka=Facebook"],['text'=>" đ  Vkontakte",'callback_data'=>"nakrutka=VK"]],/*
['text'=>" â­ Yandex-Then",'callback_data'=>"nakrutka=YT"]],
[['text'=>" đĩ Spotify",'callback_data'=>"nakrutka=SP"],['text'=>" đļ Odnoklassniki",'callback_data'=>"nakrutka=SH"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
    ]
    ]);
    $Telegram1=json_encode([
  'inline_keyboard'=>[
  [['text'=>" Telegram â Subscribers",'callback_data'=>"nakrutka=Telegram2"]],
   [['text'=>"Telegram - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=Telegram4"]],
    [['text'=>" Telegram - Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ",'callback_data'=>"nakrutka=Telegram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  
  $Telegram5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" á´Éĸ đ ĐĐĩŅĐŋĐģĐ°ŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 ĐŋĐžŅŅ - 0.20 âŊ",'callback_data'=>"Telegram=PM=602=0.20"]],
[['text'=>" á´Éĸ â­ ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 0.50 âŊ",'callback_data'=>"Telegram=PM=498=0.50"]],
[['text'=>"đĻđĒ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 6.00 âŊ",'callback_data'=>"Telegram=PM=791=6"]],
[['text'=>"đĻđĒ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 Đ´ĐĩĐŊŅ - 59.00 âŊ",'callback_data'=>"Telegram=PM=796=59"]],
[['text'=>"đēđŋ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 6.00 âŊ",'callback_data'=>"Telegram=PM=728=6"]],
  [['text'=>"đēđŋ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ âŽ Đ´ĐģŅ ĐŋŅĐ¸Đ˛Đ°ŅĐŊŅŅ ĐēĐ°ĐŊĐ°ĐģĐžĐ˛ â¯ - 10.00 âŊ",'callback_data'=>"Telegram=PM=732=10"]],
  [['text'=>"đēđŋ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 Đ´ĐĩĐŊŅ - 59.00 âŊ",'callback_data'=>"Telegram=PM=733=59"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Telegram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"á´Éĸ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ Đ´ĐģŅ ĐŋŅĐ¸Đ˛Đ°ŅĐŊŅŅ ŅŅŅĐģĐžĐē â¯ - 37.00 âŊ ",'callback_data'=>"Telegram=Obuna=598=37"]],
    [['text'=>"á´Éĸ â­ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 15 â¯ - 83.00 âŊ ",'callback_data'=>"Telegram=Obuna=709=83"]],
    [['text'=>" á´Éĸ â­ī¸ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ ĐąĐĩĐˇ ŅĐŋĐ¸ŅĐ°ĐŊĐ¸Đš - 60.00 âŊ ",'callback_data'=>"Telegram=Obuna=700=60"]],
        [['text'=>"á´Éĸ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ ŅĐ¸Đŧ đēđ¸ ĐĄĐ¨Đ / đŦđ§ ĐĐŊĐŗĐģĐ¸Ņ â¯ - 27.00 âŊ ",'callback_data'=>"Telegram=Obuna=695=27"]],
                [['text'=>"á´Éĸ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ / đēđ¸ ĐĄĐ¨Đ / đ¨đŗ ĐĐ¸ŅĐ°Đš - 22.00 âŊ",'callback_data'=>"Telegram=Obuna=995=22"]],
[['text'=>"á´Éĸ â­ đˇđē Đ ŅŅŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 47.00 âŊ",'callback_data'=>"Telegram=Obuna=994=47"]],
[['text'=>"á´Éĸ ĐĐĩĐ´ĐģĐĩĐŊĐŊŅĐĩ ĐąĐžŅŅ - 20.00 âŊ ",'callback_data'=>"Telegram=Obuna=926=20"]],
[['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐžĐ¸ŅĐēĐ° âŽ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ â¯ - 41.00 âŊ",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"á´Éĸ đēđ¸ Subscribers USA - 29.00 âŊ",'callback_data'=>"Telegram=Obuna=785=29"]],
[['text'=>"á´Éĸ đ¸đĻ ĐŅĐ°ĐąŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 46.00 âŊ",'callback_data'=>"Telegram=Obuna=332=46"]],
[['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐžĐ¸ŅĐēĐ° âŽ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ â¯ - 41.00 âŊ",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"á´Éĸ â­ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 15 â¯ - 82.00 âŊ",'callback_data'=>"Telegram=Obuna=709=82"]],
 [['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 30 â¯ - 128.00 âŊ",'callback_data'=>"Telegram=Obuna=830=128"]],
  [['text'=>" á´Éĸ đ°đŋ Subscribers (ĐĐ°ĐˇĐ°ŅŅŅĐ°ĐŊ) - 603.00 âŊ",'callback_data'=>"Telegram=Obuna=586=603"]],
    [['text'=>" á´Éĸ đēđĻ Subscribers ĐļĐ¸Đ˛ŅĐĩ âŽ ĐŖĐēŅĐ°Đ¸ĐŊĐ° â¯ - 603.00 âŊ ",'callback_data'=>"Telegram=Obuna=553=603"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Telegram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"á´Éĸ ĐĐžĐˇĐ¸ŅĐ¸Đ˛ĐŊŅĐĩ ŅĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ âŽ ĐŧĐ¸ĐēŅ đđ¤ŠđđĨâ¤ī¸ â¯ - 9.00 âŊ",'callback_data'=>"Telegram=REK=881=9"]],
[['text'=>"- á´Éĸ ĐĐĩĐŗĐ°ŅĐ¸Đ˛ĐŊŅĐĩ ŅĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ âŽ ĐŧĐ¸ĐēŅ đđđĸ??đ¤Ž â¯ - 9.00 âŊ",'callback_data'=>"Telegram=REK=882=9"]],
[['text'=>" á´Éĸ đĨ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ ",'callback_data'=>"Telegram=REK=871=8"]],
[['text'=>"á´Éĸ đ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=868=8"]],
[['text'=>"đ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=869=8"]],
[['text'=>"â¤ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ ",'callback_data'=>"Telegram=REK=870=8"]],
[['text'=>" á´Éĸ đ¤Ž Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=878=8"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Telegram
    $Instagram1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Instagram - Subscribers",'callback_data'=>"nakrutka=Instagram2"]],
      [['text'=>"Instagram - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"Instagram - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=Instagram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Instagram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ÉĒÉĸ Subscribers (ĐąĐžŅŅ) - 13.00 âŊ",'callback_data'=>"Instagram=Obuna=155=13"]],
[['text'=>"ÉĒÉĸ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 20.00 âŊ",'callback_data'=>"Instagram=Obuna=674=20"]],
[['text'=>"ÉĒÉĸ đĨ ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 32.00 âŊ",'callback_data'=>"Instagram=PM=627=32"]],
[['text'=>"ÉĒÉĸ Subscribers Mix - 36.00 âŊ",'callback_data'=>"Instagram=Obuna=128=36"]],
[['text'=>"ÉĒÉĸ â­ đˇđē Subscribers RU HQ - 47.00 âŊ",'callback_data'=>"Instagram=Obuna=3=47"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $Instagram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ÉĒÉĸ ĐĐ°ĐšĐēĐ¸ (ĐąĐžŅŅ) - 5.00 âŊ",'callback_data'=>"Instagram=Like=14=5"]],
[['text'=>"ÉĒÉĸ ĐĐ°ĐšĐēĐ¸ã ĐŊĐ° 10 ĐŋĐžŅĐģĐĩĐ´ĐŊĐ¸Ņ ĐŋĐžŅŅĐžĐ˛ ã - 15.00 âŊ",'callback_data'=>"Instagram=Like=582=15"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
      $Instagram5=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ÉĒÉĸ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ Đ˛Đ¸Đ´ĐĩĐž Ņ ĐžŅĐ˛Đ°ŅĐžĐŧ - 9.00 âŊ",'callback_data'=>"Instagram=PM=85=9"]],
    [['text'=>"ÉĒÉĸ ĐĐ˛ŅĐžĐžŅĐ˛Đ°Ņ - 7.00 âŊ",'callback_data'=>"Instagram=PM=88=7"]],
        [['text'=>"Éĸ ĐĐ˛ŅĐžŅĐžŅŅĐ°ĐŊĐĩĐŊĐ¸Ņ - 4.00 âŊ",'callback_data'=>"Instagram=PM=87=4"]],
          [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Instagram
  $TikTok1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"TikTok - Subscribers",'callback_data'=>"nakrutka=TikTok2"]],
      [['text'=>"TikTok - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=TikTok4"]],
        [['text'=>"TikTok - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=TikTok6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$TikTok3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"Subscribers - 27.00 âŊ",'callback_data'=>"TikTok=Obuna=247=27"]],
 /*   [['text'=>"âĢ Obunachi [O'rtacha]  17000 âŊ",'callback_data'=>"TikTok=Obuna=388=17000"]],
      [['text'=>"âĢ Obunachi [Chiqmaydigan] 22000 âŊ",'callback_data'=>"TikTok=Obuna=356=22000"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $TikTok7=json_encode([
  'inline_keyboard'=>[
   [['text'=>"ĐĐ°ĐšĐēĐ¸ - 50.00 âŊ",'callback_data'=>"TikTok=Like=430=50"]],
       /*   [['text'=>"â¤Like [O'rtacha] 25000 âŊ",'callback_data'=>"TikTok=Like=539=25000"]],*/
[['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $TikTok5=json_encode([
  'inline_keyboard'=>[
   [['text'=>"ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ - 6.00 âŊ",'callback_data'=>"TikTok=PM=55=6"]],
    [['text'=>"â­ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ - 11.00 âŊ",'callback_data'=>"TikTok=PM=382=11"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //TikTok
    $YouTube1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"YouTube - Subscribers",'callback_data'=>"nakrutka=YouTube2"]],
      [['text'=>"YouTube - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=YouTube4"]],
        [['text'=>"YouTube - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=YouTube6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $YouTube3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Ęá´ Subscribers (ĐąĐžŅŅ) - 98.00 âŊ",'callback_data'=>"YouTube=Obuna=5=98"]],
[['text'=>" Ęá´ đˇđē Đ ŅŅŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 868.00 âŊ",'callback_data'=>"YouTube=Obuna=630=868"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" Ęá´ ĐŅĐžŅĐŧĐžŅŅŅ - 29.00 âŊ",'callback_data'=>"YouTube=PM=514=29"]],
    [['text'=>"Ęá´ ĐŅĐžŅĐŧĐžŅŅŅ (ĐąŅŅŅŅŅĐĩ) - 35.00 âŊ",'callback_data'=>"YouTube=PM=39=35"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YouTube7=json_encode([
  'inline_keyboard'=>[
        [['text'=>"Ęá´ ĐĐ°ĐšĐēĐ¸ - 27.00 âŊ",'callback_data'=>"YouTube=Like=125=27"]],
                [['text'=>"Ęá´ ĐĐ°ĐšĐēĐ¸ âŽ âģ Ę 30 â¯ - 35.00 âŊ",'callback_data'=>"YouTube=Like=867=35"]],
                                [['text'=>"Ęá´ â­ ĐĐ¸ĐˇĐģĐ°ĐšĐēĐ¸ - 221.00 âŊ",'callback_data'=>"YouTube=Like=47=221"]],
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
  [['text'=>"ŌĘ Subscribers to profile - 58.00 âŊ",'callback_data'=>"Facebook=Obuna=899=58"]],
    [['text'=>"ŌĘ Subscribers to profile - 76.00 âŊ",'callback_data'=>"Facebook=Obuna=428=76"]],
      [['text'=>"ŌĘ ĐĐģĐ°Đ˛ĐŊŅĐĩ ĐģĐ°ĐšĐēĐ¸ + ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐ°ĐąĐģĐ¸Đē-ŅŅŅĐ°ĐŊĐ¸ŅŅ - 80.00 âŊ",'callback_data'=>"Facebook=Obuna=73=80"]],
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
    [['text'=>"â­ á´ á´ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 30 â¯ - 68.00 âŊ ",'callback_data'=>"VK=Obuna=1028=68"]],
        [['text'=>" á´ á´ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 87.00 âŊ",'callback_data'=>"VK=Obuna=34=87"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YT=json_encode([
  'inline_keyboard'=>[
    [['text'=>"đObunachi [Jivoy] 80000 âŊ",'callback_data'=>"YT=Obuna=152=80000"]],
    [['text'=>"â¤Like [Jivoy] 70000 âŊ",'callback_data'=>"YT=Like=491=70000"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$SP=json_encode([
  'inline_keyboard'=>[
  [['text'=>"đĨObunachi [Kafolatlangan] 6000 âŊ",'callback_data'=>"SP=Obuna=359=6000"]],
    [['text'=>"đObunachi[Pleylist] 10000 âŊ",'callback_data'=>"SP=Obuna=354=10000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $SH=json_encode([
  'inline_keyboard'=>[
  [['text'=>"đĨObunachi [Russia,Real] 17000 âŊ",'callback_data'=>"SH=Obuna=294=17000"]],
    [['text'=>"đ Ko'rish [video] 6000 âŊ",'callback_data'=>"SH=PM=276=6000"]],
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
    'text'=>"đ $ex  Đ˛ŅĐąĐĩŅĐ¸ŅĐĩ ŅĐžŅĐ¸Đ°ĐģŅĐŊŅŅ ŅĐĩŅŅ Đ´ĐģŅ ĐŊĐ°ĐēŅŅŅĐēĐ¸\nđ° ĐŅĐĩĐŊŅ ŅĐēĐ°ĐˇĐ°ĐŊŅ Đ˛ Đ°ĐēĐēĐ°ŅĐŊŅĐ°Ņ ĐŊĐ° 1000 ĐˇĐ°ĐēĐ°ĐˇĐžĐ˛..",
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
    'text'=>"ĐĄĐēĐžĐģŅĐēĐž ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐžĐ˛ Đ˛Ņ ŅĐžŅĐ¸ŅĐĩ ĐˇĐ°ĐēĐ°ĐˇĐ°ŅŅ?",
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
    'text'=>"$tarmoq ĐŋŅĐ¸ŅĐģĐ¸ŅĐĩ Đ˛Đ°ŅŅ ŅŅŅĐģĐēŅ (Đ´ĐžĐģĐļĐŊĐ° ĐąŅŅŅ https://)",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ĐĐ¸ĐŊĐ¸ĐŧĐ°ĐģŅĐŊŅĐš: $min ĐĐ°ĐēŅĐ¸ĐŧĐ°ĐģŅĐŊŅĐš: $max ĐĐ˛ĐĩĐ´Đ¸ŅĐĩ Đ´Đ¸Đ°ĐŋĐ°ĐˇĐžĐŊ ŅĐ¸ŅĐĩĐģ",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ĐŅŅŅŅ ŅŅĐž ĐąŅĐ´ĐĩŅ ĐŋŅĐžŅŅĐž ŅĐ¸ŅĐģĐž",
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
    $info=str_replace("$tarmoq","đ $tarmoq Đ´ĐģŅ ŅĐĩŅĐ¸ $son ĐˇĐ°ĐēĐ°ĐˇĐ°ŅŅ $rak âŊ ĐąŅĐ´ĐĩŅ ŅĐŋĐ¸ŅĐ°ĐŊĐž Ņ Đ˛Đ°ŅĐĩĐŗĐž ŅŅĐĩŅĐ° ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>â­ī¸ Đ ĐˇĐ°ĐēĐ°ĐˇĐĩ
đ ĐĄĐĩŅŅ: $tarmoq
đ¤ ĐĐžĐģĐ¸ŅĐĩŅŅĐ˛Đž: $son
đĸ ĐĄŅŅĐģĐēĐ°: $text

<b>đĸ$info đĸ</b>

âĐĐžĐļĐ°ĐģŅĐšŅŅĐ°, ĐŋŅĐžĐ˛ĐĩŅŅŅĐĩ, Đ˛ŅĐĩ ĐģĐ¸ Đ´Đ°ĐŊĐŊŅĐĩ Đ˛ĐĩŅĐŊŅ â ĐĐžĐ´ŅĐ˛ĐĩŅĐļĐ´ĐĩĐŊĐ¸Đĩ...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"â ĐĐžĐ´ŅĐ˛ĐĩŅĐļĐ´ĐĩĐŊĐ¸Đĩ",'callback_data'=>"tasdiq"],],
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
      'text'=>"<b>đ¸ ĐĐĩĐ´ĐžŅŅĐ°ŅĐžŅĐŊĐž ŅŅĐĩĐ´ŅŅĐ˛....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$menu,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>âšī¸ ŅŅŅĐģĐēĐ° ĐŊĐĩĐ˛ĐĩŅĐŊĐ°.... ĐĐžĐļĐ°ĐģŅĐšŅŅĐ°, ĐžŅĐŋŅĐ°Đ˛ŅŅĐĩ ĐŋĐžĐ˛ŅĐžŅĐŊĐž!</b>",
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
   'text'=>"<b>âī¸ ĐŅĐ¸ĐąĐēĐ°...
ĐĐ˛ĐĩĐ´Đ¸ŅĐĩ ŅĐ¸ŅŅŅ Đ´ĐģŅ ĐˇĐ°ĐēĐ°ĐˇĐ° ŅĐģĐĩĐ´ŅŅŅĐ¸Đŧ ĐžĐąŅĐ°ĐˇĐžĐŧ!đ</b>
<code>
1000
2000</code>",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}else{
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"â",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq","đ $tarmoq tarmog'i uchun $son buyurtmaga $rak âŊ hisobingizdan yechildiâ",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"
đ<b>ĐĐ°ĐēĐ°Đˇ ĐąŅĐģ ĐŋŅĐ¸ĐŊŅŅ!</b>
đ<b>ĐĐ°ĐēĐ°Đˇ ID: $order</b>
â<b>ĐĐ°ĐēĐ°Đˇ: Đ ŅĐžĐ´Đĩ Đ˛ŅĐŋĐžĐģĐŊĐĩĐŊĐ¸Ņ...</b>
đ<b>ĐĄĐĩŅŅ $tarmoq</b>
đĸ<b>ĐĐžĐģĐ¸ŅĐĩŅŅĐ˛Đž ĐˇĐ°ĐēĐ°ĐˇĐžĐ˛:</b> <b>$son</b>

<b>đĸ$info đĸ</b>",
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
[['text'=>"đēđŋ Telegram",'callback_data'=>"nakrutka=Telegram10"]],/*['text'=>"đ¸ Instagram",'callback_data'=>"nakrutka=Instagram"]],
[['text'=>"đļ  TikTok",'callback_data'=>"nakrutka=TikTok"],['text'=>"đŊ YouTube",'callback_data'=>"nakrutka=YouTube"]],
[['text'=>" đ Facebook",'callback_data'=>"nakrutka=Facebook"],['text'=>" đ  Vkontakte",'callback_data'=>"nakrutka=VK"]],
['text'=>" â­ Yandex-Then",'callback_data'=>"nakrutka=YT"]],
[['text'=>" đĩ Spotify",'callback_data'=>"nakrutka=SP"],['text'=>" đļ Odnoklassniki",'callback_data'=>"nakrutka=SH"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
    ]
    ]);
  
    $Telegram11=json_encode([
  'inline_keyboard'=>[
  [['text'=>" đēđŋ Telegram â Subscribers",'callback_data'=>"nakrutka=Telegram12"]],
/*   [['text'=>"Telegram - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=Telegram4"]],
    [['text'=>" Telegram - Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ",'callback_data'=>"nakrutka=Telegram6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  
  $Telegram130=json_encode([
  'inline_keyboard'=>[
  [['text'=>" á´Éĸ đ ĐĐĩŅĐŋĐģĐ°ŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 ĐŋĐžŅŅ - 0.20 âŊ",'callback_data'=>"Telegram=PM=602=0.20"]],
[['text'=>" á´Éĸ â­ ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 0.50 âŊ",'callback_data'=>"Telegram=PM=498=0.50"]],
[['text'=>"đĻđĒ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 6.00 âŊ",'callback_data'=>"Telegram=PM=791=6"]],
[['text'=>"đĻđĒ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 Đ´ĐĩĐŊŅ - 59.00 âŊ",'callback_data'=>"Telegram=PM=796=59"]],
[['text'=>"đēđŋ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ - 6.00 âŊ",'callback_data'=>"Telegram=PM=728=6"]],
  [['text'=>"đēđŋ ĐŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° ĐŋĐžŅŅ âŽ Đ´ĐģŅ ĐŋŅĐ¸Đ˛Đ°ŅĐŊŅŅ ĐēĐ°ĐŊĐ°ĐģĐžĐ˛ â¯ - 10.00 âŊ",'callback_data'=>"Telegram=PM=732=10"]],
  [['text'=>"đēđŋ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ ĐŊĐ° 1 Đ´ĐĩĐŊŅ - 59.00 âŊ",'callback_data'=>"Telegram=PM=733=59"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Telegram13=json_encode([
  'inline_keyboard'=>[
  [['text'=>"á´Éĸ đēđŋ ĐŖĐˇĐąĐĩĐēŅĐēĐ¸Đš Đ°ĐēŅĐ¸Đ˛ĐŊŅĐš ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸Đē - 145.00 âŊ ",'callback_data'=>"Telegram=Obuna=630=145"]],
    [['text'=>"á´Éĸ đēđŋ  ĐŖĐˇĐąĐĩĐēŅĐēĐ¸Đš Đ°ĐąĐžĐŊĐĩĐŊŅ [ĐĐĩĐŊŅĐ¸ĐŊŅ]- 146.00 âŊ ",'callback_data'=>"Telegram=Obuna=631=146"]],
    [['text'=>" á´Éĸ đēđŋ ĐŖĐˇĐąĐĩĐēŅĐēĐ¸Đš ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸Đē [ĐļĐĩĐŊŅĐ¸ĐŊŅ/ĐŧŅĐļŅĐ¸ĐŊŅ] ĐĐģŅ ĐŗŅŅĐŋĐŋŅ - 60.00 âŊ ",'callback_data'=>"Telegram=Obuna=806=150"]],
   /*  [['text'=>"á´Éĸ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ ŅĐ¸Đŧ đēđ¸ ĐĄĐ¨Đ / đŦđ§ ĐĐŊĐŗĐģĐ¸Ņ â¯ - 27.00 âŊ ",'callback_data'=>"Telegram=Obuna=695=27"]],*/
          /*      [['text'=>"á´Éĸ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ / đēđ¸ ĐĄĐ¨Đ / đ¨đŗ ĐĐ¸ŅĐ°Đš - 22.00 âŊ",'callback_data'=>"Telegram=Obuna=995=22"]],
[['text'=>"á´Éĸ â­ đˇđē Đ ŅŅŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 47.00 âŊ",'callback_data'=>"Telegram=Obuna=994=47"]],
[['text'=>"á´Éĸ ĐĐĩĐ´ĐģĐĩĐŊĐŊŅĐĩ ĐąĐžŅŅ - 20.00 âŊ ",'callback_data'=>"Telegram=Obuna=926=20"]],
[['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐžĐ¸ŅĐēĐ° âŽ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ â¯ - 41.00 âŊ",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"á´Éĸ đēđ¸ Subscribers USA - 29.00 âŊ",'callback_data'=>"Telegram=Obuna=785=29"]],
[['text'=>"á´Éĸ đ¸đĻ ĐŅĐ°ĐąŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 46.00 âŊ",'callback_data'=>"Telegram=Obuna=332=46"]],
[['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐžĐ¸ŅĐēĐ° âŽ ŅĐ¸Đŧ đŽđˇ ĐŅĐ°ĐŊ â¯ - 41.00 âŊ",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"á´Éĸ â­ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 15 â¯ - 82.00 âŊ",'callback_data'=>"Telegram=Obuna=709=82"]],
 [['text'=>"á´Éĸ â­ HQ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 30 â¯ - 128.00 âŊ",'callback_data'=>"Telegram=Obuna=830=128"]],
  [['text'=>" á´Éĸ đ°đŋ Subscribers (ĐĐ°ĐˇĐ°ŅŅŅĐ°ĐŊ) - 603.00 âŊ",'callback_data'=>"Telegram=Obuna=586=603"]],
    [['text'=>" á´Éĸ đēđĻ Subscribers ĐļĐ¸Đ˛ŅĐĩ âŽ ĐŖĐēŅĐ°Đ¸ĐŊĐ° â¯ - 603.00 âŊ ",'callback_data'=>"Telegram=Obuna=553=603"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Telegram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"á´Éĸ ĐĐžĐˇĐ¸ŅĐ¸Đ˛ĐŊŅĐĩ ŅĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ âŽ ĐŧĐ¸ĐēŅ đđ¤ŠđđĨâ¤ī¸ â¯ - 9.00 âŊ",'callback_data'=>"Telegram=REK=881=9"]],
[['text'=>"- á´Éĸ ĐĐĩĐŗĐ°ŅĐ¸Đ˛ĐŊŅĐĩ ŅĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ âŽ ĐŧĐ¸ĐēŅ đđđĸđŠđ¤Ž â¯ - 9.00 âŊ",'callback_data'=>"Telegram=REK=882=9"]],
[['text'=>" á´Éĸ đĨ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ ",'callback_data'=>"Telegram=REK=871=8"]],
[['text'=>"á´Éĸ đ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=868=8"]],
[['text'=>"đ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=869=8"]],
[['text'=>"â¤ Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ ",'callback_data'=>"Telegram=REK=870=8"]],
[['text'=>" á´Éĸ đ¤Ž Đ ĐĩĐ°ĐēŅĐ¸Đ¸ ĐŊĐ° ĐŋĐžŅŅ - 8.00 âŊ",'callback_data'=>"Telegram=REK=878=8"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Telegram
    $Instagram1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Instagram - Subscribers",'callback_data'=>"nakrutka=Instagram2"]],
      [['text'=>"Instagram - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"Instagram - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=Instagram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Instagram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ÉĒÉĸ Subscribers (ĐąĐžŅŅ) - 13.00 âŊ",'callback_data'=>"Instagram=Obuna=155=13"]],
[['text'=>"ÉĒÉĸ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 20.00 âŊ",'callback_data'=>"Instagram=Obuna=674=20"]],
[['text'=>"ÉĒÉĸ đĨ ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 32.00 âŊ",'callback_data'=>"Instagram=PM=627=32"]],
[['text'=>"ÉĒÉĸ Subscribers Mix - 36.00 âŊ",'callback_data'=>"Instagram=Obuna=128=36"]],
[['text'=>"ÉĒÉĸ â­ đˇđē Subscribers RU HQ - 47.00 âŊ",'callback_data'=>"Instagram=Obuna=3=47"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $Instagram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ÉĒÉĸ ĐĐ°ĐšĐēĐ¸ (ĐąĐžŅŅ) - 5.00 âŊ",'callback_data'=>"Instagram=Like=14=5"]],
[['text'=>"ÉĒÉĸ ĐĐ°ĐšĐēĐ¸ã ĐŊĐ° 10 ĐŋĐžŅĐģĐĩĐ´ĐŊĐ¸Ņ ĐŋĐžŅŅĐžĐ˛ ã - 15.00 âŊ",'callback_data'=>"Instagram=Like=582=15"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
      $Instagram5=json_encode([
  'inline_keyboard'=>[
    [['text'=>"ÉĒÉĸ ĐĐ˛ŅĐžĐŋŅĐžŅĐŧĐžŅŅŅ Đ˛Đ¸Đ´ĐĩĐž Ņ ĐžŅĐ˛Đ°ŅĐžĐŧ - 9.00 âŊ",'callback_data'=>"Instagram=PM=85=9"]],
    [['text'=>"ÉĒÉĸ ĐĐ˛ŅĐžĐžŅĐ˛Đ°Ņ - 7.00 âŊ",'callback_data'=>"Instagram=PM=88=7"]],
        [['text'=>"Éĸ ĐĐ˛ŅĐžŅĐžŅŅĐ°ĐŊĐĩĐŊĐ¸Ņ - 4.00 âŊ",'callback_data'=>"Instagram=PM=87=4"]],
          [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Instagram
  $TikTok1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"TikTok - Subscribers",'callback_data'=>"nakrutka=TikTok2"]],
      [['text'=>"TikTok - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=TikTok4"]],
        [['text'=>"TikTok - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=TikTok6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$TikTok3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"Subscribers - 27.00 âŊ",'callback_data'=>"TikTok=Obuna=247=27"]],
 /*   [['text'=>"âĢ Obunachi [O'rtacha]  17000 âŊ",'callback_data'=>"TikTok=Obuna=388=17000"]],
      [['text'=>"âĢ Obunachi [Chiqmaydigan] 22000 âŊ",'callback_data'=>"TikTok=Obuna=356=22000"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $TikTok7=json_encode([
  'inline_keyboard'=>[
   [['text'=>"ĐĐ°ĐšĐēĐ¸ - 50.00 âŊ",'callback_data'=>"TikTok=Like=430=50"]],
       /*   [['text'=>"â¤Like [O'rtacha] 25000 âŊ",'callback_data'=>"TikTok=Like=539=25000"]],*/
[['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $TikTok5=json_encode([
  'inline_keyboard'=>[
   [['text'=>"ĐĐžĐŧĐĩĐŊŅĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ - 6.00 âŊ",'callback_data'=>"TikTok=PM=55=6"]],
    [['text'=>"â­ Đ ĐĩĐ°ĐģŅĐŊŅĐĩ ĐŋŅĐžŅĐŧĐžŅŅŅ - 11.00 âŊ",'callback_data'=>"TikTok=PM=382=11"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //TikTok
    $YouTube1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"YouTube - Subscribers",'callback_data'=>"nakrutka=YouTube2"]],
      [['text'=>"YouTube - ĐŅĐžŅĐŧĐžŅŅŅ",'callback_data'=>"nakrutka=YouTube4"]],
        [['text'=>"YouTube - ĐĐ¸ĐēĐĩ",'callback_data'=>"nakrutka=YouTube6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $YouTube3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Ęá´ Subscribers (ĐąĐžŅŅ) - 98.00 âŊ",'callback_data'=>"YouTube=Obuna=5=98"]],
[['text'=>" Ęá´ đˇđē Đ ŅŅŅĐēĐ¸Đĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 868.00 âŊ",'callback_data'=>"YouTube=Obuna=630=868"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" Ęá´ ĐŅĐžŅĐŧĐžŅŅŅ - 29.00 âŊ",'callback_data'=>"YouTube=PM=514=29"]],
    [['text'=>"Ęá´ ĐŅĐžŅĐŧĐžŅŅŅ (ĐąŅŅŅŅŅĐĩ) - 35.00 âŊ",'callback_data'=>"YouTube=PM=39=35"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YouTube7=json_encode([
  'inline_keyboard'=>[
        [['text'=>"Ęá´ ĐĐ°ĐšĐēĐ¸ - 27.00 âŊ",'callback_data'=>"YouTube=Like=125=27"]],
                [['text'=>"Ęá´ ĐĐ°ĐšĐēĐ¸ âŽ âģ Ę 30 â¯ - 35.00 âŊ",'callback_data'=>"YouTube=Like=867=35"]],
                                [['text'=>"Ęá´ â­ ĐĐ¸ĐˇĐģĐ°ĐšĐēĐ¸ - 221.00 âŊ",'callback_data'=>"YouTube=Like=47=221"]],
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
  [['text'=>"ŌĘ Subscribers to profile - 58.00 âŊ",'callback_data'=>"Facebook=Obuna=899=58"]],
    [['text'=>"ŌĘ Subscribers to profile - 76.00 âŊ",'callback_data'=>"Facebook=Obuna=428=76"]],
      [['text'=>"ŌĘ ĐĐģĐ°Đ˛ĐŊŅĐĩ ĐģĐ°ĐšĐēĐ¸ + ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ Đ´ĐģŅ ĐŋĐ°ĐąĐģĐ¸Đē-ŅŅŅĐ°ĐŊĐ¸ŅŅ - 80.00 âŊ",'callback_data'=>"Facebook=Obuna=73=80"]],
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
    [['text'=>"â­ á´ á´ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ âŽ âģ Ę 30 â¯ - 68.00 âŊ ",'callback_data'=>"VK=Obuna=1028=68"]],
        [['text'=>" á´ á´ ĐŅŅŅŅŅĐĩ ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐ¸ - 87.00 âŊ",'callback_data'=>"VK=Obuna=34=87"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YT=json_encode([
  'inline_keyboard'=>[
    [['text'=>"đObunachi [Jivoy] 80000 âŊ",'callback_data'=>"YT=Obuna=152=80000"]],
    [['text'=>"â¤Like [Jivoy] 70000 âŊ",'callback_data'=>"YT=Like=491=70000"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$SP=json_encode([
  'inline_keyboard'=>[
  [['text'=>"đĨObunachi [Kafolatlangan] 6000 âŊ",'callback_data'=>"SP=Obuna=359=6000"]],
    [['text'=>"đObunachi[Pleylist] 10000 âŊ",'callback_data'=>"SP=Obuna=354=10000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $SH=json_encode([
  'inline_keyboard'=>[
  [['text'=>"đĨObunachi [Russia,Real] 17000 âŊ",'callback_data'=>"SH=Obuna=294=17000"]],
    [['text'=>"đ Ko'rish [video] 6000 âŊ",'callback_data'=>"SH=PM=276=6000"]],
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
    'text'=>"đ $ex  Đ˛ŅĐąĐĩŅĐ¸ŅĐĩ ŅĐžŅĐ¸Đ°ĐģŅĐŊŅŅ ŅĐĩŅŅ Đ´ĐģŅ ĐŊĐ°ĐēŅŅŅĐēĐ¸\nđ° ĐŅĐĩĐŊŅ ŅĐēĐ°ĐˇĐ°ĐŊŅ Đ˛ Đ°ĐēĐēĐ°ŅĐŊŅĐ°Ņ ĐŊĐ° 1000 ĐˇĐ°ĐēĐ°ĐˇĐžĐ˛..",
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
    'text'=>"ĐĄĐēĐžĐģŅĐēĐž ĐŋĐžĐ´ĐŋĐ¸ŅŅĐ¸ĐēĐžĐ˛ Đ˛Ņ ŅĐžŅĐ¸ŅĐĩ ĐˇĐ°ĐēĐ°ĐˇĐ°ŅŅ?",
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
    'text'=>"$tarmoq ĐŋŅĐ¸ŅĐģĐ¸ŅĐĩ Đ˛Đ°ŅŅ ŅŅŅĐģĐēŅ (Đ´ĐžĐģĐļĐŊĐ° ĐąŅŅŅ https://)",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ĐĐ¸ĐŊĐ¸ĐŧĐ°ĐģŅĐŊŅĐš: $min ĐĐ°ĐēŅĐ¸ĐŧĐ°ĐģŅĐŊŅĐš: $max ĐĐ˛ĐĩĐ´Đ¸ŅĐĩ Đ´Đ¸Đ°ĐŋĐ°ĐˇĐžĐŊ ŅĐ¸ŅĐĩĐģ",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ĐŅŅŅŅ ŅŅĐž ĐąŅĐ´ĐĩŅ ĐŋŅĐžŅŅĐž ŅĐ¸ŅĐģĐž",
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
    $info=str_replace("$tarmoq","đ $tarmoq Đ´ĐģŅ ŅĐĩŅĐ¸ $son ĐˇĐ°ĐēĐ°ĐˇĐ°ŅŅ $rak âŊ ĐąŅĐ´ĐĩŅ ŅĐŋĐ¸ŅĐ°ĐŊĐž Ņ Đ˛Đ°ŅĐĩĐŗĐž ŅŅĐĩŅĐ° ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>â­ī¸ Đ ĐˇĐ°ĐēĐ°ĐˇĐĩ
đ ĐĄĐĩŅŅ: $tarmoq
đ¤ ĐĐžĐģĐ¸ŅĐĩŅŅĐ˛Đž: $son
đĸ ĐĄŅŅĐģĐēĐ°: $text

<b>đĸ$info đĸ</b>

âĐĐžĐļĐ°ĐģŅĐšŅŅĐ°, ĐŋŅĐžĐ˛ĐĩŅŅŅĐĩ, Đ˛ŅĐĩ ĐģĐ¸ Đ´Đ°ĐŊĐŊŅĐĩ Đ˛ĐĩŅĐŊŅ â ĐĐžĐ´ŅĐ˛ĐĩŅĐļĐ´ĐĩĐŊĐ¸Đĩ...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"â ĐĐžĐ´ŅĐ˛ĐĩŅĐļĐ´ĐĩĐŊĐ¸Đĩ",'callback_data'=>"tasdiq"],],
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
      'text'=>"<b>đ¸ ĐĐĩĐ´ĐžŅŅĐ°ŅĐžŅĐŊĐž ŅŅĐĩĐ´ŅŅĐ˛....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$menu,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>âšī¸ ŅŅŅĐģĐēĐ° ĐŊĐĩĐ˛ĐĩŅĐŊĐ°.... ĐĐžĐļĐ°ĐģŅĐšŅŅĐ°, ĐžŅĐŋŅĐ°Đ˛ŅŅĐĩ ĐŋĐžĐ˛ŅĐžŅĐŊĐž!</b>",
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
   'text'=>"<b>âī¸ ĐŅĐ¸ĐąĐēĐ°...
ĐĐ˛ĐĩĐ´Đ¸ŅĐĩ ŅĐ¸ŅŅŅ Đ´ĐģŅ ĐˇĐ°ĐēĐ°ĐˇĐ° ŅĐģĐĩĐ´ŅŅŅĐ¸Đŧ ĐžĐąŅĐ°ĐˇĐžĐŧ!đ</b>
<code>
1000
2000</code>",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}else{
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"â",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq","đ $tarmoq tarmog'i uchun $son buyurtmaga $rak âŊ hisobingizdan yechildiâ",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"
đ<b>ĐĐ°ĐēĐ°Đˇ ĐąŅĐģ ĐŋŅĐ¸ĐŊŅŅ!</b>
đ<b>ĐĐ°ĐēĐ°Đˇ ID: $order</b>
â<b>ĐĐ°ĐēĐ°Đˇ: Đ ŅĐžĐ´Đĩ Đ˛ŅĐŋĐžĐģĐŊĐĩĐŊĐ¸Ņ...</b>
đ<b>ĐĄĐĩŅŅ $tarmoq</b>
đĸ<b>ĐĐžĐģĐ¸ŅĐĩŅŅĐ˛Đž ĐˇĐ°ĐēĐ°ĐˇĐžĐ˛:</b> <b>$son</b>

<b>đĸ$info đĸ</b>",
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
    'text'=>"<b>đ ĐŅĐąĐĩŅĐ¸ŅĐĩ ŅĐžŅĐ¸Đ°ĐģŅĐŊŅŅ ŅĐĩŅŅ Đ´ĐģŅ ĐŊĐ°ĐēŅŅŅĐēĐ¸</b>",
'parse_mode'=>"HTML",
    'reply_markup'=>$nakrutka,
    ]);
}



  
  if($text=="đēđŋ ĐŖĐˇĐąĐĩĐēŅĐēĐ¸Đš Đ°ĐąĐžĐŊĐĩĐŊŅ"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"đ ĐŅĐąĐĩŅĐ¸ŅĐĩ ŅĐžŅĐ¸Đ°ĐģŅĐŊŅŅ ŅĐĩŅŅ Đ´ĐģŅ ĐŊĐ°ĐēŅŅŅĐēĐ¸.",
    'reply_markup'=>$nakrutka2,
    ]);
}
if($text=="â­ī¸ ĐĄĐžŅĐ¸Đ°ĐģŅĐŊŅĐĩ ŅĐĩŅĐ¸"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"đ ĐŅĐąĐĩŅĐ¸ŅĐĩ ŅĐžŅĐ¸Đ°ĐģŅĐŊŅŅ ŅĐĩŅŅ Đ´ĐģŅ ĐŊĐ°ĐēŅŅŅĐēĐ¸.",
    'reply_markup'=>$nakrutka,
    ]);
}
  

//////kutamiz
  if($text == "đ°Balans"){
    $balans = file_get_contents("pul/$cid.txt");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>đ¤ $firstname\nâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗ \nđ¤Hisobingizda $balans âŊ Mavjud.\n
âŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗâŗ</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$olish,
]);
}


if($text=="đĒAPI Balans" and $chat_id==$admin){
$api_balance = json_decode(file_get_contents("https://partner.soc-proof.su/api/v2?key=$chanel_3&action=balance"),true);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizning API Balansingizda
".$api_balance['balance']." Rubl",
'reply_markup'=>$panel,
]);
}
if($text=="đĒAPI Balans [Uzbek obunachi uchun]" and $chat_id==$admin){
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
if($text == "đĸ Kanal qoĘģshish"  and $cid == $admin){
file_put_contents("step/$cid.step","kanal_add");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>đĄKanal qoâshish uchun kanal havolasini yuboring!
đ°Masalan: @VipKons</b>",
'parse_mode'=>'html',
'reply_markup'=>$bosh,
]);
}

if($step == "kanal_add" and $text!="đ Boshqaruv"){
if(joinchat($cid,$text,$panel)=="1"){
if(mb_stripos($kanal,"$text")!==false){
}else{
file_put_contents("kanal.txt","$kanal\n$text");
unlink("step/$id.step");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>đĄKanalingiz botga muvaffaqiyatli qoâshildi!
đ¤Endi botni kanalingizga admin qiling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
}
}

if($text == "đĸ Kanalni oĘģchirish"){
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
<b>đĄKanalni oĘģchirish uchun kanalni tanlang

đJami kanallar soni: $soni ta
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
'text'=>"<b>đ°$k2 muvaffaqiyatli oĘģchirildi!â</b>",
'parse_mode'=>'html',
]);
del($callcid,$callmid);
}
}


if($text=="đ°Sotib Olish"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>đĩ Qanday to'lov usulida Rubl sotib olmoqchisiz?
Karta, Paynet va qiwi orqali toĘģlovlar qilish tavsiya etiladi.
[1 âŊ = 110 soĘģm] [10 âŊ = 110 soĘģm]
QiWi orqali 
[1 âŊ = 1 âŊ] [10 âŊ = 10 âŊ]</b>
<b>Karta orqali:</b> <code>Lichkada</code>
<b>QiWi orqali:</b> <code>Lichkada</code>
<b>Paynet orqali:</b> <code>Lichkada</code>
<b>Tolov amalga oshiring va adminga murojaat qiling</b>",
'parse_mode'=>'html',
'reply_markup'=>$olish,
    ]);
}

if($text=="âī¸"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*đ° Bizga savollaringiz yoki muammolaringiz bo'lsa, iltimos, bizning qo'llab-quvvatlash jamoamiz bilan bog'laning.
Admin: @$adminuser*",
'parse_mode'=>'markdown',
    ]);
}
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"đUserga Xabar"],['text'=>"đUserga Forward"]],
[['text'=>"âPul berish"],['text'=>"âPul ayirish"]],
[['text'=>"đĒAPI Balans"],['text'=>"â¤ī¸Api Sozlash"],['text'=>"đStatistika"]],
[['text'=>"đ° Minimal buyurtmani"],['text'=>"/start"]],
[['text'=>"đĒAPI Balans [Uzbek obunachi uchun]"]],
[['text'=>"â¤ī¸Api Sozlash [Uzbek obunachi uchun]"]],
]
]);

$okstat=file_get_contents("status/$cid.status");
if($text=="đ My orders"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"ĐĐ˛ĐĩĐ´Đ¸ŅĐĩ Đ¸Đ´ĐĩĐŊŅĐ¸ŅĐ¸ĐēĐ°ŅĐ¸ĐžĐŊĐŊŅĐš ĐŊĐžĐŧĐĩŅ ĐˇĐ°ĐēĐ°ĐˇĐ°",
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
ĐĄŅĐ°ŅŅŅ ĐˇĐ°ĐēĐ°ĐˇĐ°: ".$orderstat['status']."
ĐĐžĐģĐ¸ŅĐĩŅŅĐ˛Đž ĐˇĐ°ĐēĐ°ĐˇĐ°: ".$orderstat['remains']."",
]);unlink("status/$cid.status");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>" ĐĐĩŅ Đ˛ ĐŊĐ°ĐģĐ¸ŅĐ¸Đ¸" ,
]);
unlink("status/$cid.status");
}
}
}




mkdir("stat");
if($tx == "đ  Sozlash" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"<i>Majburiy aâzolik kanallarini sozlash uchun pastagi tugmalar orqali kanalingizni ulang.</i>

<b>Eslatma:</b> <i>Majburiy aâzolikga kiritilgan kanallaringizda ushbu botingiz admin boâlishi kerak aks holda bot ishlamaydi.</i>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"1âŖ - Kanal"],['text'=>"2âŖ - Kanal"]],
    ]
    ])
    ]);
    }
     $step = file_get_contents("stat/$cid.step");
   if($tx=="1âŖ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>eâtibor bering kanalingiz useriga @ belgisini</b> qoâshmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_1");
} 
if($tx=="đ° Minimal buyurtmani" and $cid==$admin){ 
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
'text'=>"<i>$tx ga oâzgartirildi.</i>", 
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
'text'=>"<i>Sizning birinchi kanalingiz @$tx ga oâzgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($tx=="2âŖ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>2-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>eâtibor bering kanalingiz useriga @ belgisini</b> qoâshmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_2");
} 
 
if($step=="chanel_2" and $cid==$admin){ 
file_put_contents("stat/chanel_2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning ikkinchi kanalingiz @$tx ga oâzgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="â¤ī¸Api Sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz https://partner.soc-proof.su</b> âŧī¸.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_3");
} 

if($step=="chanel_3" and $cid==$admin){ 
file_put_contents("stat/chanel_3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga oâzgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="â¤ī¸Api Sozlash [Uzbek obunachi uchun]" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz https://topsmm.uz</b> âŧī¸.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_22");
} 

if($step=="chanel_22" and $cid==$admin){ 
file_put_contents("stat/chanel_22.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga oâzgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}




if($text == "/panel" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Assalamu alaykum <a href='tg://user?id=$uid'>Admin</a></b>\n\n<i>Kerakli boĘģlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}


if($text=="đStatistika" && $cid==$admin){
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
    $text = "đ <b>TOP 5 ta eng koĘģp pul ishlagan foydalanuvchilar:</b>\n\n";
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
     
if($text == "đUserga Xabar" and $cid == $admin){
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
     

if($text == "đUserga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"â *Userlarga forward qilinadigan xabarni kiriting!
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
'text'=>"â Xabar yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("step/$cid.step");
}
}
}

if($text=="đ° Balance"){

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
đ˛ ĐĐ°Ņ ĐąĐ°ĐģĐ°ĐŊŅ: $hisob âŊ
đˇ ĐĐ°Ņ id: <code>$cid</code>
",
'parse_mode'=>"HTML",
'reply_markup'=>$pay,
])->result->message_id;

}
$dost = file_get_contents("pul/$cid.ref");
$hisob  = file_get_contents("pul/$chat_id.txt");
if($text=="đ¤ Referral system"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"âĐĐ°ŅŅĐŊŅŅŅĐēĐ°Ņ ĐŋŅĐžĐŗŅĐ°ĐŧĐŧĐ°

ĐĐ°ŅŅ Đ˛ĐžĐˇĐŧĐžĐļĐŊĐžŅŅŅ ŅĐžŅĐžŅĐž ĐˇĐ°ŅĐ°ĐąĐžŅĐ°ŅŅ, Ņ ĐēĐ°ĐļĐ´ĐžĐŗĐž ĐŋĐžŅĐĩĐŊŅĐ¸Đ°ĐģŅĐŊĐžĐŗĐž ĐēĐģĐ¸ĐĩĐŊŅĐ°.ĐŅĐĩ ŅĐ¸ŅŅĐž Đ¸ ĐŋŅĐžĐˇŅĐ°ŅĐŊĐž.ĐŅĐģĐ¸ Đ˛Đ°Ņ ŅĐĩŅĐĩŅĐ°Đģ ĐŋĐžĐŋĐžĐģĐŊĐ¸Ņ ĐąĐ°ĐģĐ°ĐŊŅ ĐžŅ 1000 ŅŅĐą, ŅĐž Đ˛Ņ ĐŋĐžĐģŅŅĐ¸ŅĐĩ 50 ŅŅĐą.

ĐĐ°ŅĐ¸ ĐŋŅĐ¸ĐŗĐģĐ°ŅŅĐŊĐŊŅĐĩ:

ĐŅĐ¸ĐŗĐģĐ°ŅĐĩĐŊĐž Đ˛ŅĐĩĐŗĐž: $dost 
ĐĐ°ŅĐ°ĐąĐžŅĐ°ĐŊĐž Ņ ŅĐĩŅĐĩŅĐ°ĐģĐžĐ˛: 0.25 âŊ
ĐĐ°ŅĐ° ĐŋĐ°ŅŅĐŊŅŅŅĐēĐ°Ņ ŅŅŅĐģĐēĐ°: 
https://t.me/$botname?start=$cid
",
'reply_markup'=>$pay,
])->result->message_id;
}

if($data=="card"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>âŦĐĐŋĐģĐ°ŅĐ¸ŅĐĩ ĐŊĐ° ĐŊĐžĐŧĐĩŅ ĐēĐ°ŅŅŅ ĐŊĐ¸ĐļĐĩ Đ¸ ĐŊĐ°ĐŋĐ¸ŅĐ¸ŅĐĩ Đ°Đ´ĐŧĐ¸ĐŊĐ¸ŅŅŅĐ°ŅĐžŅŅ</b>

đŗ KĐ°ŅŅĐ°: <code>ĐĐ°ŅŅĐ° ĐŊĐžĐŧĐĩŅ</code>
đ¸ ĐĐ¸ĐŊĐ¸ĐŧĐ°ĐģŅĐŊŅĐš ĐŋĐģĐ°ŅĐĩĐļ: 10 âŊ

<b>đ ĐŅŅŅ ŅŅĐąĐģŅ ĐŊĐ° ĐąĐžŅĐĩ: 1 âŊ - ŅŅĐŧ Đ˛ ĐˇĐ°Đ˛Đ¸ŅĐ¸ĐŧĐžŅŅĐ¸ ĐžŅ ĐēŅŅŅĐ°</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"đ§âđģ ĐĸĐĩŅĐŊĐ¸ŅĐĩŅĐēĐ°Ņ ĐŋĐžĐ´Đ´ĐĩŅĐļĐēĐ°",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($data=="qiwi"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b> ĐĐ°ŅĐ¸ Đ´ĐĩĐŊŅĐŗĐ¸, ĐžŅĐŋŅĐ°Đ˛ĐģĐĩĐŊĐŊŅĐĩ ŅĐĩŅĐĩĐˇ ĐŋĐģĐ°ŅĐĩĐļĐŊŅŅ ŅĐ¸ŅŅĐĩĐŧŅ đĨ QIWI, ĐˇĐ° ŅŅĐ¸ŅĐ°ĐŊĐŊŅĐĩ ĐŧĐ¸ĐŊŅŅŅ
 ĐąŅĐ´ŅŅ Đ°Đ˛ŅĐžĐŧĐ°ŅĐ¸ŅĐĩŅĐēĐ¸ ĐˇĐ°ŅĐ¸ŅĐģĐĩĐŊŅ ĐŊĐ° Đ˛Đ°Ņ ŅŅĐĩŅ.</b>

đŗ QIWI: <code>QIWI  ĐŊĐžĐŧĐĩŅ</code>
đ ĐŅĐ¸ĐŧĐĩŅĐ°ĐŊĐ¸Đĩ: <code>$callcid</code>

<b>ĐĐŊĐ¸ĐŧĐ°ĐŊĐ¸Đĩ!  ĐŅĐģĐ¸ Đ˛Ņ ĐˇĐ°ĐąŅĐ´ĐĩŅĐĩ Đ˛Đ˛ĐĩŅŅĐ¸ ĐēĐžĐŧĐŧĐĩĐŊŅĐ°ŅĐ¸Đš Đ¸ĐģĐ¸ Đ˛Đ˛ĐĩĐ´ĐĩŅĐĩ ĐĩĐŗĐž ĐŊĐĩĐŋŅĐ°Đ˛Đ¸ĐģŅĐŊĐž, Đ˛Đ°Ņ Đ°ĐēĐēĐ°ŅĐŊŅ ĐŊĐĩ ĐąŅĐ´ĐĩŅ ĐˇĐ°ŅĐ¸ŅĐģĐĩĐŊ!
 Đ ŅĐ°ĐēĐ¸Ņ ŅĐģŅŅĐ°ŅŅ Đ˛Ņ ĐŧĐžĐļĐĩŅĐĩ ŅĐ˛ŅĐˇĐ°ŅŅŅŅ Ņ ĐŊĐ°ĐŧĐ¸.</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"đ§âđģ ĐĸĐĩŅĐŊĐ¸ŅĐĩŅĐēĐ°Ņ ĐŋĐžĐ´Đ´ĐĩŅĐļĐēĐ°",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($text=="Back"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"ĐŅĐŧĐĩĐŊĐĩĐŊĐž!",
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
if($text=="âšī¸ info"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname - ŅĐŊĐ¸ĐēĐ°ĐģŅĐŊŅĐš ŅĐĩŅĐ˛Đ¸Ņ Đ´ĐģŅ ĐĄĐĐ

ĐĐ°ŅĐ¸ ĐŋŅĐĩĐ¸ĐŧŅŅĐĩŅŅĐ˛Đ°:
âī¸ ĐĐ¸ĐˇĐēĐ¸Đĩ ŅĐĩĐŊŅ
âī¸ ĐĐžĐģĐŊĐ°Ņ Đ°Đ˛ŅĐžĐŧĐ°ŅĐ¸ĐˇĐ°ŅĐ¸Ņ
âī¸ ĐŅŅŅŅĐžŅĐ° Đ¸ ŅĐ´ĐžĐąŅŅĐ˛Đž
âī¸ Đ Đ°ĐˇĐŊĐžĐžĐąŅĐ°ĐˇĐ¸Đĩ ŅĐĩŅĐ˛Đ¸ŅĐžĐ˛ Đ¸ ŅŅŅĐ°ĐŊ
âī¸ ĐĐ°ŅŅĐŊŅŅŅĐēĐ°Ņ ĐŋŅĐžĐŗŅĐ°ĐŧĐŧĐ°
âī¸ ĐĐžŅŅĐžŅĐŊĐŊŅĐĩ ĐžĐąĐŊĐžĐ˛ĐģĐĩĐŊĐ¸Ņ
âī¸ ĐŅĐˇŅĐ˛ŅĐ¸Đ˛Đ°Ņ ĐŋĐžĐ´Đ´ĐĩŅĐļĐēĐ°",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"đ¨âđģ ĐĸĐĩŅĐŋĐžĐ´Đ´ĐĩŅĐļĐēĐ° / ĐĐ´ĐŧĐ¸ĐŊĐ¸ŅŅŅĐ°ŅĐžŅ","url"=>"https://t.me/$adminuser"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]]),])->result->message_id;}
$dost = file_get_contents("pul/$cid.ref");
if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
ĐĐ°ŅŅĐŊŅŅŅĐēĐ°Ņ ĐŋŅĐžĐŗŅĐ°ĐŧĐŧĐ°

ĐĐ°ŅŅ Đ˛ĐžĐˇĐŧĐžĐļĐŊĐžŅŅŅ ŅĐžŅĐžŅĐž ĐˇĐ°ŅĐ°ĐąĐžŅĐ°ŅŅ, Ņ ĐēĐ°ĐļĐ´ĐžĐŗĐž ĐŋĐžŅĐĩĐŊŅĐ¸Đ°ĐģŅĐŊĐžĐŗĐž ĐēĐģĐ¸ĐĩĐŊŅĐ°.ĐŅĐĩ ŅĐ¸ŅŅĐž Đ¸ ĐŋŅĐžĐˇŅĐ°ŅĐŊĐž.ĐŅĐģĐ¸ Đ˛Đ°Ņ ŅĐĩŅĐĩŅĐ°Đģ ĐŋĐžĐŋĐžĐģĐŊĐ¸Ņ ĐąĐ°ĐģĐ°ĐŊŅ ĐžŅ 1000ŅŅĐą, ŅĐž Đ˛Ņ ĐŋĐžĐģŅŅĐ¸ŅĐĩ 50ŅŅĐą.

ĐĐ°ŅĐ¸ ĐŋŅĐ¸ĐŗĐģĐ°ŅŅĐŊĐŊŅĐĩ:

ĐŅĐ¸ĐŗĐģĐ°ŅĐĩĐŊĐž Đ˛ŅĐĩĐŗĐž: $dost
ĐĐ°ŅĐ°ĐąĐžŅĐ°ĐŊĐž Ņ ŅĐĩŅĐĩŅĐ°ĐģĐžĐ˛: 0.25 âŊ
ĐĐ°ŅĐ° ĐŋĐ°ŅŅĐŊŅŅŅĐēĐ°Ņ ŅŅŅĐģĐēĐ°: 
https://t.me/$botname?start=$callcid",
]);
}


if($data=="buy"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
đĩ ĐĐ°ĐēĐ¸Đŧ ŅĐŋĐžŅĐžĐąĐžĐŧ ĐžĐŋĐģĐ°ŅŅ Đ˛Ņ ŅĐžŅĐ¸ŅĐĩ ĐŋĐžĐŋĐžĐģĐŊĐ¸ŅŅ ŅĐ˛ĐžĐš ŅŅĐĩŅ?
 Đ Đ°ŅĐŋĐģĐ°ŅĐ¸Đ˛Đ°ŅŅŅŅ ŅĐĩĐēĐžĐŧĐĩĐŊĐ´ŅĐĩŅŅŅ ĐēĐ°ŅŅĐžĐš Đ¸ ĐēĐ¸Đ˛Đ¸.
 đ ĐŅĐąĐĩŅĐ¸ŅĐĩ Đ¸Đˇ ĐēĐŊĐžĐŋĐžĐē:",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"đ´ ĐĄ ĐēĐ°ŅŅĐžĐš",'callback_data'=>"card"],['text'=>"đĨ QIWI",'callback_data'=>"qiwi"]],
]
]),
]);
}                            



$ss=file_get_contents("admin.txt");
if($text=="âPul berish" and $cid==$admin){
file_put_contents("admin.txt","coin");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobini nechi pulga toĘģldirmoqchisiz:",
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
đ° Sizning hisobingiz admin tomonidan $summa âŊga toĘģldirildi!

Hozirgi hisobingiz: $jami rubl",
]);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"â Foydalanuvchi balansi toĘģldirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}
////////
$ss=file_get_contents("admin.txt");
if($text=="âPul ayirish" and $cid==$admin){
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
đ° Sizning hisobingizdan admin tomonidan $summa pul ayirildi!

Hozirgi hisobingiz: $jami âŊ",
]);
}
if($okminus){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"â Foydalanuvchi balansidan $summa âŊ ayirildi!",
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
