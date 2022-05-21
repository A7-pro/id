<?php 
error_reporting(0); 
ob_start(); 
$API_KEY = '5257326336:AAG00i57oUkG5E3G04BwzQG5nhyPubVtkCc'; 
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']; 
define('API_KEY',$API_KEY); 
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
 $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$user = $update->message->from->username;
$last_name = $update->message->from->last_name;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$user_id = $update->message->from->user_id;
$time = time() + (979 * 11 + 1 + 30);
$username = $message->from->username;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;

$admin = "1308174302";
$fwd = $message->forward_from_chat->id;
$new_member = $update->message->new_chat_member; 
$left = $update->message->left_chat_member; 
$textmsg = $message->text;
$message_id = $message->message_id;
$rep = $message->reply_to_message; 
$rep_msg = $rep->message_id; 
$id_sudo = 201230149;
$get = file_get_contents('file.txt');
$ex = explode("\n", $get);
$count = count($ex);
$type = $update->message->chat->type;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;

$re_msgid = $update->message->reply_to_message->message_id;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->message->message_id;
$id = $message->from->id;
$name = $update->message->from->first_name;
$update = json_decode(file_get_contents('php://input')); 
$message = $update->message; 
$chat_id = $message->chat->id; 
$text = $message->text; 
$admin = 201230149; 
$user = $update->message->from->username;
$name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$user_id = $update->message->from->user_id;
$bio = $get->bio;
$sudo = 201230149;
$get = explode("\n", file_get_contents('memberbot.txt'));
if($text == '/start' and !in_array($chat_id, $get)){
file_put_contents('memberbot.txt',"\n" . $chat_id, FILE_APPEND);
}


$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@M1_m2s&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
 •┈┈┈•❈••✦✾✦••❈•┈┈┈•

❤️• مرحباا بك عزيزي $name

⚠️• البوت لم يعمل الا بعد اشتراكك في قناة المطور

🛠• معرف القناة/ @mwote

✅• اشترك ثم ارسل /start
 •┈┈┈•❈••✦✾✦••❈•┈┈┈•


",

]);return false;}if ($text == '/start') { 
  bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"مرحبا بك [".$message->from->first_name."](tg://user?id=$chat_id) في بوت معلوماتي  - ", 
    'parse_mode'=>'markdown', 
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[ 
        [['text'=>'• قناتنا 💯 -','url'=>'t.me/mwote']] 
      ] 
    ]) 
  ]); 
}  
if($text == '/start'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'⚠️| اهـــلا بـــك هـــذه قائـــمة الاوامـــر👇🏾', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🆔¦ ايــدي •'],['text'=>'♐️¦ معلوماتك •']
], 
[ 
['text'=>'💖¦ اسمـك1⃣ •'],['text'=>'💓¦ اسمــك2⃣ •'] 
], 
[ 
['text'=>'💯¦ معرفــــك•'],['text'=>'⚠️¦ المساعده •']
], 
[ 
['text'=>'☑️¦ المــــــطور•']
], 
[ 
['text'=>'📈¦ قناة المطــــــور•'] 
], 
] 
]) 
]); 
}

if($text == "🆔¦ ايــدي •"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي

•┈┈┈•❈••✦✾✦••❈•┈┈┈•
         
         
        
          الايدي الخاص بك| $from_id



•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}


if($text == "💖¦ اسمـك1⃣ •"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


                   اسمك| $name


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}

if($text == "💯¦ معرفــــك•"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


          المعرف الخاص بك:- @$user


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);

if($text == "💓¦ اسمــك2⃣ •"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


          الاسم2⃣:- $last_name


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}
if($text == "♐️¦ معلوماتك •"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي معلوماتك هيه👇🏾
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
               
 اسمك1⃣| $name
             
 اسمك2⃣| $last_name
               
معرفك🔡|@$user
                
ايديك🆔| $from_id

•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}
if($text == "⚠️¦ المساعده •"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "اهلا عزيزي في قسم المساعده
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
 
 ✅ - فقط اضغط على. القسم اللي تبيه

🛠 - اذا لديك مشكلة في البوت يمكنك التواصل مع المطور

📌للتواصل:- @mwote.    
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
"
]);
}

