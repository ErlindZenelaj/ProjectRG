<?php 
include_once '../repository/userRepository.php';
session_start();
if(isset($_POST['loginBtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      // print_r($_SESSION);
     // echo $username;
      //echo $password;
      $userRepository = new UserRepository;
      $user = $userRepository->getUserByUsername($username,$password);
  
      if(empty($user)){
        echo "Username or Password is Incorrect!";
        
      }else{
        header("location: Index.php"); 
      }


    }
}

?>