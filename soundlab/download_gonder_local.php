<?php 

// require_once 'VerifyEmail.class.php'; 

// Initialize library class
/*$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= TRUE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('email1@localhost');

// Email to check
$email = $_POST['mailiniz1']; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
} 
*/
function saveData(){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		$html = "<script>console.log('PHP: ".$sql."');</script>";

    	echo($html);	
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO urun1 (name, email)
	VALUES ( '" . $_POST['adsoyad1'] . "' , '" . $_POST['mailiniz1'] ."' )";

	$html = "<script>console.log('PHP: ".$sql."');</script>";

    echo($html);	

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

	if(isset($_POST['adsoyad1'])){
	//download beginning
	saveData();
	if(isset($_POST['adsoyad1'])){
 
	 $filename = "DNNtoCPPclass (1).zip";

	 if (file_exists($filename)) {
	  header('Content-Type: application/zip');
	  header('Content-Disposition: attachment; filename="'.basename($filename).'"');
	  header('Content-Length: ' . filesize($filename));

	  //flush();
	  readfile($filename);
	 }
	 else{
		 echo " Dosya Bulunamadi !"; 
		}
	}

	// download end


	$to = "email1@localhost"; // this is your Email address
	$from = $_POST['mailiniz1']; // this is the sender's Email address
	$first_name = $_POST['adsoyad1'];
	$last_name = $_POST['konu1'];
	$subject = "Form submission";
	$subject2 = "Copy of your form submission";
	$message = $first_name . " " . $last_name . " downloaded from download page and wrote the following:" . "\n\n" . $_POST['mesaj1'];
	$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['mesaj1'];

	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	// You cannot use header and echo together. It's one or the other.
	
	$website = "http://localhost/soundlab/download.php";
	header("refresh:3; url=" . $website); 
	exit();
}


?>