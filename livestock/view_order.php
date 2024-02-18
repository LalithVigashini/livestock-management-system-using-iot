<?php 
error_reporting(0);
include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">View  order</h3>
			<p>&nbsp;</p>
			<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center;" width="100%">
          <tr><td>User</td><td>Cattle</td><td>Image</td><td>Price</td><td>Qty</td><td>Total</td><td>Order date</td><td>Delivery date</td></tr>
          <?php
$uname=$_SESSION['uname'];
if($uname!='')
{
		$t=mysql_query("select * from corder where uname='$uname'");
}
else
{
		$t=mysql_query("select * from corder");
}

		while($w=mysql_fetch_array($t))
		{
$pid=$w['pid'];
$uname=$w['uname'];
$cnum=$w['cnum'];
$cvv=$w['cvv'];
$edate=$w['edate'];
$odate=$w['odate'];
$ddate=$w['ddate'];
$qty=$w['qty'];

$u=mysql_query("select * from product where pid='$pid'");
$k=mysql_fetch_array($u);
		
$pname=$k['pname'];
$price=$k['price'];
$pimg=$k['pimage'];
$total=$price*$qty;

echo "<tr><td>$uname</td><td>$pname</td><td><img src='upload/$pimg' height='200px' /></td><td>$price</td><td>$qty</td><td>$total</td><td>$odate</td><td>$ddate</td></tr>";
				}
				?>
                </table>
		</div>
	</div>
	
			
<?php include "footer.php"; ?>



