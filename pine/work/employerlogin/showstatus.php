<html>
<body bgcolor="white" alink="white" vlink="white" link="white">
<style>
a {
     text-decoration: none ;
  }
a:hover
  {
    color:white;
    text-decoration:none;
    cursor:pointer;
   }
   th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5}
th {
    background-color: #4CAF50;
    color: white;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}

</style>
<div style="overflow-x:auto;">


<?php
$user = 'root';
$pass = '';
$db_name = 'project';
$db = new mysqli('localhost', $user, $pass, $db_name) or die("Unable to connect");
session_start();
$j = $_SESSION['email_id'];
$k = $_POST['proid'];

// First query
$query1 = "SELECT * FROM project_price WHERE proj_id=? AND employer_email=? ORDER BY proj_amount";
$stmt1 = $db->prepare($query1);
$stmt1->bind_param("ss", $k, $j);
$stmt1->execute();
$result1 = $stmt1->get_result();

echo "<font face='Calibri Light' size=5>For Those Who Demand The Least<br><br><table border=0 style='width:100%'><tr><th></th><th>Name of Professional</th><th>Email</th><th>Project Price Amount</th><th>Submission Time</th></tr>";

while ($row = $result1->fetch_assoc()) {
    echo "<tr><td>" . $row['pp_id'] . "</td><td>" . $row['employee_name'] . "</td><td>" . $row['employee_email'] . "</td><td>" . $row['proj_amount'] . "</td><td>" . $row['submit_time'] . "</td></tr>";
}

echo "</table><br><br>";

// Second query
$query2 = "SELECT * FROM project_price WHERE proj_id=? AND employer_email=? ORDER BY submit_time";
$stmt2 = $db->prepare($query2);
$stmt2->bind_param("ss", $k, $j);
$stmt2->execute();
$result2 = $stmt2->get_result();

echo "For those Who deliver the earliest<br><br><table border=0 style='width:100%'><tr><th></th><th>Name of Professional</th><th>Email</th><th>Project Price Amount</th><th>Submission Time</th></tr>";

while ($row = $result2->fetch_assoc()) {
    echo "<tr><td>" . $row['pp_id'] . "</td><td>" . $row['employee_name'] . "</td><td>" . $row['employee_email'] . "</td><td>" . $row['proj_amount'] . "</td><td>" . $row['submit_time'] . "</td></tr>";
}

echo "</table><br><br><center>Email Your Offer Letter To the suitable professional For your Project<br><br></center>";

$db->close();
?>

</div>
<a href="http://localhost/pine/work/employerlogin/employermain.html" target="_top">
  <center>

<button class="button button1"><font size=5 color="black" face="Calibri Light">Go To My Profile</font></button>
  </center>
</a>
</body>
</html>
