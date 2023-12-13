<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.scss">
    <title>P1</title>
</head>

<body>
  
    <nav class="navbar navbar-dark bg-primary">
        <?php
        
        if (isset($_GET['idclient'])) {
          $idclient = $_GET['idclient'];
          echo '<a class="navbar-brand" href="home.php?idclient='.$idclient.'">Home</a>';
        } else {
          echo '<a class="navbar-brand" class="navbar-brand" href="home.php">Home</a>';
          }
        
        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php
            if (isset($_GET['idclient'])) {
              $idclient = $_GET['idclient'];
              echo "<li class='nav-item active'>
  <a class='nav-link' href='favoriteliste.php?idclient=".$idclient."'>favorite <span class='sr-only'>(current)</span></a>
</li>";
            } 
            ?>
            <?php
            if (isset($_GET['idclient'])) {
              $idclient = $_GET['idclient'];
              echo "<li class='nav-item active'>
  <a class='nav-link' href='genre.php?idclient=".$idclient."'>Genre <span class='sr-only'>(current)</span></a>
</li>";
            }else {
              echo '<li class="nav-item active">
                <a class="nav-link" href="genre.php">Genre <span class="sr-only">(current)</span></a>
              </li>';
            }
            
            ?>
            
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Account</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
              <?php
                  if (isset($_GET['idclient'])) {
                      echo '<li class="nav-item active"><a class="nav-link" href="home.php">log out</a></li>';
                    } else {
                        echo '<li class="nav-item active"><a class="nav-link" href="sign.html">Create Account/Log in</a></li>';
                      }
              ?>

          </ul>
        </div>
      </nav>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    
  </body>
</html>
