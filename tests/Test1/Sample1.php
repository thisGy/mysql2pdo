# THis is sample PHP file with various embedded mysql_ code in it.  Check out the results after running "Test1.php"

<?php
// Step 1: Establish a connection
$db = mysql_connect("localhost", "testusr", "secretpass");
mysql_select_db("testdb", $db);
 
// Step 2: Construct a query
$query = "SELECT * FROM foo WHERE bar = '" . mysql_real_escape_string($zip) . "'";
 
// Step 3: Send the query
$result = mysql_query($query, $db);
 
// Step 4: Iterate over the results
while($row = myql_fetch_assoc($result)) {
    print_r($row);
}
 
// Step 5: Free used resources
mysql_free_result($result);
mysql_close($db);
