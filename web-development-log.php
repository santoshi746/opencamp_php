<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OpenCamp</title>
    <link rel="stylesheet" href="courses.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">OpenCamp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link " aria-current="page" href="trainee.php">Home</a>
              <a class="nav-link active" href="web_development-2.php" >Web development</a>
              <a class="nav-link" href="arts.php" >Arts & commerce</a>
              <a class="nav-link" href="#" >E-commerce</a>
              <a class="nav-link" href="#" >Machine learning</a>
              <a class="nav-link" href="#" >Artificial Intelligence</a>
            </div>
            <div class="navbar-text">
                <h3><?php
                 if (isset($_SESSION['username'])) {
                    echo $_SESSION['username']; 
                } else if(isset($_SESSION['log_fname'])){
                    echo $_SESSION['log_fname']; 
                }else{
                  echo "user";
                }
                ?></h3>
            </div>
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/c-logo.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>C LANGUAGE</h2>
                        <p>Basics of C Language </p>
                        <div class="price">1299/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                            
                        </button>
                    </div>
                </section>
            </div>
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/html-5.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>HTML COURSE</h2>
                        <p>Learn HTML now</p>
                        <div class="price">1500/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/css-3.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>CSS course</h2>
                        <p>Enchance skills with CSS</p>
                        <div class="price">1599/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/java.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>JAVA COURSE</h2>
                        <p>Become pro in Java</p>
                        <div class="price">2999/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/js.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>JAVASCRIPT COURSE</h2>
                        <p>Get started with Javascript</p>
                        <div class="price">1499/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
            <div class="col col-xs col-md col-lg col-xl col-xxl">
                <section class="card">
                    <div class="product-image">
                        <img src="./Assets/php.png" alt="OFF-white Red Edition" draggable="false" />
                    </div>
                    <div class="product-info">
                        <h2>PHP COURSE</h2>
                        <p>Use PHP as Backend technology</p>
                        <div class="price">1799/-</div>
                    </div>
                    <div class="btn">
                        <button class="buy-btn">Enroll Now</button>
                        <button class="fav">
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>