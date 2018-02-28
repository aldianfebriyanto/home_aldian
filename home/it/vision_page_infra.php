<!DOCTYPE html>
<!-- saved from url=(0036)https://s.bootsnipp.com/iframe/Qb83E -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="robots" content="noindex, nofollow">

    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style_it.css">


    <script src="../assets/js/jquery-1.11.1.min.js.download"></script>
    <script src="../assets/js/bootstrap.min.js(1).download"></script>
    <script type="text/javascript" src="../assets/js/dynamicpage.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.ba-hashchange.min.js"></script>

  
</head>
<body> 
<div id="page-wrap">
      <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
      <div id="page-wrap">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="background-color: #008080;">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php" style="background-color: #00a0b0; color: black;">
                       KFC
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>

              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Infrastructure<span></span></a>
                  <ul class="aldian">
                  <li><a href="vision_page_infra.php">Visi & Misi</a></li>
                  <li><a href="#">Biodata Karyawan</a></li>
                  <ul class="dropdown-menu" role="menu">
                  </ul>                  
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT ERD<span></span></a>
                  <ul class="aldian">
                    <li><a href="########">Visi & Misi</a></li>
                    <li><a href="#">Biodata Karyawan</a></li>
                  <ul class="dropdown-menu" role="menu">
                  </ul>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Support<span></span></a>
                  <ul class="aldian">
                  <li><a href="########">Visi & Misi</a></li>
                  <li><a href="#">Biodata Karyawan</a></li>
                  <ul class="dropdown-menu" role="menu">
                  </ul>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Solution<span></span></a>
                  <ul class="aldian">
                  <li><a href="########">Visi & Misi</a></li>
                  <li><a href="#">Biodata Karyawan</a></li>
                  <ul class="dropdown-menu" role="menu">
                  </ul>
                  </ul>
                </li>
        

                <li>
                    <a href="########">Contact Us</a>
                </li>
                <li>
                    <a href="######">Follow US</a>
                </li>
            </ul>
        </nav>


        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container" style="background-color:#fefbf7; border-radius: 15px; margin-bottom: 10%;">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>KFC IT DIVISION</h1>


        <hr class="style-eight">
          <div class="gallery">
            <section id="main-content">
                <div id="guts"> 
                  
            <div class="box">
                         
               <h3>IT Infrastructure</h3>
              <p>adalah suatu rangkaian konsep dan teknik pengelolaan infrastruktur, pengembangan, serta operasi teknologi informasi (TI)</p>
              
            </div>

                <h3>VISI & MISI</h3>
                <P></P>

             </div>
           </section>
            </div>
  
      <hr class="style-eight">
                    </div>
                </div>
            </div>

            <div class="footer-bottom" style="background-color: #008080; margin-top: 5%; padding-bottom: 5px;">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn; max-height: 5px; margin-top: -10px; margin-bottom: 25px;" class="col-md-12 text-center wow zoomIn">

          <h5> &copy Copyright 2018 by teamERROR404.</h5>
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

 </div>
</div>

    
    <!-- /#wrapper -->
  <script type="text/javascript">

  $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
  </script>


</body>
</html>