<?php
/**
 * Created by PhpStorm.
 * User: rytis
 * Date: 2018-08-28
 * Time: 19:26
 */

class a {
    public $x = 5;
   //final function fnc (){  draudzia paveldejima
       function fnc (){
        echo ' labas';
    }
    protected $u = 15;
}
$o = new a(); var_dump($o);

class b extends a {
    public $x = 10;
    public $y = 10;
    function fnc (){
        echo 'rytas';
    }
    function printu(){
        print ($this->u);
    }
}
$o = new b(); var_dump($o);

$o->fnc();
$o->printu();
//echo $o->u; negalima prieiti (is isores) protected savybes bet galima ja paveldet ir naudoti
echo $o->x;