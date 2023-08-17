<?php
if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $patientid = $_POST['patientid'];
    $doctorid = $_POST['doctorid'];
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    $f3 = $_POST['f3'];
    $f4 = $_POST['f4'];
    $f5 = $_POST['f5'];
    $f6 = $_POST['f6'];
    $f7 = $_POST['f7'];
    $f8 = $_POST['f8'];
    $f9 = $_POST['f9'];
    $f10 = $_POST['f10'];
    $f11 = $_POST['f11'];
    $f12 = $_POST['f12'];
    $f13 = $_POST['f13'];
    $f14 = $_POST['f14'];
    $submit = $_POST['submit'];
    $added_at = $_POST['added_at'];
    $c1 = $_POST['c1'];
    $status = $_POST['status'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    include_once('dbcon.php');

    $sql = "INSERT INTO imaging (id, patientid, doctorid, f1, f2, f3, f4, f5,
     f6, f7, f8, f9, f10, f11, f12, f13, f14, submit, added_at, c1, status, infotype, auth_id, time, date)
            VALUES ('$id', '$patientid', '$doctorid', '$f1', '$f2', '$f3',
             '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$f12', '$f13', '$f14', 
             '$submit', '$added_at', '$c1', '$status', '$infotype', '$auth_id', '$time', '$date')";

$query=mysqli_query($con,$sql);
  if ($query) {
      echo "Register successfull";
  
     
  }
  else {
      echo "Failed to insert data into the database: " . mysqli_error($con);
      }
  }
//       else {
//   //         echo "please fill all details";
//   //     }
  
// }
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
        <h2>Imagining</h2>
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
            <input type="number" name="id" id="" placeholder="enter id">
            <input type="number" name="patientid" id="" placeholder="enter patientid">
            <input type="number" name="doctorid" id="" placeholder="enter doctor id">
            <input type="text" name="f1" id="" placeholder="enter F1">
            </div>
            <div class="column">
            <input type="text" name="f2" id="" placeholder="enter f2">
            <input type="text" name="f3" id="" placeholder="enter f3">
            <input type="text" name="f4" id="" placeholder="enter f4">
            <input type="text" name="f5" id="" placeholder="enter f5">
            </div>
            <div class="column">
            <input type="text" name="f6" id="" placeholder="enter f6">
            <input type="text" name="f7" id="" placeholder="enter f7">
            <input type="text" name="f8" id="" placeholder="enter f8">
            <input type="text" name="f9" id="" placeholder="enter f9">
            </div>
            <div class="column">
            <input type="text" name="f10" id="" placeholder="enter f10">
            <input type="text" name="f11" id="" placeholder="enter f11">
            <input type="text" name="f12" id="" placeholder="enter f12">
            <input type="text" name="f13" id="" placeholder="enter f13">
            </div>
            <div class="column">
            <input type="text" name="f14" id="" placeholder="enter f14">
            <input type="text" name="submit" id="" placeholder="enter submit">
            <input type="date" name="added_at" id="" placeholder="enter added_at">
            <input type="text" name="c1" id="" placeholder="enter viewed">
            </div>
            <div class="column">
            <input type="text" name="status" id="" placeholder="enter status">
            <input type="text" name="infotype" id="" placeholder="enter information type">
            <input type="number" name="auth_id" id="" placeholder="enter Author id">
            <input type="time" name="time" id="" placeholder="enter time">
            </div>
            <div class="column">
            <input type="date" name="date" id="" placeholder="enter date">
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
