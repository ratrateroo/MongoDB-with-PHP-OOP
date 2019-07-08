<?php 
$status = (isset($_POST['admin'])) ? 'admin' : 'notadmin';

if(isset($_POST['login'])) {
  $username = $userClass->checkInput($_POST['username']);
  $password = $userClass->checkInput($_POST['password']);
  if(empty($username) || empty($password)) {
    $error = true;
    echo "<script>
    $(document).ready(function(){
      $('#errorModalLogin').modal('show');
    });
  </script>";
  }
  else {
    switch ($status) {
      case 'admin':
        $userClass->checkAdmin($username, $password);
        break;
      
      case 'notadmin':
        $userClass->login($username, $password);
        break;
      default: '';
        break;
    }
    

  }
}
?>