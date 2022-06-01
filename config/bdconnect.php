<?php



class Connection
{

    public $user;
    public $dbname;
    private $pass;

    public function __construct($user, $db, $passwd)
    {
        $this->user = $user;
        $this->dbname = $db;
        $this->pass = $passwd;
    }

    public function Connect()
    {

        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $pdo = new PDO('mysql:host=localhost;dbnanme=' . $this->dbname . ',' . $this->user . ',' . $this->pass . ',' . $pdo_options);
            echo "Connection Etablie avec la base de donnees " . $this->dbname;
            return $pdo;
        } catch (PDOException $e) {
            echo "Failed to connect to dataBase " . $this->dbname . ": " . $e->getMessage();
        }
    }
}

class User
{
    public $login;
    public $pass;

    public function __construct($log, $passw)
    {
        $this->login = $log;
        $this->pass = $passw;
    }
    public function AddUser()
    {
        try {
            $connect = new Connection('root', 'mairiecms', '');
            $bdd = $connect->Connect();
            $prep = $bdd->prepare('INSERT INTO user (username,passwd) VALUES (?,?)');
            echo "phase finale";
            echo "<br> login = " . $this->login;
            $prep->execute(array($this->login, $this->pass));
            echo "phase finale2";
            echo "<br> pass = " . $this->pass;
            echo "Sucessful Insertion  to database";
            return true;
        } catch (PDOException $e) {
            echo "/n Erreur lors de l'insertion dans la bd";
        }
    }

    public function CheckUser()
    {
        try {
            $connect = new Connection('root', 'mairiecms', '');
            $bdd = $connect->Connect();
            $req = $bdd->prepare('SELECT * FROM user WHERE userna = ? AND passwd = ?');
            $p = $req->execute(array($this->login, $this->pass));
            $param = $req->fetch();
            if (!$param) {
                $chaine = 'Compte introuvable';
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo "erreur " . $e->getMessage();
        }
    }
}
