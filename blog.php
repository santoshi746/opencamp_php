<?php
$db = mysqli_connect("localhost","root","","opencamp");
$query = "SELECT * FROM `blog_details`";
$res = mysqli_query($db,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opencamp</title>
    <link rel="stylesheet" href="blog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " >
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
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item dropdown" id="dropdown-1">
                <a class="nav-link dropdown-toggle" data-bs-target="#dropdown-1" data-bs-toggle="dropdown" href="#">Register</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#" data-bs-target="#register" data-bs-toggle="modal"  class="btn">Admin</a></li>
                  <li class="dropdown-item"><a href="#" data-bs-target="#register" data-bs-toggle="modal" class="btn">Trainee</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="dropdown-2">
                <a class="nav-link dropdown-toggle" data-bs-target="#dropdown-2" data-bs-toggle="dropdown" href="#">Login</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#" data-bs-target="#login" data-bs-toggle="modal" class="btn">Admin</a></li>
                  <li class="dropdown-item"><a href="#" data-bs-target="#login" data-bs-toggle="modal" class="btn">Trainee</a></li>
                </ul>
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
   <div class="container container-one">
   <?php
                if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_array($res)){
        
                ?>
   		<article class="postcard light blue">
			<a class="postcard__img_link" href="#">
			<?php echo '<img class="postcard__img mt-5" src="blog_images/'.$row['Image'].'" alt="">';?>
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue text-dark"><a href="#"><?php echo $row['Heading'];?></a></h1>
				<div class="postcard__subtitle small text-dark">
					<time class="text-dark">
						<i class="fas fa-calendar-alt mr-2 text-dark"></i><?php echo $row['Date']; ?>
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt text-dark"><?php echo $row['Content']; ?></div>
			</div>
		</article>
		<?php
				}
			}
		?>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>