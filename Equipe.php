<?php
include "Database.php";
include "Participant.php";

class Equipe extends Participant {
    public int $id;
    public string $Jeu;
    public string $Nom;
    private $connection;
    public int $ClubID;


    public function __construct($id =null, $connection,$Jeu=null,$Nom=null,$ClubID=null){
        $this->id = $id ;
        $this->connection = $connection;
        $this->Jeu = $Jeu;
        $this->Nom = $Nom;
        $this->ClubID = $ClubID;
    }

    
    // public function getid()
    // {
    //     return $this->id;
    // }
    // public function setid($id)
    // {
    //     $this->id = $id;
    // }

    // public function getJeu()
    // {
    //     return $this->Jeu;
    // }
    // public function setJeu($Jeu)
    // {
    //     $this->Jeu = $Jeu;
    // }


    // public function getClubID()
    // {
    //     return $this->ClubID;
    // }








    public function ajouteEquipe(){
        $sql = "INSERT INTO equipe (Nom,Jeu,ClubID) VALUES ($this->Nom,$this->Jeu,$this->ClubID)";
        $this->connection->query($sql);
        echo "bien";
    }

    public function afficherEquipes(){
        $sql = "SELECT * FROM equipe";
        $result = $this->connection->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo $row['id'];
                echo $row['Nom'];
                echo $row['Jeu'];
                echo "====================\n";
            }
        }
    }

    public function EditEquipe($id){
        $sql = "UPDATE equipe SET Nom='$this->Nom', Jeu='$this->Jeu' WHERE id=$id";
        $this->connection->query($sql);
        echo "tu as modifier\n";
    }
    public function deleteEquipe($id){
        $ssql = "DELETE from equipe where id = $id";
        $RSELT = mysqli_query($this->connection,$ssql);

        if ($RSELT) {
            echo "ok tu y'a suprimee cette equipe";
        }
        }
        
    }



    

while(true){
      echo "\n";
    echo "==== club ==== \n";
    echo "1. ajoute une equipe\n";
    echo "2. afficher une equipe \n";
    echo "3. Edit une equipe \n";
    echo "4. delete une equipe \n";
    echo "0. Exit \n";
    $input = new input();
    $choixx = $input->input("Entre votre Choix :");

switch ($choixx) {
    case '1':
        echo "enter le nom du l'equipe";
        $Nom  = $input->input("  ");
        echo "enter le jeu";
        $Jeu = $input->input("  ");
        $ClubID = $input->input("entrer id de Club");
        $newequipe = new Equipe($connection,$Jeu,$Nom,$ClubID);
        $newequipe->ajouteEquipe();
        break;
    case '2':
        $newequipe = new Equipe($connection,$Jeu,$Nom,$ClubID);
        $newequipe->afficherEquipes();

        break;
    case '3':
        echo "sisir id";
        $id = $input->input("  ");
        echo "sisir le Nom d'equipe";
        $Nom = $input->input("  ");
        echo "sisir le Nom du jeu";
        $Jeu = $input->input("  ");
        echo "entrer id de l'equipe";
        $Jeu = $input->input("  ");
        $ClubID = $input->input("  ");
        $equipe = new Equipe($connection, $Nom, $Jeu,$ClubID);
        $equipe->EditEquipe($id);

        break;
        case '4':
            echo 'id pour suprimer une equipe';
           $id = $input->input(" ");
           $equip = new Equipe($id,$this->connection);
            $equip->deleteEquipe($id);
    default:

    break;
}
}