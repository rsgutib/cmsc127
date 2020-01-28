
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
  if (isset($_POST['apply'])) {
    $connect = new mysqli("localhost", "root", "", "cmsc127");
    if ($connect == false)
    {
      die("Error: Could not connect. " . $connect->connect_error);
    }

    $apply = $_POST['apply'];

    // part 1
    $csid = $_POST['csid'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $extraname = $_POST['extraname'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bloodtype = $_POST['bloodtype'];
    $gsisid = $_POST['gsisid'];
    $pagibigid = $_POST['pagibigid'];
    $philhealthid = $_POST['philhealthid'];
    $sssid = $_POST['sssid'];
    $tinid = $_POST['tinid'];
    $aeid = $_POST['aeid'];
    $citizen = $_POST['citizenship'];
    $houseres = $_POST['houseres'];
    $stres = $_POST['stres'];
    $subdres = $_POST['subdres'];
    $barangayres = $_POST['barangayres'];
    $cityres = $_POST['cityres'];
    $provinceres = $_POST['provinceres'];
    $zipres = $_POST['zipres'];
    $houseperm = $_POST['houseperm'];
    $stperm = $_POST['stperm'];
    $subdperm = $_POST['subdperm'];
    $barangayperm = $_POST['barangayperm'];
    $cityperm = $_POST['cityperm'];
    $provinceperm = $_POST['provinceperm'];
    $zipperm = $_POST['zipperm'];
    $telno = $_POST['telno'];
    $celno = $_POST['celno'];
    $email = $_POST['email'];

    // part 2
    $surspouse = $_POST['surspouse'];
    $firstspouse = $_POST['firstspouse'];
    $midspouse = $_POST['midspouse'];
    $extraspouse = $_POST['extraspouse'];
    $occspouse = $_POST['occspouse'];
    $employer = $_POST['employer'];
    $busaddress = $_POST['busaddress'];
    $bustelno = $_POST['bustelno'];
    $children1 = $_POST['children1'];
    $birth1 = $_POST['birth1'];
    $children2 = $_POST['children2'];
    $birth2 = $_POST['birth2'];
    $children3 = $_POST['children3'];
    $birth3 = $_POST['birth3'];
    $children4 = $_POST['children4'];
    $birth4 = $_POST['birth4'];
    $children5 = $_POST['children5'];
    $birth5 = $_POST['birth5'];
    $children6 = $_POST['children6'];
    $birth6 = $_POST['birth6'];
    $children7 = $_POST['children7'];
    $birth7 = $_POST['birth7'];
    $children8 = $_POST['children8'];
    $birth8 = $_POST['birth8'];
    $children9 = $_POST['children9'];
    $birth9 = $_POST['birth9'];
    $children10 = $_POST['children10'];
    $birth10 = $_POST['birth10'];
    $children11 = $_POST['children11'];
    $birth11 = $_POST['birth11'];
    $children12 = $_POST['children12'];
    $birth12 = $_POST['birth12'];
    $surdad = $_POST['surdad'];
    $firstdad = $_POST['firstdad'];
    $middad = $_POST['middad'];
    $extradad = $_POST['extradad'];
    $maidenmom = $_POST['maidenmom'];
    $surmom = $_POST['surmom'];
    $firstmom = $_POST['firstmom'];
    $midmom = $_POST['midmom'];
    $extramom = $_POST['extramom'];

    // part 3
    $elemname = $_POST['elemname'];
    $elembasic = $_POST['elembasic'];
    $elemfrom = $_POST['elemfrom'];
    $elemto = $_POST['elemto'];
    $elemhighest = $_POST['elemhighest'];
    $elemgrad = $_POST['elemgrad'];
    $elemaward = $_POST['elemaward'];
    $secname = $_POST['secname'];
    $secbasic = $_POST['secbasic'];
    $secfrom = $_POST['secfrom'];
    $secto = $_POST['secto'];
    $sechighest = $_POST['sechighest'];
    $secgrad = $_POST['secgrad'];
    $secaward = $_POST['secaward'];
    $vocname = $_POST['vocname'];
    $vocbasic = $_POST['vocbasic'];
    $vocfrom = $_POST['vocfrom'];
    $vocto = $_POST['vocto'];
    $vochighest = $_POST['vochighest'];
    $vocgrad = $_POST['vocgrad'];
    $vocaward = $_POST['vocaward'];
    $colname = $_POST['colname'];
    $colbasic = $_POST['colbasic'];
    $colfrom = $_POST['colfrom'];
    $colto = $_POST['colto'];
    $colhighest = $_POST['colhighest'];
    $colgrad = $_POST['colgrad'];
    $colaward = $_POST['colaward'];
    $gradname = $_POST['gradname'];
    $gradbasic = $_POST['gradbasic'];
    $gradfrom = $_POST['gradfrom'];
    $gradto = $_POST['gradto'];
    $gradhighest = $_POST['gradhighest'];
    $gradgrad = $_POST['gradgrad'];
    $gradaward = $_POST['gradaward'];
    $sig = $_POST['sig'];
    $date3 = $_POST['date3'];

    if (isset($apply) && !empty($surname) && !empty($firstname)
      && !empty($midname) && !empty($birthdate) &&
      !empty($birthplace) && !empty($civilstatus) && !empty($citizen)) {

      if ($civilstatus == "Others") {
        $civilstatus = $_POST['civilstatusOther'];
      }

      if ($citizen != "Filipino") {
        $citizen = $_POST['citizenship'] . " " . $_POST['dualmean'] . " " . $_POST['dualchoice'];
      } else {
        $citizen = $_POST['citizenship'];
      }

      $query = "INSERT INTO lab01 (csID, surname, firstname, midname,
            extraname, birthdate, birthplace, sex, civilStatus,
            height, weight, bloodType, gsisID, pagibigID, philhealthID,
            sssID, tinID, aeID, citizenship, houseRes, stRes, subdRes,
            barangayRes, cityRes, provinceRes, zipRes, housePerm,
            stPerm, subdPerm, barangayPerm, cityPerm, provincePerm,
            zipPerm, telno, celno, email, surSpouse, firstSpouse,
            midSpouse, extraSpouse, occSpouse, employer, busAddress,
            busTelNo, children1, birth1, children2, birth2, children3,
            birth3, children4, birth4, children5, birth5, children6,
            birth6, children7, birth7, children8, birth8, children9,
            birth9, children10, birth10, children11, birth11, children12,
            birth12, surDad, firstDad, midDad, extraDad,
            maidenMom, surMom, firstMom, midMom, extraMom,
            elemName, elemBasic, elemFrom, elemTo, elemHighest, elemGrad, elemAward,
            secName, secBasic, secFrom, secTo, secHighest, secGrad, secAward,
            vocName, vocBasic, vocFrom, vocTo, vocHighest, vocGrad, vocAward,
            colName, colBasic, colFrom, colTo, colHighest, colGrad, colAward,
            gradName, gradBasic, gradFrom, gradTo, gradHighest, gradGrad, gradAward,
            signature, finalDate)
            VALUES ('$csid', '$surname', '$firstname', '$midname', '$extraname',
            '$birthdate', '$birthplace', '$gender', '$civilstatus', '$height',
            '$weight', '$bloodtype', '$gsisid', '$pagibigid', '$philhealthid',
            '$sssid', '$tinid', '$aeid', '$citizen', '$houseres', '$stres',
            '$subdres', '$barangayres', '$cityres', '$provinceres', '$zipres',
            '$houseperm', '$stperm', '$subdperm', '$barangayperm', '$cityperm',
            '$provinceperm', '$zipperm', '$telno', '$celno', '$email',
            '$surspouse', '$firstspouse', '$midspouse',
            '$extraspouse', '$occspouse', '$employer',
            '$busaddress', '$bustelno', '$children1', '$birth1',
            '$children2', '$birth2', '$children3', '$birth3',
            '$children4', '$birth4', '$children5', '$birth5',
            '$children6', '$birth6', '$children7', '$birth7',
            '$children8', '$birth8', '$children9', '$birth9',
            '$children10', '$birth10', '$children11', '$birth11',
            '$children12', '$birth12', '$surdad', '$firstdad',
            '$middad', '$extradad', '$maidenmom', '$surmom',
            '$firstmom', '$midmom', '$extramom',
            '$elemname', '$elembasic', '$elemfrom', '$elemto', '$elemhighest', '$elemgrad', '$elemaward',
            '$secname', '$secbasic', '$secfrom', '$secto', '$sechighest', '$secgrad', '$secaward',
            '$vocname', '$vocbasic', '$vocfrom', '$vocto', '$vochighest', '$vocgrad', '$vocaward',
            '$colname', '$colbasic', '$colfrom', '$colto', '$colhighest', '$colgrad', '$colaward',
            '$gradname', '$gradbasic', '$gradfrom', '$gradto', '$gradhighest', '$gradgrad', '$gradaward',
            '$sig', '$date3')";

      $insert = $connect->query($query);
      if ($insert === true) {
        echo '<script type="text/javascript">
            alert("Data successfully sent.");
            location.href = \'apply.html\';
          </script>';
      } else {
        echo '<script type="text/javascript">
            alert("ERROR: Could not execute query. '. $connect->error .'");
            location.href = \'apply.html\';
          </script>';
        }
    } else {
      echo '<script type="text/javascript">
        alert("Fields not entered: Surname, First name, Middle name, Birthdate, Birthplace, Civil Status, Citizenship");
        location.href = \'apply.html\';
      </script>';
    }
  }
?>
