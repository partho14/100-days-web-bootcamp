<?php include('header.php')?>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><b>SMS</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
            <?php if(isset($_SESSION['login'])){ ?>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="./actions/logout.php">Logout</a>

            </div>
            <?php }else{ ?>
                <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>login</a>
            <?php } ?>
        </li>
        </ul>
    </div>
    </nav>
    <!--/.Navbar -->

    <!--Header -->
    <div class="d-flex shadow" style="height:700px; background: linear-gradient(-45deg, navy 50%, transparent 50%);">
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-3 font-weight-bold">School Management System</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vitae eveniet, amet soluta impedit pariatur, voluptatem earum non excepturi modi iure minima eligendi distinctio? Quasi sint reiciendis perferendis modi assumenda!</p>
                    <a href="" class="btn btn-lg btn-primary">Call to Action</a>
                </div>

                <div class="col-lg-6">
                    <div class="col-lg-8 mx-auto card shadow-lg">
                        <div class="card-body">
                            <!-- Material input -->
                            <h3>Admission Form</h3>
                            <div class="md-form">
                            <input type="text" id="form1" class="form-control">
                            <label for="form1">Your Name</label>
                            </div>

                            <div class="md-form">
                            <input type="email" id="email" class="form-control">
                            <label for="email">Your Email</label>
                            </div>

                            <div class="md-form">
                            <input type="text" id="phone" class="form-control">
                            <label for="phone">Your Mobile</label>
                            </div>

                            <div class="md-form">
                            <input type="text" id="class" class="form-control">
                            <label for="class">Your Class</label>
                            </div>

                            <button class="btn btn-black btn-block">Submit Form</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/.Header -->

    <!--About us -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <h2 class="font-weight-bold">About<br> School Management System</h2>
                    <div class="pr-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam eum quod rerum ratione! Totam molestias sit cumque nobis iusto consequatur cum minima mollitia explicabo quasi, eos placeat quos delectus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam eum quod rerum ratione! Totam molestias sit cumque nobis iusto consequatur cum minima mollitia explicabo quasi, eos placeat quos delectus.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit id sed explicabo autem ratione dolorem aperiam inventore exercitationem rem accusamus laborum cum, animi maxime iste velit officiis sint sapiente dolores.</p>
                    </div>
                    <a href="about-us.php" class="btn btn-secondary">Know More</a>
                </div>
                <div class="col-lg-6" style="">
                <img src="./assets/images/totalschool-tree.png" class="object-fit-none" alt="..."></div>
            </div>
        </div>
    </section>
    <!--/.About us -->

    <!--Courses -->
    <section class="py-5 bg-light">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">Our Courses</h2>
            <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicius. Quasi magnam adipisci hdf epellat quibusdam!</p>
        </div>
        <div class="container">
            <div class="row">
                <?php for ($i=0; $i < 12; $i++) { ?>
                    <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/education.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <b>Web Design & Development</b>
                            <p class="card-text">
                                <b>Duration: </b>40 Hours<br>
                                <b>Price: </b>1200 BDT
                            </p>
                            <button class="btn btn-block btn-primary">Enroll Now</button>
                        </div>
                    </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </section>
    <!--/.Courses -->

    <!--Teachers -->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">Our Teachers</h2>
            <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicius. Quasi magnam adipisci hdf epellat quibusdam!</p>
        </div>
        <div class="container">
            <div class="row">
                <?php for ($i=0; $i < 6; $i++) { ?>
                    <div class="col-lg-3 mb-4">
                    <!-- Card Wider -->
                    <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay" style="height:200px">
                    <img class="card-img-top" src="./assets/images/murad.jpeg" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center pb-1">

                    <!-- Title -->
                    <h4 class="card-title"><strong>Wahid Murad Rabbi</strong></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>Physics Teacher</strong></h5>
                    <!-- Text -->
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam. </p>

                    <!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Twitter -->
                    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                    </div>

                    <button class="btn btn-block btn-primary"><b>Show Details</b></button>

                    </div>
                    <!-- Card Wider -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--/.Teachers -->

     <!--Achievements -->
     <section class="py-5 text-white" style="background:#3923a7">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-5">
                        <h2>Achievements</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui debitis ea minus ad nam cupiditate? Consequuntur provident neque in aliquam quas sapiente? Quis corrupti cumque ex quas deleniti vitae nulla!</p>
                        <img src="./assets/images/achievements.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="border rounded">
                                    <div class="card-body text-center">
                                        <span><i class=" text-warning fas fa-solid fa-user-graduate fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">556</h2>
                                        <hr class="border-warning">
                                        <h4>Students</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="border rounded">
                                    <div class="card-body text-center">
                                        <span><i class=" text-warning fas fa-solid fa-user fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">15</h2>
                                        <hr class="border-warning">
                                        <h4>Teachers</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="border rounded">
                                    <div class="card-body text-center">
                                        <span><i class=" text-warning fas fa-solid fa-school fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">45</h2>
                                        <hr class="border-warning">
                                        <h4>Classroom</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
      <!--/.Achievements -->

      <!--Footer -->
    <footer class="footer container">
      <div class="footer__container grid">
        <div class="footer_content">
          <a href="index.html" class="footer__logo">
            <img src="assets/img/logo.svg" alt="" class="footer__logo-img">
          </a>
          <h4 class="footer__subtitle">Contact</h4>

          <p class="footer__description"><span>Address:</span> 89/2, Sukrabad, Dhanmondi-32</p>

          <p class="footer__description"><span>Phone:</span> +8801626579447</p>

          <p class="footer__description"><span>Hours:</span> 10:00 - 18:00, sunday - Thursday</p>

          <div class="footer__social">
            <h4 class="footer__subtitle">Follow Me</h4>

            <div class="footer__social-links flex">
              <a href="">
                <img src="assets/images/icon-facebook.svg" alt="" class="footer__social-icon">
              </a>

              <a href="">
                <img src="assets/images/icon-twitter.svg" alt="" class="footer__social-icon">
              </a>
            </div>
          </div>
        </div>

        <div class="footer_content">
          <h3 class="footer__title">Address</h3>
          <ul class="footer__links">
            <li><a href="" class="footer__link">About Us</a></li>
            <li><a href="" class="footer__link">Privacy Policy</a></li>
            <li><a href="" class="footer__link">Terms & Conditions</a></li>
            <li><a href="" class="footer__link">Contact Us</a></li>
            <li><a href="" class="footer__link">Support Center</a></li>
          </ul>
        </div>

        <div class="footer_content">
          <h3 class="footer__title">My Account</h3>
          <ul class="footer__links">
            <li><a href="" class="footer__link">Sign In</a></li>
            <li><a href="" class="footer__link">View Courses</a></li>
            <li><a href="" class="footer__link">Help</a></li>
            <li><a href="" class="footer__link">Order</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bottom">
        <p class="copyright">&copy; 2016-2024 All rights reserved. School Management System</p>
      </div>
    </footer>
      <!--/.Footer -->
<?php include('footer.php')?>