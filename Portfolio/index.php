<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
  </head>

  <body>
    <!-- Header -->
    <header>
      <img src="img/logo.png" class="logo" alt="Logo" href />
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </header>
    <!-- //Header -->

    <!-- Home -->
    <section class="home" id="home">
      <div class="tx-home">
        <h3>Hello, We're</h3>
        <h1>Team</h1>
        <h5>A Creative Designers <span>From Modern</span></h5>
        <p>
          We're creative designers based in modern, and we're very passionate
          <br />
          and dedicated to our work
        </p>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
        <a href="#" class="btn">About Me</a>
      </div>

      <div class="home-img">
        <img src="img/home.png" alt="home-im" />
      </div>
    </section>
    <!-- //Home -->

    <!-- Services -->
    <section class="services">
      <div class="item">
        <div class="box">
          <div class="ser-img">
            <img src="img/target.svg" alt="" />
          </div>
          <h3>Pixel Perfect</h3>
          <p>
            Most common methods for designing websites tha work well on desktop
            is responsive and adaptive design.
          </p>
        </div>

        <div class="box">
          <div class="ser-img">
            <img src="img/brush.svg" alt="" />
          </div>
          <h3>High Quality</h3>
          <p>
            Most common methods for designing websites tha work well on desktop
            is responsive and adaptive design.
          </p>
        </div>

        <div class="box">
          <div class="ser-img">
            <img src="img/energy.svg" alt="" />
          </div>
          <h3>Awesome Idea</h3>
          <p>
            Most common methods for designing websites tha work well on desktop
            is responsive and adaptive design.
          </p>
        </div>
      </div>
    </section>
    <!-- //Services -->

    <!-- About -->
    <section class="about" id="about">
      <div class="ab-img">
        <img src="img/about.jpg" alt="about" />
      </div>
      <div class="ab-tx">
        <h3>We're Designers</h3>
        <h2>We Can Design Anything You Want</h2>
        <p>
          Hello there! We're a web designer, and We're very passionate and
          dedicated to my work. With 20 years experience as a professional web
          developer, We have acquired the skills and knowledge necessary to make
          your project a success. We enjoy every step of the design process,
          from discussion and collaboration.
        </p>
        <a href="#" class="btn">Hire Us</a>
      </div>
    </section>
    <!-- //About -->

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="heading">
        <h3>Portfolio</h3>
        <h2>My Amazing Work</h2>
        <p>
          Most common methods for designing websites that work well on desktop
          is <br />
          responsive and adaptive design
        </p>
      </div>

      <div class="portfolio-content">
        <div class="col">
          <img src="img/work1.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>

        <div class="col">
          <img src="img/work2.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>

        <div class="col">
          <img src="img/work3.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>

        <div class="col">
          <img src="img/work4.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>

        <div class="col">
          <img src="img/work5.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>

        <div class="col">
          <img src="img/work6.jpg" />
          <div class="layer">
            <h3>Web Design</h3>
            <h5>Popup</h5>
          </div>
        </div>
      </div>
    </section>
    <!-- //Portfolio -->

    <!-- Contact -->
    <section class="contact" id="contact">
      <div class="center">
        <h3>Let's talk about everything</h3>
        <p>Don't like forms? Send me an email.</p>
      </div>

      <div class="action">
        <form action="">
          <input
            type="email"
            name="email"
            placeholder="Enter Your Email"
            required
          />
          <input type="submit" name="submit" value="Submit" />
        </form>
      </div>
    </section>
    <!-- //Contact -->

    <!-- Footer -->
    <section class="footer">
      <p>Copyright By Team © 2022</p>
    </section>
    <!-- //Footer -->

    <!-- Script -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="Js.js"></script>
    <!-- //Script -->
  </body>
</html>
