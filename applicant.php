<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Applicants</title>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php

    ?>
    <!-- <script type="text/javascript">
      var logged = false;
      function login() {
        var user = prompt("Please enter username.");
        if (user != "user")
        {
          alert("Wrong username! Redirecting...");
          location.href = 'home.html';
        }
        var pass = prompt("Please enter password.");
        if (pass != "pass")
        {
          alert("Wrong password! Redirecting...");
          location.href = 'home.html';
        }
        logged = true;
      }
    </script> -->
    <script type="text/javascript">

    </script>
    <div class="apply">
      <div class="aligncenter">
        <h2>Applicants</h2>
      </div>
      <ul>
      <?php

      $connect = new mysqli("localhost", "root", "", "cmsc127");
      if ($connect == false)
      {
        die("Error: Could not connect. " . $connect->connect_error);
      }

      $query = "SELECT surname, firstname, midname FROM lab01";
      $sql = $connect->query($query);
      if (!empty($sql))
      {
        while ($row = $sql->fetch_assoc()) {
          echo '<li>
            <a href="applicant.php?sur='. $row["surname"] .'&first='.$row["firstname"].'">' . $row["surname"] . ', ' . $row["firstname"] . ' ' . $row["midname"] . '</a>
            <br>
            <a href="applicant.php?sur='. $row["surname"] .'&first='.$row["firstname"].'&delete=true">Delete</a>
          </li>';
        }
      }
      ?>
      </ul>
      <div class="data">
          <fieldset>
            <h2 align='center'>PERSONAL DATA SHEET</h2>
          <?php
            echo "";

            // query sql
            $query = "SELECT surname, firstname, midname, extraname, birthdate, birthplace, sex, civilStatus, height, weight, bloodType, gsisID, pagibigID, philhealthID, sssID, tinID, aeID, citizenship, houseRes, stRes, subdRes, barangayRes, cityRes, provinceRes, zipRes, housePerm, stPerm, subdPerm, barangayPerm, cityPerm, provincePerm, zipPerm, telno, celno, email FROM lab01";
            $sql = $connect->query($query);

            // create variables but set them to NULL so that isset() works
            $sur = NULL;
            $first = NULL;
            $delete = NULL;

            // search
            if (isset($_GET["sur"]) && isset($_GET["first"]))
            {
              $sur = $_GET["sur"];
              $first = $_GET["first"];
            }

            // delete
            if (isset($_GET["delete"]))
            {
              $delete = true;
            }

            // iterate through array
            if (!empty($sql))
            {
              if ($delete == true) {

                // query delete
                $start = "DELETE FROM lab01 WHERE (surname = '$sur') AND (firstname = '$first')";
                $del = $connect->query($start);
                echo '<script type="text/javascript">
                  alert("Data successfully deleted.");
                  window.location.assign("applicant.php");
                </script>';
              }
              while ($row = $sql->fetch_assoc()) {
                if ($delete == true) {
                  break;
                }
                if ($sur == $row["surname"] && $first == $row["firstname"])
                {
                  $addressRes = $row['houseRes']." " .$row['stRes']." ".$row['subdRes']." ".$row['barangayRes']." ".$row['cityRes']." ".$row['provinceRes']." ".$row['zipRes'];
                  $addressPerm = $row['housePerm']." ".$row['stPerm']." ".$row['subdPerm']." ".$row['barangayPerm'] ." ".$row['cityPerm']." ".$row['provincePerm']." ".$row['zipPerm'];
                  echo '<p> SURNAME: '. $row["surname"] .'</p>
                  <p> FIRST NAME: '. $row["firstname"] .'</p>
                  <p> MIDDLE NAME: '. $row["midname"] .'</p>
                  <p> NAME EXTENSION: '. $row["extraname"] .'</p>
                  <p> BIRTHDATE: '. $row["birthdate"] .'</p>
                  <p> BIRTHPLACE: '. $row["birthplace"] .'</p>
                  <p> SEX: '. $row["sex"] .'</p>
                  <p> CIVIL STATUS: '. $row["civilStatus"] .'</p>
                  <p> HEIGHT: '. $row["height"] .'</p>
                  <p> WEIGHT: '. $row["weight"] .'</p>
                  <p> BLOODTYPE: '. $row["bloodType"] .'</p>
                  <p> GSIS ID NO.: '. $row["gsisID"] .'</p>
                  <p> PAGIBIG FUND NO.: '. $row["pagibigID"] .'</p>
                  <p> PHILHEALTH NO.: '. $row["philhealthID"] .'</p>
                  <p> SSS NO.: '. $row["sssID"] .'</p>
                  <p> TIN NO.: '. $row["tinID"] .'</p>
                  <p> AGENCY EMPLOYEE NO.: '. $row["aeID"] .'</p>
                  <p> CITIZENSHIP STATUS: '. $row["citizenship"] .'</p>
                  <p> RESIDENTIAL ADDRESS: '. $addressRes .'</p>
                  <p> PERMANENT ADDRESS: '. $addressPerm .'</p>
                  <p> TELEPHONE NO.: '. $row["telno"] .'</p>
                  <p> MOBILE NO.: '. $row["celno"] .'</p>
                  <p> EMAIL ADDRESS: '. $row["email"] .'</p>';
                }
              }
            }
          ?>
          </fieldset>
      </div>
      <div class="aligncenter">
        <button type="button" onclick="location.href = 'home.html'">Back</button>
      </div>
    </div>
  </body>
</html>

<!--
<>
-->
