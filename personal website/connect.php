<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $conn= new mysqli('localhost','portfolio');
  if($conn->connect_error){
    die('connection failed:' .$$conn->connect_error);

  }
  else {
    $stmt=$conn->prepare("insert into registration(name,email,subject,message)
    values(?,?,?,?)")
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();
    echo "Registered Successfully";
    $stmt->close();
    $conn->close();
  }
?>
