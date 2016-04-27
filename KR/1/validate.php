<?php
//1. Сделайте класс-валидатор $_REQUEST, $_GET, $_POST. Класс должен иметь private методы обрезание пробелов
// trimData. Класс должен иметь public свойства request, post, get, в которых хранятся
// соответствующие обработанные массивы. Обработка должна происходить при инициализации класса (то есть в __construct).

class Validate {

    private $_data;
    public $request = array();
    public $post = array();
    public $get = array();

    public function __construct($data, $request, $post, $get){
        $this->setData($data);
        $this->request = $request;
        $this->post = $post;
        $this->get = $get;
    }

    
    
    public function setData($data) {
        $this->_data = $this->_Trim($data);
    }

    public function getData() {
        return $this->_data;
    }

    private function TrimData($data){
        return trim($data);
    }

    public function Trim(){
        $this->TrimData();
    }

}



