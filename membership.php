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
       <div class="reg">
           <form name="register" method="post" id="userform" enctype="multipart/form-data" action="action.php">
               <div >
                   
                   <label><h2><b>1.&nbsp;Name:&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="text" name="name" required="" autocomplete="off"/>
                </div>
               <img src="upload.jpg" alt="image" align="right" width="400" height="150">
               <div style="padding-top: 10px">
                   <label><h2><b>2.&nbsp;Roll no.&nbsp;:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="text" name="roll" required="" autocomplete="off" />
                </div>
               
               <div style="padding-top: 10px">
                   <label><h2><b>3.&nbsp;Department&nbsp;:&emsp;&emsp;&emsp;</b></h2></label>
                     <select name="dept">
                         <option style="display:none">-- select an option --</option>
                         <option value="EEE">Dept. of Electrical and Electronic Engineering (EEE)</option>
                         <option value="CSE">Dept. of Computer Science &amp; Engineering (CSE)</option>
                         <option value="ECE">Department of Electrical and Computer Engineering (ECE)</option>
                         <option value="ETE">Dept. of Electronics and Telecommunication Engineering (ETE)</option>
                         <option value="CE">Dept. of Civil Engineering (CE)</option>
                         <option value="Arch">Dept. of Architecture (Architecture)</option>
                         <option value="URP">Dept. of Urban &amp; Regional Planning (URP)</option>
                         <option value="BECM">Dept. of Building Engineering &amp; Construction Management (BECM)</option>
                         <option value="IPE">Dept. of Industrial &amp; Production Engineering (IPE)</option>
                         <option value="GCE">Dept. of Glass and Ceramic Engineering (GCE)</option>
                         <option value="MTE">Dept. of Mechatronics Engineering (MTE)</option>
                         <option value="MSE">Dept. of Materials Science &amp; Engineering (MSE)</option>
                         <option value="ME">Dept. of Mechanical Engineering (ME)</option>
                         <option value="CFPE">Department of Chemical and Food Process Engineering (CFPE)</option>
                   </select>
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>4.&nbsp;Year of graduation&nbsp;:</b></h2></label>
                     <input type="text" name="year" required="" autocomplete="off" />
                </div>
       <!--        <div style="padding-top: 10px">
                   <label><h2><b>3.&nbsp;Password&nbsp;:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="password" name="password" placeholder="At least 8 characters with letters and numbers" minlength="8" required/>
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>3.&nbsp;Confirm password&nbsp;:&nbsp;</b></h2></label>
                     <input type="password" name="confirm" required=""/>
                </div>-->
               
               <div style="padding-left: 700px">
                   <input type="file" name="pic" required="">
                </div>
               
               <div>
                   <label><h2><b>5.&nbsp;Email&nbsp;:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="text" name="email" required="" autocomplete="off" />
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>6.&nbsp;Date of birth&nbsp;:&nbsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="text" placeholder="dd/mm/yy" name="date" required="" autocomplete="off" />
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>7.&nbsp;Gender&nbsp;:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></h2></label>
                    <input type="radio" name="gender" value="male"> <label><h2>Male&emsp;</h2></label>
                    <input type="radio" name="gender" value="female"><label><h2>Female&emsp;</h2></label>
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>8.&nbsp;Blood group&nbsp;:&nbsp;&emsp;&emsp;&emsp;</b></h2></label>
                     <input type="text" name="blood" required="" autocomplete="off" />
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>9.&nbsp;Contact address&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></h2></label>
                     <input type="text" name="contact" required="" autocomplete="off" />
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>10.&nbsp;Mobile no.&nbsp;:&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</b></h2></label>
                     <input type="text" name="mobile" required="" autocomplete="off" />
                </div>
               <div style="padding-top: 10px">
                   <label><h2><b>11.&nbsp;Professional info.&nbsp;:&nbsp;&nbsp;</b></h2></label>
                   <textarea name="prof" form="userform"></textarea>
                   
                </div>
               <div class="col-lg-12  col-lg-push-3" style="padding-top: 20px" >
                        <input class="btn btn-default submit" id="x" type="submit" name="submit1" value="Register">
                </div>
               
           </form>
       </div>


  </body>

</html>
