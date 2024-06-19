<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CAREER | AVN PROJECT</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">AVN</a>
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
                        <a class="dropdown-item" href="brand">BRAND</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CAREER</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>


  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>RECRUITMENT IS TEMPORARILY CLOSED. <BR> WE APPRECIATE YOUR INTEREST AND ENCOURAGE YOU TO <BR>REVISIT THIS PAGE FOR FUTURE UPDATES.</h1>
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


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
