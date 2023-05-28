<?php
session_start();
$con = new mysqli("localhost", "root", "", "hms");

$_SESSION['Doctorspecialization']=$_POST['Doctorspecialization'];
$_SESSION['doctor']=$_POST['doctor'];
$_SESSION['fees']=$_POST['fees'];



$did=$_POST['doctor'];
$stmt=$con->prepare("select * from doctors where id=?");
$stmt->bind_param("s",$did);
$stmt->execute();
$result=$stmt->get_result();
while($row=$result->fetch_assoc()){
  $_SESSION['doctorName']=$row['doctorName'];
}

$uid=$_SESSION['id'];
$stmt1=$con->prepare("select * from users where id=?");
$stmt1->bind_param("s",$uid);
$stmt1->execute();
$result1=$stmt1->get_result();
while($row=$result1->fetch_assoc()){
  $_SESSION['userName']=$row['fullName'];
  $_SESSION['userMail']=$row['email'];
}

?>
<!DOCTYPE html> 
<html> 
  <head>
    <title>PHP MySQL Appointment</title>
    <meta charset="utf-8">
    <script src="3b-select.js"></script>
    <link rel="stylesheet" href="3c-select.css">
  </head>
  <body>
    <?php
    // (A) LOAD LIBRARY + INIT
    require "2-lib-appo.php";
    $start = strtotime("+".APPO_MIN." day");
    $end = strtotime("+".APPO_MAX." day");
    $booked = $_APPO->get($_POST["doctor"],date("Y-m-d", $start), date("Y-m-d", $end));
    ?>

    <!-- (B) SELECT APPOINTMENT DATE/SLOT -->
    <table id="select">
      <!-- (B1) FIRST ROW : HEADER CELLS -->
      <tr>
        <th></th>
        <?php foreach (APPO_SLOTS as $slot) { echo "<th>$slot</th>"; } ?>
      </tr>

      <!-- (B2) FOLLOWING ROWS : DAYS -->
      <?php
      for ($unix=$start; $unix<=$end; $unix+=86400) {
        $thisDate = date("Y-m-d", $unix);
        echo "<tr><th>$thisDate</th>";
        foreach (APPO_SLOTS as $slot) {
          if (isset($booked[$thisDate][$slot]["1"]["1"])) {
            echo "<td class='booked'>Booked</td>";
          } else {
            echo "<td onclick=\"select(this, '$thisDate', '$slot')\"></td>";
          }
        }
        echo "</tr>";
      }
      ?>
    </table>

    <!-- (C) CONFIRM -->
    <form id="confirm" method="post" action="4-book.php">
      <!-- DUMMY USER, FIXED TO 1 FOR DEMO -->
      <input type="hidden" name="user" value="1">
      <input type="text" id="cdate" name="date" readonly placeholder="Select a time slot above">
      <input type="text" id="cslot" name="slot" readonly>
      <input type="submit" id="cgo" value="Book" disabled>
    </form>

  </body>
</html>