if($text == "☑️¦ المــــــطور•"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "
•┈┈┈•❈••✦✾✦••❈•┈┈┈•

DEV:- @kmhhh

CH:- @mwote

 •┈┈┈•❈••✦✾✦••❈•┈┈┈•
"
]);
}
if($text == "📈¦ قناة المطــــــور•"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "
•┈┈┈•❈••✦✾✦••❈•┈┈┈•

📈¦ قناة المطــــــور:- https://t.me/mwote

 •┈┈┈•❈••✦✾✦••❈•┈┈┈•
"
]);
}
$sudo = 201230149;
$t =$message->chat->title; 
$user = $message->from->username; 
if($text == "/start") {
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
 ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
ℓ⚠️- مرحباا مطوري دخل شخص جديد الي 📳

ℓ🔱- بيانات الشخص هي ⬇️;

ℓ🔘- أسم العضو :- $name 

ℓ🔘- معرف العضو :- @$user 
•┈┈┈•❈••✦✾✦••❈•┈┈┈•",
]);
}
if($text == '/dev' and $from_id == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'⚠️| اهـــلا مطوري اليك الاوامر👇🏾', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🆔¦ ايــدي'],['text'=>'♐️¦ معلوماتك']
], 
[ 
['text'=>'💖¦ اسمـك1⃣'],['text'=>'💓¦ اسمــك2⃣'] 
], 
[ 
['text'=>'💯¦ معرفــــك'],['text'=>'⚠️¦ المساعده']
], 
[ 
], 
[ 
], 
[ 
['text'=>'🗣¦ اذاعه•'],['text'=>'👥¦ عدد المشتركين•']
]
] 
]) 
]); 
}

if($text == "🆔¦ ايــدي"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي

•┈┈┈•❈••✦✾✦••❈•┈┈┈•
         
         
        
          الايدي الخاص بك| $from_id



•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}


if($text == "💖¦ اسمـك1⃣"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


                   اسمك| $name


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}

if($text == "💯¦ معرفــــك"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


          المعرف الخاص بك:- @$user


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}
if($text == "💓¦ اسمــك2⃣"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي
•┈┈┈•❈••✦✾✦••❈•┈┈┈•


          الاسم2⃣:- $last_name


•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}
if($text == "♐️¦ معلوماتك"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا عزيزي معلوماتك هيه👇🏾
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
               
 اسمك1⃣| $name
             
 اسمك2⃣| $last_name
               
معرفك🔡|@$user
                
ايديك🆔| $from_id

•┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}
if($text == "⚠️¦ المساعده"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "اهلا عزيزي في قسم المساعده
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
 
 ✅ - فقط اضغط علـّۓ. القسم الذي تريده

🛠 - أإأذأإأ لديك مشڱلھِ في البوت يمكنك التواصل مع المطور

📌للتواصل:- @mwote.    
•┈┈┈•❈••✦✾✦••❈•┈┈┈•
"
]);
}
if($text == '👥¦ عدد المشتركين•' and $id == $sudo){
 $count = count($get);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'text'=>"عدد المشتركين  : $count",
  ]);
  }

$bc = explode("/bc", $text);
if($bc and $id == $sudo){
for($y=0;$y<count($get); $y++){
bot('sendMessage', [
'chat_id'=>$get[$y],
'text'=>"$bc[1]",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "🗣¦ اذاعه•"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "❤️| اهلا مطوري

     •┈┈┈•❈••✦✾✦••❈•┈┈┈•
         
  - استخدم الامر:- /bc للاذاعه

- استخدم الامر:-  [اضغط هناا للدخول الى قناة المطور](t.me/mwote) للاذاعه المارك
        
    •┈┈┈•❈••✦✾✦••❈•┈┈┈•"
]);
}