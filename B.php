<!DOCTYPE html>
<html>
<title>Smart Bus Tracker</title>

<link rel="stylesheet" href="CSS/A.css">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="CSS/A.css">

  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
input {
    width: 100%;
    height: 50px;

}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 20%;
}

td, th {
    
    text-align:center;
    padding: 10px;
    height: 10px;
  
}

a {
    color: black;
}


</style> 
<body class="w3-text-grey w3-grey" >




<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block   w3-teal w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="B.png" size="30px">
  <a href="Index.php#" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-home w3-xxlarge "></i>
    <p>HOME</p>
  </a>
  <a href="Index.php#about" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
 
  <a href="Index.php#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="B.php#available" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-bus w3-xxlarge"></i>
    <p>AVAILABLE BUSES</p>
  </a>
  <a href="B.php#arrival" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-bus w3-xxlarge"></i>
    <p>ARRIVAL TIME WITH CITIES</p>
  </a>
 
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-white w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    <a href="#available" class="w3-bar-item w3-button" style="width:25% !important">AVAILABLE BUSES</a>
     <a href="#arrivale" class="w3-bar-item w3-button" style="width:25% !important">ARRIVAL TIME WITH CITIES</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-container w3-padding-64" id="main">
    <header class="w3-display-container w3-padding-64 w3-center w3-light-grey" style="height:650px"; id="home"> 
<h1 class="w3-jumbo">Smart Bus Tracker</h1>

 <div class="w3-container">

    <form action="B.php#available"  method="POST">
        <div class="table-responsive " >  
    <table class="w3-table" >

          <tr>            
              <div class="col-sm-12">
            <div class="w3-container w3-large">
                  <label for="ex1">From</label>
                  <input class="form-control" name="from" id="ex1" placeholder="Pambahinna" disabled>
                </div>
              </div>
          </td>
        </tr>
        <tr>
          <div class="w3-container w3-large w3-round-xlarge">         
              <div class="col-sm-12">
                  <label for="ex1">To</label>
                  <input class="form-control " name="to" id="inputdefault" type="text" placeholder="Type Destination Place" required>
               </div>
             </div>   
        </tr>
          <tr>
          <td>  
            <div class="w3-container ">          
          <button type="submit" class="w3-button w3-teal w3-padding-large w3-round-xlarge btn-block" role="button"><i class="fa fa-bus" style="font-size:20px"></i>  Search a Bus</button> 

          </div>        
          </td>          
        </tr>
      </div>
</table> 
</div>
</form>
</div>
</div>


</header>
</div>
    <!-- Footer -->
  <!-- About Section -->
  <div class="w3-container  w3-padding-32" id="main">
  <header class="w3-display-container w3-padding-32 w3-center w3-grey" style="height:800px;" id="about">

    <br/><br> <div class="w3-container w3-text-teal "><h1 class="w3-jumbo"><span class="w3-hide-small"><b>Find available bus. Plan journey.  Reach Destination</b></span></h1></div>
	
      <br/><br>

   

   <h4  class="w3-text-black"> <p>


    We provide full-fledged online bus searching platform. The passenger can easily get to know about available buses as 
	their necessity within a minute.</p>
	
	<p>You can also enjoy the more facitilies with our mobile app.</p></h4>
	
    <h3 class="w3-padding-16 w3-text-black"><b>With the efficient bus tracking system from Smart Bus Tracker, plan your journey early, save your valuable time,
	avoid waiting in long queue, find to your destination easily and enjoy your journey.</b></h3>


	
<div class="container">  
<table>
	<tr>
		<td>
			          
  <img src="A.jpg" class="img-circle" alt="Cinque Ter" width="304" height="236"> 

		</td>

		<td>
		            
  <img src="B.jpg" class="img-circle" alt="Cinque Ter" width="304" height="236"> 

		</td>

		<td>
	            
  <img src="C.jpg" class="img-circle" alt="Cinque Trre" width="304" height="236"> 
		</td>
	</tr>
</table>
</div>
    </header>
   </div>
  <!-- Contact Section -->

  <div class="w3-container w3-padding-4" id="main">
  <header class="w3-display-container w3-padding-64 w3-center w3-grey" style="height:700px;" id="contact">

 <br><br> <h2 class="w3-xxlarge">Do you have any questions in using Smart Bus Tracker?<br>
  Please do not hesitate to contact us. We are happy to help you.</h2>

  
  <h4><p></p>
  <br></h4>
  <br><br>
  <div class="w3-padding-2">
 <h6 class="w3-large"> <b>Say hello to Us</b><br>
 (+94)71-5657333<br>
   <br><b>
   Email</b><br>
 smarttrack@gmail.com<br>
   <br><b>
 Review</b> us at Facebook
    <br><br><b>
  Address</b><br>
Smart bus Travker Pvt.Ltd,<br>No 33,<br>Pambahinna
  </h6>
</div>
   
  <div class="w3-content w3-padding-32 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="font-size:36px"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Smart Bus Tracker</a></p>
  <!-- End footer -->

</div>
</header>
</div>


