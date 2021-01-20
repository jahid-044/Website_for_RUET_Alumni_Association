<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="master.css">

    <link href="https://fonts.googleapis.com/css?family=Acme|Arvo|Jua|Russo+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
      
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">

  </head>

  <body class="new">
     <div class="jumbo">
        <img align='center' class="center" src= "ruet_web_logo.png"  alt="RUET"> 
        <ul class="nav justify-content-center" id="iid">
          <li class="nav-item">
            <a href="index.html"> <h4 class="x"> <b>Home</b> </h4> </a>
          </li>
            
          <li class="nav-item">
            <a href="membership.php"><h4 class="x"> <b>Registration</b> </h4> </a>
         </li>
          
          <li class="nav-item">
            <a href="member_list.html"> <h4 class="x"> <b>Member list</b> </h4> </a>
          </li>



          <li class="nav-item">
            <a href="login.php"> <h4 class="x"> <b>Login as admin</b> </h4> </a>
          </li>

        </ul>
        

    </div>
      
    <!-- Image and text -->
      <form class="reg" style="padding-left:470px; padding-top:90px" method="post" name="form2">
          <h3 style="padding-left: 140px; font-size: 280%"><b>Log-in as admin</b></h3>
          <div style="padding-top: 20px" >
                   
                   <label><h2><b>&nbsp;Userame:&emsp;&nbsp;</b></h2></label>
                     <input type="text" name="name" required="" autocomplete="off" />
         </div>
        <div style="padding-top: 10px">
                   <label><h2><b>&nbsp;Password:&emsp;</b></h2></label>
                     <input type="password" name="password" autocomplete="off" />
        </div>
        <div style="padding-top: 20px; padding-left: 150px" >
                    <input class="btn btn-default submit" id="x" type="submit" name="submit2" value="Login">
        </div>
      </form>
      <?php
         if(isset($_POST["submit2"]))
         {
             $name="admin";
             $pass="admin";
             if($_POST['name']==$name && $_POST['password']==$pass)
             {
                 ?>
                  <script type="text/javascript">
                        window.location="admin.php";
                    </script>
      <?php
             }
             else
             {
                 ?>
      <br><br><br>
      <div class="alert alert-danger col-lg-6 col-lg-push-3" style="font-size: 200%">
            <strong style="color:red">Invalid</strong> Username Or Password.
        </div>
      <?php
                 
             }
         }
      ?>

  </body>

</html>
