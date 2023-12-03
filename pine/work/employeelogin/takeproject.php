 <!-- change -->

<?php
$user = 'root';
$pass = '';
$dbName = 'project';
$db = new mysqli('localhost', $user, $pass, $dbName) or die("Unable to connect");

session_start();
$a = $_POST["prochoice"];
$b = $_POST["proj_amt"];
$c = $_POST["time"];
$f = $_SESSION['email_id'];
$e = $_SESSION['name'];

$d = "SELECT employer_email FROM projects WHERE project_id='$a'";
$res = mysqli_query($db, $d);

if ($res !== false) {
    $row = mysqli_fetch_assoc($res);
    if ($row !== null) {
        $z = $row['employer_email'];

        $qwe = "INSERT INTO project_price (proj_id, employee_email, employee_name, proj_amount, submit_time, employer_email) VALUES ('$a', '$f', '$e', '$b', '$c', '$z')";


        if ($db->query($qwe) === TRUE) {
            header('location: thanks2.html');
            exit(); // Ensure script stops execution after the redirect
        } else {
            echo "Error inserting data into the database: " . $db->error;
        }
    } else {
        echo "No data found for project_id $a";
    }
} else {
    echo "Error querying the database: " . mysqli_error($db);
}

$db->close();
?>
