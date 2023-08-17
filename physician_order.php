<?php

if (isset($_POST['Add'])) {
    $doctorid = $_POST['doctorid'];
    $ltach = $_POST['ltach'];
    $reason = $_POST['reason'];
    $staylength = $_POST['staylentgh'];
    $eloc = $_POST['eloc'];
    $plans = $_POST['plans'];
    $allergies = $_POST['allergies'];
    $stable = $_POST['stable'];
    $gaurded = $_POST['gaurded'];
    $regular = $_POST['regular'];
    $nosalt = $_POST['nosalt'];
    $complex = $_POST['complex'];
    $brp = $_POST['brp'];
    $renal = $_POST['renal'];
    $other = $_POST['other'];
    $rest = $_POST['rest'];
    $assist = $_POST['assist'];
    $lib = $_POST['lib'];
    $vital = $_POST['vital'];
    $tele = $_POST['tele'];
    $lab = $_POST['lab'];
    $xray = $_POST['xray'];
    $therapy = $_POST['therapy'];
    $fluid = $_POST['fluid'];
    $rate = $_POST['rate'];
    $pt = $_POST['pt'];
    $ot = $_POST['ot'];
    $cyes = $_POST['cyes'];
    $cno = $_POST['cno'];
    $tyes = $_POST['tyes'];
    $tno = $_POST['tno'];
    $p_date = $_POST['date'];
    $p_status = $_POST['status'];
    $st = $_POST['st'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $p_time = $_POST['time'];

    include_once('dbcon.php');
    $sql = "INSERT INTO physician_orders (doctorid, ltach, reason, staylentgh, eloc, plans, allergies, stable,
                gaurded, regular, nosalt, complex, brp, renal, other, rest, assist, lib, vital,
                tele, lab, xray, therapy, fluid, rate, pt, ot, cyes, cno, tyes, tno, date, status, st, infotype, auth_id, time)
            VALUES ('$doctorid', '$ltach', '$reason', '$staylength', '$eloc', '$plans', '$allergies', '$stable',
                '$gaurded', '$regular', '$nosalt', '$complex', '$brp', '$renal', '$other',
                '$rest', '$assist', '$lib', '$vital', '$tele', '$lab', '$xray',
                '$therapy', '$fluid', '$rate', '$pt', '$ot', '$cyes', '$cno',
                '$tyes', '$tno', '$p_date', '$p_status', '$st', '$infotype', '$auth_id', '$p_time')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Register successful";
    } else {
        echo "Failed to insert data into the database: " . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h2>Physician order</h2>
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
             
      <input type="number" name="doctorid" id="" placeholder="enter doctorid" required>
       <input type="text" name="ltach" id="" placeholder="enter ltach">
        <input type="text" name="reason" id="" placeholder="enter reason">
         <input type="text" name="staylentgh" id="" placeholder="enter staylentgh">
            </div>
            <div class="column">
          <input type="text" name="eloc" id="" placeholder="enter 	eloc">
          <input type="text" name="plans" id="" placeholder="enter plans">
          
          <input type="text" name="allergies" id="" placeholder="enter 	allergies">
          <input type="text" name="stable" id="" placeholder="stable">
            </div>
            <div class="column">
         
          <input type="text" name="gaurded" id="" placeholder="enter gaurded">
          <input type="text" name="regular" id="" placeholder="enter regular">
          <input type="text" name="nosalt" id="" placeholder="enter nosalt">
          
          <input type="text" name="complex" id="" placeholder="enter complex">
            </div>
            <div class="column">
          <input type="text" name="brp" id="" placeholder="enter brp">
          <input type="text" name="renal" id="" placeholder="enter 	renal">
          <input type="text" name="other" id="" placeholder="enter 	other">
          <input type="text" name="rest" id="" placeholder="enter 	rest">
            </div>
            <div class="column">
          <input type="text" name="assist" id="" placeholder="enter assist">
          <input type="text" name="lib" id="" placeholder="enter lib">
          <input type="text" name="vital" id="" placeholder="enter 	vital">
          <input type="text" name="tele" id="" placeholder="enter 	tele">
            </div>
            <div class="column">
          <input type="text" name="lab" id="" placeholder="enter 	lab">
          <input type="text" name="xray" id="" placeholder="enter 	xray">
          <input type="text" name="therapy" id="" placeholder="enter 	therapy">
          <input type="text" name="fluid" id="" placeholder="enter 	fluid">
            </div>
            <div class="column">
          <input type="text" name="rate" id="" placeholder="enter 	rate">
          <input type="text" name="pt" id="" placeholder="enter pt">
          <input type="text" name="ot" id="" placeholder="enter ot">
          <input type="text" name="cyes" id="" placeholder="enter 	cyes">
            </div>
            <div class="column">
          <input type="text" name="cno" id="" placeholder="enter 	cno">
          <input type="text" name="tyes" id="" placeholder="enter tyes">
          <input type="text" name="tno" id="" placeholder="enter tno">
          <input type="date" name="date" id="" placeholder="enter date" required>
            </div>
            <div class="column">
          <input type="text" name="status" id="" placeholder="enter status">
          <input type="text" name="st" id="" placeholder="enter st">
          <input type="text" name="infotype" id="" placeholder="enter infotype">
          <input type="number" name="auth_id" id="" placeholder="enter auth_id " required>
            </div>
            <div class="column">
          <input type="datetime-local" name="time" id="" placeholder="enter time" required>
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