<?php
if (isset($_POST['Add'])) {
    
    $pid = $_POST['pid'];
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
    $t19 = $_POST['t19'];
    $t20 = $_POST['t20'];
    $t22 = $_POST['t22'];
    $t23 = $_POST['t23'];
    $t24 = $_POST['t24'];
    $t25 = $_POST['t25'];
    $t26 = $_POST['t26'];
    $t27 = $_POST['t27'];
    $t28 = $_POST['t28'];
    $t29 = $_POST['t29'];
    $t30 = $_POST['t30'];
    $t31 = $_POST['t31'];
    $t32 = $_POST['t32'];
    $t33 = $_POST['t33'];
    $t34 = $_POST['t34'];
    $t35 = $_POST['t35'];
    $t36 = $_POST['t36'];
    $t37 = $_POST['t37'];
    $t38 = $_POST['t38'];
    $t39 = $_POST['t39'];
    $t40 = $_POST['t40'];
    $t41 = $_POST['t41'];
    $t42 = $_POST['t42'];
    $t43 = $_POST['t43'];
    $t44 = $_POST['t44'];
    $t45 = $_POST['t45'];
    $t46 = $_POST['t46'];
    $t47 = $_POST['t47'];
    $t48 = $_POST['t48'];
    $t49 = $_POST['t49'];
    $t50 = $_POST['t50'];
    $t51 = $_POST['t51'];
    $t52 = $_POST['t52'];
    $t53 = $_POST['t53'];
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
    $ch36 = $_POST['ch36'];
    $ch37 = $_POST['ch37'];
    $ch38 = $_POST['ch38'];
    $ch39 = $_POST['ch39'];
    $ch40 = $_POST['ch40'];
    $ch41 = $_POST['ch41'];
    $ch42 = $_POST['ch42'];
    $ch43 = $_POST['ch43'];
    $ch44 = $_POST['ch44'];
    $ch45 = $_POST['ch45'];
    $ch46 = $_POST['ch46'];
    $ch47 = $_POST['ch47'];
    $ch48 = $_POST['ch48'];
    $ch49 = $_POST['ch49'];
    $ch50 = $_POST['ch50'];
    $ch51 = $_POST['ch51'];
    $ch52 = $_POST['ch52'];
    $ch53 = $_POST['ch53'];
    $ch54 = $_POST['ch54'];
    $ch55 = $_POST['ch55'];
    $ch56 = $_POST['ch56'];
    $ch57 = $_POST['ch57'];
    $added_at = $_POST['added_at'];
    $t21 = $_POST['t21'];
    $submit = $_POST['submit'];
    $ps1 = $_POST['ps1'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $diabtext = $_POST['diabtext'];
    

    // if ( !empty($pid) && !empty($t1) && !empty($t2) && !empty($t3) && !empty($t4) && !empty($t5) 
    // && !empty($t6) && !empty($t7) && !empty($t8) && !empty($t9) && !empty($t10) && !empty($t11) && !empty($t12) 
    // && !empty($t13) && !empty($t14) && !empty($t15) && !empty($t16) && !empty($t17) && !empty($t18) && !empty($t19) 
    // && !empty($t20) && !empty($t22) && !empty($t23) && !empty($t24) && !empty($t25) && !empty($t26) && !empty($t27) 
    // && !empty($t28) && !empty($t29) && !empty($t30) && !empty($t31) && !empty($t32) && !empty($t33) && !empty($t34) 
    // && !empty($t35) && !empty($t36) && !empty($t37) && !empty($t38) && !empty($t39) && !empty($t40) && !empty($t41) 
    // && !empty($t42) && !empty($t43) && !empty($t44) && !empty($t45) && !empty($t46) && !empty($t47) && !empty($t48) 
    // && !empty($t49) && !empty($t50) && !empty($t51) && !empty($t52) && !empty($t53) && !empty($ch1) && !empty($ch2) 
    // && !empty($ch3) && !empty($ch4) && !empty($ch5) && !empty($ch6) && !empty($ch7) && !empty($ch8) && !empty($ch9) 
    // && !empty($ch10) && !empty($ch11) && !empty($ch12) && !empty($ch13) && !empty($ch14) && !empty($ch15) && !empty($ch16) 
    // && !empty($ch17) && !empty($ch18) && !empty($ch19) && !empty($ch20) && !empty($ch21) && !empty($ch22) && !empty($ch23) 
    // && !empty($ch24) && !empty($ch25) && !empty($ch26) && !empty($ch27) && !empty($ch28) && !empty($ch29) && !empty($ch30) 
    // && !empty($ch31) && !empty($ch32) && !empty($ch33) && !empty($ch34) && !empty($ch35) && !empty($ch36) && !empty($ch37) 
    // && !empty($ch38) && !empty($ch39) && !empty($ch40) && !empty($ch41) && !empty($ch42) && !empty($ch43) && !empty($ch44) 
    // && !empty($ch45) && !empty($ch46) && !empty($ch47) && !empty($ch48) && !empty($ch49) && !empty($ch50) && !empty($ch51) 
    // && !empty($ch52) && !empty($ch53) && !empty($ch54) && !empty($ch55) && !empty($ch56) && !empty($ch57) && !empty($added_at) 
    // && !empty($t21) && !empty($submit) && !empty($ps1) && !empty($infotype) && !empty($auth_id) && !empty($time) && !empty($date) 
    // && !empty($diabtext)) {

        include_once('dbcon.php');
        $sql = "INSERT INTO elopment (pid,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14,t15,t16,t17,t18,t19,t20,t22,t23,t24,
        t25,t26,t27,t28,t29,t30,t31,t32,t33,t34,t35,t36,t37,t38,t39,t40,t41,t42,t43,t44,t45,t46,t47,t48,t49,t50,t51,t52,t53,ch1,ch2,ch3,
        ch4,ch5,ch6,ch7,ch8,ch9,ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,ch18,ch19,ch20,ch21,ch22,ch23,ch24,ch25,ch26,ch27,ch28,ch29,ch30,
        ch31,ch32,ch33,ch34,ch35,ch36,ch37,ch38,ch39,ch40,ch41,ch42,ch43,ch44,ch45,ch46,ch47,ch48,ch49,ch50,ch51,ch52,ch53,ch54,ch55,ch56,
        ch57,added_at,t21,submit,ps1,infotype,auth_id,time,date,diabtext) 
        VALUES ( '$pid', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12', '$t13', '$t14', '$t15', 
        '$t16', '$t17', '$t18', '$t19', '$t20', '$t22', '$t23', '$t24', '$t25', '$t26', '$t27', '$t28', '$t29', '$t30', '$t31', '$t32', '$t33', 
        '$t34', '$t35', '$t36', '$t37', '$t38', '$t39', '$t40', '$t41', '$t42', '$t43', '$t44', '$t45', '$t46', '$t47', '$t48', '$t49', '$t50', 
        '$t51', '$t52', '$t53', '$ch1', '$ch2', '$ch3', '$ch4', '$ch5', '$ch6', '$ch7', '$ch8', '$ch9', '$ch10', '$ch11', '$ch12', '$ch13', '$ch14', 
        '$ch15', '$ch16', '$ch17', '$ch18', '$ch19', '$ch20', '$ch21', '$ch22', '$ch23', '$ch24', '$ch25', '$ch26', '$ch27', '$ch28', '$ch29', '$ch30', 
        '$ch31', '$ch32', '$ch33', '$ch34', '$ch35', '$ch36', '$ch37', '$ch38', '$ch39', '$ch40', '$ch41', '$ch42', '$ch43', '$ch44', '$ch45', '$ch46', 
        '$ch47', '$ch48', '$ch49', '$ch50', '$ch51', '$ch52', '$ch53', '$ch54', '$ch55', '$ch56', '$ch57', '$added_at', '$t21', '$submit', '$ps1', 
        '$infotype', '$auth_id', '$time', '$date', '$diabtext')";
        
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
        <h2>Elopment</h2>
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
            <!-- <input type="number" name="id" id="" placeholder="Enter ID" required> -->
            <input type="number" name="pid" id="" placeholder="Enter PID" required>
            <input type="text" name="t1" id="" placeholder="t1">
            <input type="text" name="t2" id="" placeholder="t2">
            <input type="text" name="t3" id="" placeholder="t3">
            </div>
       
            
            
            <div class="column">
            <input type="text" name="t4" id="" placeholder="t4">
            
     
            <input type="text" name="t5" id="" placeholder="t5">
            <input type="text" name="t6" id="" placeholder="t6">
            <input type="text" name="t7" id="" placeholder="t7">
            </div>
            <div class="column">
            <input type="text" name="t8" id="" placeholder="t8">
            <input type="text" name="t9" id="" placeholder="t9">
            <input type="text" name="t10" id="" placeholder="t10">
            
        
            <input type="text" name="t11" id="" placeholder="t11">
        </div>
        <div class="column">
            <input type="text" name="t12" id="" placeholder="t12">
            <input type="text" name="t13" id="" placeholder="t13">
           
        
            <input type="text" name="t14" id="" placeholder="t14">
            <input type="text" name="t15" id="" placeholder="t15">
            </div>
            <div class="column">
            <input type="text" name="t16" id="" placeholder="t16">
            
        
            <input type="text" name="t17" id="" placeholder="t17">
            <input type="text" name="t18" id="" placeholder="t18">
            <input type="text" name="t19" id="" placeholder="t19">
            </div>
        <div class="column">
            <input type="text" name="t20" id="" placeholder="t20">
            <input type="text" name="t22" id="" placeholder="22">
            <input type="text" name="t23" id="" placeholder="t23">
            
            <input type="text" name="t24" id="" placeholder="t24">
            </div>
            <div class="column">
            <input type="text" name="t25" id="" placeholder="t25">
            <input type="text" name="t26" id="" placeholder="t26">
           
            <input type="text" name="t27" id="" placeholder="t27">
            <input type="text" name="t28" id="" placeholder="t28">
            
            </div>
        <div class="column">
        <input type="text" name="t29" id="" placeholder="t29">
            <input type="text" name="t30" id="" placeholder="t30">
            <input type="text" name="t31" id="" placeholder="t31">
            <input type="text" name="t32" id="" placeholder="t32">
            </div>
        <div class="column">
            <input type="text" name="t33" id="" placeholder="t33">
            <input type="text" name="t34" id="" placeholder="t34">
            <input type="text" name="t35" id="" placeholder="t35">
            <input type="text" name="t36" id="" placeholder="t36">
            </div>
        <div class="column">
           
            <input type="text" name="t37" id="" placeholder="t37">
            <input type="text" name="t38" id="" placeholder="t38">
            <input type="text" name="t39" id="" placeholder="t39">
            <input type="text" name="t40" id="" placeholder="t40">
            </div>
        <div class="column">

            
            <input type="text" name="t41" id="" placeholder="t41">
            <input type="text" name="t42" id="" placeholder="t42">
            <input type="text" name="t43" id="" placeholder="t43">
            <input type="text" name="t44" id="" placeholder="t44">
            </div>
        
        <div class="column">
            <input type="text" name="t45" id="" placeholder="t45">
            <input type="text" name="t46" id="" placeholder="t46">
            <input type="text" name="t47" id="" placeholder="t47">
            <input type="text" name="t48" id="" placeholder="t48">
            </div>
        <div class="column">
         
            <input type="text" name="t49" id="" placeholder="t49">
            <input type="text" name="t50" id="" placeholder="t50">
            <input type="text" name="t51" id="" placeholder="t51">
            <input type="text" name="t52" id="" placeholder="t52">
            </div>
        <div class="column">
           
            <input type="text" name="t53" id="" placeholder="t53">
            <input type="text" name="ch1" id="" placeholder="ch1">
            <input type="text" name="ch2" id="" placeholder="ch2">
            <input type="text" name="ch3" id="" placeholder="ch3">
            </div>
       
        <div class="column">
            <input type="text" name="ch4" id="" placeholder="ch4">
            <input type="text" name="ch5" id="" placeholder="ch5">
            <input type="text" name="ch6" id="" placeholder="ch6">
            <input type="text" name="ch7" id="" placeholder="ch7">
            </div>
        <div class="column">
           
            <input type="text" name="ch8" id="" placeholder="ch8">
            <input type="text" name="ch9" id="" placeholder="ch9">
            <input type="text" name="ch10" id="" placeholder="ch10">
            <input type="text" name="ch11" id="" placeholder="ch11">
            </div>
        <div class="column">
            
            <input type="text" name="ch12" id="" placeholder="ch12">
            <input type="text" name="ch13" id="" placeholder="ch13">
            <input type="text" name="ch14" id="" placeholder="ch14">
            <input type="text" name="ch15" id="" placeholder="ch15">
            </div>
        
        <div class="column">
            <input type="text" name="ch16" id="" placeholder="ch16">
            <input type="text" name="ch17" id="" placeholder="ch17">
            <input type="text" name="ch18" id="" placeholder="ch18">
            <input type="text" name="ch19" id="" placeholder="ch19">
            </div>
        <div class="column">
            
            <input type="text" name="ch20" id="" placeholder="ch20">
            <input type="text" name="ch21" id="" placeholder="ch21">
            <input type="text" name="ch22" id="" placeholder="ch22">
            <input type="text" name="ch23" id="" placeholder="ch23">
            </div>
        <div class="column">
            
            <input type="text" name="ch24" id="" placeholder="ch24">
            <input type="text" name="ch25" id="" placeholder="ch25">
            <input type="text" name="ch26" id="" placeholder="ch26">
            <input type="text" name="ch27" id="" placeholder="ch27">
            </div>
           
        <div class="column">
            <input type="text" name="ch28" id="" placeholder="ch28">
            <input type="text" name="ch29" id="" placeholder="ch29">
            <input type="text" name="ch30" id="" placeholder="ch30">
            <input type="text" name="ch31" id="" placeholder="ch31">
            </div>
        <div class="column">
           
            <input type="text" name="ch32" id="" placeholder="ch32">
            <input type="text" name="ch33" id="" placeholder="ch33">
            <input type="text" name="ch34" id="" placeholder="ch34">
            <input type="text" name="ch35" id="" placeholder="ch35">
            </div>
        <div class="column">
            
            <input type="text" name="ch36" id="" placeholder="ch36">
            <input type="text" name="ch37" id="" placeholder="ch37">
            <input type="text" name="ch38" id="" placeholder="ch38">
            <input type="text" name="ch39" id="" placeholder="ch39">
            </div>
       
        <div class="column">
            <input type="text" name="ch40" id="" placeholder="ch40">
            <input type="text" name="ch41" id="" placeholder="ch41">
            <input type="text" name="ch42" id="" placeholder="ch42">
            <input type="text" name="ch43" id="" placeholder="ch43">
            </div>
        <div class="column">
            
            <input type="text" name="ch44" id="" placeholder="ch44">
            <input type="text" name="ch45" id="" placeholder="ch45">
            <input type="text" name="ch46" id="" placeholder="ch46">
            <input type="text" name="ch47" id="" placeholder="ch47">
            </div>
        <div class="column">
            
            <input type="text" name="ch48" id="" placeholder="ch48">
            <input type="text" name="ch49" id="" placeholder="ch49">
            <input type="text" name="ch50" id="" placeholder="ch50">
            <input type="text" name="ch51" id="" placeholder="ch51">
            </div>
        
        <div class="column">
            <input type="text" name="ch52" id="" placeholder="ch52">
            <input type="text" name="ch53" id="" placeholder="ch53">
            <input type="text" name="ch54" id="" placeholder="ch54">
            <input type="text" name="ch55" id="" placeholder="ch55">
           
            </div>
        <div class="column">
       
            <input type="text" name="ch56" id="" placeholder="ch56">
            <input type="text" name="ch57" id="" placeholder="ch57">
            <input type="time" name="added_at" id="" placeholder="added_at" required>
            <input type="text" name="t21" id="" placeholder="t21">
        </div>
        <div class="column">
            
            <input type="text" name="submit" id="" placeholder="submit">
            <input type="text" name="ps1" id="" placeholder="ps1">
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id" required>
           </div>
       
        <div class="column">
        <input type="text" name="time" id="" placeholder="time">
            <input type="text" name="date" id="" placeholder="date">
            <input type="text" name="diabtext" id="" placeholder="diabtext">
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
