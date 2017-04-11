<?php

// Создаем интерфейс
interface IUser {

    function getName();
}

// выбор пользователя из базы
class UserDb implements IUser {

    public function __construct($id) {
        
    }

    public function getName() {
        return "User from database /factory/";
    }

}

// выбор пользователя из файла
class UserFile implements IUser {

    public function __construct($id) {
        
    }

    public function getName() {
        return "User from filebase /factory/";
    }

}

class UserFactory {

    public static function Create($id) {
        if ($id > 1000)
            return new UserDb($id);
        else
            return new UserFile($id);
    }

}

$uo = UserFactory::Create(2000);
echo $uo->getName() . '<br />';
$uo = UserFactory::Create(500);
echo $uo->getName() . '<br />';
?>