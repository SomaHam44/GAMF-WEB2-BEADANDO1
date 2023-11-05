<?php
class Suti 
{
    private $id;
    private $nev;
    private $tipus;
    private $dijazott;
    private $egysegar;
    private $egyseg;

    public function _construct($id, $nev, $tipus, $dijazott)
    {
        $this->id = $id;
        $this->nev = $nev;
        $this->tipus = $tipus;
        $this->dijazott = $dijazott;
        $this->egysegar =$egysegar;
        this->egyseg =$egyseg;
    }


    public function getId() : ?int
    {
        return $this->id;
    }

    public function getNev() : ?string
    {
        return $this->nev;
    }

    public function getTipus() : ?string
    {
        return $this->tipus;
    }

    public function getDijazott() : ?int
    {
        return $this->dijazott;
    }

    public funtion setNev($nev)
    {
        $this->nev=$nev;
    }
    public funtion setTipus($tipus)
    {
        $this->tipus=$tipus;
    }
    public funtion setDijazott($dijazott)
    {
        $this->dijazott=$dijazott;
    }
    public funtion setEgysegar($egysegar)
    {
        $this->egysegar=$egysegar;
    }
    public funtion setEgyseg($egyseg)
    {
        $this->egyseg=$egyseg;
    }

}

?>