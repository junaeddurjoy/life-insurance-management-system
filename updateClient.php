<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
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

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
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
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Client</title>
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
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Client
						<button class="btn" align="center"> 
                        <a href="client.php" class="btn">Client List</a>
                        </button>
						</h1>
                    
                
				
				
<?php
$client_id = $client_password = $name = $sex = $birth_date = $marital_status = $nid = $phone = $address = $policy_id="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$client_id       = $_POST["client_id"];
		$client_password = $_POST["client_password"];
		$name            = $_POST["name"];
		$sex             = $_POST["sex"];
		$birth_date      = $_POST["birth_date"];
		$marital_status  = $_POST["marital_status"];
		$nid             = $_POST["nid"];
		$phone           = $_POST["phone"];
		$address         = $_POST["address"];
		$policy_id       = $_POST["policy_id"];
		
		if(isset($_POST['submit'])){
		
			$sql = "UPDATE client set client_id='$client_id' ,client_password='$client_password',name='$name' ,sex='$sex',birth_date='$birth_date',marital_status='$marital_status',nid='$nid',phone='$phone',address='$address',policy_id='$policy_id' where client_id='$client_id'";
		
		if ($conn->query($sql) === true) {
			echo "Client record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		}else {
			
			$sql = "UPDATE client set client_id='$client_id' ,client_password='$client_password' ,name='$name' ,sex='$sex',birth_date='$birth_date',marital_status='$marital_status',nid='$nid',phone='$phone',address='$address',policy_id='$policy_id',agent_id='$agent_id' where client_id='$client_id'";
		
		if ($conn->query($sql) === true) {
			echo "Client record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}	
		}
        
	
		
		
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->

		

    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
