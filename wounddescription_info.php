
<?php

if (isset($_POST['Add'])) {
    
$id=$_POST['id'];
$pid=$_POST['pid'];
$r11=$_POST['r11'];
$r12=$_POST['r12'];
$r13=$_POST['r13'];	
$r14=$_POST['r14'];
$r15=$_POST['r15'];	
$r16=$_POST['r16'];	
$r17=$_POST['r17'];	
$r18=$_POST['r18'];	
$r21=$_POST['r21'];	
$r22=$_POST['r22'];	
$r23=$_POST['r23'];	
$r24=$_POST['r24'];	
$r25=$_POST['r25'];	
$r26=$_POST['r26'];	
$r27=$_POST['r27'];	
$r28=$_POST['r28'];	
$r31=$_POST['r31'];	
$r32=$_POST['r32'];	
$r33=$_POST['r33'];	
$r34=$_POST['r34'];	
$r35=$_POST['r35'];	
$r36=$_POST['r36'];	
$r37=$_POST['r37'];	
$r38=$_POST['r38'];
$r41=$_POST['r41'];	
$r42=$_POST['r42'];	
$r43=$_POST['r43'];	
$r44=$_POST['r44'];	
$r45=$_POST['r45'];	
$r46=$_POST['r46'];	
$r47=$_POST['r47'];	
$r48=$_POST['r48'];	
$r51=$_POST['r51'];	
$r52=$_POST['r52'];
$r53=$_POST['r53'];	
$r54=$_POST['r54'];	
$r55=$_POST['r55'];	
$r56=$_POST['r56'];	
$r57=$_POST['r57'];	
$r58=$_POST['r58'];	
$added_at=$_POST['added_at'];	
$pressure=$_POST['pressure'];
$venous=$_POST['venous'];
$skintear=$_POST['skintear'];	
$injury=$_POST['injury'];
$arterial=$_POST['arterial'];
$diabetic=$_POST['diabetic'];
$abrasion=$_POST['abrasion'];
$other=$_POST['other'];
$woundnotes=$_POST['woundnotes'];	
$infotype=$_POST['infotype'];
$tab=$_POST['tab'];
$auth_id=$_POST['auth_id'];
$date=$_POST['date'];
$time=$_POST['time'];
//     if ($id !=""&& $pid !=""&& $r11 !=""&&$r12 !=""&&$r13 !=""&&$r14 !="" &&$r15 !=""&&$r16 !=""&&$r17 !="" &&
//     $r18 !=""&& $r21 !="" && $r22 !="" && $r23 !=""&& $r24 !="" && $r25 !=""&& $r26 !=""&& $r27 !=""&&
//  $r28 !=""&& $r31 !="" && $r32 !="" && $r33 !=""&&$r34 !="" && $r35 !="" && $r36 !="" && $r37 !=""&&
//  $r38 !=""&&$r41 !=""&&$r42 !=""&& $r43 !=""&&$r44 !="" &&$r45 !="" && $r46 !=""&&$r47 !=""&&$r48 !=""&&
//  $r51 !="" && $r52 !="" &&$r53 !=""&& $r54 !="" && $r55 !=""&& $r56 !=""&& $r57 !="" && $r58 !=""&&
//  $added_at !=""&& $pressure !=""&&$venous !=""&& $skintear !=""&& $injury !=""&& $arterial !=""&&
//  $diabetic !=""&& $abrasion !=""&& $other !="" &&
//  $woundnotes !=""&& $infotype !=""&& $tab !=""&& $auth_id !=""&& $date !=""&& $time !="")  {
        
    
    $sql="INSERT INTO  wounddescription_info(id,pid,r11,r12,r13,r14,r15,r16,r17
    ,r18,r21,r22,r23,r24,r25,r26,r27,
 r28,r31,r32,r33,r34,r35,r36,r37,r38,r41,r42,r43,r44, r45,r46,r47,r48,
 r51,r52,r53,r54,r55,r56,r57,r58,added_at,pressure,venous,skintear,injury,arterial,diabetic,abrasion,other,
 woundnotes,infotype,tab,auth_id,date,time)
     VALUES('$id','$pid','$r11','$r12','$r13','$r14','$r15','$r16','$r17'
    ,'$r18','$r21','$r22','$r23','$r24','$r25','$r26','$r27',
 '$r28','$r31','$r32','$r33','$r34','$r35','$r36','$r37',
 '$r38','$r41','$r42','$r43','$r44','$r45','$r46','$r47','$r48',
 '$r51','$r52','$r53','$r54','$r55','$r56','$r57',
 '$r58','$added_at','$pressure','$venous','$skintear','$injury','$arterial','$diabetic','$abrasion','$other',
 '$woundnotes','$infotype','$tab','$auth_id','$date','$time')";
