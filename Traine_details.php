<?php
$database = mysqli_connect("localhost","root","","opencamp");
$query = "SELECT * FROM traine_register";
$result=mysqli_query($database,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>opencamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Mobile</th>
            <th>Type</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
              ?>
        <tr>
            <td>
                <?php echo $row['Id']; ?>
            </td>
            <td>
                <?php echo $row['Firstname']; ?>
            </td>
            <td>
                <?php echo $row['Lastname']; ?>
            </td>
            <td>
                <?php echo $row['Mobile']; ?>
            </td>
            <td>
                <?php echo $row['Type']; ?>
            </td>
            <td>
                <?php echo $row['Email']; ?>
            </td>
            <td>
                <?php echo $row['Password']; ?>
            </td>
            <td>
            <form action="traine-delete.php">
                <input type="hidden" name="abc" value="<?php echo $row['Id']; ?>">
                <input type="submit" value="Delete" name="delete" class="btn btn-danger my-1">
            </form>
            </td>
        </tr>
        <?php
            }
        }
            ?>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>