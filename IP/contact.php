<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catering Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" href="style.css" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="Logo">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="images/logo black.png" class="rounded mx-auto d-block" alt="logo" style="height:110px; width:100px; justify-content: center;">

    </div>


    <style type="text/css">
      #btn {
        float: right;
        margin-right: 20px;
        width: 100px;
      }

      .navbar {
        background-color: #00141a !important;
      }

      .nav-link {
        margin-left: 250px;
      }

      .carousel-item {
        height: 400px;
        width: 100%;
      }

      .d-flex {
        float: right;
        border-radius: 20px;

      }

      .btn {
        margin-left: 20px;

      }
    </style>

    <br>


  </div>

  <br><br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About-us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-s.php">Contact-us</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <div class="row">
      <h1 style="color:black;">contact us</h1>
    </div>
    <div class="row">
      <h4 style="text-align:center">We'd love to hear from you!</h4>
    </div>
      <div class="row input-container">
        <div class="col-xs-12">
          <div class="styled-input wide">
            <input type="text" required />
            <label>Name</label>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="styled-input">
            <input type="email" name="email" required />
            <label>Email</label>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="styled-input" style="float:right;">
            <input type="tel" pattern="[0-9]{10}" required />
            <label>Phone Number</label>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="styled-input wide">
            <textarea required></textarea>
            <label>Message</label>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="btn-lrg submit-btn" type="submit" value = "Submit">Send Message</div>
        </div>
      </div>
  </div>
  <style>
    body {
      /* background-color: #444442; */
      /* padding-top: 85px; */
    }

    h1 {
      font-family: 'Poppins', sans-serif, 'arial';
      font-weight: 600;
      font-size: 72px;
      color: white;
      text-align: center;
    }

    h4 {
      font-family: 'Roboto', sans-serif, 'arial';
      font-weight: 400;
      font-size: 20px;
      color: #9b9b9b;
      line-height: 1.5;
    }

    /* ///// inputs /////*/

    input:focus~label,
    textarea:focus~label,
    input:valid~label,
    textarea:valid~label {
      font-size: 0.75em;
      color: #999;
      top: -5px;
      -webkit-transition: all 0.225s ease;
      transition: all 0.225s ease;
    }

    .styled-input {
      float: left;
      width: 293px;
      margin: 1rem 0;
      position: relative;
      border-radius: 4px;
    }

    @media only screen and (max-width: 768px) {
      .styled-input {
        width: 100%;
      }
    }

    .styled-input label {
      color: #999;
      padding: 1.3rem 30px 1rem 30px;
      position: absolute;
      top: 10px;
      left: 0;
      -webkit-transition: all 0.25s ease;
      transition: all 0.25s ease;
      pointer-events: none;
    }

    .styled-input.wide {
      width: 650px;
      max-width: 100%;
    }

    input,
    textarea {
      padding: 30px;
      border: 0;
      width: 100%;
      font-size: 1rem;
      background-color: #2d2d2d;
      color: white;
      border-radius: 4px;
    }

    input:focus,
    textarea:focus {
      outline: 0;
    }

    input:focus~span,
    textarea:focus~span {
      width: 100%;
      -webkit-transition: all 0.075s ease;
      transition: all 0.075s ease;
    }

    textarea {
      width: 100%;
      min-height: 15em;
    }

    .input-container {
      width: 650px;
      max-width: 100%;
      margin: 20px auto 25px auto;
    }

    .submit-btn {
      float: right;
      padding: 7px 35px;
      border-radius: 60px;
      display: inline-block;
      background-color: #4b8cfb;
      color: white;
      font-size: 18px;
      cursor: pointer;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06),
        0 2px 10px 0 rgba(0, 0, 0, 0.07);
      -webkit-transition: all 300ms ease;
      transition: all 300ms ease;
    }

    .submit-btn:hover {
      transform: translateY(1px);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10),
        0 1px 1px 0 rgba(0, 0, 0, 0.09);
    }

    @media (max-width: 768px) {
      .submit-btn {
        width: 100%;
        float: none;
        text-align: center;
      }
    }

    input[type=checkbox]+label {
      color: #ccc;
      font-style: italic;
    }

    input[type=checkbox]:checked+label {
      color: #f00;
      font-style: normal;
    }
  </style>
  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>1010 Avenue, sw 54321, mumbai</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>9876543210 0</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>bonappetit@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">

              <div class="footer-text">
                <p>To know more about Bon Appetit and to always have delicious looking food front of your eyes</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Useful Links</h3>
              </div>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">contact us</a></li>

                <!-- <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                  <button><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>Copyright &copy; 2018, All Right Reserved Andrea</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <!-- <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <style>
    ul {
      margin: 0px;
      padding: 0px;
    }

    .footer-section {
      background: #151414;
      position: relative;
    }

    .footer-cta {
      border-bottom: 1px solid #373636;
    }

    .single-cta i {
      color: #ff5e14;
      font-size: 30px;
      float: left;
      margin-top: 8px;
    }

    .cta-text {
      padding-left: 15px;
      display: inline-block;
    }

    .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
    }

    .cta-text span {
      color: #757575;
      font-size: 15px;
    }

    .footer-content {
      position: relative;
      z-index: 2;
    }

    .footer-pattern img {
      position: absolute;
      top: 0;
      left: 0;
      height: 330px;
      background-size: cover;
      background-position: 100% 100%;
    }

    .footer-logo {
      margin-bottom: 30px;
    }

    .footer-logo img {
      max-width: 200px;
    }

    .footer-text p {
      margin-bottom: 14px;
      font-size: 14px;
      color: #7e7e7e;
      line-height: 28px;
    }

    .footer-social-icon span {
      color: #fff;
      display: block;
      font-size: 20px;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
    }

    .footer-social-icon a {
      color: #fff;
      font-size: 16px;
      margin-right: 15px;
    }

    .footer-social-icon i {
      height: 40px;
      width: 40px;
      text-align: center;
      line-height: 38px;
      border-radius: 50%;
    }

    .facebook-bg {
      background: #3B5998;
    }

    .twitter-bg {
      background: #55ACEE;
    }

    .google-bg {
      background: #DD4B39;
    }

    .footer-widget-heading h3 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 40px;
      position: relative;
    }

    .footer-widget-heading h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      height: 2px;
      width: 50px;
      background: #ff5e14;
    }

    .footer-widget ul li {
      display: inline-block;
      float: left;
      width: 50%;
      margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
      color: #ff5e14;
    }

    .footer-widget ul li a {
      color: #878787;
      text-transform: capitalize;
    }

    .subscribe-form {
      position: relative;
      overflow: hidden;
    }

    .subscribe-form input {
      width: 100%;
      padding: 14px 28px;
      background: #2E2E2E;
      border: 1px solid #2E2E2E;
      color: #fff;
    }

    .subscribe-form button {
      position: absolute;
      right: 0;
      background: #ff5e14;
      padding: 13px 20px;
      border: 1px solid #ff5e14;
      top: 0;
    }

    .subscribe-form button i {
      color: #fff;
      font-size: 22px;
      transform: rotate(-6deg);
    }

    .copyright-area {
      background: #202020;
      padding: 25px 0;
    }

    .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
    }

    .copyright-text p a {
      color: #ff5e14;
    }

    .footer-menu li {
      display: inline-block;
      margin-left: 20px;
    }

    .footer-menu li:hover a {
      color: #ff5e14;
    }

    .footer-menu li a {
      font-size: 14px;
      color: #878787;
    }
  </style>

</body>

</html>
