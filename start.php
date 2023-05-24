<?php 
    require_once('connection.php');
        session_start();

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
    
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/4fd71d0bac.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />




    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav>
      <div class="container clearfix">
        <div id="logo-box">
          <a href="#" class="logo text-uppercase">RentCar</a>
        </div>
        <div id="nav-links" class="responsive">
          <ul>
            <li class="nav-item">
              <a class="nav-link text-uppercase nav-icon">
                <i class="fas fa-bars"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#vehicles" class="nav-link text-uppercase">Vehicles</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link text-uppercase">About</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link text-uppercase">Contact</a>
            </li>
            <li class="nav-item">
              <a href="index1.php" class="nav-link text-uppercase">Login</a>
            </li>
            <li class="nav-item">
              <div class="search-box">
                <input type="text" placeholder="Type something..." />
                <div class="search-btn">
                  <i class="fas fa-search"></i>
                </div>
                <div class="cancel-btn">
                  <i class="fas fa-times"></i>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div class="container">
        <img class="img-fluid" id="profile-image" src="10.webp" alt="" />
        <h1 class="text-uppercase">Rentcar</h1>
        <h2>Are you looking for the best rent a car Baku?</h2>
      </div>
    </header>
    <section id="vehicles">
      <div class="container">
        <h2 class="text-uppercase">Vehicles</h2>
        <hr class="star-dark" />

        <div id="portfolio-images" class="clearfix">
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_1.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_2.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_3.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_4.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_5.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="portfolio-item">
              <a href="#">
                <img class="img-fluid" src="rent_6.jpg" alt="" />
                <div class="img-overlay">
                  <div class="icon">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <h2 class="text-uppercase">About</h2>
      <hr class="star-light" />
      <div id="about-text" class="clearfix">
        <div class="left">
          <p class="text">
            Our company, along with rent a car service, provides services such
            as car service with driver, minibus and bus services, airport
            meeting and transfer, excursions and organization of groups.Since
            the day of establishment of our company, our principle of work is to
            provide honest and fast service. Availability of wide range cars in
            our park provides the convenient choice of customers applying to us
            and most importantly, to serve our customers as our own family.
          </p>
        </div>
        <div class="right">
          <p class="text">
            Currently, our park serves to its customers with more than 200 cars.
            Our company, along with rent a car service, provides services such
            as car service with driver, minibus and bus services, airport
            meeting and transfer, excursions and organization of groups. Our
            company has been successfully realizing transportation service for
            many state-important events and sports games
          </p>
        </div>
      </div>
      <button class="btn btn-outline btn-large">
        <i class="fa-solid fa-car-side"></i>
        Learn More
      </button>
    </section>
    <section id="contact">
      <h2 class="text-uppercase">Contact Us</h2>
      <hr class="star-dark" />
      <form id="contact-form">
        <div class="form-group">
          <input type="text" id="name" placeholder="Name" />
        </div>
        <div class="form-group">
          <input type="text" id="name" placeholder="Email Address" />
        </div>
        <div class="form-group">
          <input type="text" id="name" placeholder="Phone Number" />
        </div>
        <div class="form-group">
          <textarea id="message" rows="5" placeholder="Message"></textarea>
        </div>
        <button class="btn btn-primary btn-large btn-outline">Send</button>
      </form>
    </section>
    <footer>
      <div class="clearfix container">
        <div class="col center">
          <h4 class="text-uppercase">Information</h4>
          <p>
            Azerbaijan, Baku. Khagani str. 20 <br />
            Email: info@rentcar.com <br />
            Phone number: +994 55 2666666
          </p>
        </div>
        <div class="col">
          <h4 class="text-uppercase center">around the web</h4>
          <div class="flex">
            <div class="icons">
              <svg height="80" width="80">
                <circle
                  cx="40"
                  cy="40"
                  r="35"
                  stroke="white"
                  stroke-width="3"
                  fill="none"
                />
              </svg>
              <a href="#">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
            </div>
            <div class="icons">
              <svg height="80" width="80">
                <circle
                  cx="40"
                  cy="40"
                  r="35"
                  stroke="white"
                  stroke-width="3"
                  fill="none"
                />
              </svg>
              <a href="">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
            </div>
            <div class="icons">
              <svg height="80" width="80">
                <circle
                  cx="40"
                  cy="40"
                  r="35"
                  stroke="white"
                  stroke-width="3"
                  fill="none"
                />
              </svg>
              <a href="">
                <i class="fab fa-whatsapp fa-2x"></i>
              </a>
            </div>
            <div class="icons">
              <svg height="80" width="80">
                <circle
                  cx="40"
                  cy="40"
                  r="35"
                  stroke="white"
                  stroke-width="3"
                  fill="none"
                />
              </svg>
              <a href="">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col center">
          <h4 class="text-uppercase">ABOUT</h4>
          <p>
            Our company, along with rent a car service, provides services such
            as car service with driver, minibus and bus services.
          </p>
        </div>
      </div>
    </footer>
    <div class="copyright">
      <div class="container">
        <small> Copyright your Website 2023 </small>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      $(".nav-icon").click(function () {
        $("#nav-links").toggleClass("responsive");
      });
      const searchBtn = document.querySelector(".search-btn");
      const cancelBtn = document.querySelector(".cancel-btn");
      const searchbox = document.querySelector(".search-box");
      const searchInput = document.querySelector("input");

      searchBtn.onclick = () => {
        searchbox.classList.add("active");
        searchInput.classList.add("active");
        searchBtn.classList.add("active");
        cancelBtn.classList.add("active");
      };
      cancelBtn.onclick = () => {
        searchbox.classList.remove("active");
        searchInput.classList.remove("active");
        searchBtn.classList.remove("active");
        cancelBtn.classList.remove("active");
      };
    </script>
</body>
</html>
    