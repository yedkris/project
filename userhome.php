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
        <h1><a href="userhome.php"><img src="images/puppy-available.png" alt="" width="100" height="66"></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="userhome.php">Home</a></li>
            
            <li><a href=""></a></li>
            <li><a href="view.php">view </a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="details1.php?">MY CART<img src="images/cart.png" alt="" width="42" height="42"></a>
            <li><a href="sell.php">SELL</a></li>
            </li>
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
            <div class="banner">USER HOME <span>PAGE</span> 
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="images/slide3.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

  <div class="container_12">
      <div class="container">
    <pre><font size="17" color="orange">Let's Find a pet For You!</font></pre>
    <pre><font size="16" color="blue">Search by Category</font></pre>
	<div class="row">
      <div class="ui-block">
        
				<div class="ui-block-title">
                                    
                                        <table>
                                            
                                            <tr><td><a href="details.php?myNumber=bird"><img src="images/img1.jpg" width="150" height="150" style="border:1px solid black" onmousemove="this.style.border = '2px solid orange'" onmouseout="this.style.border = '1px solid black'" ></a></td><td></td><td></td><td></td><td></td><td></td><td><a href="details.php?myNumber=cat"><img src="images/cat.jpg" width="150" height="150" style="border:1px solid black" onmousemove="this.style.border = '2px solid orange'" onmouseout="this.style.border = '1px solid black'"  ></a></td><td></td><td></td><td></td><td></td><td></td><td><a href="details.php?myNumber=dog"><img src="images/dog.jpg" width="150" height="150" style="border:1px solid black" onmousemove="this.style.border = '2px solid orange'" onmouseout="this.style.border = '1px solid black'" ></a></td>
                                                
                                            
                                           
                                        </table>
                                    
                                    
                                </div>
  </div>
        </div>
      </div>
  
  </div>

<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Club | <a href="#">Privacy Policy</a> | Design by: YKS</p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>