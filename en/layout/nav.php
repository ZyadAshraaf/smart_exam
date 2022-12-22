
    <?php 


if (isset($_GET['out'])) {
    session_unset();
    session_destroy();
    header("location:/qudraty/index.php");
  }
?>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/SMART EXAM.png" alt="">
        <span>SmartExam</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">our values</a></li>       
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
            <button class="mx-4 px-1 rounded en" onclick="changeLanguage()">
              <span>EN</span>
            </button>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    
  </header><!-- End Header -->