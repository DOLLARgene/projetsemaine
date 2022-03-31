<?php


/*
class ClassName extends AnotherClass implements Interface
{
    
}
*/

class Animals 
{
    
    private $nameofani;
    private $categories;
    private $sexe;
    private $cries;
    private $Origine;

    public function __contruct($nameofani,$categories,$sexe,$cries,$Origine)
    {
        $this->_nameofani = $nameofani;
        $this->_categories =$categories;
        $this->_sexe =$sexe;
        $this->_cries = $cries;
        $this->_Origine = $Origine;
    }
    
    public function Caracterisque()
    {
         echo 
         'cet animal est appele'.$this->_nameofani.
         'il est de la categorie des '.$this->_categories.
         'il es de sexe'.$this->_sexe.
         'il a le crie de:'.$this->_cries.
         'il a pour origine'. $this->_Origine;
    }
    
    $unchien = new Animals('chien','canivore','male','houhou','africaine');*
    $monmouton->Caracterisque();
    $mouton = new Animals('mouton','herbivor','femelle','baih','africaine');
    $monmouton->Caracterisque();
    

}






?>