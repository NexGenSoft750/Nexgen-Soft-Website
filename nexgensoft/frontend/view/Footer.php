<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
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
    <script src="<?php echo assets('js/script.js') ?>" defer></script>
</body>
</html>