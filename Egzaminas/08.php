<?php


class person {
    public $name, $surname, $age;

    function __construct($nam, $sur, $a)
    {
        $this->name=$nam;
        $this->surname=$sur;
        $this->age=$a;
    }
}
