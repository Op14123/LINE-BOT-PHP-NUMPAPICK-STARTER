 <?php
  

function send_LINE($msg){
 $access_token = '/373QFb2comN8NNSoSv0+PzP2LwKumU3RcCLUw5ItmR3jb/8PskpgtshtKGaIUXG9+pubSJNVDYIA/JCeNLnNU0PAkbJEr4PGFU5GMnaXE8AARt4dm7GcWuJJgYycDXQiv+JI8FaStMOSD8amPjwuwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7770bb8208549967593ced764fc4dad7=',
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
