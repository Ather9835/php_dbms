<?php

  include 'dbconnection.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM `student` WHERE `Roll` = '$id'";
  $res = mysqli_query($result,$sql);
  $sql2 = "DELETE FROM `score` WHERE `roll` = '$id'";
  $res2 = mysqli_query($result,$sql2);
  if($res and $res2){
    header('Location: /user.php');
  }

  ?>