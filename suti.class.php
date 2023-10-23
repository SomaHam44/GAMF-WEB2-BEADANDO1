<?php
class Suti 
{
    private $id;
    private $nev;
    private $tipus;
    private $dijazott;

    public function _construct($id, $nev, $tipus, $dijazott)
    {
        $this->id = $id;
        $this->nev = $nev;
        $this->tipus = $tipus;
        $this->dijazott = $dijazott;
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

}

?>