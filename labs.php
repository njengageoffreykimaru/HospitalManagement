<?php

if (isset($_POST['Add'])) {
    

    $id=$_POST['id'];
    $dat=$_POST['dat'];
    $patientid=$_POST['patientid'];
    $pname=$_POST['pname'];
    $ord=$_POST['ord'];
    $patientmr=$_POST['patientmr'];	
    $ordby=$_POST['ordby'];
    $paccount=$_POST['paccount'];
    $timecol=$_POST['timecol'];
    $dob=$_POST['dob'];	
    $timerec=$_POST['timerec'];
    $patientloc=$_POST['patientloc'];
    $t11=$_POST['t11'];	
    $t12=$_POST['t12'];	
    $t13=$_POST['t13'];	
    $t14=$_POST['t14'];	
    $t15=$_POST['t15'];	
    $t16=$_POST['t16'];	
    $t17=$_POST['t17'];	
    $submit=$_POST['submit'];	
    $t18=$_POST['t18'];	
    $t19=$_POST['t19'];	
    $t20=$_POST['t20'];	
    $t21=$_POST['t21'];	
    $col1=$_POST['col1'];
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
    $ch42=$_POST['ch42'];	
    $ch43=$_POST['ch43'];	
    $ch44=$_POST['ch44'];	
    $ch45=$_POST['ch45'];	
    $ch46=$_POST['ch46'];	
    $ch47=$_POST['ch47'];	
    $ch48=$_POST['ch48'];	
    $ch49=$_POST['ch49'];	
    $ch50=$_POST['ch50'];	
    $ch51=$_POST['ch51'];	
    $ch52=$_POST['ch52'];	
    $ch53=$_POST['ch53'];	
    $ch54=$_POST['ch54'];	
    $ch55=$_POST['ch55'];	
    $ch56=$_POST['ch56'];	
    $ch57=$_POST['ch57'];	
    $ch58=$_POST['ch58'];	
    $ch59=$_POST['ch59'];	
    $ch60=$_POST['ch60'];	
    $ch61=$_POST['ch61'];	
    $ch62=$_POST['ch62'];	
    $ch63=$_POST['ch63'];	
    $ch64=$_POST['ch64'];	
    $ch65=$_POST['ch65'];	
    $ch66=$_POST['ch66'];	
    $ch67=$_POST['ch67'];	
    $ch68=$_POST['ch68'];	
    $ch69=$_POST['ch69'];	
    $ch70=$_POST['ch70'];	
    $ch71=$_POST['ch71'];	
    $ch72=$_POST['ch72'];	
    $ch73=$_POST['ch73'];	
    $ch74=$_POST['ch74'];
    $ch75=$_POST['ch75'];	
    $ch76=$_POST['ch76'];	
    $ch78=$_POST['ch78'];	
    $ch79=$_POST['ch79'];	
    $ch80=$_POST['ch80'];	
    $ch81=$_POST['ch81'];	
    $ch82=$_POST['ch82'];	
    $ch83=$_POST['ch83'];	
    $ch84=$_POST['ch84'];	
    $ch85=$_POST['ch85'];	
    $ch86=$_POST['ch86'];	
    $ch87=$_POST['ch87'];	
    $ch88=$_POST['ch88'];	
    $ch89=$_POST['ch89'];
    $ch90=$_POST['ch90'];	
    $ch91=$_POST['ch91'];
    $ch92=$_POST['ch92'];
    $ch93=$_POST['ch93'];
    $ch94=$_POST['ch94'];	
    $blue=$_POST['blue'];
    $ch77=$_POST['ch77'];	
    $status=$_POST['status'];	
    $doctorid=$_POST['doctorid'];
    $date=$_POST['date'];	
    $auth_id=$_POST['auth_id'];
    $time=$_POST['time'];
    $infotype=$_POST['infotype'];
    $tab=$_POST['tab'];

   
    // if ($id !="" && $ip_address !=""&& $login !="" && $time !="") {
        
    
    $sql="INSERT INTO labs(
        id,dat,patientid,pname,ord,patientmr,ordby,paccount,timecol,
        dob,timerec,patientloc,t11,t12,t13,t14,t15,t16,t17,submit,
        t18,t19,t20,t21,col1,ch1,ch2,ch3,ch4,ch5,ch6,ch7,ch8,ch9,
        ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,ch18,ch19,ch20,ch21,
        ch22,ch23,ch24,ch25,ch26,ch27,ch28,ch29,ch30,ch31,ch32,ch33,ch34,
        ch35,ch36,ch37,ch38,ch39,ch40,ch41,ch42,ch43,ch44,ch45,ch46,ch47,ch48,
        ch49,ch50,ch51,ch52,ch53,ch54,ch55,ch56,ch57,ch58,ch59,
        ch60,ch61,ch62,ch63,ch64,ch65,ch66,ch67,ch68,ch69,ch70,
        ch71,ch72,ch73,ch74,ch75,ch76,ch78,ch79,ch80,ch81,ch82,
        ch83,ch84,ch85,ch86,ch87,ch88,ch89,ch90,ch91,ch92,ch93,
        ch94,blue,ch77,status,doctorid,date,auth_id,time,infotype,tab)
     VALUES(
        '$id','$dat','$patientid','$pname','$ord','$patientmr','$ordby','$paccount','$timecol',
        '$dob','$timerec','$patientloc','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$submit',
        '$t18','$t19','$t20','$t21','$col1','$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$ch7','$ch8','$ch9',
        '$ch10','$ch11','$ch12','$ch13','$ch14','$ch15','$ch16','$ch17','$ch18','$ch19','$ch20','$ch21',
        '$ch22','$ch23','$ch24','$ch25','$ch26','$ch27','$ch28','$ch29','$ch30','$ch31','$ch32','$ch33','$ch34',
        '$ch35','$ch36','$ch37','$ch38','$ch39','$ch40','$ch41','$ch42','$ch43','$ch44','$ch45','$ch46',
        '$ch47','$ch48','$ch49','$ch50','$ch51','$ch52','$ch53','$ch54','$ch55','$ch56','$ch57','$ch58','$ch59',
        '$ch60','$ch61','$ch62','$ch63','$ch64','$ch65','$ch66','$ch67','$ch68','$ch69','$ch70',
        '$ch71','$ch72','$ch73','$ch74','$ch75','$ch76','$ch78','$ch79','$ch80','$ch81','$ch82',
        '$ch83','$ch84','$ch85','$ch86','$ch87','$ch88','$ch89','$ch90','$ch91','$ch92','$ch93',
        '$ch94','$blue','$ch77','$status','$doctorid','$date','$auth_id','$time','$infotype','$tab')";
