<?php
if (isset($_POST['Add'])) {

$pid = $_POST['pid'];
$eq1 = $_POST['eq1'];
$eq2 = $_POST['eq2'];
$eq3 = $_POST['eq3'];
$eq4 = $_POST['eq4'];
$st1 = $_POST['st1'];
$st2 = $_POST['st2'];
$st3 = $_POST['st3'];
$st4 = $_POST['st4'];
$we1 = $_POST['we1'];
$we2 = $_POST['we2'];
$we3 = $_POST['we3'];
$we4 = $_POST['we4'];
$pa1 = $_POST['pa1'];
$p12 = $_POST['p12'];
$pa3 = $_POST['pa3'];
$pa4 = $_POST['pa4'];
$sp1 = $_POST['sp1'];
$sp2 = $_POST['sp2'];
$sp3 = $_POST['sp3'];
$sp4 = $_POST['sp4'];
$con1 = $_POST['con1'];
$con2 = $_POST['con2'];
$con3 = $_POST['con3'];
$con4 = $_POST['con4'];
$fl1 = $_POST['fl1'];
$fl2 = $_POST['fl2'];
$fl3 = $_POST['fl3'];
$fl4 = $_POST['fl4'];
$am1 = $_POST['am1'];
$am2 = $_POST['am2'];
$am3 = $_POST['am3'];
$am4 = $_POST['am4'];
$ad1 = $_POST['ad1'];
$gc1 = $_POST['gc1'];
$ad2 = $_POST['ad2'];
$gc2 = $_POST['gc2'];
$ad3 = $_POST['ad3'];
$gc3 = $_POST['gc3'];
$wheel = $_POST['wheel'];
$cane = $_POST['cane'];
$walker = $_POST['walker'];
$braces = $_POST['braces'];
$cast = $_POST['cast'];
$other = $_POST['other'];
$therapist = $_POST['therapist'];
$date = $_POST['date'];
$time = $_POST['time'];
$musknotes = $_POST['musknotes'];
$infotype = $_POST['infotype'];
$auth_id = $_POST['auth_id'];
$tab = $_POST['tab'];


    // if (!empty($id) && !empty($pid) && !empty($eq1) && !empty($eq2) && !empty($eq3) 
    // && !empty($eq4) && !empty($st1) && !empty($st2) && !empty($st3) && !empty($st4) 
    // && !empty($we1) && !empty($we2) && !empty($we3) && !empty($we4) && !empty($pa1) 
    // && !empty($p12) && !empty($pa3) && !empty($pa4) && !empty($sp1) && !empty($sp2) 
    // && !empty($sp3) && !empty($sp4) && !empty($con1) && !empty($con2) && !empty($con3) 
    // && !empty($con4) && !empty($fl1) && !empty($fl2) && !empty($fl3) && !empty($fl4) 
    // && !empty($am1) && !empty($am2) && !empty($am3) && !empty($am4) && !empty($ad1) 
    // && !empty($gc1) && !empty($ad2) && !empty($gc2) && !empty($ad3) && !empty($gc3) 
    // && !empty($wheel) && !empty($cane) && !empty($walker) && !empty($braces) 
    // && !empty($cast) && !empty($other) && !empty($therapist) && !empty($date) 
    // && !empty($time) && !empty($musknotes) && !empty($infotype) && !empty($auth_id) && !empty($tab)) {
        include_once('dbcon.php');
        $sql = "INSERT INTO musculoskeletal_info (pid,eq1,eq2,eq3,eq4,st1,st2,st3,st4,
        we1,we2,we3,we4,pa1,p12,pa3,pa4,sp1,sp2,sp3,sp4,con1,con2,con3,con4,fl1,fl2,
        fl3,fl4,am1,am2,am3,am4,ad1,gc1,ad2,gc2,ad3,gc3,wheel,cane,walker,braces,cast,
        other,therapist,date,time,musknotes,infotype,auth_id,tab) 
        VALUES ( '$pid', '$eq1', '$eq2', '$eq3', '$eq4', '$st1', '$st2', '$st3', '$st4', '$we1', 
        '$we2', '$we3', '$we4', '$pa1', '$p12', '$pa3', '$pa4', '$sp1', '$sp2', '$sp3', '$sp4', '$con1', 
        '$con2', '$con3', '$con4', '$fl1', '$fl2', '$fl3', '$fl4', '$am1', '$am2', '$am3', '$am4', '$ad1', 
        '$gc1', '$ad2', '$gc2', '$ad3', '$gc3', '$wheel', '$cane', '$walker', '$braces', '$cast', '$other', 
        '$therapist', '$date', '$time', '$musknotes', '$infotype', '$auth_id', '$tab')";

