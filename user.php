<!DOCTYPE html>
<?php
 include 'dir/dbconnection.php';
 include 'dir/_navbar.php';
 if(isset($_SESSION['username'])){
     $name = $_SESSION['username'];
     $id = $_SESSION['sroll'];
     $image = "Image";
     echo $name;

 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <title>Document</title>
</head>
<body> 
    <div class="container">

           <section class="para my-4">
               <h3 class="center"><?php echo $_SESSION['username'] ?></h3>

               <hr>
            <?php
                   $id = $_SESSION['sroll'];
                   $sql = "select * from stud where sroll ='$id'" ;
                   $stid = oci_parse($conn, $sql);
                   $r = oci_execute($stid);
                   while($row1 = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
                   {
                       $sname = $row1['NAME'];
                       $branch = $row1['BRANCH'];
                       $batch = $row1['BATCH'];
                       $prog = $row1['PROG'];
                   }

                   echo '
                   Name : '. $sname .'<br>
                   Branch : '. $branch .'<br>
                   Batch : '. $batch .'<br>
                   Prog : '. $prog .'<br>';

                  
            ?>

           

            
           </section>

           <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-success my-2 my-sm-0 ml-2 right">Courses</a>
           <a href="/university/dir/_reg.php" class="btn btn-success my-2 my-sm-0 ml-2 right">Regist.</a>
           <a href="/university/dir/_logout.php" class="btn btn-success my-2 my-sm-0 ml-2 right">Logout</a>
           <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-success my-2 my-sm-0 ml-2 right">Attendance</a>
           <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-success my-2 my-sm-0 ml-2 right">Grade</a>
           <?php include 'dir/addmodal.php';
                 include 'dir/modifymodal.php';
            ?>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">


            <table class="table">
  <thead>
    <tr>
      <th scope="col">Course No</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  <?php
                   $id = $_SESSION['sroll'];
                   $sql = "select * from attendance where roll ='$id'" ;
                   $stid = oci_parse($conn, $sql);
                   $r = oci_execute($stid);
                   while($row1 = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC))
                   {
                   
                    echo '<tr>
                    <th scope="row">'. $row1['COURSENO'] .'</th>
                    <td>'. $row1['IDATE'] .'</td>
                    <td>'.$row1['STATUS'] .'</td>
                  </tr>';


                   }
                  
            ?>
  </tbody>
</table>
           
            </div>
            </div>
           </div>

         
  

     
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    
</body>
</html>