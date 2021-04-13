<!DOCTYPE html>
<?php
 include 'dir/dbconnection.php';
 include 'dir/_navbar.php';
 $id = $_GET['rid'];
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
           <?php
           $id = $_GET['rid'];
           $sql = "select * from `student` where `Roll` ='$id'" ;
           $res = mysqli_query($result,$sql);
           $row1 = mysqli_fetch_assoc($res);
           echo '<h2>Name:  '.$row1['student_name'].'</h2><br>
           <h3>Father Name: '.$row1['father_name'].'</h3><br>
           <h3>Result</h3>';
            ?>

           <section class="para my-4">

               <hr>
           <table class="table">
            <thead class="thead-dark">
                <tr>
                
                <th scope="col" class="center">Maths</th>
                <th scope="col" class="center">Science</th>
                <th scope="col" class="center">English</th>
                <th scope="col" class="center">Total</th>
                </tr>
            </thead>
            

                <?php
                   $id = $_GET['rid'];
                   $sql = "select * from `score` where `roll` ='$id'" ;
                   $res = mysqli_query($result,$sql);
                   while($row1 = mysqli_fetch_assoc($res))
                   {
                       $maths = $row1['math'];
                       $science = $row1['science'];
                       $english = $row1['english'];
                       $sum = $science + $maths + $english;
                       echo '<tbody>
                       <tr>
                       <th scope="row"class="center">' .$maths. '</th>
                       <td class="center">'.$science. '</td>
                       <td class="center">'.$english. '</td>
                       <td class="center">'.$sum. '</td>
                       

                       </tr>
                   </tbody>';
                   }

                ?>

            </table>


            
           </section>

     <script>

     </script> 
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    
</body>
</html>