<?php
    abstract class Country
    {
        protected $slogan;
        abstract public function sayHello();
        abstract public function setSlogan($slogan);
    }
    interface Boss
    {
        public function checkVaildSlogan();
    }
    trait Active{
        public function defindYourSelf(){
            return get_class($this);
        }
    }
    class EnglandCountry extends Country implements Boss
    {
        use Active;
        public function sayHello()
        {
            echo "Hello";
        }
        public function checkVaildSlogan()
        {
            $string = " " . $this->slogan;
            $check1 = stripos($string, "england");
            $check2 = stripos($string, "english");
            if ($check1 || $check2) {
                return true;
            } else {
                return false;
            }
        }
        public function setSlogan($slogan)
        {
            $this->slogan = $slogan;
        }
    }
    class VietNamCountry extends Country implements Boss
    {
        use Active;
        public function sayHello()
        {
            echo "Xin chao";
        }
        public function checkVaildSlogan()
        {
            $string = " " . $this->slogan;
            $check1 = stripos($string, 'vietnam');
            $check2 = stripos($string, 'hust');
            if ($check1 && $check2) {
                return true;
            } else {
                return false;
            }
        }
        public function setSlogan($slogan)
        {
            $this->slogan = $slogan;
        }
    }
    $englandCountry = new EnglandCountry();
    $vietnamCountry = new VietNamCountry();
    $englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');
    $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');
    $englandCountry->sayHello(); // Hello
    echo "<br>";
    $vietnamCountry->sayHello(); // Xin chao

    echo "<br>";

    var_dump($englandCountry->checkVaildSlogan()); // true
    echo "<br>";
    var_dump($vietnamCountry->checkVaildSlogan()); // false
    echo "<br>";
    echo 'I am ' . $englandCountry->defindYourSelf(); 
    echo "<br>";
    echo 'I am ' . $vietnamCountry->defindYourSelf();

 ?>
