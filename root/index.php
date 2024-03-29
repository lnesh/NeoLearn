<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Eρώτηση: Έχει νόημα το SEO σε όλες τις σελίδες; -->
  <!-- Meta title SEO -->
  <title>
    NeoLearn: an eLearning platform for both students and educators
  </title>

  <!-- Meta description SEO -->
  <meta name="description"
    content="NeoLearn is an e-learning platform available for both students and teachers or educators. All courses are available in videos, pdf or text.Unlock the world of coding and explore a wide range of programming courses, from beginner to advanced levels. Master languages like Python, Java, JavaScript, and more. Start your coding journey today with our expert-led, interactive, and flexible online programming courses." />

  <!-- Open Graph meta tags SEO -->
  <meta property="og:title"
    content="NeoLearn is an e-learning platform available for both students and teachers or educators." />

  <meta property="og:description"
    content="Unlock the world of coding and explore a wide range of programming courses, from beginner to advanced levels.
     All courses are available in videos, pdf or text. Master languages like Python, Java, JavaScript, and more. Start your coding journey today with our expert-led, interactive, and flexible online programming courses." />

  <meta property="og:image" content="root\media\NeoLearnLogo.png" />

  <!-- Favicon SEO -->
  <link rel="icon" href="media/favicon.ico" type="image/icon" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css">

  <!-- for slider -->
  <style>
    *,
    *:after,
    *:before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      overflow-x: hidden !important;
      font-family: "Arial";
    }

    a {
      text-decoration: none !important;
      min-width: fit-content;
      width: fit-content;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      transition: 0.5s;
    }

    a:hover {
      opacity: 1;
    }

    .card_slider {
      background-color: #d00869;
      padding: 3rem;
    }

    .slider {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .slider li {
      list-style: none;
      position: relative;
      text-align: center;
    }

    .slider figure {
      max-width: 250px;
      position: relative;
      overflow: hidden;
      border-radius: 120px 0 120px 0;
      margin: auto;
    }

    .slider figure img {
      width: 100%;
    }

    .slider figure:before {
      content: "";
      position: absolute;
      bottom: 0px;
      left: 0;
      background-color: #1a2e35;
      width: 100%;
      height: 65%;
      border-radius: 120px 0 120px 0;
      z-index: 0;
    }

    .slider figure img {
      position: relative;
      z-index: 1;
      object-fit: cover;
      top: 10px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
    }

    .slider .slick-active li:hover figure img,
    .slider .slick-current+.slick-active figure img,
    .slider .slick-current+.slick-active li .title,
    .slider .slick-current+.slick-active li p,
    .slider .slick-active li:hover .title,
    .slider .slick-active li:hover p {
      opacity: 1;
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%);
    }

    .slider .slick-arrow {
      position: absolute;
      z-index: 1;
    }

    .slider .slick-arrow:before {
      font-family: "FontAwesome";
      font-size: 40px;
    }

    .slick-prev {
      left: 30px;
    }

    .slick-next {
      right: 30px;
    }

    .slick-prev:before {
      content: "\f104";
    }

    .slick-next:before {
      content: "\f105";
    }

    .slider li .title {
      color: #fff;
      margin-top: 10px;
      opacity: 0.6;
      transition: 0.5s;
    }

    .slider li p {
      color: #fff;
      position: relative;
      top: -15px;
      opacity: 0.6;
      transition: 0.5s;
    }

    @media(max-width:920px) {
      .slider li .title {
        font-size: 14px;
      }

      .slider li p {
        font-size: 12px;
      }
    }

    @media (max-width:800px) {

      .nav1 {
        display: none;
      }
    }

    @media (min-width:802px) {
      .dropdown {
        display: none;
      }
    }

    @media (min-width:800px) {
      .tog1 {
        display: none;
      }
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>

<body style=" background: url(./media/bg_purple22.png);
  background-attachment: fixed;
  background-size: cover;
  ">

  <!-- NAVBAR -->
  <nav class="navbar sticky-top"
    style="background:#c49af1; margin: 2% 2%; border-radius: 50px; height: 70px; align-content: center; ">

    <a class="navbar-brand" href="#">

    </a>

    <div style="display: flex;">
      <div class="nav nav1">
        <button class="btn"><a class="nav-link " aria-current="page" href="./about-us.php"
            style="font-weight: 700;">About</a></button>
        <div style="background-color: #DABAFC; border-radius: 50px; margin: 0px 10px;">
          <button class="btn btn1 " style="width: 120px; border-radius: 50px; background: #6F4B96;  "><a
              class="nav-link" href="./login.php" style="color: white; font-weight: 700;">Login</a></button>
          <button class="btn" style="width: 125px; border-radius: 50px; background: #DABAFC;"><a class="nav-link"
              href="./sign-up.php" style="color: #6F4B96; font-weight: 700;">Sign Up</a></button>
        </div>

      </div>

      <button class="navbar-toggler tog1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="40" viewBox="0,0,256,256">
          <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
            font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(5.12,5.12)">
              <path
                d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z">
              </path>
            </g>
          </g>
        </svg>
      </button>

    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="background-color: #492a6c">

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
          style="background-color: #dabafc;"></button>
      </div>

      <!-- Body -->
      <div class="offcanvas-body" style="background-color: #492a6c">
       <ul>
        <li class="nav-item" style="list-style: none;"><a class="nav-link menu-text" style="font-size: 30px;" href="./login.php">Login</a></li>
        <li class="nav-item" style="list-style: none;"><a style="font-size: 30px;" class="nav-link menu-text" href="./sign-up.php">Sign-up</a></li>
        <li class="nav-item" style="list-style: none;"><a style="font-size: 30px;" class="nav-link menu-text" href="./about-us.php">About</a></li>
       </ul>

      </div>
    </div>
  </nav>

  </div>


  <!-- HERO -->
  <div class="container">

    <div class="row row1" style="height:100vh;">
      <div class="col-xl-5 col-md-10 col-sm-12 col1" style="margin-top: 100px; color: #e7ccf2;">
        <h3 style="font-size: 3vw; font-family: 'Epilogue', sans-serif; color: #CEA4FB;">Dive Into</h3>
        <h1 style="font-size: 58px; font-family: 'Epilogue', sans-serif; ">Web Development</h1>
        <p style="font-size: 25px; line-height: 25px; letter-spacing: -0.6px;">The educational platform that connects
          students and teachers in the Digital World of
          Programming Knowledge is
          here!</p>
        <p
          style="font-size: 15px; color: #CEA4FB; line-height: 14.32px;letter-spacing: -0.45px; font-weight: 500; margin: 35px 0px 30px 0px ;">
          Not
          sure how to start?<br>
          Choose your user pofile</p>
        <a href="#student"><button class="btn btn-a" id="btn3">I'm a student</button></a>
        <a href="#teacher"><button class="btn btn-b" id="btn2">I'm a teacher</button></a>

      </div>
    </div>


    <!-- INFO STUDENT -->
    <div class="container" id="student">
      <div class="row" style="background-color: #CEA4FB; border-radius:  25px 0px  25px 0px; padding: 50px;">


        <div style="display: flex;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="green" class="bi bi-check-lg"
              viewBox="0 0 16 16">
              <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
            </svg></span>
          <p class="p1">Gain access to an extensive range of material posted by approved teachers who have expertise and
            knowledge in the
            subject area.</p>
        </div>


        <div style="display: flex;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="green" class="bi bi-check-lg"
              viewBox="0 0 16 16">
              <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
            </svg></span>
          <p class="p1">Choose from many courses and access material posted by many different teachers. Choose the
            program that
            best suits your
            individual needs and interests.</p>
        </div>


        <div style="display: flex;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="green" class="bi bi-check-lg"
              viewBox="0 0 16 16">
              <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
            </svg></span>
          <p class="p1">Enroll in the courses you are interested in and explore similar programs from tutors you have
            found helpful.</p>
        </div>




        <div class="container" style="display: flex; justify-content: end;">
          <button class="btn btn-warning continue-btn"> Continue as a
            student
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
              <circle stroke-width="3" stroke="" r="35.5" cy="37" cx="37"></circle>
              <path fill="#532d7b"
                d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
              </path>
            </svg>
          </button>
        </div>

      </div>
    </div>

    <br><br>
    <!-- Slider -->
    <section class="card_slider">
      <ul class="slider">
        <li>
          <figure>
            <img src="https://i.postimg.cc/DZ1Vyhhv/01.png" alt="" />
          </figure>
          <article>
            <h1 class="title">Rachel Elizabeth</h1>
            <p>PHP programmer</p>
          </article>
        </li>
        <li>
          <figure>
            <img src="https://i.postimg.cc/DZ1Vyhhv/01.png" alt="" />
          </figure>
          <article>
            <h1 class="title">Ross Field </h1>
            <p>Web developer</p>
          </article>
        </li>
        <li>
          <figure>
            <img src="https://i.postimg.cc/DZ1Vyhhv/01.png" alt="" />
          </figure>
          <article>
            <h1 class="title">Eric McNiece</h1>
            <p>HTML/CSS programmer</p>
          </article>
        </li>

      </ul>
    </section>

    <!-- INFO TEACHER -->
    <div class="container" id="teacher" style="margin: 3% 0%;">
      <div class="row" style="background-color: #432465; border-radius:  0px 25px 0px 25px; padding: 50px;">

        <div style="display: flex;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="#4EC52C" class="bi bi-check-lg"
              viewBox="0 0 16 16">
              <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
            </svg></span>
          <p class="p2">Post slides, code examples, projects, videos and other educational material that can be used to
            learn
            programming.</p>
        </div>
        <p class="p2">


        <div style="display: flex;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="#4EC52C" class="bi bi-check-lg"
              viewBox="0 0 16 16">
              <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
            </svg></span>
          <p class="p2">Share your knowledge and skills with the community. By promoting your material, you enable
            students to benefit from your
            experience.</p>
        </div>
        <p class="p2">



        <div class="container" style="display: flex; justify-content: end;">
          <button class="btn btn-warning continue-btn">Continue as a
            teacher
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
              <circle stroke-width="3" stroke="" r="35.5" cy="37" cx="37"></circle>
              <path fill="#532d7b"
                d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
              </path>
            </svg></button>
        </div>
      </div>
    </div>
  </div>
  <footer>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script> //GlobalVariables
    var no_of_slides, arrows_to_show;

    //OnWindowResize
    if (window.matchMedia("(max-width: 920px)").matches === true && window.matchMedia("(max-width: 621px)").matches === false) {
      no_of_slides = 2; arrows_to_show = true;
    } else if (window.matchMedia("(max-width: 620px)").matches === true) {
      no_of_slides = 1; arrows_to_show = false;
    } else {
      no_of_slides = 3, arrows_to_show = true;
    }

    //JquerySlider
    $('.slider').slick({
      slidesToShow: no_of_slides,
      slidesToScroll: 1,
      dots: false,
      arrows: arrows_to_show,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true
    });</script>
</body>

</html>