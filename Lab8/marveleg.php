<?php
include("connection.php");
define('DB_SERVER', 'CSDM-WEBDEV');
define('DB_USERNAME', '1808957');
define('DB_PASSWORD', '1808957');
define('DB_DATABASE', 'marvelmovies');
$db = mysqli_connect(CSDM-WEBDEV,1808957,1808957,marvelmovies);

$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p>” . $row[superheroName] . “</p>";
}

$result->close();
$db->close();

?>