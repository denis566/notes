<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="{{ asset('assets/images/favicon.png')}}" rel="icon" />
<title>Documentation | Your ThemeForest item Name</title>
<meta name="description" content="Your ThemeForest item Name and description">
<meta name="author" content="harnishdesign.net">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}} " />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css')}} " />
<!-- Highlight Syntax -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/highlight.js/styles/github.css')}} " />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylesheet.css')}} " />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

<!-- Preloader -->
<!-- <div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div> -->
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
      <div class="container-fluid">
        <!-- Sidebar Toggler -->
		<button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>
		
		<!-- Logo --> 
        <a class="logo ml-md-3 h3" href="index.html" title="SokolovDev"> 
          <!-- <img src="assets/images/logo.png" alt="iDocs Template"/> -->
          <strong> SokolovDev</strong>
         
         </a> 
		<span class="text-2 ml-2">v1.0</span> 
        <!-- Logo End -->
        
		<!-- Navbar Toggler -->
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
        
		<div id="header-nav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="dropdown"> <a class="dropdown-toggle" href="#">Laravel</a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Artisan</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Migrate</a></li>
                    <li><a class="dropdown-item" href="#">Roure</a></li>
                    <li><a class="dropdown-item" href="#">Model</a></li>
                  </ul>
                </li>
                  <li><a class="dropdown-item" href="#">Migrate</a></li>
                  <li><a class="dropdown-item" href="#">Roure</a></li>
                  <li><a class="dropdown-item" href="#">Model</a></li>
                <li><a class="dropdown-item" href="#">Blade</a></li>
              </ul>
            </li>
            <li> <a href="#">Vue.js</a></li>
            <li class="dropdown"> <a class="dropdown-toggle" href="#">CMS</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Bitrix</a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Wordpress</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.html">Темы</a></li>
                    <li><a class="dropdown-item" href="feature-header-dark.html">META поля</a></li>
                    <li><a class="dropdown-item" href="feature-header-primary.html">Типы постов</a></li>
                    <li><a class="dropdown-item" href="index-2.html">Таксономии</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">OpenCart</a>
                <li><a class="dropdown-item" href="#">ModX</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a class="dropdown-toggle" href="#">Настройки</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Docker</a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Linux</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.html">Терминал</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Apache</a>
                <li><a class="dropdown-item" href="#">Ngix</a></li>
                <li><a class="dropdown-item" href="#">SQL</a></li>
                <li><a class="dropdown-item" href="#">SSH</a>


              </ul>
            </li>
            <li><a href="#">Git</a></li>
            <li><a href="#">Закладки</a></li>

            <li><a href="#">Портфолио</a></li>
          </ul>
        </div>
        <ul class="social-icons social-icons-sm ml-lg-2 mr-2">
          <li class="social-icons-telegram"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Telegram"><i class="fa-brands fa-telegram"></i></a></li>
          <li class="social-icons-vk"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="vk"><i class="fa-brands fa-vk"></i></a></li>
          <li class="social-icons-dribbble"><a data-toggle="tooltip" href="http://www.dribbble.com/harnishdesign/" target="_blank" title="" data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
        </ul>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  @yield('content')
  
  <!-- Footer
  ============================ -->
  <footer id="footer" class="section bg-dark footer-text-light">
    <div class="container">
      <ul class="social-icons social-icons-lg social-icons-muted justify-content-center mb-3">
        <li><a data-toggle="tooltip" href="https://twitter.com/harnishdesign/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.facebook.com/harnishdesign/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.dribbble.com/harnishdesign/" target="_blank" title="" data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.github.com/" target="_blank" title="" data-original-title="GitHub"><i class="fab fa-github"></i></a></li>
      </ul>
      <p class="text-center">Copyright &copy; 2020 <a href="http://www.harnishdesign.net/idocs-one-page-documentation-html-template/">iDocs</a>. All Rights Reserved.</p>
	  <p class="text-2 text-center mb-0">Design &amp; Develop by <a class="btn-link" target="_blank" href="http://www.harnishdesign.net/">HarnishDesign</a>.</p>
    </div>
  </footer>
  <!-- Footer end -->
  
</div>
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript
============================ -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
<!-- Highlight JS -->
<script src="{{ asset('assets/vendor/highlight.js/highlight.min.js') }}"></script> 
<!-- Easing --> 
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script> 
<!-- Magnific Popup --> 
<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
<!-- Custom Script -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
