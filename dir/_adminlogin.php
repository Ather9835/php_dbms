<?php
 
  include 'dbconnection.php';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {   
      $name = $_POST['name'];
      $userid = $_POST['teach_id'];
      $pass = $_POST['Password'];
      $cpass = $_POST['CPassword'];

      echo $userid;
      echo $pass;
      echo $cpass;

      $sql = "select * from `teacher` where `teacher_user_id` ='$userid'" ;
      $res = mysqli_query($result,$sql) or die("Error");
      if(mysqli_num_rows($res)){

         $aler = "Email_ Exist";
         echo 'Hell is real';
         header('Location: /index.php?signupsuccess=false&error='.$aler.'');

      }
      else{

        if($pass == $cpass)
        {   

            
            $sql2= "INSERT INTO `teacher` (`teacher_name`,`teacher_user_id`, `password`) VALUES ('$name','$userid', '$pass');";
            $res2 = mysqli_query($result,$sql2);
            if($res2){
                $showAlert = true;
                header('Location: /index.php?signupsuccess=true');
            }
        }
        else{
            $alert = "Password is not matching";
            header('Location: /index.php?signupsuccess=false&error='.$alert.'');
        }
      }
  }

?>