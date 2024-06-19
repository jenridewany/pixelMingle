<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BRAND COLLAB | AVN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>"><img src="assets/logo.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about">ABOUT</a>
                </li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROJECTS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="couple-session">COUPLE SESSION</a>
                        <a class="dropdown-item" href="private-session">PRIVATE SESSION</a>
                        <a class="dropdown-item" href="#">BRAND</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career">CAREER</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>


  
  <!-- Hero Section -->
  <section class="hero">
    <div class="image-container">
      <img src="assets/hero-brand.png" alt="Hero Image">
    </div>
  </section>
  
  <!-- gallery -->
  <section class="gallery">
    <div class="image-container">
      <div class="image-wrapper">
        <img src="assets/brand1.png" alt="Image 1">
        <div class="description">
          <h3>WATER</h3>
          <P>FOR ROSEN</P>
        </div>
      </div>
      <div class="image-wrapper">
        <img src="assets/brand2.png" alt="Image 2">
        <div class="description">
          <h3>SKIES</h3>
          <P>FOR CLOUD SKINCARE</P></div>
      </div>
      <div class="image-wrapper">
        <img src="assets/brand3.png" alt="Image 1">
        <div class="description">
          <h3>WHITE</h3>
          <P>FOR THE ORDINARY</P>
        </div>
      </div>
      <div class="image-wrapper">
        <img src="assets/brand4.png" alt="Image 2">
        <div class="description">
          <h3>SHADOW</h3>
          <P>FOR WHITE PERRY PARFUME</P></div>
      </div>
    </div>
  </section>
  
  
  <!-- shortcut -->
  <div class="shortcut">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4>JL. LAKSDA ADISUCIPTO NO.80, AMBARUKMO, CATURTUNGGAL, KEC. DEPOK, KABUPATEN SLEMAN, DAERAH ISTIMEWA YOGYAKARTA 55281</h4>
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="private-session">PRIVATE SESSION</a></li>
            <li><a href="couple-session">COUPLE PHOTO SESSION</a></li>
            <li><a href="brand">BRAND</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="#">JOGJA</a></li>
            <li><a href="#">SOLO</a></li>
            <li><a href="#">BANDUNG</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <p>INFO@AVNPROJECTS.ID</p>
          <blockquote>
            A MOMENT,
            <br>
            WHISPERS OF ETERNITY.
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <button id="scrollBtn" onclick="topFunction()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
      <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
  </button>
  
  

  

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>AVN PROJECTS &copy; 2024 </p>
        </div>
      </div>
    </div>
  </footer>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('.navbar').addClass('scrolled');
        } else {
          $('.navbar').removeClass('scrolled');
        }
      });
    });

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollBtn").style.display = "block";
      } else {
        document.getElementById("scrollBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

  </script>
</body>
</html>