include_once('dbcon.php');
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
        <h2>Labs</h2>
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
      <li><a href="user_groups.php">Users group</a></li>
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
            <input type="number" name="patientid" id="" placeholder="	patientid	">
            <input type="text" name="dat" id="" placeholder="dat">
            <input type="text" name="pname" id="" placeholder="pname">
            </div>
            <div class="column">
            <input type="text" name="ord" id="" placeholder="ord">
            <input type="text" name="patientmr" id="" placeholder="patientmr">
            <input type="text" name="ordby" id="" placeholder="ordby">
            <input type="text" name="paccount" id="" placeholder="paccount">
            </div>
            <div class="column">
            <input type="datetime-local" name="timecol" id="" placeholder="timecol">
            <input type="date" name="dob" id="" placeholder="dob">
            <input type="datetime-local" name="timerec" id="" placeholder="timerec">
            <input type="text" name="patientloc" id="" placeholder="patientloc	">
            </div>
            <div class="column">
            <input type="text" name="t11" id="" placeholder="t11">
            <input type="text" name="t12" id="" placeholder="t12">
            <input type="text" name="t13" id="" placeholder="t13">
            <input type="text" name="t14" id="" placeholder="t14">
            </div>
            <div class="column">
            <input type="text" name="t15" id="" placeholder="t15">
            <input type="text" name="t16" id="" placeholder="t16">
            <input type="text" name="t17" id="" placeholder="t17">
            <input type="text" name="submit" id="" placeholder="submit">
            </div>
            <div class="column">
            <input type="text" name="t18" id="" placeholder="t18">
            <input type="text" name="t19" id="" placeholder="t19">
            <input type="text" name="t20" id="" placeholder="t20">
            <input type="text" name="t21" id="" placeholder="t21">
            </div>
            <div class="column">
            <input type="text" name="col1" id="" placeholder="1">
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
            <input type="text" name="musknotes" id="" placeholder="musknotes">
            <!-- <textarea name="musknotes" id="" placeholder="musknotes"></textarea> -->
            <input type="text" name="ch25" id="" placeholder="infotype">
            <input type="number" name="ch26" id="" placeholder="ch26">
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
            <input type="text" name="ch42" id="" placeholder="ch42">
            </div>
            <div class="column">
            <input type="text" name="ch43" id="" placeholder="ch43">
            <input type="text" name="ch44" id="" placeholder="ch44">
            <input type="text" name="ch45" id="" placeholder="ch45">
            <input type="text" name="ch46" id="" placeholder="ch46">
            </div>
            <div class="column">
            <input type="text" name="ch47" id="" placeholder="ch47">
            <input type="text" name="ch48" id="" placeholder="ch48">
            <input type="text" name="ch49" id="" placeholder="ch49">
            <input type="text" name="ch50" id="" placeholder="ch50">
            </div>
            <div class="column">
            <input type="text" name="ch51" id="" placeholder="ch51">
            <input type="text" name="ch52" id="" placeholder="ch52">
            <input type="text" name="ch53" id=""
             placeholder="ch53">
            <!-- <textarea name="musknotes" id="" placeholder="musknotes"></textarea> -->
            <input type="text" name="ch54" id="" placeholder="ch54">
            </div>
            <div class="column">
            <input type="number" name="ch55" id="" placeholder="ch55">
            <input type="text" name="ch56" id="" placeholder="ch56">          
          
          
            <input type="text" name="ch57" id="" placeholder="ch57">
            <input type="text" name="ch58" id="" placeholder="ch58">
            </div>
            <div class="column">
            <input type="text" name="ch59" id="" placeholder="ch59">
            <input type="text" name="ch60" id="" placeholder="ch60">
            <input type="text" name="ch61" id="" placeholder="ch61">
            <input type="text" name="ch62" id="" placeholder="ch62">
            </div>
            <div class="column">
            <input type="text" name="ch63" id="" placeholder="ch63">
            <input type="text" name="ch64" id="" placeholder="ch64">
            <input type="text" name="ch65" id="" placeholder="ch65">
            <input type="text" name="ch66" id="" placeholder="ch66">
            </div>
            <div class="column">
            <input type="text" name="ch67" id="" placeholder="ch67">
            <input type="text" name="ch68" id="" placeholder="ch68">
            <input type="text" name="ch69" id="" placeholder="ch69">
            <input type="text" name="ch70" id="" placeholder="ch70">
            </div>
            <div class="column">
            <input type="text" name="ch71" id="" placeholder="ch71">
            <input type="text" name="ch72" id="" placeholder="ch72">
            <input type="text" name="ch73" id="" placeholder="ch73">
            <input type="text" name="ch74" id="" placeholder="ch74">
            </div>
            <div class="column">
            <input type="text" name="ch75" id="" placeholder="ch75">
            <input type="text" name="ch76" id="" placeholder="ch76">
            <input type="text" name="ch78" id="" placeholder="ch78">
            <input type="text" name="ch79" id="" placeholder="ch79">
            </div>
            <div class="column">
            <input type="text" name="ch80" id="" placeholder="ch80">
            <input type="text" name="ch81" id="" placeholder="ch81">
            <input type="text" name="ch82" id="" placeholder="ch82">
            <input type="text" name="ch83" id=""
             placeholder="ch83">
            </div>
            <!-- <textarea name="musknotes" id="" placeholder="musknotes"></textarea> -->
            <div class="column">
            <input type="text" name="ch84" id="" placeholder="ch84">
            <input type="number" name="ch85" id="" placeholder="ch85">
            <input type="text" name="ch86" id="" placeholder="ch86"> 

            <input type="text" name="ch87" id="" placeholder="ch87">
            </div>
            <div class="column">
            <input type="text" name="ch88" id="" placeholder="ch88">
            <input type="text" name="ch89" id="" placeholder="ch89">
            <input type="text" name="ch90" id="" placeholder="ch90">
            <input type="text" name="ch91" id="" placeholder="ch91">
            </div>
            <div class="column">
            <input type="text" name="ch92" id="" placeholder="ch92">
            <input type="text" name="ch93" id="" placeholder="ch93">
            <input type="text" name="ch94" id=""
             placeholder="ch94">
            <!-- <textarea name="musknotes" id="" placeholder="musknotes"></textarea> -->
            <input type="text" name="blue" id="" placeholder="blue">
            </div>
            <div class="column">
            <input type="number" name="ch77" id="" placeholder="ch77">
            <input type="text" name="status" id="" placeholder="status"> 



            <input type="number" name="doctorid" id="" placeholder="doctorid	">
            <input type="date" name="date" id="" placeholder="date">
            </div>
            <div class="column">
            <input type="number" name="auth_id" id="" placeholder="auth_id">
            <input type="time" name="time" id="" placeholder="time">
            <input type="text" name="infotype" id="" placeholder="infotype">
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