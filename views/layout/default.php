<?php
function filePath($filePath)
{
$fileParts = pathinfo($filePath);

if(!isset($fileParts['filename']))
{$fileParts['filename'] = substr($fileParts['basename'], 0, strrpos($fileParts['basename'], '.'));}
  
return $fileParts;
}
?>
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
  <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/base.css">
  <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/font-awesome.min.css">
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
  <!-- JQUERY SCRIPTS -->
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/jquery.moutheme.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/modernizr.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/form.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/default.js"></script>
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/jquery.mixitup.min.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="<?=WEBROOT?>public/js/app.js"></script>
  <!-- favion -->
  <link rel="shortcut icon" type="image/x-icon" href="<?=WEBROOT?>public/img/favicon.ico">
  
  <!-- apple touch icon -->
  <link rel="apple-touch-icon" href="images/ico-phone.png">
  
</head>
<body>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>-->

<script>
//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

//   ga('create', 'UA-60005058-1', 'auto');
//   ga('send', 'pageview');

</script>
  <?php include ('nav.php');?>
	<?php echo $content_for_layout; ?>	<!-- ! Contains Section "Main" And the "container" DIV -->
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
!-->


</body>
</html>
