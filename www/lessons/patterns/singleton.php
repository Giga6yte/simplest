<?php

class single {

// внутренний массив значений класса
    private $props = [];

// экзэмпляр самого себя
    private static $_instance;

// защищает класс от new
    private function __construct() {
        
    }

// защищает класс от клонирования
    private function __clone() {
        
    }

// защищает класс от unserialize
    private function __wakeup() {
        
    }

// получаем объект
    public static function getInstance() {
        if (empty(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

// можем установить значения
    public function setProperty($key, $val) {
        $this->props[$key] = $val;
    }

// можем получить значения
    public function getProperty($key) {
        return $this->props[$key];
    }

// любой публичный метод класса
    public function methodName() {
        
    }

}

// Пример боевого класса
class Db {

// переменная, в которой будет храниться наше подключение базе
    private $_conn;

// переменная для хранения нашего класса-одиночки
    private static $_instance;

// защищаем создание класса через new
    private function __construct() {
// производим первое подключение к БД
//        $conn_string = 'mysql:host=localhost;dbname=db_name;charset=utf8';
//        $this->_conn = new PDO($conn_string,'user','password');
    }

// защищает класс от клонирования
    private function __clone() {
        
    }

// защищает класс от unserialize
    private function __wakeup() {
        
    }

    public static function getInstance() {
        if (empty(self::$_instance)) {
// то, что конструктор указан как private запрещает создавать через внешний доступ, внутри класса можно
            self::$_instance = new self();
        }
        return $_instance;
    }

    public function query($sql) {
// выполняем запрос и взвращаем результат
//        $result = $this->_conn->query($sql);
//        return result->fetchAll(PDO::FETCH_ASSOC);
    }

}

// В качестве примера наследования
class Table extends Db {

    private $tableName;

    function __construct($name) {
        $this->tableName = $name;
    }

    function getData() {
//        return $this->query('select ...' . $this->tableName);
    }

}

class Security extends Db {

    function __construct() {
        
    }

    public function getSecurity() {
//        return $this->query('sql query');
    }

}

// 1. Вызов класса single

// выдаст ошибку
// $var = new single();

$pp = single::getInstance();
$pp->setProperty('variable', 12);
echo 'From "pp" = ' . $pp->getProperty('variable') . '<br />';

$zz = single::getInstance();
echo 'From "zz" = ' . $zz->getProperty('variable') . '<br />';
// end 1.

// 2. Вызов класса Db

// выдаст ошибку!!
//$dbase = new Db();

$dbase = Db::getInstance();
//$result = $dbase->query('select * from ....');
// end 2.

// 3. Вызов наследованных классов

// мы эти два класса уже можем создавать чере new неограниченное число раз
$tab1 = new Table('tabname');
$result = $tab1->getData();

$tab2 = new Table('tabname2');
$result = $tab2->getData();

$sec1 = new Security();
$sec1->getSecurity();

// но во всех классах будет идти ссылка на один и тот же объёкт одиночки (Singleton)
// end 3.
?>