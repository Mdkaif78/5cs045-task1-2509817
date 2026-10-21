<!doctype html>
<html lang="en">
<body>
<h1>List of ALL my games!!!</h1>
<?php
// Connect to database
include("db.php");
// Run SQL query
$sql = "SELECT * FROM videogames ORDER BY released_date";
$results = mysqli_query($mysqli, $sql);
?>
</body>
</html>