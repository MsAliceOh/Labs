<?php
define('DB_SERVER', 'CSDM-WEBDEV');
define('DB_USERNAME', '1808957');
define('DB_PASSWORD', '1808957');
define('DB_DATABASE', 'marvelmovies');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//if ($db->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}
//else {echo "Connection okay";}

$sql = "SELECT title FROM marvelmovies";
$result = mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "title: " . $row["title"] . "<br>";
    }
}
    else {
        echo "There are none";
}

mysqli_close($db);
?>