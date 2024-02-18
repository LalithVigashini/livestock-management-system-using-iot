<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">View  user</h3>
			<p>&nbsp;</p>
			<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center;" width="100%">
          <tr><td>Name</td><td>Phone</td><td>Email</td><td>Address</td></tr>
          <?php
		$t=mysql_query("select * from user");
		while($w=mysql_fetch_array($t))
		{
$fname=$w['stfname'];
$phone=$w['stphone'];
$email=$w['stemail'];
$addr=$w['addr'];
echo "<tr><td>$fname</td><td>$phone</td><td>$email</td><td>$addr</td></tr>";
				}
				?>
                </table>
		</div>
	</div>
	
			
<?php include "footer.php"; ?>


