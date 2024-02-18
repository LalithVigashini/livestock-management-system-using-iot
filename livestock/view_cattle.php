<?php include "header.php"; ?>
<div class="mail">
		<div class="container" style="overflow-x:auto;">
			<h3 class="head">View  cattle</h3>
			<p>&nbsp;</p>
			<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center;" width="100%">
          <tr><td>Tag No</td><td>Mother</td><td>Inseminator</td><td>Birth Date</td><td>Name</td><td>color</td><td>category</td><td>breed</td><td>Image</td><td>Health Report</td><td>Video</td><td>Price</td><td>Qty</td><td>Sales type</td></tr>
		  
		  
		  
		  
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
$himg=$w['himage'];
$ylink=$w['ylink'];
$tagno=$w['tagno'];
$inseminator=$w['inseminator'];
$mother=$w['mother'];
$birth_date=$w['birth_date'];

echo "<tr><td>$tagno</td><td>$inseminator</td><td>$mother</td><td>$birth_date</td><td>$pname</td><td>$color</td><td>$cat</td><td>$breed</td><td><img src='upload/$pimg' height='150px' /></td><td><img src='upload/$himg' height='150px' /></td><td>$price</td><td><iframe width='300' height='150' src='https://www.youtube.com/embed/$ylink' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></td><td>$qty</td><td>$stype</td></tr>";
				}
				?>
                </table>
		</div>
	</div>
	
			
<?php include "footer.php"; ?>


