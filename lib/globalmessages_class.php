<?php

   require_once "config_class.php";
   
   //Реалізація класу для виводу системних повідомлень
   abstract class GlobalMessage {
    
    private $data;
    
    public function __construct ($file) {
        $config = new Config();
        $this -> data = parse_ini_file($config -> dir_text.$file.".ini");
    }
    
    //Метод, для отримання заголовку повідомлення
    public function getTitle($name) {
        return $this -> data[$name."_TITLE"];
    }
    
    //Метод, для отримання тексту повідомлення
     public function getText($name) {
        return $this -> data[$name."_TEXT"];
    }
   }
?>

