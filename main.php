<?php
class discordWebhooks{
    private $webhookUrl;
    private $botName;
    private $avatar = 'data:image/png;base64,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';

    public function __construct($webhookUrl,$botName,$avatar){
        $this->webhookUrl = $webhookUrl;
        $this->botName = $botName;
        $this->avatar = $avatar;
    }

    public function sendMessage($message){
        if($this->botName != ""){
            $url = $this->webhookUrl;
            $headers = [ 'Content-Type: application/json; charset=utf-8' ];
            $POST = [ 'username' => $this->botName, 'content' => $message, 'avatar_url' => $this->avatar];
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
            $response   = curl_exec($ch);
        }else{
            $url = $this->webhookUrl;
            $headers = [ 'Content-Type: application/json; charset=utf-8' ];
            $POST = ['content' => $message ];
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
            $response   = curl_exec($ch);
        }
    }
}
