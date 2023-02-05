<?php
session_start();


$con=mysqli_connect('localhost','root');

// if($con)
// {
//     echo"Conenction Succcesful";

// }
// else{
//     echo"No connection";
// }

mysqli_select_db($con,'userlogin');

$user = $_POST['user'];
$password = $_POST['password'];

$query=" insert into userinfo(user, password) 
values ('$user','$password') ";

mysqli_query($con,$query);
?> 


