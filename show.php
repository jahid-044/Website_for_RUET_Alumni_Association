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
      
      <div align="center" style="font-family: 'Arvo', serif; padding-top: 70px">
            <h1 style="font-size: 300%">List of members of RUET Alumni Association</h1>
          <form name="f1" method="post" style="padding-top: 10px">
              <input type="text" name="y1" placeholder="Search by graduation year" required="" autocomplete="off" />&emsp;
              <input class="btn btn-primary submit" type="submit" name="s1" value="Search">
          </form>
          <br><br>
      </div>
      <div style="font-family: 'Arvo', serif; padding-left:100px; padding-right:100px; font-size: 150%; color:black">
               <?php
                      $title=$_GET["title"];
                      if(isset($_POST["s1"]))
                      {
                
                            $res = mysqli_query($link,"select * from member where Status='yes' and Year_of_graduation='$_POST[y1]' and Department='$title'" );
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "Year of graduation"; echo "</th>";
                            echo "<th>"; echo "Name"; echo "</th>";
                            echo "<th>"; echo "Department"; echo "</th>";
                            echo "<th>"; echo "Professional info."; echo "</th>";
                            echo "<th>"; echo "Contact"; echo "</th>";
                            echo "</tr>";

                            while ($row= mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>"; echo $row["Year_of_graduation"]; echo "</td>";
                                echo "<td>"; echo $row["Name"]; echo "</td>";
                                echo "<td>"; echo $row["Department"]; echo "</td>";
                                echo "<td>"; echo $row["Professional_info"]; echo "</td>";
                                echo "<td>"; echo $row["Email"]; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                      }
                      else
                      {
                            $title=$_GET["title"];
                            $res = mysqli_query($link,"select * from member where status='yes' and Department='$title'");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "Year of graduation"; echo "</th>";
                            echo "<th>"; echo "Name"; echo "</th>";
                            echo "<th>"; echo "Department"; echo "</th>";
                            echo "<th>"; echo "Professional info."; echo "</th>";
                            echo "<th>"; echo "Contact"; echo "</th>";
                            echo "</tr>";

                            while ($row= mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>"; echo $row["Year_of_graduation"]; echo "</td>";
                                echo "<td>"; echo $row["Name"]; echo "</td>";
                                echo "<td>"; echo $row["Department"]; echo "</td>";
                                echo "<td>"; echo $row["Professional_info"]; echo "</td>";
                                echo "<td>"; echo $row["Email"]; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            
                      }
                        
                        ?>

      </div>      

  </body>

</html>
