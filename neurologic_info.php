<?php
if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $psizeleft = $_POST['psizeleft'];
    $psizeright = $_POST['psizeright'];
    $hearing = $_POST['hearing'];
    $hearing2 = $_POST['hearing2'];
    $vision = $_POST['vision'];
    $vision2 = $_POST['vision2'];
    $gag = $_POST['gag'];
    $gag2 = $_POST['gag2'];
    $speach = $_POST['speach'];
    $speach2 = $_POST['speach2'];
    $added_at = $_POST['added_at'];
    $othertext = $_POST['othertext'];
    $ch1 = $_POST['ch1'];
    $ch2 = $_POST['ch2'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $ch5 = $_POST['ch5'];
    $ch6 = $_POST['ch6'];
    $ch7 = $_POST['ch7'];
    $ch8 = $_POST['ch8'];
    $ch9 = $_POST['ch9'];
    $ch10 = $_POST['ch10'];
    $ch11 = $_POST['ch11'];
    $ch12 = $_POST['ch12'];
    $ch13 = $_POST['ch13'];
    $ch14 = $_POST['ch14'];
    
    $ch16 = $_POST['ch16'];
    $ch17 = $_POST['ch17'];
    $ch18 = $_POST['ch18'];
    $ch19 = $_POST['ch19'];
    $ch20 = $_POST['ch20'];
    $ch21 = $_POST['ch21'];
    $ch22 = $_POST['ch22'];
    $ch23 = $_POST['ch23'];
    $ch24 = $_POST['ch24'];
    $ch25 = $_POST['ch25'];
    $ch26 = $_POST['ch26'];
    $ch27 = $_POST['ch27'];
    $ch28 = $_POST['ch28']; 
    $ch30 = $_POST['ch30'];
    $ch31 = $_POST['ch31'];
    $ch32 = $_POST['ch32'];
    $ch33 = $_POST['ch33'];
    $ch34 = $_POST['ch34'];
    $ch35 = $_POST['ch35'];
    $ch36 = $_POST['ch36'];
    $ch37 = $_POST['ch37'];
    $ch29 = $_POST['ch29'];
    $affecttext = $_POST['affecttext'];
    $sleeptext = $_POST['sleeptext'];
    $sleepother = $_POST['sleepother'];
    $neunotes = $_POST['neunotes'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $tab = $_POST['tab'];

    // if ($id != "" && $pid != "" && $psizeleft != "" && $psizeright != "" 
    // && $hearing != "" && $hearing2 != "" && $vision != "" && $vision2 != 
    // "" && $gag != "" && $gag2 != "" && $speach != "" && $speach2 != ""
    //  && $added_at != "" && $othertext != "" && $ch1 != "" && $ch2 != ""
    //   && $ch3 != "" && $ch4 != "" && $ch5 != "" && $ch6 != "" && $ch7 != 
    //   "" && $ch8 != "" && $ch9 != "" && $ch10 != "" && $ch11 != ""
    //    && $ch12 != "" && $ch13 != "" && $ch14 != "" && $ch16 != "" && $ch17 != "" && $ch18 != "" 
    //    && $ch19 != "" && $ch20 != "" && $ch21 != "" && $ch22 != "" &&
    //     $ch23 != "" && $ch24 != "" && $ch25 != "" && $ch26 != "" && 
    //     $ch27 != "" && $ch28 != "" && $ch30 != "" && $ch31 != "" &&
    //      $ch32 != "" && $ch33 != "" && $ch34 != "" && $ch35 != "" &&
    //       $ch36 != "" && $ch37 != "" && $ch29 != ""  && $affecttext != ""
    //        && $sleeptext != "" && $sleepother != "" && $neunotes != "" && $infotype !=
    //         "" && $auth_id != "" && $time != "" && $date != "" && $tab != "") {
        include_once('dbcon.php');

        $sql = "INSERT INTO neurologic_info (id, pid, psizeleft, psizeright,hearing,
         hearing2, vision, vision2, gag, gag2, speach, speach2, added_at,
          othertext, ch1, ch2, ch3, ch4, ch5, ch6, ch7, ch8, ch9, ch10, ch11,
           ch12, ch13, ch14, ch16, ch17, ch18, ch19, ch20, ch21, ch22,
            ch23, ch24, ch25, ch26, ch27, ch28, ch30, ch31, ch32, ch33, ch34, ch35, ch36, ch37,ch29,
             affecttext, sleeptext, sleepother, neunotes, infotype, auth_id, time, date, tab)
              VALUES ('$id', '$pid', '$psizeleft', '$psizeright', '$hearing', '$hearing2',
               '$vision', '$vision2', '$gag', '$gag2', '$speach', '$speach2',
                '$added_at', '$othertext', '$ch1', '$ch2', '$ch3', '$ch4', '$ch5'
                , '$ch6', '$ch7', '$ch8', '$ch9', '$ch10', '$ch11', '$ch12', '$ch13',
                 '$ch14', '$ch16', '$ch17', '$ch18', '$ch19', '$ch20', '$ch21',
                  '$ch22', '$ch23', '$ch24', '$ch25', '$ch26', '$ch27', '$ch28', '$ch30', '$ch31',
                   '$ch32', '$ch33', '$ch34', '$ch35', '$ch36', '$ch37','$ch29',
                    '$affecttext', '$sleeptext', '$sleepother', '$neunotes', '$infotype', 
                    '$auth_id', '$time', '$date', '$tab')";
                    $query = mysqli_query($con, $sql) or die("Failed to insert data into the database: "
                     . mysqli_error($con));


        if ($query) {
            echo "Registration successful";
        } else {
            echo "Failed to insert data into the database";
        }
    // } else {
    //     echo "Please fill in all details";
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
        <h2>Neurologic info</h2>
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
            <input type="number" name="id" id="" placeholder="Enter ID" required>
            <input type="number" name="pid" id="" placeholder="Enter PID" required>
            <input type="text" name="psizeleft" id="" placeholder="Enter Left Psize">
            <input type="text" name="psizeright" id="" placeholder="Enter Right Psize">
            </div>
            <div class="column">
            <input type="text" name="hearing" id="" placeholder="Enter Hearing">
            <input type="text" name="hearing2" id="" placeholder="Enter Hearing2">
            <input type="text" name="vision" id="" placeholder="Enter Vision">
            <input type="text" name="vision2" id="" placeholder="Enter Vision2">
            </div>
            <div class="column">
            <input type="text" name="gag" id="" placeholder="Enter Gag">
            <input type="text" name="gag2" id="" placeholder="Enter Gag2">
            <input type="text" name="speach" id="" placeholder="Enter Speech">
            <input type="text" name="speach2" id="" placeholder="Enter Speech2">
            </div>
            <div class="column">
            <input type="text" name="added_at" id="" placeholder="Enter Added At">
            <input type="text" name="othertext" id="" placeholder="Enter Other Text">
            <input type="text" name="ch1" id="" placeholder="Enter Ch1">
            <input type="text" name="ch2" id="" placeholder="Enter Ch2">
            </div>
            <div class="column">
            <input type="text" name="ch3" id="" placeholder="Enter Ch3">
            <input type="text" name="ch4" id="" placeholder="Enter Ch4">
            <input type="text" name="ch5" id="" placeholder="Enter Ch5">
            <input type="text" name="ch6" id="" placeholder="Enter Ch6">
            </div>
            <div class="column">
            <input type="text" name="ch7" id="" placeholder="Enter Ch7">
            <input type="text" name="ch8" id="" placeholder="Enter Ch8">
            <input type="text" name="ch9" id="" placeholder="Enter Ch9">
            <input type="text" name="ch10" id="" placeholder="Enter Ch10">
            </div>
            <div class="column">
            <input type="text" name="ch11" id="" placeholder="Enter Ch11">
            <input type="text" name="ch12" id="" placeholder="Enter Ch12">
            <input type="text" name="ch13" id="" placeholder="Enter Ch13">
            <input type="text" name="ch14" id="" placeholder="Enter Ch14"> 
            </div>
            <div class="column">
            <input type="text" name="ch16" id="" placeholder="Enter Ch16">
            <input type="text" name="ch17" id="" placeholder="Enter Ch17">
            <input type="text" name="ch18" id="" placeholder="Enter Ch18">
            <input type="text" name="ch19" id="" placeholder="Enter Ch19">
            </div>
            <div class="column">
            <input type="text" name="ch20" id="" placeholder="Enter Ch20">
            <input type="text" name="ch21" id="" placeholder="Enter Ch21">
            <input type="text" name="ch22" id="" placeholder="Enter Ch22">
            <input type="text" name="ch23" id="" placeholder="Enter Ch23">
            </div>
            <div class="column">
            <input type="text" name="ch24" id="" placeholder="Enter Ch24">
            <input type="text" name="ch25" id="" placeholder="Enter Ch25">
            <input type="text" name="ch26" id="" placeholder="Enter Ch26">
            <input type="number" name="ch27" id="" placeholder="Enter Ch27" required>
            </div>
            <div class="column">
            <input type="text" name="ch28" id="" placeholder="Enter Ch28">
           
            <input type="text" name="ch30" id="" placeholder="Enter Ch30">
            <input type="text" name="ch31" id="" placeholder="Enter Ch31">
            <input type="text" name="ch32" id="" placeholder="Enter Ch32">
            </div>
            <div class="column">
            <input type="text" name="ch33" id="" placeholder="Enter Ch33">
            <input type="text" name="ch34" id="" placeholder="Enter Ch34">
            <input type="text" name="ch35" id="" placeholder="Enter Ch35">
            <input type="text" name="ch36" id="" placeholder="Enter Ch36">
            </div>
            <div class="column">
            <input type="text" name="ch37" id="" placeholder="Enter Ch37">
            <input type="text" name="ch29" id="" placeholder="Enter Ch29">
            <input type="text" name="affecttext" id="" placeholder="Enter Affect Text">
            <input type="text" name="sleeptext" id="" placeholder="Enter Sleep Text">
            </div>
            <div class="column">
            <input type="text" name="sleepother" id="" placeholder="Enter Sleep Other">
            <input type="text" name="neunotes" id="" placeholder="Enter Neu Notes">
            <input type="text" name="infotype" id="" placeholder="Enter Info Type">
            <input type="number" name="auth_id" id="" placeholder="Enter Auth ID" required>
            </div>
            <div class="column">
            <input type="text" name="time" id="" placeholder="Enter Time" required>
            <input type="text" name="date" id="" placeholder="Enter Date" required>
            <input type="text" name="tab" id="" placeholder="Enter Tab" required>
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
