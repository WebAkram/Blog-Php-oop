<?php include_once 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>blog</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <!-- featured slider -->
  <!-- Swiper -->
  <div class="container-fluid my-2">
    <div class="row align-items-center  px-lg-5">
      <div class="col-12 col-md-8">
        <div class="d-flex justify-content-between">
          <div class="bg-primary  text-white p-2 rounded-0" style="width: 100px;">
            Tranding
          </div>
          <div class="swiper mySwiper py-2">
            <div class="swiper-wrapper">
              <?php
              $show = $database->showdata();
              foreach ($show as $product) {
              ?>
                <div class="swiper-slide">
                  <a href=""><?php echo $product['trending']; ?></a>

                </div>
              <?php } ?>
            </div>

          </div>
        </div>
      </div>

      <div style="position:relative; left: 120px; font-size: 19px;" class="col-sm-3 fw-bold  text-right ">
        Thursday, February 02, 2023
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>
  <!-- Swiper JS -->
  <!-- swiper slider for tranding  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow border mt-2">
    <div class="container-fluid">
      <a class="navbar-brand mt-2 ms-4" href="#">
        <h2 class="fw-bolder"><span class="text-primary">NEWS</span>BLOG</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto fw-bolder text-capitalize">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#main">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex border p-2 shadow bg-primary">
          <input class="form-control w-100 me-2 m-0" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div style="height:515px;" class="container-fluid  btn-hire bgimage">
    <div class="" style=" position:relative; top:115px; margin-left:100px;">
      <h1 class=" text-dark fw-bold">Hi There,</h1>
      <h1 style="font-family:sans-serif;" class=" text-dark fw-bold">I'm <?php echo $_SESSION['name']; ?> </h1>
      <h2 class="fw-bold text-dark">And Im a <span class=" auto-type text-primary"></span></h2>
    </div>
    <button style="position:relative; top:140px; margin-left:100px;" class="hire p-2"> Hire me</button>

    <picture class="nazarpic">
      <source srcset="" type="image/svg+xml">

      <img src="<?php echo $_SESSION['image']; ?>" class="imgjpg" alt="...">
    </picture>

  </div>

  <!-- blog section -->
  <h2 id="main" class="blogsection  text-light text-center py-2 my-2">Blog section</h2>
  <div id="main-content" class="blog-page">
    <div class="container">
      <div class="row clearfix">
        <div class="col-lg-8 col-md-12 left-box">
          <?php
          $fetch = $database->fetchslider();
          foreach ($fetch as $key) {
          ?>
            <div class="card single_post">
              <div class="body">
                <div class="img-post " data-aos="fade-down" data-aos-duration="500">
                  <img class="d-block img-fluid" src="<?php echo $key['images'] ?>" alt="First slide">
                </div>
                <h3 class="fw-bold "><a href="blog-details.html"></a> <?php echo $key['title']  ?> </h3>
                <p class="fw-bold text-dark">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
              </div>
              <div class="footer">
                <div class="actions">
                  <a href="javascript:void(0);" class="btn btn-primary">Continue Reading</a>
                </div>
                <ul class="stats">
                  <li><a href="javascript:void(0);">General</a></li>
                  <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                  <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                </ul>
              </div>

            </div>
          <?php } ?>
          <ul class="pagination pagination-primary justify-content-center ">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
          </ul>

        </div>
        <div class="col-lg-4 col-md-12 right-box">
          <div class="card">
            <div class="body search">
              <div class="input-group m-b-0">
                <div class="input-group-prepend">
                  <span class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="header">
              <h2 class="fw-bold shadow bg-info text-light p-2 border-sm">Categories Clouds</h2>
            </div>
            <div class="body widget">
              <ul class="list-unstyled categories-clouds m-b-0">
                <li><a href="javascript:void(0);">eCommerce</a></li>
                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                <li><a href="javascript:void(0);">Creative UX</a></li>
                <li><a href="javascript:void(0);">Wordpress</a></li>
                <li><a href="javascript:void(0);">Angular JS</a></li>
                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                <li><a href="javascript:void(0);">Website Design</a></li>
                <li><a href="javascript:void(0);">HTML5</a></li>
                <li><a href="javascript:void(0);">Infographics</a></li>
                <li><a href="javascript:void(0);">Wordpress Development</a></li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2 class="fw-bold shadow bg-info text-light p-2 text-center border">Popular Posts</h2>
            </div>
            <div class="body widget popular-post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single_post">
                    <?php
                    $farry = $database->fpblog();
                    foreach ($farry as $key) {
                    ?> <h5 class="text-center fw-bold bg-dark shadow rounded border text-info">⬇</h5>
                      <p class=" fw-bold  text-center mt-2"><?php echo $key['title'] ?></p>
                      <span style="margin-left:100px;" class="fw-bold"><?php echo $key['date'] ?></span>
                      <div class="img-post mt-2" data-aos="fade-left">
                        <img src="<?php echo $key['image'] ?>" alt="Awesome Image">
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2 class="fw-bold border bg-info text-light shadow p-2 text-center">Instagram Post</h2>
            </div>
            <div class="body widget">
              <?php
              $abc = $database->fetchrecent();
              foreach ($abc as $key) {
              ?>
                <ul class="list-unstyled instagram-plugin m-b-0 ">
                  <li class=" mb-2" style="margin-left:90px;">
                    <h4 class="fw-bold bg-light p-2 rounded text-danger "><?php echo $key['title']; ?> </h4>
                  </li>

                  <li><a href="javascript:void(0);"><img data-aos="fade-left" class="img-fluid img-thumbnail" src="<?php echo $key['image']; ?> " alt="image description"></a></li>

                </ul>
              <?php } ?>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2 class="text-center shadow border p-2 bg-info text-light">Email Newsletter </h2>
              <small class="text-secondary fw-bold">Get our products/news earlier than others, let’s get in touch.</small>
            </div>
            <div class="body widget newsletter">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Email">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-envelope  p-1"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- blog section end -->
  <div id="contact" class="content">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">


          <div class="row justify-content-center">
            <div class="col-md-6">

              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p class="fw-bolder">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

              <p><img src="img/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div style="margin-top: 100px;" class="col-md-6 ">

              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group ">
                    <input type="text" class="form-control mt-3" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control mt-3" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control mt-3" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control mt-3" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 border-0 py-2 px-4 mt-3">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div>
              <div id="form-message-success fw-bold">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <button class="topBtn" onclick="scrolltotop();"><i class="fa fa-arrow-up"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/index.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>