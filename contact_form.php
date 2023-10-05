<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $request = " insert into contact_form(username, email, phone, subject, message) values('$username','$email','$phone','$subject','$message') ";
      mysqli_query($connection, $request);

      header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>