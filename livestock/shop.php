<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">Buy  cattle</h3>
			<p>&nbsp;</p>
			<form name="" action="" method="post">
			<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center;" width="100%">
          <tr><td>Name</td><td>color</td><td>category</td><td>breed</td><td>Image</td><td>Price</td><td>Qty</td><td>Sales type</td></tr>
          <?php
		$t=mysql_query("select * from product");
		while($w=mysql_fetch_array($t))
		{
$pname=$w['pname'];
$color=$w['color'];
$cat=$w['cat'];
$price=$w['price'];
$breed=$w['breed'];
$qty=$w['qty'];
$stype=$w['stype'];
$pimg=$w['pimage'];
$pid=$w['pid'];
echo "<tr><td><input type='radio' name='pid' value='$pid' />$pname</td><td>$color</td><td>$cat</td><td>$breed</td><td><img src='upload/$pimg' height='200px' /></td><td>$price</td><td>$qty</td><td>$stype</td></tr>";
				}
				?>
                </table>
				<div class="cl">&nbsp;</div>
				<div class="cl">&nbsp;</div>
				<div class="agile_mail_grid">
				<div class="col-md-6 agile_mail_grid_left">
							Quantity <input type="text" name="qty" placeholder="Quantity" required=""><br><br>
							
							Payment Type<br>
							<input type="radio" name="ptype" value="credit" />Credit Card<br>
							<input type="radio" name="ptype" value="debit" />Debit Card<br><br>
							Card Number<br>
							<input type="text" name="cnum" placeholder="card number" required="">
							Expiry date<br>
							<input type="text" name="edate" placeholder="Expiry date" required="" value="">
							CVV number<br>
							<input type="text" name="cvv" placeholder="cvv number" required="">
							
						</div>
						<!--<div class="col-md-6 agile_mail_grid_left">
							<input type="text" name="edate" placeholder="Expiry date" required="" value="">
							<input type="text" name="cvv" placeholder="cvv number" required="">
						</div-->
						
						<div class="clearfix"> </div>
						
						<input type="submit" value="Buy cattle" name="submit">
					</div>
				</form>
		</div>
	</div>
<?php
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$cnum=$_POST['cnum'];
$cvv=$_POST['cvv'];
$edate=$_POST['edate'];
$qty=$_POST['qty'];
$odate=date("Y-m-d");
$ddate=date('Y-m-d', strtotime($odate. ' + 3 days'));
$uname=$_SESSION['uname'];

$t=mysql_query("select * from product where pid='$pid'");
$w=mysql_fetch_array($t);

$price=$w['price'];

$oqty=$w['qty'];

$total=$price*$qty;

mysql_query("update product set qty=oqty-1 where pid='$pid'");

mysql_query("insert into corder(uname,pid,cnum,cvv,edate,qty,odate,total,ddate)values('$uname','$pid','$cnum','$cvv','$edate','$qty','$odate','$total','$ddate')");
echo "<script type='text/javascript'>alert('Order has been placed successfull');</script>";
}
?>	
			
<?php include "footer.php"; ?>


