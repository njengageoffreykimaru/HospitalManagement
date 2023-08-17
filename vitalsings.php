<?php

if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $auth_id = $_POST['auth_id'];
    $infotype = $_POST['infotype'];
    $bpress = $_POST['bpress'];
    $hrate = $_POST['hrate'];
    $otext = $_POST['otext'];
    $chec1 = $_POST['chec1'];
    $chec2 = $_POST['chec2'];
    $chec3 = $_POST['chec3'];
    $chec4 = $_POST['chec4'];
    $chec5 = $_POST['chec5'];
    $chec6 = $_POST['chec6'];
    $chec7 = $_POST['chec7'];
    $chec8 = $_POST['chec8'];
    $chec9 = $_POST['chec9'];
    $chec10 = $_POST['chec10'];
    $chec11 = $_POST['chec11'];
    $chec12 = $_POST['chec12'];
    $chec13 = $_POST['chec13'];
    $chec14 = $_POST['chec14'];
    $chec15 = $_POST['chec15'];
    $chec16 = $_POST['chec16'];
    $chec17 = $_POST['chec17'];
    $chec18 = $_POST['chec18'];
    $chec19 = $_POST['chec19'];
    $chec20 = $_POST['chec20'];
    $chec21 = $_POST['chec21'];
    $chec22 = $_POST['chec22'];
    $chec23 = $_POST['chec23'];
    $chec24 = $_POST['chec24'];
    $chec25 = $_POST['chec25'];
    $chec26 = $_POST['chec26'];
    $chec27 = $_POST['chec27'];
    $chec28 = $_POST['chec28'];
    $chec29 = $_POST['chec29'];
    $chec30 = $_POST['chec30'];
    $chec31 = $_POST['chec31'];
    $chec32 = $_POST['chec32'];
    $chec33 = $_POST['chec33'];
    $chec34 = $_POST['chec34'];
    $chec35 = $_POST['chec35'];
    $chec36 = $_POST['chec36'];
    $chec37 = $_POST['chec37'];
    $chec38 = $_POST['chec38'];
    $chec39 = $_POST['chec39'];
    $chec40 = $_POST['chec40'];
    $chec41 = $_POST['chec41'];
    $chec42 = $_POST['chec42'];
    $chec43 = $_POST['chec43'];
    $chec44 = $_POST['chec44'];
    $chec45 = $_POST['chec45'];
    $chec46 = $_POST['chec46'];
    $chec47 = $_POST['chec47'];
    $chec48 = $_POST['chec48'];
    $chec49 = $_POST['chec49'];
    $chec035 = $_POST['chec035'];
    $lying = $_POST['lying'];
    $standing = $_POST['standing'];
    $sitting = $_POST['sitting'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $ytilt = $_POST['ytilt'];
    $ntilt = $_POST['ntilt'];
    $ydizziness = $_POST['ydizziness'];
    $ndizziness = $_POST['ndizziness'];
    $tab = $_POST['tab'];
    
    // if ($id != "" && $pid != "" && $auth_id != "" && $infotype != "" && $bpress != 
    // "" && $hrate != "" && $otext != "" && $chec1 != "" && $chec2 != "" && $chec3 != ""
    //  && $chec4 != "" && $chec5 != "" && $chec6 != "" && $chec7 != "" && $chec8 != "" && $chec9 != ""
    //   && $chec10 != "" && $chec11 != "" && $chec12 != "" && $chec13 != "" && $chec14 != "" && $chec15 != ""
    //    && $chec16 != "" && $chec17 != "" && $chec18 != "" && $chec19 != "" && $chec20 != ""
    //     && $chec21 != "" && $chec22 != "" && $chec23 != "" && $chec24 != "" && $chec25 != ""
    //      && $chec26 != "" && $chec27 != "" && $chec28 != "" && $chec29 != "" && $chec30 != "" 
    //      && $chec31 != "" && $chec32 != "" && $chec33 != "" && $chec34 != "" && $chec35 != ""
    //       && $chec36 != "" && $chec37 != "" && $chec38 != "" && $chec39 != "" && $chec40 != "" 
    //       && $chec41 != "" && $chec42 != "" && $chec43 != "" && $chec44 != "" && $chec45 != "" 
    //       && $chec46 != "" && $chec47 != "" && $chec48 != "" && $chec49 != "" && $chec035 != ""
    //        && $lying != "" && $standing != "" && $sitting != "" && $time != "" && $date != "" 
    //        && $ytilt != "" && $ntilt != "" && $ydizziness != "" && $ndizziness != "" && $tab != "") {
        include_once('dbcon.php');
        
        $sql = "INSERT INTO vital_signs (id, pid, auth_id, infotype, bpress, hrate,
         otext, chec1, chec2, chec3, chec4, chec5, chec6, chec7, chec8, chec9, chec10,
          chec11, chec12, chec13, chec14, chec15, chec16, chec17, chec18, chec19, chec20,
           chec21, chec22, chec23, chec24, chec25, chec26, chec27, chec28, chec29, chec30,
            chec31, chec32, chec33, chec34, chec35, chec36, chec37, chec38, chec39, chec40,
             chec41, chec42, chec43, chec44, chec45, chec46, chec47, chec48, chec49, chec035,
              lying, standing, sitting, time, date, ytilt, ntilt, ydizziness, ndizziness, tab) 
                VALUES ('$id', '$pid', '$auth_id', '$infotype', '$bpress', '$hrate', '$otext', '$chec1', '$chec2', '$chec3', '$chec4', '$chec5', '$chec6', '$chec7', '$chec8', '$chec9', '$chec10', '$chec11', '$chec12', '$chec13', '$chec14', '$chec15', '$chec16', '$chec17', '$chec18', '$chec19', '$chec20', '$chec21', '$chec22', '$chec23', '$chec24', '$chec25', '$chec26', '$chec27', '$chec28', '$chec29', '$chec30', '$chec31', '$chec32', '$chec33', '$chec34', '$chec35', '$chec36', '$chec37', '$chec38', '$chec39', '$chec40', '$chec41', '$chec42', '$chec43', '$chec44', '$chec45', '$chec46', '$chec47', '$chec48', '$chec49', '$chec035', '$lying', '$standing', '$sitting', '$time', '$date', '$ytilt', '$ntilt', '$ydizziness', '$ndizziness', '$tab')";
        
        $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Register successfull";
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
        <h2>vital signs</h2>
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
            <input type="number" name="auth_id" id="" placeholder="Enter Auth ID" required>
            <input type="text" name="infotype" id="" placeholder="Enter Infotype">
            </div>
            <div class="column">
            <input type="text" name="bpress" id="" placeholder="Enter Bpress">
            <input type="text" name="hrate" id="" placeholder="Enter Hrate">
            <input type="text" name="otext" id="" placeholder="Enter Otext">
            <input type="number" name="chec1" id="" placeholder="Enter Chec1" required>
            </div>
            <div class="column">
            <input type="number" name="chec2" id="" placeholder="Enter Chec2" required>
            <input type="number" name="chec3" id="" placeholder="Enter Chec3" required>
            <input type="number" name="chec4" id="" placeholder="Enter Chec4" required>
            <input type="text" name="chec5" id="" placeholder="Enter Chec5">
            </div>
            <div class="column">
            <input type="text" name="chec6" id="" placeholder="Enter Chec6">
            <input type="text" name="chec7" id="" placeholder="Enter Chec7">
            <input type="text" name="chec8" id="" placeholder="Enter Chec8">
            <input type="text" name="chec9" id="" placeholder="Enter Chec9">
            </div>
            <div class="column">
            <input type="text" name="chec10" id="" placeholder="Enter Chec10">
            <input type="text" name="chec11" id="" placeholder="Enter Chec11">
            <input type="text" name="chec12" id="" placeholder="Enter Chec12">
            <input type="text" name="chec13" id="" placeholder="Enter Chec13">
            </div>
            <div class="column">
            <input type="text" name="chec14" id="" placeholder="Enter Chec14">
            <input type="text" name="chec15" id="" placeholder="Enter Chec15">
            <input type="text" name="chec16" id="" placeholder="Enter Chec16">
            <input type="text" name="chec17" id="" placeholder="Enter Chec17">
            </div>
            <div class="column">
            <input type="text" name="chec18" id="" placeholder="Enter Chec18">
            <input type="text" name="chec19" id="" placeholder="Enter Chec19">
            <input type="text" name="chec20" id="" placeholder="Enter Chec20">
            <input type="text" name="chec21" id="" placeholder="Enter Chec21">
            </div>
            <div class="column">
            <input type="text" name="chec22" id="" placeholder="Enter Chec22">
            <input type="text" name="chec23" id="" placeholder="Enter Chec23">
            <input type="text" name="chec24" id="" placeholder="Enter Chec24">
            <input type="text" name="chec25" id="" placeholder="Enter Chec25">
            </div>
            <div class="column">
            <input type="text" name="chec26" id="" placeholder="Enter Chec26">
            <input type="text" name="chec27" id="" placeholder="Enter Chec27">
            <input type="text" name="chec28" id="" placeholder="Enter Chec28">
            <input type="text" name="chec29" id="" placeholder="Enter Chec29">
            </div>
            <div class="column">
            <input type="text" name="chec30" id="" placeholder="Enter Chec30">
            <input type="text" name="chec31" id="" placeholder="Enter Chec31">
            <input type="text" name="chec32" id="" placeholder="Enter Chec32">
            <input type="text" name="chec33" id="" placeholder="Enter Chec33">
            </div>
            <div class="column">
            <input type="text" name="chec34" id="" placeholder="Enter Chec34">
            <input type="text" name="chec35" id="" placeholder="Enter Chec35">
            <input type="text" name="chec36" id="" placeholder="Enter Chec36">
            <input type="text" name="chec37" id="" placeholder="Enter Chec37">
            </div>
            <div class="column">
            <input type="text" name="chec38" id="" placeholder="Enter Chec38">
            <input type="text" name="chec39" id="" placeholder="Enter Chec39">
            <input type="text" name="chec40" id="" placeholder="Enter Chec40">
            <input type="text" name="chec41" id="" placeholder="Enter Chec41">
            </div>
            <div class="column">
            <input type="text" name="chec42" id="" placeholder="Enter Chec42">
            <input type="text" name="chec43" id="" placeholder="Enter Chec43">
            <input type="text" name="chec44" id="" placeholder="Enter Chec44">
            <input type="text" name="chec45" id="" placeholder="Enter Chec45">
            </div>
            <div class="column">
            <input type="text" name="chec46" id="" placeholder="Enter Chec46">
            <input type="text" name="chec47" id="" placeholder="Enter Chec47">
            <input type="text" name="chec48" id="" placeholder="Enter Chec48">
            <input type="text" name="chec49" id="" placeholder="Enter Chec49">
            </div>
            <div class="column">
            <input type="text" name="chec035" id="" placeholder="Enter Chec035">
            <input type="text" name="lying" id="" placeholder="Enter Lying">
            <input type="text" name="standing" id="" placeholder="Enter Standing">
            <input type="text" name="sitting" id="" placeholder="Enter Sitting">
            </div>
            <div class="column">
            <input type="datetime-local" name="time" id="" placeholder="Enter Time" required>
            <input type="date" name="date" id="" placeholder="Enter Date" required>
            <input type="text" name="ytilt" id="" placeholder="Enter Ytilt">
            <input type="text" name="ntilt" id="" placeholder="Enter Ntilt">
            </div>
            <div class="column">
            <input type="text" name="ydizziness" id="" placeholder="Enter Ydizziness">
            <input type="text" name="ndizziness" id="" placeholder="Enter Ndizziness">
            <input type="text" name="tab" id="" placeholder="Enter Tab">
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
