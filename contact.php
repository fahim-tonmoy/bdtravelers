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

<div class="jumbotron">
  <h1>Bd travelars :)</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam tempora impedit libero porro neque laborum, maiores consequatur quis sapiente laboriosam fugit qui repellat vitae sint veniam nemo modi voluptates. Perferendis.</p>
</div>

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

</body>
</html>