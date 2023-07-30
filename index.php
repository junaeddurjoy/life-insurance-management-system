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
          <a class="logo">Laxmi Chit Fund</a>
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
            <div class="half-column">
              <div class="hero-contents">
                <h1>Start your Journey with Laxmi Chit Fund</h1>
                <p>
                Since its inception in 1985, Luxmy Cheat Fund has been a publicly traded non-life insurance company adhering to the fundamental standards of the insurance industry. The Company transacts a broad variety of non-life (general) insurance business in Bangladesh, including Health and Overseas Mediclaim insurance, and has a solid reputation and skill in the field of insurance, as well as a financially strong position.

The Company's Board of Directors is comprised of a limited number of individuals with diverse professional backgrounds. LMF is the sole insurance firm in Bangladesh with a connection to Duncan Brothers (Bangladesh) Ltd., a subsidiary of Camellia Plc UK (www.camellia.plc.uk). United Finance Ltd., a prominent non-banking financial institution, is an affiliate firm of UICL. Duncan Brothers (Bangladesh) Ltd. is one of UICL's sponsors.
                </p>
              </div>
            </div>
          
            <div class="half-column">
              <div class="hero-product">
                <div class="img-wrap">
                  <div class="login-page">
                    <div class="form">
                      <form class="login-form" action="login.php" method="POST">
                        <input
                          type="text"
                          name="username"
                          id=""
                          placeholder="username"
                        />
                        <input
                          type="password"
                          name="password"
                          id=""
                          placeholder="password"
                        />
                        <button>login</button>
                      </form>
                      <h3>Don't have an account?</h3>
                      <button class="submit-btn">
                        <a href="register.php" style="text-decoration: none"
                          ><p>Register Now</p>
                          <p></p
                        ></a>
                      </button>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row">
                    <div class="col-md-30">
						              <button class="btn" align="center"> 
                        <a href="faq.php" class="btn">For FAQs</a>
                        </button>
                      </div>
                      <br>
                      <div class="row">
                    <div class="col-md-30">
						              <button class="btn" align="center"> 
                        <a href="learnpolicy.php" class="btn">Learn About Our Policies</a>
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

