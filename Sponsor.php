<?php

class Sponsor
{
    public int $id;
    public string $Nom;
    public float $Contribution_Financiere;
    public int $TournoiID;
    function __construct($Nom, $Contribution_Financiere, $TournoiID) 
    {
        $this->Nom=$Nom;
        $this->Contribution_Financiere = $Contribution_Financiere;
        $this->$TournoiID = $TournoiID;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->Nom;
    }
    public function setNom($Nom){
        $this->id = $Nom;
    }
    public function getContribution_Financiere(){
        return $this->Contribution_Financiere;
    }
    public function setTournoiID($TournoiID){
        $this->id = $TournoiID;
    }public function getTournoiID(){
        return $this->TournoiID;
    }
}





?>
