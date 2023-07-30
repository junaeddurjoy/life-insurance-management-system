<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Laxmi Chit Fund | Life Insurance Management System
    </title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <!-- header area start -->
    <header>
      <div class="container">
        <nav class="menu-wrap flexed align-cen">
          <a href="index.php" class="logo">Laxmi Chit Fund</a>
          <div class="nav-bar"></div>
        </nav>
        <hr />
      </div>
    </header>
    <!-- main area start -->
    <main>
      <!-- hero area start -->
      <section class="hero-area">
        <div class="container">
          <div class="row flexed align-cen">
            <div class>
              <div class="hero-contents">
                <h2>1. What is an FAQ Page?</h2>
                <p>
                An FAQ page is the place on small business website dedicated to answering questions the team regularly receives about business.FAQ page can include various questions, from nuts-and-bolts asks (like your store hours) to objections you often hear from prospects.
                </p>
                <h2>2. Why do you need an FAQ page?</h2>
                <p>
                One of the strongest reasons to have a FAQ section is to address the needs of your readers. Since your customers that they want more information about your products and services by going to your FAQ page. You should provide high-quality content about your business on the FAQ page.  
                </p>
                <h2>3. Does it improves the user experience of a website?</h2>
                <p>
                Yes, unquestionably. We are making every effort to enhance the user experience. Please be patient and join us until then.  
                </p>
                <h2>4. What about our website?</h2>
                <p>
                    Our Life Insurance Management System website brought to you by LAXMI CHIT FUND is a beta system for our users.
                </p>
                <h2>5. Will there be an update?</h2>
                <p>
                    Yes. There will be a update where user will find a responsive website and a whole lot other options like customizing their policies and getting suggestions of policies according they need.
                </p>
              </div>
            </div>
          
              
            </div>
            <div class="row">
                    <div class="col-md-30">
						              <button class="btn" align="center"> 
                        <a href="index.php" class="btn">Go Home</a>
                        </button>
                      </div>
                      <br>
                      <div class="row">
                    <div class="col-md-30">
						              <!-- <button class="btn" align="center">  -->
                        <!-- <a href="hello.html" class="btn">Learn About Our Policies</a> -->
                        </button>
                      </div>
                    </div>
                    </div>
                  
              
          </div>
        </div>
      </section>
      
      <section class="bimages">
        <img class="b_img" src="./images/b.jpg" alt="" />
      </section>
    </main>
    <!-- footer area start  -->
    <footer>
      <div class="footer-contents">
        <a href="#" class="footer-logo">Life Insurance Managememt System</a>
        <p>Copyright &copy; 2020 Laxmi Chit Fund. All rights reserved.</p>
        <!-- <ul class="flexed align-cen">
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-dribbble"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
        </ul> -->
      </div>
    </footer>
    <!-- footer area end  -->
  </body>

