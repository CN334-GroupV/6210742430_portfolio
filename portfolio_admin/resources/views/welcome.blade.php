<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    </head>
    
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Navapon nanakorn</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('posts') }}">TODO LSIT</a></li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                                @auth
                                    <a class="nav-link js-scroll-trigger" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Member Log in</a>
                                @endauth
                        @endif
                    </a> </li>
                    <li class="nav-item">
                        @auth('admin')
                        <a class="nav-link js-scroll-trigger" href="{{ route('admin.dashboard')}}">Admin dashboard</a>
                        @else
                        <a class="nav-link js-scroll-trigger" href="{{ route('admin.login')}}">Admin login</a>
                        @endauth
                    </a></li>
                </ul>
        </nav>

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        NAVAPON
                        <span class="text-primary">NANAKORN</span>
                    </h1>
                    <div class="subheading mb-5">
                    Khlongnueng, Khlongluang, Pathum Thani 12120 · (+66) 954348881 ·
                        <a href="mailto:name@email.com">6210742430@student.tu.ac.th</a>
                    </div>
                    <p class="lead mb-5">Hello, my name is navapon nanakorn. I'm a software engineering student at Thammasat university. I want to learn about website design. I am interested in website design. And now I'm looking for a web design internship 
                        where I can use my knowledge and learn new things from the internship. I hope you will accept me for an internship.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/gunot331" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/NaBAvill" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">High school</h3>
                            <div class="subheading mb-3">Smart farm with ardunino</div>
                            <p>This project was made using ardunino. Smart farm is the use of humidity, temperature as conditions for automatic watering of mushrooms.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2013 - 2018</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University</h3>
                            <div class="subheading mb-3">documenter</div>
                            <p>I have been involved in writing document for many projects in University.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019 - present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-3">Mini project</div>
                            <p>I have made about 3 mini projects <br>1.chat <br>2.post like comment <br>3. member system</p>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Thammasat University</h3>
                            <div class="subheading mb-3">SOFTWARE ENGINEER</div>
                            <p>GPA: 3.37</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019 - present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Kanlayanee si thammarat School</h3>
                            <div class="subheading mb-3">SMGP</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"> 2013 - 2018</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5"><b>Skills</b></h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <i class="fab fa-python" style="width:80px;height:80px;"></i>
                    <p style="font-size:130%;"><b>Python<b><br> <li style="font-size:110%;">basic python</li></p>
                    <i class="fab fa-css3-alt" style="width:80px;height:80px;"></i>
                    <p style="font-size:130%;"><b>Css<b><br> <li style="font-size:110%;">basic css</li><br><li style="font-size:110%;">Responsive</li><br><li style="font-size:110%;">Grid</li></p>
                    <i class="fab fa-centos" style="width:80px;height:80px;"></i>
                    <p style="font-size:130%;"><b>Cent-os<b><br> <li style="font-size:110%;">basic command</li></p>
                    <i class="fab fa-react" style="width:80px;height:80px;"></i>
                    <p style="font-size:130%;"><b>React<b><br> <li style="font-size:110%;">basic react</li></p>
                    <i class="fab fa-html5" style="width:80px;height:80px;"></i>
                    <p style="font-size:130%;"><b>Html<b><br> <li style="font-size:110%;">basic html</li></p>

                    <div class="subheading mb-3" style="font-size:140%;"><b>Workflow</b></div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Teamwork
                        </li>
                        <br>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Learning person
                        </li>
                        <br>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Positive person
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="skills">
            <section id="portfolio" class="resume-section">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2> </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
        <script src="js/scripts.js"></script>
        </div>
    </body>
</html>
