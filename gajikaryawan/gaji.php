<!DOCTYPE html>
<html lang="en">

<head>


  <title>Hitung Gaji Karyawan</title>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Gaji.id</a></h1>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Hai <?php echo $_POST['nama']; ?> !..</h1>
          <h6>Tadaa! Ini dia gaji kamu...</h6>
          <br>
          <?php
            
            $golongan = $_POST['golongan'];
            $jabatan = $_POST['jabatan'];
              if ($jabatan == 3){
                $tunjangan = 8000000;
              }
              if ($jabatan == 2){
                $tunjangan =  2500000;
              }
              if ($jabatan == 1){
                $tunjangan =  5000000;
              }
              if ($jabatan == 4){
                $tunjangan =  1000000;
              }
              
                     
            if ($golongan == 1){
              $gapok = 3500000;
              $potongan = 0.075;
            }
            if ($golongan == 2){
              $gapok = 4000000;
              $potongan = 0.75;
            }
            if ($golongan == 3){
              $gapok = 4500000;
              $potongan = 0.25;
            }
            if ($golongan == 4){
              $gapok = 5000000;
              $potongan = 0.15;
            }
            if ($golongan == 5){
              $gapok = 6000000;
              $potongan = 0.5;
            }
            
            $pot = $gapok * $potongan;
            $gajiTotal = 0;
            $gajiTotal = $gapok + $tunjangan - $pot;
            
            function rupiah($angka){
	
              $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
              return $hasil_rupiah;
             
            }

          ?>
            <!-- if (isset($_POST['Submit'])) {
              
              $nama = $_POST['nama'];
              $nik = $_POST['nik'];
              $golongan = $_POST['golongan'];
              $jabatan = $_POST['jabatan'];
              $gaji = getGaji();
            }

           

          

          
          ?> -->
          <br>
          <div class="form-group mt-3">
          <label for="nik"><strong>NIK</strong></label><br>
          <h2><?php echo $_POST['nik']; ?></h2>
          </div>
          <div class="form-group mt-3">
          <label for="nama"><strong>Nama</strong></label><br>
          <h2><?php echo $_POST['nama']; ?></h2>
          </div>
          <div class="form-group mt-3">
          <label for="tunj"><strong>Tunjangan Anda (Rp)</strong></label><br>
          <h2><?php echo rupiah($tunjangan); ?></h2>
          </div>
          <div class="form-group mt-3">
          <label for="nama"><strong>Golongan</strong></label><br>
          <h2><?php echo $_POST['golongan']; ?></h2>
          </div>
          <div class="form-group mt-3">
          <label for="nama"><strong>Gaji Pokok Anda (Rp)</strong></label><br>
          <h2><?php echo rupiah($gapok); ?></h2>
          </div>
          <div class="form-group mt-3">
          <label for="nama"><strong>Total Gaji Anda (Rp)</strong><br><h6 class="fw-light fst-italic">*Sudah Termasuk Potongan</h6></label><br>
          <h2><?php echo rupiah($gajiTotal); ?></h2>
          </div>
          
          
          
          
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/gaji.jpg"  class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Rizky Sanjaya T</span></strong>. 2004324 | 4B
        </div>
      </div>   
    </div>
  </footer><!-- End Footer -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>