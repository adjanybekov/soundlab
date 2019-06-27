<title>Posta Gönderme Sonuç Raporu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz
$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
$mail->From     = $_POST["mailiniz1"];//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
$mail->Sender   = $_POST["mailiniz1"];//"admin@localhost";//Gönderen Mail adresi
//$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->AddReplyTo=($_POST["mailiniz1"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->FromName = $_POST["adsoyad1"];//"PHP Mailer";//gönderenin ismi
$mail->Host     = "mail.soundlabai.com";//"localhost"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
$mail->Port     = 587; //Natro SMPT Mail Portu
$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
$mail->Username = "info@soundlabai.com";//"admin@localhost"; //SMTP kullanici adi
$mail->Password = "OFni86";//""; //SMTP mailinizin sifresi
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
$mail->Subject  = $_POST["konu1"];//"Deneme Maili"; // Mailin Konusu Konu
//Mailimizin gövdesi: (HTML ile)
$body  = "						"."Mail İçeriği Başlığı"."<br><br>";
$body .= "Gönderen Adi		: ".$_POST["adsoyad1"]."<br>";
$body .= "E-posta Adresi	: ".$_POST["mailiniz1"]."<br>";
$body .= "Konu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["konu1"]."<br>";
$body .= "Mesaj&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["mesaj1"]."<br>";


//  $body = $_POST["mesaj"];//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
// HTML okuyamayan mail okuyucularda görünecek düz metin:
$textBody = $body;//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
$mail->Body = $body;
$mail->AltBody = $text_body;
$mail->ClearAddresses();
$mail->ClearAttachments();
$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
$mail->addCC('mailadi@alanadiniz.site');// cc email adresi
$mail->addBCC('mailadi@alanadiniz.site');// bcc email adresi
$mail->AddAddress("info@soundlabai.com"); // Mail gönderilecek adresleri ekliyoruz.
$mail->AddAddress("ddmflz96@gmail.com"); // Mail gönderilecek adresleri ekliyoruz. Birden fazla ekleme yapılabilir.
$mail->Send();
$mail->ClearAddresses();
$mail->ClearAttachments();
if ($mail->Send()) echo "İletiniz gönderildimiştir.";
else echo "Form göndermede hata oldu! Daha sonra tekrar deneyiniz.";


?>