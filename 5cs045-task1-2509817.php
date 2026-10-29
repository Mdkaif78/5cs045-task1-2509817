<?php

$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

if ($dbHost === false || $dbUser === false || $dbPassword === false || $dbName === false) {
    http_response_code(500);
    exit("Database configuration is missing.");
}

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$sql = "SELECT * FROM movies";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>

<h2>Movie List</h2>

<table border="1">
<tr>
    <th>Movie Name</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Date of Release</th>
</tr>

<?php
while($row = $result->fetch_assoc())
{
    echo "<tr>";
    echo "<td>".$row['Movie_name']."</td>";
    echo "<td>".$row['genre']."</td>";
    echo "<td>£".$row['price']."</td>";
    echo "<td>".$row['date_of_release']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>