<!DOCTYPE HTML>
<html>  
<body>
صفحة العميل

<br><button onclick="getLocation()">Try It</button>
<p id="demo"></p>
<script>


var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}
</script>

<script src="webcam.js" type="text/javascript"></script>

<form action="<?php echo HtmlSpecialChars($_SERVER['PHP_SELF']);?>"
  method="post">
 <input type="text" name="myname" id="myname">
 <input type="submit" name="send" id="send">
 </form>
 <script type="text/javascript">

document.write( webcam.get_html(320, 240) ); 
</script>

</body>
</html>