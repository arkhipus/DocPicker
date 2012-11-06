<?php
// put your code here
?>
<script language="JavaScript">
    $(document).ready(function() {
        initialize();
        
        $('#search').click(function() {
            //alert($('#address').val() + ":" + $('#dist').val());
            codeAddress();
        });
    });
    
    var geocoder;
    //var map;
   
    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var mapOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        //map = new google.maps.Map($('#map_canvas'), mapOptions);
    }

    function codeAddress() {
        var address = $('#address').val();
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                //map.setCenter(results[0].geometry.location);
                
                alert(results[0].geometry.location);
                
                //var marker = new google.maps.Marker({
                //    map: map,
                //    position: results[0].geometry.location
                //});
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>
<form>
    <div id="container">
        <div>
            <label for="address"><span>Address:</span></label>
            <input name="address" type="text" id="address" />
        </div>
        <div>
            <label for="dist"><span>Distance in miles:</span></label>
            <select name="dist" id="dist">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>30</option> 
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div>
            <input type="button" value="Search" id="search" name="search" />
        </div>
        <div id="msg" name="msg"></div>
    </div>
</form>
