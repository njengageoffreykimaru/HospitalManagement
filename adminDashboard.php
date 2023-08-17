

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
     <!-- <link rel="stylesheet" href="testing.css"> -->
     <style>
       /* Navbar styling */
       .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
        .navbar a{
            color: aliceblue;
        }
       .sidebar {
            width: 10%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            padding: 5px 0;
            transition: color 0.3s ease;
        }

        .sidebar a:hover {
            color: #ff9900;
        }
        
     
        .dashboard {
            padding: 20px;
            display: flex;
            flex-direction:column;
            grid-template-columns: repeat(8, 1fr); /* 8 equal columns */
            gap: 10px; /*Gap between columns*/
            width: 100%;
      }  

        a{
            text-decoration: none;
            font-size: small;
        }
      

    .card {
        background-color: #f1f1f1;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%; /* Expand input to fill the column */
    }
     
        
        .card h3 {
            margin-top: 0;
            font-size: small;
        }
        
        .fa {
            color: rgb(11, 11, 11);
        }
        .sidebar ul {
            list-style: none;
            font-size: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .container {
            display: flex;
            align-items: flex-start;
        }
        /* .name{
            background-color: #333;
            
        }
        .name h2{
            color: #f1f1f1;
            
        } */
    </style>
   

</head>
<body>
    <header>
    <div class="navbar">
    
        <h1>Hospital Management System </h1>
       <h2>Admin Dashboard</h2>
        <!-- <h5>Logout </h5> -->
      <a href="logout1.php">Logout</a>
     

    </div>
    </header>
  
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
    <div class="dashboard">
        <div class="card">
            
            <i class="fa fa-money" aria-hidden="true"></i>
            <?php
            include_once('dbcon.php');
    // Assuming you have a database connection established

    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS accountants FROM accountant";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['accountants'];

        // Display the count in an HTML heading
        echo "<h3>accountants: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
  
?>

            
        </div>
        <div class="card">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
            <?php
 
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS allergy FROM allergy";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['allergy'];

        // Display the count in an HTML heading
        echo "<h3>Total : " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>
</a>

           
            
        </div>
        <div class="card">
            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
     include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS asssessmentcontinue FROM 	assessment_continue	";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['asssessmentcontinue'];

        // Display the count in an HTML heading
        echo "<h3> asssessmentcontinue " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>
</a>
           

           
        </div>
        <div class="card">
            <i class="fa fa-info" aria-hidden="true"></i>

            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS assessmentinfo FROM 	assessment_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['assessmentinfo'];

        // Display the count in an HTML heading
        echo "<h3>assessmentinfo : " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>

           
        </div>
        <div class="card">
            <i class="fa fa-comment" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS assesmentnotes FROM 	assessment_notes";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['assesmentnotes'];

        // Display the count in an HTML heading
        echo "<h3>assesmentnotes: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
        <div class="card">
            <i class="fa fa-university" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS bloodbank FROM 	bankb";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['bloodbank'];

        // Display the count in an HTML heading
        echo "<h3>bloodbank: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>

           
        </div>
        <div class="card">
            <i class="fa fa-bed" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS bed FROM 	bed";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['bed'];

        // Display the count in an HTML heading
        echo "<h3>bed: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-bed" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS bedcategory FROM 	bed_category";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['bedcategory'];

        // Display the count in an HTML heading
        echo "<h3>bedcategory: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>



        </div>
    </div>
    <div class="dashboard">
        <div class="card">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS cardiovascularinfo FROM cardiovascular_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['cardiovascularinfo'];

        // Display the count in an HTML heading
        echo "<h3>cardiovascular_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS casemanagement FROM 	case_management";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['casemanagement'];

        // Display the count in an HTML heading
        echo "<h3>casemanagement : " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">

            <i class="fa fa-comment-o" aria-hidden="true"></i>
   <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS chats FROM chat";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['chats'];

        // Display the count in an HTML heading
        echo "<h3>chats: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
           
            <i class="fa fa-outdent" aria-hidden="true"></i>
          <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');

    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS departments FROM `department`"; // Use backticks around the table name

    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['departments'];

        // Display the count in an HTML heading
        echo "<h3>departments: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection

?>



        </div>
        <div class="card">
            <i class="fa fa-medkit" aria-hidden="true"></i>
          <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS dischargeinfo FROM discharge_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['dischargeinfo'];

        // Display the count in an HTML heading
        echo "<h3>dischargeinfo: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS doctors FROM doctor";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['doctors'];

        // Display the count in an HTML heading
        echo "<h3>doctors: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-plus-square" aria-hidden="true"></i>

           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS donors FROM donor";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['donors'];

        // Display the count in an HTML heading
        echo "<h3>Total Rows: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


            
        </div>
        <div class="card">
            <i class="fa fa-eercast" aria-hidden="true"></i>
         <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS eentinfo FROM eent_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['eentinfo'];

        // Display the count in an HTML heading
        echo "<h3>eent_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-snowflake-o" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS elopments FROM 	elopment";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['elopments'];

        // Display the count in an HTML heading
        echo "<h3>elopments: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS eventss FROM 	events";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['eventss'];

        // Display the count in an HTML heading
        echo "<h3>eventss: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-recycle" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS expenses FROM 	expense";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['expenses'];

        // Display the count in an HTML heading
        echo "<h3>expenses: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-recycle" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS expensecategory FROM 	expense_category";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['expensecategory'];

        // Display the count in an HTML heading
        echo "<h3>expensecategory: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-window-close" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS fetalrisks FROM 	fetalrisk";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['fetalrisks'];

        // Display the count in an HTML heading
        echo "<h3>fetalrisks: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS flowcharts FROM 	flowchart";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['flowcharts'];

        // Display the count in an HTML heading
        echo "<h3>flowcharts: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-pinterest" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS gastrointestinalinfo FROM 	gastrointestinal_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['gastrointestinalinfo'];

        // Display the count in an HTML heading
        echo "<h3>gastrointestinalinfo: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>



        </div>
        <div class="card">
            <i class="fa fa-superpowers" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
     // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS genitourinaryinfo FROM 	genitourinary_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['genitourinaryinfo'];

        // Display the count in an HTML heading
        echo "<h3>genitourinaryinfo: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-object-group" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');

    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS agroups FROM `groups`"; // Use backticks around the table name

    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['agroups'];

        // Display the count in an HTML heading
        echo "<h3> Groups: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection

?>



           
        </div>
        <div class="card">
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS hospitals FROM 	hospital";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['hospitals'];

        // Display the count in an HTML heading
        echo "<h3>Hospitals: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


           
        </div>
        <div class="card">
            <i class="fa fa-camera" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS imagings  FROM 	imaging";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['imagings'];

        // Display the count in an HTML heading
        echo "<h3>imagings: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
        <div class="card">
            <i class="fa fa-flask" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS laboratorists FROM 	laboratorist";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['laboratorists'];

        // Display the count in an HTML heading
        echo "<h3>laboratorist: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-flask" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS lab FROM 	labs";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['lab'];

        // Display the count in an HTML heading
        echo "<h3>lab: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS loginattempts FROM 	login_attempts";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['loginattempts'];

        // Display the count in an HTML heading
        echo "<h3>loginattempts: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


           
        </div>
        <div class="card">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS medications FROM 		medication";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['medications'];

        // Display the count in an HTML heading
        echo "<h3>medications: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>

           
        </div>
        <div class="card">

            <i class="fa fa-user-md" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS medicines FROM medicine";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['medicines'];

        // Display the count in an HTML heading
        echo "<h3>medicines: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS medicinecategory FROM medicine_category";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['medicinecategory'];

        // Display the count in an HTML heading
        echo "<h3>medicinecategory: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-user-md" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS medicinedatas FROM 	medicinedata";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['medicinedatas'];

        // Display the count in an HTML heading
        echo "<h3>medicinedatas: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>



            
        </div>
        <div class="card">
            <i class="fa fa-stethoscope" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS neurologicinfo FROM 	neurologic_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['neurologicinfo'];

        // Display the count in an HTML heading
        echo "<h3>neurologicinfo: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-stethoscope" ari a-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS neurologics FROM 	neurologic";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['neurologics'];

        // Display the count in an HTML heading
        echo "<h3>neurologics: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS notes_info FROM notes_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['notes_info'];

        // Display the count in an HTML heading
        echo "<h3>notes_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


          
        </div>
        <div class="card">
            <i class="fa fa-stethoscope" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS nurses FROM nurse";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['nurses'];

        // Display the count in an HTML heading
        echo "<h3>nurses: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS painassessment FROM 	pain_assessment";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['painassessment'];

        // Display the count in an HTML heading
        echo "<h3>pain_assessment: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
        <div class="card">
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS patients FROM patient";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['patients'];

        // Display the count in an HTML heading
        echo "<h3>patients : " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


            
        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS payments FROM 	payment";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['payments'];

        // Display the count in an HTML heading
        echo "<h3>payments: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established

    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS paymentcategory FROM 	payment_category";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['paymentcategory'];

        // Display the count in an HTML heading
        echo "<h3>payment_category: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>



        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS pharmacists FROM pharmacist";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['pharmacists'];

        // Display the count in an HTML heading
        echo "<h3>pharmacist: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-tasks" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS physicianorders FROM physician_orders";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['physicianorders'];

        // Display the count in an HTML heading
        echo "<h3>physician_orders: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS problemsinfo FROM 	problems_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['problemsinfo'];

        // Display the count in an HTML heading
        echo "<h3>problems_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>


        </div>
        <div class="card">
            <i class="fa fa-reddit-square" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS pulmonaryinfo FROM pulmonary_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['pulmonaryinfo'];

        // Display the count in an HTML heading
        echo "<h3>pulmonary_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>



        </div>
        <div class="card">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS readinessinfo FROM 	readiness_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['readinessinfo'];

        // Display the count in an HTML heading
        echo "<h3>readiness_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
    
?>



        </div>
        <div class="card">
            <i class="fa fa-stethoscope" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS reports  FROM 	report";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['reports'];

        // Display the count in an HTML heading
        echo "<h3>report: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-ravelry" aria-hidden="true"></i>
          <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS respiratorys FROM 	respiratory";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['respiratorys'];

        // Display the count in an HTML heading
        echo "<h3>respiratory: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


            
        </div>
        <div class="card">
            <i class="fa fa-cog" aria-hidden="true"></i>
          <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS resuscitations FROM resuscitation";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['resuscitations'];

        // Display the count in an HTML heading
        echo "<h3>resuscitations: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

?>


        </div>
        <div class="card">
            <i class="fa fa-stethoscope" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS revisedflowchart FROM revised_flowchart";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['revisedflowchart'];

        // Display the count in an HTML heading
        echo "<h3>revised_flowchart: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS revisedphysician FROM 	revised_physician";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['revisedphysician'];

        // Display the count in an HTML heading
        echo "<h3>Total Rows: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection

?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS total_rows FROM accountant";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['total_rows'];

        // Display the count in an HTML heading
        echo "<h3>Total Rows: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS total_rows FROM 	settings";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['total_rows'];

        // Display the count in an HTML heading
        echo "<h3>Total Rows: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>



        </div>
        <div class="card">
           <i class="fa fa-users" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS total_rows FROM 	alloted_bed";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['total_rows'];

        // Display the count in an HTML heading
        echo "<h3>Total Rows: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS skin_assessment FROM 	skinassessment";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['skin_assessment'];

        // Display the count in an HTML heading
        echo "<h3>skin_assessment: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
    </div>
    <div class="dashboard">
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS skininfo FROM 	skin_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['skininfo'];

        // Display the count in an HTML heading
        echo "<h3>skin_inf: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS therapynotes FROM 	therapy_notes";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['therapynotes'];

        // Display the count in an HTML heading
        echo "<h3>therapy_notes: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS user FROM users";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['user'];

        // Display the count in an HTML heading
        echo "<h3>users: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS usersgroups FROM 	users_groups";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['usersgroups'];

        // Display the count in an HTML heading
        echo "<h3>users_groups: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS vascularinfo FROM 	vascular_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['vascularinfo'];

        // Display the count in an HTML heading
        echo "<h3>vascular_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS vitalsigns FROM 	vital_signs";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['vitalsigns'];

        // Display the count in an HTML heading
        echo "<h3>vital_signs: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

    // Close the database connection
   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS wounddescriptioninfo FROM 	wounddescription_info";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['wounddescriptioninfo'];

        // Display the count in an HTML heading
        echo "<h3>wounddescription_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
           <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS musculoskeletalinfo FROM musculoskeletal_info	";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['musculoskeletalinfo'];

        // Display the count in an HTML heading
        echo "<h3>musculoskeletal_info: " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
        <div class="card">
            <i class="fa fa-users" aria-hidden="true"></i>
            <?php
    // Assuming you have a database connection established
    include_once('dbcon.php');
    // Execute the SQL query to count the rows
    $query = "SELECT COUNT(*) AS revisedrespiratory FROM revised_respiratory ";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row from the result set
        $row = mysqli_fetch_assoc($result);

        // Access the count value
        $totalRows = $row['revisedrespiratory'];

        // Display the count in an HTML heading
        echo "<h3>revised_respiratory : " . $totalRows . "</h3>";
    } else {
        // Handle the case where the query fails
        echo "Error executing the query: " . mysqli_error($con);
    }

   
?>


        </div>
    </div>
    </div>
<div class="footer">
    <p>Contact: info@example.com | Phone: (123) 456-7890</p>
    <p>&copy; 2023 Hospital Management System. All rights reserved.</p>
</div>
</body>
</html>
