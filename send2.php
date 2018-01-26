<?php

//Get POST body content 
// $content = file_get_contents('php://input');
// //Parse JSON 
// $events = json_decode($content,true);

//$title = $events['payload']['title']


// $message = $events['payload']['title']
$message = "มันทรมานในหัวเอยยยยยยย หัวใจจจจจจ";
$token = 'VG10VkKCRJ2Gy3BFEb6TNJKAvNa8arkXvFLeWjSIzyy';


// echo send_line_notify($message, $token);

// function send_line_notify($message, $token)
// {
//   $ch = curl_init();
//   curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
//   curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
//   curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
//   curl_setopt( $ch, CURLOPT_POST, 1);
//   curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
//   curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
//   $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//   curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
//   $result = curl_exec( $ch );
//   curl_close( $ch );

//   return $result;
// }

$url = 'https://notify-api.line.me/api/notify';
$data = ['message' => $message];
$headers = [
    'Accept: */*',
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer VG10VkKCRJ2Gy3BFEb6TNJKAvNa8arkXvFLeWjSIzyy'
];
// open connection
$ch = curl_init();
// set curl options
$options = [
    CURLOPT_URL => $url,
    CURLOPT_POST => count($data),
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => 1,
];
curl_setopt_array($ch, $options);
// execute
$result = curl_exec($ch);
// close connection
curl_close($ch);
echo $result;

?>
