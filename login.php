<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $user  = filter_var( $_POST['user']    , FILTER_SANITIZE_STRING);
      $email = filter_var( $_POST['email']   , FILTER_SANITIZE_EMAIL);
      $phone = filter_var( $_POST['phone']   , FILTER_SANITIZE_NUMBER_INT);
      $meg   = filter_var(md5($_POST['message'] ,FILTER_SANITIZE_STRING));

      include 'conn.php';


      $err_array = array();

      if(strlen($user) < 4){
        $err_array[] = "Please enter the number of characters <strong>4</strong> characters, try again";
      }
      if(strlen($phone) < 11){
        $err_array[] =  " Please enter a valid phone number";
      }
      if(strlen($meg) < 11){
        $err_array[] =  " Please enter the number of characters <strong>10</strong> characters, try again";
      }
        
      
  } 

  $con = null;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
  </head>
  <body>
  <!--Start Form-->
  <div class="contanier">
        <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">
           
        <!-- Alarm displays the problem using php -->
         <?php if(!empty($err_array)){ ?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php
            foreach($err_array as $error){
              echo $error . '<br>'; 
            }
            ?>
            </div>
          <?php }?>

        <!-- Input Username-->
        <div class="form-group">
          <input class="form-control username" type="text" name="user" placeholder="Inter You Username"
          value="<?php if(isset($user)){echo $user;} ?>">
          <i class="fas fa-user fa-fw icon"></i>
          <span class="asterisx">*</span>
          <div class="alert alert-danger control-input" role="alert">
          Please enter the number of characters <strong>4</strong> characters, try again
          </div>
        </div>

         <!-- Input Email-->
         <div class="form-group">
         <input class="form-control email" type="email" name="email" placeholder="Inter You Email"
         value="<?php if(isset($email)){echo $email;} ?>">
         <i class="fas fa-envelope fa-fw icon"></i>
         <span class="asterisx">*</span>
         <div class="alert alert-danger control-input" role="alert">
         Please enter a valid email!
         </div>
         </div>

         <!-- Input Phone-->
         <div class="form-group">
         <input class="form-control phone" type="text" name="phone" placeholder="Inter You Phone"
         value="<?php if(isset($phone)){echo $phone;} ?>">
         <i class="fas fa-phone fa-fw icon"></i>
         <span class="asterisx">*</span>
         <div class="alert alert-danger control-input" role="alert">
          Please enter the number of characters <strong>11</strong> characters, try again"
         </div>
         </div>

        <!-- Input Message-->
         <div class="form-group">
          <textarea class="form-control meg" name="message" 
          placeholder="Send Your Message"><?php if(isset($meg)){echo $meg;} ?></textarea>
          <span class="asterisx">*</span>
          <div class="alert alert-danger control-input" role="alert">
          Please enter the number of characters <strong>10</strong> characters, try again"
         </div>
        </div>

        <!-- Input Button-->
        <i class="far fa-paper-plane info"></i>
         <input class="btn btn-info mt-3 " type="submit" value="Send Message">
        </form>
  </div>
  <!-- End From -->



    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>