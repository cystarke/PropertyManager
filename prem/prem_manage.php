<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="topnav">
  <a id="home" href="index.php">Home</a>
  <a href="visualize.php" id="visualize">Summary</a>
  <a class="active" href="#" id="manage">Prem Manage</a>
  
</div>
<h2>Tabs</h2>
<p>Click on the x button in the top right corner to close the current tab:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Table View</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Map View</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Summary View</button>
</div>

<div id="London" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>London</h3>
	<table id="t01">
		<caption> Monthly Stipend </caption>
		  <tr>
		    <th>Firstname</th>
		    <th>Lastname</th>
		    <th>Age</th>
		  </tr>
		  <tr>
		    <td>Jill</td>
		    <td>Smith</td>
		    <td>50</td>
		  </tr>
		  <tr>
		    <td>Eve</td>
		    <td>Jackson</td>
		    <td>94</td>
		  </tr>
		  <tr>
		    <td>John</td>
		    <td>Doe</td>
		    <td>80</td>
		  </tr>
	</table>

	</div>

<div id="Paris" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php
include "footer.html";
?>
</body>
</html> 

