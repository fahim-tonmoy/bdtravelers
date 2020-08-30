<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php include 'menu.php'; ?>


<!------Carousel------------>
<?php include 'carousel.php'; ?>
<!------About us------------>

<section class="my-5"> 
  <div class="py-5">
    <h3 class="text-center"> About Us</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/about/8.jpg" class="img-fluid aboutimg">    
      </div>  
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="text-center">Hello!! This is Bd Traveler.</h2>  
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores earum ratione id molestiae eaque tempore explicabo delectus, animi exercitationem mollitia eum recusandae neque, minus tenetur a! Officiis praesentium expedita maiores.
        Possimus optio laudantium quos et in consectetur illo! Consectetur repellendus ipsum reprehenderit odit. Quo nobis saepe quasi veritatis et dolorum laboriosam, quidem aliquid porro. Eum alias voluptate quasi porro dolore?
        Quod eos eligendi iusto eius totam iure quaerat maiores? Eveniet atque corporis voluptate doloribus ipsam ut, incidunt possimus fuga voluptas porro rerum veniam ratione aliquid totam iure quia ducimus facere.</p>
        <a href="about.php" class="btn btn-success"> Let's take a Visite!!</a>
      </div> 
    </div>
  </div>
</section>

<!------Services------------>

<section class="my-5"> 
  <div class="py-5">
    <h3 class="text-center"> Services</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top img-fluid" src="images/about/1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Kua-kata Sea Beach</h4>
              <p class="card-text">See Profile</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top img-fluid" src="images/about/6.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Sajek Valley</h4>
              <p class="card-text">See Profile</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top img-fluid" src="images/about/7.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Cox-Bazar</h4>
              <p class="card-text">See Profile</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!------Gallery------------>

<section class="my-5"> 
  <div class="py-5">
    <h3 class="text-center"> Gallery</h3>
  </div>
    <div class="container-fluid">
    <div class="row">
    <div class=" col-lg-4 col-md-4 col-12">
      <img src="images/about/1.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/2.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/3.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/4.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/5.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/6.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/7.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/8.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/about/9.jpg" class="img-fluid pb-4">
    </div>
   
    </div>
  </div>
</section>

<!------Contact------------>
<section class="my-5"> 
  <div class="py-5">
    <h3 class="text-center"> Contact Us </h3>
  </div>
  <div class="w-50 m-auto">

    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input  type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input  type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input  type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

  </div>
</section>


<footer>
  <p class="text-center p-3 bg-dark text-white">@Fahim Hasan | 2020</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jqu4ry/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>