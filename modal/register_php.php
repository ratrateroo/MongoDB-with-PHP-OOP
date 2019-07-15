<?php 
 if(isset($_POST['register'])) {
    
    $username = $userClass->checkInput($_POST['username']);
    $password = $userClass->checkInput($_POST['password']);
    $email    = $userClass->checkInput($_POST['email']);
    $country    = $userClass->checkInput($_POST['country']);
    $address    = $userClass->checkInput($_POST['address']);
  }

  if(empty($username) || empty($password) || empty($email) || empty($country) || empty($address)) {
    $error = true;
  } else {
    $userClass->register($username, $password, $email, $country, $address);
    unset($error);
  }

  if(isset($error) && isset($_POST['register'])) {
    echo "<script>
      $(document).ready(function(){
        $('#errorModal').modal('show');
      });
    </script>";
  }
