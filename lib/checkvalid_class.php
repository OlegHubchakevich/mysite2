<?php
    require_once "config_class.php";
  
  //Реалізація класу для перевірки даних
  class CheckValid {
	  
	  private $config;
	  
	  public function __construct() {
		  $this -> config = new Config();
	  }
	  
	  //Метод для перевірки коректності id
	  public function validID($id) {
                  if (!$this -> isIntNumber($id)) {return false;}
                  if ($id <= 0) {return false;}
		  return true;
	  }
	  
	  //Метод, для перевірки логіна на коректність
	  public function validLogin ($login) {
            if ($this -> isContainQuotes($login)) {return false;}
            if (preg_match("/^\d*$/", $login)) {return false;}
	    return $this -> validString($login, $this -> config -> min_login, $this -> config -> max_login);
	  }
	  
	  //Метод, для перевірки пароля на коректність
	  public function validHash ($hash) {
            if (!$this -> validString($hash, 32, 32)) {return false;}
            if (!$this -> isOnlyLettersAndDigits($hash)) {return false;}
	    return true;
	  }
	  
	  //Метод, для перевірки дати реєстраці на коректність
	  public function validTimeStamp ($time) {
	    return $this -> isNoNegativeInteger($time);
	  }
	  
	  
	  //Реалізація допоміжного методу для перевірки на коректне число
	  private function isIntNumber($number) {
                  if (!is_int($number) && !is_string($number)) {return false;}
                  if (!preg_match("/^-?(([1-9][0-9]*|0))$/", $number)) {return false;}
		  return true;
	  }
	  
	  //Метод, для перевірки на від`ємне число
	  private function isNoNegativeInteger ($number) {
            if (!$this -> isIntNumber($number)) {return false;}
            if ($number < 0) {return false;}
	    return true;
	  }
	  
	  //Метод, для перевірки на наявність в строці тільки букв або цифр (для перевірки хеш-коду пароля)
	  private function isOnlyLetterAndDigits ($string) {
            if (!is_int($string) && (!is_string($string))) {return false;}
            if (!preg_match("/[a-zа-я0-9]*/i", $string)) {return false;}
	    return true;
	  }
	  
	  //Метод, для перевірки строки на коректність і чи це взагалі строка
	  private function validString ($string, $min_length, $max_length) {
            if (!is_string($string)) {return false;}
            if (strlen($string) < $min_length) {return false;}
            if (strlen($string) < $max_length) {return false;}
	    return true;
	  }
	  
	  //Метод, для перевірки на нявність лапок (для фільтрації даних)
	  public function isContainQuotes ($string) {
	    $array = array ("\"", "'", "`", "&quot;", "&apos;");
	    foreach ($array as $key => $value) {
                if (strpos($string, $value) !== false) {return true;}
	    }
	    return false;
	  }
	  
  }
?>

