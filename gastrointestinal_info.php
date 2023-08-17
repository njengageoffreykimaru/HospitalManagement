<?php

if (isset($_POST['Add'])) {
   
   
// $id=$_POST['id'];
$pid=$_POST['pid'];
$lastdate=$_POST['lastdate'];
$content=$_POST['content'];
$incontinent=$_POST['incontinent'];
$constipation=$_POST['constipation'];
$diaheria=$_POST['diaheria'];
$colostomy=$_POST['colostomy'];
$other=$_POST['other'];
$othertextvalue=$_POST['othertextvalue'];
$nor1=$_POST['nor1'];
$nor2=$_POST['nor2'];
$nor3=$_POST['nor3'];
$nor4=$_POST['nor4'];
$hyp1=$_POST['hyp1'];
$hyp2=$_POST['hyp2'];
$hyp3=$_POST['hyp3'];
$hyp4=$_POST['hyp4'];
$hyper1=$_POST['hyper1'];
$hyper2=$_POST['hyper2'];
$hyper3=$_POST['hyper3'];
$hyper4=$_POST['hyper4'];
$absent1=$_POST['absent1'];
$absent2=$_POST['absent2'];
$absent3=$_POST['absent3'];
$absent4=$_POST['absent4'];
$soft=$_POST['soft'];
$firm=$_POST['firm'];
$ntender=$_POST['ntender'];
$tender=$_POST['tender'];
$distended=$_POST['distended'];
$gaurding=$_POST['gaurding'];
$ngture=$_POST['ngture'];
$ngyes=$_POST['ngyes'];
$con=$_POST['con'];
$inter=$_POST['inter'];
$added_at=$_POST['added_at'];
$gastother=$_POST['gastother'];
$gasttext=$_POST['gasttext'];
$ngleft=$_POST['ngleft'];
$ngright=$_POST['ngright'];
$ngno=$_POST['ngno'];
$gastnotes=$_POST['gastnotes'];
$infotype=$_POST['infotype'];
$auth_id=$_POST['auth_id'];
$time=$_POST['time'];
$date=$_POST['date'];
$tab=$_POST['tab'];


  
  

    
   
    // if ($id !="" && $pid !="" && $auth_id !="" && $medicine!="" && $dosage !="" &&  $status!="" 
    // && $reason !="" && $viewed!="" && $time!="") {
        
    
    $sql="INSERT INTO gastrointestinal_info(pid,lastdate,content,incontinent,constipation,diaheria,colostomy,other,
        othertextvalue,nor1,nor2,nor3,nor4,hyp1,hyp2,hyp3,hyp4,
        hyper1,hyper2,hyper3,hyper4,absent1,absent2,absent3,absent4,soft,
        firm,ntender,tender,distended,gaurding,ngture,ngyes,con,inter,added_at,
        gastother,gasttext,ngleft,ngright,ngno,gastnotes,infotype,auth_id,time,date,tab)
     VALUES('$pid','$lastdate','$content','$incontinent','$constipation','$diaheria','$colostomy','$other',
'$othertextvalue','$nor1','$nor2','$nor3','$nor4','$hyp1','$hyp2','$hyp3','$hyp4','$hyper1','$hyper2',
'$hyper3','$hyper4','$absent1','$absent2','$absent3','$absent4','$soft','$firm','$ntender','$tender','$distended',
'$gaurding','$ngture','$ngyes','$con','$inter','$added_at','$gastother','$gasttext','$ngleft',
'$ngright','$ngno','$gastnotes','$infotype','$auth_id','$time','$date','$tab')";
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
        <h2>Gastrointestinal Info</h2>
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
            
             <!-- <input type="number" name="id" id="" placeholder="enter id" required> -->
             <div class="column">
      <input type="number" name="pid" id="" placeholder="enter pid">
       <input type="date" name="lastdate" id="" placeholder="enter lastdate"required>
       <input type="text" name="content" id="" placeholder="enter content">
        <input type="text" name="incontinent" id="" placeholder="enter incontinent	">
             </div>
             <div class="column">
         <input type="text" name="constipation" id="" placeholder="enter 	constipation">
          <input type="text" name="diaheria" id="" placeholder="enter 	diaheria">
          <input type="text" name="colostomy" id="" placeholder="enter colostomy"> 
          <input type="text" name="other" id="" placeholder="enter other">
             </div>
             <div class="column">
          <input type="text" name="othertextvalue" id="" placeholder="enter othertextvalue	">
          <input type="text" name="nor1" id="" placeholder="enter nor1">
      <input type="text" name="nor2" id="" placeholder="enter nor2">
       <input type="text" name="nor3" id="" placeholder="enter nor3">
             </div>
             <div class="column">
        <input type="text" name="nor4" id="" placeholder="enter nor4">
         <input type="text" name="hyp1" id="" placeholder="enter 	hyp1">
          <input type="text" name="hyp2" id="" placeholder="enter 	hyp2">
          <input type="text" name="hyp3" id="" placeholder="enter 	hyp3">
             </div>
             <div class="column">
          <input type="text" name="hyp4" id="" placeholder="enter hyp4">
          <input type="text" name="hyper1" id="" placeholder="enter hyper1	">
          <input type="text" name="hyper2" id="" placeholder="enter hyper2	">
           <input type="text" name="hyper3" id="" placeholder="enter hyper3">
             </div>
           <div class="column">
      <input type="text" name="hyper4" id="" placeholder="enter hyper4">
       <input type="text" name="absent1" id="" placeholder="enter absent1">
        <input type="text" name="absent2" id="" placeholder="enter absent2	">
         <input type="text" name="absent3" id="" placeholder="enter 	absent3">
           </div>
           <div class="column">
          <input type="text" name="absent4" id="" placeholder="enter 	absent4">
          <input type="text" name="soft" id="" placeholder="enter 	soft">
          <input type="text" name="firm" id="" placeholder="enter firm">
          <input type="text" name="ntender" id="" placeholder="enter ntender	">
           </div>
           <div class="column">
          <input type="text" name="tender" id="" placeholder="enter tender	">
<input type="text" name="distended" id="" placeholder="enter distended	">
<input type="text" name="gaurding" id="" placeholder="enter gaurding">
<input type="text" name="ngture" id="" placeholder="enter ngture">
           </div>
           <div class="column">
<input type="text" name="ngyes" id="" placeholder="enter ngyes">
<input type="text" name="con" id="" placeholder="enter 	con	">
<input type="text" name="inter" id="" placeholder="enter 	inter">
<input type="time" name="added_at" id="" placeholder="enter 	added_at" required>
           </div>
           <div class="column">
<input type="text" name="gastother" id="" placeholder="enter 	gastother">
<input type="text" name="gasttext" id="" placeholder="enter gasttext">
<input type="text" name="ngleft" id="" placeholder="enter ngleft	">
<input type="text" name="ngright" id="" placeholder="enter ngright">
           </div>
           <div class="column">
<input type="text" name="ngno" id="" placeholder="enter ngno">
<input type="text" name="gastnotes" id="" placeholder="enter 	gastnotes	">
<input type="text" name="infotype" id="" placeholder="enter infotype">
<input type="number" name="auth_id" id="" placeholder="enter 	auth_id" required>
           </div>
           <div class="column">
<input type="time" name="time" id="" placeholder="enter 	time" required>
<input type="date" name="date" id="" placeholder="enter date" required>
<input type="text" name="tab" id="" placeholder="enter 	tab	">
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