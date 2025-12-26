
<?php

include "Database.php";
class Club{


   public $name;
   public $Ville;
   public function createClub($name,$Ville,$connection) {
    $sql = "INSERT INTO Club (Nom,Ville) values('$name','$Ville')";
    $connection->query($sql);
   }


   public function affichage($connection){
    $sqll = "SELECT * FROM club";
    $result = $connection->query($sqll);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Nom :";
        echo $row['Nom'];
        echo "\n";
        echo "Ville :";
        echo  $row['Ville'];
        echo "\n";
        echo "\n";

        echo "==========club===========";
                echo "\n";
        echo "\n";
    }
   }
    public function Editclub($id,string $Nom,string $Ville,$connection){
    $sqls = "UPDATE club set Nom = '$Nom' , Ville = '$Ville' WHERE id = $id";
    $connection->query($sqls);
   }

   public function delete($id,$connection){
    $sq = "DELETE from club WHERE id = $id";
    $connection->query($sq);
   }
}

while(true){
      echo "\n";
    echo "==== club ==== \n";
    echo "1. ajoute un club\n";
    echo "2. afficher un club \n";
    echo "3. Edit un club \n";
    echo "4. delete un club \n";
    echo "0. Exit \n";
    $input = new input();
    $choixx = $input->input("Entre votre Choix :");

switch ($choixx) {
    case '1':
        echo "enter le nom du club";
        $name = $input->input("  ");
        echo "enter la ville de club";
        $ville = $input->input("   ");
        $newClub = new Club();
        $newClub->createClub($name,$ville,$connection);
        break;
    case '2':
        $afficherclub = new Club();
        $afficherclub->affichage($connection);
        break;
    case '3':
        echo "sisir id";
        $id = $input->input("  ");
        echo "sisir le Nom";
        $Nom = $input->input("  ");
        echo "sisir la ville";
        $Ville = $input->input("  ");
        $editclub = new Club();
        $editclub->Editclub($id,$Nom,$Ville,$connection);
        break;
        case '4':
            echo "sisir id";
            $id = $input->input(" ");
            $newclub = new Club();
            $newclub->delete($id,$connection);
            break;
    case '0':
        include "inde.php";
        break;
    default:
        echo "aucune id";
        break;
}
}



?>




