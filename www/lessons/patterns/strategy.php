<?php

// Создаём интерфейс
interface IUser {

    function getName();
}

// выбор пользователя из базы
class UserDb implements IUser {

    public function __construct($id) {
        
    }

    public function getName() {
        return "User from database /strategy/";
    }

}

// выбор пользователя из файла
class UserFile implements IUser {

    public function __construct($id) {
        
    }

    public function getName() {
        return "User from filebase /strategy/";
    }

}

class UserStrategy {

    public function getName($id) {
        if ($id > 1000)
            $obj = new UserDb($id);
        else
            $obj = new UserFile($id);

        return $obj->getName();
    }

}

$uo = new UserStrategy();
echo $uo->getName(2000) . '<br />';
echo $uo->getName(500) . '<br />';

/*
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
*/
?>