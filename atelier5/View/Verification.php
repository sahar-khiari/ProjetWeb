<?php
$nom=$_post['fname'];
$prenom=$_post['lname'];
$phone=$_post['tel'];
$email=$_post['email'];
$date=$_post['dob'];
$motdepasse=$_post['pwd'];
include"../controlleur/employeC.php";
$emplye=new employe($nom,$prenom,$password,$phone,$email,$dob);
$emplo=new employeC();
$emplo->showEmploye($emplye);
?>