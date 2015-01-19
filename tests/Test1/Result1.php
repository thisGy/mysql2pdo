

$db = new PDO("mysql:host=localhost;dbname=testdb", "testusr", "secretpass");

$query = "SELECT * FROM foo WHERE bar = " . $db->quote($zip);

$result = $db->query($query);

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}

// Step 5: Free used resources
$result->closeCursor();
$db = null;