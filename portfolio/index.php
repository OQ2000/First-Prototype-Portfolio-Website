<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Owen Quinn">
    <title>Owen Quinn</title>
    <link rel="shortcut icon" type="image/jpg" href="Images/profile.jpg"
    <!--Import awesomefonts for use in navigation images-->
    <link href="assets/font/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
    <!--Import css style-->
    <link rel="stylesheet" href="css/main.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body id="page-top">
  <!--Creating navigation bar and setting classes using bootstrap to create responsiveness-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">Owen Quinn</span>
          <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-5" src="Images/profile.jpg" alt="Picture of me">
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#experience">Experience/Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#skills">Skills/Certificates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="contianer-fluid p-0">
        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
              <h1 class="mb-0">Owen
                <span class="text-primary">Quinn</span>
              </h1>
              <div class="subheading mb-5">Phone Number: +447366141434 ·
                <a href="mailto:Owenquinn247@gmail.com">Owenquinn247@gmail.com</a>
              </div>
              <p class="lead mb-5">
                I love learning new technologies and languages, 
                so its no surprise I get genuinly excited about solving a 
                problem and the journey that you go on to find the solution. </p>
              <div class="social-icons">
                <a href="https://www.linkedin.com/in/owen-quinn/" target="blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/OQ2000" target="blank">
                  <i class="fab fa-github"></i>
                </a>
              </div>
            </div>
          </section>
          <!-- Experience/Projects section of portofolio-->
          <hr class="m-0" id="seperator">

          <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
              <h2 class="mb-5">Experience/Projects</h2>
      
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">Presentation to P.I.P.S and a panel of investors</h3>
                  <div class="subheading mb-3">Public Initiative for the Prevention of Suicide and Self-harm</div>
                  <p>
                    During my health and social care course in which my group was briefed to give a presentation to the founder of P.I.P.S 'Seamus McCabe' 
                    in which I used by creative IT skills to create an interactive presentation and my project management skills to manage the roles and responsibilities of others in my group.. <br>
                    Our presentation was selected to enter the cross-campus competition in which we presented our interactive design for a panel of 
                    judges made up of <br>
                    • John Hughes, Brilliant Red <br>
                    • Tom Kinney, Invest NI <br>
                    • Tracey Rice, SRC Business Support. Creative IT unique <br>
                    Our design was not chosen but we were commended on our interactive creative design 
                    and we were asked if our idea could be adapted for future use by P.I.P.S 
                  </p>
                <img class="img-fluid img-profile mx-auto mb-2" src="Images/Untitled-1.png" alt="Presentation_Photo">
                </div>
                <div class="resume-date text-md-right">
                  <span class="text-primary">May 2019</span>
                </div>
              </div>

              <hr class="m-0" id="seperator">

              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">Italy Trip</h3>
                  <div class="subheading mb-3">Italy work placements(Hosted By Eruasmus)</div>
                  <p>
                    Work experience in schools with ranging age groups and learnt about differnt educational approaches in differnt contries <br>
                    Used a plethora of tools to aid my experiance, such as google maps to navigate this new country and google translate in order to communicate with people who did not speak english.
                  </p>
                  <img class="img-fluid img-profile mx-auto mb-2" src="Images/italyTrip.png" alt="Presentation_Photo">
                </div>
                <div class="resume-date text-md-right">
                  <span class="text-primary"> October 2018 - November 2018</span>
                </div>
              </div>
      
              <hr class="m-0" id="seperator">

              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">Responsive personal portfolio(This Website)</h3>
                  <div class="subheading mb-3"></div>
                  <p>
                    Using the bootstrap framework to create a mobile first website. <br>
                    I used Adobe XD to design the website, in which I had to teach myself the required knowledge of using that program. <br>
                    I then used Visual Studio Code to code the website.
                  </p>
                </div>
                <div class="resume-date text-md-right">
                  <span class="text-primary">February - Present</span>
                </div>
              </div>
            </div>

          </section>

          <hr class="m-0" id="seperator">
          <!-- Education section of portofolio-->
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
              <h2 class="mb-5">Education</h2>
      
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">Southern  Regional College</h3>
                  <div class="subheading mb-3"></div>
                  <p>
                    Computer Science Level 3 Extended Diploma – Currently Undertaking <br>
                    Essential Skills English Level 2 - Pass <br>
                    Health and Social Care Level 3 Extended Diploma – MMP - 80 Ucas Points <br>
                  </p>
                </div>
              </div>
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                  <h3 class="mb-0">Shimna integrated collage</h3>
                  <div class="subheading mb-3">GCSE's</div>
                  <p>
                    <ul>
                      <li>Mathematics - C</li>
                      <li>Information Technology – B</li>
                      <li>Science – C</li>
                      <li>Additional Science – B</li>
                      <li>Further Additional   Science – D</li>
                      <li>Spanish – Merit</li>
                      <li>English – D</li>
                      <li>Technology and Design -   C</li>
                    </ul>
                  </p>
                </div>
              </div>
      
            </div>
          </section>

          <hr class="m-0" id="seperator">

          <!-- Skills section of portofolio-->
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
            <div class="w-100">
              <h2 class="mb-5">Skills</h2>
      
              <div class="subheading mb-3">Programming Languages &amp; Tools that I have experaince in</div>
              <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                  <a href="https://en.wikipedia.org/wiki/HTML5" target="blank">
                  <i class="fab fa-html5"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="blank">
                  <i class="fab fa-css3-alt"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.adobe.com/" target="blank">
                  <i class="fab fa-adobe"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.esri.com/en-us/what-is-gis/overview" target="blank">
                  <i class="fas fa-layer-group"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.python.org/" target="blank">
                  <i class="fab fa-python"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.javascript.com/" target="blank">
                  <i class="fab fa-js-square"></i></a>
                </li>
                  <li class="list-inline-item">
                    <a href="https://products.office.com/en-gb/excel" target="blank">
                    <i class="fas fa-file-excel"></i>
                  </a>
                </li>
              </ul>
               <!-- Certificates section of portofolio-->
              <div class="subheading mb-3">Certificates</div>
              <ul class="fa-ul mb-0">
                <li>
                  <i class="fa-li fa fa-check"></i>
                  Digital Skills Training by Facebook
                </li>
                <p>Facebook Issued Nov 2019</p>
                <li>
                  <i class="fa-li fa fa-check"></i>
                  Certificate of Communication
                </li>
                <p>City & Guilds Issued Jun 2019</p>
                <li>
                  <i class="fa-li fa fa-check"></i>
                  Effective Listening Skills
                </li>
                <p>CPCAB Issued Jun 2018</p>
                <li>
                  <i class="fa-li fa fa-check"></i>
                  Paediatric First Aid
                </li>
                <p>Future(Awards And Qualifications) Ltd Issued Oct 2018 - Expires Oct 2021</p>
              </ul>
            </div>
          </section>

          <hr class="m-0" id="seperator">

          <!-- Contact me form section of portofolio-->
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact">
            <div class="w-100">
            <h2 class="mb-0">Contact Me</h2>
            <div class="contianer">
                  <main>
                  <?php 
                  include 'contactform.php';
                  $errorlocal = $error;
                  $namelocal = $name;
                  $emaillocal = $email;
                  $subjectlocal = $subject;
                  $messagelocal = $message;
                  echo $errorlocal; 
                  ?> 
                  <form name="contact-form" method="post">
                
                    <label for="fname">Name</label>
                    <input type="text" name="name" placeholder="Your full name.." value="<?php echo $namelocal; ?>" />

                    <label for="lname">Email</label>
                    <input type="text" name="email" placeholder="Your e-mail" value = "<?php echo $emaillocal; ?>" />

                    <label for="lname">Subject</label>
                    <input type="text" name="subject" placeholder="Your Subject.." value="<?php echo $subjectlocal;?>"/>
                
                    <label for="subject">Message</label>
                    <textarea name="message" placeholder="Write something.." style="height:200px"><?php echo $messagelocal; ?></textarea>
                
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </main>
              </form>

            </div>
          </div>
        </section>
      </div>
       <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/resume.js"></script>
</body>

</html>