<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

$name=$surname=$username=$email=$password="";

if(isset($_POST['registerBtn'])){
  if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['username']) ||
  empty($_POST['email']) || empty($_POST['password'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
      echo "<pre style='color:red; font-size:15px;'>*Fill all required Fields</pre>";
  }else{
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $id = rand(100,999)."$username";
      
      $user = new User($id,$name,$surname,$username,$email,$password);

      $userRepository = new UserRepository;

      $userRepository->insertUser($user);

  }
}

?>