<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">User Login</h3>
			<div class="agile_mail_grids">
				<div class="agile_mail_grid">
					<form action="" method="post">
						<div class="col-md-6 agile_mail_grid_left">
							Username <input type="text" name="uname" placeholder="Username" required="">
						</div>
						<div class="col-md-6 agile_mail_grid_left">
							Password <input type="password" name="upass" placeholder="Password" required="">
						</div>
						
						
						<div class="clearfix"> </div>
						
						<input type="submit" value="Login" name="submit">
					</form>
				</div>
			</div>
			
		</div>
	</div>
	
				</section>
 <?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$q=mysql_query("select * from user where stname='$uname' and stpass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['stid']=$stid=$r['stid'];
$_SESSION['uname']=$uname=$r['stname'];
echo '<meta http-equiv="refresh" content="0;url=shop.php">';
echo "<script type='text/javascript'>alert('Login successfull');</script>";
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}
}
?>     		
<?php include "footer.php"; ?>


