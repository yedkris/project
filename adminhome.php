<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Shop</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
        <h1><a href="main.php"><img src="images/puppy-available.png" alt="" width="100" height="66"></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
              <li class="current"><a href="adminhome.php">Home</a></li>
            
              
           
           <li><a href="view1.php">View</a></li>
            <li><a href="view2.php">View users pet</a></li>
            <li><a href="reg1.php">Pet Registration</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="top_block">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt="">
            <div class="banner">WELCOME<span>TO</span> PET <i>SHOP</i>
              <p>ADMIN HOME</p>
            </div>
          </li>
          <li><img src="images/img1.jpg" alt="">
            <div class="banner">WELCOME<span>TO</span> PET <i>SHOP</i>
              <p>ADMIN HOME</p>
            </div>
          </li>
          <li><img src="images/img6.jpg" alt="">
            <div class="banner">WELCOME<span>TO</span> PET <i>SHOP</i>
              <p>ADMIN HOME</p>
            </div>
          </li>
          <li><img src="images/img7.jpg" alt="">
            <div class="banner">WELCOME<span>TO</span> PET <i>SHOP</i>
              <p>ADMIN HOME</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Club &copy; 2018 | <a href="#">Privacy Policy</a> | Design by: YKS<a href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>