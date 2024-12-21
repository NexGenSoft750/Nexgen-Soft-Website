<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nexgen Soft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="<?php echo assets('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets('css/media.css'); ?>">
</head>
<body> 
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
        <img src="<?php echo assets('images/nexgen_soft_logo.png'); ?>" alt="Logo" style="height: 45px; width: 100px;"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav nav-pills mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?=baseUrl('')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?=baseUrl('services')?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./case_study.html">Case Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./contact_us.html">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-secondary">Login</button>
                    <button type="button" class="btn btn-primary">Create account</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="video-wrapper">
        <video autoplay muted loop playsinline>
            <source src="<?php echo assets('videos/video_4k.mp4'); ?>" type="video/mp4">
        </video>
    </div>
    <div class="centered-text">
        <p class="fs-1  fw-bold hide-on-small">Empowering Your Business Through Cutting-Edge IT Solutions</p>
        <p class="fs-5 fw-semibold text-light hide-on-small">Innovative IT solutions, meticulously tailored for your success – where technology meets excellence for seamless business transformation.</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <button class="btn px-5 py-2 btn-primary fs-6 fw-medium rounded-pill">Get Free Estimation</button>
            <button class="btn px-5 py-2  text-light fs-6 fw-medium d-flex  align-items-center gap-2" id="recent-projects-btn">
                <span>Recent Projects</span>
                <i class="fa fa-long-arrow-right text-light" style="transform: translateY(2px)" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</header>
