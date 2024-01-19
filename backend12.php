<?php

// initializing variables

$name="";                                            
$email= "";
$mobile= "";
$msg = "";
$errors = array(); 
$db = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'seminarprojectdatabasesecondyear');

// REGISTER USER
if (isset($_POST['submit'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);


 
  if (empty($name)) { array_push($errors, "name is required."); }
  if (empty($email)) { array_push($errors, "email is required."); }
  if (empty($mobile)) { array_push($errors, "mobile is required."); }
 // if (empty($msg)) { array_push($errors, "msg is required.."); }
}


if (count($errors) == 0) {
$query = "INSERT INTO seminarprojecttablename (name, email, mobile, msg)
       VALUES('$name', '$email', '$mobile','$msg')";
mysqli_query($db, $query);
echo "Thank you for submitting.";
}


?>