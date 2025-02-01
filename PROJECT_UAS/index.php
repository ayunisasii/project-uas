<?php 
include 'connection.php';
//ambil data yang ada di tb_kontrol
$sql=mysqli_query($dbconnect, "SELECT * FROM tb_kontrol_ledbuzzer");
while($row=mysqli_fetch_assoc($sql)){
?>

<!doctype html>
<html lang="ar" dir="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css"/>

    <title>PROJECT UAS</title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5" data-bs-theme="dark">
    <div class="container-fluid justify-content-center">
      <span class="navbar-brand">  <h4>WEBSITE KONTROL LED DAN BUZZER</h4>
      </span>
    </div>
  </nav>
</div>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body text-center">
        <h5 class="card-header" style="color: blue;">LED</h5>
        <p class="card-text">Status: <span id="led-status">
          <?php
            if ($row['led'] == 1) {
              $status = "Nyala";
            } else {
              $status = "Mati";
            }
            echo $status;
          ?>
        </span></p>
        <div class="d-flex flex-column justify-content-center align-items-center">
          <a href="aksi.php?channel=1&state=1" class="btn btn-success mb-2" style="width: 150px;">ON</a>
          <a href="aksi.php?channel=1&state=0" class="btn btn-danger" style="width: 150px;">OFF</a>
        </div>
      </div>
    </div>
  </div>
<div class="col-sm-6 mb-3 mb-sm-0">
  <div class="card">
    <div class="card-body text-center">
      <h5 class="card-header" style="color: blue;">BUZZER</h5>
      <p class="card-text">Status: <span id="buzzer-status">
        <?php
          if ($row['buzzer'] == 0) {
            $status = "Mati";
          } else {
            $status = "Nyala";
          }
          echo $status;
        ?>
      </span></p>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <a href="aksi.php?channel=2&state=1" class="btn btn-success mb-2" style="width: 150px;">ON</a>
        <a href="aksi.php?channel=2&state=0" class="btn btn-danger" style="width: 150px;">OFF</a>
      </div>
    </div>
  </div>
</div>




            </div>
          </div>
      </nav>
  
        
      </div>
     
      </div>
      <?php } ?>
      
    
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>
