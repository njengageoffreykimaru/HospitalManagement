<?php
if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $access1 = $_POST['access1'];
    $access2 = $_POST['access2'];
    $access3 = $_POST['access3'];
    $site1 = $_POST['site1'];
    $site2 = $_POST['site2'];
    $site3 = $_POST['site3'];
    $solution1 = $_POST['solution1'];
    $solution2 = $_POST['solution2'];
    $solution3 = $_POST['solution3'];
    $rate1 = $_POST['rate1'];
    $rate2 = $_POST['rate2'];
    $rate3 = $_POST['rate3'];
    $idate1 = $_POST['idate1'];
    $idate2 = $_POST['idate2'];
    $idate3 = $_POST['idate3'];
    $additional = $_POST['additional'];
    $added_at = $_POST['added_at'];
    $vascnotes = $_POST['vascnotes'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $tab = $_POST['tab'];
    

    if (!empty($id) && !empty($pid) && !empty($access1) && !empty($access2) && !empty($access3) && !empty($site1) 
    && !empty($site2) && !empty($site3) && !empty($solution1) && !empty($solution2) && !empty($solution3) && !empty($rate1) 
    && !empty($rate2) && !empty($rate3) && !empty($idate1) && !empty($idate2) && !empty($idate3) && !empty($additional) 
    && !empty($added_at) && !empty($vascnotes) && !empty($infotype) && !empty($auth_id) && !empty($time) 
    && !empty($date) && !empty($tab)) {
        include_once('dbcon.php');
        $sql = "INSERT INTO vascular_info (id,pid,access1,access2,access3,site1,site2,site3,solution1,solution2,solution3,
        rate1,rate2,rate3,idate1,idate2,idate3,additional,added_at,vascnotes,infotype,auth_id,time,date,tab) 
        VALUES ('$id','$pid', '$access1', '$access2', '$access3', '$site1', '$site2', '$site3', '$solution1', 
        '$solution2', '$solution3', '$rate1', '$rate2', '$rate3', '$idate1', '$idate2', '$idate3', '$additional', 
        '$added_at', '$vascnotes', '$infotype', '$auth_id', '$time', '$date', '$tab')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            echo "Register successful";
            // header("Location: index.php");
            exit; // Prevent further execution after redirecting
        } else {
            echo "Error occurred during database insertion";
        }
    } 
    else {
        echo "Please fill in all the details";
    }
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
        <h2>vascular info</h2>
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
            <input type="number" name="id" id="" placeholder="Enter ID" required>
            <input type="number" name="pid" id="" placeholder="Enter PID" required>
            <input type="text" name="access1" id="" placeholder="access1">
            <input type="text" name="access2" id="" placeholder="access2">
            </div>
            <div class="column">
            <input type="text" name="access3" id="" placeholder="access3">
            <input type="text" name="site1" id="" placeholder="site1">
            <input type="text" name="site2" id="" placeholder="site2">
            <input type="text" name="site3" id="" placeholder="site3">
            </div>
            <div class="column">
            <input type="text" name="solution1" id="" placeholder="solution1">
            <input type="text" name="solution2" id="" placeholder="solution2">
            <input type="text" name="solution3" id="" placeholder="solution3">
            <input type="text" name="rate1" id="" placeholder="rate1">
            </div>
            <div class="column">
            <input type="text" name="rate2" id="" placeholder="rate2">
            <input type="text" name="rate3" id="" placeholder="rate3">
            <input type="date" name="idate1" id="" placeholder="idate1">
            <input type="date" name="idate2" id="" placeholder="idate2">
            </div>
            <div class="column">
            <input type="date" name="idate3" id="" placeholder="idate3">
            <input type="text" name="additional" id="" placeholder="additional">
            <input type="date" name="added_at" id="" placeholder="added_at">
            <input type="text" name="vascnotes" id="" placeholder="vascnotes">
            </div>
            <div class="column">
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            <input type="time" name="time" id="" placeholder="time">
            <input type="date" name="date" id="" placeholder="date">
            </div>
            <div class="column">
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
