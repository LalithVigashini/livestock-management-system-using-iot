<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">Add  cattle</h3>
			<div class="agile_mail_grids">
				<div class="agile_mail_grid">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-6 agile_mail_grid_left">
						Tag No <input type="text" name="tagno" placeholder="Tag No" required="">
Inseminator  <input type="text" name="inseminator" placeholder="Inseminator" required="">
												
						Name <input type="text" name="name" placeholder="Name" required="">
							Color <input type="text" name="color" placeholder="color" required="">
							Category <input type="text" name="category" placeholder="category" required="">
							
						</div>
						<div class="col-md-6 agile_mail_grid_left">
						Mother  <input type="text" name="mother" placeholder="Mother" required="">
						Birth Date  <input type="date" name="birth_date" value="<?php echo date('Y-d-m'); ?>" required="">
							Breed <input type="text" name="breed" placeholder="breed" required="">
							Price <input type="text" name="price" placeholder="price" required="">
							Sale type <input type="text" name="stype" placeholder="" required="" value="commercial">
						</div>
						<p>&nbsp;&nbsp;</p>
						<div class="col-md-6 agile_mail_grid_left">
						Quantity <input type="text" name="qty" placeholder="Quantity" required="">
						</div>
						
						<div class="col-md-6 agile_mail_grid_left">
						Image <input type="file" name="pimg" placeholder="" required="">
						</div>
						
						<div class="col-md-6 agile_mail_grid_left">
						Health Report<input type="file" name="himg" placeholder="" required="">
						</div>
						
						<div class="col-md-6 agile_mail_grid_left">
						Youtube link <input type="text" name="ylink" placeholder="Youtube link" required="">
						</div>
						
						<div class="clearfix"> </div>
						
						<input type="submit" value="Add cattle" name="submit">
					</form>
				</div>
			</div>
			
		</div>
	</div>
	
	<?php
if(isset($_POST['submit']))
{
$pname=$_POST['name'];
$color=$_POST['color'];
$category=$_POST['category'];
$price=$_POST['price'];
$breed=$_POST['breed'];
$addr=$_POST['addr'];
$qty=$_POST['qty'];
$stype=$_POST['stype'];
$ylink=$_POST['ylink'];
$pimage=$_FILES['pimg']['name'];
$himage=$_FILES['himg']['name'];

mysql_query("insert into product(pname,cat,breed,color,price,pimage,qty,stype,himage,ylink)values('$pname','$category','$breed','$color','$price','$pimage','$qty','$stype','$himage','$ylink')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
move_uploaded_file($_FILES['himg']['tmp_name'],"upload/$himage");

echo "<script type='text/javascript'>alert('Product added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=admindashboard.php">';

}
?>  			
<?php include "footer.php"; ?>


