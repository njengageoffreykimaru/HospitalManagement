<?php

if (isset($_POST['Add'])) {
    $id=$_POST['id'];
    $pid=$_POST['pid'];
    $whyadmited=$_POST['whyadmited'];
    $yourhopes=$_POST['yourhopes'];
    $alone=$_POST['alone'];
    $lwith=$_POST['lwith'];
    $withname=$_POST['withname'];
    $withphone=$_POST['withphone'];
    $transportation=$_POST['transportation'];
    $homehealth=$_POST['homehealth'];
    $initiate=$_POST['initiate'];
    $continue=$_POST['a_continue'];
    $agency=$_POST['agency'];
    $snf=$_POST['snf'];
    $rehab=$_POST['rehab'];
    $inpatient=$_POST['inpatient'];
    $nursinghome=$_POST['nursinghome'];
    $conagain=$_POST['conagain'];
    $agency1=$_POST['agency1'];
    $oxygen=$_POST['oxygen'];
    $equipment=$_POST['equipment'];
    $oth=$_POST['oth'];
    $other=$_POST['other'];
    $added_at=$_POST['added_at'];
    $care=$_POST['care'];
    $gaurdian=$_POST['gaurdian'];
    $gname=$_POST['gname'];
    $gphone=$_POST['gphone'];
    $nursinitiate=$_POST['nursinitiate'];
    $case=$_POST['a_case'];
    $selfcare=$_POST['selfcare'];
    $mobility=$_POST['mobility'];
    $swallowing=$_POST['swallowing'];
    $communication	=$_POST['communication'];
    $cognition=$_POST['cognition'];
    $bowel=$_POST['bowel'];
    $nstatus=$_POST['nstatus'];
    $infection=$_POST['infection'];
    $pain=$_POST['pain'];
    $fluid=$_POST['fluid'];
    $safety=$_POST['safety'];
    $skin=$_POST['skin'];
    $pulmonary=$_POST['pulmonary'];
    $cfunction=$_POST['cfunction'];
    $bariers=$_POST['bariers'];
    $adjustment=$_POST['adjustment'];
    $others=$_POST['others'];
    $equipment1=$_POST['equipment1'];
    $submit=$_POST['submit'];
    $sigtext=$_POST['sigtext'];
    $sigother=$_POST['sigother'];
    $infotype=$_POST['infotype'];
    $auth_id=$_POST['auth_id'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $tab=$_POST['tab'];
    // if ($id !="" && $pid!="" && $whyadmited!="" && $yourhopes !="" && 
    // $alone!="" && $lwith !="" && $withname !="" && $withphone!="" && 
    // $transportation !="" && $homehealth !="" &&  $initiate !=""
    //  && $continue !="" && $agency !="" && 
    //  $snf !="" && $rehab !=""&& 
    //  $inpatient !="" &&$nursinghome !="" 
    //  && $conagain !="" && $agency1 !="" && $oxygen !="" && 
    //  $equipment !="" && $oth !="" && $other !="" &&
    //   $added_at !="" && $care !="" && $gaurdian !="" && 
    //   $gname !="" && $gphone !="" && $nursinitiate !="" && $case !=""  &&
    //    $selfcare !="" && $mobility !="" && $swallowing !="" && 
    //    $communication!="" && $cognition !="" && $bowel !="" && 
    //    $nstatus !="" && $infection !="" && $pain !="" && $fluid !="" &&
    //     $safety !="" && $skin !="" && $pulmonary !="" && 
    //     $cfunction !="" && $bariers !="" && $adjustment !="" 
    //     && $others !="" &&$equipment1 !="" && $submit !="" &&
    //      $sigtext !="" && $sigother !="" && $infotype !="" &&
    //       $auth_id !="" &&  $time !="" && $p_date !="" && $tab !="")   {
        
    
    $sql="INSERT INTO discharge_info(id,pid,whyadmited,yourhopes,
    alone,lwith,withname,withphone,transportation,homehealth,initiate,a_continue,agency,snf,rehab,
    inpatient,nursinghome,conagain,agency1,oxygen,equipment,oth,other,added_at,care,
    gaurdian,gname,gphone,nursinitiate,a_case,selfcare,mobility,swallowing,
    communication,cognition,bowel,nstatus,
    infection,pain,fluid,safety,skin,pulmonary,cfunction,bariers,adjustment,others,equipment1,
    submit,sigtext,sigother,infotype,auth_id,time,date,tab
    )
     VALUES('$id','$pid','$whyadmited','$yourhopes','$alone',
     '$lwith','$withname','$withphone','$transportation','$homehealth',
     '$initiate','$continue','$agency','$snf','$rehab','$inpatient',
     '$nursinghome','$conagain','$agency1','$oxygen','$equipment',
     '$oth','$other','$added_at','$care','$gaurdian','$gname',
     '$gphone','$nursinitiate','$case','$selfcare','$mobility',
     '$swallowing','$communication','$cognition','$bowel',
     '$nstatus','$infection','$pain','$fluid','$safety','$skin',
     '$pulmonary','$cfunction','$bariers','$adjustment','$others',
     '$equipment1','$submit','$sigtext','$sigother','$infotype','$auth_id','$time','$date','$tab')";
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
        <h2>Discharge Info</h2>
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
      <input type="number" name="pid" id="" placeholder="enter pid">
       <input type="text" name="whyadmited" id="" placeholder="enter whyadmited">
        <input type="text" name="yourhopes" id="" placeholder="enter yourhopes">
            </div>
            <div class="column">
         <input type="text" name="alone" id="" placeholder="enter alone">
          <input type="text" name="lwith" id="" placeholder="enter lwith">
          <input type="text" name="withname" id="" placeholder="enter 	withname">
          
          <input type="date" name="withphone" id="" placeholder="enter withphone">
            </div>
            <div class="column">
          <input type="text" name="transportation" id="" placeholder="enter transportation">
          <input type="text" name="homehealth" id="" placeholder="enter homehealth">
          <input type="text" name="initiate" id="" placeholder="enter initiate">
          
          <input type="text" name="a_continue" id="" placeholder="enter continue">
            </div>
            <div class="column">
          <input type="text" name="agency" id="" placeholder="enter agency">
          <input type="text" name="snf" id="" placeholder="enter snf">
          <input type="text" name="rehab" id="" placeholder="rehab">
          <input type="text" name="inpatient" id="" placeholder="enter inpatient">
            </div>
            <div class="column">
          <input type="text" name="nursinghome" id="" placeholder="enter nursinghome">
          <input type="text" name="conagain" id="" placeholder="enter conagain">
          <input type="text" name="agency1" id="" placeholder="enter 	agency1">
          <input type="text" name="oxygen" id="" placeholder="enter oxygen">
            </div>
            <div class="column">
          <input type="text" name="equipment" id="" placeholder="enter equipment">
          <input type="text" name="oth" id="" placeholder="enter oth">
          <input type="text" name="other" id="" placeholder="enter other">
          <input type="time" name="added_at" id="" placeholder="enter added_at">
            </div>
            <div class="column">
          <input type="text" name="care" id="" placeholder="enter care">
          <input type="text" name="gaurdian" id="" placeholder="enter gaurdian">
          <input type="text" name="gname" id="" placeholder="enter gname">
          <input type="text" name="gphone" id="" placeholder="enter gphone">
            </div>
            <div class="column">
          <input type="text" name="nursinitiate" id="" placeholder="enter nursinitiate">
          <input type="text" name="a_case" id="" placeholder="enter d_case">
          <input type="text" name="selfcare" id="" placeholder="enter selfcare">
          <input type="text" name="mobility" id="" placeholder="enter mobility">
            </div>
            <div class="column">
          <input type="text" name="swallowing" id="" placeholder="enter swallowing">
          <input type="text" name="communication" id="" placeholder="enter 	communication">
          <input type="text" name="cognition" id="" placeholder="enter cognition">
          <input type="text" name="bowel" id="" placeholder="enter bowel">
            </div>
            <div class="column">
          <input type="text" name="nstatus" id="" placeholder="enter nstatus">
          <input type="text" name="infection" id="" placeholder="enter infection">
          <input type="text" name="pain" id="" placeholder="enter pain">
          <input type="text" name="fluid" id="" placeholder="enter fluid">
            </div>
            <div class="column">
          <input type="text" name="safety" id="" placeholder="enter d_safety">
          <input type="text" name="skin" id="" placeholder="enter skin">
          <input type="text" name="pulmonary" id="" placeholder="enter pulmonary">
          <input type="text" name="cfunction" id="" placeholder="enter cfunction">
            </div>
            <div class="column">
          <input type="text" name="bariers" id="" placeholder="enter bariers">
          <input type="text" name="adjustment" id="" placeholder="enter adjustment">
          <input type="text" name="others" id="" placeholder="enter others">
          <input type="text" name="equipment1" id="" placeholder="enter equipment1">
            </div>
            <div class="column">
          <input type="text" name="submit" id="" placeholder="enter submit">
          <input type="text" name="sigtext" id="" placeholder="enter sigtext">
          <input type="text" name="sigother" id="" placeholder="enter sigother">
          <input type="text" name="infotype" id="" placeholder="enter infotype">
            </div>
            <div class="column">
          <input type="number" name="auth_id" id="" placeholder="enter auth_id" required>
          <input type="time" name="time" id="" placeholder="enter p_time">
          <input type="date" name="date" id="" placeholder="enter p_date">
          <input type="text" name="tab" id="" placeholder="enter tab">
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