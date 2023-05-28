
<?php
include('sendMail.js');

class Appointment
{
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = "";
  function __construct() 
  {
    $this->pdo = new PDO(
      "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
      DB_USER,
      DB_PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct()
  {
    if ($this->stmt !== null) {
      $this->stmt = null;
    }
    if ($this->pdo !== null) {
      $this->pdo = null;
    }
  }

  // (C) HELPER FUNCTION - EXECUTE SQL QUERY
  function query($sql, $data = null)
  {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  // (D) GET APPOINTMENTS IN DATE RANGE
  function get($doctorid,$from, $to)
  {
    $this->query(
      "SELECT * FROM `appointment` WHERE `doctorId`=? AND `appointmentDate` BETWEEN ? AND ?",
      [$doctorid,$from, $to]
    );
    $res = [];
    while ($r = $this->stmt->fetch()) {
      $res[$r["appointmentDate"]][$r["appointmentTime"]][$r["userStatus"]][$r["doctorStatus"]] = $r["id"];
    }
    return $res;
  }

  // (E) SAVE APPOINTMENT
  function save($date, $slot, $specilization,$doctorid,$userid,$fees)
  {
    $con = mysqli_connect("localhost", "root", "", "hms");

    // (E1) CHECK SELECTED DATE
    $min = strtotime("+" . APPO_MIN . " day");
    $max = strtotime("+" . APPO_MAX . " day");
    $unix = strtotime($date);
    if ($unix < $min || $unix < $max) {
      $this->error = "Date must be between " . date("Y-m-d", $min) . " and " . date("Y-m-d", $max);
    }

    // (E2) CHECK PREVIOUS APPOINTMENT
    // $this->query(
    //   "SELECT * FROM `appointment` WHERE `appointmentDate`=? AND `appointmentTime`=? AND `userStatus`=1 OR `doctorStatu`=1 ",
    //   [$date, $slot]
    // );
    // if (is_array($this->stmt->fetch())) {
    //   $this->error = "$date $slot is already booked";
    //   return false;
    // }

    // (E3) CREATE ENTRY
    $appdate = $date;
    $time = $slot;
    $userstatus = 1;
    $docstatus = 1;
    $email=$_SESSION['doctorName'];
    $dName=$_SESSION['userName'];
    $uName=$_SESSION['userMail'];
    $query = mysqli_query($con, "insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
    if ($query) {
      echo "<script>alert('Your appointment successfully booked');</script>";
      echo "<script>sendEmail($email,$dName,$uName,$appdate,$time);</script>";
      header("Location:appointment-history.php");
    }
    return true;
  }
}

// (F) APPOINTMENT DATES & SLOTS - CHANGE TO YOUR OWN!
define("APPO_SLOTS", ["11:00AM-12:00PM", "12:00PM-1:00PM", "2:30PM-3:30PM", "3:30PM-4:30PM", "4:30PM-5:30PM", "5:30PM-6:30PM"]);
define("APPO_MIN", 1); // next day
define("APPO_MAX", 7); // next week

// (G) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "hms");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (H) NEW APPOINTMENT OBJECT 
$_APPO = new Appointment();