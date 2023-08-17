<?php

if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $doctorid = $_POST['doctorid'];
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $t5 = $_POST['t5'];
    $t6 = $_POST['t6'];
    $t7 = $_POST['t7'];
    $t8 = $_POST['t8'];
    $t9 = $_POST['t9'];
    $t10 = $_POST['t10'];
    $t11 = $_POST['t11'];
    $t12 = $_POST['t12'];
    $t13 = $_POST['t13'];
    $t14 = $_POST['t14'];
    $t15 = $_POST['t15'];
    $t16 = $_POST['t16'];
    $t17 = $_POST['t17'];
    $t18 = $_POST['t18'];
    $ch1 = $_POST['ch1'];
    $ch2 = $_POST['ch2'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $ch5 = $_POST['ch5'];
    $ch6 = $_POST['ch6'];
    $ch7 = $_POST['ch7'];
    $ch8 = $_POST['ch8'];
    $ch9 = $_POST['ch9'];
    $ch10 = $_POST['ch10'];
    $ch11 = $_POST['ch11'];
    $ch12 = $_POST['ch12'];
    $ch13 = $_POST['ch13'];
    $ch14 = $_POST['ch14'];
    $ch15 = $_POST['ch15'];
    $ch16 = $_POST['ch16'];
    $ch17 = $_POST['ch17'];
    $ch18 = $_POST['ch18'];
    $ch19 = $_POST['ch19'];
    $ch20 = $_POST['ch20'];
    $ch21 = $_POST['ch21'];
    $ch22 = $_POST['ch22'];
    $ch23 = $_POST['ch23'];
    $ch24 = $_POST['ch24'];
    $ch25 = $_POST['ch25'];
    $ch26 = $_POST['ch26'];
    $ch27 = $_POST['ch27'];
    $ch28 = $_POST['ch28'];
    $ch29 = $_POST['ch29'];
    $ch30 = $_POST['ch30'];
    $ch31 = $_POST['ch31'];
    $ch32 = $_POST['ch32'];
    $ch33 = $_POST['ch33'];
    $ch34 = $_POST['ch34'];
    $ch35 = $_POST['ch35'];
    $submit = $_POST['submit'];
    $added_at = $_POST['added_at'];

    // if (
    //     $id != "" && $pid != "" && $doctorid != "" && $t1 != "" && $t2 != "" &&
    //     $t3 != "" && $t4 != "" && $t5 != "" && $t6 != "" && $t7 != "" &&
    //     $t8 != "" && $t9 != "" && $t10 != "" && $t11 != "" && $t12 != "" &&
    //     $t13 != "" && $t14 != "" && $t15 != "" && $t16 != "" && $t17 != "" &&
    //     $t18 != "" && $ch1 != "" && $ch2 != "" && $ch3 != "" && $ch4 != "" &&
    //     $ch5 != "" && $ch6 != "" && $ch7 != "" && $ch8 != "" && $ch9 != "" &&
    //     $ch10 != "" && $ch11 != "" && $ch12 != "" && $ch13 != "" && $ch14 != "" &&
    //     $ch15 != "" && $ch16 != "" && $ch17 != "" && $ch18 != "" && $ch19 != "" &&
    //     $ch20 != "" && $ch21 != "" && $ch22 != "" && $ch23 != "" && $ch24 != "" &&
    //     $ch25 != "" && $ch26 != "" && $ch27 != "" && $ch28 != "" && $ch29 != "" &&
    //     $ch30 != "" && $ch31 != "" && $ch32 != "" && $ch33 != "" && $ch34 != "" &&
    //     $ch35 != "" && $submit != "" && $added_at != ""
    // ) {
        include_once('dbcon.php');
        $sql = "INSERT INTO revised_physician (id, pid, doctorid, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12, t13, t14, t15, t16, t17, t18, ch1, ch2, ch3, ch4, ch5, ch6, ch7, ch8, ch9, ch10, ch11, ch12, ch13, ch14, ch15, ch16, ch17, ch18, ch19, ch20, ch21, ch22, ch23, ch24, ch25, ch26, ch27, ch28, ch29, ch30, ch31, ch32, ch33, ch34, ch35, submit, added_at)
                VALUES ('$id', '$pid', '$doctorid', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12', '$t13', '$t14', '$t15', '$t16', '$t17', '$t18', '$ch1', '$ch2', '$ch3', '$ch4', '$ch5', '$ch6', '$ch7', '$ch8', '$ch9', '$ch10', '$ch11', '$ch12', '$ch13', '$ch14', '$ch15', '$ch16', '$ch17', '$ch18', '$ch19', '$ch20', '$ch21', '$ch22', '$ch23', '$ch24', '$ch25', '$ch26', '$ch27', '$ch28', '$ch29', '$ch30', '$ch31', '$ch32', '$ch33', '$ch34', '$ch35', '$submit', '$added_at')";

        $query = mysqli_query($con, $sql) or die("Data insertion failed");

        if ($query) {
            echo "Register successful";
        }
//     } else {
//         echo "Please fill in all details";
//     }
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
        <h2>Revised Physician</h2>
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
            <input type="number" name="id" id="" placeholder="Enter ID">
            <input type="number" name="pid" id="" placeholder="Enter PID">
            <input type="number" name="doctorid" id="" placeholder="Enter Doctor ID">
            <input type="text" name="t1" id="" placeholder="Enter T1">
            </div>
            <div class="column">
            <input type="text" name="t2" id="" placeholder="Enter T2">
            <input type="text" name="t3" id="" placeholder="Enter T3">
            <input type="text" name="t4" id="" placeholder="Enter T4">
            <input type="text" name="t5" id="" placeholder="Enter T5">
            </div>
            <div class="column">
            <input type="text" name="t6" id="" placeholder="Enter T6">
            <input type="text" name="t7" id="" placeholder="Enter T7">
            <input type="text" name="t8" id="" placeholder="Enter T8">
            <input type="text" name="t9" id="" placeholder="Enter T9">
            </div>
            <div class="column">
            <input type="text" name="t10" id="" placeholder="Enter T10">
            <input type="text" name="t11" id="" placeholder="Enter T11">
            <input type="text" name="t12" id="" placeholder="Enter T12">
            <input type="text" name="t13" id="" placeholder="Enter T13">
            </div>
            <div class="column">
            <input type="text" name="t14" id="" placeholder="Enter T14">
            <input type="text" name="t15" id="" placeholder="Enter T15">
            <input type="text" name="t16" id="" placeholder="Enter T16">
            <input type="text" name="t17" id="" placeholder="Enter T17">
            </div>
            <div class="column">
            <input type="text" name="t18" id="" placeholder="Enter T18">
            <input type="text" name="ch1" id="" placeholder="Enter CH1">
            <input type="text" name="ch2" id="" placeholder="Enter CH2">
            <input type="text" name="ch3" id="" placeholder="Enter CH3">
            </div>
            <div class="column">
            <input type="text" name="ch4" id="" placeholder="Enter CH4">
            <input type="text" name="ch5" id="" placeholder="Enter CH5">
            <input type="text" name="ch6" id="" placeholder="Enter CH6">
            <input type="text" name="ch7" id="" placeholder="Enter CH7">
            </div>
            <div class="column">
            <input type="text" name="ch8" id="" placeholder="Enter CH8">
            <input type="text" name="ch9" id="" placeholder="Enter CH9">
            <input type="text" name="ch10" id="" placeholder="Enter CH10">
            <input type="text" name="ch11" id="" placeholder="Enter CH11">
            </div>
            <div class="column">
            <input type="text" name="ch12" id="" placeholder="Enter CH12">
            <input type="text" name="ch13" id="" placeholder="Enter CH13">
            <input type="text" name="ch14" id="" placeholder="Enter CH14">
            <input type="text" name="ch15" id="" placeholder="Enter CH15">
            </div>
            <div class="column">
            <input type="text" name="ch16" id="" placeholder="Enter CH16">
            <input type="text" name="ch17" id="" placeholder="Enter CH17">
            <input type="text" name="ch18" id="" placeholder="Enter CH18">
            <input type="text" name="ch19" id="" placeholder="Enter CH19">
            </div>
            <div class="column">
            <input type="text" name="ch20" id="" placeholder="Enter CH20">
            <input type="text" name="ch21" id="" placeholder="Enter CH21">
            <input type="text" name="ch22" id="" placeholder="Enter CH22">
            <input type="text" name="ch23" id="" placeholder="Enter CH23">
            </div>
            <div class="column">
            <input type="text" name="ch24" id="" placeholder="Enter CH24">
            <input type="text" name="ch25" id="" placeholder="Enter CH25">
            <input type="text" name="ch26" id="" placeholder="Enter CH26">
            <input type="text" name="ch27" id="" placeholder="Enter CH27">
            </div>
            <div class="column">
            <input type="text" name="ch28" id="" placeholder="Enter CH28">
            <input type="text" name="ch29" id="" placeholder="Enter CH29">
            <input type="text" name="ch30" id="" placeholder="Enter CH30">
            <input type="text" name="ch31" id="" placeholder="Enter CH31">
            </div>
            <div class="column">
            <input type="text" name="ch32" id="" placeholder="Enter CH32">
            <input type="text" name="ch33" id="" placeholder="Enter CH33">
            <input type="text" name="ch34" id="" placeholder="Enter CH34">
            <input type="text" name="ch35" id="" placeholder="Enter CH35">
            </div>
            <div class="column">
            <input type="text" name="submit" id="" placeholder="Enter Submit">
            <input type="datetime-local" name="added_at" id="" placeholder="Enter Added At">
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
