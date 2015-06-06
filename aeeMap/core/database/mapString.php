<?php
/** get database connection **/
require_once 'connectMap.php';

  if (isset($_GET["country_name"])) { 
  	$country_name = $_GET["country_name"];
	
	/** run prepare to select records **/	
	$stmt = $dbh->prepare("SELECT firstname, lastname, email, photo FROM reps WHERE country = :country_name");
	$stmt->bindParam(':country_name', $country_name, PDO::PARAM_STR);
	$stmt->execute();
		
	/** Values to fill up the form **/		
	$result = $stmt->fetch();  	
  	}
	
	/** create the array **/
	$json_data=array();
		 
/** Check if there is data, if not give default data **/		
	if(empty($result)) {
    	$json_data  = array( 	'firstname' => 'www.aeea.org',
	                     	'lastname' => '',
				'email' => 'africa@aeea.org',
				'photo' => '../images/Afrizone2.png');
						   
 	 	echo json_encode($json_data);
	 	return $json_data;	
  	} 
		  
	$json_data  = array	'firstname' => $result['firstname'],
	                     	 'lastname' => $result['lastname'],
				 'email' => $result['email'],					    
				 'photo' => base64_decode($result['photo']));	
						 						 
		/** built in PHP function to encode the data in to JSON format 	**/						 
	 	header('Content-Type: application/json');    
 	 	echo json_encode($json_data);
	 	return $json_data;
	 
	/*** close the database connection ***/
	$dbh = null;	
	
?>
