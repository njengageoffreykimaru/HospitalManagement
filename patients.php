<?php

if (isset($_POST['Add'])) {
    
$id=$_POST['id'];
$img_url=$_POST['img_url'];	
$name=$_POST['name'];	
$email=$_POST['email'];
$doctor=$_POST['doctor'];
$address=$_POST['address'];	
$phone=$_POST['phone'];
$sex=$_POST['sex'];	
$birthdate=$_POST['birthdate'];
$age=$_POST['age'];	
$bloodgroup=$_POST['bloodgroup'];	
$ion_user_id=$_POST['ion_user_id'];	
$patient_id=$_POST['patient_id'];
$add_date=$_POST['add_date'];	
$hospital_id=$_POST['hospital_id'];	
$access1=$_POST['access1'];	
$access2=$_POST['access2'];	
$access3=$_POST['access3'];
$site1=$_POST['site1'];
$site2=$_POST['site2'];	
$site3=$_POST['site3'];	
$solution1=$_POST['solution1'];	
$solution2=$_POST['solution2'];
$solution3=$_POST['solution3'];	
$rate1=$_POST['rate1'];
$rate2=$_POST['rate2'];	
$rate3=$_POST['rate3'];
$idate1=$_POST['idate1'];
$idate2=$_POST['idate2'];	
$idate3=$_POST['idate3'];	
$assess=$_POST['assess'];
$explain=$_POST['explain'];	
$whyadmited=$_POST['whyadmited'];
$yourhopes=$_POST['yourhopes'];
$alone=$_POST['alone'];	
$withname=$_POST['withname'];	
$withphone=$_POST['withphone'];	
$transportation=$_POST['transportation'];
$homehealth=$_POST['homehealth'];	
$initiate=$_POST['initiate'];	
$agency=$_POST['agency'];
$snf=$_POST['snf'];	
$rehab=$_POST['rehab'];	
$inpatient=$_POST['inpatient'];	
$agency1=$_POST['agency1'];	
$oxygen=$_POST['oxygen'];
$equipment=$_POST['equipment'];	
$other=$_POST['other'];	
$language=$_POST['language'];	
$securityNumber=$_POST['securityNumber'];	
$weight=$_POST['weight'];	
$donor=$_POST['donor'];	
$nprimary=$_POST['nprimary'];	
$reason=$_POST['reason'];
$lastperiod=$_POST['lastperiod'];	
$mstatus=$_POST['mstatus'];	
$occupation=$_POST['occupation'];	
$workphone=$_POST['workphone'];	
$insurance=$_POST['insurance'];
$ename=$_POST['ename'];	
$erelation=$_POST['erelation'];
$ephone=$_POST['ephone'];
$allergies=$_POST['allergies'];	
$current=$_POST['current'];
$vaccination=$_POST['vaccination'];	
$psychiatric=$_POST['psychiatric'];	
$mhistory=$_POST['mhistory'];
$abuse=$_POST['abuse'];
$drinking=$_POST['drinking'];
$smoking=$_POST['smoking'];	
$drugss=$_POST['drugss'];
$hbtype=$_POST['hbtype'];
$hbdate=$_POST['hbdate'];
$hbadmin=$_POST['hbadmin'];	
$hndate=$_POST['hndate'];	
$dtype=$_POST['dtype'];	
$ddate=$_POST['ddate'];
$dadmin=$_POST['dadmin'];
$dndate=$_POST['dndate'];	
$intype=$_POST['intype'];
$indate=$_POST['indate'];
$inadmin=$_POST['inadmin'];	
$inedate=$_POST['inedate'];	
$ptype=$_POST['ptype'];	
$pdate=$_POST['pdate'];
$padmin=$_POST['padmin'];
$pndate=$_POST['pndate'];	
$potype=$_POST['potype'];
$podate=$_POST['podate'];
$poadmin=$_POST['poadmin'];	
$pondate=$_POST['pondate'];	
$rtype=$_POST['rtype'];	
$rdate=$_POST['rdate'];
$radmin=$_POST['radmin'];
$rndate=$_POST['rndate'];
$mrtype=$_POST['mrtype'];
$mrdate=$_POST['mrdate'];	
$mradmin=$_POST['mradmin'];	
$mrndate=$_POST['mrndate'];	
$vctype=$_POST['vctype'];
$vcdate=$_POST['vcdate'];
$vcadmin=$_POST['vcadmin'];	
$vcndate=$_POST['vcndate'];	
$hatype=$_POST['hatype'];	
$hadate=$_POST['hadate'];	
$haadmin=$_POST['haadmin'];	
$handate=$_POST['handate'];	
$type10=$_POST['type10'];	
$date10=$_POST['date10'];	
$admin10=$_POST['admin10'];	
$ndate10=$_POST['ndate10'];
$type11=$_POST['type11'];
$date11=$_POST['date11'];	
$admin11=$_POST['admin11'];	
$ndate11=$_POST['ndate11'];	
$type12=$_POST['type12'];
$date12=$_POST['date12'];	
$admin12=$_POST['admin12'];
$ndate12=$_POST['ndate12'];	
$type13=$_POST['type13'];	
$date13=$_POST['date13'];	
$admin13=$_POST['admin13'];	
$ndate13=$_POST['ndate13'];
$tsmoking=$_POST['tsmoking'];
$tdrinking=$_POST['tdrinking'];
$tdrugss=$_POST['tdrugss'];
$adddate=$_POST['adddate'];	
$addtime=$_POST['addtime'];	
$diagnosis=$_POST['diagnosis'];	
$brought=$_POST['brought'];
$male1=$_POST['male1'];
$dep=$_POST['dep'];
$age1=$_POST['age1'];	
$sucide=$_POST['sucide'];
$alcohol=$_POST['alcohol'];	
$rational=$_POST['rational'];	
$window=$_POST['window'];
$organic=$_POST['organic'];	
$nosupport=$_POST['nosupport'];	
$chronic=$_POST['chronic'];	
$pcheck=$_POST['pcheck'];	
$infotype=$_POST['infotype'];
$auth_id=$_POST['auth_id'];
$time=$_POST['time'];	
$date=$_POST['date'];




    

    // if ($id != "" && $name  != "" && $email!= "" && $doctor!= ""
    //   && $address!= "" &&$phone !="" &&$sex!="" &&$birthdate !=""
    //    &&$age!="" &&$bloodgroup!="" && $ion_user_id !="" &&
    //     $patient_id !="" && $add_date !="" && $hospital_id !="" &&
    //      $access1 !="" && $access2 !="" && $access3 !="" 
    //      &&$site1 !="" && $site2 !="" && $site3 !="" && $solution1 !="" &&
    //       $solution2 !="" && $solution3 !="" && $rate1 !="" && $rate2 !="" && $rate3 !="" && $idate1 !=" "
    //       && $idate2 !="" && $idate3 !="" && $assess !="" 
    //       && $explain !="" && $whyadmited !="" && $yourhopes !=""
    //        && $alone !="" &&
    //         $withname !="" && $withphone !="" 
    //         && $transportationd !="" && $homehealth !="" 
    //         && $initiate !="" && $agency !="" && $snf !="" && 
    //         $rehab !="" && $inpatient !="" && $agency1 !=" "
    //          && $oxygen !="" && $equipment !="" && 
    //          $other !="" && $language !="" && $securityNumber !=""
    //           && $weight !="" && $donor !="" && 
    //           $nprimary !="" && $reason !="" &&$lastperiod !="" && $mstatus !="" 
    //           && $occupation !="" && $workphone !="" && 
    //           $insurance !="" && $ename !="" && 
    //           $erelation !="" && $ephone !="" &&
    //            $allergies !="" && $current !="" &&  $vaccination !="" &&
    //            $psychiatric !="" && 
    //            $mhistory!="" &&
    //            $abuse !="" &&
    //            $drinking !="" &&
    //            $smoking !="" &&
           
    //            $drugss!="" && 
    //            $hbtype !="" && 
    //            $hbdate !="" &&
    //            $hbadmin !="" && 
    //            $hndate !="" &&
    //            $dtype !="" && 
    //            $ddate !="" && 
    //            $dadmin!="" &&
    //            $dndate !="" && 
    //            $intype !="" && 
    //            $indate!="" &&  
    //            $inadmin !="" &&
    //            $inedate !="" && 
           
    //            $ptype !="" && 
    //            $pdate !="" &&
    //            $padmin !="" &&
    //            $pndate !=""&&
    //            $potype !="" &&
    //            $podate !="" &&
    //            $poadmin !="" &&
    //            $pondate !="" &&
    //            $rtype !="" &&  
    //            $rdate !="" && 
    //            $radmin !="" && 
    //            $rndate !="" && 
    //            $mrtype !="" && 
    //            $mrdate !="" &&
    //            $mradmin !="" &&
    //            $mrndate !="" && 
    //            $vctype !="" && 
    //            $vcdate !="" &&
           
               
    //            $vcadmin !="" &&
    //            $vcndate !="" &&
    //            $hatype !="" && 
    //            $hadate !="" &&
    //            $haadmin !="" &&
    //            $handate !="" &&
    //            $poadmin !="" &&
    //            $pondate !="" && 
    //            $type10 !="" &&
    //            $date10 !="" &&
    //            $admin10 !="" &&

    //            $ndate10 !="" &&
    //            $type11 !="" &&
    //            $date11e !="" &&
    //            $admin11 !="" && 
    //            $ndate11 !="" &&  
    //            $type12 !="" && 
    //            $date12 !="" && 
           
    //            $admin12 !="" &&
    //            $ndate12 !="" && 
    //            $type13 !="" &&
    //            $date13 !="" && 
    //            $admin13 !="" &&
    //            $ndate13 !="" &&
    //            $tsmoking !="" &&
    //            $tdrinking !="" &&
    //            $tdrugss !="" && 
    //            $adddate !="" &&
    //            $addtime !="" && 
    //            $diagnosis !="" &&
    //            $brought !="" &&
    //            $male1 !="" &&
    //            $dep !="" &&
    //            $age1 !="" && 
    //            $sucide !="" && 
    //            $alcohol !="" &&
           
    //            $rational !="" && 
    //            $window !="" &&
    //            $organic !="" && 
    //            $nosupport !="" &&
    //            $chronic !="" && 
    //            $pcheck !="" &&
    //            $infotype !="" &&
    //            $sucide !=" " &&
    //            $auth_id !="" &&
    //            $time !="" &&
    //            $date !="" 



               
    //            ) {
        include_once('dbcon.php');

       // ... (your existing PHP code)


       $sql = "INSERT INTO patient (
        id,img_url,name,email,doctor,address,phone,sex,birthdate,age,bloodgroup,ion_user_id,patient_id,
        add_date,hospital_id,access1,access2,access3,site1,site2,site3,solution1,solution2,solution3,rate1,
        rate2,rate3,idate1,idate2,idate3,assess,`explain`,whyadmited,yourhopes,alone,withname,withphone,
        transportation,homehealth,initiate,agency,snf,rehab,inpatient,agency1,oxygen,equipment,other,language,	
        securityNumber,weight,donor,nprimary,reason,lastperiod,mstatus,occupation,workphone,insurance,ename,erelation,ephone,allergies,
        current,vaccination,psychiatric,mhistory,abuse,drinking,smoking,drugss,hbtype,hbdate,hbadmin,hndate,dtype,ddate,dadmin,dndate,intype,	
        indate,inadmin,inedate,ptype,pdate,padmin,pndate,potype,podate,poadmin,pondate,rtype,	
        rdate,radmin,rndate,mrtype,mrdate,mradmin,mrndate,vctype,vcdate,vcadmin,
        vcndate,hatype,hadate,haadmin,handate,type10,date10,admin10,ndate10,type11,date11,
        admin11,ndate11,type12,date12,admin12,ndate12,type13,date13,admin13,ndate13,tsmoking,	
        tdrinking,tdrugss,adddate,addtime,diagnosis,brought,male1,dep,age1,sucide,alcohol,
        rational,`window`,organic,nosupport,chronic,pcheck,infotype,auth_id,time,date) 
       VALUES ( '$id','$img_url','$name','$email','$doctor','$address','$phone','$sex','$birthdate','$age','$bloodgroup','$ion_user_id',
       '$patient_id',
        '$add_date','$hospital_id','$access1','$access2','$access3','$site1','$site2','$site3','$solution1','$solution2','$solution3','$rate1',
        '$rate2','$rate3','$idate1','$idate2','$idate3','$assess','$explain','$whyadmited','$yourhopes','$alone','$withname','$withphone',
        '$transportation','$homehealth','$initiate','$agency','$snf','$rehab','$inpatient','$agency1','$oxygen','$equipment','$other',
        '$language',	
        '$securityNumber','$weight','$donor','$nprimary','$reason','$lastperiod','$mstatus','$occupation','$workphone','$insurance',
        '$ename','$erelation','$ephone','$allergies',
        '$current','$vaccination','$psychiatric','$mhistory','$abuse','$drinking','$smoking','$drugss','$hbtype',
        '$hbdate','$hbadmin','$hndate','$dtype','$ddate','$dadmin','$dndate','$intype',	
        '$indate','$inadmin','$inedate','$ptype','$pdate','$padmin','$pndate',
        '$potype','$podate','$poadmin','$pondate','$rtype',	
        '$rdate','$radmin','$rndate','$mrtype','$mrdate','$mradmin','$mrndate','$vctype','$vcdate','$vcadmin',
        '$vcndate','$hatype','$hadate','$haadmin','$handate','$type10','$date10','$admin10',
        '$ndate10','$type11','$date11',
        '$admin11','$ndate11','$type12','$date12','$admin12','$ndate12',
        '$type13','$date13','$admin13','$ndate13','$tsmoking',	
        '$tdrinking','$tdrugss','$adddate','$addtime','$diagnosis',
        '$brought','$male1','$dep','$age1','$sucide','$alcohol',
        '$rational','$window','$organic','$nosupport','$chronic','$pcheck','$infotype','$auth_id',
        '$time','$date')";
       

        $query = mysqli_query($con, $sql) or die("Failed to insert data into the database: " . mysqli_error($con));


        if ($query) {
            echo "<script>alert( add success)</script>";
            
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
        <h2>Patients</h2>
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
            <input type="text" name="img_url" id="" placeholder="enter img_url" required>
            <input type="text" name="name" id="" placeholder="enter name" required>
            <input type="email" name="email" id="" placeholder="enter email" required>
            </div>
            <div class="column">
            <input type="text" name="doctor" id="" placeholder="doctor" required>
            <input type="text" name="address" id="" placeholder="enter address" required>
            <input type="text" name="phone" id="" placeholder="enter phone" required>
            <input type="text" name="sex" id="" placeholder="enter sex" required>
            </div>
            <div class="column">
            <input type="date" name="birthdate" id="" placeholder="enter birthdate" required>
            <input type="text" name="age" id="" placeholder="enter age" required>
            <input type="text" name="bloodgroup" id="" placeholder="enter  bloodgroup" required>
            <input type="text" name="ion_user_id" id="" placeholder="enter ion_user_id">
            </div>
            <div class="column">
            <input type="text" name="patient_id" id="" placeholder="enter patient_id" required>
            <input type="datetime-local" name="add_date" id="" placeholder="enter add_date" required>
            <input type="text" name="hospital_id" id="" placeholder="enter hospital_id" required>
            <input type="text" name="access1" id="" placeholder="enter aaccess1">
            </div>
            <div class="column">
            <input type="text" name="access2" id="" placeholder="enter access2">
            <input type="text" name="access3" id="" placeholder="enter access3">
            <input type="text" name="site1" id="" placeholder="enter site1">
            <input type="text" name="site2" id="" placeholder="enter site2">
            </div>
            <div class="column">
            <input type="text" name="site3" id="" placeholder="enter site3">
            <input type="text" name="solution1" id="" placeholder="enter  solution1">
            <input type="text" name="solution2" id="" placeholder="enter solution2">
            <input type="text" name="solution3" id="" placeholder="enter solution3">
            </div>
            <div class="column">
            <input type="text" name="rate1" id="" placeholder="enter rate1">
            <input type="text" name="rate2" id="" placeholder="enter rate2">
            <input type="text" name="rate3" id="" placeholder="enter rate3">
            <input type="date" name="idate1" id="" placeholder="enter idate1" required>
            </div>
            <div class="column">
            <input type="date" name="idate2" id="" placeholder="enter idate2" required>
            <input type="date" name="idate3" id="" placeholder="enter idate3" required>
            <input type="text" name="assess" id="" placeholder="enter assess">
            <input type="text" name="explain" id="" placeholder="enter 	explain">
            </div>
            <div class="column">
            <input type="text" name="whyadmited" id="" placeholder="enter  	whyadmited">
            <input type="text" name="yourhopes" id="" placeholder="enter yourhopes">
            <input type="text" name="alone" id="" placeholder="enter alone">
            <input type="text" name="withname" id="" placeholder="enter withname">
            </div>
            <div class="column">
            <input type="text" name="withphone" id="" placeholder="enter withphone">
            <input type="text" name="transportation" id="" placeholder="enter transportation">
            <input type="text" name="homehealth" id="" placeholder="enter homehealth">
            <input type="text" name="initiate" id="" placeholder="enter initiate">
            </div>
            <div class="column">
            <input type="text" name="agency" id="" placeholder="enter agency">
            <input type="text" name="snf" id="" placeholder="entersnf">
            <input type="text" name="rehab" id="" placeholder="enter rehab">
            <input type="text" name="inpatient" id="" placeholder="enter  	inpatient">
            </div>
            <div class="column">
            <input type="text" name="agency1" id="" placeholder="enter agency1">
            <input type="text" name="oxygen" id="" placeholder="enter oxygen">
            <input type="text" name="equipment" id="" placeholder="enter 	equipment">
            <input type="text" name="other" id="" placeholder="enter 	other">
            </div>
            <div class="column">
            <input type="text" name="language" id="" placeholder="enter language">
            <input type="text" name="securityNumber" id="" placeholder="enter securityNumber">
            <input type="text" name="weight" id="" placeholder="enter weight">
            <input type="text" name="donor" id="" placeholder="enter donor">
            </div>
            <div class="column">
            <input type="text" name="nprimary" id="" placeholder="enter nprimary">
            <input type="text" name="reason" id="" placeholder="enter 	reason">
            <input type="text" name="lastperiod" id="" placeholder="enter  lastperiod">

            <input type="text" name="mstatus" id="" placeholder="enter  	mstatus">
            </div>
            <div class="column">
            <input type="text" name="occupation" id="" placeholder="enter occupation">
            <input type="text" name="workphone" id="" placeholder="enter 	workphone">
            <input type="text" name="insurance" id="" placeholder="enter 	insurance">
            <input type="text" name="ename" id="" placeholder="enter 		ename"> 
            </div>  
            <div class="column">
            <input type="text" name="erelation" id="" placeholder="enter erelation">
            <input type="text" name="ephone" id="" placeholder="enter 	ephone">
            <input type="text" name="allergies" id="" placeholder="enter allergies">
            <input type="text" name="current" id="" placeholder="enter current">
            </div>
            <div class="column">
            <input type="text" name="vaccination" id="" placeholder="enter 	vaccination">
            <input type="text" name="psychiatric" id="" placeholder="enter 	psychiatric">
            <input type="text" name="mhistory" id="" placeholder="enter  mhistory">
            <input type="text" name="abuse" id="" placeholder="enter 	abuse">
            </div>
            <div class="column">
            <input type="text" name="drinking" id="" placeholder="enter 	drinking">
            <input type="text" name="smoking" id="" placeholder="enter  	smoking">

            <input type="text" name="drugss" id="" placeholder="enter 	drugss">
            <input type="text" name="hbtype" id="" placeholder="hbtype">
            </div>
            <div class="column">
            <input type="date" name="hbdate" id="" placeholder="enter hbdate" required>
            <input type="text" name="hbadmin" id="" placeholder="enter 		hbadmin">
            <input type="date" name="hndate" id="" placeholder="enter 		hndate" required>
            <input type="text" name="dtype" id="" placeholder="enter 	dtype">
            </div>
            <div class="column">
            <input type="date" name="ddate" id="" placeholder="enter 	ddate" required>
            <input type="date" name="dadmin" id="" placeholder="enter 	dadmin">
            <input type="date" name="dndate" id="" placeholder="enter  dndate" required>
            <input type="text" name="intype" id="" placeholder="enter  intype">
            </div>
            <div class="column">
          <input type="date" name="indate" id="" placeholder="enter 	indate" required>
            <input type="text" name="inadmin" id="" placeholder="inadmin">
            <input type="date" name="inedate" id="" placeholder="enter inedate" required>
            <input type="text" name="ptype" id="" placeholder="enter 			ptype">
            </div>
            <div class="column">
            <input type="date" name="pdate" id="" placeholder="enter 		pdate" required>
            <input type="text" name="padmin" id="" placeholder="enter 	padmin">
            <input type="date" name="pndate" id="" placeholder="enter 	pndate" required>
            <input type="text" name="potype" id="" placeholder="enter 	potype">
            </div>
            <div class="column">
            <input type="date" name="podate" id="" placeholder="enter  podate" required>
            <input type="text" name="poadmin" id="" placeholder="enter  	poadmin">

             <input type="date" name="pondate" id="" placeholder="enter 		pondate" required>
            <input type="text" name="rtype" id="" placeholder="rtype">
            </div>
            <div class="column">
            <input type="date" name="rdate" id="" placeholder="enter rdate" required>
            <input type="text" name="radmin" id="" placeholder="enter 			radmin">
            <input type="date" name="rndate" id="" placeholder="enter 		rndate" required>
            <input type="text" name="mrtype" id="" placeholder="enter 	mrtype">
            </div>
            <div class="column">
            <input type="date" name="mrdate" id="" placeholder="enter 		mrdate" required>
            <input type="text" name="mradmin" id="" placeholder="enter 	mradmin">
            <input type="date" name="mrndate" id="" placeholder="enter  mrndate" required>
            <input type="text" name="vctype" id="" placeholder="enter  	vctype">
            </div>
            <div class="column">

             <input type="date" name="vcdate" id="" placeholder="enter 		vcdate" required>
            <input type="text" name="vcadmin" id="" placeholder="vcadmin">
            <input type="date" name="vcndate" id="" placeholder="enter 	vcndate" required>
            <input type="text" name="hatype" id="" placeholder="enter 			hatype">
            </div>
            <div class="column">
            <input type="date" name="hadate" id="" placeholder="enter 		hadate" required>
            <input type="text" name="haadmin" id="" placeholder="enter 	haadmin">
            <input type="date" name="handate" id="" placeholder="enter 		handate" required>
            <input type="text" name="type10" id="" placeholder="enter 		type10">
            </div>
            <div class="column">
            <input type="date" name="date10" id="" placeholder="enter  	date10" required>
            <input type="text" name="admin10" id="" placeholder="enter  admin10">

             <input type="date" name="ndate10" id="" placeholder="enter 		ndate10" required>
            <input type="text" name="type11" id="" placeholder="type11">
            </div>
            <div class="column">
            <input type="date" name="date11" id="" placeholder="enter 	date11" required>
            <input type="text" name="admin11" id="" placeholder="enter 			admin11">
            <input type="date" name="ndate11" id="" placeholder="enter 		ndate11" required>
            <input type="text" name="type12" id="" placeholder="enter 	type12">
            </div>
            <div class="column">
            <input type="date" name="date12" id="" placeholder="enter 		date12" required>
            <input type="text" name="admin12" id="" placeholder="enter 		admin12">
            <input type="date" name="ndate12" id="" placeholder="enter  	ndate12" required>
            <input type="text" name="type13" id="" placeholder="enter  type13">
            </div>
            <div class="column">

             <input type="date" name="date13" id="" placeholder="enter 		date13" required>
            <input type="text" name="admin13" id="" placeholder="	admin13">
            <input type="date" name="ndate13" id="" placeholder="enter 	ndate13" required>
            <input type="text" name="tsmoking" id="" placeholder="enter 			tsmoking">
            </div>
            <div class="column">
            <input type="text" name="tdrinking" id="" placeholder="enter 		tdrinking">
            <input type="text" name="tdrugss" id="" placeholder="enter 	tdrugss">
            <input type="date" name="adddate" id="" placeholder="enter 		adddate" required>
            <input type="datetime-local" name="addtime" id="" placeholder="enter 		addtime" required>
            </div>
            <div class="column">
            <input type="text" name="diagnosis" id="" placeholder="enter 		diagnosis">
            <input type="text" name="brought" id="" placeholder="enter  brought">

            <input type="text" name="male1" id="" placeholder="enter 		male1">
            <input type="text" name="dep" id="" placeholder="	dep">
            </div>
            <div class="column">
            <input type="text" name="age1" id="" placeholder="enter 	age1">
            <input type="text" name="sucide" id="" placeholder="enter 	sucide">
            <input type="text" name="alcohol" id="" placeholder="enter 	alcohol">
            <input type="text" name="rational" id="" placeholder="enter 	rational">
            </div>
            <div class="column">
            <input type="text" name="window" id="" placeholder="enter 		window">
            <input type="text" name="organic" id="" placeholder="enter 	organic">
            <input type="text" name="nosupport" id="" placeholder="enter 	nosupport">
            <input type="text" name="chronic" id="" placeholder="enter 	chronic">
            </div>
            <div class="column">
          

            <input type="text" name="pcheck" id="" placeholder="enter 		pcheck">
            <input type="text" name="infotype" id="" placeholder="enter 	infotype">
            <input type="number" name="auth_id" id="" placeholder="enter 	auth_id">
            </div>
            <div class="column">
            <input type="time" name="time" id="" placeholder="enter 	time" required>
            <input type="date" name="date" id="" placeholder="enter  date" required>
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
