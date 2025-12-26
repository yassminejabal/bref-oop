<?php



class Matchs
{
    public int $id;
    public int $Score_A;
    public int $Score_B;
    public int $EquipeA_ID;
    public int $EquipeB_ID;
    public int $TournoiID;
    public int $GagnantID;
    
    function __construct($id,$Score_A,$Score_B,$EquipeA_ID,$EquipeB_ID,$TournoiID,$GagnantID){
    $this->id = $id;
    $this->Score_A = $Score_A;
    $this->Score_B = $Score_B;
     $this->EquipeA_ID = $EquipeA_ID;
    $this->EquipeB_ID = $EquipeB_ID;
    $this->TournoiID = $TournoiID;
    $this->GagnantID = $GagnantID;
}
public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getScore_A(){
        return $this->Score_A;
    }
    public function setScore_A($Score_A){
        $this->Score_A = $Score_A;
    } 


    
    public function getEquipeA_ID(){
        return $this->EquipeA_ID;
    }
    public function setEquipeA_ID($EquipeA_ID){
        $this->EquipeA_ID = $EquipeA_ID;

    } 
    

    
    public function getEquipeB_ID(){
        return $this->EquipeB_ID;
    }
    public function setEquipeB_ID($EquipeB_ID){
        $this->id = $EquipeB_ID;
    }
    
    
    public function getTournoiID(){
        return $this->TournoiID;
    }
    public function setTournoiID($TournoiID){
        $this->TournoiID = $TournoiID;
    } 
    
    
    
    
    public function setGagnantID($GagnantID){
        $this->id = $GagnantID;
    } public function getGagnantID(){
        return $this->GagnantID;
    }
}




?>