

<?php
  if (isset($_POST["emsub"])) {
    $username = $_POST["ename"];
    $email = $_POST["eemail"];
    $phone = $_POST["enumber"];
    $message = $_POST["emessage"];

    $to = "elstudio123456@gmail.com";
    $subject = $username;

    $message = "Email: {$email}  <br>  Phone: {$phone} <br> Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: elstudio123456@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<?php
  require("includes/header.php");
?>







  <!----------- START OF HEADER -------------->

  <header>

    <!-- The header video -->
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="assets/videos/sample-1.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container header h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3 ">Welcome to ELStudio</h1>
          <p class="lead mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsum aut saepe corrupti
            illum, consequuntur vel rem inventore sunt cupiditate, nostrum ex accusamus voluptate laboriosam itaque
            natus explicabo similique adipisci?</p>
          <button type="button fw-bold" class="btn-register" data-bs-toggle="modal" data-bs-target="#Register">Register</button>
        </div>
      </div>
    </div>

  </header>

  <!------------ END OF HEADER --------------->

  <!------------ START OF SERVICES SECTION --------------->

  <section class="services " id="services">
    <div class="px-4 py-5 my-2 text-center" data-aos="fade-up" data-aos-duration="1000">
      <h1 class="display-5 fw-bold m-5 text-uppercase">Our Services</h1>
      <div class="col-lg-6 mx-auto ">
        <p class="lead mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi eligendi repellendus inventore corporis eaque
          fugiat libero asperiores, laudantium numquam voluptatem.
        </p>
        <button type="button" class="btn-rounded">View More</button>
      </div>
    </div>
  </section>

  <!------------ END OF SERVICES SECTION --------------->


  <!------------ START OF RESOURCES SECTION --------------->

  <section class="resources container-fluid resources_container" id="resources">
    <div class="container">

      <hr class="featurette-divider">
      <h1 class="display-6 fw-bold text-center text-uppercase">We Provide</h1>
      <div class="row featurette " data-aos="fade-left"  data-aos-duration="1000">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal py-5 my-0 ">
            Facilities
          </h2>
          <p class="lead text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quae! Similique
            iusto ea dignissimos
            iste neque corrupti autem, perspiciatis ipsa blanditiis, nemo deleniti minus reiciendis enim inventore
            quisquam
            facilis aut adipisci alias maiores ducimus assumenda dolor? Odio voluptates et eos magnam necessitatibus,
            dolore
            nihil voluptatum, voluptatibus dignissimos eum dicta illo.</p>
          <button type="button" class="btn-rounded">Read more</button>
        </div>
        <div class="col-md-5 py-5">
          <img src="assets/images/banner.jpg" alt="" class="featurette-image img-fluid mx-auto" width="500"
            height="500">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette" data-aos="fade-right" data-aos-duration="1000">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal py-5 my-0 ">
            Learning Resources
          </h2>
          <p class="lead text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quae! Similique
            iusto ea dignissimos
            iste neque corrupti autem, perspiciatis ipsa blanditiis, nemo deleniti minus reiciendis enim inventore
            quisquam
            facilis aut adipisci alias maiores ducimus assumenda dolor? Odio voluptates et eos magnam necessitatibus,
            dolore
            nihil voluptatum, voluptatibus dignissimos eum dicta illo.</p>
          <button type="button" class="btn-rounded">Read more</button>
        </div>
        <div class="col-md-5 order-md-1 py-5">
          <img src="assets/images/banner.jpg" alt="" class="featurette-image img-fluid mx-auto" width="500"
            height="500">
        </div>
      </div>
      <hr class="featurette-divider">
    </div>
  </section>

  <!------------ END OF RESOURCES SECTION --------------->


  <!------------ START OF UPDATES SECTION --------------->

  <section class="updates updates_container" id="updates">
    <div class="container-fluid my-5">
      <div class="container" >
        <h1 class="display-6 fw-bold text-center text-uppercase">Updates</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">

            <!--------------- First item card -------------->
            <div class="carousel-item active">
              <div class="cards-wrapper">
                <div class="card" data-aos="fade-up" data-aos-duration="600">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block" data-aos="fade-up" data-aos-duration="800">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Announcement</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block" data-aos="fade-up" data-aos-duration="1000">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <!------------ Second item card -------------->
            <div class="carousel-item">
              <div class="cards-wrapper">
                <div class="card">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Announcement</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Announcement</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <!--------- Third item card ----------->
            <div class="carousel-item">
              <div class="cards-wrapper">
                <div class="card">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Announcement</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="assets/images/updates_image.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <h6 class="card-date">8/1/2022</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn-rounded">Read More</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>


  <!------------ END OF UPDATES SECTION --------------->


  <!------------ START OF PARTNERS SECTION --------------->

  <section class="logo-list" id="partners">
    <div class="container-fluid partners_container">
      <div class="container">
        <div class="px-4 py-5 my-2 text-center">
          <h5 class="fw-bold">Join Us</h5>
          <h1 class="display-5 fw-bold m-3 text-uppercase">Our Partners</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, sunt!</p>
          <div class="row row-container" data-aos="fade-up">
            <hr class="featurette-divider">
            <section class="customer-logos slider">
              <div class="slide"><img  class="img-fluid" src="assets/images/Partners Logo/uop-removebg-preview.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/CHED-Logo-New_20210406_RGB_border-1024x1024.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/uop-removebg-preview.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/CHED-Logo-New_20210406_RGB_border-1024x1024.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/uop-removebg-preview.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/CHED-Logo-New_20210406_RGB_border-1024x1024.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/uop-removebg-preview.png"></div>
              <div class="slide"><img class="img-fluid" src="assets/images/Partners Logo/CHED-Logo-New_20210406_RGB_border-1024x1024.png"></div>
           </section>
            <hr class="featurette-divider">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------ END OF PARTNERS SECTION --------------->

  <!------------ START OF ABOUT US SECTION --------------->

  <section id="about">
    <div class="container mt-5 about_container" data-aos="fade-up">
      <div class="row " data-aos="fade-up" data-aos-duration="1000">
        <h1 class="fw-bold text-uppercase">About Us</h1>
        <p class="lead-3 text-break py-5">
          Funded by the Commision on Higher Education, the CCAT ElStudio is an open resource center for research and innovation
          on flexible learning. It aims to be a prime flexible learning studio for the faculty and students in the campus and 
          University, equipped with facilities to enable transition to the new normal of teaching and learning. <br><br>
          Endorsed, approved, and established through the BOR Resolution No. __ s 2021.
        </p>
      </div>
      <!-- about content -->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <!--content 1-->
            <div class="accordion-item shadow mb-3" data-aos="fade-left" data-aos-duration="1000">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold text-center" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                  Mission
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="lead-2 text-break">
                    CAVITE STATE UNIVERSITY shall provide excellent, equitable and relevant educational opportunities in the arts, sciences, 
                    and technology through quality instruction and responsive research and development activities. It shall produce professional
                    skilled and morally upright individuals for global competitiveness.
                  </p>
                </div>
              </div>
            </div>
            <!--content 2-->
            <div class="accordion-item shadow mb-3" data-aos="fade-right" data-aos-duration="1000">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Vision
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="lead-2 text-break">
                    The Premier University in historic Cavite recognized for excellence in the development of globally competitive and
                     morally upright individuals.
                  </p>
                </div>
              </div>
            </div>
            <!--content 3-->
            <div class="accordion-item shadow mb-3" data-aos="fade-left" data-aos-duration="1000">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button  fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  Quality Policy
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="lead-2 text-break">
                    We Commit to the highest standards of education, value our stakeholders, Strive for continual improvement of our 
                    products and services, and Uphold the University's tenets of Truth, Excellence, and Service to produce globally 
                    competitive and morally upright individuals.
                  </p>
                </div>
              </div>
            </div>
            <!--content 4-->
            <div class="accordion-item shadow mb-3" data-aos="fade-right" data-aos-duration="1000">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Mandates
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ol class="lead-2 text-break">
                      <li>Establish linkages with other institutions for the development and innovation of flexible learning in CvSU</li>
                      <li>Provide support services to the faculty in developing instructional materials intended for  flexible learning</li>
                      <li>Establish an accessible and open resource facility for the faculty for sharing of creative, educational resources</li>
                      <li>Conduct capability enhancement activities on various learning management systems to help the faculty adaopt modern, flexible teaching and learning techniques</li>
                    </ol>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------ END OF ABOUT US SECTION --------------->


  <!-------------------- COUNTER SECTION --------------->

  <section id="counter">
    <div class="container">
      <div class="row counter_container mt-5">
        <div class="col-md-4">
          <h1><span class="counter">200</span></h1>
          <h3>Registered Users</h3>
          <i class="fa fa-users"></i>
        </div>
        <div class="col-md-4">
          <h1><span class="counter">100</span></h1>
          <h3>Facilities</h3>
          <i class="fa-solid fa-house"></i>
        </div>
        <div class="col-md-4">
          <h1><span class="counter">300</span></h1>
          <h3>Resources</h3>
          <i class="fa-solid fa-house"></i>
        </div>
      </div>
    </div>
  </section>

  <!-------------------- END OF COUNTER SECTION ------------------------->


  <!------------ START OF CONTACT US SECTION --------------->

  <section class="contact-us" id="contact">
    <div class="container contact_container" data-aos="fade-left" data-aos-duration="1000">
      <hr class="featurette-divider">
      <div class="row">
        <!-- Contact information-->
        <div class="col-md-5 mr-auto contact-info">
          <h1 class="mb-3 fw-bold">Contact Us</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, animi asperiores
            blanditiis dicta expedita quisquam.</p>
          <ul class="list-unstyled pl-md-5 mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-location-dot"></i>
              </span>
              <p class="location">34 Street Name, City Name Here, United States</p>
            </li>
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-phone"></i>
              </span>
              <p class="contact-number">+(639) 345 6789</p>
            </li>
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <p class="email-address">elstudio@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--End of Contact Info-->

        <!-- Contact form-->
        <div class="col-md-6 contact-form">
          <form method="post" class="mb-5" id="contactForm" name="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Subject</label>
                <input type="text" class="form-control" name="ename" id="name">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="eemail" id="email">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="number" class="col-form-label">Number</label>
                <input type="text" class="form-control" name="enumber" id="number">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="emessage" id="message" cols="30" rows="7"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" name="emsub" value="Send Message" class="btn-rounded mt-2" style="width:150px;">
                <span class="submitting"></span>
              </div>
            </div>
          </form>
        </div>
        <!--End of Contact Form-->
      </div>
      <hr class="featurette-divider">
    </div>
  </section>
  <!------------ END OF CONTACT US SECTION ------------->


  

 
  <?php
  require("includes/footer.php");
?>






<!----------------------- LOGIN MODAL ----------------------------->

<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="includes/login.inc.php" method="post">

            <div class="form-floating mb-2">
              <input type="text" name="email" class="form-control" id="floatingInput" placeholder="email/username">
              <label for="floatingInput">Email or Username</label>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>   
            
            <div class="form-floating mb-2">
              <input type="password" name="pwd" class="form-control" id="floatingInput" placeholder="password">
              <label for="floatingInput">Password</label>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>  

            <div class="form-group">
                <div class="d-grid gap-1">
                  <input type="submit" name="lsubmit"class="btn btn-primary mt-2" value="Login">
                </div>
            </div>
            <p class="mt-3">Don't have an account? <br><a target="Register" href="">Sign up now</a>.</p>
        </form>
        </div>
        <div class="modal-footer">
      
        </div>
      </div>
    </div>
  </div>
</div>

<!----------------------- END OF LOGIN MODAL ----------------------------->


<!----------------------- REGISTRATION MODAL ----------------------------->


<div class="modal fade" id="Register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-bs-toggle="pill" href="#pills-student" role="tab"
                  aria-controls="pills-student" aria-selected="true">Student</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab"
                  aria-controls="pills-register" aria-selected="false">Faculty</a>
              </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="tab-login">

                <!-- Student Registration Form -->
                <form action="includes/signup.inc.php" method="post">
                  <div class="form-floating mb-2">
                    <input type="text" name="sId" class="form-control" id="floatingInput" placeholder="ID Number" >
                    <label for="floatingInput">Student ID Number</label>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="text" name="sfname" class="form-control" id="floatingInput" placeholder="First Name">
                    <label for="floatingInput">First Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="smname" class="form-control" id="floatingInput" placeholder="Middle Name">
                    <label for="floatingInput">Middle Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="slname" class="form-control" id="floatingInput" placeholder="Last Name">
                    <label for="floatingInput">Last Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="saddress" class="form-control" id="floatingInput" placeholder="Address">
                    <label for="floatingInput">Address</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>   

                  <div class="form-floating mb-2">
                    <select name="course" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected></option>
                      <option value="BSInfoTech">BSInfoTech</option>
                      <option value="BSCos">BSCos</option>
                      <option value="BSED">BSED</option>
                    </select>
                    <label for="floatingSelect">Select Course</label>
                  </div>

                  <div class="form-floating mb-2">
                    <select name="year" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option ></option>
                      <option value="First Year">First Year</option>
                      <option value="Second Year">Second Year</option>
                      <option value="Third Year">Third Year</option>
                      <option value="Fourth Year">Fourth Year</option>
                      <option value="Fifth Year">Fifth Year</option>
                    </select>
                    <label for="floatingSelect">Select Academic Year</label>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="text" name="semail" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="password" name="spwd" class="form-control" id="floatingInput" placeholder="Password">
                    <label for="floatingInput">Password</label>
                      <span class="invalid-feedback"><?php echo $password_err; ?></span>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="password" name="srpwd" class="form-control" id="floatingInput" placeholder="Confirm Password">
                    <label for="floatingInput">Confirm Password</label>
                      <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                  </div>


                  <div class="form-group mb-2 text-md-end ">
                      <input type="submit" name="ssubmit" class="btn-rounded" value="Submit">
                      <input type="reset" class="btn-rounded" value="Reset">
                  </div>
              </div>
              <!------------ End of Student Registration Form ------------>


              <!------------ Start of Faculty Registration Form ---------->

              <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

                <!----- Faculty Registration Form ------>
                <form action="includes/signup.inc.php" method="post">
                  <div class="form-floating mb-2">
                    <input type="text" name="Id" class="form-control" id="floatingInput" placeholder="Employee ID Number" >
                    <label for="floatingInput">Employee ID Number</label>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="text" name="fname" class="form-control" id="floatingInput" placeholder="First Name">
                    <label for="floatingInput">First Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="mname" class="form-control" id="floatingInput" placeholder="Middle Name">
                    <label for="floatingInput">Middle Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="lname" class="form-control" id="floatingInput" placeholder="Last Name">
                    <label for="floatingInput">Last Name</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="text" name="address" class="form-control" id="floatingInput" placeholder="Address">
                    <label for="floatingInput">Address</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>   

                  <div class="form-floating mb-2">
                    <select name="dpmnt" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected></option>
                      <option value="dept 1">Department 1</option>
                      <option value="dept 2">Department 2</option>
                      <option value="dept 3">Department 3</option>
                      <option value="dept 4">Department 4</option>
                      <option value="dept 5">Department 5</option>
                    </select>
                    <label for="floatingSelect">Select Department</label>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email</label>
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>    

                  <div class="form-floating mb-2">
                    <input type="password" name="pwd" class="form-control" id="floatingInput" placeholder="Password">
                    <label for="floatingInput">Password</label>
                      <span class="invalid-feedback"><?php echo $password_err; ?></span>
                  </div>

                  <div class="form-floating mb-2">
                    <input type="password" name="rpwd" class="form-control" id="floatingInput" placeholder="Confirm Password">
                    <label for="floatingInput">Confirm Password</label>
                      <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                  </div>


                  <div class="form-group mb-2 text-md-end ">
                      <input type="submit" name="fsubmit" class="btn-rounded" value="Submit">
                      <input type="reset" class="btn-rounded" value="Reset">
                  </div>
              </div>
              <!------------ End of Faculty Registration Form ---------->
            </div>
        <div class="modal-footer">
       
        </div>
          <!-- END OF MODAL-->
    </div>
  </div>
</div>

<!----------------------- END REGISTRATION MODAL ----------------------------->

<?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "emptyinput"){
                
                echo "<script type='text/javascript'>alert('Fill in all the field!');</script>";
            }
            else if ($_GET["error"] == "invalidemail"){
                
                echo "<script type='text/javascript'>alert('Invalid Email Address!');</script>";
            }
            else if ($_GET["error"] == "cantlogin!"){
                echo "<script type='text/javascript'>alert('The password you’ve entered is incorrect!');</script>";
            }else if ($_GET["error"] == "cantlogin"){
                echo "<script type='text/javascript'>alert('Account doesn`t exist!!');</script>";
            }
            else if ($_GET["error"] == "stmterror"){
                echo "<script type='text/javascript'>alert('Something went wrong, Please try again!');</script>";
            }
            else if ($_GET["error"] == "none"){
                
            }else if($_GET["error"] == "waitforadminaproval"){
              echo "<script type='text/javascript'>alert('Wait for admin approval!');</script>";
            }
        }
?>


