<?php 

class Auto{
    private $marka;
    private $godiste;
    private $proizvodjac;

    function __construct ($marka,$godiste,$proizvodjac){
        $this->marka=$marka;
        $this->godiste=$godiste;
        $this->proizvodjac=$proizvodjac;
    }

    function getMarka(){
        return $this->marka;
    }
    function getGodiste(){
        return $this->godiste;
    }
    function getProizvodjac(){
        return $this->proizvodjac;
    }

    function setMarka($marka){
        $this->marka=$marka;
    }
    function setGodiste($godiste){
        $this->godiste=$godiste;
    }
    function setProizvodjac($proizvodjac){
        $this->$proizvodjac=$proizvodjac;
    }
}

?>