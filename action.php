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
             <?php
            if(isset($_POST["submit1"]))
            {
                $tm = md5(time());
                $fnm = $_FILES["pic"]["name"];
                $dst = "./image/" . $tm . $fnm;
                move_uploaded_file($_FILES["pic"]["tmp_name"], $dst);
                
                mysqli_query($link,"insert into member values('','$_POST[name]','$_POST[roll]','$_POST[dept]','$_POST[year]','$_POST[email]','$_POST[date]','$_POST[gender]','$_POST[blood]','$_POST[contact]','$_POST[mobile]','$_POST[prof]','$fnm','no')");
            }
            ?>
      
       <div style="color: black; font-family: 'Arvo', serif; padding-left: 130px; padding-top: 125px;">
           <h3>Registration successful. Thank you for your registration.<br><br><a href="index.html">Back to Home page</a></h3>
      </div>


  </body>

</html>
