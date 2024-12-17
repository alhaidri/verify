<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // استبدل "YOUR_BOT_TOKEN" بـ Token الخاص بالبוט
    // استبدل "YOUR_CHAT_ID" بـ chat_id الخاص بك
    $botToken = "7508723720:AAGCMF0DE_cwv2q3f2yCZqaT9BPbC7ZjoiQ";
    $chatID = "5577992839";

    // إعداد الرسالة التي سيتم إرسالها
    $message = "اسم المستخدم: $name\nرقم الهاتف: $phone";

    // إرسال الطلب إلى Telegram API
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message);
    file_get_contents($url); // إرسال الطلب

    // إعادة توجيه المستخدم إلى صفحة تأكيد أو تقديم رد
    echo "تم إرسال البيانات بنجاح!";
}
?>
