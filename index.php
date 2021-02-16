<!DOCTYPE html>
<html>
<head>

 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
  <title></title>
</head>
<body
>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
 
</head>

<body onload="startTime()">
<!DOCTYPE html>
<html>
<head>
<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

</html>
<body onload="startTime()">



  <img src="junaid.jpg"  style="width:100%">
  <div id="txt"></div>
  <h1>junaid</h1>
<div id="txt"></div>
 <a class="nav-link" href="location.html">lumhs colony,jamshoro</a>

 
  <a href="location.html"><i class="fa fa-map-marker" style="font-size:48px;color:red"></i></a>
  
  <a href="forecast.php"><i class="fas fa-map-marker-alt"></i></a>
 
  
</div>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div  class="elfsight-app-a9bbf40b-dca7-4a41-a211-9c7dc45882c5"></div>

<?php include('weather.html');?>


<?php include('location.html');?>

</body>
</html>