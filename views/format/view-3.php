<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <!-- site tittle -->
  <title>Auguste BUI</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  
  <!-- mobile meta tag -->
  <meta name="viewport" content="">
  <meta name="generator" content="">
  
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
<body>

  <!-- preloader -->
  <div class="loading">
    <div class="loader"><img src="images/puff.svg" alt="puff.svg">
    </div>
  </div>
  
  <!-- start navigation -->
  <?php include 'nav.php';?>
  
  </div>
  <div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
      <div class="w-container">
        <a class="w-nav-brand brand-res" href="index.html"><img src="images/logo4-1.png" width="70" alt="logo4-1.png">
        </a>
        
        <!-- start responsive navigation -->
        <nav class="w-nav-menu res-menu" role="navigation">
          <ul class="w-list-unstyled">
            <li class="li-nav"><a class="nav-link active" href="index.html">Portfolio</a>
              <div class="sub-nav">work we are proud of</div>
            </li>
            <li>
              <ul class="w-list-unstyled">
                <li class="sub-li"><a class="subnav-link" href="portfolio-3-columns.html">Portfolio 3 Columns</a>
                  <div class="line"></div>
                </li>
                <li class="sub-li"><a class="subnav-link" href="index.html">Portfolio 4 Columns</a>
                  <div class="line"></div>
                </li>
                <li class="sub-li"><a class="subnav-link" href="portfolio-5-columns.html">Portfolio 5 Columns</a>
                  <div class="line"></div>
                </li>
              </ul>
            </li>
            <li class="li-nav"><a class="nav-link" href="pages.html">Pages</a>
              <div class="sub-nav">Different pages</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="blog.html">Blog</a>
              <div class="sub-nav">what we think</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="elements.html">Elements</a>
              <div class="sub-nav">something you need</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="contact.html">Contact</a>
              <div class="sub-nav">get in touch</div>
            </li>
          </ul>
        </nav><!-- end responsive navigation -->
        <div class="w-nav-button menu-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <div class="move-wrapper">
    
      <!-- portfolio filter -->
      <div class="w-hidden-tiny w-clearfix div-social">
        <div class="w-clearfix filters">
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
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="mix mix-3 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">Image Stack</h4><div class="sub-text" data-ix="move-up-2">Print</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg" width="449px" height="449px">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
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