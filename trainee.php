<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OpenCamp</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!--navbar-->
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
                <a class="nav-link" href="#" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas">profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="web-development-log.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Why_Choose_us">Why choose us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Your courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
            <span class="navbar-text">
             <h4 class="text-light">
             <?php 
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username']; 
                    } else if(isset($_SESSION['log_fname'])){
                        echo $_SESSION['log_fname']; 
                    }else{
                      echo "user";
                    }
                    ?>
             </h4>
               
            </span>
          </div>
        </div>
      
    </nav>
      
    <!--navbar-->
    <!--content-->
    <div class=" block container-1 container">
      <div class="row">
        <div class=" col col-xs col-md col-lg col-xl col-xxl">
          <div class="card-group">
            <div class="card ">
              <div class="card-body">
                <div class="card-img">
                  <img src="" alt="">
                </div>
                <h3 class="card-heading">Card heading</h3>
                <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non quasi nesciunt minima a maiores iusto rerum error! Possimus, cum!</p>
              </div>
            </div>
            <div class="card card-2">
              <div class="card-body">
                <div class="card-img">
                  <img src="" alt="">
                </div>
                <h3 class="card-heading">Card heading</h3>
                <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non quasi nesciunt minima a maiores iusto rerum error! Possimus, cum!</p>
              </div>
            </div>
            <div class="card ">
              <div class="card-body">
                <div class="card-img">
                  <img src="" alt="">
                </div>
                <h3 class="card-heading">Card heading</h3>
                <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non quasi nesciunt minima a maiores iusto rerum error! Possimus, cum!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class=" block container-fluid container-2">
      <div class="content-2">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore debitis at quis molestias aut iure cupiditate quos, beatae eos, vel officiis dolor maiores perspiciatis voluptatum aspernatur eaque culpa fugit eveniet!</p>
      </div>
    </div>

    <div class="block container container-3 mb-5">
      <h1 class="mb-5">Courses Available...</h1>
      <div class="row my-5">
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-alarm-fill"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-award-fill"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-bag-check-fill"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>        
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3">
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-bar-chart-line-fill"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-book-half"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <div class="card">
            <div class="card-body">
              <i class="icon-1 bi bi-bookmarks-fill"></i>
              <div class="content-3">
                <h4>Lorem ipsum dolor sit.</h4>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione autem nisi officiis ad exercitationem laudantium a odit repellat vitae!</small>
                <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-3 align-items-center">Enroll <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="" class="btn btn-success rounded-5 w-75 py-3 mx-auto d-block mt-5 align-items-center">For more couses... <span class="bg-light ms-2 rounded-5 py-2 px-2 align-items-center justify-content-center"><i class="bi bi-arrow-right text-success"></i></span></a>
    </div>

    <div class="block container container-4" id="Why_Choose_us">
      <div class="row">
        <div class="col-xs col-md col-lg col-xl col-xxl"> 
          <h1>Why Choose us..?</h1>
          <div>
            <h5><i class="bi bi-lightbulb-fill text-warning"></i> Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor architecto laboriosam officia quasi eos id explicabo natus. Reprehenderit, veniam.</p>
          </div>
          <hr>
          <div>
            <h5><i class="bi bi-lightbulb-fill text-warning"></i> Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor architecto laboriosam officia quasi eos id explicabo natus. Reprehenderit, veniam.</p>
          </div>
          <hr>
          <div>
            <h5><i class="bi bi-lightbulb-fill text-warning"></i> Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor architecto laboriosam officia quasi eos id explicabo natus. Reprehenderit, veniam.</p>
          </div>
          <hr>
        </div>
        <div class="col-xs col-md col-lg col-xl col-xxl">
          <h1>Testimonials</h1>
          <div class="carousel slide" id="carousel-1" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./Assets/undraw_got-an-idea_1z3i.svg" alt="" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="./Assets/undraw_segment-analysis_cl30.svg" alt="" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="./Assets/undraw_success-factors_i417.svg" alt="" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="./Assets/undraw_workspace_s6wf.svg" alt="" class="d-block w-100">
              </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#carousel-1">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" data-bs-target="#carousel-1">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </div>


    <!--content-->
    <!-- footer -->
    <div class="block container-fluid my-5">
      <footer class="text-center text-lg-start text-white" style="background-color: black">
        <section class="d-flex justify-content-between p-4" style="background-color: green" >
          <div class="me-5">
            <span>Join our online community today..!</span>
          </div>
          <div class="footer-social">
            <a href="" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </section>
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold">OpenCamp</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio omnis animi modi nihil sit culpa.
                </p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold">Courses</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"/>
                <p>
                  <a href="#!" class="text-white">Web development</a>
                </p>
                <p>
                  <a href="#!" class="text-white">E-commerce</a>
                </p>
                <p>
                  <a href="#!" class="text-white">Arts & science</a>
                </p>
                <p>
                  <a href="#!" class="text-white"> Machine learning</a>
                </p>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold">Useful links</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                <p>
                  <a href="#!" class="text-white">Home</a>
                </p>
                <p>
                  <a href="#!" class="text-white">About us</a>
                </p>
                <p>
                  <a href="#!" class="text-white">Contact us</a>
                </p>
                <p>
                  <a href="#!" class="text-white">Help</a>
                </p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold">Contact</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                <p><i class="fas fa-home mr-3"></i>Telangana, Hyderabad</p>
                <p><i class="fas fa-envelope mr-3"></i> username@domain</p>
                <p><i class="fas fa-phone mr-3"></i>+91 1234567890</p>
                <p><i class="fas fa-print mr-3"></i>+91 1234567890</p>
              </div>
            </div>
          </div>
        </section>
        <div class="text-center p-3"  style="background-color: rgba(0, 0, 0, 0.2)" >
          <a class="text-white" href="#">&copy; ALL RIGHTS ARE RESERVED BY OPENCAMP</a>
        </div>
      </footer>
      <!-- Footer -->
    
    </div>
    <!-- End of .container -->
     <!-- footer -->
       <!--offcanvas-->
       
      <div class="offcanvas offcanvas-end"  id="offcanvas-1" >
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Profile</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
           <h1>
           <?php 
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username']; 
                    } else if(isset($_SESSION['log_fname'])){
                        echo $_SESSION['log_fname']; 
                    }else{
                      echo "user";
                    }
                    ?>
           </h1>
           <p>Account type :<?php if (isset($_SESSION['type'])) {
                        echo $_SESSION['type']; 
                    } else if(isset($_SESSION['log_type'])){
                        echo $_SESSION['log_type']; 
                    }else{
                      echo "user";
                    }?></p>
           <p>Mobile no : <?php if (isset($_SESSION['mobile'])) {
                        echo $_SESSION['mobile']; 
                    } else if(isset($_SESSION['log_mobile'])){
                        echo $_SESSION['log_mobile']; 
                    }else{
                      echo "user";
                    }?></p>
           <p>Registered email: <?php if (isset($_SESSION['email'])) {
                        echo $_SESSION['email']; 
                    } else if(isset($_SESSION['log_email'])){
                        echo $_SESSION['log_email']; 
                    }else{
                      echo "user";
                    }?></p>
               <form action="update-traine.php">
                        <input type="hidden" name="abc" value="<?php if (isset($_SESSION['register-id'])) {
                        echo $_SESSION['register-id']; 
                    } else if(isset($_SESSION['log_id'])){
                        echo $_SESSION['log_id']; 
                    }else{
                      echo "user";
                    } ?>">
                        <input type="submit" value="Update" name="update" class="btn btn-warning my-1">
                        </form>        
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
      
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>