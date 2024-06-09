<?php 

Class Mydb
{
    public $con;
    const DB_CONN = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "jogo_backend";

    public function __construct()
    {
        $this->con = mysqli_connect(self::DB_CONN, self::DB_USER, self::DB_PASS, self::DB_NAME);
        if(!$this->con){
            echo "falha ao conectar: " + mysqli_connect_error();
        }else{
            echo "Conectado com sucesso!";
        }
    }

    public function close(){
        $this->con->close();
    }

    public function query($sql){
        return $this->con->query($sql);
    }
   
}

/*
$db = new Mydb();

$sql = "SELECT * FROM player";
$result = $db->query($sql);
if($result->num_rows > 0){
    echo "ok" . "</br>";
    $row = $result->fetch_assoc();
    echo $row['name'];
}



$db->close();
*/
?>