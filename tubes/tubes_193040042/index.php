<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Foonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Philosopher&family=Viga&display=swap" rel="stylesheet">
  <!-- Css ME -->
  <link rel="stylesheet" href="css/newcss.css">
  <title>HiddenFood</title>
</head>

<body id="body">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-light" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#body">HiddenFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="php/login2.php">Sign in</a>
          <a class="nav-item  btn btn-primary tombol" href="php/registrasi.php">Join Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Akhir Navbar -->
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Perut <span>Kenyang</span> Hatipun <span>Senang</span></h1>
      <a href="php/isi.php" class="btn btn-primary tombol">Telusuri</a>
    </div>
  </div>
  <!-- Akhir Jumbotron -->
  <!-- container -->
  <div class="container justify-content-center">
    <!-- info -->
    <div class="row">
      <div class="col-9 info-panel">
        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block gambar" src="assets/img/index/slide1.jpg" alt="First slide">
              <div class="carousel-caption">
                <h4>Lengkap</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block gambar" src="assets/img/index/slide2.jpg" alt="Second slide">
              <div class="carousel-caption">
                <h4>Bervariasi</h4>
              </div>
            </div>
            <div class="carousel-item ">
              <img class="d-block gambar " src="assets/img/index/slide3.jpg" alt="Third slide">
              <div class="carousel-caption">
                <h4>Update</h4>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- akhir -->
      </div>
    </div>
    <!-- about -->
    <div class="row about">
      <div class="col-lg-7">
        <h5 class="h5-about">SEBAGAI WEBSITE PENYEDIA INFORMASI MAKANAN KAMI MENYEDIAKAN INFORMASI SESUAI DENGAN YANG DIBUTUHKAN.</h5><br>
        <p class="p-about">
          Dari sekian banyak makanan di dunia ini kami berusaha memberikan informasi makanan secara lengkap dari berbagai daerah kami juga mengembangkan segala hal tentang memasak baik dari segi bahan ataupun manfaat makanan tersebut. Website ini tidak terlepas dari dukungan para partisipan yang memberikan Informasi makanan nya disini.
        </p>
      </div>
      <div class="col-lg-5">
        <img src="assets/img/index/about.jpg" alt="about" class="img-fluid">
      </div>
    </div>
    <div class="row about2">
      <div class="col-lg">
        <p class="p-about2">
          Hidden Food adalah Konsep kami dimana kami juga memberikan informasi mengenai makanan-makan lezat yang jarang didengar oleh khalayak masyarakat umum. Untuk hal lainnya anda bisa eksplorasi di Web kami, dan jika anda pun berminat untuk menulis informasi tentang makanan di web ini maka kami akan sangat berterima kasih. Trust your food!!
        </p>
      </div>
    </div>

    <!-- akhir about -->
    <!-- pic -->
    <div class="row pic">
      <div class="col-lg">
        <img src="assets/img/index/pic1.jpg" alt="pic" class="img-fluid">
      </div>
      <div class="col-lg">
        <img src="assets/img/index/pic2.jpg" alt="pic" class="img-fluid">
      </div>
      <div class="col-lg">
        <img src="assets/img/index/pic3.jpg" alt="pic" class="img-fluid">
      </div>
    </div>




    <!-- akhir pic -->
  </div>
  <!-- akhir container -->

  <!-- footer -->

  <div class="card text-center" style="background-color: rgb(223, 218, 205)">
    <div class="card-header" style="background-color: rgb(223, 218, 205)">
      HiddenFood
    </div>
    <div class="card-body" style="background-color: rgb(223, 218, 205)">
      <h5 class="card-title">Special Information Food</h5>
      <p class="card-text">Join us to provide information about various foods</p>
    </div>
    <div class="card-footer text-muted" style="background-color: rgb(223, 218, 205)">
      © 2020
    </div>
  </div>

  <!-- akhir footer -->





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- js -->
  <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 560 || document.documentElement.scrollTop > 560) {
        document.getElementById("navbar").style.background = "rgb(223, 218, 205)";

      } else {
        document.getElementById("navbar").style.background = "transparent";

      }
    }
  </script>
</body>

</html>