include_once('dbcon.php');
$query = mysqli_query($con, $sql);

if ($query) {
    echo "Register successfull";
} else {
    echo "Failed to insert data into the database: " . mysqli_error($con);
}
}
?><!DOCTYPE html>
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
        <h2>Wound description info</h2>
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
             <input type="number" name="id" id="" placeholder="enter id" required>
      <input type="number" name="pid" id="" placeholder="enter pid" required>
       <input type="text" name="r11" id="" placeholder="enter r11">
        <input type="text" name="r12" id="" placeholder="enter r12">
        </div>
            <div class="column">
         <input type="text" name="r13" id="" placeholder="enter r13">
          <input type="text" name="r14" id="" placeholder="enter r14">
          <input type="text" name="r15" id="" placeholder="enter r15">
          <input type="text" name="r16" id="" placeholder="enter 	r16">
          </div>
            <div class="column">
          <input type="text" name="r17" id="" placeholder="enter r17">
          <input type="text" name="r18" id="" placeholder="enter r18">
          <input type="text" name="r21" id="" placeholder="enter r21">
      <input type="text" name="r22" id="" placeholder="enter r22">
      </div>
            <div class="column">
       <input type="text" name="r23" id="" placeholder="enter r23">
        <input type="text" name="r24" id="" placeholder="enter r24">
         <input type="text" name="r25" id="" placeholder="enter r25">
          <input type="text" name="r26" id="" placeholder="enter r26">
          </div>
            <div class="column">
          <input type="text" name="r27" id="" placeholder="enter r27">
          <input type="text" name="r28" id="" placeholder="enter r28">
          <input type="text" name="r31" id="" placeholder="enter r31">
          <input type="text" name="r32" id="" placeholder="enter 	r32">
          </div>
            <div class="column">
          <input type="text" name="r33" id="" placeholder="enter r33">
          <input type="text" name="r34" id="" placeholder="enter r34">
          <input type="text" name="r35" id="" placeholder="enter  r35">

          <input type="text" name="r36" id="" placeholder="enter r36">
          </div>
            <div class="column">
       <input type="text" name="r37" id="" placeholder="enter r37">
        <input type="text" name="r38" id="" placeholder="enter r38">
         <input type="text" name="r41" id="" placeholder="enter r41">
          <input type="text" name="r42" id="" placeholder="enter r42">
          </div>
            <div class="column">
          <input type="text" name="r43" id="" placeholder="enter r43">
          <input type="text" name="r44" id="" placeholder="enter r44">
          <input type="text" name="r45" id="" placeholder="enter r45">
          <input type="text" name="r46" id="" placeholder="enter r46">
          </div>
            <div class="column">
          <input type="text" name="r47" id="" placeholder="enter r47">
          <input type="text" name="r48" id="" placeholder="enter r48">
          <input type="text" name="r51" id="" placeholder="enter  r51">

          <input type="text" name="r52" id="" placeholder="enter r52">
          </div>
            <div class="column">
       <input type="text" name="r53" id="" placeholder="enter 	r53">
        <input type="text" name="r54" id="" placeholder="enter r54">
         <input type="text" name="r55" id="" placeholder="enter r55">
          <input type="text" name="r56" id="" placeholder="enter r56">
          </div>
            <div class="column">
          <input type="text" name="r57" id="" placeholder="enter r57">
          <input type="text" name="r58" id="" placeholder="enter r58">
          <input type="datetime-local" name="added_at" id="" placeholder="enter added_at">
          <input type="text" name="pressure" id="" placeholder="enter pressure">
          </div>
            <div class="column">
          <input type="text" name="venous" id="" placeholder="enter venous">
          <input type="text" name="skintear" id="" placeholder="enter skintear">
          <input type="text" name="injury" id="" placeholder="enter  injury">

          <input type="text" name="arterial" id="" placeholder="enter arterial">
          </div>
            <div class="column">
          <input type="text" name="diabetic" id="" placeholder="enter diabetic">
          <input type="text" name="abrasion" id="" placeholder="enter abrasion">
          <input type="text" name="other" id="" placeholder="enter other">
          <input type="text" name="woundnotes" id="" placeholder="enter 	woundnotes">
          </div>
            <div class="column">
          <input type="text" name="infotype" id="" placeholder="enter infotype">
          <input type="number" name="auth_id" id="" placeholder="enter auth_id" required>
          <input type="datetime-local" name="time" id="" placeholder="enter time" required>
          <input type="date" name="date" id="" placeholder="enter  date" required>
          </div>
            <div class="column">
          <input type="text" name="tab" id="" placeholder="enter  tab">
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