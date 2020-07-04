<link rel="stylesheet" href="style.css">

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
// echo "Table has records";

?>

<table>
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Class</th>
<th colspan="2">Operations</th>
</tr>


<?php 

while($result = mysqli_fetch_assoc($data))
{
echo "<tr>
<td>".$result['rollno']."</td>
<td>".$result['name']."</td>
<td>".$result['class']."</td>
<td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
<td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</a></td>
</tr>";
}
}
else
{
echo "No Record found";
}

?>
</table>
<br/><br/>
<a href="http://localhost/PHP-CRUD/insert.php">Click Here to Insert New Records</a>
<script>
function checkdelete()
{
return confirm('Are you sure you want to delete this data?');
}
</script>