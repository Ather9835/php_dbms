<?php
 
 include 'dbconnection.php';
 session_start();
 if(isset($_SESSION['id']))
 {

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
     $name = $_POST['name'];
     $roll = $_POST['roll'];
     $fname = $_POST['fname'];
     $address = $_POST['add'];
     $phone = $_POST['phone'];
     $math = $_POST['math'];
     $science = $_POST['science'];
     $english = $_POST['english'];
    
     $id = $_SESSION['id'];
     $sql = "select * from `student` where `c_teacher_id` ='$id' and `Roll` = '$roll'" ;
      $res = mysqli_query($result,$sql) or die("Error");
      if(mysqli_num_rows($res)){

         $aler = "Roll_ Exist";
         header('Location: /user.php?addstudent=false&error='.$aler.'');

      }
      else{
     $sql2= "INSERT INTO `student` (`c_teacher_id`, `student_name`, `Roll`, `father_name`, `phone`, `address`) VALUES ('$id', '$name','$roll', '$fname', '$phone', '$address');";
     $res2 = mysqli_query($result,$sql2);
     
     $sql3= "INSERT INTO `score` (`roll`, `math`, `science`, `english`) VALUES ('$roll', '$math', '$science', '$english');";
     $res3 = mysqli_query($result,$sql3);
     if($res2 and $res3){
                $showAlert = true;
                header('Location: /user.php');
            }
         }

    }
 }
 

?>