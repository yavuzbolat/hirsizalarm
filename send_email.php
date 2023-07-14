<?php
// Form verilerini al
$name = $_POST['name'];
$phone = $_POST['phone'];
$source = $_POST['source'];
$city = $_POST['city'];

// E-posta gönderme işlemlerini gerçekleştir
$to = 'info@netelsan.com.tr';
$subject = 'Yeni İletişim Formu Gönderildi';
$message = "İsim: " . $name . "\n";
$message .= "Telefon: " . $phone . "\n";
$message .= "Ulaşım Kaynağı: " . $source . "\n";
$message .= "Şehir: " . $city . "\n";

$headers = "From: info@example.com\r\n";
$headers .= "Reply-To: info@example.com\r\n";

// E-postayı gönder
$mailSent = mail($to, $subject, $message, $headers);

// E-posta gönderme durumunu kontrol et
if ($mailSent) {
    http_response_code(200); // Başarılı yanıt kodu
} else {
    http_response_code(500); // Sunucu hatası yanıt kodu
}
?>
