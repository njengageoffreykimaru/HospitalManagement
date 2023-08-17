<?php

if (isset($_POST['Add'])) {
    
$id=$_POST['id'];
$patientid=$_POST['patientid'];
$name=$_POST['name'];
$eye=$_POST['eye'];
$verbal=$_POST['verbal'];
$motor=$_POST['motor'];
$psizeleft=$_POST['psizeleft'];
$psizeright=$_POST['psizeright'];
$perla=$_POST['perla'];
$sluggish=$_POST['sluggish'];
$dilated=$_POST['dilated'];
$fixed=$_POST['fixed'];
$hearing=$_POST['hearing'];
$hearing2=$_POST['hearing2'];
$vision2=$_POST['vision2'];
$gag2=$_POST['gag2'];
$speach2=$_POST['speach2'];
$affect=$_POST['affect'];
$sleep=$_POST['sleep'];
$regular=$_POST['regular'];
$regular1=$_POST['regular1'];
$regular2=$_POST['regular2'];
$irregular=$_POST['irregular'];
$strong1=$_POST['strong1'];
$strong2=$_POST['strong2'];
$weak=$_POST['weak'];
$weak1=$_POST['weak1'];
$weak2=$_POST['weak2'];
$four=$_POST['four'];
$three=$_POST['three'];
$two=$_POST['two'];
$one=$_POST['one'];
$other=$_POST['other'];
$pink=$_POST['pink'];
$dusky=$_POST['dusky'];
$cyanotic=$_POST['cyanotic'];
$clubbing=$_POST['clubbing'];
$refill=$_POST['refill'];
$chest=$_POST['chest'];
$location=$_POST['location'];
$ted=$_POST['ted'];
$scd=$_POST['scd'];
$telemetry=$_POST['telemetry'];
$pacemaker=$_POST['pacemaker'];
$nasal=$_POST['nasal'];
$sob=$_POST['sob'];
$trach=$_POST['trach'];
$ett=$_POST['ett'];
$bipap=$_POST['bipap'];
$breather=$_POST['breather'];
$mask=$_POST['mask'];
$collar=$_POST['collar'];
$o2=$_POST['o2'];
$ettsize=$_POST['ettsize'];
$trachsize=$_POST['trachsize'];
$o2amount=$_POST['o2amount'];
$via=$_POST['via'];
   
    // if ($id !="" &&	$patientid !="" &&	$name !="" && $eye !="" && $verbal !="" && $motor !="" && $psizeleft !="" 
    // && $psizeright !="" && $perla !="" && $sluggish !="" && $dilated !="" && $fixed	 !="" && $hearing	 !="" 
    // && $hearing2	 !="" && $vision2	 !="" && $gag2	 !="" && $speach2	 !="" && $affect	 !="" && $sleep	 !="" 
    // && $regular	 !="" && $regular1	 !="" && $regular2	 !="" && $irregular	 !="" && $strong1	 !="" && $strong2	 !="" 
    // && $weak	 !="" && $weak1	 !="" && $weak2	 !="" && $four	 !="" && $three	 !="" && $two	 !="" && $one	 !="" 
    // && $other	 !="" && $pink	 !="" && $dusky	 !="" && $cyanotic	 !="" && $clubbing	 !="" && $refill	 !="" 
    // && $chest	 !="" && $location	 !="" && $ted	 !="" && $scd	 !="" && $telemetry	 !="" && $pacemaker	 !="" 
    // && $nasal	 !="" && $sob	 !="" && $trach	 !="" && $ett	 !="" && $bipap	 !="" && $breather	 !="" && $mask	 !="" 
    // && $collar	 !="" && $o2	 !="" && $ettsize	 !="" && $trachsize	 !="" && $o2amount	 !="" && $via !="") {
        
    
    $sql="INSERT INTO neurologic( id,patientid,name,eye,verbal,motor,psizeleft,psizeright,perla,sluggish,
    dilated,fixed,hearing,hearing2,vision2,gag2,speach2,affect,sleep,regular,regular1,regular2,
    irregular,strong1,strong2,weak,weak1,weak2,four,three,two,one,other,pink,dusky,cyanotic,
    clubbing,refill,chest,location,ted,scd,telemetry,pacemaker,nasal,sob,trach,ett,bipap,breather,
    mask,collar,o2,ettsize,trachsize,o2amount,via)
     VALUES('$id','$patientid','$name','$eye','$verbal','$motor','$psizeleft','$psizeright','$perla','$sluggish','$dilated','$fixed','$hearing','$hearing2',	
'$vision2','$gag2','$speach2','$affect','$sleep','$regular	','$regular1','$regular2','$irregular','$strong1','$strong2','$weak','$weak1	',
'$weak2','$four','$three','$two','$one','$other','$pink','$dusky','$cyanotic','$clubbing','$refill','$chest','$location','$ted	',
'$scd','$telemetry','$pacemaker','$nasal','$sob','$trach','$ett','$bipap','$breather','$mask','$collar','$o2','$ettsize','$trachsize','$o2amount','$via')";
include_once('dbcon.php');
$query=mysqli_query($con,$sql) or die("data inserted successfully");
if ($query) {
    echo "Register successfull";

    // header("Location: index.php");
}
    // }
    // else {
    //     echo "please fill all details";
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
        <h2>Neurologic</h2>
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
        <input type="number" name="patientid" id="" placeholder="patientid">
         <input type="text" name="name" id="" placeholder="name">
          <input type="text" name="eye" id="" placeholder="eye">
            </div>
            <div class="column">
          <input type="text" name="verbal" id="" placeholder="verbal">
          <input type="text" name="motor" id="" placeholder="motor">
          <input type="text" name="psizeleft" id="" placeholder="psizeleft">
          <input type="text" name="psizeright" id="" placeholder="psizeright">
            </div>
            <div class="column">
          <input type="text" name="perla" id="" placeholder="perla">
          <input type="text" name="sluggish" id="" placeholder="sluggish">
          <input type="text" name="dilated" id="" placeholder="dilated">
         <input type="text" name="fixed" id="" placeholder="fixed">
            </div>
            <div class="column">
          <input type="text" name="hearing" id="" placeholder="hearing">
          <input type="text" name="hearing2" id="" placeholder="hearing2">
          <input type="text" name="vision2" id="" placeholder="vision2">
          <input type="text" name="gag2" id="" placeholder="gag2">
            </div>
            <div class="column">
         <input type="text" name="speach2" id="" placeholder="speach2">
          <input type="date" name="affect" id="" placeholder="affect">
          <input type="text" name="sleep" id="" placeholder="sleep">
          <input type="text" name="regular" id="" placeholder="regular">
            </div>
            <div class="column">
          <input type="text" name="regular1" id="" placeholder="regular1">
          <input type="text" name="regular2" id="" placeholder="regular2">
          <input type="text" name="irregular" id="" placeholder="irregular">
          <input type="text" name="strong1" id="" placeholder="strong1">
            </div>
            <div class="column">
          <input type="text" name="strong2" id="" placeholder="strong2">
          <input type="text" name="weak" id="" placeholder="weak">
          <input type="text" name="weak1" id="" placeholder="weak1">
          <input type="text" name="weak2" id="" placeholder="weak2">
            </div>
            <div class="column">
          <input type="text" name="four" id="" placeholder="four">
         <input type="text" name="three" id="" placeholder="three">
          <input type="text" name="two" id="" placeholder="two">
          <input type="text" name="one" id="" placeholder="one">
            </div>
            <div class="column">
          <input type="text" name="other" id="" placeholder="other">
          <input type="text" name="pink" id="" placeholder="pink">
         <input type="text" name="dusky" id="" placeholder="dusky">
          <input type="date" name="cyanotic" id="" placeholder="cyanotic">
            </div>
            <div class="column">
          <input type="text" name="clubbing" id="" placeholder="clubbing">
          <input type="text" name="refill" id="" placeholder="refill">
          <input type="text" name="chest" id="" placeholder="chest">
          <input type="text" name="location" id="" placeholder="location">
            </div>
            <div class="column">
          <input type="text" name="ted" id="" placeholder="ted">
          <input type="text" name="scd" id="" placeholder="scd">
          <input type="text" name="telemetry" id="" placeholder="telemetry">
          <input type="text" name="pacemaker" id="" placeholder="pacemaker">
            </div>
            <div class="column">
          <input type="text" name="nasal" id="" placeholder="nasal">
          <input type="text" name="sob" id="" placeholder="sob">
         <input type="text" name="trach" id="" placeholder="trach">
          <input type="text" name="ett" id="" placeholder="ett">
            </div>
            <div class="column">
          <input type="text" name="bipap" id="" placeholder="bipap">
          <input type="text" name="breather" id="" placeholder="breather">
          <input type="text" name="mask" id="" placeholder="mask">
         <input type="text" name="collar" id="" placeholder="collar">
            </div>
            <div class="column">
          <input type="date" name="o2" id="" placeholder="o2">
          <input type="text" name="ettsize" id="" placeholder="ettsize">
          <input type="text" name="trachsize" id="" placeholder="trachsize">
          <input type="text" name="o2amount" id="" placeholder="o2amount">
            </div>
            <div class="column">
          <input type="text" name="via" id="" placeholder="via">
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
