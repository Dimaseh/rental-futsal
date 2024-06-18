<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SkuyFutsal</title>
    <link href="img/logonew.png" rel="icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- my style -->
    <link rel="stylesheet" href="style.css"/>
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet" />
  </head>
  <body>
  
  <header>
      <nav class="navbar navbar-expand-lg bg-dark shadow fixed-top" data-bs-theme="light">
        <div class="container-fluid mx-5">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php">SkuyFutsaL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Navigasi -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://wa.me/6281224429692">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br><br><br><br>
    <main>
      <section id="judul">
        <h3>Selamat Datang di <span>SkuyFutsaL</span></h3>
        <p>Silahkan melakukan pemesanan lapang di menu booking</p>
        <p>Terimakasih Salam Olahraga</p>
      </section>
      <section id="lapangan">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h3>Jenis Lapangan</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="img/lap1.png" class="card-img-top" alt="lapang1" />
                <div class="card-body">
                  <h4 class="card-text">Lapang 1 (Vinyl)</h4>
                  <p class="card-text">Harga : Rp100.000/jam</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/lap2.png" class="card-img-top" alt="lapang2" />
                <div class="card-body">
                  <h4 class="card-text">Lapang 2 (Rumput)</h4>
                  <p class="card-text">Harga : Rp80.000/jam</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/lap3.jpeg" class="card-img-top" alt="lapang3" />
                <div class="card-body">
                  <h4 class="card-text">Lapang 3 (Parquette)</h4>
                  <p class="card-text">Harga : Rp75.000/jam</p>
                </div>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <br>
              <a class="btn btn-primary" href="add.php" role="button">Booking</a>
            </div>
          </div>
        </div>
      </section>
      <br><br><br><br>
    </main>
    
    <footer class="bg-primary footer-section py-3  fixed-bottom">
        <div class="text-center">
            <p class="mb-0 text-light">Copyright &copy;
                 2023 Developed by
                <a class="text-white text-decoration-none" href="https://wa.me/6281224429692">Dimas & Natan</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
