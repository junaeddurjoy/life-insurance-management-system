<?php

include 'connection.php';

if(isset($_POST['submit'])){

   $client_id = mysqli_real_escape_string($conn, $_POST['client_id']);
   $client_password = mysqli_real_escape_string($conn, $_POST['client_password']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $sex = mysqli_real_escape_string($conn, $_POST['sex']);
   $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
   $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status']);
   $nid = mysqli_real_escape_string($conn, $_POST['nid']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $policy_id = mysqli_real_escape_string($conn, $_POST['policy_id']);


   $select_users = mysqli_query($conn, "SELECT * FROM `client` WHERE client_id = '$client_id' AND client_password = '$client_password'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `client`(client_id,client_password,name,sex,birth_date,marital_status,nid,phone,address,policy_id) VALUES('$client_id','$client_password', '$name','$sex','$birth_date','$marital_status','$nid','$phone','$address','$policy_id')") or die('query failed');
      $message[] = 'registration complete!';
      header('location:index.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" postion="relati" onclick="this.parentElement.remove();"></i>  
      </div>
      ';
   }
}
?>

   
<div class="form-box">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="client_id" placeholder="enter your id" required class="box">
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="text" name="sex" placeholder="enter your sex" required class="box">
      <input type="text" name="birth_date" placeholder="enter your birth date" required class="box">
      <input type="text" name="marital_status" placeholder="enter your marital status" required class="box">
      <input type="text" name="address" placeholder="enter your address" required class="box">
      <input type="text" name="nid" placeholder="enter your nid" required class="box">
      <input type="phone" name="phone" placeholder="enter your phone" required class="box">
      <input type="int" name="policy_id" placeholder="enter your policy" required class="box">
      <input type="password" name="client_password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>Already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>