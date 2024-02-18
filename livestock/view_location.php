<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">View Livestock Location</h3>
			<div id="map" style="width: 100%; height: 300px;"></div>  
			<p id="1demo"></p>
<script>
var x = document.getElementById("1demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    /*x.innerHTML = "Latitude: <input type='text' id='late' value="+ position.coords.latitude +">" + position.coords.latitude + 
    "<br>Longitude: <input type='text' id='longe' value="+ position.coords.longitude +">" + position.coords.longitude;*/
	
	 x.innerHTML ="<input type='hidden' id='late' value="+ position.coords.latitude +"> <input type='hidden' id='longe' value="+ position.coords.longitude +">";
}


function callgmap() {


var x = document.getElementById("1demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    /*x.innerHTML = "Latitude: <input type='text' id='late' value="+ position.coords.latitude +">" + position.coords.latitude + 
    "<br>Longitude: <input type='text' id='longe' value="+ position.coords.longitude +">" + position.coords.longitude;*/
	
	 x.innerHTML ="<input type='hidden' id='late' name='late' value="+ position.coords.latitude +"> <input type='hidden' id='longe' name='longe' value="+ position.coords.longitude +">";

document.getElementById('late1').value=position.coords.latitude;
document.getElementById('longe1').value=position.coords.longitude;
}




var late=document.getElementById('late').value;
var longe=document.getElementById('longe').value;

document.getElementById('late1').value=late;
document.getElementById('longe1').value=longe;


   var latlng = new google.maps.LatLng(late,longe);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
    });

    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: false,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();   
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="iw_container"></div>';
      // including content to the infowindow
      infowindow.setContent(iwContent);
      // opening the infowindow in the current map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', callgmap);


</script>


<form class="login" role="form" method="post" action="">

				
				<div class="form-group">
								<input type="button" onclick="callgmap()" value="Show livestock location" />
							</div>
							
							<div class="form-group">
								<label>Cattle</label>
								<select name='cattle' class="form-control">
								<option value=''>Select cattle</option>
								 <?php
		$t=mysql_query("select * from product");
		while($w=mysql_fetch_array($t))
		{
$pname=$w['pname'];
$pid=$w['pid'];
echo "<option value='$pid-$pname'>$pid-$pname</option>";
		}
		?>
								</select>

							</div>
							
							<div class="form-group">
								<label>Location</label>
								<input type='text' id='loc' name='loc' value="" class="form-control" >
							</div>
							
							<div class="form-group">
								<label>Latitude</label>
								<input type='text' id='late1' name='late1' value="" class="form-control" >
							</div>
							
							<div class="form-group">
								<label>Longitude</label>
								<input type='text' id='longe1' name='longe1' value="" class="form-control" >
							</div>
							
														
							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						
						
			<p>&nbsp;</p>

		</div>
	</div>

<?php
if(isset($_POST['submit']))
{
$late=$_POST['late1'];
$longe=$_POST['longe1'];
$cattle=$_POST['cattle'];
$loc=$_POST['loc'];

$ldatetime=date("Y-m-d H:i:s");
mysql_query("insert into location(late,longe,cattle,ldatetime,loc)values('$late','$longe','$cattle','$ldatetime','$loc')")or die(mysql_error());
}
?>	
			
<?php include "footer.php"; ?>


