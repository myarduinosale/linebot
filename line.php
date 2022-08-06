 <?php
  

function send_LINE($msg){
 $access_token = 'NPF/yheHyxCUHSjcoFbRPRr7x+B3D6+AFsLvKMmaRYdT9UWCLI6s0ZDMchkGCSmXjW/KuHeYjv7LnqTWrdsidJ0Y/K0fHi+8+01HXZlPH6mEmd+I+n2yJ0f8lM4lYTniHQEU38PSzD7tPWfpT3sAMwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '@339czacw',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
