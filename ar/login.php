
<?php include 'layout/header.php' ?>
<?php include '../database/conn.php' ?>

<?php
if(!isset($_SESSION['studentID'])){
$logged=true;
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username) || empty($password)) {
    } else {
        $searchStudent = "SELECT * FROM students WHERE username='$username' AND password='$password'";
        $searchStudentQuery = mysqli_query($conn, $searchStudent);
        $row=mysqli_fetch_assoc($searchStudentQuery);
        $numRows = mysqli_num_rows($searchStudentQuery);
        $logged=false;
        if ($numRows == 1) {
            $logged = true;
            $_SESSION['studentID']= $row["id"];
            $_SESSION['studentName']= $row["name"];
            $_SESSION['studentUsername']= $username;
            $_SESSION['numberOfAttempts']=$row["pre_quiz_attempts"];
            $_SESSION['final_attempts']=$row["final_quiz_attempts"];


?>
<script>
  window.location.href = '/smartexam/ar/index.php';
</script>
<?php
        }else{
            echo "false";
        }
    }
}
?>
  <main class="">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" >


    <div class="container ">
      <div class=" ">
   
                  <div class=" contact" id="contact">
                      <form  method="post" class="php-email-form justify-content-center center">
                    
                          <div class="row gy-4">
                            <div class="col-lg-12 hero-img " >
                              <img src="../assets/img/SMART EXAM Logo.png" class="img-fluid " alt="" >
                          </div>
                          <?php 
                if($logged==false){
                    echo 
                    "<div class='alert alert-danger col-10' role='alert'>
                      Wrong username or password
                    </div>";
                }
                ?>
              <div class="">
                <input type="username" class="form-control" name="username" placeholder="username" required>
              </div>

              <div class="">
                <input type="password" class="form-control" name="password" placeholder="password" required>
              </div>
              <div class=" text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <button type="submit" name="login">Login</button>
              </div>

            </div>
          </form>

        </div>



      </div>
    </div>

  </section><!-- End Hero -->

</main>

<?php
}else{

    ?>

<script>
  window.location.href = '/smartexam/ar/index.php';
</script>
<?php
}
include 'layout/script.php' ?>