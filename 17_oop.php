<?php

class User {
    public $name;
    public $email;
    public $password;


    // public function __construct() {
    //     echo 'constructor ran';
    // }

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }



    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    public function getInfoUser($email='') {
        if(!empty($email)) {
            $this->email = $email;
        }
        return $this->get_name().' '.$this->email;
    }
}

$user1 = new User('Dariia', 'dariia@gmail.com', '34333');
$user2 = new User('Mike', 'mike@gmail.com', '54564');

echo $user1->getInfoUser('mike@gmail.com');

// echo $user1->email;
// echo $user2->name;

// $user1->name = 'Dariia';

// $user1->set_name('Dariia');
// $user2->set_name('Mike');


// var_dump($user2);
// echo $user1->get_name();
// echo $user2->get_name();

class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Iryna', 'iryna@gmail.com', '24344', 'Manager');

// echo $employee1->get_title();

echo '<br>';
echo $employee1->getInfoUser();