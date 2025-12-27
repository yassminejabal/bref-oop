<?php
include "Database.php";
include "Participant.php";
class Joueur extends Participant
{
    public ?string $Role;
    public ?float $Salaire;
    public ?int $EquipeID;
    function __construct($Nom = "", $Role = null, $Salaire = null, $EquipeID = null)
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

    public function create($connection)
    {
        // global $connection;
        $sql = "INSERT INTO Joueur(Pseudo,Role,Salaire,EquipeID) values('$this->Nom','$this->Role',$this->Salaire,$this->EquipeID)";
        $connection->query($sql);
    }
    public function affichage($connection)
    {
        $sql = "SELECT equipe.id, equipe.Nom,equipe.Jeu,joueur.Pseudo,joueur.Role,joueur.Salaire,joueur.EquipeID FROM equipe
        JOIN joueur 
        ON equipe.id = joueur.EquipeID";
        $result = mysqli_query($connection, $sql);
        if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['id'];
                echo "      ";
                echo $row['Nom'];
                echo "      ";
                echo $row['Jeu'];
                echo "\n";
                echo "\n";
                echo $row['Pseudo'];
                echo "      ";
                echo $row['Role'];
                echo "      ";
                echo $row['Salaire'];
                echo "\n";
                echo "\n";
                echo "-----------------------------------";
                echo "\n";
                echo "\n";
            }
        } else {
            'il n ja pas de connection';
        }
    }
    public function edit($id, $Nom, $Role,$Salaire,$EquipeID, $connection) {

        $sql = "UPDATE joueur SET id=$id,Pseudo='$Nom',Role='$Role',Salaire= $Salaire,EquipeID=$EquipeID
         where id = $id";
        mysqli_query($connection,$sql);
    }
}


while (true) {


    echo "\n";
    echo "==== Joueur ==== \n";
    echo "1. add une Joueur \n";
    echo "2. list  des Joueurs \n";
    echo "3. delete Joueur \n";
    echo "4. edit Joueur \n";
    echo "0. Exit \n";
    $choix2 = $input->input("Entre votre Choix : ");

    switch ($choix2) {
        case '1':
            $Nom = $input->input("saisir name de Joueur: ");
            $Role = $input->input("saisir le role de Joueur: ");
            $Salaire = $input->input("saisir le salaire de Joueur ");
            $EquipeID = $input->input(" enter id de l'equipe ");
            $NewJoueur = new Joueur($Nom, $Role, $Salaire, $EquipeID);
            $NewJoueur->create($connection);

            break;
        case '2':
            $NewJoueur = new Joueur();
            $NewJoueur->affichage($connection);
            break;
        case '4':
            $id = $input->input("saisir id de Joueur: ");

            $Nom = $input->input("saisir new name de Joueur: ");

            $Role = $input->input("saisir new role de Joueur: ");

            $Nsalaire = $input->input("saisir new salaire de Joueur: ");
            $EquipeID = $input->input("saisir id de l'equipe ");
            $NewJoueur = new Joueur();
            $NewJoueur->edit($id, $Nom, $Role,$Salaire,$EquipeID, $connection);
            break;

        //         case '0':
        //             include "indexx.php";
        //         break;
        default:
            echo "le choix pas disponible";
            break;
    }
}
