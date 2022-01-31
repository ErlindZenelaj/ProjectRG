<?php 
include_once '../repository/userRepository.php';

if(isset($_POST['loginBtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $username = $_POST['username'];
      $password = $_POST['password'];

      $userRepository = new UserRepository;
      $user = $userRepository->getUserByUsername($username);

      if(empty($user)){
        echo "Username or Password is Incorrect!";
      }else{
       
     //  print_r($user);
       if($user[4]==$password){
         //session
              header("location: index.php"); 
       }else{
        echo "Username or Password is Incorrect!";
       }
      }


    }
}

?>