<?php
$con = mysqli_connect("94.73.151.157","u8530102_user1","DidemFiliz123","u8530102_sndlbai");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["iletisimkayit"])){
	        $iletiekle=mysqli_query($con, "insert into iletisim (adsoyad, email, konu, mesaj) values ('".$_POST['name']."', '".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')");
			if($iletiekle){ /*veritabaın aekleme işlemi başarılı olduysa*/
                  header("Location:http://www.soundlabai.com/contact.php");
			}
}
if(isset($_POST["iletisimkayit1"])){
	        $iletiekle=mysqli_query($con, "insert into iletisim (adsoyad, email, konu, mesaj) values ('".$_POST['name']."', '".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')");
			if($iletiekle){ /*veritabaın aekleme işlemi başarılı olduysa*/
                  header("Location:http://www.soundlabai.com/contact1.php");
			}
}
mysqli_close($con);
?>