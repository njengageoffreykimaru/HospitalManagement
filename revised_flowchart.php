<?php

if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $patient_id= $_POST['patient_id'];
    $fall = $_POST['fall'];
    $asp = $_POST['asp'];
    $suicide = $_POST['suicide'];
    $others = $_POST['others'];
    $othertext = $_POST['othertext'];
    $swallowing = $_POST['swallowing'];
    $chewing= $_POST['chewing'];
    $anorexia= $_POST['anorexia'];
    $feedingother= $_POST['feedingother'];
    $unknown= $_POST['unknown'];
    $npoa = $_POST['npoa'];
    $poor= $_POST['poor'];
    $fair= $_POST['fair'];
    $good = $_POST['good'];
    $excelent = $_POST['excelent'];
    $chec1= $_POST['chec1'];
    $restriction = $_POST['restriction'];
    $chec2 = $_POST['chec2'];
    $tx1 = $_POST['tx1'];
    $tx2 = $_POST['tx2'];
    $tx3 = $_POST['tx3'];
    $tx4 = $_POST['tx4'];
    $tx5 = $_POST['tx5'];
    $ftube= $_POST['ftube'];
    $jtube = $_POST['jtube'];
    $gtube = $_POST['gtube'];
    $pegtube = $_POST['pegtube'];
    $date =$_POST['date'];
    $time = $_POST['time'];
    $tx6 = $_POST['tx6'];
    $chec3= $_POST['chec3'];
    $chec4 = $_POST['chec4'];
    $chec5 = $_POST['chec5'];
    $chec6 = $_POST['chec6'];
    $chec7= $_POST['chec7'];
    $chec8 = $_POST['chec8'];
    $chec9 = $_POST['chec9'];
    $chec10 = $_POST['chec10'];
    $chec11 = $_POST['chec11'];
    $chec12 = $_POST['chec12'];
    $chec13 = $_POST['chec13'];
    $chec14 = $_POST['chec14'];
    $chec15 = $_POST['chec15'];
    $rightnephrostomy = $_POST['rightnephrostomy'];
    $leftnephrostomy= $_POST['leftnephrostomy'];
    $chec16 = $_POST['chec16'];
    $chec17 = $_POST['chec17'];
    $chec18 = $_POST['chec18'];
    $chec19 = $_POST['chec19'];
    $stoolcount= $_POST['stoolcount'];
    $diarrheatimes = $_POST['diarrheatimes'];
    $flexical = $_POST['flexical'];
    $otherstool = $_POST['otherstool'];
    $submit= $_POST['submit'];
    $infotype= $_POST['infotype'];
    $auth_id= $_POST['auth_id'];
    $tab= $_POST['tab'];

    // if (
    //     $id != "" && $patient_id != "" && $fall != "" && $asp != "" &&
    //     $suicide != "" && $others != "" && $othertext != "" && $swallowing != "" &&
    //     $chewing!= "" && $anorexia != "" && $feedingother != "" &&
    //     $unknown != "" && $npoa != "" &&
    //     $poor != "" && $fair != "" &&
    //     $good!= "" && $excelent != "" &&
    //     $chec1 != "" && $restriction != "" && $che2 != "" &&
    //     $tx1 != "" && $tx2 != "" && $tx3 != "" &&
    //     $tx4 != "" && $tx5 != "" && $tx5 != "" &&
    //     $ftube != "" && $gtube != "" && $pegtube != "" && $date != "" &&
    //     $time != "" && $chec3 != "" && $chec4 != "" &&
    //     $chec5 != "" && $chec6 != "" && $chec7 != "" &&
    //     $chec8 != "" && $chec9 != "" && $chec10!= "" && $chec11 != "" &&
    //     $check12 != "" && $check13 != "" && $check14 != "" &&
    //     $chec15 != "" && $rightnephrostomy!= "" && $leftnephrostomy!= "" &&
    //     $chec17 != "" && $chec18 != "" && $chec19 != "" &&
    //     $stoolcount != "" && $diarrheatimes != "" && $flexical != "" &&
    //     $otherstool != "" && $submit != "" && $infotype != "" && $auth_id!= "" && $tab !=""
    // ) {
        $sql = "INSERT INTO revised_flowchart(id, patient_id,fall, asp,
        suicide, others,othertext, swallowing, chewing, anorexia, feedingother,unknown, npoa,poor,fair,
        good,excelent,chec1,restriction,chec2,tx1,tx2,tx3,tx4,tx5,
        ftube,gtube,pegtube,date,time,chec3,chec4,chec5,
        chec6,chec7,chec8,chec9,
        chec10,chec11,chec12,chec13,
        chec14,chec15,rightnephrostomy,leftnephrostomy,chec16,chec17,chec18,
        chec19,stoolcount,diarrheatimes,flexical,otherstool,submit,infotype,auth_id,tab
        )
        VALUES('$id',' $patient_id','$fall', '$asp',
        '$suicide', '$others','$othertext', '$swallowing',
         '$chewing','$anorexia', '$feedingother','$unknown', '$npoa','$poor','$fair',
        '$good','$excelent','$chec1','$restriction','$chec2','$tx1','$tx2','$tx3','$tx4','$tx5',
        '$ftube','$gtube','$pegtube','$date','$time','$chec3','$chec4','$chec5',
        '$chec6','$chec7','$chec8','$chec9',
        '$chec10','$chec11','$chec12','$chec13',
        '$chec14','$chec15','$rightnephrostomy','$leftnephrostomy','$chec16','$chec17','$chec18',
        '$chec19','$stoolcount','$diarrheatimes','$flexical','$otherstool','$submit','$infotype','$auth_id','$tab')";
        
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
        //           echo "please fill all details";
        //       }
        
        

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
        <h2>Revised Flowchart</h2>
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
            <input type="number" name="patient_id" id="" placeholder="enter patient_id">
            <input type="text" name="fall" id="" placeholder="enter fall">
            <input type="text" name="asp" id="" placeholder="enter asp">
            </div>
            <div class="column">
            <input type="text" name="suicide" id="" placeholder="enter suicide">
            <input type="text" name="others" id="" placeholder="enter others">
            <input type="text" name="othertext" id="" placeholder="enter othertext">
            <input type="text" name="swallowing" id="" placeholder="enter 	swallowing">
            </div>
            <div class="column">
            <input type="text" name="chewing" id="" placeholder="enter chewing">
            <input type="text" name="anorexia" id="" placeholder="enter anorexia">
            <input type="text" name="feedingother" id="" placeholder="feedingother">

            <input type="text" name="unknown" id="" placeholder="enter unknown">
            </div>
            <div class="column">
            <input type="text" name="npoa" id="" placeholder="enter npoa">
            <input type="text" name="poor" id="" placeholder="enter poor">
            <input type="text" name="fair" id="" placeholder="fair">
            <input type="text" name="good" id="" placeholder="enter good">
            </div>
            <div class="column">
            <input type="text" name="excelent" id="" placeholder="enter 	excelent">
            <input type="text" name="chec1" id="" placeholder="enter chec1">
            <input type="text" name="restriction" id="" placeholder="enter restriction">
            <input type="text" name="chec2" id="" placeholder="enter chec2">
            </div>
            <div class="column">
            <input type="text" name="tx1" id="" placeholder="enter tx1">
            <input type="text" name="tx2" id="" placeholder="enter tx2">
            <input type="text" name="tx3" id="" placeholder="enter 	tx3">
            <input type="text" name="tx4" id="" placeholder="enter tx4">
            </div>
            <div class="column">
            <input type="text" name="tx5" id="" placeholder="enter tx5">
            <input type="text" name="ftube" id="" placeholder="enter ftube">
            <input type="text" name="jtube" id="" placeholder="enter jtube">
            <input type="text" name="gtube" id="" placeholder="enter gtube">
            </div>
            <div class="column">
            <input type="text" name="pegtube" id="" placeholder="enter pegtube">
            <input type="date" name="date" id="" placeholder="enter date">
            <input type="time" name="time" id="" placeholder="enter time">
            <input type="text" name="tx6" id="" placeholder="enter tx6">
            </div>
            <div class="column">
            <input type="text" name="chec3" id="" placeholder="enter chec3">
            <input type="text" name="chec4" id="" placeholder="enter chec4">
            <input type="text" name="chec5" id="" placeholder="enter chec5">
            <input type="text" name="chec6" id="" placeholder="enter chec6">
            </div>
            <div class="column">
            <input type="text" name="chec7" id="" placeholder="enter chec7">
            <input type="text" name="chec8" id="" placeholder="enter chec8">
            <input type="text" name="chec9" id="" placeholder="enter chec9">
            <input type="text" name="chec10" id="" placeholder="enter chec10">
            </div>
            <div class="column">
            <input type="text" name="chec11" id="" placeholder="enter chec11">
            <input type="text" name="chec12" id="" placeholder="enter 	chec12">
            <input type="text" name="chec13" id="" placeholder="enter chec13">
            <input type="text" name="chec14" id="" placeholder="enter chec14">
            </div>
            <div class="column">
            <input type="text" name="chec15" id="" placeholder="enter chec15">
            <input type="text" name="rightnephrostomy" id="" placeholder="enter rightnephrostomy">
            <input type="text" name="leftnephrostomy" id="" placeholder="enter leftnephrostomy">
            <input type="text" name="chec16" id="" placeholder="enter chec16">
            </div>
            <div class="column">
            <input type="text" name="chec17" id="" placeholder="enter chec17">
            <input type="text" name="chec18" id="" placeholder="enter chec18">
            <input type="text" name="chec19" id="" placeholder="enter chec19">
            <input type="text" name="stoolcount" id="" placeholder="enter stoolcount">
            </div>
            <div class="column">
            <input type="number" name="diarrheatimes" id="" placeholder="enter diarrheatimes">
            <input type="text" name="flexical" id="" placeholder="enter flexical">
            <input type="text" name="otherstool" id="" placeholder="enter otherstool">
            <input type="text" name="submit" id="" placeholder="enter submit">
            </div>
            <div class="column">

            <input type="text" name="infotype" id="" placeholder="enter infotype">
            <input type="text" name="auth_id" id="" placeholder="enter auth_id">
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
