<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <!-- site tittle -->
  <title>Flying - Interactive Template Portfolio</title>
  <meta name="description" content="Flying is a responsive &amp; interactive fullscreen portfolio for artists, photographers, media agencies, restaurants and for everyone that wants to showcase their portfolio in a professional way.">
  <meta name="keywords" content="responsive, portfolio, professional, artist, fullscreen, photo, photographers, agencies, agencies, php, interaction">
  
  <!-- mobile meta tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="HTML5 Template">
  
  <!-- css style -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
  <!-- java scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Raleway:200,300,regular,500,600,700,800,900","Playfair Display:regular,italic,700,700italic,900,900italic:latin,cyrillic,latin-ext"]
      }
    });
  </script>
  
  <!-- favion -->
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
  
  <!-- apple touch icon -->
  <link rel="apple-touch-icon" href="images/ico-phone.png">
  
</head>
<body style="background-color:black;">

  <!-- preloader -->
  <div class="loading">
    <div class="loader"><img src="images/puff.svg" alt="puff.svg">
    </div>
  </div>
  
   <?php include ('nav.php');?>
  </div>
  <div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
      <div class="w-container">
        <a class="w-nav-brand brand-res" href="index.html"><img src="images/logo4-1.png" width="70" alt="logo4-1.png">
        </a>
        <?php include ('resp-nav.php');?>
        <div class="w-nav-button menu-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <div class="move-wrapper">
    
      <!-- portfolio filter -->
      <div class="w-hidden-tiny w-clearfix div-social">
        <div class="filters">
          <ul class="w-list-unstyled filter-list">
            <li class="filter-iterm"><a class="filter" href="#" data-filter="all">All</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".illustration">Illustration</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".logotype">Logotype</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".print">Print</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".motion">Motion</a>
            </li>
            <li class="filter-iterm">
              <a class="w-inline-block filter filter-star" href="#" data-filter=".star">
               <i class="fa fa-star fa-2x"></i>
              </a>
            </li>
          </ul>
        </div>
      </div><!-- end portfolio filter -->
      
      <!-- start portfolio -->
      <div class="w-clearfix grid" id="Grid">
        <div class="mix print star" id="mix-2" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port1.jpg">
          </div>
        </div>
        <div class="mix illustration motion" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Tab Slider</h4><div class="sub-text" data-ix="move-up-2">Motion &amp; Illustration</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port9.jpg">
          </div>
        </div>
        <div class="mix motion" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Gallery</h4><div class="sub-text" data-ix="move-up-2">Motion</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port20.jpg">
          </div>
        </div>
        <div class="mix logotype" id="mix" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Video</h4><div class="sub-text" data-ix="move-up-2">Logotype</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port4.jpg">
          </div>
        </div>
        <div class="mix logotype illustration star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">The Logo</h4><div class="sub-text" data-ix="move-up-2">Logoype &amp; Illustration</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port5.jpg">
          </div>
        </div>
        <div class="mix illustration motion star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Work Table</h4><div class="sub-text" data-ix="move-up-2">Illustration &amp; Motion</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port7.jpg">
          </div>
        </div>
        <div class="mix motion" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">Purple Fish</h4><div class="sub-text" data-ix="move-up-2">Motion</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="port22.jpg">
          </div>
        </div>
        <div class="mix illustration star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="photos.php"><h4 class="text-port" data-ix="move-up">iStrange</h4><div class="sub-text" data-ix="move-up-2">Illustration</div></a>
          <div class="img-wrapper"><img src="images/light1.jpg" alt="5port15.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end portfolio -->
  
  <!-- JQUERY SCRIPTS -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.moutheme.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/form.js"></script>
  <script type="text/javascript" src="js/default.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>