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
          <h1>Selamat Datang !</h1>
          <h6>Lihat gaji Anda dengan memasukan data yang diperlukan.<br> Silahkan isi data Anda dengan benar !</h6>
          <br>
          <form action="gaji.php" method="POST" role="form" name="Submit" class="php-email-form needs-validation"  >
              <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" maxlength="16" minlength="16" name="nik" id="nik" placeholder="NIK" required>
                </div>  
              <div class="col-md-6 form-group">
                  <input type="text" name="id" class="form-control" id="id" placeholder="ID Pegawai" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group mt-3">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="jk" id="jk" required>
                  <label class="form-check-label" for="jk">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jk" id="jk" required>
                  <label class="form-check-label" for="jk">
                    Perempuan
                  </label>
                </div>
              </div>
              <div class="form-group mt-3">
              <select class="form-select" name="golongan" id="validationCustom04" required>
              <option selected disabled value="">Golongan</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              </select>
              <div class="invalid-feedback">
                Mohon Pilih Golongan Anda.
              </div>
              </div>
              <div class="form-group mt-3">
              <select class="form-select" name="jabatan" id="validationCustom04" required>
              <option selected disabled value="">Jabatan</option>
              <option value="1">Direktur</option>
              <option value="2">Karyawan</option>
              <option value="3">CEO</option>
              <option value="4">Magang</option>
              </select>
              <div class="invalid-feedback">
                Mohon Pilih Jabatan Anda.
              </div>
              </div>
              <div class="mt-3">
                <input type="submit" name="Submit" class="btn-get-started" value="Submit">
                <input type="reset" name="Reset" class="btn-get-quote" value="Reset">
              </div>
            </form>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/gaji.jpg" class="img-fluid" alt="">
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