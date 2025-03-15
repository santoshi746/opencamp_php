<?php
      $con = mysqli_connect("localhost","root","","opencamp");
      if(isset($_GET['update'])){
        $id = $_GET['abc'];
        $query = "SELECT * FROM`traine_register` WHERE `Id` = $id";
        $res  = mysqli_query($con, $query);
if(mysqli_num_rows($res)>0){
                        while($row = mysqli_fetch_array($res)){
?>
<?php
        if(isset($_POST['update'])){
          $id = $_POST['register-id'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $mobile = $_POST['mobile'];
          $type = $_POST['type'];
          $email = $_POST['email_address'];
          $pswd = $_POST['reg_password'];
          $query = "UPDATE `traine_register` SET `Id`='$id',`Firstname`='$fname',`Lastname`='$lname',`Mobile`='$mobile',`Type`='$type',`Email`='$email',`Password`='$pswd' WHERE Id= $id";
          $result4 = mysqli_query($con,$query);
          if($result4){
            echo " Updated successfully";
            echo "<script> window.location.assign('trainee.php'); </script>";
          }else{
            echo "Error found".$con->error;
          }
        }
        ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opencamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form action="" method="POST">
                    <div >
                      <input type="hidden" name="register-id" id="register-id" value="<?php echo $row['Id'];?>">
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname" value="<?php echo $row['Firstname'];?>" required>
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname" value="<?php echo $row['Lastname'];?>" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" value="<?php echo $row['Mobile'];?>" required>
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl" >
                          <select name="type" id="type" class="form-select" required>
                            <option value="">Type of account</option>
                            <option value="ADMIN">Admin</option>
                            <option value="TRAINEE">Trainee</option>
                          </select>
                          </ul>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="email" id="email_address" name="email_address" class="form-control" value="<?php echo $row['Email'] ?>" placeholder="username@domain.domain-name">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="password" name="reg_password" id="reg_password" class="form-control" value="<?php echo $row['Password'] ?>" placeholder="Password">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <button class="btn btn-primary d-block mx-auto my-2 w-25 btn-submit" type="submit" name="update">Update</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <?php
                  }
                }
            }
            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

