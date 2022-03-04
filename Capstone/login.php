<?php
    include ('c_mysqliconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Login</title>
</head>
<body>

  <!-- Navbar -->
  <?php include("navbar.php");?>

    <!-- Alert banners for different actions-->
    <?php if(isset($_REQUEST['info'])){?>
      <?php if($_REQUEST['info'] == "loggedin"){?>
        <div class="alert alert-success" role="alert">
          You have sucessfully logged in. <a href="index.php">Click here to go to the Home page</a>.
        </div>
      <?php }else if($_REQUEST['info'] == "failed"){ ?>
        <div class="alert alert-danger" role="alert">
          Missing information. You did not log in.
        </div>
      <?php }?>
    <?php }else{?>

    <!-- Login form -->
    <div class="container mt-5">
        <form method="GET">
            <input type="text" name="email" placeholder="Email" class="form-control bg-warning text-black my-3 text-center">
            <input type="password" name="password" placeholder="Password" class="form-control bg-warning text-black my-3 text-center">
            <button name="login" class="btn btn-warning">Login</button>
        </form>
    </div>
    <?php }?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    include('footer.php');
    ?>
</body>
</html>
