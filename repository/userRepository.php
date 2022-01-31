<?php 
include_once '../database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();
       

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " surname: $surname";
        echo " email: $email";
        echo " username: $username";
        echo " password: $password";
        echo "<br>";


        $sql = "INSERT INTO user VALUES ('$id','$name','$surname','$email','$password','$username')";
        if(mysqli_query($conn,$sql)){
            echo "query is executed succesfuly";
            header("location:../view/login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }


    }

    function getUserByUsername($username){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM user WHERE username = '$username'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }

}
//  $urepo = new UserRepository;
//   $urepo->getUserByUsername("rion");

?>