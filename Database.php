    <?php
    class Database{
        public $host;
        public $dbname;
        public $username;
        public $password;


        public function __construct($host, $db, $user, $pass)
        {
            $this->host = $host;
            $this->dbname = $db;
            $this->username = $user;
            $this->password = $pass;
        }

        
        public function getConnection()
        {
            $connectio = mysqli_connect($this->host, $this->username, $this->password,$this->dbname);
            return $connectio;
        }
    }
    $databese  = new Database("localhost","esport","root","");
    $connection = $databese->getConnection();


    if($connection){
        echo "connexion valide";
    }