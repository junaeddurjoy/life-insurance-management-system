<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	
	$username = $_SESSION["username"];
?>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    font-size: 30px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pending Request</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #2c4891;">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="clientHome.php">Laxmi Chit Fund</a>
            </div>
            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                
								  <?php
									
										echo "welcome, ".$_SESSION["username"];
									
								?>
								
                            <br />
                              
                            </div>

                        </div>

                    </li>   
                    <!-- <li>
                      <a href="clientInformation.php"><i class="fa fa-cube"></i>Client Information</a >  
                 </li>  -->
                    <li>
                      <a href="claim.php"><i class="fa fa-cube"></i>Claim</a >  
                 </li>
                 <li>
                      <a href="pendingRequest.php"><i class="fa fa-cube"></i>Pending Request</a >  
                 </li>
                 <li>
                      <a href="ClientPayment.php"><i class="fa fa-money"></i>Add Payment</a >  
                 </li>
                </ul>

            </div>
		

        </nav>
		 
		  
	
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="text-align: center;">You'r Request's</h1>
                    
                
                <!-- /. ROW  -->


<?php
include'connection.php';
    $username = $_SESSION["username"];
    $sql= mysqli_query($conn, "SELECT * FROM `aprove`WHERE cid='$username'") or die('query failed');
    if ($sql->num_rows > 0) {    
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Client ID</th>\n";
    echo "    <th>Status</th>\n";
    echo "  </tr>";
    
    
    // output data of each row
    while($row = $sql->fetch_assoc()) {
        
        echo "<tr>\n";
        echo "    <td>".'Dear '.$row["cid"]."</td>\n";
        echo "    <td>".$row["msg"].' and your requested id no '.$row["id"].' '.'<i class="fa fa-check" style="color:green;"></i>'."</td>\n";
    }
    
    echo "</table>\n";
    echo "\n";

}
$conn->close();
?>
<?php
include'connection.php';
    $username = $_SESSION["username"];
    $sql= mysqli_query($conn, "SELECT * FROM `claim`WHERE Client_id='$username'") or die('query failed');
    if ($sql->num_rows > 0) {    
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Client ID</th>\n";
    echo "    <th>Status</th>\n";
    echo "  </tr>";
    
    
    // output data of each row
    while($row = $sql->fetch_assoc()) {
        
        echo "<tr>\n";
        echo "    <td>".'Dear '.$row["Client_id"]."</td>\n";
        echo "    <td>". 'your request is pending.'."</td>\n";
    }
    
    echo "</table>\n";
    echo "\n";

}
$conn->close();
?>


        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</body>
</html>