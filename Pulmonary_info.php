<?php

if (isset($_POST['Add'])) {
    
    $pid=$_POST['pid'];
    $nasal=$_POST['nasal'];
    $sob=$_POST['sob'];
    $trach=$_POST['trach'];
    $ett=$_POST['ett'];
    $o2=$_POST['o2'];
    $bipap=$_POST['bipap'];
    $breather=$_POST['breather'];
    $mask=$_POST['mask'];
    $collar=$_POST['collar'];
    $labored=$_POST['labored'];
    $clear1=$_POST['clear1'];
    $clear2=$_POST['clear2'];
    $clear3=$_POST['clear3'];
    $clear4=$_POST['clear4'];
    $clear5=$_POST['clear5'];
    $coarse1=$_POST['coarse1'];
    $coarse2=$_POST['coarse2'];
    $coarse3=$_POST['coarse3'];
    $coarse4=$_POST['coarse4'];
    $coarse5=$_POST['coarse5'];
    $crackles1=$_POST['crackles1'];
    $crackles2=$_POST['crackles2'];
    $crackles3=$_POST['crackles3'];
    $crackles4=$_POST['crackles4'];
    $crackles5=$_POST['crackles5'];
    $rhonchi1=$_POST['rhonchi1'];
    $rhonchi2=$_POST['rhonchi2'];
    $rhonchi3=$_POST['rhonchi3'];
    $rhonchi4=$_POST['rhonchi4'];
    $rhonchi5=$_POST['rhonchi5'];
    $wheeze1=$_POST['wheeze1'];
    $wheeze2=$_POST['wheeze2'];
    $wheeze3=$_POST['wheeze3'];
    $wheeze4=$_POST['wheeze4'];
    $wheeze5=$_POST['wheeze5'];
    $absent1=$_POST['absent1'];
    $absent2=$_POST['absent2'];
    $absent3=$_POST['absent3'];
    $absent4=$_POST['absent4'];
    $absent5=$_POST['absent5'];
    $diminished1=$_POST['diminished1'];
    $diminished2=$_POST['diminished2'];
    $diminished3=$_POST['diminished3'];
    $diminished4=$_POST['diminished4'];
    $diminished5=$_POST['diminished5'];
    $rub1=$_POST['rub1'];
    $rub2=$_POST['rub2'];
    $rub3=$_POST['rub3'];
    $rub4=$_POST['rub4'];
    $rub5=$_POST['rub5'];
    $other1=$_POST['other1'];
    $other2=$_POST['other2'];
    $other3=$_POST['other3'];
    $other4=$_POST['other4'];
    $other5=$_POST['other5'];
    $ettsize=$_POST['ettsize'];
    $trachsize=$_POST['trachsize'];
    $o2amount=$_POST['o2amount'];
    $via=$_POST['via'];
    $nonpeoductive=$_POST['nonpeoductive'];
    $mode=$_POST['mode'];
    $rate=$_POST['rate'];
    $fiotwo=$_POST['fiotwo'];
    $peep=$_POST['peep'];
    $vt=$_POST['vt'];
    $ps=$_POST['ps'];
    $trackand=$_POST['trackand'];
    $added_at=$_POST['added_at'];
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
    $chlast=$_POST['chlast'];
    $quantity=$_POST['quantity'];
    $pulnotes=$_POST['pulnotes'];
    $infotype=$_POST['infotype'];
    $auth_id=$_POST['auth_id'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $tab=$_POST['tab'];
    
    
    
   
    // if ($id !="" && $pid !="" && $nasal !="" && $sob!="" && $trach !="" 
    // && $ett !="" && $o2 !="" && $bipap!=""&& $breather !="" &&  $mask="" 
    // && $collar !="" && $labored !='' && $clear1 !=''
    // && $clear2!=''&& $clear3 !=''&& 
    // $clear4 !=''&& $clear5 !=''&& $coarse1 !=''
    // && $coarse2 !=''&& $coarse3 !=''&& $coarse4!=''&& $coarse5 !=''&& $crackles1 !=''&& $crackles2 !=''&& $crackles3 !=''&& $crackles4 !=''&& $crackles5 !=''
    // && $rhonchi1 !='' && $rhonchi2 !='' && $rhonchi3 !='' && $rhonchi4 !='' && $rhonchi5 !='' && $wheeze1 !=''&& $wheeze2 !=''&& $wheeze3 !=''&& $wheeze4 !=''&& $wheeze5 !=''
    // && $absent1 !='' && $absent2 !=''  && $absent3 !='' && $absent4 !='' && $absent5 !='' && $diminished1!= ''&& $diminished2!= ''&& $diminished3!= ''&& $diminished4!= ''&& $diminished5!= ''
    // && $rub1!= ''&& $rub2!= ''&& $rub3!= ''&& $rub4!= ''&& $rub5!= ''&& $other1!= ''&& $other2!= ''&& $other3!= ''&& $other4!= ''&& $other5!= '' && $ettsize != '' 
    // && $trachsize!= ''&& $o2amount!= '' && $via != ''&& $nonpeoductive!= ''&& $mode!= ''&& $rate!= ''&& $fiotwo!= ''&&
    //  $peep!= ''&& $vt!= ''&& $ps!= ''&& $trackand!= '' && $ch1!= ''&& $ch2!= '' && $ch3 != ''&& $ch4= ''&& $ch5!= '' && $ch6 != ''  && $ch7!= ''&& $ch8!= '' &&
    //  $ch9 != ''&& $ch10= ''&& $ch11!= '' && $ch12 != ''&& $ch13!= ''&& $ch14!= ''
    //   && $ch15 != ''&& $ch16= ''&& $ch17!= '' && 
    //  $ch18 != '' && $ch19 != ''&& $ch20= ''&& $ch21!= '' && $ch22 != '' && $ch23!='' &&
    //  $chlast !='' && $quantity!='' && $pulnotes!= '' && $infotype!= '' && 
    //  $auth_id!= '' && $time!='' && $date!=''&& $tab!=''){

     
    
    
        $sql = "INSERT INTO pulmonary_info(pid,nasal,sob,trach,ett,o2, 
        bipap,breather,mask,collar,labored,
        clear1,clear2,clear3,clear4,clear5,coarse1,coarse2,coarse3,coarse4,coarse5,
         crackles1, crackles2, crackles3, crackles4,
        crackles5, rhonchi1, rhonchi2, rhonchi3, rhonchi4, rhonchi5, wheeze1,
         wheeze2, wheeze3, wheeze4, wheeze5, absent1, absent2, absent3,
        absent4, absent5, diminished1, diminished2, diminished3, diminished4, 
        diminished5, rub1, rub2, rub3, rub4, rub5, other1, other2,
        other3, other4, other5, ettsize, trachsize, o2amount, via, nonpeoductive, 
        mode, rate, fiotwo, peep, vt, ps, trackand, ch1, ch2, ch3,
        ch4, ch5, ch6, ch7, ch8, ch9, ch10, ch11, ch12, ch13, ch14, ch15,
         ch16, ch17, ch18, ch19, ch20, ch21, ch22, ch23, chlast,
        quantity, pulnotes, infotype,auth_id, date, time, tab)
    VALUES ('$pid','$nasal', '$sob', '$trach', '$ett', '$o2', '$bipap', 
    '$breather', '$mask', '$collar', '$labored',
        '$clear1', '$clear2', '$clear3', '$clear4', '$clear5', 
        '$coarse1', '$coarse2', '$coarse3', '$coarse4', '$coarse5',
        '$crackles1', '$crackles2', '$crackles3', '$crackles4', 
        '$crackles5', '$rhonchi1', '$rhonchi2', '$rhonchi3', '$rhonchi4',
        '$rhonchi5', '$wheeze1', '$wheeze2', '$wheeze3', '$wheeze4', '$wheeze5',
         '$absent1', '$absent2', '$absent3', '$absent4',
        '$absent5', '$diminished1', '$diminished2', '$diminished3', '$diminished4', 
        '$diminished5', '$rub1', '$rub2', '$rub3',
        '$rub4', '$rub5', '$other1', '$other2', '$other3', '$other4', '$other5', 
        '$ettsize', '$trachsize', '$o2amount', '$via',
        '$nonpeoductive', '$mode', '$rate', '$fiotwo', '$peep', '$vt', '$ps', 
        '$trackand', '$ch1', '$ch2', '$ch3', '$ch4', '$ch5',
        '$ch6', '$ch7', '$ch8', '$ch9', '$ch10', '$ch11', '$ch12', '$ch13', '$ch14', 
        '$ch15', '$ch16', '$ch17', '$ch18', '$ch19',
        '$ch20', '$ch21', '$ch22', '$ch23', '$chlast', '$quantity', '$pulnotes', 
        '$infotype', '$auth_id', '$time', '$date', '$time', '$tab')";
    
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
        <h2>Pulmonary info</h2>
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
            
             <!-- <input type="number" name="id" id="" placeholder="enter id"> -->
             <div class="column">
      <input type="number" name="pid" id="" placeholder="enter patient id">
       <input type="text" name="nasal" id="" placeholder="enter your nasal">
        <input type="text" name="sob" id="" placeholder="sob">
         <input type="text" name="trach" id="" placeholder="trach">
             </div>
             <div class="column">
          <input type="text" name="ett" id="" placeholder="ett">
          <input type="text" name="o2" id="" placeholder="enter o2">
          <input type="text" name="bipap" id="" placeholder="enter bipad">
          <input type="text" name="breather" id="" placeholder="enter breather">
             </div>
             <div class="column">
    
          <input type="text" name="mask" id="" placeholder="enter mask ">
          <input type="text" name="collar" id="" placeholder=" enter collor">
          <input type="text" name="labored" id="" placeholder="enter labored ">
          <input type="text" name="clear1" id="" placeholder=" enter clear1">
             </div>
             <div class="column">
          <input type="text" name="clear2" id="" placeholder="enter clear2 ">
          <input type="text" name="clear3" id="" placeholder=" enter clear3">
          <input type="text" name="clear4" id="" placeholder="enter clearance 4 ">
          <input type="text" name="clear5" id="" placeholder=" enter clearance5">
             </div>
             <div class="column">
          <input type="text" name="coarse1" id="" placeholder="enter coarse1 ">
          <input type="text" name="coarse2" id="" placeholder=" enter coarse2">
          <input type="text" name="coarse3" id="" placeholder="enter coarse3 ">
          <input type="text" name="coarse4" id="" placeholder=" enter coarse4">
             </div>
          <div class="column">
          <input type="text" name="coarse5" id="" placeholder="enter coarse5 ">
          <input type="text" name="crackles1" id="" placeholder=" enter crackles1">
          <input type="text" name="crackles2" id="" placeholder="enter crackles2 ">
          <input type="text" name="crackles3" id="" placeholder=" enter crackles3">
          </div>
          <div class="column">
          <input type="text" name="crackles4" id="" placeholder="enter crackles4 ">
          <input type="text" name="crackles5" id="" placeholder=" enter crackles5">
          <input type="text" name="rhonchi1" id="" placeholder="enter rhonchi1">
          <input type="text" name="rhonchi2" id="" placeholder=" enter rhonchi2">
          </div>
          <div class="column">
          <input type="text" name="rhonchi3" id="" placeholder="enter rhonchi3 ">
          <input type="text" name="rhonchi4" id="" placeholder=" enter rhonchi4">
          <input type="text" name="rhonchi5" id="" placeholder="enter rhonchi5">
          <input type="text" name="wheeze1" id="" placeholder=" enter wheeze1">
          </div>
          <div class="column">
          <input type="text" name="wheeze2" id="" placeholder="enter wheeze2 ">
          <input type="text" name="wheeze3" id="" placeholder=" enter wheeze3">
          <input type="text" name="wheeze4" id="" placeholder=" enter wheeze4">
          <input type="text" name="wheeze5" id="" placeholder="enter wheeze5 ">
          </div>
          <div class="column">
          <input type="text" name="absent1" id="" placeholder=" enter absent1">
          <input type="text" name="absent2" id="" placeholder="enter absent2 ">
          <input type="text" name="absent3" id="" placeholder=" enter absent3">
          <input type="text" name="absent4" id="" placeholder="enter absent4">
          </div>
          <div class="column">
          <input type="text" name="absent5" id="" placeholder=" enter absent5">
          <input type="text" name="diminished1" id="" placeholder="enter diminished1">
          <input type="text" name="diminished2" id="" placeholder=" enter diminished2">
          <input type="text" name="diminished3" id="" placeholder="enter diminished3 ">
          </div>
          <div class="column">
          <input type="text" name="diminished4" id="" placeholder=" enter diminished4">
          <input type="text" name="diminished5" id="" placeholder="enter diminished5">
          <input type="text" name="rub1" id="" placeholder=" enter rub1">
          <input type="text" name="rub2" id="" placeholder="enter rub2 ">
          </div>
          <div class="column">
          <input type="text" name="rub3" id="" placeholder=" enter rub3">
         
          <input type="text" name="rub4" id="" placeholder="enter rub4 ">
          <input type="text" name="rub5" id="" placeholder=" enter rub5">
          <input type="text" name="other1" id="" placeholder="enter other1">
          </div>
          <div class="column">
          <input type="text" name="other2" id="" placeholder=" enter other2">
          <input type="text" name="other3" id="" placeholder="enter other3 ">
          <input type="text" name="other4" id="" placeholder=" enter other4">
          <input type="text" name="other5" id="" placeholder="enter other5">
          </div>
          <div class="column">
          <input type="text" name="ettsize" id="" placeholder=" enter ettsize">
          <input type="text" name="trachsize" id="" placeholder="enter trachsize ">
          <input type="text" name="o2amount" id="" placeholder=" enter o2amount">
          <input type="text" name="via" id="" placeholder=" enter via">
          </div>
          <div class="column">
          <input type="text" name="nonpeoductive" id="" placeholder="enter nonpeoductive ">
          <input type="text" name="mode" id="" placeholder=" enter mode">
          <input type="text" name="rate" id="" placeholder="enter rate ">
          <input type="text" name="fiotwo" id="" placeholder=" enter flotwo">
          </div>
          <div class="column">
          <input type="text" name="peep" id="" placeholder="enter peep">
          <input type="text" name="vt" id="" placeholder=" enter vt">
          <input type="text" name="ps" id="" placeholder="enter diminished1">
          <input type="text" name="trackand" id="" placeholder=" enter trackand">
          </div>
          <div class="column">
          <input type="time" name="added_at" id="" placeholder="enter time added_T ">
          <input type="text" name="ch1" id="" placeholder=" enter ch1">
          <input type="text" name="ch2" id="" placeholder="enter ch2">
          <input type="text" name="ch3" id="" placeholder=" enter ch3">
          </div>
          <div class="column">
          <input type="text" name="ch4" id="" placeholder="enter ch4 ">
          <input type="text" name="ch5" id="" placeholder=" enter ch5">
          <input type="text" name="ch6" id="" placeholder="enter ch6 ">
          <input type="text" name="ch7" id="" placeholder=" enter ch7">
          </div>
          <div class="column">
          <input type="text" name="ch8" id="" placeholder="enter ch8">
          <input type="text" name="ch9" id="" placeholder=" enter ch9">
          <input type="text" name="ch10" id="" placeholder="enter ch10 ">
          <input type="text" name="ch11" id="" placeholder=" enter ch11">
          </div>
          <div class="column">
         
          <input type="text" name="ch12" id="" placeholder="enter ch12 ">
          <input type="text" name="ch13" id="" placeholder=" enter ch13">
          <input type="text" name="ch14" id="" placeholder="enter ch14">
          <input type="text" name="ch15" id="" placeholder=" enter ch15">
          </div>
          <div class="column">
          <input type="text" name="ch16" id="" placeholder="enter ch16 ">
          <input type="text" name="ch17" id="" placeholder=" enter ch17">
         
          <input type="text" name="ch18" id="" placeholder="enter time ch18">
          <input type="text" name="ch19" id="" placeholder=" enter ch19">
          </div>
          <div class="column">
          <input type="text" name="ch20" id="" placeholder="enter ch20">
          
          <input type="text" name="ch21" id="" placeholder=" enter ch21">
         
          <input type="text" name="ch22" id="" placeholder="enter ch22 ">
          <input type="text" name="ch23" id="" placeholder=" enter ch23">
          </div>


          <div class="column">
         
          <input type="text" name="chlast" id="" placeholder="enter chlast ">
          <input type="text" name="quantity" id="" placeholder=" enter quantity">
          <input type="text" name="pulnotes" id="" placeholder="enter pulnotes">
          <input type="text" name="infotype" id="" placeholder=" enter infotype">
          </div>
          <div class="column">
          <input type="number" name="auth_id" id="" placeholder="enter auth_id ">
          <input type="text" name="time" id="" placeholder=" enter time">
         
          <input type="text" name="date" id="" placeholder="enter date ">
          <input type="text" name="tab" id="" placeholder=" enter tab">
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


