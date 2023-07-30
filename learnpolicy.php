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
                <h1>Policy List</h1>
                <h2>Policy ID = 1</h2>
                <p>
                    Term = 5 years<br>
                    Health Status(Policy Cost) =  5,00,000/=<br>
                    System(Monthly Payment) = 5,000/=<br>
                    Payment Method = Cash/Check<br>
                    Coverage = 60%<br>
                    Age Limit = 30<br>

                </p>
                <h2>Policy ID = 2</h2>
                <p>
                    Term = 10 years<br>
                    Health Status(Policy Cost) =  10,00,000/=<br>
                    System(Monthly Payment) = 6,500/=<br>
                    Payment Method = Cash/Check<br>
                    Coverage = 100%<br>
                    Age Limit = 50<br>
                    
                </p>
                <h2>Policy ID = 3</h2>
                <p>
                Term = 10 years <br>
                    Health Status(Policy Cost) =  20,00,000/=<br>
                    System(Monthly Payment) = 13,000/=<br>
                    Payment Method = Cash/Check<br>
                    Coverage = 100%<br>
                    Age Limit = 50  <br>
                </p>
                <h2>Policy ID = 4</h2>
                <p>
                Term = 15 years<br>
                    Health Status(Policy Cost) =  1,50,00,000/=<br>
                    System(Monthly Payment) = 15,000/=<br>
                    Payment Method = Cash/Check<br>
                    Coverage = 50%<br>
                    Age Limit = 60<br>
                </p>
                <h2>Policy ID = 5</h2>
                <p>
                Term = 20 years<br>
                    Health Status(Policy Cost) =  2,00,00,000/=<br>
                    System(Monthly Payment) = 30,000/=<br>
                    Payment Method = Cash/Check<br>
                    Coverage = 100%<br>
                    Age Limit = 70<br>
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

