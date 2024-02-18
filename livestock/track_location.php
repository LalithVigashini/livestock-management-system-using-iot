<?php include "header.php"; ?>
<div class="mail">
		<div class="container">
			<h3 class="head">Track Livestock Location</h3>


<style type="text/css">
#mapCanvas {
    width: 100%;
    height: 500px;
}
</style>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1PvbgTEUSyyCPKB_G8aEm62EF6t4H3HM&callback=initMap&sensor=false&libraries=places"  type="text/javascript"></script>

		  <script type="text/javascript">
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
     
	 
    // Multiple markers location, latitude, and longitude
    var markers = [
	 <?php
	 $w=1;
	 $n=mysql_query("select * from location");
		  $cnt=mysql_num_rows($n);
		  while($m=mysql_fetch_array($n))
		  {
$cname=$m['cattle'];

$lat=$m['late'];
$lon=$m['longe'];
$loc=$m['loc'];
?>  
        ['<?php echo "$loc"; ?>', <?php echo "$lat"; ?>, <?php echo "$lon"; ?>]
		<?php
		if($cnt>$w)
		{
		echo ",";
		}
		$w=$w+1;
		}
		?>
    ];

                        
    // Info window content
    var infoWindowContent = [
	<?php
		 $l=1;
		 $y=mysql_query("select * from location");
		  $cnt1=mysql_num_rows($y);
		  while($m=mysql_fetch_array($y))
		  {
$cname=$m['cattle'];

$lat=$m['late'];
$lon=$m['longe'];
$fdate=$m['ldatetime'];
$loc=$m['loc'];

?>
        ['<div class="info_content">' +
        '<h3><?php echo "$cname-$fdate"; ?></h3>' +
        '<p><?php echo "$loc"; ?></p>' + '</div>']
		<?php
		if($cnt1>$l)
		{
		echo ",";
		}
		$l=$l+1;
		}
		?>
    ];

    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(10);
        google.maps.event.removeListener(boundsListener);
    });
    
}
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>

<div id="mapCanvas"></div>

						
			<p>&nbsp;</p>

		</div>
	</div>

		
<?php include "footer.php"; ?>


