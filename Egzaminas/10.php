<?php


class numberList
{
    public $numbers = [];

    function add($number)
    {
        $this->numbers[] = $number;
    }

    function average()
    {
        $s = 0;
        foreach($this->numbers as $e){
            $s += $e;
        }
        return round ($s / count($this->numbers), 2);
    }
}
$o = new numberList();
$o->add(5);
$o->add(77);
echo $o->average();