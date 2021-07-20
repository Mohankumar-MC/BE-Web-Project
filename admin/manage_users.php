<?php 
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<h2 style="color:maroon">All Users</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th style="background-color:maroon;color:white;text-align:center;">Sr.No</th>
		<th style="background-color:maroon;color:white;text-align:center;">User Name</th>
		<th style="background-color:maroon;color:white;text-align:center;">Email</th>
		<th style="background-color:maroon;color:white;text-align:center;">Mobile</th>
		<th style="background-color:maroon;color:white;text-align:center;">Gender</th>
		<th style="background-color:maroon;color:white;text-align:center;">Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>