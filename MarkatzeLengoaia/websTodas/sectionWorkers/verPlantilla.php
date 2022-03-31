<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pruebagarage1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM worker";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><p align = center>View garage's Staff</p>";
    echo "<table border='1' align=center>
        <tr>
            <th>Worker_ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Password</th>
            <th>Occupation</th>
            <th>Mail</th>
            <th>Phone_Number</th>
            <th>Salary</th>
            <th>Start_time</th>
            <th>Finish_time</th>
        </tr>";

    while($row = $result->fetch_assoc()) {
        //echo "<br> id: ". $row["Worker_ID"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        
        echo "<tr>";
        echo "<td>" . $row['Worker_ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Occupation'] . "</td>";
        echo "<td>" . $row['Mail'] . "</td>";
        echo "<td>" . $row['Phone_Number'] . "</td>";
        echo "<td>" . $row['Salary'] . "</td>";
        echo "<td>" . $row['Start_time'] . "</td>";
        echo "<td>" . $row['Finish_time'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<br><br><hr>";

$conn->close();
?>

</body>
</html>