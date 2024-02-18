<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">View facilities</h3>
			<p>&nbsp;</p>
			<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center;" width="100%">
          <tr><td>Doctor Name</td><td>Clinic Name</td><td>Qualification</td><td>Experience</td><td>Specialization</td><td>Phone</td><td>Email</td><td>Address</td></tr>
          <?php
		$t=mysql_query("select * from facilities");
		while($w=mysql_fetch_array($t))
		{
$fname=$w['fname'];
$cname=$w['cname'];
$phone=$w['phone'];
$email=$w['email'];
$addr=$w['addr'];
$qualification=$w['qualification'];
$exp=$w['exp'];
$specialization=$w['specialization'];
echo "<tr><td>$fname</td><td>$cname</td><td>$qualification</td><td>$exp</td><td>$specialization</td><td>$phone</td><td>$email</td><td>$addr</td></tr>";
				}
				?>
                </table>
		</div>
	</div>
	
			
<?php include "footer.php"; ?>


