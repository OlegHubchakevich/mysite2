<?php
  
  require_once "global_class.php";
  
  //Реалізація класу для таблиці з користувачами
  class User extends GlobalClass {
    public function __construct($db) {
        parent::__construct("users", $db);
    }
  
  //Метод, для додавання нового користувача в базу
  public function addUser ($login, $password, $regdate) {
    if (!$this -> checkValid($login, $password, $regdate)) {return false;}
    return $this -> add(array("login" => $login, "password" => $password, "regdate" => $regdate));
  }
  
  //Метод, для редагування даних користувача
  public function editUser ($id, $login, $password, $regdate) {
    if (!$this -> checkValid($login, $password, $regdate)) {return false;}
    return $this -> edit($id, array("login" => $login, "password" => $password, "regdate" => $regdate));
  }
  
  //Метод, для перевірки логіна користувача на наявність
  public function isExists ($login) {
    return $this -> isExists("login", $login);
  }
  
  //Метод, для отримання всіх даних користувача по логіну
  public function getUserOnLogin ($login) {
    $id = $this -> getField("id", "login", $login);
    return $this -> get($id);
  }
  
  //Метод для перевірки даних користувача на коректність
  private function checkValid ($login, $password, $regdate) {
    if (!$this -> valid -> validLogin($login)) {return false;}
    if (!$this -> valid -> validHash($password)) {return false;}
    if (!$this -> valid -> validTimeStamp($regdate)) {return false;}
    return true;
  }
 }
?>