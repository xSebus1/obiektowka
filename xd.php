<?php

    interface wiek{
        public function age($age);
    }

    abstract class Animal {
        protected $name;
    
        public function __construct($name) {
            $this->name = $name;
        }
    
        abstract public function speak();

        public function describe() {
            return "Twoje zwierze to ". $name;
        }
    }

    class Dog extends Animal implements wiek{
        private $age;

        public function __construct($name, $age) {
            parent::__construct($name);
            $this->age = $age;
        }

        public function speak() {
            return $this->name. " cos mówi";
        }

        public function age($age) {
            return "Wiek twojego zwierzaka". $this->age;
        }

    }

    $rect = new Dog("pies");
    echo $rect->speak();
?>
