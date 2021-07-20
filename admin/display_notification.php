<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<h2 style="color:maroon">All Notice</h2>

<table class="table table-bordered" style="border-color:maroon;">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice" style="color:maroon;text-align:center;">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th style="background-color:maroon;color:white;text-align:center;">Sr.No</th>
		<th style="background-color:maroon;color:white;text-align:center;">Subject</th>
		<th style="background-color:maroon;color:white;text-align:center;">Details</th>
		<th style="background-color:maroon;color:white;text-align:center;">User</th>
		<th style="background-color:maroon;color:white;text-align:center;">Date</th>
		<th style="background-color:maroon;color:white;text-align:center;">Delete</th>
		<th style="background-color:maroon;color:white;text-align:center;">Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['Date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>