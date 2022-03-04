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
    <title>Home</title>
</head>
<body>

    <!-- Navbar -->
    <?php include('navbar.php');?>

    <div class="container mt-5">
        <!-- Alert banners for different actions-->


        <!-- Providing access to the create blog button if logged in -->
        <?php if(isset($_SESSION['username'])){?>
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-light">+ Create a new post</a>
        </div>
        <?php }?>

        <div class="row">

                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-black bg-warning mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title">Brewed Coffee</h5>
                              <img class="img-fluid" src="coffee1.png" alt="logo">

                            <a  class="btn btn-dark text-white">Customize <span class="text-warning">&rarr;</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-black bg-warning mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title">Espresso Drinks</h5>
                            <img class="img-fluid" src="coffee.png" alt="logo">

                            <a  class="btn btn-dark text-white">Customize <span class="text-warning">&rarr;</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-black bg-warning mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title">Alternatives/Tea</h5>
                            <img class="img-fluid" src="tea.png" alt="logo">

                            <a  class="btn btn-dark text-white">Customize <span class="text-warning">&rarr;</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-black bg-warning mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title">Bakery</h5>
                            <img class="img-fluid" src="bakery.png" alt="logo">
                            <a  class="btn btn-dark text-white">Customize <span class="text-warning">&rarr;</span></a>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    include('footer.php');
    ?>
    </body>
</html>
