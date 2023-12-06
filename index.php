<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Museum AR</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:title" content="Museum AR">
  <meta property="og:type" content="Website">
  <meta property="og:description" content="Discover a new era of museum exploration with AR Museo! Immerse yourself in art and history using our innovative Augmented Reality app. Download now for an interactive journey through captivating exhibits.">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!-- <link href="css/image_preview_for_link.css" rel="stylesheet"> -->

  <!-- MiniPreview stuff here -->
  <link href="./jquery.minipreview.css" rel="stylesheet">
  <script src="./jquery.minipreview.js"></script>
  <!-- <script src="js/image_preview_for_links.js"></script> -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Tenor+Sans&display=swap" rel="stylesheet">



  <meta name="theme-color" content="#fafafa">

</head>

<body onload="showMuseums()">


  <!-- Add your site or application content here -->

  <!-- < ?php include ('php/layout-header.php');?> -->
  
  <div class="container">
    <nav class="mainNav">
      <ul class="flex row">
        <li><a href="#s-cta">About</a></li>
        <li><a href="#s-instructions">How to use</a></li>
        <li><a href="#s-museums">Locations</a></li>
      </ul>
    </nav>
    <section id="s-title">
      <h1><a href="#">MUSEUM AR</a></h1>
    </section>
    <section id="s-cta" class="flex right">
      <div class="description flex column">
        <h2>About</h2>
        <p>Museum AR transforms your museum experience by overlaying rich multimedia content onto exhibits. Dive deep into the hidden stories behind each artifact, unraveling secrets and narratives that traditional displays can't convey.</p>
        <button>Download</button>
      </div>
    </section>
  </div>
  <section id="s-keywords">
      <h3 id="s-keyword1">FUTURE</h3>
      <h3 id="s-keyword2">EXPERIENCE</h3>
  </section>


  <div class="container">

    <section id="s-instructions">
      <h2>How to use</h2>
      <div class="steps flex row">
        <div class="step-item">
          <div class="step-image"><img src="img/step-icons/download.png" alt=""></div>
          <p>1. Download and install the app</p>
        </div>
        <div class="step-item">
          <div class="step-image"><img src="img/step-icons/qr-code.png" alt=""></div>
          <p>2. Scan labelled items in partnered locations</p>
        </div>
        <div class="step-item">
          <div class="step-image"><img src="img/step-icons/museum.png" alt=""></div>
          <p>3. Experience the new exhibition</p>
        </div>
      </div>
    </section>

    <section class="flex column">
      <div class="ar-img left">
        <img src="img/AR_example1.jpeg" alt="">
      </div>
      <div class="ar-img right">
        <img src="img/AR_example2.jpeg" alt="">
      </div>
    </section>


  <!-- Suggestions will be displayed in below div. -->

    

    <section id="s-museums">
      <h2>Locations</h2>
      <div class="search-container">
            <input type="text" id="search" placeholder="Search" /><br>
      </div>
      <div id="display" class="museum-list"></div>
      <div class="more-soon">
         <div class=" ">
            <h4>More soon!</h4>
         </div>
      </div>
    </section>
  </div>

  <div onclick="closePopup(this)" id="popupCover" class="off"></div>

  <div class="container">

    <section id="s-footer" class="flex column">
      <div class="social-links">
        <a href="[Instagram Link]">Instagram</a> |
        <a href="[Twitter Link]">Twitter</a> |
        <a href="[Facebook Link]">Facebook</a> |
        <a href="[LinkedIn Link]">LinkedIn</a>
      </div>

      <div class="contact">
        <p>Contact Us: <a>museumar@yerik.ch</a></p>
      </div>

      <div class="download-app">
        <p>Download the App: <a href="[Download Link]">Museum AR</a></p>
      </div>

      <div class="legal">
        <p>© 2023 Museum AR. All rights reserved. | <a href="[Privacy Policy Link]">Privacy Policy</a> | <a href="[Terms of Service Link]">Terms of Service</a> | <a href="[Cookie Policy Link]">Cookie Policy</a></p>
      </div>
    </section>
  </div>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- <script type="text/javascript"> -->

    <!-- window.addEventListener('DOMContentLoaded', () => {
      $('#p1 a').miniPreview({ prefetch: 'pageload' });
      $('.museum-item a').miniPreview({ prefetch: 'none' });
    }); -->
    
  <!-- </script> -->
  
  <!-- </script> <script src="https://rawgit.com/shaneapen/Image-Preview-for-Links/master/image_preview_for_links.js"></script> -->

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>