<?php

require_once 'iCookie.php';

/**
 * Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор функций:
 * сохранение куки, удаление куки, считывание куки. Используйте ассоциативный массив $_COOKIE;
 */
class Cookie implements iCookie
{
	
    public $Cookie = array();

    public function getCookie($key){
      return $this->Cookie;
    }

    public function setCookie($key, $value) {
       return $this->Cookie;
    }

    public function deleteCookie($key) {
    	unset($this->Cookie[$key]);
    }

}

$cookie = new Cookie();
echo $cookie-> getCookie($key);
echo $cookie-> setCookie($key, $value);
echo $cookie-> deleteCookie($key);