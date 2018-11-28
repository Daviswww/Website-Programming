<html>
<head>
<title> Access the Stock table in MySQL </title>
</head>
<body>
<?php
$db = mysqli_connect("localhost", "web", "web123", "database");
if(!$db)
{
	print"Error - Could not connect to MySQL";
	exit;
}
$operation = $_POST['query'];
$ticker = $_POST['ticker'];
$company = $_POST['company'];
$price = $_POST['price'];

if($operation == 'Add')
{
	if($ticker != "" && $company != "" && $price != "")
	{
		$query = "insert into stock values ('$ticker', '$company', '$price')";
	}
}
else if ($operation == 'Delete' && $ticker != "")
{
	$query = "delete from stock where ticker = '$ticker'";
}
else if ($operation == 'Search')
{
	$query = "select * from stock where price < '$price'";
}
else if($operation == 'List')
{
	$query = "select * from stock";
}
$result = mysqli_query($db, $query);
if(!$result)
{
	print("DELEEEEEEE");
	print "Error - the query could mot be executed";
	$error = mysqli_error();
	print "<p>". $error . "</p>";
	exit;
}
if($operation == 'Add')
{
	print "$ticker, $company, $price is added.";
	exit;
}
if($operation == 'Delete')
{
	print "$ticker is delete.";
	exit;
}
// Display the results in a table

print "<table border = '1'><caption> <h2> Query Results </h2> </caption>";
print "<tr align = 'center'>";

// Get the number of rows in the result, as well as the first row
//  and the number of fields in the rows

$num_rows = mysqli_num_rows($result);
$num_fields = mysqli_num_fields($result);

// Produce the column labels

print "<tr>";
for ($i = 0; $i < $num_fields; $i++) {
  $meta = mysqli_fetch_field($result);
  print "<th>" . $meta->name .  "</th>";
}
print "</tr>";

// Output the values of the fields in the row

for ($row_num = 0; $row_num < $num_rows; $row_num++) {
    $row = mysqli_fetch_row($result);
    print "<tr align = 'center'>";
    for ($field_num = 0; $field_num < $num_fields; $field_num++)
        print "<td>  $row[$field_num] </td> ";

    print "</tr>";
}
print "</table>";
?>
</body>
</html>