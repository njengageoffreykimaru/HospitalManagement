<?php

if (isset($_POST['Add'])) {	
$id=$_POST['id'];
$pid=$_POST['pid'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$ch5=$_POST['ch5'];
$ch6=$_POST['ch6'];
$ch7=$_POST['ch7'];
$ch8=$_POST['ch8'];
$ch9=$_POST['ch9'];
$ch10=$_POST['ch10'];
$ch11=$_POST['ch11'];
$ch12=$_POST['ch12'];
$ch13=$_POST['ch13'];
$ch14=$_POST['ch14'];
$ch15=$_POST['ch15'];
$ch16=$_POST['ch16'];
$ch17=$_POST['ch17'];
$ch18=$_POST['ch18'];
$ch19=$_POST['ch19'];
$ch20=$_POST['ch20'];
$ch21=$_POST['ch21'];
$ch22=$_POST['ch22'];
$ch23=$_POST['ch23'];
$ch24=$_POST['ch24'];
$ch25=$_POST['ch25'];
$ch26=$_POST['ch26'];
$ch27=$_POST['ch27'];
$ch28=$_POST['ch28'];
$ch29=$_POST['ch29'];
$ch30=$_POST['ch30'];
$ch31=$_POST['ch31'];
$ch32=$_POST['ch32'];
$ch33=$_POST['ch33'];
$ch34=$_POST['ch34'];
$ch35=$_POST['ch35'];
$ch36=$_POST['ch36'];
$ch37=$_POST['ch37'];
$ch38=$_POST['ch38'];
$ch39=$_POST['ch39'];
$ch40=$_POST['ch40'];
$ch41=$_POST['ch41'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];
$t7=$_POST['t7'];
$t8=$_POST['t8'];
$t9=$_POST['t9'];
$t10=$_POST['t10'];
$t11=$_POST['t11'];
$t12=$_POST['t12'];
$t13=$_POST['t13'];
$t14=$_POST['t14'];
$t15=$_POST['t15'];
$t16=$_POST['t16'];
$t17=$_POST['t17'];
$t18=$_POST['t18'];
$t19=$_POST['t19'];
$t20=$_POST['t20'];
$t21=$_POST['t21'];
$t22=$_POST['t22'];
$t23=$_POST['t23'];
$t24=$_POST['t24'];
$t25=$_POST['t25'];
$t26=$_POST['t26'];
$t27=$_POST['t27'];
$t28=$_POST['t28'];
$t29=$_POST['t29'];
$t30=$_POST['t30'];
$t31=$_POST['t31'];
$t32=$_POST['t32'];
$t33=$_POST['t33'];
$t34=$_POST['t34'];
$t35=$_POST['t35'];
$t36=$_POST['t36'];
$t37=$_POST['t37'];
$t38=$_POST['t38'];
$t39=$_POST['t39'];
$t40=$_POST['t40'];
$t41=$_POST['t41'];
$t42=$_POST['t42'];
$t43=$_POST['t43'];
$t44=$_POST['t44'];
$t45=$_POST['t45'];
$t46=$_POST['t46'];
$t47=$_POST['t47'];
$t48=$_POST['t48'];
$t49=$_POST['t49'];
$t50=$_POST['t50'];
$t51=$_POST['t51'];
$t52=$_POST['t52'];
$t53=$_POST['t53'];
$t54=$_POST['t54'];
$t55=$_POST['t55'];
$t56=$_POST['t56'];
$t57=$_POST['t57'];
$t58=$_POST['t58'];
$t59=$_POST['t59'];
$t60=$_POST['t60'];
$t61=$_POST['t61'];
$t62=$_POST['t62'];
$t63=$_POST['t63'];
$t64=$_POST['t64'];
$t65=$_POST['t65'];
$t66=$_POST['t66'];
$t67=$_POST['t67'];
$t68=$_POST['t68'];
$t69=$_POST['t69'];
$t70=$_POST['t70'];
$t71=$_POST['t71'];
$t72=$_POST['t72'];
$t73=$_POST['t73'];
$t74=$_POST['t74'];
$t75=$_POST['t75'];
$t76=$_POST['t76'];
$t77=$_POST['t77'];
$t78=$_POST['t78'];
$t79=$_POST['t79'];
$t80=$_POST['t80'];
$t81=$_POST['t81'];
$t82=$_POST['t82'];
$t83=$_POST['t83'];
$t84=$_POST['t84'];
$t85=$_POST['t85'];
$t86=$_POST['t86'];
$t87=$_POST['t87'];
$t88=$_POST['t88'];
$position=$_POST['position'];
$submit=$_POST['submit'];
$field=$_POST['field'];
$ab1=$_POST['ab1'];
$ab2=$_POST['ab2'];
$ab3=$_POST['ab3'];
$ab4=$_POST['ab4'];
$ab5=$_POST['ab5'];
$at1=$_POST['at1'];
$at2=$_POST['at2'];
$at3=$_POST['at3'];
$at4=$_POST['at4'];
$at5=$_POST['at5'];
$infotype=$_POST['infotype'];
$auth_id=$_POST['auth_id'];
$time=$_POST['time'];
$date=$_POST['date'];


   
    // if ($id !=""&& $pid !=""&& $ch1 !=""&& $ch2 !=""&& $ch3 !=""&& $ch4 !=""&& $ch5 !=""&& $ch6 !=""&& $ch7 !=""&& $ch8 !=""&& $ch9 !=""&& $ch10 !=""
    // && $ch11 !=""&& $ch12 !=""&& $ch13 !=""&& $ch14 !=""&& $ch15 !=""&& $ch16 !=""&& $ch17 !=""&& $ch18 !=""&& $ch19 !=""&& $ch20 !=""&& $ch21 !=""
    // && $ch22 !=""&& $ch23 !=""&& $ch24 !=""&& $ch25 !=""&& $ch26 !=""&& $ch27 !=""&& $ch28 !=""&& $ch29 !=""&& $ch30 !=""&& $ch31 !=""&& $ch32 !=""
    // && $ch33 !=""&& $ch34 !=""&& $ch35 !=""&& $ch36 !=""&& $ch37 !=""&& $ch38 !=""&& $ch39 !=""&& $ch40 !=""&& $ch41 !=""&& $t1 !=""&& $t2 !=""
    // && $t3 !=""&& $t4 !=""&& $t5 !=""&& $t6 !=""&& $t7 !=""&& $t8 !=""&& $t9 !=""&& $t10 !=""&& $t11 !=""&& $t12 !=""&& $t13 !=""&& $t14 !=""
    // && $t15 !=""&& $t16 !=""&& $t17 !=""&& $t18 !=""&& $t19 !=""&& $t20 !=""&& $t21 !=""&& $t22 !=""&& $t23 !=""&& $t24 !=""&& $t25 !=""&& $t26 !=""
    // && $t27 !=""&& $t28 !=""&& $t29 !=""&& $t30 !=""&& $t31 !=""&& $t32 !=""&& $t33 !=""&& $t34 !=""&& $t35 !=""&& $t36 !=""&& $t37 !=""&& $t38 !=""
    // && $t39 !=""&& $t40 !=""&& $t41 !=""&& $t42 !=""&& $t43 !=""&& $t44 !=""&& $t45 !=""&& $t46 !=""&& $t47 !=""&& $t48 !=""&& $t49 !=""&& $t50 !=""
    // && $t51 !=""&& $t52 !=""&& $t53 !=""&& $t54 !=""&& $t55 !=""&& $t56 !=""&& $t57 !=""&& $t58 !=""&& $t59 !=""&& $t60 !=""&& $t61 !=""&& $t62 !=""
    // && $t63 !=""&& $t64 !=""&& $t65 !=""&& $t66 !=""&& $t67 !=""&& $t68 !=""&& $t69 !=""&& $t70 !=""&& $t71 !=""&& $t72 !=""&& $t73 !=""&& $t74 !=""
    // && $t75 !=""&& $t76 !=""&& $t77 !=""&& $t78 !=""&& $t79 !=""&& $t80 !=""&& $t81 !=""&& $t82 !=""&& $t83 !=""&& $t84 !=""&& $t85 !=""&& $t86 !=""
    // && $t87 !=""&& $t88 !=""&& $position !=""&& $submit !=""&& $field !=""&& $ab1 !=""&& $ab2 !=""&& $ab3 !=""&& $ab4 !=""&& $ab5 !=""&& $at1 !=""
    // && $at2 !=""&& $at3 !=""&& $at4 !=""&& $at5 !=""&& $infotype !=""&& $auth_id !=""&& $time !=""&& $date!="") {        
    
    $sql="INSERT INTO revised_respiratory(id,pid,ch1,ch2,ch3,ch4,ch5,ch6,ch7,ch8,ch9,
    ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,ch18,ch19,ch20,ch21,
    ch22,ch23,ch24,ch25,ch26,ch27,ch28,ch29,ch30,ch31,ch32,ch33,ch34,ch35,ch36,ch37,
    ch38,ch39,ch40,ch41,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,
    t12,t13,t14,t15,t16,t17,t18,t19,t20,t21,t22,t23,t24,t25,t26,t27,t28,t29,t30,t31,t32,t33,t34,t35,
    t36,t37,t38,t39,t40,t41,t42,t43,t44,t45,
    t46,t47,t48,t49,t50,t51,t52,t53,t54,t55,t56,t57,t58,t59,t60,t61,t62,t63,t64,t65,t66,t67,t68,t69,
    t70,t71,t72,t73,t74,t75,t76,t77,t78,t79,
    t80,t81,t82,t83,t84,t85,t86,t87,t88,position,submit,field,ab1,ab2,ab3,ab4,ab5,at1,at2,at3,at4,at5,infotype,auth_id,time,date)
     VALUES('$id','$pid','$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$ch7','$ch8','$ch9','$ch10','$ch11','$ch12','$ch13','$ch14','$ch15',
     '$ch16','$ch17','$ch18','$ch19','$ch20','$ch21','$ch22','$ch23','$ch24','$ch25','$ch26','$ch27','$ch28','$ch29','$ch30','$ch31','$ch32',
     '$ch33','$ch34','$ch35','$ch36','$ch37','$ch38','$ch39','$ch40','$ch41','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11',
     '$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20','$t21','$t22','$t23','$t24','$t25','$t26','$t27','$t28','$t29','$t30','$t31',
     '$t32','$t33','$t34','$t35','$t36','$t37','$t38','$t39','$t40','$t41','$t42','$t43','$t44','$t45','$t46','$t47','$t48','$t49','$t50','$t51',
     '$t52','$t53','$t54','$t55','$t56','$t57','$t58','$t59','$t60','$t61','$t62','$t63','$t64','$t65','$t66','$t67','$t68','$t69','$t70','$t71',
     '$t72','$t73','$t74','$t75','$t76','$t77','$t78','$t79','$t80','$t81','$t82','$t83','$t84','$t85','$t86','$t87','$t88','$position','$submit',
     '$field','$ab1','$ab2','$ab3','$ab4','$ab5','$at1','$at2','$at3','$at4','$at5','$infotype','$auth_id','$time','$date')";
include_once('dbcon.php');
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
        <h2>Revised Respiratory</h2>
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
            <input type="number" name="pid" id="" placeholder="pid" required>
            <input type="text" name="ch1" id="" placeholder="ch1">
             <input type="text" name="ch2" id="" placeholder="ch2">
            </div>
            <div class="column">
         <input type="text" name="ch3" id="" placeholder="ch3">
         <input type="text" name="ch4" id="" placeholder="ch4">
         <input type="text" name="ch5" id="" placeholder="ch5">
         <input type="text" name="ch6" id="" placeholder="ch6">
            </div>
            <div class="column">
         <input type="text" name="ch7" id="" placeholder="ch7">
         <input type="text" name="ch8" id="" placeholder="ch8">
         <input type="text" name="ch9" id="" placeholder="ch9">
         <input type="text" name="ch10" id="" placeholder="ch10">
            </div>
            <div class="column">
         <input type="text" name="ch11" id="" placeholder="ch11">
         <input type="text" name="ch12" id="" placeholder="ch12">
         <input type="text" name="ch13" id="" placeholder="ch13">
         <input type="text" name="ch14" id="" placeholder="ch14">
            </div>
            <div class="column">
         <input type="text" name="ch15" id="" placeholder="ch15">
         <input type="text" name="ch16" id="" placeholder="ch16">
         <input type="text" name="ch17" id="" placeholder="ch17">
         <input type="text" name="ch18" id="" placeholder="ch18">
            </div>
            <div class="column">
         <input type="text" name="ch19" id="" placeholder="ch19">
         <input type="text" name="ch20" id="" placeholder="ch20">
         <input type="text" name="ch21" id="" placeholder="ch21">
         <input type="text" name="ch22" id="" placeholder="ch22">
            </div>
            <div class="column">
         <input type="text" name="ch23" id="" placeholder="ch23">
         <input type="text" name="ch24" id="" placeholder="ch24">
         <input type="text" name="ch25" id="" placeholder="ch25">
         <input type="text" name="ch26" id="" placeholder="ch26">
            </div>
            <div class="column">
         <input type="text" name="ch27" id="" placeholder="ch27">
         <input type="text" name="ch28" id="" placeholder="ch28">
         <input type="text" name="ch29" id="" placeholder="ch29">
         <input type="text" name="ch30" id="" placeholder="ch30">
            </div>
            <div class="column">
         <input type="text" name="ch31" id="" placeholder="ch31">
         <input type="text" name="ch32" id="" placeholder="ch32">
         <input type="text" name="ch33" id="" placeholder="ch33">
         <input type="text" name="ch34" id="" placeholder="ch34">
            </div>
            <div class="column">
         <input type="text" name="ch35" id="" placeholder="ch35">
         <input type="text" name="ch36" id="" placeholder="ch36">
         <input type="text" name="ch37" id="" placeholder="ch37">
         <input type="text" name="ch38" id="" placeholder="ch38">
            </div>
            <div class="column">
         <input type="text" name="ch39" id="" placeholder="ch39">
         <input type="text" name="ch40" id="" placeholder="ch40">
         <input type="text" name="ch41" id="" placeholder="ch41">
         <input type="text" name="t1" id="" placeholder="t1">
            </div>
            <div class="column">
         <input type="text" name="t2" id="" placeholder="t2">
         <input type="text" name="t3" id="" placeholder="t3">
         <input type="text" name="t4" id="" placeholder="t4">
         <input type="text" name="t5" id="" placeholder="t5">
            </div>
            <div class="column">
         <input type="text" name="t6" id="" placeholder="t6">
         <input type="text" name="t7" id="" placeholder="t7">
         <input type="text" name="t8" id="" placeholder="t8">
         <input type="text" name="t9" id="" placeholder="t9">
            </div>
            <div class="column">
         <input type="text" name="t10" id="" placeholder="t10">
         <input type="text" name="t11" id="" placeholder="t11">
         <input type="text" name="t12" id="" placeholder="t12">
         <input type="text" name="t13" id="" placeholder="t13">
            </div>
            <div class="column">
         <input type="text" name="t14" id="" placeholder="t14">
         <input type="text" name="t15" id="" placeholder="t15">
         <input type="text" name="t16" id="" placeholder="t16">
         <input type="text" name="t17" id="" placeholder="t17">
            </div>
            <div class="column">
         <input type="text" name="t18" id="" placeholder="t18">
         <input type="text" name="t19" id="" placeholder="t19">
         <input type="text" name="t20" id="" placeholder="t20">
         <input type="text" name="t21" id="" placeholder="t21">
            </div>
            <div class="column">
         <input type="text" name="t22" id="" placeholder="t22">
         <input type="text" name="t23" id="" placeholder="t23">
         <input type="text" name="t24" id="" placeholder="t24">
         <input type="text" name="t25" id="" placeholder="t25">
            </div>
            <div class="column">
         <input type="text" name="t26" id="" placeholder="t26">
         <input type="text" name="t27" id="" placeholder="t27">
         <input type="text" name="t28" id="" placeholder="t28">
         <input type="text" name="t29" id="" placeholder="t29">
            </div>
            <div class="column">
         <input type="text" name="t30" id="" placeholder="t30">
         <input type="text" name="t31" id="" placeholder="t31">
         <input type="text" name="t32" id="" placeholder="t32">
         <input type="text" name="t33" id="" placeholder="t33">
            </div>
            <div class="column">
         <input type="text" name="t34" id="" placeholder="t34">
         <input type="text" name="t35" id="" placeholder="t35">
         <input type="text" name="t36" id="" placeholder="t36">
         <input type="text" name="t37" id="" placeholder="t37">
            </div>
            <div class="column">
         <input type="text" name="t38" id="" placeholder="t38">
         <input type="text" name="t39" id="" placeholder="t39">
         <input type="text" name="t40" id="" placeholder="t40">
         <input type="text" name="t41" id="" placeholder="t41">
            </div>
            <div class="column">
         <input type="text" name="t42" id="" placeholder="t42">
         <input type="text" name="t43" id="" placeholder="t43">
         <input type="text" name="t44" id="" placeholder="t44">
         <input type="text" name="t45" id="" placeholder="t45">
            </div>
            <div class="column">
         <input type="text" name="t46" id="" placeholder="t46">
         <input type="text" name="t47" id="" placeholder="t47">
         <input type="text" name="t48" id="" placeholder="t48">
         <input type="text" name="t49" id="" placeholder="t49">
            </div>
            <div class="column">
         <input type="text" name="t50" id="" placeholder="t50">
         <input type="text" name="t51" id="" placeholder="t51">
         <input type="text" name="t52" id="" placeholder="t52">
         <input type="text" name="t53" id="" placeholder="t53">
            </div>
            <div class="column">
         <input type="text" name="t54" id="" placeholder="t54">
         <input type="text" name="t55" id="" placeholder="t55">
         <input type="text" name="t56" id="" placeholder="t56">
         <input type="text" name="t57" id="" placeholder="t57">
            </div>
            <div class="column">
         <input type="text" name="t58" id="" placeholder="t58">
         <input type="text" name="t59" id="" placeholder="t58">
         <input type="text" name="t60" id="" placeholder="t60">
         <input type="text" name="t61" id="" placeholder="t61">
            </div>
            <div class="column">
         <input type="text" name="t62" id="" placeholder="t62">
         <input type="text" name="t63" id="" placeholder="t63">
         <input type="text" name="t64" id="" placeholder="t64">
         <input type="text" name="t65" id="" placeholder="t65">
            </div>
            <div class="column">
         <input type="text" name="t66" id="" placeholder="t66">
         <input type="text" name="t67" id="" placeholder="t67">
         <input type="text" name="t68" id="" placeholder="t68">
         <input type="text" name="t69" id="" placeholder="t69">
            </div>
            <div class="column">
         <input type="text" name="t70" id="" placeholder="t70">
         <input type="text" name="t71" id="" placeholder="t71">
         <input type="text" name="t72" id="" placeholder="t72">
         <input type="text" name="t73" id="" placeholder="t73">
            </div>
            <div class="column">
         <input type="text" name="t74" id="" placeholder="t74">
         <input type="text" name="t75" id="" placeholder="t75">
         <input type="text" name="t76" id="" placeholder="t76">
         <input type="text" name="t77" id="" placeholder="t77">
            </div>
            <div class="column">
         <input type="text" name="t78" id="" placeholder="t78">
         <input type="text" name="t79" id="" placeholder="t79">
         <input type="text" name="t80" id="" placeholder="t80">
         <input type="text" name="t81" id="" placeholder="t81">
            </div>
            <div class="column">
         <input type="text" name="t82" id="" placeholder="t82">
         <input type="text" name="t83" id="" placeholder="t83">
         <input type="text" name="t84" id="" placeholder="t84">
         <input type="text" name="t85" id="" placeholder="t85">
            </div>
            <div class="column">
         <input type="text" name="t86" id="" placeholder="t86">
         <input type="text" name="t87" id="" placeholder="t87">
         <input type="text" name="t88" id="" placeholder="t88">
         <input type="text" name="position" id="" placeholder="position">
            </div>
            <div class="column">
         <input type="text" name="submit" id="" placeholder="submit">
         <input type="text" name="field" id="" placeholder="field">
         <input type="text" name="ab1" id="" placeholder="ab1">
         <input type="text" name="ab2" id="" placeholder="ab2">
            </div>
            <div class="column">
         <input type="text" name="ab3" id="" placeholder="ab3">
         <input type="text" name="ab4" id="" placeholder="ab4">
         <input type="text" name="ab5" id="" placeholder="ab5">
         <input type="text" name="at1" id="" placeholder="at1">
            </div>
            <div class="column">
         <input type="text" name="at2" id="" placeholder="at2">
         <input type="text" name="at3" id="" placeholder="at3">
         <input type="text" name="at4" id="" placeholder="at4">
         <input type="text" name="at5" id="" placeholder="at5">
            </div>
            <div class="column">
         <input type="text" name="infotype" id="" placeholder="infotype">
         <input type="number" name="auth_id" id="" placeholder="auth_id">
         <input type="time" name="time" id="" placeholder="time">
         <input type="date" name="date" id="" placeholder="date">
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