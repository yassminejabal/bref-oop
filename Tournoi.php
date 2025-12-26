<?php


class Tournoi
{
    public int $id;
    public string $Titre;
    public float $Cashprize;
    public string $Format;
    public string $DateTournoi;
function __construct($id,$Titre,$Cashprize,$Format,$DateTournoi)
{
    $this->id = $id;
    $this->Titre = $Titre;
    $this->Cashprize = $Cashprize;
    $this->Format = $Format;
    $this->DateTournoi = $DateTournoi;
}
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    } 



     public function getTitre(){
        return $this->Titre;
    }
    public function setTitre($Titre){
        $this->Titre = $Titre;
    } 



     public function getCashprize(){
        return $this->Cashprize;
    }
    public function setCashprize($Cashprize){
        $this->Cashprize = $Cashprize;
    } 




     public function getFormat(){
        return $this->Format;
    }
    public function setFormat($Format){
        $this->Format = $Format;
    } 



     public function getDateTournoi(){
        return $this->DateTournoi;
    }
    public function setDateTournoi($DateTournoi){
        $this->DateTournoi = $DateTournoi;
    } 
}


?>


