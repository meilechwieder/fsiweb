<?php
// echo $_SERVER['REQUEST_URI'];exit;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = explode('?',$_SERVER['REQUEST_URI'])[0];
$services = json_decode(file_get_contents('data/services.json'), true);
$serv2 = json_decode(file_get_contents('data/serv2.json'), true);


function api($url){
  $contentfulBaseUrl= 'https://cdn.contentful.com';
  $access='1Du0FPxziyrLVaLnnK0LzEp_9UdvdvRBckia_BNYXQc';
  $space = 'xcss3enad0q9';
    if(strpos($url,'?')!==false){
      $url.='&';
     }else{
       $url .='?';
     }
    //  echo "$contentfulBaseUrl/spaces/$space/environments/master${url}access_token=$access";
     return json_decode(file_get_contents("$contentfulBaseUrl/spaces/$space/environments/master${url}access_token=$access"),true);
   }
   function getAsset($id){
     return api("/assets/$id")['fields']['file']['url'];
   }
   $d=time();
   $data = api('/entries?limit=1000');
   function findAsset($id){
     global $data;
return array_values(array_filter($data['includes']['Asset'],function($e) use($id){
        return $e['sys']['id']===$id;
      }))[0]['fields']['file']['url'];
   }
   function findById($id){
     global $data;
return array_values(array_filter($data['items'],function($e) use($id){
        return $e['sys']['id']===$id;
      }))[0];
   }

   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Five Star Interiors</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@fsiinteriors.com">info@fsiinteriors.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span> (845) 268-9100</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img loading="lazy" src="assets/img/logo 2.webp" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <?php if($path == '/' || $path == '/index.php'){?>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="/about.php">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto " href="/gallery.php">Gallery</a></li>
            <li><a class="nav-link scrollto " href="/projects.php">Projects</a></li>
            <li><a class="nav-link scrollto " href="https://fivestarinteriors.herokuapp.com">Login</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php }else{?>
            <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
            <li><a class="nav-link scrollto <?php echo strpos($path,'about')?'active':'' ; ?>" href="/about.php">About</a></li>
            <li><a class="nav-link scrollto <?php echo strpos($path,'service')?'active':'' ; ?>" href="/#services">Services</a></li>
            <li><a class="nav-link scrollto <?php echo strpos($path,'gallery')?'active':'' ; ?>" href="/gallery.php">Gallery</a></li>
            <li><a class="nav-link scrollto <?php echo strpos($path,'projects')?'active':'' ; ?>" href="/projects.php">Projects</a></li>
            <li><a class="nav-link scrollto " href="https://fivestarinteriors.herokuapp.com">Login</a></li>
            <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <?php }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->