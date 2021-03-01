<?php
 $host_heroku = "ec2-54-242-43-231.compute-1.amazonaws.com";
$db_heroku = "ddlp9pmlqgflmt";
$user_heroku = "pumlbuetcvwepq";
$pw_heroku =
"577988a8b0e99d63a080ccb20a168958d09bc3098df69e48530c79bb3e95ad00";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop1 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://gnouhpatnshop.herokuapp.com/login1.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>
