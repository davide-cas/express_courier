<!DOCTYPE HTML>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DC: Express Courier </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>DMI, 95100 Catania</li>
                                        <li><i class="fas fa-envelope"></i> <a href="mailto:casano.davide@outlook.it"> casano.davide@outlook.it</a></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">Chi Siamo</a></li>
                                            <li><a href="contact.html">Contatti</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3">
                              <a href="track_order.html" class="btn header-btn">TRACCIA IL TUO ORDINE</a>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

		<!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2 style="text-shadow:2px 2px 2px #222">TRACCIA IL TUO ORDINE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <body>

      <div class="we-trusted-area trusted-padding">
          <div class="container">
              <div class="row d-flex align-items-end">
                  <div class="col-xl-7 col-lg-7">
                      <div class="trusted-img">
                          <img src="assets/img/team/trackorder.png" alt="">
                      </div>
                  </div>
                  <div class="col-xl-5 col-lg-5">
                      <div class="trusted-caption">
                         <h2>ORDINE #222</h2>
                         <head>
                           <style type="text/css">
                           table {
                             border-collapse: inherit;
                             width: 150%;
                             color: #d96459;
                             font-family: monospace;
                             font-size: 17px;
                             text-align: center;
                                 }
                           th {
                             background-color: #d96459;
                             color: white;
                              }
                           tr:nth-child(even) {background-color: #f2f2f2}
                       </style>
                      </head>

                      <body>
                      <table>

                        <tr>
                          <th> ID CORRIERE </th>
                          <th> CITTÀ DI PARTENZA </th>
                          <th> DESTINAZIONE </th>
                          <th> CITTÀ CORRENTE </th>
                          <th> STATO </th>
                        </tr>

                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "DC: Express Courier";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT C.ID_Corriere, E.Citta, MT.Destinazione, MT.Citta_Corrente, C.Stato_Consegna
                                FROM CORRIERE C, MEZZO_DI_TRASPORTO MT, ECOMMERCE E, MAGAZZINO M
                                WHERE C.ID_Ordine=222 AND C.ID_Corriere=MT.ID_Corriere AND E.ID_Magazzino=2 AND E.ID_Magazzino=M.ID_Magazzino AND E.ID_Ecommerce=M.ID_Ecommerce AND E.Citta=M.Citta";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>". $row["ID_Corriere"]. "</td><td>". $row["Citta"].  "</td><td>". $row["Destinazione"] ."</td><td>". $row["Citta_Corrente"]. "</td><td>" . $row["Stato_Consegna"] . "</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }

                        $conn->close();
                        ?>
                         </table>
                       </body>


                      </div>
                  </div>
              </div>
          </div>

      </div>

      <div class="col-lg">
          <div class="blog_right_sidebar">

              <aside class="single_sidebar_widget post_category_widget">
                  <h4 class="widget_title">Ordini che puoi Tracciare:</h4>
                  <ul class="list cat-list">
                      <li>
                          <a href="trackdetails_111.php" href="#" class="d-flex">
                              <p>Ordine #111</p>
                          </a>
                      </li>
                      <li>
                          <a href="trackdetails_333.php" href="#" class="d-flex">
                              <p>Ordine #333</p>
                          </a>
                      </li>
                      <li>
                          <a href="trackdetails_444.php" href="#" class="d-flex">
                              <p>Ordine #444</p>
                          </a>
                      </li>
                      <li>
                          <a href="trackdetails_555.php" href="#" class="d-flex">
                              <p>Ordine #555</p>
                          </a>
                      </li>
                  </ul>
              </aside>
            </div>
          </div>



          </div>

        </body>



        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="assets/img/logo/testimonial.png" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>atwork by Davide Casano</p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="request-content">
                            <h3>Servizio Clienti</h3>
                            <p>Per qualsiasi problema puoi contattarci. Il nostro servizio clienti è dotato di competenza e professionalità. Siamo a disposizione 24 ore 24, 7 giorni su 7.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <!-- Contact form Start -->
                        <div class="form-wrapper">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box  mb-30">
                                            <input type="text" name="name" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box mb-30">
                                            <input type="text" name="email" placeholder="E-Mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Servizi</option>
                                                <option value="">Ritardo nella consegna di un articolo</option>
                                                <option value="">Informazioni generali</option>
                                                <option value="">Lavora con noi!</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button type="submit" class="send-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>     <!-- Contact form End -->
                </div>
            </div>
        </div>
        <!-- Request Back End -->

    </main>
   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Il partner affidabile per le tue spedizioni.</p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>L'azienda</h4>
                               <ul>
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html">Chi Siamo</a></li>
                                   <li><a href="contact.html">Contatti</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Servizi</h4>
                               <ul>
                                   <li><a href="track_order.html" href="#">Traccia il tuo Ordine</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Contattaci</h4>
                               <ul>
                                <li><a href="#">+39 3333900900</a></li>
                                <li><a href="#"> casano.davide@outlook.it</a></li>
                                <li><a href="#">DMI, 95100 Catania</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | atwork by <a target="_blank">Davide Casano</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
</html>
