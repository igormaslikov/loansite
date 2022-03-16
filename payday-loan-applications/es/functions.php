<?php 

function send_email_notification($to_email,$subject,$message){
    $headers = 'From: support@mymoneyline.com';
    mail($to_email,$subject,$message,$headers);
    
}


function admin_email_notification($admin_subject,$admin_message){
    $admin_headers = 'From: support@mymoneyline.com';
    $admin_email = "support@mymoneyline.com";
    mail($admin_email,$admin_subject,$admin_message,$admin_headers);
    
}


function admin_leads_email_notification($admin_subject,$admin_message){
    $admin_headers = 'From: support@mymoneyline.com';
    $admin_email = "leads@mymoneyline.com";
    mail($admin_email,$admin_subject,$admin_message,$admin_headers);
    
}


function send_sms($phone_number,$message){
    
 $message = str_replace("nnll",'\n',$message);    
 //echo $message;
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sms-magic.com/v1/sms/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTPPROXYTUNNEL => TRUE,
  CURLOPT_SSL_VERIFYPEER => FALSE,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n\"sms_text\": \"$message\",\r\n\"sender_id\": \"76054\",\r\n\"source\": \"18335210068\",\r\n\"mobile_number\": \"$phone_number\"\r\n\r\n}",
  CURLOPT_HTTPHEADER => array(
    "apikey: 2b731c8cdf8713eae8e30ae382eb43a3",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 39676d49-3e38-2535-44e6-3a481f4b0808"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "Response Error : cURL Error #:" . $err;
} else {
 // echo "Response : ".$response."<hr>";
}     
    
}


?>