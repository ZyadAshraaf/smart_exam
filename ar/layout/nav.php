
    <?php 


if (isset($_GET['out'])) {
    session_unset();
    session_destroy();
    header("location:/qudraty/index.php");
  }
?>



<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center" style="padding-right: 5rem;">
        <img src="../assets/img/SMART EXAM.png" alt="">
        <span>SmartExam</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الصفحه الرئيسيه</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="#services">قيمنا</a></li>       
          <li><a class="nav-link scrollto" href="#contact">اتصل بنا</a></li>
          <li>
            <button class="mx-2 px-1 rounded ar" onclick="changeLanguage()">
              <span>AR</span>
            </button>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    
  </header><!-- End Header -->