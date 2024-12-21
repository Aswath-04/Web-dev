<?php
$se=$_GET['seq'];
$or=$_GET['org'];
$connect=mysqli_connect("localhost","root","","dna");
$sql="Select * from dna_experiments where dna_sequence like '%$se%' and organism='$or'";
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
<td>ID</td>
<td>Experiment ID</td>
<td>DNA Sequence</td>
<td>Organism</td>
<td>Sequence length</td>
<td>Experiment date</td>
</tr>";
}
while($row=mysqli_fetch_array($query))
{
	$i=$row['id'];
	$e=$row['experiment_id'];
	$d=$row['dna_sequence'];
	$o=$row['organism'];
	$l=$row['sequence_length'];
	$ed=$row['experiment_date'];
	
	echo "<tr>
<td>$i</td>
<td>$e</td>
<td>$d</td>
<td>$o</td>
<td>$l</td>
<td>$ed</td>
</tr>";
}
echo "</table>";

?>
