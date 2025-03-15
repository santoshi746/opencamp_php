<?php
$database = mysqli_connect("localhost","root","","opencamp");
if(isset($_POST['Add-course'])){
  $id = $_POST['Id'];
  $course_name = $_POST['course_name'];
  $course_type = $_POST['course_type'];
  $course_details = $_POST['course_details'];
  $course_price = $_POST['course_price'];
  $query = "INSERT INTO `courses`(`Id`, `Course_type`, `Course_name`, `Course_details`, `Course_price`) VALUES ('$id','$course_type','$course_name','$course_details','$course_price') ";
  $result = mysqli_query($database,$query);
  if($result){
    echo "Successfully added";
  }else{
    echo "error found";
  }
}
if(isset($_POST['Add-blog'])){
  $blog_id = $_POST['Id_blog'];
  $upload = $_FILES['upload']['name'];
  $date = $_POST['Date'];
  $h_blog = $_POST['heading_blog'];
  $c_blog = $_POST['content_blog'];
  $sql = "INSERT INTO `blog_details`(`Id`, `Date`, `Image`, `Heading`, `Content`) VALUES ('$blog_id','$date','$upload','$h_blog','$c_blog')";
  $result2 = mysqli_query($database,$sql);
  if($result2){
    move_uploaded_file($_FILES['upload']['tmp_name'],"blog_images/".$_FILES['upload']['name']);
    echo "Added blog";
  }else{
    echo "error found".$database->error;
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OpenCamp</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <img id="bg-img" src="https://cdn.pixabay.com/photo/2025/02/22/08/35/mountain-9423779_1280.jpg" alt="">
    <main class="main">
      <h1>WELCOME TO OPENCAMP</h1>
      <button class="btn btn-success w-50">Explore now..</button>
    </main>
    <nav class="navbar navbar-expand-lg  fixed-top " >
        <div class="container">
          <a class="navbar-brand" href="#">OpenCamp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="web_development.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Why_Choose_us">Why choose us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-target="#modal-course" data-bs-toggle="modal">Add Courses</a>
              </li>
              <li class="nav-item">
                <a href="traine_details.php" class="nav-link">Trainee details</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-blog">Add Blog</a>
              </li>
              <li class="nav-item">
                <a href="blog.php" class="nav-link" >Blog</a>
              </li>
            </ul>
            <span class="navbar-text">
             <a class="px-2" href=""><i class="fa-brands fa-facebook"></i></a>
             <a class="px-2" href=""><i class="fa-brands fa-twitter"></i></a>
             <a class="px-2" href=""><i class="fa-brands fa-whatsapp"></i></a>
             <a class="px-2" href=""><i class="fa-brands fa-instagram"></i></a>
            </span>
          </div>
        </div>
      </nav>
      <!--Content-->
      
      <!-- Content -->
<!--Modal-->
      <div class="modal-wrapper">
        <div class="modal fade" id="modal-course">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <button class=" float-end btn-close" data-bs-dismiss="modal"></button>
                  <h3 class="display-6">Add courses</h3>  
                </div>
                <div class="col-12 form-one">
                  <form action="" method="POST">
                    <input type="hidden" name="Id">
                    <div >
                      <div class="row">
                      <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <select name="course_type" id="course_type">
                            <option value="">Select type</option>
                            <option value="Web-development">Web development</option>
                            <option value="Arts & Commerce">Arts & commerce</option>
                          </select>
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" id="course_name" name="course_name" class="form-control" placeholder="Enter the courses">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" name="course_details" id="course_details" class="form-control" placeholder="Course details">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="number" name="course_price" id="course_price" class="form-control" placeholder="Course price">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <button class="btn btn-primary d-block mx-auto my-2 w-25 btn-submit" type="submit" name="Add-course">Add</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-wrapper">
        <div class="modal fade" id="modal-blog">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <button class=" float-end btn-close" data-bs-dismiss="modal"></button>
                  <h3 class="display-6">Add Blog</h3>  
                </div>
                <div class="col-12 form-one">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="Id_blog">
                    <div >
                      <div class="row">
                      <div class="col col-xs col-md col-lg col-xl col-xxl">
                      <input type="file" name="upload" id="upload">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="date" id="Date" name="Date" class="form-control" placeholder="Enter the Date">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" name="heading_blog" id="heading_blog" class="form-control" placeholder="Heading of blog">
                        </div>
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <input type="text" name="content_blog" id="content_blog" class="form-control" placeholder="Blog Content">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-xs col-md col-lg col-xl col-xxl">
                          <button class="btn btn-primary d-block mx-auto my-2 w-25 btn-submit" type="submit" name="Add-blog">Add</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>