<div class="w3-container" id="main">
<header class="w3-display-container w3-padding-64 w3-center w3-grey" style="height:800px;" id="available">

<h1 class="w3-jumbo"><span class="w3-hide-small">Smart Bus Tracker</span> </h1>
   
  <h2 class="w3-text-light-grey">Available Buses</h2>

<?php 
 
require_once('inc/connect.php');



$To=$_POST["to"];


if ($To=='Bandarawela'||$To=='Badulla'||$To=='Haputhale'||$To=='Haputale'||$To=='bandarawela'||$To=='badulla'||$To=='haputale'||$To=='haputhale') {

$query="SELECT BusRoute,BusId,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where  RouteDirection=2 AND City= 'Pambahinna'";

$result_set=mysqli_query($connection,$query);
}

elseif($To=='Pelmadulla'||$To=='Pelmadulla'||$To=='Rathnapura'||$To=='Ratnapura'||$To=='ratnapura'||$To=='rathnapura'||$To=='pelmadulla'||$To=='palmadulla'){
  
  $query="SELECT BusRoute,BusId,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where  (RouteDirection=1||RouteDirection=3) AND City= 'Pambahinna'";

$result_set=mysqli_query($connection,$query);

}

elseif($To=='Awissawella'||$To=='Colombo'||$To=='awissawella'||$To=='colombo'){
  $query="SELECT BusRoute,BusId,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where RouteDirection=1 AND City= 'Pambahinna'";

$result_set=mysqli_query($connection,$query);

}

elseif($To=='Horana'||$To=='Panadura'||$To=='horana'||$To=='panadura'){
  $query="SELECT BusRoute,BusId,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where RouteDirection=3 AND City= 'Pambahinna'";

$result_set=mysqli_query($connection,$query);

}

?>
         
 <div class="container">

<div class="table-responsive">          
  
<table  class="table table-hover table table-bordered w3-teal w3-text-black"> 
<thead>
<tr>
  <th>Bus No</th>
  <th>Bus Route</th>
  <th>Arrival Time to Pambahinna</th>
</tr>
</thead>


<?php 

while($record1=mysqli_fetch_assoc($result_set)){

 
  echo "<tbody><tr><td>"; 
  echo $record1['BusId'];
  echo "</td><td>";
  echo $record1['BusRoute'];
  echo "</td><td>";
  echo $record1['ArrivalTime'];
  echo "</td></tr></tbody>";
      
  }

 ?>

 </table>

<div class="w3-container ">  
 <a href="B.php#arrival">        
          <button type="submit" class="w3-button w3-teal w3-padding-large w3-round-xlarge btn-block" role="button"><i class="fa fa-clone" style="font-size:20px"></i> More Details</button> </a>     
          </div>        
         

</div>
</div>

 
</div>
<div>

 </header>
  </div>


<div class="w3-container" id="main">
<header class="w3-display-container w3-padding-64 w3-center w3-grey" style="height:800px;" id="arrival">

<h1 class="w3-jumbo"><span class="w3-hide-small">Smart Bus Tracker</span> </h1>
   
  <h2 class="w3-text-light-grey">Arrival Time</h2>
    

    <?php 
 
require_once('inc/connect.php');

$To=$_POST["to"];

if ($To=='Bandarawela'||$To=='Badulla'||$To=='Haputhale'||$To=='Haputale'||$To=='bandarawela'||$To=='badulla'||$To=='haputale'||$To=='haputhale') {

$query="SELECT BusId,City,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where  RouteDirection=2 ";

$result_set=mysqli_query($connection,$query);
}

elseif($To=='Pelmadulla'||$To=='pelmadulla'||$To=='Rathnapura'||$To=='Ratnapura'||$To=='ratnapura'||$To=='rathnapura'||$To=='pelmadulla'||$To=='palmadulla'||$To=='Palmadulla'){
  $query="SELECT BusId,City,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where  (RouteDirection=1||RouteDirection=3)";

$result_set=mysqli_query($connection,$query);

}

elseif($To=='Awissawella'||$To=='Colombo'||$To=='awissawella'||$To=='colombo'){
  $query="SELECT BusId,City,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where RouteDirection=1";

$result_set=mysqli_query($connection,$query);

}

elseif($To=='Horana'||$To=='Panadura'||$To=='horana'||$To=='panadura'){
  $query="SELECT BusId,City,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where RouteDirection=3";

$result_set=mysqli_query($connection,$query);

}

?>
<div class="container">

<div class="table-responsive">          
  
<table  class="table table-hover table table-bordered w3-teal w3-text-black"> 
<thead>
<tr>
  <th>BusI Id</th>
  <th>City</th>
  <th>Arrival Time</th>
</tr>
</thead>

<?php 

 
while($record=mysqli_fetch_assoc($result_set)){
  
  echo "<tbody><tr><td>";
  echo $record['BusId'];
  echo "</td><td>";
  echo $record['City'];
  echo "</td><td>";
  echo $record['ArrivalTime'];
  echo "</td></tr></tbody>";
      
  }

 ?>
 </table>
</div>
</div>

 </header>
  </div>





  <!-- End Contact Section -->
 
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Smart Bus Tracker</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
