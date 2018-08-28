<?php
/**

 */

class asmuo {
    public $vardas, $pavarde;
    function __construct($v, $p){
        $this->vardas = $v;
        $this->pavarde = $p;
    }
    function info (){
        $s = 'Vardas; %s, Pavarde: %s';
        echo sprintf($s, $this->vardas, $this->pavarde);
    }
}


$o = new asmuo ('Jonas', 'Jonaitis');
var_dump($o);
$o->info();

class studentas extends asmuo {
    public $universitetas;
    function __construct($v, $p, $u){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->universitetas = $u;
    }
    function info (){
        $s = 'Vardas; %s, Pavarde: %s, studentas, mokosi: %s';
        echo sprintf($s, $this->vardas, $this->pavarde, $this->universitetas);
    }
}
$o = new studentas ('Petras', 'Petraitis', 'KTU');
$o->info();

class pratesimas extends studentas {

}
$o = new pratesimas ('Antanas', 'Antanaitis', 'VDU');
$o->info();