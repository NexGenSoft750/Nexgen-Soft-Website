<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="<?= assets('./css/style.css') ?>">
    <link rel="stylesheet" href="<?= assets('./css/media.css') ?>">
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
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="<?= baseUrl('/'); ?>">
            <img src="<?php echo assets('images/nexgen_soft_logo.png'); ?>" alt="Logo" style="height: 70px; width: 100px;"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-pills mx-auto mb-2 mb-lg-0">
                       
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= baseUrl('portfolio'); ?>">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= baseUrl('caseStudy'); ?>">Case Study</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= baseUrl('contactUs'); ?>">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-secondary">Login</button>
                        <button type="button" class="btn btn-primary">Create account</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script src="<?php echo assets('js/script.js') ?>" defer></script>
</body>
</html>
