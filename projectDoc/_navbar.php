<?php 

if(!isset($_SESSION['AdminId'])){
	header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" style="letter-spacing: 1px; text-transform: uppercase; font-weight: medium;">Welcome <?php echo $_SESSION['AdminId']; ?></a>
    <form method="POST" class="d-flex">
      <button class="btn btn-outline-success" name="logOut">LogOut</button>
    </form>
  </div>
</nav>

<?php

if(isset($_POST['logOut'])) {
	session_destroy();
	header('location: login.php');
}

 ?>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>