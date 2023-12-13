<?php include 'navbar.php'; ?>

<?php
require_once('../functions/filmcontroller.php');
include_once('../models/film.php');
require_once('../functions/showcontroller.php');
include_once('../models/show.php');
$idfilm=($_GET['id']);
$idclient=($_GET['idclient']);
$filmctr = new filmcontroller();
$showctr= new ShowController();
$film = new film();
$film=$filmctr->getfilm($idfilm);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .card {
            padding-top: 30px;
        }
    </style>
</head>
<body>
   
<div class="card" style="width: 75%; padding-left: 12.5%;  padding-right: 12.5%; margin: auto;">
<img class="card-img-top" src="<?php echo "img/{$film['img']}"; ?>" alt="Card image cap" width='200' height='400'>
  <div class="card-body">
    <h2><?php echo $film['title']; ?></h2> <br>
         <h4>Director : <?php echo $film['director']; ?></h4>
         <h4>Genre :  <?php echo $film['genre']; ?></h4>
        <h4>Duree :  <?php echo $film['duree']; ?></h4>
        <?php
$idclient = $_GET['idclient'];
if ($idclient == 0) {
  echo "<script>alert('Please log in first!');</script>";
  echo "<script>window.location.href = \"sign.html\";</script>";
} else {
  echo "<form action='add_to_favorite.php?id=$idfilm&idclient=$idclient' method='post'>
    <input type='submit' name='submit' value='Add to favorite' class='btn btn-primary'>
  </form>";
}
?>

        <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" id="Show shows/Give a Review" data-target="#exampleModal">
            Show shows/Give a Review
        </button>
        <script>
  var button1 = document.getElementById("Show shows/Give a Review");
  button1.addEventListener("click", function() {
    var idclient = new URLSearchParams(window.location.search).get("idclient");
    if (idclient && idclient != 0) {
      fetch("add_to_favorite.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "idclient=" + idclient
      }).then(function(response) {
        consol.log("Added to favorite successfully!");
      }).catch(function(error) {
        consol.log("Something went wrong!");
      });
    } else {
      alert("Please log in first!");
      window.location.href = "sign.html";
    }
  });
</script>
   <br>
        <h4 style="float: right;">Reviews :  <?php echo $film['reviews']; ?>
        <img src="img/stars.png" alt="Stars" width="50" height="50"></h4>
  </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shows of <?php echo $film['title']; ?> :  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php
$shows = $showctr->get_film_Show($idfilm);
if (empty($shows)) {
    echo "No shows available for this film.";
  } else {
    foreach ($shows as $show) {
        echo "Salle: " . $show['id_salle'] . "<br>";
        echo "Start: " . $show['start'] . "<br>";
        echo "Fin: " . $show['fin'] ;
        echo '<button style="float: right;" type="button" value="Book now"class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Book This Show</button>';
        echo "<hr>";
        }
  }
?>
<?php echo "<form action='review.php?id=".$idfilm."&idclient=".$idclient."' method='post'>"; ?>
    <label for="rating">Give a Review</label>
        <select id="rating" name="rating" class="form-control" >
                   <option value="">Give a Review</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
        </select>
    <input type="submit" name="submit" value="Give your Review" class="btn btn-primary">
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <label for="Ticket">NB Ticket:</label>
            <form >
                <input type="number" id="Ticket" name="Ticket" class="form-control" required>
                <input type="submit" name="submit" value="Book now" class="btn btn-primary">
                <?php
                if(isset($_POST["submit"])){
                    $nbticket=$_POST["Ticket"];
                    $s1=new ShowController();
                    $s2=$s1->liste();
                    
                    $s1->add_attendecne($nbticket);
                }
                ?>
            </form>
    </div>
  </div>
</div>


</body>
</html>