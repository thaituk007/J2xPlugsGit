<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JHCISxPlugs Version 2019-05-0.001x</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">JHCISxPlugs By ADSB</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#check">ตรวจสอบข้อมูลมูลพื้นฐานเบื้องต้น</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">เกี่ยวกับ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">โปรเจค</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">ติดต่อเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#map">แผนที่ GIS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#login">Logins</a>
            </li>

            <!-- <a echo Yii::$app->formatter->asDateTime($time, 'yyyy-MM-dd kk:mm:ss');</a> เวลา

            <!--
            <li class="nav-item">
            <i class="fas fa-user"></i> <!-- uses solid style -->
            <!--<i class="far fa-user"></i> <!-- uses regular style -->
            <!--<i class="fal fa-user"></i> <!-- uses light style -->
            <!--brand icon-->
            <!--<i class="fab fa-github-square"></i> <!-- uses brands style -->

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">JHCIS x Plugs</h1>
          <h5 class="mx-auto my-0 text-uppercase">Version 2019-05-0.001x</h5>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">จัดทำขึ้นเพื่อศึกษาเรียนรู้ PHP Bootstrap and Yii Framework</h2>
          <a href="#about" class="btn btn-primary js-scroll-trigger">เริ่มต้นการใช้งาน</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">JHCIS x Plugs</h2>
            <p class="text-white-50">ตรวจตารางข้อมูลเบื้องต้น สำหรับใช้งานใน JHCISxPlugs</p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <!--<img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">-->
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>โปรเจค Description</h4>
              <p class="text-black-50 mb-0">จัดทำขึ้นเพื่อใช้ในการศึจัดทำขึ้นเพื่อศึกษาเรียนรู้ในการจัดทำ Web Applicaion เชื่อมฐานข้อมูลผ่านโปรแกรม JHCIS ใน ชื่อ JHCISxPlugs สำหรับออกรายงานที่ไม่มีในระบบ JHCIS หรือ รายงานที่ User ต้องการ
                โดยใช้ GRAYSCALE เป็นพื้นฐาน Bootstrap theme</p>
            </div>
          </div>
        </div>

        <!-- Project button -->
        <section id="check" class="projects-section bg-light">
          <div class="container">
            <div class="row">
                <div class="col-lg-16 mx-auto">
                <h3 class="text-black-50 mx-auto mt-2 mb-5">ตรวจสอบแฟ้มมาตรฐาน เบื้องต้นใน JHCIS</h3>
              </div>
            </div>
            <!--<img src="img/ipad.png" class="img-fluid" alt=""> -->
          </div>

          <BR>
          <center>
          <button type="button" class="btn btn-outline-primary">PERSON</button>
          <button type="button" class="btn btn-outline-secondary">CHRONIC</button>
          <button type="button" class="btn btn-outline-success">DEATH</button>
          <button type="button" class="btn btn-outline-danger">ADDRESS</button>
          <button type="button" class="btn btn-outline-warning">CARD</button>
          <button type="button" class="btn btn-outline-info">DRUGALLERGY</button>
          <!--<button type="button" class="btn btn-light"></button>
          <button type="button" class="btn btn-dark"></button>
          <button type="button" class="btn btn-light"></button>-->
          <button type="button" class="btn btn-outline-info">DISABILITY</button>
          <button type="button" class="btn btn-outline-warning">WOMEN</button>
          <button type="button" class="btn btn-outline-danger">NERBORN</button>
          <button type="button" class="btn btn-outline-success">PROVIDER</button>
          <button type="button" class="btn btn-outline-secondary">HOME</button>
          <button type="button" class="btn btn-outline-primary">VILLAGE</button>
          <!--<button type="button" class="btn btn-link">LINK</button>-->
          <center/>
          <BR/>

          <BR>
          <center>
          <div class="spinner-border">
          <button type="button" class="btn btn-outline-secondary" href="page-top">MAIN</button>
          <button type="button" class="btn btn-outline-secondary">MAP</button>
          <center/>
          <BR/>
          </div>

          <!-- Add icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-- Add font awesome icons to buttons  -->
          <div>
          <button class="btn"><i class="fa fa-home"></i> Home</button>
          <button class="btn"><i class="fa fa-bars"></i> Menu</button>
          <button class="btn"><i class="fa fa-trash"></i> Trash</button>
          <button class="btn"><i class="fa fa-close"></i> Close</button>
          <button class="btn"><i class="fa fa-folder"></i> Folder</button>
          </BR>
          </div>

        </header>

      </div>
      <section id="map" class="projects-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="text-black-50">แผนที่ GIS</p>
            </div>
          </div>
          <img src="img/large-world-map.jpg" class="img-fluid" alt="">
        </div>
      </section>






    </section>

    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">อำเภอเมืองชลบุรี จังหวัดชลบุรี</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">thaituk007@hotmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">โทรศัพท์</h4>
                <hr class="my-4">
                <div class="small text-black-50">+66 868368499,+66 0802428055</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-font-awesome"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fas fa-camera"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-node"></i>
          </a>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; JHCISxPlugs 2019
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
