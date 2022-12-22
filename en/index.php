<?php include 'layout/header.php' ?>
<?php include 'layout/nav.php' ?>
<?php include '../database/conn.php' ?>


  <main class="home-style">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" >

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1  class="h1-style" data-aos="fade-up">We offer useful exams covering</h1>
          <h1 class="h1-style" data-aos="fade-up"> rules and vocabulary</h1>
          <div class="col-lg-6 " data-aos="zoom-out" data-aos-delay="200" style="margin-top: 4rem;">
            <img src="../assets/img/Home Art.png" class="img-fluid" alt="">
          </div>
          
        </div>
       
        <div class="col-lg-6  frame  d-flex flex-column" data-aos="zoom-out" data-aos-delay="200">
            <div class=" icons">
             
                <button type="button" class="btn btn-info btn-lg justify-content-center" data-toggle="modal" data-target="#myModal"> <span class="material-symbols-outlined ">
                  play_arrow
                  </span></button>
            </div>

           
          
          
        </div>
<?php

if(!isset($_SESSION['studentID'])){
  ?>
        <div data-aos="fade-up"  class="col-lg-12 justify-content-center">
          <div class="text-center " >
            <a href="login.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" >
              <span>Login</span>
              <i class="bi bi-arrow-right" ></i>
            </a>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
          <video width="100%" height="100%" controls>
            <source src="movie.mp4" type="video/mp4">
           
          </video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</main>


 


<?php include 'layout/script.php' ?>