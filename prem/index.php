
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Mkodi Property Manager</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h3>Property Summary</h3>
    <p>Some text..
    	<a href="visualize.php" ><img src="myimg.jpg" alt="Play"></a>
        Click
    </p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Mkodi</h2>
    <p>
    	<img src="myimg.jpg" alt="logo">
        <h4> Faulu Building Eldoret</h4>
        <a href="#" ><img src="myimg.jpg" alt="switch accounts"></a>
        <a href="#" ><img src="myimg.jpg" alt="View Summary"></a>
        
    </p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h3>Manager Features</h3>
    <p>Some text..
    	<a href="prem_manage.php" ><img src="myimg.jpg" alt="Play"></a>
        Click
    </p>
  </div>
</div>

</body>
</html>
<?php
include "footer.html";
?>
					  
