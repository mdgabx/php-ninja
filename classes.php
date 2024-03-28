<?php

    // classes

    class User {

        public $email;
        public $name;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function login () {
            echo $this->name . ' is logged in';
        }
    }

    $userOne = new User('Test', 'hello@wolr..dom');
    $userOne->login();

?>