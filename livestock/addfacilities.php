<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">Add facilities</h3>
			<div class="agile_mail_grids">
				<div class="agile_mail_grid">
			<form action="" method="post">
						<div class="col-md-6 agile_mail_grid_left">
							Doctor Name <input type="text" name="fname" placeholder="Name" required="">
							Clinic name  <input type="text" name="cname" placeholder="Clinic name" required="">
							Qualification  <input type="text" name="qualification" placeholder="Qualification" required="">
							Phone <input type="text" name="phone" placeholder="Phone" required="">
							
						</div>
						<div class="col-md-6 agile_mail_grid_left">
							Experience <input type="text" name="exp" placeholder="Experience" required="">
							Specialization<input type="text" name="specialization" placeholder="Specialization" required="">
							Address<input type="text" name="addr" placeholder="Address" required="">
							Email<input type="email" name="email" placeholder="Email" required="">
													</div>
						
						
						<div class="clearfix"> </div>
						
						<input type="submit" value="Add facilities" name="submit">
					</form>	</div>
			</div>
			
		</div>
	</div>
	

	<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$cname=$_POST['cname'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$qualification=$_POST['qualification'];
$exp=$_POST['exp'];
$specialization=$_POST['specialization'];



$q=mysql_query("select * from  facilities where fname='$fname' and cname='$cname'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Facilities account already exists');</script>";
}
else
{
mysql_query("insert into facilities(fname,phone,email,cname,exp,addr,qualification,specialization)values('$fname','$phone','$email','$cname','$exp','$addr','$qualification','$specialization')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Facilities registered successfully');</script>";
}
}
?>  			
<?php include "footer.php"; ?>

