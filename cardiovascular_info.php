



<?php

if (isset($_POST['Add'])) {
    $id=$_POST['id'];
    $pid=$_POST['pid'];
    $regular=$_POST['regular'];
    $strong = $_POST['strong'];
    $weak=$_POST['weak'];
    $other=$_POST['other'];
    $pink=$_POST['pink'];
    $dusky=$_POST['dusky'];
    $cyanotic=$_POST['cyanotic'];
    $clubbing=$_POST['clubbing'];
    $refill = $_POST['refill'];
    $location = $_POST['location'];
    $ted=$_POST['ted'];
    $scd=$_POST['scd'];
    $telemetry = $_POST['telemetry'];
    $pace = $_POST['pace'];
    $added_at = $_POST['added_at'];
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
    $telecheck=$_POST['telecheck'];
    $cardiaccheck=$_POST['cardiaccheck'];
    $cardia=$_POST['cardia'];
    $pacecheck=$_POST['pacecheck'];
    $cardother=$_POST['cardother'];
    $cardtext=$_POST['cardtext'];
    $paceother=$_POST['paceother'];
    $pacetext=$_POST['pacetext'];
    $tedyes=$_POST['tedyes'];
    $tedno=$_POST['tedno'];
    $scdyes=$_POST['scdyes'];
    $scdno=$_POST['scdno'];
    $abc=$_POST['abc'];
    $irregular=$_POST['irregular'];
    $infotype=$_POST['infotype'];
    $auth_id=$_POST['auth_id'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $tab=$_POST['tab'];

    // if ($id !="" && $pid !="" && $regular="" && $strong  !="" && 
    // $weak!="" && $others!="" && $pink !="" && $dusky!="" && $cyanotic !="" && $clubbing !=""
    //  && $refill !="" && $location !="" && $ted !="" && $scd !="" && $teremetry !="" 
    //  && $pace !="" && $added_ats !="" &&
    //   $ch1 !="" && $ch2 !="" && $ch3 !="" && $ch4 !="" &&$ch5 !=""  && $ch6  && $ch7 !="" && $ch8 !="" && $ch9 !="" &&$ch10 !=""  
    //   && $ch11  && $ch12 !="" && $ch13 !="" && $ch14 !="" && $ch15!=""  && $ch16  && $ch17 !="" && $ch18 !="" && $ch19 !="" && $ch20 !=""  && $ch21 && $ch22 !="" && $ch23
    //   && $ch23 !="" && $ch24 !="" && $ch25 !="" && $ch26 !=""  && $ch27 && $ch28 !=""
    //    && $ch29 !="" && $ch30 !="" && $ch31 !=""  && $ch32 !=""  && $ch33!="" && $ch34 !="" && $ch35!="" && $ch36 !="" && $ch37 !="" 
    //    && $ch38 !="" && $ch39 !="" && $ch40 !=""  && $ch41 !="" && $ch42 !="" && $telecheck!=""  && $cardiaccheck !="" && $cardia !=""
    //    && $pacecheker4 !="" && $cardother!=""  && $cardtext !=""
    //    && $paceothe !="" && $pacetext !="" && $tedyes !=""  && $tedno  && $scdyes !="" && $scdno !="" && $abc !="" &&
    // $auth_id!="" && $abc !="" && $irregular !=""  && $infotype !=""  && $auth_id!="" && $time!=""&& $date!=""  && $tab !="")
    //    {
        
    
    $sql="INSERT INTO cardiovascular_info(id,pid,regular,strong,weak,other,pink,
    dusky,cyanotic,clubbing,refill,location,ted,scd,telemetry,pace,added_at,
    ch1,ch2,ch3,ch4,ch5,ch6,ch7,ch8,ch9,ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,ch18,ch19,ch20,ch21,ch22,
    ch23,ch24,ch25,ch26,ch27,ch28,ch29,ch30,ch31,ch32,ch33,ch34,ch35,ch36,ch37,ch38,ch39,ch40,ch41,ch42,
    telecheck,cardiaccheck,cardia,pacecheck,cardother,cardtext,paceother,pacetext,tedyes,tedno,scdyes,scdno,abc,
    irregular,infotype,auth_id,time,date,tab)
     VALUES('$id','$pid','$regular','$strong','$weak','$other','$pink','$dusky','$cyanotic','$clubbing','$refill','$location',
     '$ted','$scd','$telemetry','$pace','$added_at','$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$ch7','$ch8','$ch9','$ch10','$ch11',
     '$ch12','$ch13','$ch14','$ch15','$ch16','$ch17','$ch18','$ch19','$ch20','$ch21','$ch22','$ch23','$ch24','$ch25','$ch26','$ch27',
     '$ch28','$ch29','$ch30','$ch31','$ch32','$ch33','$ch34','$ch35','$ch36','$ch37','$ch38','$ch39','$ch40','$ch41','$ch42','$telecheck',
     '$cardiaccheck','$cardia','$pacecheck','$cardother','$cardtext','$paceother','$pacetext','$tedyes','$tedno',
     '$scdyes','$scdno','$abc',
     '$irregular','$infotype','$auth_id','$time','$date','$tab')";
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
        <h2>Cardiovascular_info</h2>
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
       <input type="text" name="regular" id="" placeholder="enter your reqular">
        <input type="text" name="strong" id="" placeholder="enter your strong point">
            </div>
            <div class="column">
         <input type="text" name="weak" id="" placeholder="enter weak">
          <input type="text" name="other" id="" placeholder="others	">
          <input type="text" name="pink" id="" placeholder="enter pink">
          <input type="text" name="dusky" id="" placeholder="enter dusky">
            </div>
            <div class="column">
          <input type="text" name="cyanotic" id="" placeholder="enter cyanotic">
          <input type="text" name="clubbing" id="" placeholder="enter clubbing">
          <input type="text" name="refill" id="" placeholder="enter refill">
      <input type="text" name="location" id="" placeholder="enter location ">
            </div>
            <div class="column">
       <input type="text" name="ted" id="" placeholder="enter ted">
        <input type="text" name="scd" id="" placeholder="enter scd">
         <input type="text" name="telemetry" id="" placeholder="enter telemetry">
          <input type="text" name="pace" id="" placeholder="enter space">
            </div>
            <div class="column">
          <input type="time" name="added_at" id="" placeholder="enter time added">
          <input type="text" name="ch1" id="" placeholder="enter ch1">
          <input type="text" name="ch2" id="" placeholder="enter ch2">
          <input type="text" name="ch3" id="" placeholder="enter ch3">
            </div>
            <div class="column">
          <input type="text" name="ch4" id="" placeholder="enter ch4">
          <input type="text" name="ch5" id="" placeholder="enter ch5">
          <input type="text" name="ch6" id="" placeholder="enter ch6">
          <input type="text" name="ch7" id="" placeholder="enter ch7">
            </div>
            <div class="column">
          <input type="text" name="ch8" id="" placeholder="enter ch8">
          <input type="text" name="ch9" id="" placeholder="enter ch9">
          <input type="text" name="ch10" id="" placeholder="enter ch10">
          <input type="text" name="ch11" id="" placeholder="enter ch11">
            </div>
            <div class="column">
          <input type="text" name="ch12" id="" placeholder="enter ch12">
          <input type="text" name="ch13" id="" placeholder="enter ch13">
          <input type="text" name="ch14" id="" placeholder="enter ch14">
          <input type="text" name="ch15" id="" placeholder="enter ch15">
            </div>
            <div class="column">
          <input type="text" name="ch16" id="" placeholder="enter ch16">
          <input type="text" name="ch17" id="" placeholder="enter ch17">
          <input type="text" name="ch18" id="" placeholder="enter ch18">
          <input type="text" name="ch19" id="" placeholder="enter ch19">
            </div>
            <div class="column">
          <input type="text" name="ch20" id="" placeholder="enter ch20">
          <input type="text" name="ch21" id="" placeholder="enter ch21">
          <input type="text" name="ch22" id="" placeholder="enter ch22">
          <input type="text" name="ch23" id="" placeholder="enter ch23">
            </div>
            <div class="column">
          <input type="text" name="ch24" id="" placeholder="enter ch24">
          <input type="text" name="ch25" id="" placeholder="enter ch25">
          <input type="text" name="ch26" id="" placeholder="enter ch26">
          <input type="text" name="ch27" id="" placeholder="enter ch27">
            </div>
            <div class="column">
          <input type="text" name="ch28" id="" placeholder="enter ch28">
          <input type="text" name="ch29" id="" placeholder="enter ch29">
          <input type="text" name="ch30" id="" placeholder="enter ch30">
          <input type="text" name="ch31" id="" placeholder="enter ch31">
            </div>
            <div class="column">
          <input type="text" name="ch32" id="" placeholder="enter ch32">
          <input type="text" name="ch33" id="" placeholder="enter ch33">
          <input type="text" name="ch34" id="" placeholder="enter ch34">
          <input type="text" name="ch35" id="" placeholder="enter ch35">
            </div>
            <div class="column">
          <input type="text" name="ch36" id="" placeholder="enter ch36">
          <input type="text" name="ch37" id="" placeholder="enter ch37">
          <input type="text" name="ch38" id="" placeholder="enter ch38">
          <input type="text" name="ch39" id="" placeholder="enter ch39">
            </div>
            <div class="column">
          <input type="text" name="ch40" id="" placeholder="enter ch40">
          <input type="text" name="ch41" id="" placeholder="enter ch41">
          <input type="text" name="ch42" id="" placeholder="enter ch42">
          
          <input type="text" name="telecheck" id="" placeholder="enter telecheck">
            </div>
            <div class="column">
          <input type="text" name="cardiaccheck" id="" placeholder="enter cardiaccheck">
          <input type="text" name="cardia" id="" placeholder="enter cardia">
          <input type="text" name="pacecheck" id="" placeholder="enter pacecheck">
          <input type="text" name="cardother" id="" placeholder="cardother">
            </div>
            <div class="column">
          <input type="text" name="cardtext" id="" placeholder=" cardtext">
        <input type="text" name="paceother" id="" placeholder=" paceother">
        <input type="text" name="pacetext" id="" placeholder=" pacetext">
        <input type="text" name="tedyes" id="" placeholder=" tedyes">
            </div>
            <div class="column">
        <input type="text" name="tedno" id="" placeholder="tedno">
        <input type="text" name="scdyes" id="" placeholder="scdyes">
        <input type="text" name="scdno" id="" placeholder="scdno">
        <input type="text" name="abc" id="" placeholder="abc">
</div>
<div class="column">
        <input type="text" name="irregular" id="" placeholder="irregular">
        <input type="text" name="infotype" id="" placeholder=" infotype ">
        <input type="number" name="auth_id" id="" placeholder="auth_id"required>
        <input type="text" name="time" id="" placeholder=" time ">
</div>
<div class="column">
        <input type="text" name="date" id="" placeholder="date">
        <input type="text" name="tab" id="" placeholder=" tab ">
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