$query = mysqli_query($con, $sql) or die("Failed to insert data into the database: " . mysqli_error($con));


        if ($query) {
            echo "Register successful";
            // header("Location: index.php");
            exit; // Prevent further execution after redirecting
        } else {
            echo "Error occurred during database insertion";
        }
    // } else {
    //     echo "Please fill in all the details";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Allergy</title>
    <link rel="stylesheet" href="testing.css">
    <style>
      .footer {
            text-align: center;
            padding: 20px;
            background-color: #f2f2f2;
        }
   </style>
</head>
<body>
<header>
    <div class="navbar">
    <i class="fa fa-h-square" aria-hidden="true"></i>
        <h1>Hospital Management System </h1>
        <h2><a href="Login.php">Admin</a></h2>
    </div>
    </header>
    <div class="name">
        <h2>Musculoskeletal info</h2>
    </div>
  
    <div class="container">
<div class="sidebar">
    
    <ul>
      <li><a href="accountant.php">Accountant</a></li>
      <li><a href="allergy.php">Allergy</a></li>
      <li><a href="assessment_continue.php">Assessment Continue</a></li>
      <li><a href="assessment_info.php">Assessment_info</a></li>
      <li><a href="assessment_notes.php">Assessment_notes</a></li>
      <li><a href="bankd.php">BloodBank</a></li>
      <li><a href="bed.php">Bed</a></li>
      <li><a href="cardiovascular_info.php">Cardiovascular_info</a></li>
      <li><a href="casemanagement.php">Case Management</a></li>
      <li><a href="chat.php">Chat </a></li>
      <li><a href="deparrtment.php">Department</a></li>
      <li><a href="discharge_info.php">Discharge info</a></li>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="donor.php">Donor</a></li>
      <li><a href="eent_info.PHP">Eeeint info</a></li>
      <li><a href="elopment.php">Elopment info</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="expense.php">Expense</a></li>
      <li><a href="expensecategory.php">Expense Category</a></li>
      <li><a href="fetalrisk.php">Fetal Risk</a></li>
      <li><a href="assessment_notes.php">Assessment_notes</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="genitourinary_info.php">Genitourinary_info</a></li>
      <li><a href="gastrointestinal_info.php">Gastrointestinal</a></li>
      <li><a href="group.php">Group</a></li>
      <li><a href="hospital.php">Hospital</a></li>
      <li><a href="imagining.php">Imagining</a></li>
      <li><a href="laborist.php">Laborist</a></li>
      <li><a href="labs.php">Lab</a></li>
      <li><a href="donor.php">Donor</a></li>
      <li><a href="login_attempts.php">Logins attempts</a></li>
      <li><a href="medication.php">Medication</a></li>
      <li><a href="medicine.php">Medicine</a></li>
      <li><a href="medicinecategory.php">Medicinecategory</a></li>
      <li><a href="medicinedata.php">Medicinedata</a></li>
      <li><a href="neurologic_info.php">Neurologic_info</a></li>
      <li><a href="notes_info.php">Notes info</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="patients.php">Patient</a></li>
      <li><a href="payment.php">Payment</a></li>
      <li><a href="paymentcategory.php">Paymentcategory</a></li>
      <li><a href="pharmacist.php">Pharmacy</a></li>
      <li><a href="physician_order.php">Physician_order</a></li>
      <li><a href="problems_info.php">Problem info</a></li>
      <li><a href="Pulmonary_info.php">Pulmonary_info</a></li>
      <li><a href="readiness.php">Readiness</a></li>
      <li><a href="report.php">Report</a></li>
      <li><a href="resipotory.php">Respiratory</a></li>
      <li><a href="resuscitation.php">Resuscitation</a></li>
      <li><a href="setting.php">Setting</a></li>
      <li><a href="therapynotes.php">Therapy notes</a></li>
      <li><a href="user_groups.php">Users groups</a></li>
      <li><a href="revised_flowchart.php">Revised Flowchart</a></li>
      <li><a href="revised_physician.php">Revised Physcian</a></li>
      
      <li><a href="skinassessment.php">Skin Assessment</a></li>
      <li><a href="skin_info.php">Skin info</a></li>
      <li><a href="user.php">User</a></li>
      <li><a href="vitalsings.php">Vital signs</a></li>
      <li><a href="wounddescription_info.php">Wounddescription_info</a></li>
      <li><a href="painassessment.php">Pain assessment</a></li>
      <li><a href="musculoskeletal_info.php">Musculoskeletal_info</a></li>
      <li><a href="allotedbed.php">Alloted Bed</a></li>
      <li><a href="revised_respiratory.php">Revised Respiratory</a></li>
    </ul>
  </div>
    <div class="form">
        <form action="" method="post">
            
            <div class="column">
            <input type="number" name="pid" id="" placeholder="pid">
            <input type="text" name="eq1" id="" placeholder="eq1">
            <input type="text" name="eq2" id="" placeholder="eq2">
            <input type="text" name="eq3" id="" placeholder="eq3">
            </div>
            <div class="column">
            <input type="text" name="eq4" id="" placeholder="eq4">
            <input type="text" name="st1" id="" placeholder="st1">
            <input type="text" name="st2" id="" placeholder="st2">
            <input type="text" name="st3" id="" placeholder="st3">
            </div>
            <div class="column">
            <input type="text" name="st4" id="" placeholder="st4">
            <input type="text" name="we1" id="" placeholder="we1">
            <input type="text" name="we2" id="" placeholder="we2">
            <input type="text" name="we3" id="" placeholder="we3">
            </div>
            <div class="column">
            <input type="text" name="we4" id="" placeholder="we4">
            <input type="text" name="pa1" id="" placeholder="pa1">
            <input type="text" name="p12" id="" placeholder="p12">
            <input type="text" name="pa3" id="" placeholder="pa3">
            </div>
            <div class="column">
            <input type="text" name="pa4" id="" placeholder="pa4">
            <input type="text" name="sp1" id="" placeholder="sp1">
            <input type="text" name="sp2" id="" placeholder="sp2">
            <input type="text" name="sp3" id="" placeholder="sp3">
            </div>
            <div class="column">
            <input type="text" name="sp4" id="" placeholder="sp4">
            <input type="text" name="con1" id="" placeholder="con1">
            <input type="text" name="con2" id="" placeholder="con2">
            <input type="text" name="con3" id="" placeholder="con3">
            </div>
            <div class="column">
            <input type="text" name="con4" id="" placeholder="con4">
            <input type="text" name="fl1" id="" placeholder="fl1">
            <input type="text" name="fl2" id="" placeholder="fl2">
            <input type="text" name="fl3" id="" placeholder="fl3">
            </div>
            <div class="column">
            <input type="text" name="fl4" id="" placeholder="fl4">
            <input type="text" name="am1" id="" placeholder="am1">
            <input type="text" name="am2" id="" placeholder="am2">
            <input type="text" name="am3" id="" placeholder="am3">
            </div>
            <div class="column">
            <input type="text" name="am4" id="" placeholder="am4">
            <input type="text" name="ad1" id="" placeholder="ad1">
            <input type="text" name="gc1" id="" placeholder="gc1">
            <input type="text" name="ad2" id="" placeholder="ad2">
            </div>
            <div class="column">
            <input type="text" name="gc2" id="" placeholder="gc2">
            <input type="text" name="ad3" id="" placeholder="ad3">
            <input type="text" name="gc3" id="" placeholder="gc3">
            <input type="text" name="wheel" id="" placeholder="wheel">
            </div>
            <div class="column">
            <input type="text" name="cane" id="" placeholder="cane">
            <input type="text" name="walker" id="" placeholder="walker">
            <input type="text" name="braces" id="" placeholder="braces">
            <input type="text" name="cast" id="" placeholder="cast">
            </div>
            <div class="column">
            <input type="text" name="other" id="" placeholder="other">
            <input type="text" name="therapist" id="" placeholder="therapist">
            <input type="text" name="date" id="" placeholder="date">
            <input type="text" name="time" id="" placeholder="time">
            </div>
            <div class="column">
            
            <input type="text" name="musknotes" id="" placeholder="musknotes">
            <!-- <textarea name="musknotes" id="" placeholder="musknotes"></textarea> -->
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            <input type="text" name="tab" id="" placeholder="tab">
            </div>
            
            <button type="submit" name="Add" id="add">Submit</button>
            <button type="submit" name="exit" id="exit" formaction="logout1.php">Exit</button>
        </form>
    </div>
    </div>
<div class="footer">
    <p>Contact: info@example.com | Phone: (123) 456-7890</p>
    <p>&copy; 2023 Hospital Management System. All rights reserved.</p>
</div> 
</body>
</html>
