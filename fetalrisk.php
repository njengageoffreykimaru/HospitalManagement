<?php
if (isset($_POST['Add'])) {
    $pid = $_POST['pid'];
    $ps1 = $_POST['ps1'];
    $ps2 = $_POST['ps2'];
    $walker = $_POST['walker'];
    $furniture = $_POST['furniture'];
    $ps3 = $_POST['ps3'];
    $ps4 = $_POST['ps4'];
    $chair = $_POST['chair'];
    $weak = $_POST['weak'];
    $impaired = $_POST['impaired'];
    $ps5 = $_POST['ps5'];
    $ability = $_POST['ability'];
    $ps6 = $_POST['ps6'];
    $ps7 = $_POST['ps7'];
    $assist = $_POST['assist'];
    $created_at = $_POST['created_at'];
    $fallnotes = $_POST['fallnotes'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['n_time'];
    $date = $_POST['date'];
    $tab = $_POST['tab'];

    // Check if all required fields are filled
    // if (
    //     $pid !== "" && $ps1 !== "" && $ps2 !== "" && $walker !== "" && $furniture !== "" && $ps3 !== "" &&
    //     $ps4 !== "" && $chair !== "" && $weak !== "" && $impaired !== "" && $ps5 !== "" && $ability !== "" &&
    //     $ps6 !== "" && $ps7 !== "" && $assist !== "" && $created_at !== "" && $fallnotes !== "" &&
    //     $infotype !== "" && $auth_id !== "" && $time !== "" && $date !== "" && $tab !== ""
    // ) {
        include_once('dbcon.php');

        $sql = "INSERT INTO fetalrisk(pid, ps1, ps2, walker, furniture, ps3, ps4, chair, weak, impaired, ps5,
        ability, ps6, ps7, assist, created_at, fallnotes, infotype, auth_id,n_time, date, tab)
        VALUES ('$pid', '$ps1', '$ps2', '$walker', '$furniture', '$ps3', '$ps4', '$chair', '$weak', '$impaired', '$ps5',
        '$ability', '$ps6', '$ps7', '$assist', '$created_at', '$fallnotes', '$infotype', '$auth_id', '$time', '$date', '$tab')";
        
        $query = mysqli_query($con, $sql) or die("Error occurred while inserting data");
        if ($query) {
            echo "Register successful";
        } else {
            echo "Failed to insert data into the database: " . mysqli_error($con);
        }
    // } else {
    //     echo "Please fill all details";
    // }
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
        <h2>Fetalrisk</h2>
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
            
            <!-- <input type="number" name="id" id="" placeholder="enter id"> -->
            <div class="column">
            <input type="number" name="pid" id="" placeholder="pid">
            <input type="text" name="ps1" id="" placeholder="ps1">
            <input type="text" name="ps2" id="" placeholder="ps2">
            <input type="text" name="walker" id="" placeholder="walker">
            </div>
            <div class="column">
            <input type="text" name="furniture" id="" placeholder="furniture">
            <input type="text" name="ps3" id="" placeholder="ps3">
            <input type="text" name="ps4" id="" placeholder="ps4">
            <input type="text" name="chair" id="" placeholder="chair">
            </div>
            <div class="column">
            <input type="text" name="weak" id="" placeholder="weak">
            <input type="text" name="impaired" id="" placeholder="impaired">
            <input type="text" name="ps5" id="" placeholder="ps5">
            <input type="text" name="ability" id="" placeholder="ability">
            </div>
            <div class="column">
            <input type="text" name="ps6" id="" placeholder="ps6">
            <input type="text" name="ps7" id="" placeholder="ps7">
            <input type="text" name="assist" id="" placeholder="assist">
            <input type="date" name="created_at" id="" placeholder="created_at">
            </div>
            <div class="column">
            <input type="text" name="fallnotes" id="" placeholder="fallnotes">
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            <input type="time" name="n_time" id="" placeholder="time">
            </div>
            <div class="column">
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
