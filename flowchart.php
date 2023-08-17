<?php
if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $temp = $_POST['temp'];
    $ipn = $_POST['ipn'];
    $cbiout = $_POST['cbiout'];
    $stool = $_POST['stool'];
    $bpressure = $_POST['bpressure'];
    $iv = $_POST['iv'];
    $dialysisout = $_POST['dialysisout'];
    $liq = $_POST['liq'];
    $rate = $_POST['rate'];
    $ivbp = $_POST['ivbp'];
    $vcethere = $_POST['vcethere'];
    $flex = $_POST['flex'];
    $oxygen = $_POST['oxygen'];
    $blood = $_POST['blood'];
    $foley = $_POST['foley'];
    $height = $_POST['height'];
    $lipids = $_POST['lipids'];
    $spcather = $_POST['spcather'];
    $fio = $_POST['fio'];
    $cbiin = $_POST['cbiin'];
    $nephrostomy = $_POST['nephrostomy'];
    $weight = $_POST['weight'];
    $dialysisin = $_POST['dialysisin'];
    $drains = $_POST['drains'];
    $emesis = $_POST['emesis'];
    $ngtube = $_POST['ngtube'];
    $crusttube = $_POST['crusttube'];
    $diettype = $_POST['diettype'];
    $supplements = $_POST['supplements'];
    $howoften = $_POST['howoften'];
    $restrictions = $_POST['restrictions'];
    $othertext = $_POST['othertext'];
    $feedingothertext = $_POST['feedingothertext'];
    $npo = $_POST['npo'];
    $asp = $_POST['asp'];
    $others = $_POST['others'];
    $ftube = $_POST['ftube'];
    $gtube = $_POST['gtube'];
    $jtube = $_POST['jtube'];
    $pegtube = $_POST['pegtube'];
    $anorexia = $_POST['anorexia'];
    $chewing = $_POST['chewing'];
    $swallowing = $_POST['swallowing'];
    $dhydration = $_POST['dhydration'];
    $myes = $_POST['myes'];
    $mno = $_POST['mno'];
    $tyes = $_POST['tyes'];
    $tno = $_POST['tno'];
    $dyes = $_POST['dyes'];
    $dno = $_POST['dno'];
    $good = $_POST['good'];
    $fair = $_POST['fair'];
    $poor = $_POST['poor'];
    $npoa = $_POST['npoa'];
    $created_atd = $_POST['created_atd'];
    $created_att = $_POST['created_att'];
    $ty1 = $_POST['ty1'];
    $lo1 = $_POST['lo1'];
    $ra1 = $_POST['ra1'];
    $go1 = $_POST['go1'];
    $de1 = $_POST['de1'];
    $on1 = $_POST['on1'];
    $pr1 = $_POST['pr1'];
    $re1 = $_POST['re1'];
    $o1 = $_POST['o1'];
    $o2 = $_POST['o2'];
    $o3 = $_POST['o3'];
    $o4 = $_POST['o4'];
    $o5 = $_POST['o5'];
    $face = $_POST['face'];
    $activity = $_POST['activity'];
    $gaurding = $_POST['gaurding'];
    $physiology = $_POST['physiology'];
    $respiratory = $_POST['respiratory'];
    $infotype = $_POST['infotype'];
    $auth_id = $_POST['auth_id'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    

    // if (!empty($id) && !empty($pid) && !empty($temp) && !empty($ipn) && !empty($cbiout) 
    // && !empty($stool) && !empty($bpressure) && !empty($iv) && !empty($dialysisout) 
    // && !empty($liq) && !empty($rate) && !empty($ivbp) && !empty($vcethere) 
    // && !empty($flex) && !empty($oxygen) && !empty($blood) && !empty($foley) 
    // && !empty($height) && !empty($lipids) && !empty($spcather) && !empty($fio) 
    // && !empty($cbiin) && !empty($nephrostomy) && !empty($weight) && !empty($dialysisin)
    // && !empty($drains) && !empty($emesis) && !empty($ngtube) && !empty($crusttube) 
    // && !empty($diettype) && !empty($supplements) && !empty($howoften) && !empty($restrictions) 
    // && !empty($othertext) && !empty($feedingothertext) && !empty($npo) && !empty($asp) 
    // && !empty($others) && !empty($ftube) && !empty($gtube) && !empty($jtube) && !empty($pegtube) 
    // && !empty($anorexia) && !empty($chewing) && !empty($swallowing) && !empty($dhydration) 
    // && !empty($myes) && !empty($mno) && !empty($tyes) && !empty($tno) && !empty($dyes) 
    // && !empty($dno) && !empty($good) && !empty($fair) && !empty($poor) && !empty($npoa) 
    // && !empty($created_atd) && !empty($created_att) && !empty($ty1) && !empty($lo1) 
    // && !empty($ra1) && !empty($go1) && !empty($de1) && !empty($on1) && !empty($pr1) 
    // && !empty($re1) && !empty($o1) && !empty($o2) && !empty($o3) && !empty($o4) && !empty($o5) 
    // && !empty($face) && !empty($activity) && !empty($gaurding) && !empty($physiology) 
    // && !empty($respiratory) && !empty($infotype) && !empty($auth_id) && !empty($time) && !empty($date)) {
        include_once('dbcon.php');
        $sql = "INSERT INTO flowchart (id,pid,temp,ipn,cbiout,stool,bpressure,iv,dialysisout,liq,
        rate,ivbp,vcethere,flex,oxygen,blood,foley,height,lipids,spcather,fio,cbiin,nephrostomy,
        weight,dialysisin,drains,emesis,ngtube,crusttube,diettype,supplements,howoften,restrictions,othertext,
        feedingothertext,npo,asp,others,ftube,gtube,jtube,pegtube,anorexia,chewing,swallowing,dhydration,myes,
        mno,tyes,tno,dyes,dno,good,fair,poor,npoa,created_atd,created_att,ty1,lo1,ra1,go1,de1,on1,pr1,re1,o1,o2,
        o3,o4,o5,face,activity,gaurding,physiology,respiratory,infotype,auth_id,time,date) 
        VALUES ('$id', '$pid', '$temp', '$ipn', '$cbiout', '$stool', '$bpressure', '$iv', '$dialysisout', '$liq', 
        '$rate', '$ivbp', '$vcethere', '$flex', '$oxygen', '$blood', '$foley', '$height', '$lipids', '$spcather', 
        '$fio', '$cbiin', '$nephrostomy', '$weight', '$dialysisin', '$drains', '$emesis', '$ngtube', '$crusttube', 
        '$diettype', '$supplements', '$howoften', '$restrictions', '$othertext', '$feedingothertext', '$npo', '$asp', 
        '$others', '$ftube', '$gtube', '$jtube', '$pegtube', '$anorexia', '$chewing', '$swallowing', '$dhydration', 
        '$myes', '$mno', '$tyes', '$tno', '$dyes', '$dno', '$good', '$fair', '$poor', '$npoa', '$created_atd', 
        '$created_att', '$ty1', '$lo1', '$ra1', '$go1', '$de1', '$on1', '$pr1', '$re1', '$o1', '$o2', '$o3', '$o4', 
        '$o5', '$face', '$activity', '$gaurding', '$physiology', '$respiratory', '$infotype', '$auth_id', '$time', '$date')";
   
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
    <title>Add Allergy</title>
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
        <h2>Flowchart</h2>
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
            <input type="text" name="temp" id="" placeholder="temp">
            <input type="text" name="ipn" id="" placeholder="ipn">
            </div>
            <div class="column">
            <input type="text" name="cbiout" id="" placeholder="cbiout">
            <input type="text" name="stool" id="" placeholder="stool">
            <input type="text" name="bpressure" id="" placeholder="bpressure">
            <input type="text" name="iv" id="" placeholder="iv">
            </div>
            <div class="column">
            <input type="text" name="dialysisout" id="" placeholder="dialysisout">
            <input type="text" name="liq" id="" placeholder="liq">
            <input type="text" name="rate" id="" placeholder="rate">
            <input type="text" name="ivbp" id="" placeholder="ivbp">
            </div>
            <div class="column">
            <input type="text" name="vcethere" id="" placeholder="vcethere">
            <input type="text" name="flex" id="" placeholder="flex">
            <input type="text" name="oxygen" id="" placeholder="oxygen">
            <input type="text" name="blood" id="" placeholder="blood">
            </div>
            <div class="column">
            <input type="text" name="foley" id="" placeholder="foley">
            <input type="text" name="height" id="" placeholder="height">
            <input type="text" name="lipids" id="" placeholder="lipids">
            <input type="text" name="spcather" id="" placeholder="spcather">
            </div>
            <div class="column">
            <input type="text" name="fio" id="" placeholder="fio">
            <input type="text" name="cbiin" id="" placeholder="cbiin">
            <input type="text" name="nephrostomy" id="" placeholder="nephrostomy">
            <input type="text" name="weight" id="" placeholder="weight">
            </div>
            <div class="column">
            <input type="text" name="dialysisin" id="" placeholder="dialysisin">
            <input type="text" name="drains" id="" placeholder="drains">
            <input type="text" name="emesis" id="" placeholder="emesis">
            <input type="text" name="ngtube" id="" placeholder="ngtube">
            </div>
            <div class="column">
            <input type="text" name="crusttube" id="" placeholder="crusttube">
            <input type="text" name="diettype" id="" placeholder="diettype">
            <input type="text" name="supplements" id="" placeholder="supplements">
            <input type="text" name="howoften" id="" placeholder="howoften">
            </div>
            <div class="column">
            <input type="text" name="restrictions" id="" placeholder="restrictions">
            <input type="text" name="othertext" id="" placeholder="othertext">
            <input type="text" name="feedingothertext" id="" placeholder="feedingothertext">
            <input type="text" name="npo" id="" placeholder="npo">
            </div>
            <div class="column">
            <input type="text" name="asp" id="" placeholder="asp">
            <input type="text" name="others" id="" placeholder="others">
            <input type="text" name="ftube" id="" placeholder="ftube">
            <input type="text" name="gtube" id="" placeholder="gtube">
            </div>
            <div class="column">
            <input type="text" name="jtube" id="" placeholder="jtube">
            <input type="text" name="pegtube" id="" placeholder="pegtube">
            <input type="text" name="anorexia" id="" placeholder="anorexia">
            <input type="text" name="chewing" id="" placeholder="chewing">
            </div>
            <div class="column">
            <input type="text" name="swallowing" id="" placeholder="swallowing">
            <input type="text" name="dhydration" id="" placeholder="dhydration">
            <input type="text" name="myes" id="" placeholder="myes">
            <input type="text" name="mno" id="" placeholder="mno">
            </div>
            <div class="column">
            <input type="text" name="tyes" id="" placeholder="tyes">
            <input type="text" name="tno" id="" placeholder="tno">
            <input type="text" name="dyes" id="" placeholder="dyes">
            <input type="text" name="dno" id="" placeholder="dno">
            </div>
            <div class="column">
            <input type="text" name="good" id="" placeholder="good">
            <input type="text" name="fair" id="" placeholder="fair">
            <input type="text" name="poor" id="" placeholder="poor">
            <input type="text" name="npoa" id="" placeholder="npoa">
            </div>
            <div class="column">
            <input type="date" name="created_atd" id="" placeholder="created_atd"required>
            <input type="time" name="created_att" id="" placeholder="created_att"required>
            <input type="text" name="ty1" id="" placeholder="ty1">
            <input type="text" name="lo1" id="" placeholder="lo1">
            </div>
            <div class="column">
            <input type="text" name="ra1" id="" placeholder="ra1">
            <input type="text" name="go1" id="" placeholder="go1">
            <input type="text" name="de1" id="" placeholder="de1">
            <input type="text" name="on1" id="" placeholder="on1">
            </div>
            <div class="column">
            <input type="text" name="pr1" id="" placeholder="pr1">
            <input type="text" name="re1" id="" placeholder="re1">
            <input type="text" name="o1" id="" placeholder="o1">
            <input type="text" name="o2" id="" placeholder="o2">
            </div>
            <div class="column">
            <input type="text" name="o3" id="" placeholder="o3">
            <input type="text" name="o4" id="" placeholder="o4">
            <input type="text" name="o5" id="" placeholder="o5">
            <input type="text" name="face" id="" placeholder="face">
            </div>
            <div class="column">
            <input type="text" name="activity" id="" placeholder="activity">
            <input type="text" name="gaurding" id="" placeholder="gaurding">
            <input type="text" name="physiology" id="" placeholder="physiology">
            <input type="text" name="respiratory" id="" placeholder="respiratory">
            </div>
            <div class="column">
            <input type="text" name="infotype" id="" placeholder="infotype">
            <input type="number" name="auth_id" id="" placeholder="auth_id"required>
            <input type="time" name="time" id="" placeholder="time"required>
            <input type="date" name="date" id="" placeholder="date"required>
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