<section class="container-fluid service-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <div class="text-uppercase hero-section-title" style="color:rgb(139 61 255);">Services</div>
                 <div class="h1 fw-bold mt-4 hero-section-heading">We provide client-centric services</div>
                 <p class="fs-5 hero-section-para">Maximize your website's capabilities and reach its full potential with our <br> services.</p>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <?php if($services) { 
                    foreach($services as $key => $service) {
            ?>
                <div class="col-12 col-xxl-6">
                    <div class="service-img position-relative">
                        <img src="/uploads/<?=$service['service_img']?>" alt="service img" class="img-fluid rounded">
                        <div class="services-icons border-2 border-light rounded d-flex align-items-center justify-content-center position-absolute" style="background-color:rgb(139 61 255);">
                            <?=$service['service_icon']?>
                        </div>
                    </div>
                    <div class="service-body p-4 pt-5">
                        <div class="h3 fw-bold service-title"><?=$service['service_name']?></div>
                        <p class="fs-6 mt-3 service-description" style="color:#64748b;">
                            <?=$service['service_description']?>
                        </p>
                        <div class="service-badges d-flex flex-wrap gap-3">
                            <?php if($service['services_tags']) {
                                    foreach($service['services_tags'] as $key => $tag) { 
                            ?>
                            <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;"><?=$tag?></span>
                            <?php
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }    
            ?>    
        </div>
    </div>
</section>

<section class="py-xl-9 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-xl-7 mb-5">
                        <small class="text-uppercase ls-md fw-semibold text-primary">Company Overview</small>
                        <h2 class="mb-0 mt-3">Discover Our Story: Unveiling the Journey</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tabs-to-dropdown">
                        <div class="nav-wrapper col-12 mb-5">
                            <ul class="nav nav-fill nav-line-bottom textColor " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation" >
                                    <a class="nav-link nav-link-1 active list-font-2 list-font" data-target="#pills-company" role="tab"
                                        aria-selected="true">Who we are</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link nav-link-1  list-font-2 list-font" data-target="#pills-commitments" role="tab"
                                        aria-selected="false">Our Commitments</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link nav-link-1 list-font-2 list-font" data-target="#pills-team" role="tab"
                                        aria-selected="false">Our Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContentOne">
                            <div class="tab-pane fade show active" id="pills-company" role="tabpanel"
                                data-aos="fade-up">
                                <div class="row align-items-center gy-5">
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-column gap-2">
                                                <h2>Forward-thinking IT company through innovation.</h2>
                                                <p class="mb-0">At [Your Company Name], we are more than just a
                                                    technology solutions provider – we are architects of innovation...
                                                </p>
                                            </div>
                                            <div>
                                                <a href="#!" class="btn btn-primary rounded-pill">Our Journey</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="position-relative">
                                            <img src="<?php echo assets('images/it-company-about-img_2.jpg'); ?>" alt="about"
                                                class="rounded-3 img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-commitments" role="tabpanel" data-aos="fade-up">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                            <div>
                                                <span class=" bg-opacity-10 rounded icon-shape icon-xl">
                                                    <img src="<?php echo assets('images/innovation.svg'); ?>" alt="innovation">
                                                </span>
                                            </div>
                                            <div>
                                                <h3>Innovation</h3>
                                                <p class="mb-0">We thrive on creativity and ingenuity...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                            <div>
                                                <span class=" bg-opacity-10 rounded icon-shape icon-xl">
                                                    <img src="<?php echo assets('images/integrity.svg'); ?>" alt="integrity">
                                                </span>
                                            </div>
                                            <div>
                                                <h3>Integrity</h3>
                                                <p class="mb-0">Trust is the foundation of our relationships...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                            <div>
                                                <span class=" bg-opacity-10 rounded icon-shape icon-xl">
                                                    <img src="<?php echo assets('images/hands-clapping.svg'); ?>" alt="clapping">
                                                </span>
                                            </div>
                                            <div>
                                                <h3>Client-Centric</h3>
                                                <p class="mb-0">Your success is our success...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-team" role="tabpanel" data-aos="fade-up">
                                <div class="row align-items-center gy-5">
                                    <div class="col-lg-7">
                                        <div class="d-flex gap-lg-4 gap-2 justify-content-center">
                                            <div class="mt-5">
                                                <img src="<?php echo assets('images/team-long-img-1.jpg'); ?>" alt="team" class="img-fluid rounded-3">
                                            </div>
                                            <div>
                                                <img src="<?php echo assets('images/team-long-img-2.jpg'); ?>" alt="team" class="img-fluid rounded-3">
                                            </div>
                                            <div class="mt-5">
                                                <img src="<?php echo assets('images/team-long-img-3.jpg'); ?>" alt="team" class="img-fluid rounded-3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 pe-lg-6">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-column gap-2">
                                                <h3 class="mb-0">Meet the Team: Driving Innovation with Passion and
                                                    Expertise</h3>
                                                <p class="mb-0">At [Your Company Name], our success is driven by the
                                                    talented individuals...</p>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-primary rounded-pill">Explore Careers</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="py-5 bg-gray-900 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <div class="text-center mb-5">
          <small class="text-uppercase ls-md fw-semibold text-primary">Case study</small>
          <h2 class="my-3 text-white">Explore Success Stories</h2>
          <p class="mb-0 text-body">Explore Success Stories: Real-World Impact through Our Customer Case Studies</p>
        </div>
      </div>
    </div>

    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-2.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-3.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-3.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-4.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-4.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-5.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-5.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-6.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-6.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-2.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
<section class="business-cards py-lg-9 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-main shadow-lg border-0">
                    <div class="row g-0">
                        <div class="col-md-6 d-none d-md-block rounded-start-2 form-img">
                            <img src="<?php echo assets('images/it-company-form-img.jpg'); ?>" alt="team" class="img-fluid rounded-3">
                        </div>
                        <div class="col-xl-6 col-md-6 bg-white ">
                            <div class="card-body card-main-text p-3 p-md-5">
                                <form action="<?=$sendEnqueryAction?>" method="POST" class="row needs-validation g-3" novalidate>
                                    <div class="col-lg-12 py-2">
                                        <h3 class="heading">Ready to Transform Your Business?</h3>
                                        <p class="heading-para">
                                            Drop us a line about your project at
                                            <span><a href="mailto:<?=$company_email?>"><?=$company_email?></a></span>
                                            or via the contact form below, and we will contact you soon.
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="companyFirstnameInput" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="first_name" class="form-control" id="companyFirstnameInput" required>
                                        <div class="invalid-feedback">Please enter firstname.</div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="companyLastnameInput" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" class="form-control" id="companyLastnameInput" required>
                                        <div class="invalid-feedback">Please enter lastname.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="companyNameInput" class="form-label">Company</label>
                                        <input type="email" name="company_name" class="form-control" id="companyNameInput" required>
                                        <div class="invalid-feedback">Please enter company name.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="companyEmailInput" class="form-label">Work Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="companyEmailInput" required>
                                        <div class="invalid-feedback">Please enter email.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="companyPhoneInput" class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone_number" class="form-control" id="companyPhoneInput" required>
                                        <div class="invalid-feedback">Please enter phone.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="companyTextarea" class="form-label">Describe your idea</label>
                                        <textarea name="message" class="form-control" id="companyTextarea" placeholder="Write to us" rows="3" required></textarea>
                                        <div class="invalid-feedback">Please write a message.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check py-2">
                                            <input class="form-check-input" name="agree" type="checkbox" id="companyCheckagree" required>
                                            <label class="form-check-label" for="companyCheckagree">
                                                I agree to the <a href="#!" style="color: #8B3DFF;">privacy policy</a>
                                            </label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
                                        <div class="d-grid gap-2 w-100">
                                            <button class="btn-primary btn-business " type="submit">Let's work together!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
     <section class="py-5 mt-5">
        <div class="container">
            <!-- Heading Section -->
            <div class="row">
                <div class="col">
                    <h2 class="text-center pp mb-4 fw-bold">See how over 700+ customers help the world work</h2>
                </div>
            </div>
            <!-- Logos Section -->
            <div class="row">
                <div class="col">
                    <div class="logo-img-container text-center mb-4">
                        <div class="images d-flex justify-content-center flex-wrap gap-5">
                            <img src="<?php echo assets('images/clients-logo-1.svg'); ?>" alt="logo 1" class="img-fluid">
                            <img src="<?php echo assets('images/clients-logo-2.svg'); ?>" alt="logo 2" class="img-fluid">
                            <img src="<?php echo assets('images/clients-logo-3.svg'); ?>" alt="logo 3" class="img-fluid">
                            <img src="<?php echo assets('images/clients-logo-4.svg'); ?>" alt="logo 4" class="img-fluid">
                            <img src="<?php echo assets('images/clients-logo-5.svg'); ?>" alt="logo 5" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- form section -->
            <div class="row pb-2 mt-5">
                <div class="col-md-6 mb-4">
                    <!-- Left Side -->
                    <div class="left-side text-color">
                        <a href="#">
                            <img src="<?php echo assets('images/logo.svg'); ?>" alt="logo" class="img-fluid mb-4" />
                        </a>
                        <p class="p-left-side">Build faster websites with Block multipurpose</p>
                        <p class="p-left-side">bootstrap 5 template. Duis imper diet mollis</p>
                        <p class="p-left-side">leo, quis ultrices erat ultrices simple dummy .</p>

                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-md-5">
                    <div class="right-side p-2">
                        <div class="right-heading">
                            <h1 class="right-h1">Join our newsletter</h1>
                            <p>We’ll send you a nice letter once per week. No spam.</p>
                        </div>

                        <form class="needs-validation d-flex">
                            <div class="email-side flex-grow-1 me-2">
                                <input type="email" class="form-control" id="subscribeEmail" placeholder="Email address"
                                    required>
                            </div>

                            <div class="submit-btn">
                                <button type="submit" class="btn btn-color">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-color">
                    <div class="heading-links">
                        Landings
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Saas</li>
                            <li>Software Company</li>
                            <li>Finance</li>
                            <li>Digital Agency</li>
                            <li>Conference</li>
                            <li>App Template</li>
                        </ul>
                    </div>
                </div>
                <!-- second link  -->
                <div class="col text-color">
                    <div class="heading-links">
                        Accounts
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Register</li>
                            <li>Login</li>
                            <li>Forgot Password</li>
                            <li>Reset Password</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
                <!-- third link  -->
                <div class="col text-color">
                    <div class="heading-links">
                        Resources
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Docs</li>
                            <li>Support</li>
                            <li>Changelog </li>
                            <li>Help Center</li>
                            <li>Webinars</li>
                            <li>Community</li>
                        </ul>
                    </div>
                </div>
                <!-- fourth link  -->
                <div class="col text-color">
                    <div class="heading-links">
                        Company
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Contact us</li>
                            <li>News</li>
                            <li>Media Kit</li>
                            <li>Conference</li>
                            <li>Press </li>
                        </ul>
                    </div>

                </div>
                <!-- fifth link  -->
                <div class="col text-color">
                    <div class="heading-links">
                        Community
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Help</li>
                            <li>Developers</li>
                            <li>Blogs</li>
                            <li>Changelog</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="footer-btom text-color">
                        <span>Copyright © 2024
                            <a href="#" class="text-decoration-none">Block Bootstrap 5 Theme</a> | Designed by
                            <a href="#" class="text-decoration-none">CodesCandy</a>
                        </span>
                    </div>

                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end ">
                        <a href="#" class="btn  btn-md   "><i class="bi bi-instagram footer-icon"></i></a>
                        <a href="#" class="btn  btn-md  "><i class="bi bi-facebook footer-icon"></i></a>
                        <a href="#" class="btn  btn-md "> <i class="bi bi-twitter footer-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="<?php echo assets('js/script.js') ?>" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
      nav: true,
      navText: [
          '<i class="fa-solid fa-arrow-left"></i>', 
          '<i class="fa-solid fa-arrow-right"></i>' 
      ],
      responsive: {
              0: {
                  items: 1 
              },
              600: {
                  items: 2 
              },
              1000: {
                  items: 3 
              }
          },
  
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    slideBy: 1,      
    smartSpeed: 1000, 
    autoplay: true,
    autoplayTimeout: 3000, 
    autoplayHoverPause: true
      
  });
</script>
</body>
</html>
