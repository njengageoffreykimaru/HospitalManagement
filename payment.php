<?php
if (isset($_POST['Add'])) {
    $category=$_POST['category'];
    $patient=$_POST['patient'];
    $doctor=$_POST['doctor'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    $vat=$_POST['vat'];
    $flat_vat=$_POST['flat_vat'];
    $discount=$_POST['discount'];
    $flat_discount=$_POST['flat_discount'];
    $gross_total=$_POST['gross_total'];
    $x=$_POST['x'];
    $category_amount=$_POST['category_amount'];
    $category_name=$_POST['category_name'];
    $status=$_POST['status'];
    $hospital_id=$_POST['hospital_id'];

   
    if ($category !="" && $patient !="" && $doctor !="" && $date !=""&& $amount !=""&& $vat!=""
    && $flat_vat !=""&& $discount !=""&& $flat_discount !=""&& $gross_total !=""&& $x !=""
    && $category_amount !="" && $category_name !=""&& $status !=""&& $hospital_id !="") {
        
    
    $sql="INSERT INTO payment(category,patient,doctor,date,amount,vat,flat_vat,discount,
    flat_discount,gross_total,x,category_amount,category_name,status,hospital_id)
     VALUES('$category','$patient','$doctor','$date','$amount','$vat','$flat_vat','$discount','$flat_discount',
     '$gross_total','$x','$category_amount','$category_name','$status','$hospital_id')";
include_once('dbcon.php');
$query=mysqli_query($con,$sql) or die("data inserted successfully");
if ($query) {
    echo " Register successfull";

  
}
    }
    else {
        echo "please fill all details";
    }

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
        <h2>Payment</h2>
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
       <input type="text" name="category" id="" placeholder="enter category">
        <input type="text" name="patient" id="" placeholder="enter patient">
         <input type="text" name="doctor" id="" placeholder="enter doctor">
         </div>
             <div class="column">
          <input type="date" name="date" id="" placeholder="enter date">
          <input type="text" name="amount" id="" placeholder="enter amount">
          <input type="text" name="vat" id="" placeholder="enter vat">
          <input type="number" name="flat_vat" id="" placeholder="enter flat vat">
          </div>
             <div class="column">
          <input type="number" name="discount" id="" placeholder="enter discount">
          <input type="number" name="flat_discount" id="" placeholder="enter flatdiscount">
          <input type="text" name="gross_total" id="" placeholder="enter grosstotal">
          <input type="text" name="x" id="" placeholder="enter x">
          </div>
             <div class="column">
          <input type="text" name="category_amount" id="" placeholder="enter category_amount">
          <input type="text" name="category_name" id="" placeholder="enter category_name">
          <input type="text" name="status" id="" placeholder="enter status">
          <input type="number" name="hospital_id" id="" placeholder="enter hospital id">
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