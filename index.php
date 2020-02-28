<html lang="nl">

<head>
  <title>RoKo Productions</title>
  <meta name="author" content="Sven Brilleman">
  <!-- Style Sheets -->
  <link rel="stylesheet" type="text/css" href="dist/css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="theme-color" content="#aaa">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- <meta name="description" content="RoKo Productions is gespecialiseerd in het leveren van professionele content op het gebied van audio, video en fotografie.">
  <meta property="og:image" content="https://rokoproductions.com/roko/dist/pic/logo.png">
  <meta property="og:description" content="RoKo Productions is gespecialiseerd in het leveren van professionele content op het gebied van audio, video en fotografie.">
  <meta property="og:title" content="RoKo Productions">
  <meta name="twitter:title" content="RoKo Productions"> -->

  <!-- Scrips -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('body').bootstrapMaterialDesign();
    });
  </script>
  <!-- Other HTML -->
  <?php include("dist/html/modals.html"); ?>
  <?php include("dist/php/info.php"); ?>
</head>

<body>
  <div id="scroll">
    <!-- Scroll -->

    <!-- Page one | Home -->
    <div class="page" id="one">
      <div class="circle-outer">
        <div class="circle-inner">
          <img src="dist/pic/logo.png" class="logo" />
        </div>
      </div>

      <div class="page-one-text-box">
        <div class="page-one-text-outer">
          <div class="page-one-text-inner">
            <p style="text-align:center;"><span>VIDEO | FOTOGRAFIE | AUDIO</span></p>
            <p class="line"></p>
            <p>
              <?php echo ($home_text); ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page two | Diensten -->
    <div class="page" id="two">
      <div class="diensten">
        <div class="dienst-outer dienst-outer-one">
          <div class="dienst-inner">
            <div class="dienst-inner-text">
              <p>
                <h2>VIDEO</h2>
                <p class="line"></p>
                <span>De kracht van video.</span>
                <br><br><br>
                <?php echo ($video_text); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="dienst-outer dienst-outer-two">
          <div class="dienst-inner">
            <div class="dienst-inner-text">
              <p>
                <h2>FOTOGRAFIE</h2>
                <p class="line"></p>
                <span>Een foto spreekt soms meer dan duizend woorden!</span>
                <br><br><br>
                <?php echo ($foto_text); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="dienst-outer dienst-outer-three">
          <div class="dienst-inner">
            <div class="dienst-inner-text">
              <p>
                <h2>AUDIO</h2>
                <p class="line"></p>
                <span>Muziek als element.</span>
                <br><br><br>
                <?php echo ($audio_text); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page three | Portfolio -->
    <div class="page" id="three">
      <div class="portfolio container">
        <div class="row">
          <div class="col-12">
            <h2>Portfolio</h2>
            <p class="line"></p>
          </div>
        </div>
        <div class="row partner-row">
          <div class="col-md-6 col-6 partner-col" data-toggle="modal" data-target="#jdrf-modal">
            <img class="partner" src="dist/pic/portfolio/jdrf.png">
          </div>
          <div class="col-md-6 col-6 partner-col" data-toggle="modal" data-target="#superdry-modal">
            <img class="partner" src="dist/pic/portfolio/superdry.png">
          </div>
        </div>
        <div class="row partner-row">
        <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#pathe-modal">
            <img class="partner" src="dist/pic/portfolio/pathe.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#ongeremd-modal">
            <img class="partner" src="dist/pic/portfolio/ongeremd.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#roc-top-modal">
            <img class="partner" src="dist/pic/portfolio/roc-top.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#d66-modal">
            <img class="partner" src="dist/pic/portfolio/d66.png">
          </div>
        </div>
        <div class="row partner-row">
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#varoses-modal">
            <img class="partner" src="dist/pic/portfolio/varoses.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#warrior-academy-modal">
            <img class="partner" src="dist/pic/portfolio/warrior-academy.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#run-for-kika-modal">
            <img class="partner" src="dist/pic/portfolio/run-for-kika.png">
          </div>
          <div class="col-md-3 col-6 partner-col" data-toggle="modal" data-target="#snapking-modal">
            <img class="partner" src="dist/pic/portfolio/snapking.png">
          </div>
        </div>
      </div>
    </div>

    <!-- Page four | Over ons -->
    <div class="page" id="four">
      <div class="about">
        <div class="about-outer about-col">
          <div class="about-inner">
            <div class="about-inner-text">
              <p>
                <h2>OVER ONS</h2>
                <p class="line"></p>
                <span>Roko Productions</span>
                <br><br>
                <?php echo ($over_text); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="vision-mission">
        <div class="vision-outer about-col">
          <div class="vision-inner">
            <div class="vision-inner-text">
              <p>
                <h2>VISIE</h2>
                <p class="line"></p>
                <?php echo ($visie_text); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="mission-outer about-col">
          <div class="mission-inner">
            <div class="mission-inner-text">
              <p>
                <h2>MISSIE</h2>
                <p class="line"></p>
                <?php echo ($missie_text); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page five | Contact -->
    <div class="page" id="five">
      <div class="contact container">
        <div class="row">
          <div class="col-12">
            <h2>Contact</h2>
            <p class="line"></p>
          </div>
        </div>
        <div class="row contact-data-and-form">
          <!-- Contactgegevens -->
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <h5>Contactgegevens:</h5>
              </div>
            </div>
            <br>
            <div class="row contact-data">
              <div class="col-1">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="col-11">
                <span>Folkloreweg 58, 1326 LA, Almere</span>
              </div>
            </div>
            <div class="row contact-data">
              <div class="col-1">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="col-11">
                <span>+31 6 10 62 90 05</span>
              </div>
            </div>
            <div class="row contact-data">
              <div class="col-1">
                <i class="far fa-envelope"></i>
              </div>
              <div class="col-11">
                <span>E-mail: info@rokoproductions.com</span>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-12">
                <img src="dist/pic/logo.png" class="logo-contact" />
              </div>
            </div>
          </div>
          <!-- Contact opnemen -->
          <div class="col-md-6">
            <form action="dist/php/email.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <h5>Neem contact met ons op:</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <fieldset class="form-group">
                    <label for="name-input" class="bmd-label-floating">Naam</label>
                    <input type="text" class="form-control" id="name-input" name="naam" pattern=".{2,}" required>
                    <span class="bmd-help">Vooraam en achternaam</span>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <fieldset class="form-group">
                    <label for="email-input" class="bmd-label-floating">E-mailaders</label>
                    <input type="email" class="form-control" id="email-input" name="email" required>
                    <span class="bmd-help">Voorbeeld: abc@abc.com</span>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <fieldset class="form-group">
                    <label for="tekst-input" class="bmd-label-floating">Bericht</label>
                    <textarea class="form-control" id="tekst-input" rows="6" name="bericht" minlength="10" required></textarea>
                    <span class="bmd-help">Schrijf hier waarom u contact met ons wilt maken</span>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 submit">
                  <button type="submit" class="btn btn-primary btn-raised">Verzend bericht</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row contact-social">
          <div class="col-12">
            <a target="_blank" href="https://www.linkedin.com/company/roko-productions/" class="fab fa-linkedin show-social"></a>
            <a target="_blank" href="https://www.instagram.com/rokoproductions/" class="fab fa-instagram show-social"></a>
            <a target="_blank" href="https://www.facebook.com/Roko-Productions-242692819566473/?fref=nf" class="fab fa-facebook-f show-social"></a>
            <a target="_blank" href="https://vimeo.com/user72743224" class="fab fa-vimeo-v show-social"></a>
            <a target="_blank" href="https://wa.me/31610629005" class="fab fa-whatsapp show-social"></a>
          </div>
        </div>
        <div class="row footer">
          <div class="col-12">
            <i>&copy; RoKo Productions <?php echo date("Y") ?>, Website made by <br><a target="_blank" href="https://www.linkedin.com/in/sven-brilleman/" class="sven-link">Sven Brilleman</a></i>
          </div>
        </div>
      </div>
    </div>

  </div><!-- Scroll -->
</body>

</html>

<!-- Scripts -->
<script type="text/javascript" src="dist/js/scroll.js"></script>
<script type="text/javascript" src="dist/js/stopVideo.js"></script>