<?php 
    session_start();
    if ($_SESSION['loggedIn'] === 'true'){
    $uname = $_SESSION['name'];
    include "db.php";
    // $conn = mysqli_connect("localhost", "root", "", "adminsys");
    if (isset($_POST['export'])){
        $strtDate = $_POST['strtDate'];
        $EnDate = $_POST['EnDate'];
        $sql = "SELECT * FROM appointments WHERE dateAdded BETWEEN '$strtDate' and '$EnDate'";
        $res = mysqli_query($conn, $sql);
        $html = "<table><tr><th>ID</th><th>Name</th><th>Email Address</th><th>Phone Number</th><th>Zip Code</th><th>AGE</th><th>Vehicle Make</th><th>Vehicle Model</th><th>Vehicle Year</th><th>Gender</th><th>Date</th><th>Time</th><th>Lead ID</th></tr>";
        while($row = mysqli_fetch_assoc($res)){
        $html.= '<tr><td>'.$row['id'].'</td><td>'.$row['full_name'].'</td><td>'.$row['email_address'].'</td><td>'.$row['phone_number'].'</td><td>'.$row['zip_code'].'</td><td>'.$row['age'].'</td><td>'.$row['vehicle_make'].'</td><td>'.$row['vehicle_model'].'</td><td>'.$row['vehicle_year'].'</td><td>'.$row['gender'].'</td><td>'.$row['dateAdded'].'</td><td>'.$row['timeAdded'].'</td><td>'.$row['leadiD'].'</td></tr>';
        }
    
        $html.='</table>';
        header('Content-Type:application/xls');
        header('Content-Disposition:attachment; filename=report.xls');
        echo $html;
        mysqli_close($conn);
        }
    }
    else {
        header("location:login.php");
    }
?>