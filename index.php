<?php
    require_once 'includes/header.php';
?>

<form action="addAddress.php" method="post">
    <div>
        <label for="address">Address:</label>
    </div>
    <div>
        <input id="address" name="address" placeholder="enter address...">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>

<div id="map"></div>

<script>
    const objArray = <?php echo json_encode($address->getAddresses()); ?>;

    console.log(objArray);
    function initMap() {
        const location = {lat: 43.906745, lng: -78.952235};
        const geocoder = new google.maps.Geocoder();
        const map = new google.maps.Map(document.getElementById('map'),{
            zoom: 10,
            center: location
        });

    objArray.forEach(function(address){
        let options = {
          address: address['address'],
            componentRestrictions: { country: 'CA' }
        };
        geocoder.geocode(options, function(results, status){
           if(status === 'OK'){
               let marker = new google.maps.Marker({
                  map: map,
                   position: results[0].geometry.location
               });

               console.log(results[0].geometry.location);
           }else{
               alert('Geocode was not successful for the following reason: ' + status);
           }
        });

        });

    }
</script>
<?php
    require_once 'includes/footer.php';
?>
