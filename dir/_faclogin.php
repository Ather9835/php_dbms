<?php

 
 include 'dbconnection.php';
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $email = $_POST['roll'];
     $pass = $_POST['password'];
     $query = "select * from stud where sroll ='$email'" ;
     $stid = oci_parse($conn, $query);
     $r = oci_execute($stid);
    $f = 1;

    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   
        print $row["SROLL"];
        echo 'You are logged in';
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['sroll'] = $email;
        $_SESSION['username'] = $row['NAME'];
        header('Location: /university/faculty.php?logsuccess=true');
        $f=0;
       
    }
    

            

}

?>