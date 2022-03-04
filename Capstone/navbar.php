<?php if(isset($_SESSION['username'])){ ?>
<!-- NAVBAR -->

  </div>
</nav>
<?php }else{?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="index.php">
        <img class="img-fluid" src="logo4.png" alt="logo">
        <div class="navbar-header text-center text-xl-center">
    </div>
  <a class="navbar-brand" href="index.php">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </a>
  <!-- Toggler/collapsibe Button -->
  <ul class="navbar-nav ml-auto">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
       </button>

       <!-- Nav items -->
       <div class="collapse navbar-collapse" id="collapsibleNavbar" "nav navbar-nav navbar-right"> <!-- Collapse navbar -->
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a class="nav-link" href="index.php">Home</a>
               </li>

               <li class="nav-item">
                   <a class="nav-link" href="registration.php">Register</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="login.php">Log in</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Options
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">Menu</a>
                   <a class="dropdown-item" href="#">Account</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Log Out</a>
                 </div>
               </li>
               <button type="Cart" class="btn btn-warning">
                 <img class="img-fluid" src="cart.png" alt="logo">
               </button>
           </ul>
       </div>
   </nav>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!--<li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="sign_up.php">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
    </ul>
  </div>
</nav>
<?php }?>
