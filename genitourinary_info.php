<?php

if (isset($_POST['Add'])) {
    
	
$id=$_POST['id'];
$pid=$_POST['pid'];
$continent=$_POST['continent'];
$incontinent=$_POST['incontinent'];
$anuric=$_POST['anuric'];
$cather=$_POST['cather'];
$size=$_POST['size'];
$insertaiond=$_POST['insertaiond'];
$reason=$_POST['reason'];
$culture=$_POST['culture'];
$affect=$_POST['affect'];
$hemodia=$_POST['hemodia'];
$perit=$_POST['perit'];
$diaacc=$_POST['diaacc'];
$type=$_POST['type'];
$thrill=$_POST['thrill'];
$bruit=$_POST['bruit'];
$urgency=$_POST['urgency'];
$frequecy=$_POST['frequecy'];
$dysuria=$_POST['dysuria'];
$foul=$_POST['foul'];
$pain=$_POST['pain'];
$bloodyurine=$_POST['bloodyurine'];
$cloudyurine=$_POST['cloudyurine'];
$ucolor=$_POST['ucolor'];
$other=$_POST['other'];
$added_at=$_POST['added_at'];
$supra=$_POST['supra'];
$supranext=$_POST['supranext'];
$interdes=$_POST['interdes'];
$dialysisoption=$_POST['dialysisoption'];
$interyes=$_POST['interyes'];
$interno=$_POST['interno'];
$diacheck=$_POST['diacheck'];
$diano=$_POST['diano'];
$dialysisaccessoption=$_POST['dialysisaccessoption'];
$dlocation=$_POST['dlocation'];
$m=$_POST['m'];
$t=$_POST['t'];
$w=$_POST['w'];
$th=$_POST['th'];
$f=$_POST['f'];
$s=$_POST['s'];
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
$urineyes=$_POST['urineyes'];
$urineno=$_POST['urineno'];
$geninotes=$_POST['geninotes'];
$infotype=$_POST['infotype'];
$auth_id=$_POST['auth_id'];
$time=$_POST['time'];
$date=$_POST['date'];
$tab=$_POST['tab'];

    // if (
    //     $id != "" && $pid != "" && $whyadmited != "" && $yourhopes != "" &&
    //     $alone != "" && $lwith != "" && $withname != "" && $withphone != "" &&
    //     $transportation != "" && $homehealth != "" && $initiate != "" &&
    //     $d_continue != "" && $agency != "" &&
    //     $snf != "" && $rehab != "" &&
    //     $inpatient != "" && $nursinghome != "" &&
    //     $conagain != "" && $agency1 != "" && $oxygen != "" &&
    //     $equipment != "" && $oth != "" && $other != "" &&
    //     $added_at != "" && $care != "" && $gaurdian != "" &&
    //     $gname != "" && $gphone != "" && $nursinitiate != "" && $d_case != "" &&
    //     $selfcare != "" && $mobility != "" && $swallowing != "" &&
    //     $communication != "" && $cognition != "" && $bowel != "" &&
    //     $nstatus != "" && $infection != "" && $pain != "" && $fluid != "" &&
    //     $d_safety != "" && $skin != "" && $pulmonary != "" &&
    //     $cfunction != "" && $bariers != "" && $adjustment != "" &&
    //     $others != "" && $equipment1 != "" && $submit != "" &&
    //     $sigtext != "" && $sigother != "" && $infotype != "" &&
    //     $auth_id != "" && $p_time != "" && $p_date != "" && $tab != ""
    // ) {
        $sql = "INSERT INTO genitourinary_info(
            id,pid,continent,incontinent,anuric,cather,size,insertaiond,reason,culture,affect,hemodia,perit,diaacc,type,thrill,
            bruit,urgency,frequecy,dysuria,foul,pain,bloodyurine,cloudyurine,ucolor,other,added_at,supra,supranext,interdes,
            dialysisoption,interyes,interno,diacheck,diano,dialysisaccessoption,dlocation,m,t,w,th,f,s,ch6,
            ch7,ch8,ch9,ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,urineyes,urineno,geninotes,infotype,auth_id,time,date,tab
        )
        VALUES( '$id','$pid','$continent','$incontinent','$anuric','$cather','$size','$insertaiond','$reason','$culture',
        '$affect','$hemodia','$perit','$diaacc','$type','$thrill',
            '$bruit','$urgency','$frequecy','$dysuria','$foul','$pain',
            '$bloodyurine','$cloudyurine','$ucolor','$other','$added_at','$supra','$supranext','$interdes',
            '$dialysisoption','$interyes','$interno','$diacheck','$diano','$dialysisaccessoption','$dlocation',
            '$m','$t','$w','$th','$f','$s','$ch6',
            '$ch7','$ch8','$ch9','$ch10','$ch11','$ch12','$ch13','$ch14','$ch15',
            '$ch16','$ch17','$urineyes','$urineno','$geninotes','$infotype','$auth_id','$time','$date','$tab')";
        
        include_once('dbcon.php');
        $query = mysqli_query($con, $sql) or die("Error occurred while inserting data");
        if ($query) {
            echo "Register successful";
        } else {
            echo "Failed to insert data into the database: " . mysqli_error($con);
        }
    // } else {
    //     echo "Please fill all details";
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
        <h2>Genitourinary_info</h2>
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
            <input type="number" name="id" id="" placeholder="enter id" required>
            <input type="number" name="pid" id="" placeholder="enter pid" required>
            <input type="text" name="continent" id="" placeholder="enter continent">
            <input type="text" name="incontinent" id="" placeholder="enter incontinent">
            </div>
            <div class="column">
            <input type="text" name="anuric" id="" placeholder="enter anuric">
            <input type="text" name="cather" id="" placeholder="enter 	cather">
            <input type="text" name="size" id="" placeholder="enter 	size">
            <input type="text" name="insertaiond" id="" placeholder="enter 	insertaiond">
            </div>
            <div class="column">
            <input type="text" name="reason" id="" placeholder="enter 	reason">
            <input type="text" name="culture" id="" placeholder="enter 	culture">
            <input type="text" name="affect" id="" placeholder="enter 	affect">
            <input type="text" name="hemodia" id="" placeholder="enter 	hemodia">
            </div>
            <div class="column">
            <input type="text" name="perit" id="" placeholder="enter 	perit">
            <input type="text" name="diaacc" id="" placeholder="enter 	diaacc">
            <input type="text" name="type" id="" placeholder="type">
            <input type="text" name="thrill" id="" placeholder="enter thrill">
            </div>
            <div class="column">
            <input type="text" name="bruit" id="" placeholder="enter 	bruit">
            <input type="text" name="urgency" id="" placeholder="enter 	urgency">
            <input type="text" name="frequecy" id="" placeholder="enter 	frequecy">
            <input type="text" name="dysuria" id="" placeholder="enter 	dysuria">
            </div>
            <div class="column">
            <input type="text" name="foul" id="" placeholder="enter 	foul">
            <input type="text" name="pain" id="" placeholder="enter pain">
            <input type="text" name="bloodyurine" id="" placeholder="enter bloodyurine">
            <input type="text" name="cloudyurine" id="" placeholder="enter a	cloudyurine">
            </div>
            <div class="column">
            <input type="text" name="ucolor" id="" placeholder="enter ucolor">
            <input type="text" name="other" id="" placeholder="enter other">
            <input type="date" name="added_at" id="" placeholder="enter 	added_at"required>
            <input type="text" name="supra" id="" placeholder="enter supra">
            </div>
            <div class="column">
            <input type="text" name="supranext" id="" placeholder="enter supranext">
            <input type="text" name="interdes" id="" placeholder="enter interdes">
            <input type="text" name="dialysisoption" id="" placeholder="enter	dialysisoption">
            <input type="text" name="interyes" id="" placeholder="enter interyes">
            </div>
            <div class="column">
            <input type="text" name="interno" id="" placeholder="enter interno">
            <input type="text" name="diacheck" id="" placeholder="enter diacheck">
            <input type="text" name="diano" id="" placeholder="enter diano">
            <input type="text" name="dialysisaccessoption" id="" placeholder="enter dialysisaccessoption">
            </div>
            <div class="column">
            <input type="text" name="dlocation" id="" placeholder="enter dlocation">
            <input type="text" name="m" id="" placeholder="enter m">
            <input type="text" name="t" id="" placeholder="enter t">
            <input type="text" name="w" id="" placeholder="enter w">
            </div>
            <div class="column">
            <input type="text" name="th" id="" placeholder="enter th">
            <input type="text" name="f" id="" placeholder="enter f">
            <input type="text" name="s" id="" placeholder="enter s">
            <input type="text" name="ch6" id="" placeholder="enter ch6">
            </div>
            <div class="column">
            <input type="text" name="ch7" id="" placeholder="enter ch7">
            <input type="text" name="ch8" id="" placeholder="enter ch8">
            <input type="text" name="ch9" id="" placeholder="enter ch9">
            <input type="text" name="ch10" id="" placeholder="enter ch10">
            </div>
            <div class="column">
            <input type="text" name="ch11" id="" placeholder="enter ch11">
            <input type="text" name="ch12" id="" placeholder="ch12">
            <input type="text" name="ch13" id="" placeholder="enter ch13">
            <input type="text" name="ch14" id="" placeholder="enter ch14">
            </div>
            <div class="column">
            <input type="text" name="ch15" id="" placeholder="enter ch15">
            <input type="text" name="ch16" id="" placeholder="enter ch16">
            <input type="text" name="ch17" id="" placeholder="enter ch17">
            <input type="text" name="urineyes" id="" placeholder="enter urineyes">
            </div>
            <div class="column">
            <input type="text" name="urineno" id="" placeholder="enter urineno">
            <input type="text" name="geninotes" id="" placeholder="geninotes">
            <input type="text" name="infotype" id="" placeholder="enter infotype">
            <input type="number" name="auth_id" id="" placeholder="enter 	auth_id"required>
            </div>
            <div class="column">
            <input type="time" name="time" id="" placeholder="enter 	time"required>
            <input type="date" name="date" id="" placeholder="enter date"required>
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
