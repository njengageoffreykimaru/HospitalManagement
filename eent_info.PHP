<?php
if (isset($_POST['Add'])) {
    // $id = $_POST['id'];
    $pid = $_POST['pid'];
    $che1 = $_POST['che1'];
    $che2 = $_POST['che2'];
    $che3 = $_POST['che3'];
    $che4 = $_POST['che4'];
    $che5 = $_POST['che5'];
    $che6 = $_POST['che6'];
    $che7 = $_POST['che7'];
    $che9 = $_POST['che9'];
    $che10 = $_POST['che10'];
    $che11 = $_POST['che11'];
    $che12 = $_POST['che12'];
    $che13 = $_POST['che13'];
    $che14 = $_POST['che14'];
    $che15 = $_POST['che15'];
    $che16 = $_POST['che16'];
    $che17 = $_POST['che17'];
    $che18 = $_POST['che18'];
    $che19 = $_POST['che19'];
    $che20 = $_POST['che20'];
    $che21 = $_POST['che21'];
    $che22 = $_POST['che22'];
    $che23 = $_POST['che23'];
    $che24 = $_POST['che24'];
    $che25 = $_POST['che25'];
    $che26 = $_POST['che26'];
    $che27 = $_POST['che27'];
    $che28 = $_POST['che28'];
    $che29 = $_POST['che29'];
    $che30 = $_POST['che30'];
    $che31 = $_POST['che31'];
    $che32 = $_POST['che32'];
    $che33 = $_POST['che33'];
    $che34 = $_POST['che34'];
    $che35 = $_POST['che35'];
    $che36 = $_POST['che36'];
    $che37 = $_POST['che37'];
    $che38 = $_POST['che38'];
    $che39 = $_POST['che39'];
    $che40 = $_POST['che40'];
    $che41 = $_POST['che41'];
    $che42 = $_POST['che42'];
    $che43 = $_POST['che43'];
    $che44 = $_POST['che44'];
    $che45 = $_POST['che45'];
    $che46 = $_POST['che46'];
    $che47 = $_POST['che47'];
    $che48 = $_POST['che48'];
    $che53 = $_POST['che53'];
    $che54 = $_POST['che54'];
    $che555 = $_POST['che555'];
    $che56 = $_POST['che56'];
    $che57 = $_POST['che57'];
    $che58 = $_POST['che58'];
    $che59 = $_POST['che59'];
    $che01 = $_POST['che01'];
    $describe = $_POST['e_describe'];
    $describe1 = $_POST['describe1'];
    $describe3 = $_POST['describe3'];
    $eentnotes = $_POST['eentnotes'];
    $che55 = $_POST['che55'];
    $che8 = $_POST['che8'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $tab = $_POST['tab'];

    // if (!empty($id) && !empty($pid) && !empty($che1) && !empty($che2) && !empty($che3) && !empty($che4) && !empty($che5) 
    // && !empty($che6) && !empty($che7) && !empty($che9) && !empty($che10) && !empty($che11) && !empty($che12) && !empty($che13) 
    // && !empty($che14) && !empty($che15) && !empty($che16) && !empty($che17) && !empty($che18) && !empty($che19) && !empty($che20) 
    // && !empty($che21) && !empty($che22) && !empty($che23) && !empty($che24) && !empty($che25) && !empty($che26) && !empty($che27) 
    // && !empty($che28) && !empty($che29) && !empty($che30) && !empty($che31) && !empty($che32) && !empty($che33) && !empty($che34) 
    // && !empty($che35) && !empty($che36) && !empty($che37) && !empty($che38) && !empty($che39) && !empty($che40) && !empty($che41) 
    // && !empty($che42) && !empty($che43) && !empty($che44) && !empty($che45) && !empty($che46) && !empty($che47) && !empty($che48) 
    // && !empty($che53) && !empty($che54) && !empty($che555) && !empty($che56) && !empty($che57) && !empty($che58) && !empty($che59) 
    // && !empty($che01) && !empty($describe) && !empty($describe1) && !empty($describe3) && !empty($eentnotes) && !empty($che55) 
    // && !empty($che8) && !empty($infotype) && !empty($auth_id) && !empty($time) && !empty($date) && !empty($tab)) {
        include_once('dbcon.php');
        $sql = "INSERT INTO eent_info (pid,che1,che2,che3,che4,che5,che6,che7,che9,che10,che11,che12,che13,che14,che15,che16,
        che17,che18,che19,che20,che21,che22,che23,che24,che25,che26,che27,che28,che29,che30,che31,che32,che33,che34,che35,che36,che37,
        che38,che39,che40,che41,che42,che43,che44,che45,che46,che47,che48,che53,
        che54,che555,che56,che57,che58,che59,che01,e_describe,describe1,
        describe3,eentnotes,che55,che8,infotype,auth_id,time,date,tab)
          VALUES ( '$pid', '$che1', '$che2', '$che3', '$che4', '$che5', '$che6', '$che7', '$che9', '$che10', '$che11', '$che12', '$che13', 
          '$che14', '$che15', '$che16', '$che17', '$che18', '$che19', '$che20', '$che21', '$che22', '$che23', '$che24', '$che25', '$che26', '$che27', 
          '$che28', '$che29', '$che30', '$che31', '$che32', '$che33', '$che34', '$che35', '$che36', '$che37', '$che38', '$che39', '$che40', '$che41', 
          '$che42', '$che43', '$che44', '$che45', '$che46', '$che47', '$che48', '$che53', '$che54', '$che555', '$che56', '$che57', '$che58', '$che59', 
          '$che01', '$describe', '$describe1', '$describe3', '$eentnotes', '$che55', '$che8', '$infotype', '$auth_id', '$time', '$date', '$tab')";
        $query = mysqli_query($con, $sql);
      
        $query=mysqli_query($con,$sql);
        if ($query) {
            echo "Register successfull";
        
           
        }
        else {
            echo "Failed to insert data into the database: " . mysqli_error($con);
            }
        // }
        //     else {
        //         echo "please fill all details";
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
        <h2>Eent Info</h2>
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
            
            <!-- <input type="number" name="id" id="" placeholder="Enter ID" required> -->
            <div class="column">
            <input type="number" name="pid" id="" placeholder="Enter PID" required>
            <input type="text" name="che1" id="" placeholder="che1">
            <input type="text" name="che2" id="" placeholder="che2">
            <input type="text" name="che3" id="" placeholder="che3">
            </div>
            <div class="column">
            <input type="text" name="che4" id="" placeholder="che4">
            <input type="text" name="che5" id="" placeholder="che5">
            <input type="text" name="che6" id="" placeholder="che6">
            <input type="text" name="che7" id="" placeholder="che7">
            </div>
            <div class="column">
            <input type="text" name="che9" id="" placeholder="che9">
            <input type="text" name="che10" id="" placeholder="che10">
            <input type="text" name="che11" id="" placeholder="che11">
            <input type="text" name="che12" id="" placeholder="che12">
            </div>
            <div class="column">
            <input type="text" name="che13" id="" placeholder="che13">
            <input type="text" name="che14" id="" placeholder="che14">
            <input type="text" name="che15" id="" placeholder="che15">
            <input type="text" name="che16" id="" placeholder="che16">
            </div>
            <div class="column">
            <input type="text" name="che17" id="" placeholder="che17">
            <input type="text" name="che18" id="" placeholder="che18">
            <input type="text" name="che19" id="" placeholder="che19">
            <input type="text" name="che20" id="" placeholder="che20">
            </div>
            <div class="column">
            <input type="text" name="che21" id="" placeholder="che21">
            <input type="text" name="che22" id="" placeholder="che22">
            <input type="text" name="che23" id="" placeholder="che23">
            <input type="text" name="che24" id="" placeholder="che24">
            </div>
            <div class="column">
            <input type="text" name="che25" id="" placeholder="che25">
            <input type="text" name="che26" id="" placeholder="che26">
            <input type="text" name="che27" id="" placeholder="che27">
            <input type="text" name="che28" id="" placeholder="che28">
            </div>
            <div class="column">
            <input type="text" name="che29" id="" placeholder="che29">
            <input type="text" name="che30" id="" placeholder="che30">
            <input type="text" name="che31" id="" placeholder="che31">
            <input type="text" name="che32" id="" placeholder="che32">
            </div>
            <div class="column">
            <input type="text" name="che33" id="" placeholder="che33">
            <input type="text" name="che34" id="" placeholder="che34">
            <input type="text" name="che35" id="" placeholder="che35">
            <input type="text" name="che36" id="" placeholder="che36">
            </div>
            <div class="column">
            <input type="text" name="che37" id="" placeholder="che37">
            <input type="text" name="che38" id="" placeholder="che38">
            <input type="text" name="che39" id="" placeholder="che39">
            <input type="text" name="che40" id="" placeholder="che40">
            </div>
            <div class="column">
            <input type="text" name="che41" id="" placeholder="che41">
            <input type="text" name="che42" id="" placeholder="che42">
            <input type="text" name="che43" id="" placeholder="che43">
            <input type="text" name="che44" id="" placeholder="che44">
            </div>
            <div class="column">
            <input type="text" name="che45" id="" placeholder="che45">
            <input type="text" name="che46" id="" placeholder="che46">
            <input type="text" name="che47" id="" placeholder="che47">
            <input type="text" name="che48" id="" placeholder="che48">
            </div>
            <div class="column">
            <input type="text" name="che53" id="" placeholder="che53">
            <input type="text" name="che54" id="" placeholder="che54">
            <input type="text" name="che555" id="" placeholder="che555">
            <input type="text" name="che56" id="" placeholder="che56">
            </div>
            <div class="column">
            <input type="text" name="che57" id="" placeholder="che57">
            <input type="text" name="che58" id="" placeholder="che58">
            <input type="text" name="che59" id="" placeholder="che59">
            <input type="text" name="che01" id="" placeholder="che01">
            </div>
            <div class="column">
            <input type="text" name="e_describe" id="" placeholder="describe">
            <input type="text" name="describe1" id="" placeholder="describe1">
            <textarea name="describe3" id="" placeholder="describe3"></textarea>
            <input type="text" name="eentnotes" id="" placeholder="eentnotes">
            </div>
            <div class="column">
            <input type="text" name="che55" id="" placeholder="che55">
            <input type="text" name="che8" id="" placeholder="che8">
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            </div>
            <div class="column">
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
