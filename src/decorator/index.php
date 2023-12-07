<?php

// Component
interface Logger{
    public function log($msg);
}

// Concrete component
class FileLogger implements Logger{
    public function log($msg)
    {
        echo "<p>Logging to a file: {$msg} from <b>FILE LOGGER</b></p>";
    }
}

// Decorator
abstract class LoggerDecorator implements Logger{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log($msg){
        $this->logger->log($msg);
    }
}

// Email logger
class EmailLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo "<p>Logging to <b>EMAIL</b>: {$msg} </p>";
    } 
}

class FaxLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo "<p>Logging to <b>FAX</b>: {$msg} </p>";
    } 
}

// TextMessage logger

// Print Logger

// Fax Logger

$log = new FileLogger();
$log = new EmailLogger($log);
$log = new FaxLogger($log);
$log->log("Saving file");