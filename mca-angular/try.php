<?php
include('database.php');
$result = mysqli_query($conn," SELECT joblist.Job_Name FROM joblist, register WHERE register.email = :email AND joblisst.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Education = register.education AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp ORDER BY joblist.Job_Name LIMIT 2");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Job Name</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Job_Name"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>