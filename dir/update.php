<?php
 include 'dbconnection.php';
 if(isset($_GET['submit'])){}
 else{
 $id = $_GET['id'];
 $sql = "select * from `student` where `Roll` ='$id'" ;
           $res = mysqli_query($result,$sql);
           $row1 = mysqli_fetch_assoc($res);
           $name = $row1['student_name'];
           $fname = $row1['father_name'];
           $add = $row1['address'];
           $phone = $row1['phone'];
           $sql = "select * from `score` where `roll` ='$id'" ;
           $res = mysqli_query($result,$sql);
           $row1 = mysqli_fetch_assoc($res);
           $math = $row1['math'];
           $science = $row1['science'];
           $english = $row1['english'];}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h2 class="my-4"> Please Update Here </h2>
    <hr>
  <form action="" method="GET">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="fname">Father Name</label>
      <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="roll">Roll</label>
    <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $id; ?>">
  </div>
  
  <div class="form-group">
    <label for="phone">phone</label>
    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>">
  </div>
  <div class="form-group">
    <label for="add">Address</label>
    <input type="text" class="form-control" name="add" id="add" value="<?php echo $add; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="math">Maths</label>
      <input type="text" class="form-control" name="math" id="math" value="<?php echo $math; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="science">Science</label>
      <input type="text" class="form-control" name="science" id="science" value="<?php echo $science; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="english">English</label>
      <input type="text" class="form-control" name="english" id="english" value="<?php echo $english; ?>">
    </div>
  </div>
  
  <input type="submit" id="button" name="submit" value="update"></a>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php
 if(isset($_GET['submit'])){
    
    $name = $_GET['name'];
    $fname = $_GET['fname'];
    $roll = $_GET['roll'];
    $add = $_GET['add'];
    $phone = $_GET['phone'];
    $math = $_GET['math'];
    $science = $_GET['science'];
    $english = $_GET['english'];
    $sql = "UPDATE `student` SET `student_name`='$name',`father_name`='$fname',`phone`='$phone',`address`='$add' WHERE `Roll` ='$roll'" ;
    $res = mysqli_query($result,$sql);
    $sql2 = "UPDATE `score` SET `math`=$math,`science`=$science,`english`=$english WHERE `roll` ='$roll'" ;
    $res2 = mysqli_query($result,$sql2);
    if($res and $res2){

        header('Location: /user.php');

    }

    

 }
?>