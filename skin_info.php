<?php
if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $patientid = $_POST['patientid'];
    $normal = $_POST['normal'];
    $pale = $_POST['pale'];
    $flushed = $_POST['flushed'];
    $jaun = $_POST['jaun'];
    $mottled = $_POST['mottled'];
    $cyan = $_POST['cyan'];
    $hot = $_POST['hot'];
    $warm = $_POST['warm'];
    $dry = $_POST['dry'];
    $diap = $_POST['diap'];
    $cold = $_POST['cold'];
    $elastic = $_POST['elastic'];
    $decreased = $_POST['decreased'];
    $tanting = $_POST['tanting'];
    $smooth = $_POST['smooth'];
    $scaly = $_POST['scaly'];
    $other = $_POST['other'];
    $sensory = $_POST['sensory'];
    $moist = $_POST['moist'];
    $activity = $_POST['activity'];
    $mobility = $_POST['mobility'];
    $nutrition = $_POST['nutrition'];
    $total = $_POST['total'];
    $added_at = $_POST['added_at'];
    $skinnotes = $_POST['skinnotes'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $tab = $_POST['tab'];

    // if (!empty($id) && !empty($patientid) && !empty($normal) && !empty($pale) && !empty($flushed) 
    // && !empty($jaun) && !empty($mottled) && !empty($cyan) && !empty($hot) && !empty($warm) && !empty($dry) 
    // && !empty($diap) && !empty($cold) && !empty($elastic) && !empty($decreased) && !empty($tanting) 
    // && !empty($smooth) && !empty($scaly) && !empty($other) && !empty($sensory) && !empty($moist) && !empty($activity) 
    // && !empty($mobility) && !empty($nutrition) && !empty($total) && !empty($added_at) && !empty($skinnotes) 
    // && !empty($infotype) && !empty($auth_id) && !empty($time) && !empty($date) && !empty($tab)) {
        include_once('dbcon.php');
        $sql = "INSERT INTO skin_info (id,patientid,normal,pale,flushed,jaun,mottled,cyan,hot,warm,dry,
        diap,cold,elastic,decreased,tanting,smooth,scaly,other,sensory,moist,activity,mobility,nutrition,total,
        added_at,skinnotes,infotype,auth_id,time,date,tab) 
        VALUES ('$id', '$patientid', '$normal', '$pale', '$flushed', '$jaun', '$mottled', '$cyan', '$hot', '$warm', 
        '$dry', '$diap', '$cold', '$elastic', '$decreased', '$tanting', '$smooth', '$scaly', '$other', '$sensory', 
        '$moist', '$activity', '$mobility', '$nutrition', '$total', '$added_at', '$skinnotes', '$infotype', '$auth_id', 
        '$time', '$date', '$tab')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            echo "Register successful";
            // header("Location: index.php");
            exit; // Prevent further execution after redirecting
        } else {
            echo "Error occurred during database insertion";
        }
//     } else {
//         echo "Please fill in all the details";
//     }
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
        <h2>Skin info</h2>
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
            <input type="number" name="patientid" id="" placeholder="patientid" required>
            <input type="text" name="normal" id="" placeholder="normal">
            <input type="text" name="pale" id="" placeholder="pale">
            </div>
            <div class="column">
            <input type="text" name="flushed" id="" placeholder="flushed">
            <input type="text" name="jaun" id="" placeholder="jaun">
            <input type="text" name="mottled" id="" placeholder="mottled">
            <input type="text" name="cyan" id="" placeholder="cyan">
            </div>
            <div class="column">
            <input type="text" name="hot" id="" placeholder="hot">
            <input type="text" name="warm" id="" placeholder="warm">
            <input type="text" name="dry" id="" placeholder="dry">
            <input type="text" name="diap" id="" placeholder="diap">
            </div>
            <div class="column">
            <input type="text" name="cold" id="" placeholder="cold">
            <input type="text" name="elastic" id="" placeholder="elastic">
            <input type="text" name="decreased" id="" placeholder="decreased">
            <input type="text" name="tanting" id="" placeholder="tanting">
            </div>
            <div class="column">
            <input type="text" name="smooth" id="" placeholder="smooth">
            <input type="text" name="scaly" id="" placeholder="scaly">
            <input type="text" name="other" id="" placeholder="other">
            <input type="text" name="sensory" id="" placeholder="sensory">
            </div>
            <div class="column">
            <input type="text" name="moist" id="" placeholder="moist">
            <input type="text" name="activity" id="" placeholder="activity">
            <input type="text" name="mobility" id="" placeholder="mobility">
            <input type="text" name="nutrition" id="" placeholder="nutrition">
            </div>
            <div class="column">
            <input type="text" name="total" id="" placeholder="total">
            <input type="datetime-local" name="added_at" id="" placeholder="added_at">
        
            <input type="text" name="skinnotes" id="" placeholder="skinnotes">
            <input type="text" name="infotype" id="" placeholder="infotype">
            </div>
            <div class="column">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            <input type="time" name="time" id="" placeholder="time">
            <input type="date" name="date" id="" placeholder="date">
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
