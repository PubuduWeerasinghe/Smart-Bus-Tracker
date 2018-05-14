<?php 
require_once('inc/connect.php');
 ?>
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




</style> 
<body class="w3-text-grey w3-grey" >

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block   w3-teal w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="B.png" size="30px">
  <a href="B.php#arrival" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-bus w3-xxlarge"></i>
    <p>LOGIN</p>
  </a>
 
 
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-white w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">LOGIN</a>
   </div>
</div>

<!-- Page Content -->
<div class="w3-container w3-padding-32" id="main">
  <!-- Header/Home -->
  <header class="w3-display-container w3-padding-16 w3-center w3-light-grey" style="height:650px"; id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Smart Bus Tracker</span> </h1>

  

    <div class="w3-container">

    <form method="POST" action="index.php" >
        <div class="table-responsive " >  
    <table class="w3-table" >

          <tr>            
              <div class="col-sm-12">
            <div class="w3-container w3-large">
                  <label for="ex1">Username</label>
                  <input class="form-control" name="UserName" id="ex1" placeholder="Enter User Name" required>
                </div>
              </div>
          </td>
        </tr>
        <tr>
          <div class="w3-container w3-large w3-round-xlarge">         
              <div class="col-xs-12">
                  <label for="ex1">Password</label>
                  <input type="Password" class="form-control " name="Password" id="inputdefault" type="text" placeholder="Enter Password" required>
               </div>
             </div>   
        </tr>
          <tr>
          <td>  
            <div class="w3-container ">          
          <button type="submit" class="w3-button w3-teal w3-padding-large w3-round-xlarge btn-block" value="Submit" role="button"><i class="fa fa-bus" style="font-size:20px"></i>  Submit</button>       
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

 
</body>
</html>
