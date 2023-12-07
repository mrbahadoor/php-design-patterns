<?php

// Connects to some database

class Database {
    public function getData($id){
        echo "Fetching data..<br/>";
    }
}


// Generates Html templates
class Template{
    private $id;
    private $data;

    public function __construct($id, $data)
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function serve(){

    }
}

// Logging
class Logger{

    public function log($msg){

    }
}

// Creates a page logs activity
class PageFacade{
    public function createAndServe($id, $msg = ""){
        $db = new Database();
        $data = $db->getData($id);

        $template = new Template($id, $data);
        $template->serve();

        $logger = new Logger();
        $logger->log($msg);
    }
}

$id = $_GET['id'];

$page = new PageFacade();
$page->createAndServe($id, "Serving page for id {$id}");