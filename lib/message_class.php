<?php
  
  require_once "globalmessages_class.php";
  
  class Message extends GlobalMessage {
    public function __construct($file) {
        parent::__construct("messages");
    }
  }
  
?>
