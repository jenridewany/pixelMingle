<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET IN TOUCH | AVN</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('css/styles-contact.css'); ?>">
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
                        <a class="nav-link" href="career">CAREER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Form and Map Section -->
    <section class="contact">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-form">
                    <h2>INQUIRY</h2>
                    <p>WE'RE AVAILABLE, LET'S DISCUSS! WE ENSURE THAT OUR WORK IS PROFESSIONAL AND DELIVERED WITH THE HIGHEST QUALITY THAT FITS WITHIN YOUR EXPECTED PRICE RANGE. WE CAN ALSO PROMISE THAT YOUR PROJECT WILL RECEIVE OUR UTMOST ATTENTION. WE LOOK FORWARD TO HEARING FROM YOU SOON AND BEGINNING WHAT WE HOPE WILL BE A PRODUCTIVE COLLABORATION.<BR><BR>GET IN TOUCH! INTERESTED IN CONNECTING? WE'RE HERE TO LISTEN. HERE'S HOW YOU CAN CONTACT US</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="YOUR NAME*" required>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="YOUR PHONE NUMBER*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="YOUR EMAIL*" required>
                        </div>
                        <div class="form-group">
                            <input type="address" class="form-control" id="address" name="address" placeholder="YOUR ADDRESS*" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="category" name="category" required>
                                <option value="" selected disabled>SELECT YOUR PACKAGE*</option>
                                <option value="COUPLE SESSION">COUPLE SESSION</option>
                                <option value="PRIVATE SESSION">PRIVATE SESSION</option>
                                <option value="BRAND">BRAND</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="WRITE MESSAGE HERE" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">GET IN TOUCH</button>
                    </form>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.06840462533!2d110.39852067588645!3d-7.782572277223244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c2bc1c6023%3A0x1ce91a3c5aa8b3bc!2sPlaza%20Ambarrukmo!5e0!3m2!1sen!2sid!4v1715087643858!5m2!1sen!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>            
            </div>
            <div class="col-md-3">
                <div class="faq-form">
                    <h2>ANY QUESTION ?</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="YOUR NAME*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="YOUR EMAIL*" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="WRITE MESSAGE HERE" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                    <br>
                    <br>
                    <p>"A MOMENT, WHISPERS OF ETERNITY."</p>
                    <br>
                    <p>THAT IS HOW OUR DNA SPEAKS. EVERY SECOND OF YOUR MOMENTS, IS A WITNESS THAT DEFINES YOU. WE ARE HERE TO PROOF THE BLISS OF YOUR LIFE, THE TEARS OF JOY, AND HEART-WARMING EVENTS OF YOUR JOURNEY. LET’S REVEAL YOUR MAGICAL LOVE STORIES WITH US.</p>
                    <br>
                    <p>WE’LL SEE YOU SOON.</p>
                </div>          
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

  <!-- Footer -->
  <footer>
    <div class="row">
        <div class="col-md-12 text-center">
          <p>AVN PROJECTS &copy; 2024 </p>
        </div>
      </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
