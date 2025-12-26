<?php
include "Database.php";
include "Participant.php";
class Joueur extends Participant
{
    
    public string $Role;
    public float $Salaire;
    public int $EquipeID;
function __construct($Nom,$Role,$Salaire,$EquipeID)
{
    
    $this->Nom = $Nom;
    $this->Role = $Role;
    $this->Salaire = $Salaire;
    $this->EquipeID = $EquipeID;
}

//         public function getid(){
//         return $this->id;
//     }
//     public function setid($id){
//         $this->id = $id;
//     }

//     public function getNom(){
//         return $this->Nom;
//     }
//     public function setNom($Nom){
//         $this->Nom = $Nom;
//     }



//     public function getSalaire(){
//         return $this->Salaire;
//     }
//     public function setSalaire($Salaire){
//         $this->Salaire = $Salaire;
//     }


//     public function getEquipeID(){
//         return $this->EquipeID;
//     }
// public function setEquipeID($EquipeID){
//     $this->EquipeID = $EquipeID;
// }

    public function create($connection){
    // global $connection;
    $sql="INSERT INTO Joueur(Pseudo,Role,Salaire,EquipeID) values('$this->Nom','$this->Role',$this->Salaire,$this->EquipeID)";
    $connection->query($sql);
    }

}


while(true){

    
    echo "\n";
    echo "==== Joueur ==== \n";
    echo "1. add une Joueur \n";
    echo "2. list  des Joueurs \n" ;
    echo "3. delete Joueur \n";
    echo "4. edit Joueur \n";
    echo "0. Exit \n";
    $choix2 = $input-> input("Entre votre Choix : ");
    
    switch($choix2){
        case '1':  
            echo "saisir name de Joueur";
            $Nom = $input->input(": ");
            
            echo "saisir le role de Joueur";
            $Role = $input->input(": ");

            echo "saisir le salaire de Joueur";
            $Salaire = $input->input(": ");
            echo "enter id de l'equipe";
            $EquipeID= $input->input("  ");
            $NewJoueur = new Joueur($Nom,$Role,$Salaire,$EquipeID);
            $NewJoueur->create($connection);

            break;
    //     case '2':  
    //         $NewJoueur=new Joueur();
    //         $NewJoueur->affichage($conn);
    //         break;
    // case '4':  
    //         echo "saisir id de Joueur" ;
    //         $id = $input->input(": ");

    //         echo "saisir new name de Joueur" ;
    //         $Nnom = $input->input(": ");
            
    //         echo "saisir new role de Joueur" ;
    //         $Nrole = $input->input(": ");

    //         echo "saisir new salaire de Joueur" ;
    //         $Nsalaire = $input->input(": ");

    //         $NewJoueur=new Joueur();
    //         $NewJoueur->setSalaire($Nsalaire);
    //         $NewJoueur->edit($id,$Nnom,$Nrole,$conn);
    //         break;
            
    //         case '0':
    //             include "indexx.php";
    //         break;
            default:
            echo "le choix pas disponible";
            break;
            
        }
}
 ?>