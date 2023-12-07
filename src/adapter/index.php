<?php

class Facebook{
    public function postToWall($msg){
        echo "Posting message...";
    }
}

interface SocialMediaAdapter{
    public function post($msg);
}

class FacebookAdapter implements SocialMediaAdapter{
    private $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post($msg){ //Adapt to DI object method
        $this->facebook->postToWall($msg);
    }
}


$facebook = new FacebookAdapter(new Facebook);

$msg = "my message";

$facebook->post($msg);
