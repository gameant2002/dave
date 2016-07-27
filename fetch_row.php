<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "123456";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
?>

<?php
//mysql_close($connection) or die("Could not close connection to database");
?>

<?php
mysql_select_db("book", $connection) or die("Could not select database");
$result = mysql_query("select * from booklist") or die("Could not issue MySQL query");

$return_arr=array();
//$row=mysql_fetch_row($result);
while ($row=mysql_fetch_row($result)) {

//echo "r0=".$row[0];
//echo "r1=".$row[1];
//echo "r2=".$row[2];
//echo "\n";
array_push($return_arr,$row);

}
echo json_encode($return_arr);
?>



