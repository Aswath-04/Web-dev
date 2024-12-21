<?php
$na=$_GET['name'];
$type=$_GET['sam'];
$connect=mysqli_connect("localhost","root","","gene");
$sql="Select * from gene_expression where gene_name like '%$na%' and sample_type like '%$type%'";
$query=mysqli_query($connect,$sql);
$n=mysqli_num_rows($query);
if ($n==0)
{
	echo "No records found";
}
else
{
  echo "Number of records found is $n";
echo "<table border=1>
<tr>
<td>Gene ID</td>
<td>Gene name</td>
<td>Expression level</td>
<td>Sample type</td>
<td>Experiment date</td>
</tr>";
}
while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
$n=$row['gene_name'];
$e=$row['expression_level'];
$s=$row['sample_type'];
$d=$row['experiment_date'];

echo "<tr>
<td>$id</td>
<td>$n</td>
<td>$e</td>
<td>$s</td>
<td>$d</td>
</tr>";
	
}
echo "</table>";
?>
