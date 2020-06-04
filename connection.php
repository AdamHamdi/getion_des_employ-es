<?php 
         
session_start();
$id=0;
$nom='';
$date_naissance='';
$salaire='';

       $localhost="localhost";
       $user="root";
       $password="";
       $db="formation_php";
      // $connect= mysqli_connect($localhost,$user,$password,$db)or die(mysqli_error($connect));
       
       $mysqli= new mysqli($localhost,$user,$password,$db)or die(mysqli_error($mysqli));
if(isset($_POST['submit'])){
    $nom= strip_tags(($_POST['nom']));
    $date_naissance=(strip_tags($_POST['date_naissance']));
    $salaire= strip_tags(($_POST['salaire']));
    
    $mysqli->query("INSERT INTO employee (nom, date_naissance, salaire)VALUES('$nom','$date_naissance','$salaire')")or(die($mysqli->error));
   //message de confirmation
    $_SESSION['message']="L'insertion a été effectuée avec success";
    $_SESSION['msg_type']="success";

    header("location:index.php");
    
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM employee WHERE id=$id")or die($mysqli->error);
   //message de confirmation
    $_SESSION['message']="L'enregistrement a été supprimé avec success";
    $_SESSION['msg_type']="danger";

    header("location:index.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result= $mysqli->query("SELECT * FROM employee WHERE id = $id ") or die($mysqli->error);
    $count = $result->num_rows;
  if($count==1){
      $row=$result->fetch_array();
      $nom= $row['nom'];
      $date_naissance = $row['date_naissance'];
      $salaire=$row['salaire'];
  }
  }
  if(isset($_POST['update'])){
    $id= (strip_tags($_POST['id']));
    $nom= strip_tags(($_POST['nom']));
    $date_naissance=(strip_tags($_POST['date_naissance']));
    $salaire= strip_tags(($_POST['salaire']));
    $mysqli->query("UPDATE  employee SET nom='$nom',date_naissance='$date_naissance', salaire='$salaire' WHERE id=$id")or die($mysqli->error);
  
    $_SESSION['message']="Mise à jour a été effectué avec success";
    $_SESSION['msg_type']="warning";

    header("location:index.php");
}

      
       
       ?> 