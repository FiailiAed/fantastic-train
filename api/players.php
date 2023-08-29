<?php
// Get DB info from .env
$dbHost = $_ENV['DB_HOST']; // hostname
$dbUser = $_ENV['DB_USER']; // username
$dbPass = $_ENV['DB_PASS']; // password
$dbDatabase = $_ENV['DB_NAME']; // database name

// Connect to DB
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbDatabase);

// Check DB connection
if ($dbConn->connect_error) {
	die("Connection failed: " . $dbConn->connect_error);
}

$selectSql = "SELECT * FROM players";
$result = $dbConn->query($selectSql);

$resultArr = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$resultArr[] = $row;
	}
}

$tableHeaders = <<<HTML
<tr>
	<th>Name</th>
	<th>Position</th>
	<th>#</th>
	<th>Strong Hand</th>
	<th>Age</th>
	<th>Grage</th>
</tr>
HTML;

$tableRows = "";
foreach ($resultArr as $player) {
	$tableRows .= <<<HTML
<tr>
	<td>{$player['name']}</td>
	<td>{$player['position']}</td>
	<td>{$player['number']}</td>
	<td>{$player['strong_hand']}</td>
	<td>{$player['age']}</td>
	<td>{$player['grade']}</td>
</tr>
HTML;
}

$dbConn->close();

echo <<<HTML
<div class="text-center">
	<table>
		<thead>
			{$tableHeaders}
		</thead>
		<tbody>
			{$tableRows}
		</tbody>
	</table>
</div>
HTML;

?>
