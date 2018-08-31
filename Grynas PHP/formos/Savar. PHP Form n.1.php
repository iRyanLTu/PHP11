<?php
/**
 * Sukurti forma: gamintojas, modelis, metai (select), kaina. Nauja/naudota (radio), dauzta (checkbox). Su metodu post perduoti duomenis y
 * back end ir sudeti i klase auto su atitinkamomis savybemis. Rezultata isvest su var_dump.
 */

class auto{
   public $gamintojas, $modelis, $metai, $busena, $kaina;

   function __construct($gam, $mod, $met, $bus, $kai)
   {
       $this->gamintojas=$gam;
       $this->modelis=$mod;
       $this->metai=$met;
       $this->busena=$bus;
       $this->kaina=$kai;
   }
}
$o = new auto ($_POST['Gamintojas'], $_POST['Modelis'], $_POST['Metai'], $_POST['Busena'], $_POST['Kaina']);
var_dump($_POST);