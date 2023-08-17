<?php

if (isset($_POST['Add'])) {
    $id=$_POST['id'];
    $pid=$_POST['pid'];
    $treatement=$_POST['treatement'];
    $relief=$_POST['relief'];
    $ty1=$_POST['ty1'];
    $lo1=$_POST['lo1'];
  
    $ra1=$_POST['ra1'];
    $go1=$_POST['go1'];
    $de1=$_POST['de1'];
    $on1=$_POST['on1'];
    $pr1=$_POST['pr1'];
    $re1=$_POST['re1'];
    $ty3=$_POST['ty3'];
    $lo3=$_POST['lo3'];
    $ra3=$_POST['ra3'];
    $go3=$_POST['go3'];

    $de3=$_POST['de3'];
    $on3=$_POST['on3'];
    $pr3=$_POST['pr3'];
    $re2=$_POST['re2'];
    $o1=$_POST['o1'];
    $o2=$_POST['o2'];
    $o3=$_POST['o3'];
    $o4=$_POST['o4'];
    $o5=$_POST['o5'];
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];
    $c4=$_POST['c4'];
    $c5=$_POST['c5'];
    $c6=$_POST['c6'];
    $c7=$_POST['c7'];
    $c8=$_POST['c8'];
    $c9	=$_POST['c9'];
    $c10=$_POST['c10'];
    $c11=$_POST['c11'];
    $c12=$_POST['c12'];
    $c13=$_POST['c13'];
    $c14=$_POST['c14'];
    $c15=$_POST['c15'];

    $time=$_POST['time'];
    $date=$_POST['date'];
    $auth_id=$_POST['auth_id'];
    $infotype=$_POST['infotype'];
    
    if ($id !="" && $pid!="")  {
        
    
    $sql="INSERT INTO pain_assessment(id,pid,treatement,relief,ty1,lo1,ra1,go1,de1,
   on1,	pr1,re1,ty3,lo3,ra3,go3,de3,on3,pr3,re2,
   o1,o2,o3,o4,o5,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,
   c11,c12,c13,c14,c15,time,date,auth_id,infotype)
     VALUES('$id','$pid','$treatement','$relief','$ty1','$lo1','$ra1','$go1','$de1',
   '$on1',	'$pr1','$re1','$ty3','$lo3','$ra3','$go3','$de3','$on3','$pr3','$re2',
   '$o1','$o2','$o3','$o4','$o5','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10',
   '$c11','$c12','$c13','$c14','$c15','$time','$date','$auth_id','$infotype')";
include_once('dbcon.php');
$query = mysqli_query($con, $sql) or die("Failed to insert data into the database: " . mysqli_error($con));

if ($query) {
    echo " Register successfull";

  
}
    }
    else {
        echo "please fill all details";
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
        <h2>Pain Assessment</h2>
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
       <input type="text" name="treatement" id="" placeholder="	treatement">
        <input type="text" name="relief" id="" placeholder="relief">
            </div>
            <div class="column">
         <input type="text" name="ty1" id="" placeholder="enter ty1">
          <input type="text" name="lo1" id="" placeholder="enter 		lo1">
          <input type="text" name="ra1" id="" placeholder="enter ra1">
          
          <input type="text" name="go1" id="" placeholder="enter 	go1">
            </div>
            <div class="column">
          <input type="text" name="de1" id="" placeholder="de1">
         
          <input type="text" name="on1" id="" placeholder="enter on1">
          <input type="text" name="pr1" id="" placeholder="enter pr1">
          <input type="text" name="re1" id="" placeholder="enter re1">
            </div>
            <div class="column">
          
          <input type="text" name="ty3" id="" placeholder="enter ty3">
          <input type="text" name="lo3" id="" placeholder="enter 	lo3">
          <input type="text" name="ra3" id="" placeholder="enter 	ra3">
          <input type="text" name="go3" id="" placeholder="enter 		go3">
            </div>
            <div class="column">
          <input type="text" name="de3" id="" placeholder="enter 	de3">
          <input type="text" name="on3" id="" placeholder="enter on3">
          <input type="text" name="pr3" id="" placeholder="enter pr3">
          <input type="text" name="re2" id="" placeholder="enter 	re2">
            </div>
            <div class="column">
          <input type="text" name="o1" id="" placeholder="enter 	o1">
          <input type="text" name="o2" id="" placeholder="enter 	o2">
          <input type="text" name="o3" id="" placeholder="enter 	o3">
          <input type="text" name="o4" id="" placeholder="enter 	o4">
            </div>
            <div class="column">
          <input type="text" name="o5" id="" placeholder="enter 	o5">
          <input type="text" name="c1" id="" placeholder="enter 	c1">
          <input type="text" name="c2" id="" placeholder="enter c2">
          <input type="text" name="c3" id="" placeholder="enter c3">
            </div>
            <div class="column">
          <input type="text" name="c4" id="" placeholder="enter 		c4">
          <input type="text" name="c5" id="" placeholder="enter 	c5">
          <input type="text" name="c6" id="" placeholder="enter c6">
          <input type="text" name="c7" id="" placeholder="enter 	c7">
            </div>
            <div class="column">
          <input type="text" name="c8" id="" placeholder="enter c8">
          <input type="text" name="c9" id="" placeholder="enter c9">
          <input type="text" name="c10" id="" placeholder="enter c10">
          <input type="text" name="c11" id="" placeholder="enter c11">
            </div>
            <div class="column">
          <input type="text" name="c12" id="" placeholder="enter 	c12">
          <input type="text" name="c13" id="" placeholder="enter c13">

          <input type="text" name="c14" id="" placeholder="enter c14">
          <input type="text" name="c15" id="" placeholder="enter c15">
            </div>
            <div class="column">
          <input type="text" name="time" id="" placeholder="enter 	time">
          <input type="date" name="date" id="" placeholder="enter date">
          <input type="number" name="auth_id" id="" placeholder="enter 	auth_id">
          <input type="text" name="infotype" id="" placeholder="enter 	infotype">
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