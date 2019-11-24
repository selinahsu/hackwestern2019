<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="style.css">

    <title>uisle</title>

  </head>
  <body>

    <!-- Header -->
    <div class="header">
      <div class="row">
        <div class="col-sm-1">
          <img src="img/farmboy.png" alt="logo" class="responsive">
        </div>
        <div class="col-sm-7">
            <h1 align="left" class="my-header"> Aisle Vision </h1>
        </div>
        <div class="col-sm-2">
            <h6 align="center" class=bottom><b>Location:</b> London, ON</h6>
        </div>
        <div class="col-sm-2">
            <h6 align="center" class=bottom><b>Manager: </b>Name</h6>
        </div>
      </div>
    </div>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="navbar-collapse collapse dual-collapse2">
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                  <a class="nav-link" href="#">Store View</a>
                </li>
      
                <li class="nav-item active">
                  <a class="nav-link" href="#">Aisle View <span class="sr-only">(current)</span></a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link " href="#">List View</a>
                </li>
          </ul>
      </div>
      <div class="mx-auto order-last"></div>
      <div class="navbar-collapse collapse order-first dual-collapse2"></div>
    </nav>

    <!-- bootstrap grid-->
    <div class="container my-container">
      <div class="row my-row">
        <div class="col-6 my-col">
          <div id="carouselExampleControls" class="carousel slide my-carousel" data-interval="false" data-ride="carousel" >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="upload/apple.jpg" class="d-block w-100 imgs" style=" max-height: 700px; background-size: contain;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="upload/health.jpg" class="img d-block w-100 imgs" style=" max-height: 700px; background-size: contain;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="upload/peanutbutter.jpg" class="d-block w-100 imgs" style=" max-height: 700px; background-size: contain;" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

        <!--table-->
        <div class="col-6 my-col">
            <div class="my-table">
              
            <?php
    $db_host='localhost';
    $db_user='root';
    $db_pass='123456789';
    $db_date='hackwestern';

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_date);
    if(!$conn){
        die('Failed to connect to server' . mysqli_connect_error());
    }
    $sql = 'select * from inventory';
    $query = mysqli_query($conn,$sql);
    if (!$query){
        die('Error found'. mysqli_error($conn));
    }


    echo "
    <table class = 'table'>
    <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Shelf Life</th>
    <th>Stock Date</th>
    <th>Barcode</th>
    <th>Status</th>
    </tr>";

    while ($row = mysqli_fetch_array($query)){
        echo ' <tr>
         <td>'.$row['Name'].'</td>
         <td>'.$row['Category'].'</td>
         <td>'.$row['Shelf Life'].'</td>
         <td>'.$row['Stock Date'].'</td>
         <td>'.$row['Barcode'].'</td>
         <td>'.$row['Status'].'</td>
         </tr>';
    }
    echo "</table>";
    ?>
              </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
